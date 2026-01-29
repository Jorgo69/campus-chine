#!/bin/bash
# ==============================================================================
# DEPLOY.SH - Script de deploiement serveur pour Campus Chine
# Execute via SSH apres le transfert FTP des fichiers sources
# ==============================================================================

set -e  # Arreter le script en cas d'erreur

# ------------------------------------------------------------------------------
# CONFIGURATION
# ------------------------------------------------------------------------------
PROJECT_DIR="/home/c2714215c/public_html/campus-chine"

# ------------------------------------------------------------------------------
# NAVIGATION VERS LE PROJET
# ------------------------------------------------------------------------------
cd "$PROJECT_DIR" || { echo "ERREUR: Impossible d'acceder a $PROJECT_DIR"; exit 1; }
echo "[1/4] Repertoire: $PROJECT_DIR"

# ------------------------------------------------------------------------------
# INSTALLATION DES DEPENDANCES PHP
# - --no-dev : Exclut les dependances de developpement
# - --optimize-autoloader : Optimise l'autoloader pour la production
# - --no-interaction : Aucune question interactive
# ------------------------------------------------------------------------------
echo "[2/4] Installation des dependances Composer..."
composer install --no-dev --optimize-autoloader --no-interaction --quiet

# ------------------------------------------------------------------------------
# LIEN SYMBOLIQUE STORAGE
# Cree le lien public/storage -> storage/app/public si inexistant
# ------------------------------------------------------------------------------
echo "[3/4] Verification du lien storage..."
if [ ! -L "public/storage" ]; then
    php artisan storage:link --quiet
    echo "    Lien cree"
else
    echo "    Lien existant"
fi

# ------------------------------------------------------------------------------
# NETTOYAGE ET OPTIMISATION DES CACHES
# - optimize:clear : Vide tous les caches (config, route, view, cache)
# - config:cache : Recompile la config en cache
# - route:cache : Recompile les routes en cache
# - view:cache : Precompile les vues Blade
# ------------------------------------------------------------------------------
echo "[4/4] Optimisation des caches..."
php artisan optimize:clear --quiet
php artisan config:cache --quiet
php artisan route:cache --quiet
php artisan view:cache --quiet

# ------------------------------------------------------------------------------
# NOTE: MIGRATION BASE DE DONNEES
# Decommenter la ligne suivante une fois la BDD configuree
# php artisan migrate --force
# ------------------------------------------------------------------------------

echo "Deploiement termine avec succes"
exit 0