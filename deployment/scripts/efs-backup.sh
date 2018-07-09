#!/bin/bash

##### Variable Intialization
curInstanceId=`wget -q -O - http://169.254.169.254/latest/meta-data/instance-id`
region=`wget -q -O - http://169.254.169.254/latest/meta-data/placement/availability-zone | rev |cut -c 2- |rev`
autoscalingGrp=`aws autoscaling describe-tags  --region eu-west-1 --output text |grep "wbergerstage" |awk '{print $4}' |tail -1`
autoscalingInstanceId=`/usr/bin/aws autoscaling describe-auto-scaling-groups --auto-scaling-group-names $autoscalingGrp --query 'AutoScalingGroups[].Instances[].InstanceId' --output text --region $region | awk '{print $1}'`

backupFolder="storage"
tarName="storage-latest"
lastDate=`date -d "1 day ago" +%d%m%Y`
efsBucket="backup-wberger/efsbkp"


if [ $curInstanceId == $autoscalingInstanceId ]
then
        cd /efs
        tar -czf $tarName.tar.gz $backupFolder
        aws s3 mv s3://$efsBucket/$tarName.tar.gz s3://$efsBucket/$backupFolder-$lastDate.tar.gz
        aws s3 cp $tarName.tar.gz s3://$efsBucket/$tarName.tar.gz

        fileSize=`du -sh $tarName.tar.gz | awk '{print $1}'`

        TO="server.alerts@happiestminds.com";

        echo -e  "
        $fileSize-------------------------------------$tarName.tar.gz

        Thanks & Regards
        System Admin Team
        Happiestminds" | mailx -s "Production EFS Backup has been completed for New-WBStage" $TO

else
        echo "Instance-IDs are not matched, not executing CRON job"
fi
