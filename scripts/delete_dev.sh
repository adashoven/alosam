#!/bin/bash

dossier_keys="/home/codshare-itinet/"
nom_user=$1

verification=`sudo grep $nom_user /etc/postfix/vmailbox`
###Suppression de la boite mail###
if [ -z "$verification" ]; then
	sudo echo "Cette boite mail est inconnu"
	exit
else
	sudo sed -i "/$nom_user@codshare.itinet.fr/d" /etc/postfix/vmailbox
	sudo postmap /etc/postfix/vmailbox
	sudo sed -i "/$nom_user@codshare.itinet.fr/d" /etc/courier/userdb
	sudo makeuserdb 
	sudo rm -R /var/mail/$nom_user/
fi
sudo service postfix reload

###Suppression des paires de clé SSH###
sudo rm -r $dossier_keys$nom_user
