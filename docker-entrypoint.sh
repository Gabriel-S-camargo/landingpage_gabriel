#!/bin/bash

# Corrige permissões no runtime (com volume montado)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Roda o Apache
apache2-foreground
