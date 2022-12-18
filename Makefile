all :
		@sudo chmod 666 /var/run/docker.sock
		@mkdir -p /home/schoe/data/mariadb /home/schoe/data/wordpress
		@cd ./srcs; docker compose build;
		@cd ./srcs; docker compose up -d;
down : 
	@cd ./srcs; docker compose down; cd ..
up : 
	@cd ./srcs; docker compose up -d; cd ..
build : 
	@cd ./srcs; docker compose build; cd ..
exec_nginx : 
	@cd ./srcs; docker compose exec nginx ash; cd ..
exec_mariadb : 
	@cd ./srcs; docker compose exec mariadb ash; cd ..
exec_wordpress : 
	@cd ./srcs; docker compose exec wordpress ash; cd ..
fclean : 
	@cd ./srcs; docker system prune; cd ..