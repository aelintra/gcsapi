!#/bin/sh
#
# sarkapi local installer run once before using the API or run the commands manually in the sequence shown here
#
# N.B. This installer only supports laravel 10 and PHP 8.1+
#

RELEASE='_L10'

apt update
apt upgrade
apt install php-zip

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
php -r "unlink('composer-setup.php');"

cp sarkapi.env .env
php artisan key:generate
chown -R www-data:www-data /opt/sark6api$RELEASE/public
chown -R www-data:www-data /opt/sark6api$RELEASE/storage
[ ! -e /etc/apache2/installed_ports.conf ] && cp /etc/apache2/ports.conf /etc/apache2/installed_ports.conf
cp apache2/ports.conf /etc/apache2/ports.conf

[ ! -L /opt/sark6api$RELEASE/database/database.sqlite ] &&  ln -s /opt/sark/db/sark.db database.sqlite /opt/sark6api$RELEASE/database/
[ ! -L /etc/sudoers.d/sarkapi ] &&  ln -s /opt/sark6api$RELEASE/sudoers.d/sark6api /etc/sudoers.d/
[ ! -L /etc/apache2/sites-available/sarkapi.conf ] && ln -s /opt/sark6api$RELEASE/apache2/sites-available/sarkapi.conf /etc/apache2/sites-available/

a2ensite sarkapi
apache2ctl restart