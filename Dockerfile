FROM composer:latest

WORKDIR /usr/src/app

COPY composer.json .
COPY composer.lock .
RUN composer install

COPY . .

CMD [ "php", "-S", "0.0.0.0:8000"]