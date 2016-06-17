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

echo String::urlify('ПриветМир') . PHP_EOL;

echo String::underscore('privetMirKakDela') . PHP_EOL;

echo String::cipher('Aldus PageMaker που x περιείχαν εκδοχές του Lorem Ipsum.', 'key') . PHP_EOL;

echo String::decipher('3h0233736n1h36176d256s5k6f5g0x1p6r6m5h1h2b40021e4i6f1l2v1l325u5v3p4g5a1w1f624l3o1f6e043t1u0k4d4n6q625h1h2b426k6f254q492u08336k5u55261z6d6m34272y5n2g5m64693z', 'key') . PHP_EOL;