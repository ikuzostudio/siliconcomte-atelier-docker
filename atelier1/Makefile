#!make
 
.DEFAULT_GOAL := help
.PHONY: help
help:
	@echo "\033[33mUsage:\033[0m\n  make [target] [arg=\"val\"...]\n\n\033[33mTargets:\033[0m"
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' Makefile| sort | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[32m%-15s\033[0m %s\n", $$1, $$2}'

.PHONY: build
build: ## Build container image
	docker build . -t atelier1

.PHONY: run
run: ## Run builded container
	docker run -d -p 8080:80 --name atelier1 atelier1 

.PHONY: stop
stop: ## Delete container
	docker rm --force atelier1