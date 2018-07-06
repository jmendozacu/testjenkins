#!/bin/bash 
cd  /var/www/html/var
#linking var directory with efs storage directory
#linking /var/www/html/var/* files
ln -s /efs/storage/var/classes classes
ln -s /efs/storage/var/config config
ln -s /efs/storage/var/sessions sessions
ln -s /efs/storage/var/versions versions

#linking /var/www/html/web/var directory with efs storage directory
cd  /var/www/html/web/
ln -s /efs/storage/web-var var

cd /var/www/html/var
# removing exisisting configuration

rm -rf classes/customlayouts
rm -rf classes/def*
rm -rf classes/objectbricks
rm -rf classes/fieldcollections
rm -rf classes/DataObject
rm -rf config/*
cd /var/www/html
if [ -d "jenkins/classes/customlayouts" ]
then
cp -r jenkins/classes/customlayouts var/classes
fi
cp -r jenkins/classes/def* var/classes
if [ -d "jenkins/classes/objectbricks" ]
then
cp -r jenkins/classes/objectbricks var/classes
fi
if [ -d "jenkins/classes/fieldcollections" ]
then
cp -r jenkins/classes/fieldcollections var/classes
fi
if [ -d "jenkins/classes/DataObject" ]
then
cp -r jenkins/classes/DataObject var/classes
fi
if [ -d "jenkins/config" ]
then
cp -r jenkins/config/* var/config
fi
rm -rf jenkins

