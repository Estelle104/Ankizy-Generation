# Workflow WordPress

## Code
Les modifications du thème sont synchronisées avec Git.

## Base WordPress
Un seul développeur modifie le contenu WordPress à la fois.

## Passage de main
Le développeur actif doit :

1. Exporter la base :
   docker compose exec -T db mariadb-dump -u root -prootpassword wordpress > database/wordpress-dev.sql

2. Commit :
   git add database/wordpress-dev.sql
   git commit -m "Update WordPress database"

3. Push :
   git push origin dev

Le développeur suivant :

1. git pull origin dev
2. Importer database/wordpress-dev.sql
3. Commencer son travail.

Ne jamais travailler simultanément sur la base WordPress locale.