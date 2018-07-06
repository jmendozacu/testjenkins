if [ ! -d "/home/ec2-user/wkhtmltox" ]; then
mkdir /home/ec2-user/wkhtmltox
cd /home/ec2-user/wkhtmltox
aws s3 cp s3://packages-wberger/wkhtmltox-0.12.4_linux-generic-amd64.tar.xz .
#wget http://download.gna.org/wkhtmltopdf/0.12/0.12.3/wkhtmltox-0.12.3_linux-generic-amd64.tar.xz
tar -xvf wkhtmltox-0.12.4_linux-generic-amd64.tar.xz
cd wkhtmltox/bin/
sudo mv wkhtmltopdf  /usr/bin/wkhtmltopdf
sudo mv wkhtmltoimage  /usr/bin/wkhtmltoimage

fi