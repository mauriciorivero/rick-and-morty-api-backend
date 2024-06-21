# Usar una imagen base de PHP con Apache
FROM php:8.1-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copiar el contenido de tu aplicación al directorio root de Apache
COPY . /var/www/html/

# Establecer permisos apropiados
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 8888
