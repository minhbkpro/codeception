# Overview

This repo is not about install codeception along with your project, but to write and run acceptance test separately.

We use laravel for easily setup ORM, factory.

# Required

1. Docker
2. Docker
3. Docker

# Setup

1. Clone repo.
2. Duplicate ```.env.example``` file and rename to ```.env```, change DB connection info to connect to your existing mysql server.
3. Run docker by ```docker-compose up -d```, find utils_container_name in console logs.
4. Install composer ```docker exec -it utils_container_name composer install```.
5. Generate models ```docker exec -it utils_container_name php artisan code:models```.
> If your get any error, try to download generator package from "master" branch at https://github.com/reliese/laravel and replace package content in vendor folder.
6. Create factory, docs here https://laravel.com/docs/5.6/database-testing#writing-factories.
> Note that our models not in ```App\``` but in ```App\Models\```.

# Commands

Run acceptance test
```
docker exec -it utils_container_name codecept run acceptance
```
