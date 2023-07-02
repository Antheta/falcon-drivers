<?php

require_once dirname(__DIR__) . "/vendor/autoload.php";

use Antheta\Falcon\Falcon;

$falcon = Falcon::getInstance();

$falcon->addDrivers([
    "simplehtmldom" => \Antheta\Drivers\SimpleHtmlDomDriver::class
]);

$falcon->useDriver('simplehtmldom');

$falcon->run('...');

print_r($falcon->parse()->results());