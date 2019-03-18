<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Stack;

class StackTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param array $inputData
     * @param string $method
     * @param string $data
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputData, $method, $data, $expectedResults)
    {
        $stack = new Stack($inputData);
        $testResults = $stack->$method($data);

        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        $inputArray1 = array(0, 1, 2, 3, 4, 5);
        $resultArray1 = array(0, 1, 2, 3, 4, 5, 10);
        $resultArray2 = array(0, 1, 2, 3, 4);

        return array(
            array($inputArray1, 'add', 10, $resultArray1),
            array($inputArray1, 'remove', false, $resultArray2)
        );
    }
}
