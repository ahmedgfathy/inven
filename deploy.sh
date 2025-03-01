#!/bin/bash

# Navigate to the project directory
cd /var/www/html/inven || exit

# Pull the latest changes
git pull origin main

# Install dependencies
composer install --no-dev --optimize-autoloader

# Run database migrations (if needed)
php artisan migrate --force

# Clear and refresh caches
php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan route:clear

# Set correct permissions
chown -R www-data:www-data /var/www/html/inven
chmod -R 775 /var/www/html/inven/storage /var/www/html/inven/bootstrap/cache

# Restart services
systemctl restart nginx php8.3-fpm

echo "Deployment completed!"
