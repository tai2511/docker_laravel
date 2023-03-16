FROM php:7.4-apache

COPY apache.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY ./src /var/www/html

RUN apt-get update && \
    apt-get install -y libzip-dev && \
    docker-php-ext-install zip && \
    docker-php-ext-install pdo_mysql && \
    a2enmod rewrite

EXPOSE 80