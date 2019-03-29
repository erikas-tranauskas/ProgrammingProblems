<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LinkedList;

class RemoveAtTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param array $inputData
     * @param array $removeAt
     * @param array $getAt
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputData, $removeAt, $getAt, $expectedResults)
    {
        $list = new LinkedList();

        foreach ($inputData as $singleInputData) {
            $list->insertLast($singleInputData);
        }

        $list->removeAt($removeAt);
        $testResults = $list->getAt($getAt);
        $this->assertEquals($expectedResults, $testResults->data);
    }

    public function provider()
    {
        $inputArray1 = array(1, 2);
        $inputArray2 = array(1, 2, 10, 15, 20);

        return array(
            array($inputArray1, 0, 0, 2),
            array($inputArray1, 1, 1, null),
            array($inputArray1, 1, 0, 1),
            array($inputArray2, 3, 3, 20)
        );
    }
}
