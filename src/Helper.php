<?php


namespace Profit\Nordea\API;


class Helper
{

    static public function hexRandom($length = 64)
    {
        return join('',array_map(function(){
            return dechex(random_int(0,15));
        },range(0, $length-1)));
    }

    static public function strStudlyCaps($string, array $delimiters = ['-', '_']) {
        return str_replace(
            ' ', '', ucwords(str_replace($delimiters, ' ', $string))
        );
    }

    static public function strCamelCase($string, array $delimiters = ['-', '_']) {
        return lcfirst(static::strStudlyCaps($string, $delimiters));
    }
}