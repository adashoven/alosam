#!/bin/bash

nom_user=$1
nom_projet=$2
dossier_keys="/home/codshare-itinet/"

sudo echo "####Ajout a l'alias mail du projet####"
if grep -q ^$nom_projet@codshare.itinet.fr /etc/postfix/virtual; then
	sudo sed -i '/'"$nom_projet@codshare.itinet.fr"'/s/$/'", $nom_user@codshare.itinet.fr"'/' /etc/postfix/virtual
else
 	sudo echo "Alias inexistant !" 	
fi
sudo postmap /etc/postfix/virtual
sudo service postfix reload

###Ajout user key to authorized keys
sudo echo "###$nom_user###" >> /home/$nom_projet/.ssh/authorized_keys
sudo cat "$dossier_keys$nom_user/$nom_user.pub" >> /home/$nom_projet/.ssh/authorized_keys
