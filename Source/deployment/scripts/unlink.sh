#!/bin/bash
declare -a links=("/var/www/html/web/var", "/var/www/html/var/classes", "/var/www/html/var/config", "/var/www/html/var/sessions","/var/www/html/var/versions")

for i in "${links[@]}"
do
   if [  -L $i ];then
      unlink $i
   fi
done
