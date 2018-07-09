#!/bin/bash

if [ ! -d "/home/ec2-user/imagemagick" ]; then 
rpm -e php71-pecl-imagick-3.4.2-1.4.amzn1.x86_64
yum install libjpeg-turbo-utils libjpeg-turbo-devel -y 
yum install libtiff-devel libpng-devel freetype-devel -y 
mkdir /home/ec2-user/imagemagick 
cd /home/ec2-user/imagemagick 
#wget ftp://ftp.imagemagick.org/pub/ImageMagick/ImageMagick.tar.gz 
aws s3 cp s3://packages-wberger/ImageMagick.tar.gz . 
tar -xvzf ImageMagick.tar.gz 
 cd ImageMagick-7.0.3-9/ 
./configure --enable-shared 
 make 
 make install 
 /usr/local/bin/identify -version 
printf "/usr/local" |pecl7 install imagick 
printf "no" |pecl7 install redis
fi 

# install PHP redis extension
yum install php71-pecl-redis.x86_64 -y
# install PHP ldap extension
yum install php71-ldap.x86_64 -y

cd /var/www/html/
sudo -u webapp php bin/console cache:clear
sudo -u webapp php bin/console cache:warmup
sudo -u webapp php bin/console pimcore:deployment:classes-rebuild
sudo -u webapp php bin/console assets:install --symlink web
sudo -u webapp php bin/console pimcore:bundle:install AlternateObjectTreesBundle > /dev/null 2>&1 || echo "Fail to run pimcore:bundle:install AlternateObjectTreesBundle"


/etc/init.d/httpd stop
/etc/init.d/httpd start
