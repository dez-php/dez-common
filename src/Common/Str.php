<?php

namespace Dez\Common;

use Dez\Common\String\Transliteration;

/**
 * Class Str
 * @package Dez\Common
 */
class Str
{

    /**
     * @param string $string
     * @return string
     */
    public static function transliterate($string = null)
    {
        static $transliterator = null;

        if (!$transliterator) {
            $transliterator = new Transliteration();
        }

        return $transliterator->convert($string);
    }

    /**
     * @param string $string
     * @return string
     */
    public static function urlify($string = null)
    {
        $string = static::transliterate($string);
        $string = implode("\x20", array_filter(array_map(function($word){
            return static::underscore(trim($word));
        }, explode("\x20", $string))));
        $string = preg_replace('/[^a-z0-9-_]+/ui', '', str_replace("\x20", '-', $string));

        return strtolower(trim($string, '-'));
    }

    /**
     * Transforms an under_scored_string to a camelCasedOne
     * @param string $underScoreString
     * @return string
     */
    public static function camelize($underScoreString)
    {
        return lcfirst(implode('', array_map('ucfirst', array_map('strtolower', explode('_', $underScoreString)))));
    }

    /**
     * Transforms a camelCasedString to an under_scored_one
     * @param string $cameled
     * @return string
     */
    public static function underscore($cameled)
    {
        return implode('_', array_map('strtolower',
            preg_split('/([A-Z]{1}[^A-Z]+)/', $cameled, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY)));
    }

}