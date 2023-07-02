<?php 

namespace Antheta\Drivers;

use Antheta\Falcon\Drivers\Interfaces\DriverInterface;
use voku\helper\HtmlDomParser;

class SimpleHtmlDomDriver implements DriverInterface
{
    public $instance = null;

    public function scrape(string $target, $options = []) {
        $html = [];

        try {
            $html = HtmlDomParser::file_get_html($target);
        } catch(\Exception $e) {
            throw new \Exception($e);
        } 

        return $html;
    }
}