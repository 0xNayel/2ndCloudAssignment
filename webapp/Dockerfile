# Use the official PHP 8 Apache image
FROM php:8-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Enable Apache rewrite module
RUN a2enmod rewrite

# Restart Apache
RUN service apache2 restart
