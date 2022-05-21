#!/bin/bash

echo "Starting mount script..."

#remote vpn issue, use the smnvpn.cf.ac.uk (admin) VPN 
ip link set eth0 mtu 1400
ldapsearch -xh ldap-auth.cf.ac.uk uid=sisaw10

#Install packages 
composer install
cd /var/www/html

# Clear all cache configs, might be hanging around and stale
bin/cake cache clear_all

# Clear logs down
rm -f logs/*log

# mount SIMS image folder, you need to set the environmental variables first! If this does not work switch the host to the ip
mount -t cifs //shrcardf.cf.ac.uk/cardf/SIMS/siapp/images /tmp/SIMS_PICS -o user=$CIFSUSERNAME,password=$CIFSPASSWORD,dom=/,vers=3.0
ls -la //tmp/SIMS_PICS

# Install packages 
echo "Finished mount script..."
