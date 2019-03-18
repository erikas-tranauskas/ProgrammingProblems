<?php

/*
    Print the n-th number of the Fibonacci sequence.
    N is passed as a parameter.
 */

namespace App;

class FibonacciSequence
{
    public function index($number)
    {
        $results = array(0, 1);

        for ($i = 2; $i <= $number; $i++) {
            array_push($results, $results[$i - 1] + $results[$i - 2]);
        }

        return $results[$number];
    }

    public function recursion($number)
    {
        static $cache = array();

        if ($number < 2) {
            return $number;
        }

        if (empty($cache[$number])) {
            $cache[$number] = $this->recursion($number - 1) + $this->recursion($number - 2);
        }

        return $cache[$number];
    }
}
