<?php

/*
    Divide the given array into sub-arrays where each sub-array size is in given length.
 */

namespace App;

class ArrayChunks
{
    public function index($array, $length)
    {
        return array_chunk($array, $length);
    }

    public function manual($array, $length)
    {
        $chunked = array();

        foreach ($array as $single) {
            $lastElement = end($chunked);

            if (!$lastElement || count($lastElement) === $length) {
                array_push($chunked, array($single));
            } else {
                array_push($chunked[key($chunked)], $single);
            }
        }

        return $chunked;
    }
}
