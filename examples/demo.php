<?php

require_once dirname(__DIR__) . "/vendor/autoload.php";

use Antheta\Falcon\Falcon;

$falcon = Falcon::getInstance();

$falcon->addDrivers([
    "selenium" => \Antheta\Selenium\SeleniumDriver::class
]);

$falcon->useDriver('selenium');

$falcon->addOptions([
    "server_url" => "localhost:4444" // selenium server url
]);

$falcon->run('https://google.com');

// quit
$falcon->getDriverInstance()->quit();

print_r($falcon->parse()->results());