<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LinkedList;

class GetAtTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param array $inputData
     * @param array $getAt
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputData, $getAt, $expectedResults)
    {
        $list = new LinkedList();

        foreach ($inputData as $singleInputData) {
            $list->insertLast($singleInputData);
        }

        $testResults = $list->getAt($getAt);
        $this->assertEquals($expectedResults, $testResults->data);
    }

    public function provider()
    {
        $inputArray1 = array(1, 2);
        $inputArray2 = array(1, 2, 10, 15, 20);

        return array(
            array($inputArray1, 0, 1),
            array($inputArray1, 1, 2),
            array($inputArray2, 4, 20),
        );
    }
}
