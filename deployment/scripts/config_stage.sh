#!/bin/bash
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
