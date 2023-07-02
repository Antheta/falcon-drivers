# Selenium Driver for Falcon

Falcon's selenium driver is a wrapper for [php-webdriver/webdriver](https://github.com/php-webdriver/php-webdriver).

[Documentation](https://falcon-scraper.readme.io/reference/selenium)

## Prerequisites

[Falcon](https://github.com/Antheta/falcon-php) is required for using this driver.


## Installation
```bash
composer require antheta/falcon-selenium-driver
```

## Usage
The SeleniumDriver has to be added to Falcon in order to use selenium:
```php
$falcon = Falcon::getInstance();

// add SeleniumDriver 
$falcon->addDrivers([
    "selenium" => \Antheta\Selenium\SeleniumDriver::class
]);

// set selenium as the default driver
$falcon->useDriver("selenium");

// required options
$falcon->addOptions([
    "server_url" => "http://localhost:4444" // selenium server url
]);

// scrape using selenium
$falcon->run('...');

// access selenium instance
$falcon->getDriverInstance();

// make sure you quit the selenium instance
$falcon->getDriverInstance()->quit();

$falcon->parse()->results();
```

## Selenium options

to be documented...