FROM alpine:3.15.6

RUN	apk update && \
	apk upgrade && \
	apk add nginx && \
	apk add openssl && \
	apk add dumb-init && \
	chmod +x /usr/bin/dumb-init && \
	mkdir -p /etc/nginx/tls /var/run/nginx && \
	openssl req -new -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/tls/schoe.42.fr.crt \
	-keyout /etc/nginx/tls/schoe.42.fr.key -subj "/C=KR/ST=Seoul/L=gamnam/O=42/OU=42Seoul/CN=schoe.42.fr" && \
	rm -rf /etc/nginx/http.d/default.conf
COPY	conf/nginx.conf /etc/nginx/http.d/default.conf
ENTRYPOINT	[ "/usr/bin/dumb-init", "--"]
CMD ["nginx", "-g", "daemon off;"]