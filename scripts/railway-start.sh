#!/usr/bin/env bash
set -euo pipefail

APP_ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "${APP_ROOT}"

if [ ! -f .env ]; then
  cp .env.example .env
  php artisan key:generate --force --no-interaction
fi

export APP_ENV="${APP_ENV:-production}"
export APP_DEBUG="${APP_DEBUG:-false}"
export LOG_CHANNEL="${LOG_CHANNEL:-errorlog}"
export SESSION_DRIVER="${SESSION_DRIVER:-cookie}"
export CACHE_DRIVER="${CACHE_DRIVER:-array}"
export DB_CONNECTION="${DB_CONNECTION:-sqlite}"
export DB_DATABASE="${DB_DATABASE:-${APP_ROOT}/database/database.sqlite}"

unset DATABASE_URL MYSQL_URL MYSQL_PUBLIC_URL MYSQLDATABASE MYSQLHOST MYSQLPORT MYSQLUSER MYSQLPASSWORD MYSQL_ROOT_PASSWORD

mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache database
chmod -R 777 storage bootstrap/cache database 2>/dev/null || true

touch "${DB_DATABASE}"
chmod 666 "${DB_DATABASE}" 2>/dev/null || true

php artisan config:clear --no-interaction
php artisan route:clear --no-interaction
php artisan view:clear --no-interaction

php artisan migrate --force --no-interaction
php artisan db:seed --force --no-interaction
php artisan view:cache --no-interaction

echo "Laravel ready on port ${PORT:-8000}"
echo "APP_KEY set: $(grep '^APP_KEY=' .env | cut -c1-20)..."
echo "SQLite: ${DB_DATABASE}"

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"
