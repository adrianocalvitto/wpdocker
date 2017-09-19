#!/bin/bash

docker-compose exec --user www-data phpfpm rm -rf web
docker-compose exec --user www-data phpfpm composer install
docker-compose exec --user www-data phpfpm cp -R src/wp-content/themes web/wp-content
docker-compose exec --user www-data phpfpm cp src/wp-config.php web/wp-config.php