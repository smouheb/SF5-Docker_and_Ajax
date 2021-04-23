FROM php:8.0-fpm-buster
RUN apt-get update && \
    apt-get install -y npm curl bash git

RUN curl -sS https://get.symfony.com/cli/installer | bash && \
    mv /root/.symfony/bin/symfony /usr/local/bin/symfony && \
    git config --global user.email sma@sma.com && \
    git config --global user.name sma

RUN curl -sS https://getcomposer.org/installer  | php -- --install-dir=/usr/local/bin/ --filename=composer
