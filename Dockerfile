FROM wordpress:latest

# Copy everything from local folder into the container
COPY . /var/www/html/

# Fix permissions for the non-root web user
RUN chown -R www-data:www-data /var/www/html/

# Run the container as non-root user
USER www-data
