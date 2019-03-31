<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LinkedList;

class MidpointTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param array $inputData
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputData, $expectedResults)
    {
        $list = new LinkedList();

        foreach ($inputData as $singleInputData) {
            $list->insertLast($singleInputData);
        }

        $testResults = $list->midpoint($list);
        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        $inputArray1 = array(1, 2, 3, 4, 5);
        $inputArray2 = array(1, 2, 10, 15, 20);
        $inputArray3 = array(1, 2, 10, 11, 15, 20);

        return array(
            array($inputArray1, 3),
            array($inputArray2, 10),
            array($inputArray3, 10)
        );
    }
}
