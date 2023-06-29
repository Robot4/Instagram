FROM php:apache

# Set the working directory
WORKDIR /var/www/html

# Copy the PHP application files to the container
COPY . /var/www/html


# Expose the necessary port
EXPOSE 80

# Set up any additional configurations or commands (if required)
# For example, if you need to enable a specific Apache module:
# RUN a2enmod <module-name>

# Define the command to start the web server
CMD ["apache2-foreground"]

