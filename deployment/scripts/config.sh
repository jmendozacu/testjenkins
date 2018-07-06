#!/bin/bash
env=`/opt/elasticbeanstalk/bin/get-config environment |tr -s "," "\n" |grep "Server_Env" |cut -d ":" -f2 |sed 's/\"//g'`
if [ $env == "Stage" ];then
mv ../templates/httpd.conf.stage /etc/httpd/conf/httpd.conf
mv ../templates/php.conf.stage /etc/httpd/conf.d/php.conf
mv ../templates/mod_reqtimeout.stage /etc/httpd/conf.d/mod_reqtimeout.conf
mv ../templates/crontab.stage.txt /tmp/crontab.txt
mv ../templates/php.ini.stage /etc/php.ini
mv ../templates/system.php.stage /var/www/html/var/config/system.php
mv ../templates/customviews.php.stage /var/www/html/var/config/customviews.php
mv ../templates/extensions.php.stage /var/www/html/var/config/extensions.php
mv ../templates/perspectives.php.stage /var/www/html/var/config/perspectives.php
mv ../templates/predefined-properties.php.stage /var/www/html/var/config/predefined-properties.php
mv ../templates/web2print.php.stage /var/www/html/var/config/web2print.php
mv ../templates/config.stage.yml /var/www/html/app/config/config.yml
mv ../templates/parameters.stage.yml /var/www/html/app/config/parameters.yml
mv ../templates/composer.json /var/www/html/composer.json
mv ../templates/htaccess.stage /var/www/html/web/.htaccess
mv ../templates/audit.stage /etc/logrotate.d/audit
mv ../templates/httpd.stage /etc/logrotate.d/httpd
mv ../templates/syslog.stage /etc/logrotate.d/syslog
crontab -u root -l > /tmp/root_crontab_back.`date +"%Y-%m-%d_%H.%M"`
crontab -u root -r
dos2unix /tmp/crontab.txt
crontab -u root /tmp/crontab.txt

fi

if [ $env == "Production" ];then
mv /var/www/html/.eb-benstalk/templates/httpd.conf.prod /etc/httpd/conf/httpd.conf
mv /var/www/html/.eb-benstalk/templates/php.conf.stage /etc/httpd/conf.d/php.conf
mv /var/www/html/.eb-benstalk/templates/mod_reqtimeout.prod /etc/httpd/conf.d/mod_reqtimeout.conf
mv /var/www/html/.eb-benstalk/templates/crontab.prod.txt /tmp/crontab.txt
mv /var/www/html/.eb-benstalk/templates/php.ini.prod /etc/php.ini
mv /var/www/html/.eb-benstalk/templates/system.php.prod /var/www/html/website/var/config/system.php
mv /var/www/html/.eb-benstalk/templates/customviews.php.prod /var/www/html/var/config/customviews.php
mv /var/www/html/.eb-benstalk/templates/extensions.php.prod /var/www/html/var/config/extensions.php
mv /var/www/html/.eb-benstalk/templates/perspectives.php.prod /var/www/html/var/config/perspectives.php
mv /var/www/html/.eb-benstalk/templates/predefined-properties.php.prod /var/www/html/var/config/predefined-properties.php
mv /var/www/html/.eb-benstalk/templates/web2print.php.prod /var/www/html/var/config/web2print.php
mv /var/www/html/.eb-benstalk/templates/parameters.prod.yml /var/www/html/app/config/parameters.yml
mv /var/www/html/.eb-benstalk/templates/config.prod.yml /var/www/html/app/config/config.yml
mv /var/www/html/.eb-benstalk/templates/composer.json /var/www/html/composer.json
mv /var/www/html/.eb-benstalk/templates/htaccess.prod /var/www/html/web/.htaccess
mv /var/www/html/.eb-benstalk/templates/audit.prod /etc/logrotate.d/audit
mv /var/www/html/.eb-benstalk/templates/httpd.prod /etc/logrotate.d/httpd
mv /var/www/html/.eb-benstalk/templates/syslog.prod /etc/logrotate.d/syslog
crontab -u root -l > /tmp/root_crontab_back.`date +"%Y-%m-%d_%H.%M"`
crontab -u root -r
dos2unix /tmp/crontab.txt
crontab -u root /tmp/crontab.txt
fi

vend="/var/www/html/vendor";
if [ ! -d "$vend" ]
then
  mkdir -p /var/www/html/vendor
  cd /var/www/html/
  aws s3 cp s3://packages-wberger/vendor.zip . 
  unzip vendor.zip

fi
