## Multi Database App with the Laravel Framework 5.0

This example shows how any registered user can have its own database for one instance of an application.

## Installation

1. Clone the Repo:
    ```
    git clone https://github.com/uxweb/laravel-multi-db.git laravel-multi-db
    ```
2. Install Dependencies:
    ```
    cd laravel-multi-db
    
    composer install
    ```
3. Run Migrations:
    ```
    php artisan migrate
    ```
4. Serve the app locally:
    ```
    php artisan migrate
    ```

## Official Documentation of Used Components

[Middleware](http://laravel.com/docs/5.0/middleware)
Used to set the connection's database to the user's own database.

[Filesystem](http://laravel.com/docs/5.0/filesystem)
Used to create an empty database on user registration.

[Configuration Facade](http://laravel.com/docs/5.0/facades#facade-class-reference).
Used to change a connections default database in configuration.

[Artisan CLI](http://laravel.com/docs/5.0/artisan#calling-commands-outside-of-cli).
Used to run migrations/seeders on the user's own database.

## Contributing

Thank you for considering contributing to this little project!.

### License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
