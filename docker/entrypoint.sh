#!/bin/bash

echo "🚀 Starting app - waiting for DB at ${DB_HOST}:${DB_PORT}..."

# Tunggu sampai DB ready
until nc -z "$DB_HOST" "$DB_PORT"; do
  echo "⏳ Waiting for database..."
  sleep 2
done

echo "✅ Database is up - running migrations & seed..."

sleep 5 # Delay tambahan biar DB bener-bener siap

# Clear & cache config
php artisan config:clear
php artisan config:cache

# Run migration with --force (non-interaktif)
php artisan migrate --force || exit 1

# Jalankan seeder spesifik
php artisan db:seed --class=PermissionTableSeeder --force || exit 1
php artisan db:seed --class=CreateAdminSeeder --force || exit 1

# Jalankan Laravel dev server
php artisan serve --host=0.0.0.0 --port=8000
