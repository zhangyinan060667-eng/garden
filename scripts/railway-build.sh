#!/usr/bin/env bash
set -euo pipefail

export DB_CONNECTION=sqlite
export DB_DATABASE="${DB_DATABASE:-/app/database/database.sqlite}"
unset DATABASE_URL MYSQL_URL MYSQL_PUBLIC_URL MYSQLDATABASE MYSQLHOST MYSQLPORT MYSQLUSER MYSQLPASSWORD MYSQL_ROOT_PASSWORD

mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache database
chmod -R ug+rwx storage bootstrap/cache database 2>/dev/null || true

composer install --no-dev --optimize-autoloader --no-interaction

if [ -n "${APP_KEY:-}" ]; then
  touch "${DB_DATABASE}"
  php artisan config:clear --no-interaction
  php artisan migrate --force --no-interaction
  php artisan db:seed --force --no-interaction
fi
