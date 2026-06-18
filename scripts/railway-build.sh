#!/usr/bin/env bash
set -euo pipefail

APP_ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "${APP_ROOT}"

if [ ! -f .env ]; then
  cp .env.example .env
  php artisan key:generate --force --no-interaction
fi

export DB_CONNECTION=sqlite
export DB_DATABASE="${DB_DATABASE:-${APP_ROOT}/database/database.sqlite}"
unset DATABASE_URL MYSQL_URL MYSQL_PUBLIC_URL MYSQLDATABASE MYSQLHOST MYSQLPORT MYSQLUSER MYSQLPASSWORD MYSQL_ROOT_PASSWORD

mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache database
chmod -R 777 storage bootstrap/cache database 2>/dev/null || true

composer install --no-dev --optimize-autoloader --no-interaction

touch "${DB_DATABASE}"

php artisan migrate --force --no-interaction
php artisan db:seed --force --no-interaction
php artisan view:cache --no-interaction
