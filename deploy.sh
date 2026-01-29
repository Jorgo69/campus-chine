#!/bin/bash
# ==============================================================================
# DEPLOY.SH - Post-deployment script for Campus Chine
# Run manually via LWS panel (Cron or Terminal) after FTP deployment
# ==============================================================================

set -e

# ------------------------------------------------------------------------------
# CONFIG
# ------------------------------------------------------------------------------
PROJECT_DIR="/home/c2714215c/public_html/campus-chine"

# ------------------------------------------------------------------------------
# NAVIGATION
# ------------------------------------------------------------------------------
cd "$PROJECT_DIR" || { echo "ERROR: Cannot access $PROJECT_DIR"; exit 1; }
echo "[1/4] Directory: $PROJECT_DIR"

# ------------------------------------------------------------------------------
# COMPOSER (optional - only if vendor not sent via FTP)
# Uncomment if you want to install vendor on server instead of FTP
# ------------------------------------------------------------------------------
# echo "[2/4] Installing Composer dependencies..."
# composer install --no-dev --optimize-autoloader --no-interaction

# ------------------------------------------------------------------------------
# STORAGE LINK
# Creates public/storage -> storage/app/public symlink
# ------------------------------------------------------------------------------
echo "[2/4] Checking storage link..."
if [ ! -L "public/storage" ]; then
    php artisan storage:link
    echo "    Link created"
else
    echo "    Link exists"
fi

# ------------------------------------------------------------------------------
# CACHE OPTIMIZATION
# Clear and rebuild all caches for production
# ------------------------------------------------------------------------------
echo "[3/4] Optimizing caches..."
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# ------------------------------------------------------------------------------
# DATABASE MIGRATION (disabled until DB is configured)
# Uncomment when ready:
# php artisan migrate --force
# ------------------------------------------------------------------------------
echo "[4/4] Database migration: SKIPPED (uncomment when ready)"

echo "Deployment complete"
exit 0