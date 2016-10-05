#!/usr/bin/env bash

#Set the folder name to create on the vm for this project
FOLDER='src'

#Set the url for the website that you want to use for your project
SERVERNAME='local.generalpatton.org'

#Set the password used for various logins and accounts. mysql root, etc.
PASSWORD='hotrize'


#Add php5.6 (and 7) to apt's list of packages, so we can install it
sudo add-apt-repository -y ppa:ondrej/php

#Make sure apt is update and has all the packages we need.
sudo apt-get update
sudo apt-get -y upgrade

#Install apache and php
sudo apt-get install -y apache2
sudo apt-get install -y php5

#Install mysql and set root password
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password $PASSWORD"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $PASSWORD"
sudo apt-get -y install mysql-server
sudo apt-get install php5-mysql

#Add The server name to the hosts file
sudo echo "127.0.0.1  ${SERVERNAME}" >> /etc/hosts

#create the project folder - just to keep apache from complaining that it can't find it.
#our vagrantfile will setup a sync'd folder that will basically overwrite this empty one.
sudo mkdir "/var/www/html/${FOLDER}"

# setup the VirtualHost entry in the apache config file
VHOST=$(cat <<EOF
<VirtualHost *:80>
	ServerName "${SERVERNAME}"
    DocumentRoot "/var/www/html/${FOLDER}"
    <Directory "/var/www/html/${FOLDER}">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
EOF
)
echo "${VHOST}" > /etc/apache2/sites-available/000-default.conf


echo "ENABLING MOD_REWRITE"
#enable mod_rewrite
sudo a2enmod rewrite

#restart apache
service apache2 restart

#install git
sudo apt-get -y install git