<?php

namespace Dez\Common\String;

/**
 * Class Cipher
 * @package Dez\Common\String
 */
class Cipher
{

    /**
     * @param string $string
     * @param string $privateKey
     * @return string
     */
    public static function encode($string = null, $privateKey = null)
    {
        $unpacked = unpack('C*', implode(static::cipher($string, $privateKey)));
        $unpacked = array_map(function($short){
            return str_pad(base_convert($short, 10, 36), 2, '0', STR_PAD_LEFT);
        }, $unpacked);

        return implode($unpacked);
    }

    /**
     * @param string $string
     * @param string $privateKey
     * @return string
     */
    public static function decode($string = null, $privateKey = null)
    {
        $chunks = array_map(function($chunk){
            return base_convert($chunk, 36, 10);
        }, str_split($string, 2));

        $packed = null;
        foreach ($chunks as $chunk) {
            $packed .= pack('C*', $chunk);
        }

        return implode(static::cipher($packed, $privateKey));
    }

    /**
     * @param string $string
     * @param string $key
     * @return array
     */
    protected static function cipher($string = null, $key = null)
    {
        $key = md5($key, true);
        $keyLength = strlen($key);
        $chars = $chunks = [];

        for ($i = 0, $length = strlen($string); $i < $length; $i++) {
            $chars[] = $string[$i] ^ $key[$i % $keyLength];
        }

        return $chars;
    }

}