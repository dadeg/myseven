This is an easy setup for Laravel with some commonly used packages, features, and routes already set up.

To use:

1. $ git clone https://github.com/dadeg/laravel-starter
2. Set up DB details in app/config/database.php
3. $ composer update
4. $ php artisan migrate --package=rydurham/sentinel
5. $ php artisan db:seed --class="SentinelDatabaseSeeder"

More details can be found at 

- https://github.com/rydurham/sentinel
- https://github.com/laravel/laravel

