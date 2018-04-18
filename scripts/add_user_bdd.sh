#!/bin/bash
#Add user in PhyMyAdmin
nom_dev=$1
mdp_dev=$2

sudo mysql -u root -p"codshare-itinet" -e "CREATE USER '$nom_dev'@'localhost' IDENTIFIED BY '$mdp_dev'; GRANT USAGE ON *.* TO '$nom_dev'@'localhost' IDENTIFIED BY '$mdp_dev' WITH MAX_QUERIES_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;"
