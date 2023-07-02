# Drivers for Falcon

## Prerequisites

[Falcon](https://github.com/Antheta/falcon-php) is required for using this driver.


## Installation
```bash
composer require antheta/falcon-selenium-driver
```

## Drivers

- [simple_html_dom](https://github.com/voku/simple_html_dom)
- [selenium](https://github.com/php-webdriver/php-webdriver).

### simple_html_dom

#### Usage
The SeleniumDriver has to be added to Falcon in order to use selenium:
```php
$falcon = Falcon::getInstance();

$falcon->addDrivers([
    "simplehtmldom" => \Antheta\Drivers\SimpleHtmlDomDriver::class
]);

$falcon->useDriver('simplehtmldom');

$falcon->parse()->results();
```


### selenium

Falcon's selenium driver is a wrapper for [php-webdriver/webdriver](https://github.com/php-webdriver/php-webdriver).

[Documentation](https://falcon-scraper.readme.io/reference/selenium)

#### Usage
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