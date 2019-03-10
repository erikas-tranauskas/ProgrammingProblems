<?php

/*
    Make the N level steps using symbol #.
    Add empty spaces if the step isn't the last one.
 */

namespace App;

class Steps
{
    public function index($number)
    {
        $result = array();

        for ($i = 1; $i <= $number; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $result[$i] = $result[$i] . "#";
            }
            $result[$i] = $result[$i] . str_repeat(" ", $number - $i);
        }

        return $result;
    }
}
