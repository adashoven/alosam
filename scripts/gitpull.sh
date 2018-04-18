#!/bin/bash

git pull
sudo chown -R www-data:www-data /var/www/codshare/
sudo chmod -R 755 /var/www/codshare/
