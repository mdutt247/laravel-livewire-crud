# Laravel Livewire CRUD Example

Follow below steps to execute this project

1. `git clone https://github.com/mdutt247/laravel-livewire-crud.git`
2. `cd laravel-livewire-crud`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. Set your database credentials in `.env` file
7. `php artisan migrate:fresh --seed`
9. `npm install && npm run dev`
10. `php artisan serve`
11. Visit `localhost:8000/login` in your browser
12. Choose `email` from `users` table, password is `password`

Below commands are used to create this project

`composer create-project laravel/laravel laravel-livewire-crud`
`cd laravel-livewire-crud`
`composer require laravel/jetstream`
`php artisan jetstream:install livewire`
`npm install`
`npm run dev`
`php artisan migrate`
`php artisan vendor:publish --tag=jetstream-views`
`php artisan make:model Contact -mf` to create model, migration and factory
`php artisan make:livewire contact`
