# BACKEND CRUD [Laravel 5.5]

## System Requirements
To be able to run Laravel Boilerplate you have to meet the following requirements:

- PHP > 7.0
- PHP Extensions: PDO, cURL, Mbstring, Tokenizer, Mcrypt, XML, GD
- Composer > 1.0.0

## Installation
1. Install Composer using detailed installation instructions [here]
(https://getcomposer.org/download/)

2. Clone repository
```
$ https://github.com/sasori69/backend_crud.git
```
3. Change into the working directory
```
$ cd backend_crud
```
4. Copy `.env.example` to `.env` and modify according to your environment
```
$ cp .env.example .env
```
5. Install composer dependencies
```
$ composer install
```
6. An application key can be generated with the command
```
$ php artisan key:generate
```
7. Run these commands to create the tables within the defined database and populate seed data
```
$ php artisan migrate
```
If you get an error like a `PDOException` try editing your `.env` file and change `DB_HOST=127.0.0.1` to `DB_HOST=localhost` or `DB_HOST=mysql` (for *docker-compose* environment).

## Run
To start the PHP built-in server
```
$ php artisan serve --port=8080
or
$ php -S localhost:8080 -t public/
```

Now you can browse the site at [http://localhost:8080](http://localhost:8080)  🙌

## License

This is internal-sourced software licensed under the [MIT license](LICENSE).
