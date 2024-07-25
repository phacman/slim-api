d-up: ; composer install --working-dir=./html/slim && docker compose up -d
d-up-build: ; composer install --working-dir=./html/slim && docker compose up -d --build --remove-orphans
d-down: ; docker compose down
d-logs: ; docker compose logs -f
d-ps: ; docker compose ps