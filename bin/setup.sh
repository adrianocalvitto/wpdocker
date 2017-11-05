#!/bin/bash

docker-compose exec --user www-data phpfpm composer install
docker-compose exec --user www-data phpfpm cp -R src/wp-content/themes web/wp-content
docker-compose exec --user www-data phpfpm mv vendor web/vendor
docker-compose exec --user www-data phpfpm cp environments/development.env web/.env
docker-compose exec --user www-data phpfpm cp src/wp-config.php web/wp-config.php