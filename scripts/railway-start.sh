#!/usr/bin/env bash
set -euo pipefail

export APP_ENV="${APP_ENV:-production}"
export APP_DEBUG="${APP_DEBUG:-false}"
export LOG_CHANNEL="${LOG_CHANNEL:-errorlog}"
export DB_CONNECTION=sqlite
export DB_DATABASE="${DB_DATABASE:-/app/database/database.sqlite}"

# Railway MySQL plugin vars can break SQLite if left set.
unset DATABASE_URL MYSQL_URL MYSQL_PUBLIC_URL MYSQLDATABASE MYSQLHOST MYSQLPORT MYSQLUSER MYSQLPASSWORD MYSQL_ROOT_PASSWORD

if [ -z "${APP_KEY:-}" ]; then
  echo "ERROR: APP_KEY is not set in Railway variables."
  echo "Generate one locally with: php artisan key:generate --show"
  exit 1
fi

mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache database
chmod -R ug+rwx storage bootstrap/cache database 2>/dev/null || true

if [ ! -f "${DB_DATABASE}" ]; then
  touch "${DB_DATABASE}"
fi

php artisan config:clear --no-interaction
php artisan route:clear --no-interaction
php artisan view:clear --no-interaction

php artisan migrate --force --no-interaction
php artisan db:seed --force --no-interaction

echo "Starting Laravel on port ${PORT:-8000} with SQLite at ${DB_DATABASE}"

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"
