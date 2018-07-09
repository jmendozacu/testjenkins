#!/bin/bash

##### Variable Intialization
curInstanceId=`wget -q -O - http://169.254.169.254/latest/meta-data/instance-id`
region=`wget -q -O - http://169.254.169.254/latest/meta-data/placement/availability-zone | rev |cut -c 2- |rev`
autoscalingGrp=`aws autoscaling describe-tags  --region $region --output text |grep "Northgate-website" |awk '{print $4}' |tail -1`
autoscalingInstanceId=`/usr/bin/aws autoscaling describe-auto-scaling-groups --auto-scaling-group-names $autoscalingGrp --query 'AutoScalingGroups[].Instances[].InstanceId' --output text --region $region | awk '{print $1}'`

backup_dir="/mnt/MySqlDumps"
if [ -d $backup_dir ]; then
    echo "Directory Present"
else
    mkdir $backup_dir
fi

user="wbergerstage"
password="fydgfdsgfsdjkg"
s3Bucket="backup-wberger/mysqlbkp"
rdsHost="wmgyfteu808au4.cmxvcatg08jr.eu-west-1.rds.amazonaws.com"
now=$(date +"%d-%m-%Y")
tar_dir=$now.tar.gz

if [ $curInstanceId == $autoscalingInstanceId ]; then
    ##### Backup Activity Started
    all_dbs="$(mysql -u $user -p$password -h $rdsHost -Bse 'show databases' |grep -v 'information_schema\|performance_schema')"
    mkdir $backup_dir/$now
    for db in $all_dbs
    do
        echo $db
        if test $db != "information_schema"
            then  mysqldump -h $rdsHost -u $user  -p$password --routines $db > $backup_dir/$now/$db.sql
        fi
    done

    ##### Compressing the Backup File and sending it to AWS S3 Bucket
    cd $backup_dir
    store=`du -sh $now/*.sql`
    tar -czf $tar_dir $now
    aws s3 cp $tar_dir s3://$s3Bucket/
    DBsize=$(du -sh $now.tar.gz )

    ##### Deletion of Older Backups
    rm -r $now
    DAYS_KEEP=10
    find ${backup_dir}* -mtime +$DAYS_KEEP -exec rm -f {} \; 2> /dev/null

    ##### Mail the details of the backup
    TO="server.alerts@happiestminds.com";

    echo -e  "$store

    Thanks & Regards
    System Admin Team
    Happiestminds" | mailx -s "WGStage New databases Backup has been Completed Successfully!" $TO
else
        echo "Instance-IDs are not matched, not executing CRON job"
fi
