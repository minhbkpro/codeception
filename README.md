# Setup

1. Clone repo
2. Duplicate ```.env.example``` file and rename to ```.env```, change DB connection info to connect to your existing mysql server.
3. Run docker by ```docker-compose up -d```, find utils_container_name in console logs
4. Install composer ```docker exec -it utils_container_name composer install```
5. Generate models ```docker exec -it utils_container_name php artisan code:models```
> If your get any error, try to download generate package at "master" branch from here https://github.com/reliese/laravel and replace package content in vendor folder.

# Commands

Run all test:
```
docker exec -it utils_container_name codecept run
```

Run only acceptance test
```
docker exec -it utils_container_name codecept run acceptance
```

Run only functional test:
```
docker exec -it utils_container_name codecept run functional
```

Run only unit test:
```
docker exec -it utils_container_name codecept run unit
```
