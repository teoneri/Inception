DC:= docker-compose -f ./srcs/docker-compose.yml

all :
	@mkdir -p $(HOME)/mneri/data/wordpress
	@mkdir -p $(HOME)/mneri/data/mariadb
	@$(DC) up -d

down:
	@$(DC) down

re: clean all

clean:
	@docker stop $$(docker ps -qa);\
	docker rm $$(docker ps -qa);\
	docker rmi -f $$(docker images -qa);\
	docker volume rm $$(docker volume ls -q);\
	docker network rm $$(docker network ls -q);\
	rm -rf $(HOME)/mneri/data/wordpress
	rm -rf $(HOME)/mneri/data/mariadb

.PHONY: all down re clean