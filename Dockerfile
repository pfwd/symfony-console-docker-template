FROM php:7.3.3-cli-stretch
RUN apt-get update \
    && apt-get install -y git cron \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
ADD ./ .
RUN php /usr/local/bin/composer install

CMD ["php", "-a"]