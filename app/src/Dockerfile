# Use a base PHP image with Apache
FROM php:8.2-apache

# Install necessary extensions for MySQL
RUN docker-php-ext-install mysqli

# Copy your application files to Apache's root directory
COPY . /var/www/html/

# Ensure Apache can access the files
RUN chown -R www-data:www-data /var/www/html

# Custom configuration to set the DocumentRoot to 'welcome'
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Expose port 80 to serve the application
EXPOSE 80

