# Laravel Dashboard App

## Dev Notes

Running The Scheduler Locally:

    php artisan schedule:work

## Deployment

Add a single cron configuration entry to server that runs the schedule:run command every minute:

    * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
