# Links

Basic project from practice Laravel V7 inspired by "Building your first Laravel App" Ebook

## Planing

* Create project

```
composer create-project --prefer-dist laravel/laravel links "7.*"
```

## Database Setup

* Config .env file
* Run migrations

## Authentication Scaffolding

```
composer require laravel/ui:^2.4
```

```
php artisan ui vue --auth
```

```
npm install && npm run dev
```

## Testing form

Create a feature test

```
php artisan make:test SubmitLinkTest
```


### Artisan Commands

* Create migration

```
php artisan make:migration create_links_table
```

* Create model

```
php artisan make:model Link
```

* Create model and factory

```
php artisan make:model --factory Link
```

* Create seeder

```
php artisan make:seeder LinksTableSeeder
```

* Refresh database and run seeder

This command will drop all database information and re-run migration and run seeders

```
php artisan migrate:fresh --seed
```

* Thinker shell

Thinker is a shell to work with the model data

```
php artisan tinker
```


* Create controller

This command create a simple controller

```
php artisan make:controller LinkController
```

This command create a resource controller

```
php artisan make:controller LinkController -r
```
