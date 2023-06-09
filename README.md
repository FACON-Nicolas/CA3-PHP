## Laravel 8 Tumblr Clone

This is a git repository for a Server-Side Development project in Dundalk Institute of Technology. It contains every needed file to run a Tumblr clone website with Laravel.


This repository is linked to [this youtube video](https://youtu.be/2UU2x5yLCIA) that show the web application in action.

•	Author: FACON Nicolas & JOAO Ethan

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone https://github.com/FACON-Nicolas/CA3-PHP.git
cd CA3-PHP
cp .env.example .env
composer install
php artisan key:generate
php artisan storage:link
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
php artisan db:seed
```
