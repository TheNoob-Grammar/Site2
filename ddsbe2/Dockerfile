# Use the official PHP Apache image for PHP 8.2
FROM php:8.2-apache

# Install PHP extensions needed for Lumen/MySQL
RUN docker-php-ext-install pdo_mysql

# Enable Apache mod_rewrite for Lumen routing
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your entire project into the container
COPY . .

# Use the official Apache configuration provided by Heroku's PHP buildpack
# This is a reliable way to serve Lumen from the /public folder
COPY --from=heroku/heroku:20-build /usr/local/bin/heroku-php-apache /usr/local/bin/

# Configure Apache to point to the /public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]