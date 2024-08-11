# Use the latest version of the richarvey/nginx-php-fpm image
FROM richarvey/nginx-php-fpm:latest

# Copy application files
COPY . /var/www/html

# Set environment variables
ENV SKIP_COMPOSER=1
ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV RUN_SCRIPTS=1
ENV REAL_IP_HEADER=1

# Laravel configuration
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER=1

# Command to run when the container starts
CMD ["/start.sh"]
