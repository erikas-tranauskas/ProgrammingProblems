<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Sorting;

class SortingTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param int $input
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($input, $expectedResults)
    {
        $sorting = new Sorting();
        $testResults = $sorting->bubbleSort($input);

        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        return array(
            array(array(5, 1, 4, 3, 2), array(1, 2, 3, 4, 5)),
            array(array(5, 4, 3, 2, 1), array(1, 2, 3, 4, 5))
        );
    }
}
