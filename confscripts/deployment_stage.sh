#!/bin/bash
# Author: Yatin Gupta

echo "**********DEPLOYMENT SCRIPT STARTED************"
echo "Moving inside code"
currDir=`pwd`
projectDir="/var/www/html"
apacheDir="/etc/httpd/conf"
env="stage"
timestamp=`date "+%d%m%y%H%M%S"`
echo "current directory: ${currDir}"
echo "Copying configurations to right place"
mv ${projectDir}/var/config/system.php ${projectDir}/var/config/system.php.bak${timestamp}
mv conffiles/system.php.${env} ${projectDir}/var/config/system.php
rm -f ${projectDir}/var/config/system.php.bak${timestamp}
mv ${apacheDir}/httpd.conf ${apacheDir}/httpd.conf.bak${timestamp}
mv conffiles/httpd.conf.${env} ${apacheDir}/httpd.conf
rm -f ${apacheDir}/httpd.conf.bak${timestamp}
mv ${projectDir}/web/.htaccess ${projectDir}/web/.htaccess.bak${timestamp} 
mv conffiles/.htaccess.${env} ${projectDir}/web
rm -f ${projectDir}/web/.htaccess.bak${timestamp}
mv ${projectDir}/composer.json ${projectDir}/composer.json.bak${timestamp}
mv conffiles/composer.json ${projectDir}
rm -f ${projectDir}/composer.json.bak${timestamp}
echo "Restarting Apache"
service httpd restart
echo "Copying app folder...."
rm -rf ${projectDir}/app
mv app ${projectDir}
echo "Copying src folder...."
rm -rf ${projectDir}/src
mv src ${projectDir}
echo "Copying pimcore folder...."
rm -rf ${projectDir}/pimcore
mv pimcore ${projectDir}
echo "Copying bin folder...."
rm -rf ${projectDir}/bin
mv bin ${projectDir}
echo "Copying composer.json folder...."
rm -f ${projectDir}/composer.json
mv composer.json ${projectDir}
echo "Unlinking classes"
unlink ${projectDir}/var/classes
echo "Copying var/classes folder...."
rm -rf /efs/var/classes
mv var/classes /efs/var
echo "Linking var/classes"
cd ${projectDir}/var
ln -s /efs/var/classes
cd $currDir
echo "Copying var excluding classes folder...."
declare -a var_files=(`ls var`)
for i in "${var_files[@]}"
do
if [ "$i" != "classes" ]
then
   rm -rf ${projectDir}/var/$i
   mv var/$i ${projectDir}/var 
fi
done
echo "Copying web excluding var folder...."
declare -a web_files=(`ls web`)
for i in "${web_files[@]}"
do
if [ "$i" != "var" ]
then
   rm -rf ${projectDir}/web/$i
   mv web/$i ${projectDir}/web 
fi
done
echo "Copying vendor..."
rm -rf ${projectDir}/vendor
mv vendor ${projectDir}

echo "Runnning permissions..."
chown -R apache.apache ${projectDir}
chown -R apache.apache ${projectDir}/var/config/system.php
chmod -R 775 ${projectDir}
chmod -R 775 ${projectDir}/var/config/system.php

echo "Clearing Pimcore cache..."
cd ${projectDir}
sudo -u apache php bin/console cache:clear
sudo -u apache php bin/console cache:warmup

echo "Rebuilding Classes..."
sudo -u apache php bin/console pimcore:deployment:classes-rebuild
sudo -u apache php bin/console assets:install --symlink web
