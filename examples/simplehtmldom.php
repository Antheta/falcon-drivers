<?php

require_once dirname(__DIR__) . "/vendor/autoload.php";

use Antheta\Falcon\Falcon;
use Facebook\WebDriver\WebDriverBy;

$falcon = Falcon::getInstance();

$falcon->addDrivers([
    "simplehtmldom" => \Antheta\Drivers\SimpleHtmlDomDriver::class
]);

$falcon->useDriver('simplehtmldom');

$falcon->run('https://marcosraudkett.com');

print_r($falcon->parse()->results());