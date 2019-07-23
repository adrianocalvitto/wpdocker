FROM johnpbloch/phpfpm:7.3 AS phpfpm
ADD config/php-fpm/php.ini /usr/local/etc/php/php.ini
RUN mkdir /var/www/html/web
RUN chown -R www-data:www-data /var/www/html
USER www-data
RUN composer install --no-dev
RUN echo '<?php\nrequire_once(dirname(__DIR__) . "/wp-config.php");\nrequire_once(ABSPATH . "wp-settings.php");\n' > /var/www/html/web/wp-config.php
USER root

FROM nginx:stable AS nginx
COPY --from=phpfpm /var/www/html /var/www/html
RUN chown -R www-data:www-data /var/www/html
