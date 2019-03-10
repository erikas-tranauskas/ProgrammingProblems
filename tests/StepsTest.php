<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Steps;

class StepsTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param int $inputNumber
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputNumber, $expectedResults)
    {
        $steps = new Steps();
        $testResults = $steps->index($inputNumber);

        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        $resultArray1 = array(
            1 => "#   ",
            2 => "##  ",
            3 => "### ",
            4 => "####"
        );

        $resultArray2 = array(
            1 => "#     ",
            2 => "##    ",
            3 => "###   ",
            4 => "####  ",
            5 => "##### ",
            6 => "######"
        );

        return array(
            array(4, $resultArray1),
            array(6, $resultArray2)
        );
    }
}
