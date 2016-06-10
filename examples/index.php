<?php

use Dez\Common\Str;

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include_once __DIR__ .'/../vendor/autoload.php';

echo Str::transliterate('Aldus PageMaker που περιείχαν εκδοχές του Lorem Ipsum.');

echo PHP_EOL;

echo Str::transliterate('V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot');