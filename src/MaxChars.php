<?php

/*
    Return the most used character from the given string.
 */

namespace App;

class MaxChars
{
    public function index($string)
    {
        $result = array();

        foreach (str_split($string) as $char) {
            $result[$char]++;
        }

        $value = max($result);
        $key = array_search($value, $result);

        return $key;
    }
}
