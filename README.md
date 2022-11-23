## Company Staff Manager
## Coding challenge for job application

- Built using Laravel Sail and Vue.js 3

## Instructions for use:
- Make sure your local Docker instance is running 
    * This project runs on Laravel sail common ports so maybe you need to shut down other instances that may be running on your system
- clone repository
- run `cd company-staff-manager`
- run `./vendor/bin/sail up`
- run `./vendor/bin/sail composer install`
- run `./vendor/bin/sail npm install`
- run `./vendor/bin/sail php artisan migrate --seed`
- run `./vendor/bin/sail npm run build`
- go to localhost and browse over the system

## Api routes
http://localhost/api/companies
http://localhost/api/employees (get and post to create new employee)
