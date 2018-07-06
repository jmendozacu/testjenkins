#!/bin/bash
mv /var/www/html/.eb-benstalk/templates/httpd.conf.stage /etc/httpd/conf/httpd.conf
mv /var/www/html/.eb-benstalk/templates/php.conf.stage /etc/httpd/conf.d/php.conf
mv /var/www/html/.eb-benstalk/templates/mod_reqtimeout.stage /etc/httpd/conf.d/mod_reqtimeout.conf
mv /var/www/html/.eb-benstalk/templates/crontab.stage.txt /tmp/crontab.txt
mv /var/www/html/.eb-benstalk/templates/php.ini.stage /etc/php.ini
mv /var/www/html/.eb-benstalk/templates/system.php.stage /var/www/html/var/config/system.php
mv /var/www/html/.eb-benstalk/templates/customviews.php.stage /var/www/html/var/config/customviews.php
mv /var/www/html/.eb-benstalk/templates/extensions.php.stage /var/www/html/var/config/extensions.php
mv /var/www/html/.eb-benstalk/templates/perspectives.php.stage /var/www/html/var/config/perspectives.php
mv /var/www/html/.eb-benstalk/templates/predefined-properties.php.stage /var/www/html/var/config/predefined-properties.php
mv /var/www/html/.eb-benstalk/templates/web2print.php.stage /var/www/html/var/config/web2print.php
mv /var/www/html/.eb-benstalk/templates/config.stage.yml /var/www/html/app/config/config.yml
mv /var/www/html/.eb-benstalk/templates/parameters.stage.yml /var/www/html/app/config/parameters.yml
mv /var/www/html/.eb-benstalk/templates/composer.json /var/www/html/composer.json
mv /var/www/html/.eb-benstalk/templates/htaccess.stage /var/www/html/web/.htaccess
mv /var/www/html/.eb-benstalk/templates/audit.stage /etc/logrotate.d/audit
mv /var/www/html/.eb-benstalk/templates/httpd.stage /etc/logrotate.d/httpd
mv /var/www/html/.eb-benstalk/templates/syslog.stage /etc/logrotate.d/syslog
crontab -u root -l > /tmp/root_crontab_back.`date +"%Y-%m-%d_%H.%M"`
crontab -u root -r
dos2unix /tmp/crontab.txt
crontab -u root /tmp/crontab.txt
