FROM php:7.4-fpm-alpine

#RUN apt-get update \ && docker-php-ext-install mysqli

RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer

WORKDIR /var/www/laravel
