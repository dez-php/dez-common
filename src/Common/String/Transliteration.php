<?php

namespace Dez\Common\String;

use Dez\Common\String;

/**
 * Class Transliteration
 * @package Dez\Common\String
 */
class Transliteration extends String
{

    /**
     * @var array|mixed
     */
    protected $map = [];

    /**
     * Transliteration constructor.
     */
    public function __construct()
    {
        $this->map = include_once __DIR__ . '/maps/common.php';
    }

    /**
     * @param string $string
     * @return string
     */
    public function convert($string = null)
    {
        return str_replace(array_keys($this->map), array_values($this->map), $string);
    }

}