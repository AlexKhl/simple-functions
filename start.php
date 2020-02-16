<?php
require __DIR__ . '/vendor/autoload.php';

use Reaktion\Dispatcher;

$dispatcher = new Dispatcher;
$dispatcher->run($argv);