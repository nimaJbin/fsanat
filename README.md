
Run locally:

docker compose up -d --build
docker compose down -v

docker compose logs -f app
docker compose exec app php artisan migrate
docker compose exec app php artisan migrate:status

Then open:
http://localhost:8080

The `frontend-build` service automatically runs `npm install` when Vite is not
installed and `npm run build` when `public/build/manifest.json` is missing.

npm install
npm run build

Optional Vite dev service, only if needed later:
docker compose --profile frontend up -d node
