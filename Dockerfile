
FROM php:8.2-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libxslt-dev \
 && docker-php-ext-install xsl
 
COPY flag.txt /flag.txt

# Copia tu aplicación al directorio del servidor web
COPY ./app /var/www/html/

# Da permisos adecuados
RUN chown -R www-data:www-data /var/www/html

# Expone el puerto 80
EXPOSE 80