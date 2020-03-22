# Laravel: Local Docker Setup

This project provides a minimal Docker-Setup for the usage of Laravel with MySQL.

## Running Migrations

Log into the running app container (phpentrypoint) and type out the following command:

```
 $ docker exec -it ${container} /bin/bash
```

Run the migrations as usual, using artisan:

```
 $ php artisan migrate
```

In general, every artisan command can be used to perform functions inside the container


