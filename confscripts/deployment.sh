#!/bin/bash
# Author: Yatin Gupta

echo "**********DEPLOYMENT SCRIPT STARTED************"
echo "Copying app folder...."
mv /opt/buildcode/app /var/www/html
echo "Copying src folder...."
mv /opt/buildcode/src /var/www/html
echo "Copying pimcore folder...."
mv /opt/buildcode/pimcore /var/www/html
echo "Copying bin folder...."
mv /opt/buildcode/bin /var/www/html/
echo "Copying composer.json folder...."
mv /opt/buildcode/composer.json /var/www/html
echo "Copying var/classes folder...."
mv /opt/buildcode/var/classes /efs/var/classes
echo "Copying var excluding classes folder...."
declare -a var_files=(`ls /opt/buildcode/var`)
for i in "${var_files[@]}"
do
if [ "$i" != "classes" ]
then
   mv /opt/buildcode/var/$i /var/www/html/var 
fi
done
echo "Copying web excluding var folder...."
declare -a web_files=(`ls /opt/buildcode/web`)
for i in "${web_files[@]}"
do
if [ "$i" != "var" ]
then
   mv /opt/buildcode/web/$i /var/www/html/web 
fi
done
echo "Running composer update in project root"
cd /var/www/html
echo "Copying vendor..."
mv /opt/buildcode/vendor /var/www/html

echo "Runnning permissions..."
cd /var/www
chown -R jenkinsuser.jenkinsuser html
chmod -R 775 html

echo "Clearing Pimcore cache..."
cd /var/www/html
sudo -u jenkinsuser php bin/console cache:clear
sudo -u jenkinsuser php bin/console cache:warmup

echo "Rebuilding Classes..."
sudo -u jenkinsuser php bin/console pimcore:deployment:classes-rebuild
sudo -u jenkinsuser php bin/console assets:install --symlink web
