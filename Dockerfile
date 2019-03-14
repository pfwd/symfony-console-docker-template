FROM php:7.2-cli-stretch
RUN apt-get update \
    && apt-get install -y git zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
ADD ./ .
RUN php /usr/local/bin/composer install

CMD ["php", "-a"]