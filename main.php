<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$command = new \Qcmnagai\Hello\HelloCommand();
$application = new Application('hello', '1.0.1');
$application->add($command);
$application->setDefaultCommand($command->getName(), true);
$application->run();
