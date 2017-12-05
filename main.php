<?php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;

$command = new \Qcmnagai\Hello\HelloCommand();
$application = new Application();
$application->add($command);
$application->setDefaultCommand($command->getName(), true);
$application->run();
