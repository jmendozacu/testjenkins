#!bin/bash

##### Testing if process accounting is installed 

yum list installed | grep "psacct"
if [ $? -ne 0 ]; then
        yum install -y psacct
        /etc/init.d/psacct start
else
        echo "Process Accounting is installed"
        /etc/init.d/psacct start
fi