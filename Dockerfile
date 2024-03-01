FROM richarvey/nginx-php-fpm:3.0.0

# Set the timezone to your desired timezone (replace 'America/New_York' with your timezone)
ENV TZ=America/New_York

# Install the tzdata package to provide timezone data
RUN apk add --no-cache tzdata

# Set the timezone for PHP-FPM
RUN echo "date.timezone=\$TZ" > /usr/local/etc/php/conf.d/docker-php-timezone.ini

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]