<?php

/*
    Return NxN spiral matrix by a given number.
    Example if the given number is 3:
    1 2 3
    8 9 4
    7 6 5
 */

namespace App;

class SpiralArray
{
    public function index($number)
    {
        $results = array();

        for ($i = 0; $i < $number; $i++) {
            array_push($results, array());
        }

        $counter = 1;
        $startColumn = 0;
        $endColumn = $number - 1;
        $startRow = 0;
        $endRow = $number - 1;

        while ($startColumn <= $endColumn && $startRow <= $endRow) {
            // Top row
            for ($i = $startColumn; $i <= $endColumn; $i++) {
                $results[$startRow][$i] = $counter;
                $counter++;
            }

            $startRow++;

            //Right column
            for ($i = $startRow; $i <= $endRow; $i++) {
                $results[$i][$endColumn] = $counter;
                $counter++;
            }

            $endColumn--;

            //Bottom row
            for ($i = $endColumn; $i >= $startColumn; $i--) {
                $results[$endRow][$i] = $counter;
                $counter++;
            }

            $endRow--;

            //Left column
            for ($i = $endRow; $i >= $startRow; $i--) {
                $results[$i][$startColumn] = $counter;
                $counter++;
            }

            $startColumn++;
        }

        foreach ($results as &$single) {
            ksort($single);
        }

        return $results;
    }
}
