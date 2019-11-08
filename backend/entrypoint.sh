#!/bin/sh

cd /var/www
php artisan migrate:fresh --seed
