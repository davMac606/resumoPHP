FROM php:8.0-apache

ARG port="80"
ARG adress="localhost"

ENV PORT=${port}
ENV ADRESS=${adress}

WORKDIR /var/www/html

RUN if [ "$ADRESS" = "localhost" ] || [ "$ADRESS" = "127.0.0.1" ]; then \
    sed -i "s/Listen 80/Listen ${port}/" /etc/apache2/ports.conf; else \
    sed -i "s/Listen 80/Listen ${adress}:${port}/" /etc/apache2/ports.conf; \
fi

RUN echo "ServerName ${adress}" >> /etc/apache2/apache2.conf

COPY . .

EXPOSE ${port}
