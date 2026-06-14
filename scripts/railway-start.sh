#!/usr/bin/env bash
set -euo pipefail

if [ -z "${APP_KEY:-}" ]; then
  echo "ERROR: APP_KEY is not set in Railway variables."
  echo "Generate one locally with: php artisan key:generate --show"
  exit 1
fi

mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache database
chmod -R ug+rwx storage bootstrap/cache database 2>/dev/null || true

if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi

php artisan migrate --force --no-interaction
php artisan db:seed --force --no-interaction

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8000}"
