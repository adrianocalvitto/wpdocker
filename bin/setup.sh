#!/bin/bash
docker-compose exec --user www-data phpfpm rm -rf web
docker-compose exec --user www-data phpfpm composer install
docker-compose exec --user www-data phpfpm touch web/wp-config.php
docker-compose exec --user www-data phpfpm bash -c "echo '<?php' >> /var/www/html/web/wp-config.php"
docker-compose exec --user www-data phpfpm bash -c "echo 'require_once(dirname(__DIR__) . \"/wp-config.php\");' >> /var/www/html/web/wp-config.php"
docker-compose exec --user www-data phpfpm bash -c "echo 'require_once(ABSPATH . \"wp-settings.php\");' >> /var/www/html/web/wp-config.php"