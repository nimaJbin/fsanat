
Run locally:

docker compose up -d --build
docker compose down -v

docker compose logs -f app
docker compose exec app php artisan migrate
docker compose exec app php artisan migrate:status

Then open:
http://localhost:8080

Optional Vite dev service, only if needed later:
docker compose --profile frontend up -d node