#!bin/bash
##### Variable Initialization

dateMonth=`date -d "1 day ago"  +%b`
dateDay=`date -d "1 day ago" +%e`
dateYear=`date -d "1 day ago" +%Y`
lastDate=`date -d "1 day ago" +%d%b%Y`
IP=`wget -q -O - http://169.254.169.254/latest/meta-data/local-ipv4`
machineName=`cat /home/ec2-user/Scripts/checks_configuration | grep "MACHINENAME" | cut -d "=" -f2`
tarName=userComm-$lastDate
commDirectory=/var/log/users_history/
commDirectoryMail=/tmp/commLog
mkdir $commDirectoryMail

##### Logged in users with their session time in Hours with their source IPs

echo "Duration of each Logged in User" > /tmp/log
`ac -p -d| sed -n -e "/$dateMonth\s$dateDay/,/Today/p" >> /tmp/log`

echo "Source IP of each Logged in User" >> /tmp/log
`last | grep -v "wtmp" | grep "$dateMonth\s$dateDay" |awk '{print $1,$3}' >> /tmp/log`

##### Check if User Command Logging is enabled

bashStatus=`cat /root/.bashrc | grep -o "HISTFILE"`

if [ -z $bashStatus ];then
        cp /var/www/html/.eb-benstalk/templates/bashrc.config /home/ec2-user/
        if [ ! -d $commDirectory ]; then
                mkdir -p $commDirectory
                cat /home/ec2-user/bashrc.config  >>  /root/.bashrc
        fi
        source /root/.bashrc
fi
##### Track user executed commands

cd $commDirectory
fileList=`ls | grep -v "gz"`

for file in ${fileList[@]}
do
        cp $file $file.log
        epochTimes=`sed -n 1~2p $file.log  | cut -d "#" -f2`
        for epochTime in ${epochTimes[@]}
        do
                convertedTime=`date -d @$epochTime`
                sed -i "s/$epochTime/$convertedTime/g" $file.log
        done
        cp $file.log $commDirectoryMail
        tar -cvzf $file.gz $file
        rm -r $file.log
        rm -r $file
done

##### Sending Logs to the Team and installing Mailing command

cd /tmp/
tar -cvzf $tarName.tar.gz commLog
mailList="vijay.khowal@happiestminds.com, rony.felix@happiestminds.com";
echo "PFA UserCommands File" >> /tmp/log
mailx -s "userCommands of the Server $machineName"  -a $tarName.tar.gz  "$mailList" < /tmp/log
rm -rf $commDirectoryMail
rm -rf /home/ec2-user/bashrc.config