#!/bin/bash
# ==============================================================================
# DEPLOY.SH - Adapté pour LWS Perso (campuschine.org)
# ==============================================================================

set -e

# ------------------------------------------------------------------------------
# CONFIG : Chemin spécifique à ton hébergement LWS
# ------------------------------------------------------------------------------
PROJECT_DIR="/var/www/campuschine.org/htdocs"

# ------------------------------------------------------------------------------
# DIAGNOSTICS
# ------------------------------------------------------------------------------
echo "[D] Passage vers le dossier htdocs..."
cd "$PROJECT_DIR" || { echo "ERROR: Dossier $PROJECT_DIR introuvable"; exit 1; }
echo "[1/4] Répertoire actuel : $(pwd)"

# ------------------------------------------------------------------------------
# COMPOSER : Désactivé sur LWS Perso
# LWS Perso n'autorise pas l'exécution de Composer en ligne de commande.
# C'est ton GitHub Action qui s'en occupe déjà (transfert du dossier vendor).
# ------------------------------------------------------------------------------
echo "[2/4] Info : Composer est géré par GitHub Actions (Dossier vendor déjà présent)."

# ------------------------------------------------------------------------------
# STORAGE LINK : Création du lien symbolique
# Indispensable pour afficher tes images/fichiers uploadés
# ------------------------------------------------------------------------------
echo "[3/4] Vérification du lien storage..."
if [ ! -L "public/storage" ]; then
    # Note : Sur certains LWS, php artisan storage:link peut échouer si exec() est bridé.
    # On tente quand même la commande PHP.
    php artisan storage:link || echo "    Attention : Impossible de créer le lien via PHP"
else
    echo "    Le lien storage existe déjà"
fi

# ------------------------------------------------------------------------------
# CACHE OPTIMIZATION
# On vide les caches pour forcer la prise en compte des nouveaux fichiers
# ------------------------------------------------------------------------------
echo "[4/4] Nettoyage des caches Laravel..."
php artisan optimize:clear || echo "    Info : Erreur mineure lors du nettoyage (souvent dû aux droits)"

# ------------------------------------------------------------------------------
# MIGRATIONS : Optionnel
# À décommenter une fois ta base de données créée sur le panel LWS
# ------------------------------------------------------------------------------
# echo "[MIGRATION] Lancement des migrations..."
# php artisan migrate --force

echo "--- Script terminé avec succès ---"
exit 0