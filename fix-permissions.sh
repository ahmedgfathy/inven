#!/bin/bash

# Navigate to the Laravel project directory
cd /var/www/html/inven

# Set the correct ownership
sudo chown -R www-data:www-data .

# Set directories permissions to 755
find . -type d -exec chmod 755 {} \;

# Set files permissions to 644
find . -type f -exec chmod 644 {} \;

# Make storage and bootstrap/cache directories writable
sudo chmod -R 775 storage bootstrap/cache

# Create the laravel.log file if it doesn't exist
sudo touch storage/logs/laravel.log
sudo chmod 664 storage/logs/laravel.log

echo "Permissions have been fixed."
