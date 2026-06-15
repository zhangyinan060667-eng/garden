#!/usr/bin/env bash
set -euo pipefail

export APP_ENV="${APP_ENV:-production}"
export APP_DEBUG="${APP_DEBUG:-false}"
export LOG_CHANNEL="${LOG_CHANNEL:-errorlog}"
export SESSION_DRIVER="${SESSION_DRIVER:-cookie}"
export CACHE_DRIVER="${CACHE_DRIVER:-array}"
export DB_CONNECTION=sqlite

APP_ROOT="$(cd "$(dirname "$0")/.." && pwd)"
export DB_DATABASE="${DB_DATABASE:-${APP_ROOT}/database/database.sqlite}"

unset DATABASE_URL MYSQL_URL MYSQL_PUBLIC_URL MYSQLDATABASE MYSQLHOST MYSQLPORT MYSQLUSER MYSQLPASSWORD MYSQL_ROOT_PASSWORD

if [ -z "${APP_KEY:-}" ]; then
  echo "ERROR: APP_KEY is not set in Railway variables."
  echo "Generate one locally with: php artisan key:generate --show"
  exit 1
fi

cd "${APP_ROOT}"

mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache database
chmod -R 777 storage bootstrap/cache database 2>/dev/null || true

if [ ! -f "${DB_DATABASE}" ]; then
  touch "${DB_DATABASE}"
  chmod 666 "${DB_DATABASE}" 2>/dev/null || true
fi

php artisan config:clear --no-interaction
php artisan route:clear --no-interaction
php artisan view:clear --no-interaction

php artisan migrate --force --no-interaction
php artisan db:seed --force --no-interaction

echo "Starting Laravel on ${APP_ROOT} port ${PORT:-8000} sqlite ${DB_DATABASE}"

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"
