<?php

/*
    Compare two string if they are anagrams of each other.
    Anagram is string which can be made from symbols of another string using same characters in the same quantity.
    Do not take spaces and punctuation into consideration.
 */

namespace App;

class Anagrams
{
    public function index($string1, $string2)
    {
        $splitString1 = $this->splitString($string1);
        $splitString2 = $this->splitString($string2);

        if (count($splitString1) !== count($splitString2)) {
            return false;
        }

        foreach ($splitString1 as $key => $single) {
            if ($splitString1[$key] !== $splitString2[$key]) {
                return false;
            }
        }

        return true;
    }

    public function alternate($string1, $string2)
    {
        $splitString1 = $this->splitString($string1);
        $splitString2 = $this->splitString($string2);

        ksort($splitString1);
        ksort($splitString2);

        if ($splitString1 === $splitString2) {
            return true;
        } else {
            return false;
        }
    }

    public function splitString($string)
    {
        $characters = array();
        $cleaned = preg_replace("/[^A-Za-z0-9]/", "", $string);

        foreach (str_split(strtolower($cleaned)) as $char) {
            $characters[$char] = $characters[$char] + 1;
        }

        return $characters;
    }
}
