#!/bin/ash

if ! [ -d /var/www/html/wordpress/wp-admin]
then
  cd /var/www/html
  wget http://wordpress.org/latest.tar.gz
  tar -xzvf latest.tar.gz
  rm latest.tar.gz
  mv /tmp/wp-config.php /var/www/html/wordpress/wp-config.php
  wp core install --path=/var/www/html/wordpress --url=$DOMAIN_NAME --title="Hello inception!" --admin_user=$WP_ADMIN_ID --admin_password=$WP_ADMIN_PW --admin_email=$ADMIN_EMAIL
  wp user create --path=/var/www/html/wordpress $WP_USER_ID $USER_EMAIL --role=author --user_pass=$WP_USER_PW
fi
php-fpm8 -F