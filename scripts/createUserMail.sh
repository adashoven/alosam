#!/bin/bash

# Définition des variables :
nommailuser=$1
mdp=$2
verification=`sudo grep $nommailuser /etc/postfix/vmailbox`
cheminUtil=/$nommailuser/

#Création de l'utilisateur dans vmailbox :
#Si $verification est vide on enregistre l'utilisateur
if [ -z "$verification" ]; then	
	sudo echo $nommailuser	$cheminUtil >> /etc/postfix/vmailbox
	sudo postmap /etc/postfix/vmailbox
else
	sudo echo "Cette boîte mail existe déja"
	exit
fi

#Création de son répertoire avec les bons droits :

sudo mkdir /var/mail/$nommailuser
sudo mkdir /var/mail/$nommailuser/cur
sudo mkdir /var/mail/$nommailuser/new
sudo mkdir /var/mail/$nommailuser/tmp
sudo chown -R codsharemail:codsharemail /var/mail/$nommailuser

#Reload de postfix pour que les paramètres soit pris en compte :
sudo service postfix reload 

#Configuration IMAP 

#Inscription dans userdb :
sudo userdb $nommailuser set uid=1007 gid=1007 home=/var/mail/$nommailuser mail=/var/mail/$nommailuser

#Mise en place du mot de passe :
/bin/echo "$mdp" | sudo userdbpw -md5 | sudo userdb $nommailuser set systempw

#Compilation du fichier userdb
sudo makeuserdb


