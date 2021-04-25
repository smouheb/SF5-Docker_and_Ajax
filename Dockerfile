FROM php:8.0-fpm-alpine3.13
RUN apk update \
   && apk add npm bash git zip unzip postgresql-dev \
   && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
   && docker-php-ext-install pdo pgsql pdo_pgsql \
   && docker-php-ext-enable pdo pgsql pdo_pgsql 

RUN curl -sS https://get.symfony.com/cli/installer | bash  \
    && mv /root/.symfony/bin/symfony /usr/local/bin/symfony  \
    && git config --global user.email smaelmouheb@gmail.com  \
    && git config --global user.name smouheb

RUN curl -sS https://getcomposer.org/installer  | php -- --install-dir=/usr/local/bin/ --filename=composer
