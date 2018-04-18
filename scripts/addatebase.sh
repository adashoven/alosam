#!/bin/bash
user=$1
PASS=$2

mysql -uroot <<MYSQL_SCRIPT
CREATE DATABASE $user;
CREATE USER '$user'@'localhost' IDENTIFIED BY '$PASS';
GRANT ALL PRIVILEGES ON $user.* TO '$user'@'localhost';
FLUSH PRIVILEGES;
MYSQL_SCRIPT

echo "MySQL user created."
echo "Username:   $1"
echo "Password:   $PASS"