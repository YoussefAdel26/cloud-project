# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . .

# Install mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Allow Apache to rewrite URLs
RUN a2enmod rewrite

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]