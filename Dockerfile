FROM php:7-apache

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY start-apache /usr/local/bin
RUN a2enmod rewrite

# Copy application source
COPY ./ /var/www/
RUN chown -R www-data:www-data /var/www

EXPOSE 80

CMD ["start-apache"]
