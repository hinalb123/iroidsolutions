# iRoid-website


## Installation
First Clone project
```bash
clone : https://gitlab.com/iroid-web-team/iroid-website-new  
```
go to folder
```bash
cd iroid-website-new 
```
Install all the dependencies using composer

```bash
composer install
```
Copy the example env file and make the required configuration changes in the .env file

```bash
cp .env.example .env
```
Generate a new application key
```bash
php artisan key:generate
```
Run the database migrations (Set the database connection in .env before migrating)
```bash
php artisan migrate
```

## Database seeding

Run the database seeder and you're done
```bash
php artisan db:seed

php artisan storage:link
```

Please make sure to update tests as appropriate.

## License
