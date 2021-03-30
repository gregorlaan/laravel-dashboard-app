# Laravel Dashboard App

## Dev Notes

Create sqlite database:

    touch database/database.sqlite

Run Sail:

    ./vendor/bin/sail up

Running The Scheduler Locally:

    php artisan schedule:work


### Example .env file

    APP_NAME=Laravel
    APP_ENV=local
    APP_KEY=base64:rMSznlowZ1Z2p1yPJ7tF0lrzoo2AzMhauaS29WTqA6Q=
    APP_DEBUG=true
    APP_URL=http://laravel-dashboard-app.test

    LOG_CHANNEL=stack
    LOG_LEVEL=debug

    DB_CONNECTION=sqlite

## Deployment

Add a single cron configuration entry to server that runs the schedule:run command every minute:

    * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
