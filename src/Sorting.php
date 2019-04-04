<?php

/*
    Sorting algorithms.
 */

namespace App;

class Sorting
{
    public function bubbleSort($array)
    {
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($array) - $i - 1; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j + 1];
                    $array[$j + 1] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }

        return $array;
    }

    public function selectionSort($array)
    {
        for ($i = 0; $i < count($array); $i++) {
            $indexMin = $i;
            for ($j = $i + 1; $j < count($array); $j++) {
                if ($array[$j] < $array[$indexMin]) {
                    $indexMin = $j;
                }
            }

            if ($indexMin !== $i) {
                $lesser = $array[$indexMin];
                $array[$indexMin] = $array[$i];
                $array[$i] = $lesser;
            }
        }

        return $array;
    }
}
