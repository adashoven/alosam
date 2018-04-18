#!/bin/bash
nomuser=$1
if sudo grep -q =$nomuser.codshare.itinet.fr /etc/tinydns/root/data; then
		sudo sed -i /"=$nomuser.codshare.itinet.fr"/d /etc/tinydns/root/data
	else
		sudo echo "Ce fqdn n'existe pas encore !"
fi
cd /etc/tinydns/root/
sudo make
