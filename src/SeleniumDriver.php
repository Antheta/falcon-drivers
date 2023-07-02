<?php 

namespace Antheta\Drivers;

use Antheta\Falcon\Drivers\Interfaces\DriverInterface;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\Chrome\ChromeOptions;

class SeleniumDriver implements DriverInterface
{
    public $instance = null;

    public function scrape(string $target, $options = []) {
        $html = [];

        try {
            $this->instance = RemoteWebDriver::create($options['server_url'], DesiredCapabilities::chrome());

            //$this->handleOptions($options);

            $this->instance->get($target);

            $html = $this->instance->findElement(WebDriverBy::tagName('html'))->getDomProperty('innerHTML');
        } catch(\Exception $e) {
            //print_r($e);
            throw new \Exception($e);
        } finally {
        }

        return $html;
    }

    public function quit() 
    {
        $this->instance->quit();
    }

    // TODO
    protected function handleOptions() {
        $chromeOptions = new ChromeOptions();
        $chromeOptions->addArguments(['--headless']);

        if (isset($options['headers'])) {
        }   
    }
}