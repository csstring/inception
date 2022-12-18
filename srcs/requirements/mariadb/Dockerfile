FROM alpine:3.15.6

RUN	apk update && \
    apk add dumb-init && \
	chmod +x /usr/bin/dumb-init && \
    apk add mariadb mariadb-client && \
    rm /etc/my.cnf.d/mariadb-server.cnf && \
    mkdir /var/run/mysqld
COPY conf/mariadb-server.cnf /etc/my.cnf.d/mariadb-server.cnf
COPY tools/mariadb.sh /tmp/mariadb.sh

EXPOSE 3306

ENTRYPOINT	[ "/usr/bin/dumb-init", "--"]
CMD	["ash", "/tmp/mariadb.sh"]