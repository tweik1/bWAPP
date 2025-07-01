FROM php:7.4-apache as builder

RUN apt-get update && \
    apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install mysqli

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html/

FROM php:7.4-apache

RUN docker-php-ext-install mysqli
COPY --from=builder /var/www/html /var/www/html

EXPOSE 80
HEALTHCHECK --interval=30s --timeout=3s \
  CMD curl -f http://localhost/ || exit 1

CMD ["apache2-foreground"]
