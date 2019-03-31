<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LinkedList;

class FromLastTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param array $inputData
     * @param array $index
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputData, $index, $expectedResults)
    {
        $list = new LinkedList();

        foreach ($inputData as $singleInputData) {
            $list->insertLast($singleInputData);
        }

        $testResults = $list->fromLast($list, $index);
        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        $inputArray1 = array(1, 2, 3, 4, 5);
        $inputArray2 = array(1, 2, 10, 15, 20);
        $inputArray3 = array(1, 2, 10, 11, 15, 20);

        return array(
            array($inputArray1, 3, 2),
            array($inputArray2, 1, 15),
            array($inputArray3, 0, 20)
        );
    }
}
