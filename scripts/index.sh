#! /bin/bash
nom_user=$1

touch /var/www/site/$nom_user/index.html
echo "<!DOCTYPE html>" >> /var/www/$nom_user/site/index.html
echo "<html>" >> /var/www/$nom_user/site/index.html
echo "<head>" >> /var/www/$nom_user/site/index.html
echo "<title>$nom_user</title>" >> /var/www/$nom_user/site/index.html
echo "</head>" >> /var/www/$nom_user/site/index.html
echo "<body>" >> /var/www/$nom_user/site/index.html
echo "<h1>$nom_user</h1>" >> /var/www/$nom_user/site/index.html
echo "</body>" >> /var/www/$nom_user/site/index.html
echo "</html>" >> /var/www/$nom_user/site/index.html
