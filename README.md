# iRoid-website

This is a project based on company requirements.
In This project, any user can apply for this job and internship.
In Admin we can see the detail of the user and to which he/she applies.
Admin has options to add job and internship requirements.
Then one page for blog and blog detail. It's also handled from the admin side
Then section of portfolio and testimonial clients.
In this, I use custom pagination.
And full UI design developed by me.
All frontend handle in adminpanel.

## Installation
First Clone project
```bash
clone : https://github.com/hinalb123/iroidsolutions.git  
```
go to folder
```bash
cd iroidsolutions
 
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
