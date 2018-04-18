#!/bin/bash
user=$1
export OC_PASS=$2
group=$3
cd /var/www/owncloud/
password=$2
su -s /bin/sh www-data -c "php /var/www/owncloud/occ user:add --password-from-env --display-name="$user" --group="$group" $user"