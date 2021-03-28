# Laravel Dashboard App

## Dev Notes

Create sqlite database:

    touch database/database.sqlite

Run Sail:

    ./vendor/bin/sail up

Running The Scheduler Locally:

    php artisan schedule:work

### Fix Laravel Mysql 8 Authentication Method Error

Mysql:

    mysql --default-auth=mysql_native_password -p
    ALTER USER 'sail'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password'

## Deployment

Add a single cron configuration entry to server that runs the schedule:run command every minute:

    * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
