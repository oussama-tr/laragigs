# LaraGigs app

An app for listing Laravel gigs/jobs. This project is created using Laravel 9.

![Alt text](/public/images/screen.png "LaraGigs")

## Usage

### Database Setup
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```

### Seeding The Databaase
To add the dummy listings with a single user, run the following
```
php artisan db:seed
```

### File Uploading
Listing images are uploaded into "storage/app/public". Create a symlink with the following command to make them publicly accessible.
```
php artisan storage:link
```

### Running The App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```
