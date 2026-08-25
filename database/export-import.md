# Export
docker compose exec -T db mariadb-dump -u root -prootpassword wordpress > database/wordpress-dev.sql

# Import
docker compose exec -T db mariadb -u root -prootpassword wordpress < database/wordpress-dev.sql

# Suppression base docker
```
docker compose down -v

docker compose up -d
```
