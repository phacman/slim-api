FROM alpine:3.18.4

RUN apk update  \
    && apk upgrade  \
    && apk add --no-cache \
    nano bash nginx php82-fpm \
    php82-xml php82-intl php82-mbstring \
    php82-session php82-sodium php82-ldap

COPY ./config/default.conf /etc/nginx/http.d/default.conf
RUN touch /tmp/app.log && chmod 666 /tmp/app.log

EXPOSE 80

CMD php-fpm82 -D; nginx -g 'daemon off;'
