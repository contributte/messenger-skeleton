############################################################
# PROJECT ##################################################
############################################################
.PHONY: project install setup clean

project: install setup

install:
	composer install

setup:
	mkdir -p var/tmp var/log
	chmod +0777 var/tmp var/log

clean:
	find var/tmp -mindepth 1 ! -name '.gitignore' -type f,d -exec rm -rf {} +
	find var/log -mindepth 1 ! -name '.gitignore' -type f,d -exec rm -rf {} +

############################################################
# DEVELOPMENT ##############################################
############################################################
.PHONY: qa dev cs csf phpstan tests coverage dev build

qa: cs phpstan

cs:
	vendor/bin/codesniffer app

csf:
	vendor/bin/codefixer app

phpstan:
	vendor/bin/phpstan analyse -c phpstan.neon --memory-limit=512M

tests:
	echo "NO TESTS"

coverage:
	echo "NO TESTS"

dev:
	XDEBUG_MODE=debug NETTE_DEBUG=1 NETTE_ENV=dev php -S 0.0.0.0:8000 -t www

dev-prod:
	XDEBUG_MODE=debug NETTE_DEBUG=0 NETTE_ENV=production php -S 0.0.0.0:8000 -t www

consume:
	XDEBUG_MODE=debug XDEBUG_SESSION=1 bin/console messenger:consume redis

build:
	echo "OK"

############################################################
# DEPLOYMENT ###############################################
############################################################
.PHONY: deploy

deploy:
	$(MAKE) clean
	$(MAKE) project
	$(MAKE) build
	$(MAKE) clean

############################################################
# DOCKER ###################################################
############################################################
.PHONY: docker-up
docker-up:
	docker compose up
