<?php

/*
    Reverse the characters of the given string.
    Reverse the characters of the given number.
 */

namespace App;

class ReverseCharacters
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

    public function alternate($string)
    {
        return implode("", array_reverse(str_split($string)));
    }

    public function reverseInteger($int)
    {
        $reversedInt = (int)implode("", array_reverse(str_split(strval($int))));

        if ($int < 0) {
            $reversedInt = $reversedInt * -1;
        }

        return $reversedInt;
    }
}
