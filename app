#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use \Console\App\Commands\SayHello;

$app = new Application();
$app->add(new SayHello());
$app->run();
