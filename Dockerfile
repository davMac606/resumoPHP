FROM php:8.0-apache

ARG port=80
ARG host=localhost

ENV PORT=${port}
ENV HOST=${host}

WORKDIR /var/www/html

RUN sed -i 's/Listen 80/Listen ${PORT}/' /etc/apache2/ports.conf

COPY . .

EXPOSE 80
