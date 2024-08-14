Copy env.example

```bash
  cp .env.example .env
```

Docker build & up

```bash
  docker-compose build
  docker-compose up -d
```

Install dependencies

```bash
  docker-compose exec php composer install
```

Generate key

```bash
  php artisan key:generate
```

Run migrations and seeders

```bash
  php artisan migrate --seed
```

Run server

```bash
  php artisan serve
```

Tasks

```bash
  git checkout task_1
  git checkout task_2
  git checkout task_3
```
