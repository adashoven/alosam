#! /bin/bash
depot_git="/var/www/git/"
depot_site="/var/www/site/"
nom_user=$1

###Creation du fichier en cours.
cd $depot_site
sudo git clone $depot_git$nom_projet
sudo ./index.sh $nom_user
sudo ./vhost.sh $nom_user
sudo ./addfqdn.sh $nom_user

