<?php

/*
    Write a program that prints the numbers from 1 to 100.
    But for multiples of three print “Fizz” instead of the number
    and for the multiples of five print “Buzz”.
    For numbers which are multiples of both three and five print “FizzBuzz”.
 */

namespace App;

class FizzBuzz
{
    public function index($number)
    {
        $result = array();

        for ($i = 1; $i <= $number; $i++) {
            if ($i % 15 === 0) {
                $result[] = "FizzBuzz";
            } elseif ($i % 5 === 0) {
                $result[] = "Buzz";
            } elseif ($i % 3 === 0) {
                $result[] = "Fizz";
            } else {
                $result[] = $i;
            }
        }

        return $result;
    }
}
