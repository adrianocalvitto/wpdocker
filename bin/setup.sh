#!/bin/bash
docker-compose exec --user www-data phpfpm rm -rf web
docker-compose exec --user www-data phpfpm composer install
docker-compose exec --user www-data phpfpm touch web/wp-config.php
# Create config file and include parent config (security reasons)
docker-compose exec --user www-data phpfpm bash -c "echo '<?php' >> /var/www/html/web/wp-config.php"
docker-compose exec --user www-data phpfpm bash -c "echo 'require_once(dirname(__DIR__) . \"/wp-config.php\");' >> /var/www/html/web/wp-config.php"
docker-compose exec --user www-data phpfpm bash -c "echo 'require_once(ABSPATH . \"wp-settings.php\");' >> /var/www/html/web/wp-config.php"
# We want no description
docker-compose exec --user www-data phpfpm wp option update blogdescription ""
# Disable comments
docker-compose exec --user www-data phpfpm wp option set default_comment_status closed
# Disable pingbacks and trackbacks completely (performance reasons)
docker-compose exec --user www-data phpfpm wp option update default_pingback_flag 0
docker-compose exec --user www-data phpfpm wp option set default_ping_status closed
# Do not use those ugly smilies
docker-compose exec --user www-data phpfpm wp option update use_smilies 0
# Download and activate default theme
docker-compose exec --user www-data phpfpm wp theme install twentysixteen --activate