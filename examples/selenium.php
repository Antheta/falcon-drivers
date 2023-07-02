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

$falcon->run('https://iltalehti.fi');

// test
//$selenium = $falcon->getDriverInstance();
//$selenium->manage()->timeouts()->implicitlyWait(10);

$p = $falcon->getDriverInstance()->findElement(WebDriverBy::cssSelector('.il-footer-links'))
    ->getText();
    //->click();

print_r("TEXT:");
print_r($p);

// quit
$falcon->getDriverInstance()->quit();

//$falcon->run('http://127.0.0.1/email-crawler/examples/tmp/index.html');

//print_r($falcon->parse()->results());