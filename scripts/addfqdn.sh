#!/bin/bash
nomuser=$1
if sudo grep -q =$nomuser.codshare /etc/tinydns/root/data; then
		sudo echo "Ce fqdn existe deja!"
	else 
		sudo echo =$nomuser.codshare.itinet.fr:88.177.168.133:86400 >> /etc/tinydns/root/data
fi
cd /etc/tinydns/root/
sudo make








