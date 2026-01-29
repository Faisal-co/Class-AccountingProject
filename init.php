<?php

require_once __DIR__.'/vendor/autoload.php';
use Dotenv\Dotenv;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Symfony\Component\Stopwatch\Stopwatch;

// dotenv package
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
// monolog package
$log = new Logger('TechAgency');
$log->pushHandler(new StreamHandler(__DIR__.'/logs/app.log', Level::Info));
$log->info(message: 'app:start');
// pint Package command to run CMD (php vendor/bin/pint).
$stopwatch = new Stopwatch();
$stopwatch->start('anyName');
$log->info('hello');
$event = $stopwatch->stop('anyName');
echo $event;
