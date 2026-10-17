# Laravel POS + Tasks Application

This package combines the original Laravel POS skeleton with the features from the TFA4 CodeIgniter project, converted to Laravel conventions.

## Included

- Laravel routes and Blade pages
- Login/logout using Laravel authentication middleware
- Customer and user CRUD pages
- Task list and today's tasks
- User avatar upload validation
- Eloquent models, migration, and database seeder

## Install into a Laravel project

Copy the contents of this folder into a fresh Laravel application. Ensure the standard Laravel `config/auth.php`, `app/Http/Kernel.php` or Laravel middleware configuration, `.env`, and `composer.json` are present.

```bash
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
php artisan serve
```

Default seeded account: `admin` / `password`. Change it immediately in a real deployment.

The application uses the `users.username` column for login. If the fresh Laravel version uses a different authentication configuration, update the user provider model in `config/auth.php` accordingly.
