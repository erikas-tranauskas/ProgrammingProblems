<?php

/*
    Reverse the characters of the given string.
 */

namespace App;

class ReverseString
{
    public function index($string)
    {
        $result = '';
        $stringArray = str_split($string);

        foreach ($stringArray as $char) {
            $result = $char.$result;
        }

        return $result;
    }
}
