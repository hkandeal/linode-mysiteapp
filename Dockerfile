FROM php:8.1-apache

WORKDIR /var/www/html/

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && a2enmod rewriteß

COPY . /var/www/html
EXPOSE 80

