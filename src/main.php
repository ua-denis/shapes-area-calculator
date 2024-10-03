<?php

declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use App\Infrastructure\CLI\ConsoleApplication;

$app = new ConsoleApplication();
$app->run();