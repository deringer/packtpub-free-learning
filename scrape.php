<?php
require dirname(__FILE__) . '/vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler as C;
print (($c = @file_get_contents('https://www.packtpub.com/packt/offers/free-learning')) ? trim((new C($c))->filter('h2')->first()->text()) : 'Could not load URL') . PHP_EOL;
