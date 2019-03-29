<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LinkedList;

class InsertAtTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param array $inputData
     * @param array $insertAt
     * @param array $data
     * @param array $getAt
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputData, $insertAt, $data, $getAt, $expectedResults)
    {
        $list = new LinkedList();

        foreach ($inputData as $singleInputData) {
            $list->insertLast($singleInputData);
        }

        $list->insertAt($insertAt, $data);
        $testResults = $list->getAt($getAt);
        $this->assertEquals($expectedResults, $testResults->data);
    }

    public function provider()
    {
        $inputArray1 = array(1, 2);
        $inputArray2 = array(1, 2, 10, 15, 20);

        return array(
            array($inputArray1, 0, 9, 0, 9),
            array($inputArray1, 10, 200, 2, 200),
            array($inputArray1, 1, 99, 2, 2),
            array($inputArray2, 3, 3, 4, 15)
        );
    }
}
