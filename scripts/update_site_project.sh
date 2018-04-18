#!/bin/bash

nom_projet=$1

depot_git="/var/www/git/"
depot_site="/var/www/site/" 
cd $depot_site$nom_projet
sudo git pull 

