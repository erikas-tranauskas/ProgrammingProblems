<?php

/*
    Capitalize first letter of each word in the given string sentence.
 */

namespace App;

class StringCapitalization
{
    public function index($string)
    {
        $stringArray = explode(" ", $string);

        foreach ($stringArray as &$word) {
            $word = ucfirst($word);
        }

        return implode(" ", $stringArray);
    }
}
