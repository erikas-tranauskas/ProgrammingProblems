<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\ArrayChunks;

class ArrayChunksTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param array $inputArray
     * @param int $inputLength
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputArray, $inputLength, $expectedResults)
    {
        $arrayChunks = new ArrayChunks();
        $testResults = $arrayChunks->index($inputArray, $inputLength);
        $testResultsManual = $arrayChunks->manual($inputArray, $inputLength);

        $this->assertEquals($expectedResults, $testResults);
        $this->assertEquals($expectedResults, $testResultsManual);
    }

    public function provider()
    {
        $testArray1 = array(
            1, 2, 3, 4, 5
        );

        $testArray2 = array(
            1, 2, 3, 4, 5, 6
        );

        $testResults1 = array(
            array(1, 2, 3),
            array(4, 5),
        );

        $testResults2 = array(
            array(1, 2),
            array(3, 4),
            array(5),
        );

        $testResults3 = array(
            array(1, 2),
            array(3, 4),
            array(5, 6),
        );

        return array(
            array($testArray1, 3, $testResults1),
            array($testArray1, 2, $testResults2),
            array($testArray2, 2, $testResults3)
        );
    }
}
