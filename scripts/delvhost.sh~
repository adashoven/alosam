#! /bin/bash

nomuser=$1
sudo a2dissite $nomuser.conf
sudo service apache2 reload
sudo rm -r /var/www/codshare/$nomuser/
sudo rm /etc/apache2/sites-avaliable/$nomuser.conf

