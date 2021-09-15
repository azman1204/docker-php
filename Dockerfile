#FROM php:7.2-apache
FROM php74_apache
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# COPY src/ /var/www/html/
# RUN docker-php-ext-install mysqli pdo pdo_mysql
# RUN docker-php-ext-install mysqli
# CMD ["apachectl", "restart"]