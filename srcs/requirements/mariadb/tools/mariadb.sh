#!/bin/ash
mysql_install_db --user=mysql --datadir=/var/lib/mysql
chown -R mysql:mysql /var/run/mysqld/
/usr/bin/mysqld_safe --datadir=/var/lib/mysql &
sleep 1;
mariadb -e "CREATE DATABASE IF NOT EXISTS $MARIADB_DATABASE; FLUSH PRIVILEGES;"
mariadb -e "CREATE USER IF NOT EXISTS '$MARIADB_USER'@'$MARIADB_HOST' IDENTIFIED BY '$MARIADB_PASSWORD'; FLUSH PRIVILEGES;"
mariadb -e "GRANT ALL PRIVILEGES ON *.* to '$MARIADB_USER'@'%' IDENTIFIED BY '$MARIADB_PASSWORD'; "
mariadb -e "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$MARIADB_ROOT_PASSWORD'); FLUSH PRIVILEGES;"
mysqladmin shutdown
/usr/bin/mysqld_safe --datadir=/var/lib/mysql