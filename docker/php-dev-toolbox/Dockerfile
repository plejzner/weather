FROM php:7.4.4-fpm-buster

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

RUN apt-get update && \
    export DEBIAN_FRONTEND=noninteractive && \
    apt-get -yq install \
    git \
    libpq-dev