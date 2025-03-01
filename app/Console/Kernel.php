protected function schedule(Schedule $schedule)
{
    $schedule->exec('cd /var/www/html/inven && npm run dev')->everyMinute();
}
