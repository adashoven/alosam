#!/bin/sh
nomuser=$1
touch etc/apache2/sites-available/$nomuser.conf
echo "<VirtualHost *:80>" >> /etc/apache2/sites-available/$nomuser.conf
echo "ServerName $nomuser.codshare.itinet.fr" >> /etc/apache2/sites-available/$nomuser.conf
echo "ServerAlias www.$nomuser.codshare.itinet.fr" >> /etc/apache2/sites-available/$nomuser.conf
echo "DocumentRoot /var/www/$nomuser" >> /etc/apache2/sites-available/$nomuser.conf
echo "</VirtualHost>" >> /etc/apache2/sites-available/$nomuser.conf
a2ensite $nomuser.conf
service apache2 reload 
