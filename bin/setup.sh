#!/bin/bash
docker-compose exec --user root phpfpm rm -rf web
docker-compose exec --user root phpfpm composer install
docker-compose exec --user root phpfpm touch web/wp-config.php
# Create config file and include parent config (security reasons)
docker-compose exec --user root phpfpm bash -c "echo '<?php' >> /var/www/html/web/wp-config.php"
docker-compose exec --user root phpfpm bash -c "echo 'require_once(dirname(__DIR__) . \"/wp-config.php\");' >> /var/www/html/web/wp-config.php"
docker-compose exec --user root phpfpm bash -c "echo 'require_once(ABSPATH . \"wp-settings.php\");' >> /var/www/html/web/wp-config.php"
