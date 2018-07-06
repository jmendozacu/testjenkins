#!/bin/bash

scriptsDir="/home/ec2-user/Scripts"
s3bucket="packages-wberger"
if [[  -d  $scriptsDir ]]; then
        echo "Script directory exists"
else
        mkdir -p $scriptsDir
        if [ $? -eq 0 ]; then
                cd $scriptsDir
                aws s3 cp  s3://$s3bucket/Scripts/ /home/ec2-user/Scripts --recursive

                instanceIp=`/opt/aws/bin/ec2-metadata/ec2-metadata --local-ipv4 | awk '{print $2}'`
                instanceId=`wget -q -O - http://169.254.169.254/latest/meta-data/instance-id`
                availabilityZone=`wget -q -O - http://169.254.169.254/latest/meta-data/placement/availability-zone`
                region=`echo $availabilityZone | rev | cut -c 2- | rev`
                instanceName=`aws ec2 describe-instances --output table --query "Reservations[].Instances[].[Tags[?Key=='Name'] | [0].Value, State.Name, InstanceId]" --region $region |grep $instanceId |awk -F "|" '{print $2}'|sed 's/ //g'`
                machineName=$instanceName-$instanceIp

                sed -i '/MACHINENAME/d' $scriptsDir/checks_configuration
                sed -i '/REGION/d' $scriptsDir/checks_configuration
                sed -i '/EMAIL=/d' $scriptsDir/checks_configuration
                echo "MACHINENAME=$machineName" >> $scriptsDir/checks_configuration
                echo "REGION=$region" >> /$scriptsDir/checks_configuration
                echo "EMAIL=server.alerts@happiestminds.com" >>$scriptsDir/checks_configuration
				chmod a+x /home/ec2-user/Scripts/*.sh
        
                     
        fi
fi
/etc/init.d/httpd restart
chmod a+x /opt/mysql-backup.sh
chmod a+x /opt/efs-backup.sh