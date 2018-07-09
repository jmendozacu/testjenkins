#!/bin/bash
cat /etc/passwd | grep dev
if [ "$?" != "0" ]; then
        useradd dev
fi

usermod -a -G webapp dev

cd /var/www/html
sudo chown -R webapp.webapp .
chmod 775 composer.json

sudo find pimcore -type d -exec chmod 750 {} \;
sudo find pimcore -type f -exec chmod 640 {} \;
sudo find bin -type d -exec chmod 750 {} \;
sudo find bin -type f -exec chmod 775 {} \;
sudo find src -type f -exec chmod 640 {} \;
sudo find src -type d -exec chmod 750 {} \;
sudo find app -type f -exec chmod 640 {} \;
sudo find app -type d -exec chmod 750 {} \;
sudo find vendor -type d -exec chmod 750 {} \;
sudo find vendor -type f -exec chmod 640 {} \;
sudo find web -type d -exec chmod 750 {} \;
sudo find web -type f -exec chmod 640 {} \;
chown -R webapp:webapp /efs/storage/var/classes
chmod -R 0775 /efs/storage/var/classes

# logic for composer update

sudo -u webapp /usr/bin/composer.phar update

# logic for adding hosts in /etc/hosts

sudo cat /etc/hosts|grep "172.24.1.47 sapwbwqa.einstein.local"

if [ $? -ne 0 ]
then
  sudo sed -e "\$a172.24.1.47 sapwbwqa.einstein.local" /etc/hosts > hosttmpfile && sudo mv hosttmpfile /etc/hosts
fi

sudo cat /etc/hosts|grep "10.18.18.35 smtp.einstein.local"

if [ $? -ne 0 ]
then
  sudo sed -e "\$a10.18.18.35 smtp.einstein.local" /etc/hosts > hosttmpfile && sudo mv hosttmpfile /etc/hosts
fi


sudo cat /etc/hosts|grep "10.18.18.36 smtp.einstein.local"

if [ $? -ne 0 ]
then
  sudo sed -e "\$a10.18.18.36 smtp.einstein.local" /etc/hosts > hosttmpfile && sudo mv hosttmpfile /etc/hosts
fi

sudo chown root.root /etc/hosts
sudo chmod 664 /etc/hosts

