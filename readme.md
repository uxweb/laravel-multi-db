## Multi Database App with the Laravel Framework 5.0

This example shows how any registered user can have its own database for one instance of an application with the Laravel Framework.

This kind of apps are called Multi-Tenant Applications because they use [Multi-Tenant Data Architecture](https://msdn.microsoft.com/en-us/library/aa479086.aspx).

Using the power of Laravel 5 this demo:

* Creates a new database for a registered user with a base schema (running a set of migrations)
* Lets an authenticated user to access his own database data.

## Considerations

Any new model intended to be used on any database must set the connection property like this:

```
OtherModel.php

protected $connection = 'tenantdb';
```

Any new migration intended to be part of the base schema for any database must be placed in:

```
database/migrations/tenant
```

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
