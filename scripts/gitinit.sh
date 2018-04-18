#!/bin/bash

#echo "Entrez le nom du projet"

#read nomuser

nom_projet=$1

mkdir /var/www/git/$nom_projet
cd /var/www/git/$nom_projet
git init
chmod -R 770 /var/www/git/$nom_projet
