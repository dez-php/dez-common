<?php

namespace Dez\Common;

use Dez\Common\String\Transliteration;

class Str {
    
    public static function transliterate($string = null)
    {
        static $transliterator = null;

        if (! $transliterator) {
            $transliterator = new Transliteration();
        }

        $string = $transliterator->convert($string);
        $string = preg_replace('/\s+/u', ' ', $string);
        $string = preg_replace('/\s+/u', '-', $string);
        $string = preg_replace('/[^a-z0-9-_]+/ui', '', $string);

        return strtolower(trim($string, '-'));
    }
    
}