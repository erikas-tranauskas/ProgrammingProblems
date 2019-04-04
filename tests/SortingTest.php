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
        $testResultsBubble = $sorting->bubbleSort($input);
        $testResultsSelection = $sorting->selectionSort($input);

        $this->assertEquals($expectedResults, $testResultsBubble);
        $this->assertEquals($expectedResults, $testResultsSelection);
    }

    public function provider()
    {
        return array(
            array(array(5, 1, 4, 3, 2), array(1, 2, 3, 4, 5)),
            array(array(5, 4, 3, 2, 1), array(1, 2, 3, 4, 5))
        );
    }
}
