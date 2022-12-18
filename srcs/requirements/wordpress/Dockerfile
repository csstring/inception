FROM alpine:3.15.6

RUN	apk update && \
    apk add dumb-init && \
	chmod +x /usr/bin/dumb-init && \
    apk add mariadb-client php8 php8-mysqli php8-fpm php8-cli php8-common php8-zip \
    php8-gd php8-mbstring php8-curl php8-xml php8-bcmath php8-phar wget && \
    rm /etc/php8/php-fpm.d/www.conf
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp && \
    cp /usr/bin/php8 /usr/bin/php
COPY conf/www.conf /etc/php8/php-fpm.d/www.conf
COPY conf/wp-config.php /tmp/wp-config.php
COPY tools/wp.sh /tmp/wp.sh

EXPOSE 9000

ENTRYPOINT	[ "/usr/bin/dumb-init", "--"]
CMD	["ash", "/tmp/wp.sh"]