.DEFAULT_GOAL := help

DOCKER_NETWORK = juan_network
PROYECT_NAME = master

build: ## build Dockerfile
	docker-compose -f docker-compose.build.yml build

up: ## up containers docker
	@make verify_network &> /dev/null
	docker-compose -p $(PROYECT_NAME) up -d
	docker-compose -p $(PROYECT_NAME) ps

stop: ## stop containers docker
	docker-compose -p $(PROYECT_NAME) stop

down: ## remove containers docker
	docker-compose -p $(PROYECT_NAME) down

verify_network:
	@if [ -z $$(docker network ls | grep $(DOCKER_NETWORK) | awk '{print $$2}') ]; then\
		(docker network create $(DOCKER_NETWORK));\
	fi

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-16s\033[0m %s\n", $$1, $$2}'

