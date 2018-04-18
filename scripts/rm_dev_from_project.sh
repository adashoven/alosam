#!/bin/bash
nom_user=$1
nom_projet=$2
dossier_keys="/home/codshare-itinet/"

### suppression du mail du dev de l'alias ###
sudo grep ^$nom_projet@codshare.itinet.fr | sed -i 's/'", $nom_user@codshare.itinet.fr"'//g' /etc/postfix/virtual  
### suppression de la key_user.pub dans authorized_keys du compte unix projet
line1=`cat /home/$nom_projet/.ssh/authorized_keys | grep -n $nom_user | cut -d : -f 1`
line2=`expr $line1 + 1`
sudo sed -i "$line1,$line2"'d' /home/$nom_projet/.ssh/authorized_keys