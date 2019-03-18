<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\FibonacciSequence;

class FibonacciSequenceTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param string $inputNumber
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputNumber, $expectedResults)
    {
        $fibonacci = new FibonacciSequence();
        $testResults = $fibonacci->index($inputNumber);
        $testRecursionResults = $fibonacci->recursion($inputNumber);

        $this->assertEquals($expectedResults, $testResults);
        $this->assertEquals($expectedResults, $testRecursionResults);
    }

    public function provider()
    {
        return array(
            array(1, 1),
            array(2, 1),
            array(3, 2),
            array(4, 3),
            array(5, 5),
            array(6, 8),
            array(7, 13),
            array(8, 21),
            array(9, 34)
        );
    }
}
