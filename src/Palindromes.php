<?php

/*
    Check if given string is a palindrome by returning true of false.
    Palindrome is a word or sequence of characters which reads the same way if you reverse it.
 */

namespace App;

class Palindromes
{
    public function index($string)
    {
        $reversed = implode("", array_reverse(str_split($string)));

        if ($reversed === $string) {
            return true;
        } else {
            return false;
        }
    }
}
