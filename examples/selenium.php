<?php

require_once dirname(__DIR__) . "/vendor/autoload.php";

use Antheta\Falcon\Falcon;
use Facebook\WebDriver\WebDriverBy;

$falcon = Falcon::getInstance();

$falcon->addDrivers([
    "selenium" => \Antheta\Drivers\SeleniumDriver::class
]);

$falcon->useDriver('selenium');

$falcon->addOptions([
    "server_url" => "localhost:4444" // selenium server url
]);

$falcon->run('...');

$p = $falcon->getDriverInstance()->findElement(WebDriverBy::cssSelector('html'))->getText();

// quit
$falcon->getDriverInstance()->quit();

print_r($falcon->parse()->results());