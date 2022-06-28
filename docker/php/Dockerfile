FROM php:7.4-fpm-alpine

RUN docker-php-ext-install mysqli pdo pdo_mysql opcache

RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer

COPY ./config/opcache.ini /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini

ADD ../../ /var/www/laravel
RUN chown -R www-data:www-data /var/www/laravel

WORKDIR /var/www/laravel
