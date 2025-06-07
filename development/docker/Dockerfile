# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Instala extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli

# Copia los archivos de tu aplicación al directorio raíz de Apache
COPY . /var/www/html/

# Asegúrate de que Apache pueda acceder a los archivos
RUN chown -R www-data:www-data /var/www/html

# Configuración personalizada para ubicar el DocumentRoot a welcome
COPY apache.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

# Exponemos el puerto 80 para servir la aplicación
EXPOSE 80
