#pebinect-jobs
Job portal site

##Note
This project is very much still a work in progress.

##Installation
###Install angular-cli
```bash
npm install -g angular-cli
```
###Install angular-2 dependencies
```bash
cd pebinect-jobs/client
npm install
```

###Install Laravel dependencies
```bash
cd pebinect-jobs/api
composer install
```
###Running client on localhost
Open windows command prompt as **Admin**
```bash
cd pebinect-jobs/client
ng serve
```
Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

###Running server on localhost
Modify the port number based on the config
```bash
cd pebinect-jobs/api
php artisan serve --port=9000
```
