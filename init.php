<?php

require_once __DIR__.'/vendor/autoload.php';
use Dotenv\Dotenv;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Symfony\Component\Stopwatch\Stopwatch;
// require_once __DIR__.'/functions.php';
// dotenv package
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
// monolog package
$log = new Logger('TechAgency');
$log->pushHandler(new StreamHandler(__DIR__.'/logs/app.log', Level::Info));
$log->info(message: 'app:start');
// pint Package command to run CMD (php vendor/bin/pint but if this already add to composer then just composer run pint in cmd).
$stopwatch = new Stopwatch;
$stopwatch->start('anyName');
$log->info('hello');
$event = $stopwatch->stop('anyName');
// echo $event;
/* var symfony var-dumper 
$a = [4411111111111113,2,4,5,8];
dd($a); */ 