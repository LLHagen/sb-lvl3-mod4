#!/usr/bin/env php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use \Console\App\Commands\AppGuestCommand;

$app = new Application();
$app->add(new AppGuestCommand());
$app->run();
