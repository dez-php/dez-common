<?php

use Dez\Common\Str;

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include_once __DIR__ .'/../vendor/autoload.php';

echo Str::transliterate('Aldus PageMaker που περιείχαν εκδοχές του Lorem Ipsum.') . PHP_EOL;

echo Str::transliterate('V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot') . PHP_EOL;

echo Str::camelize('user_name') . PHP_EOL;

echo Str::camelize('model_users_group_roles') . PHP_EOL;

echo Str::camelize(Str::transliterate('привет_мир_как_дела')) . PHP_EOL;

echo Str::underscore('getUserAdminId') . PHP_EOL;

echo Str::underscore('ISBN') . PHP_EOL;

echo Str::underscore('getD150UserKey') . PHP_EOL;