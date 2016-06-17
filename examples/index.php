<?php

use Dez\Common\String;

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include_once __DIR__ .'/../vendor/autoload.php';

echo String::urlify('Aldus PageMaker που  x   περιείχαν εκδοχές του Lorem Ipsum.') . PHP_EOL;

echo String::transliterate('V zadnjem času se Lorem Ipsum pojavlja tudi v priljubljenih programih za namizno založništvo kot') . PHP_EOL;

echo String::camelize('user_name') . PHP_EOL;

echo String::camelize('model_users_group_roles') . PHP_EOL;

echo String::camelize(String::transliterate('привет_мир_как_дела')) . PHP_EOL;

echo String::underscore('getUserAdminId') . PHP_EOL;

echo String::underscore('ISBN') . PHP_EOL;

echo String::underscore('showCommentsFormatter') . PHP_EOL;

echo String::urlify('ПриветМир - новый хэш тег в сети КоляВасяПетро') . PHP_EOL;

echo String::underscore('privetMirKakDela') . PHP_EOL;