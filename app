#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use \Console\App\Commands\SayHello;
use \Console\App\Commands\TimesCommand;

$app = new Application();
$app->add(new SayHello());
$app->add(new TimesCommand());
$app->run();
