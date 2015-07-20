<?php
require dirname(__FILE__) . '/vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler, Symfony\Component\CssSelector\CssSelector;
print (($contents = file_get_contents('https://www.packtpub.com/packt/offers/free-learning')) ? trim((new Crawler($contents))->filter('h2')->first()->text()) : 'Could not load URL') . PHP_EOL;
