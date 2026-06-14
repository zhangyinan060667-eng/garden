#!/usr/bin/env bash
set -euo pipefail

mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache/data storage/logs bootstrap/cache database
chmod -R ug+rwx storage bootstrap/cache database 2>/dev/null || true

composer install --no-dev --optimize-autoloader --no-interaction

if [ -n "${APP_KEY:-}" ]; then
  touch database/database.sqlite
  php artisan migrate --force --no-interaction
  php artisan db:seed --force --no-interaction
fi
