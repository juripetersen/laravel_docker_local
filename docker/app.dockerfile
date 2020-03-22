FROM php:7.2.2-fpm

RUN apt-get update && \
    apt-get install -y cron-apt mysql-client \
    && docker-php-ext-install pdo_mysql


COPY . /var/www

WORKDIR /var/www
