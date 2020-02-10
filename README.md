# astcmember

This project is about website for conference making by Laravel 5.8.29

## Getting Started

### Installation / Reinstall some plugins
```
composer install
```
### Seting .env
if you use linux / mac
```
cp .env.example .env
```
or if you use window
```
copy .env.example .env
```
setting your database in .env file .. then, generate key 
```
php artisan key:generate
```
### Migrate Database Schema
```
php artisan migrate
```
### Database Seeding
```
php artisan db:seed --class=UniversitiesTableSeeder
php artisan db:seed --class=DistrictsTableSeeder
php artisan db:seed --class=ReviewersTableSeeder
```
### File Permission (Linux / Mac only)
```
sudo chmod 775 -R astcmember
sudo chmod 777 -R astcmember/storage
```