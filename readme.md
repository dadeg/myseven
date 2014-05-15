this is an app for creating workouts.

To use:

1. $ git clone https://github.com/dadeg/myseven
2. Set up DB details in app/config/database.php
3. $ composer install
4. $ php artisan migrate --package=rydurham/sentinel
5. $ php artisan db:seed --class="SentinelDatabaseSeeder"
6. $ php artisan migrate

More details can be found at 

- https://github.com/rydurham/sentinel
- https://github.com/laravel/laravel

