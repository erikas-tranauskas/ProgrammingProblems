<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\SpiralArray;

class SpiralArrayTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param string $inputNumber
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputNumber, $expectedResults)
    {
        $spiral = new SpiralArray();
        $testResults = $spiral->index($inputNumber);

        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        $resultArray1 = array(
            [1, 2, 3],
            [8, 9, 4],
            [7, 6, 5],
        );

        $resultArray2 = array(
            [1, 2, 3, 4],
            [12, 13, 14, 5],
            [11, 16, 15, 6],
            [10, 9, 8, 7],
        );

        $resultArray3 = array(
            [1, 2, 3, 4, 5],
            [16, 17, 18, 19, 6],
            [15, 24, 25, 20, 7],
            [14, 23, 22, 21, 8],
            [13, 12, 11, 10, 9],
        );

        return array(
            array(3, $resultArray1),
            array(4, $resultArray2),
            array(5, $resultArray3)
        );
    }
}
