<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\MaxChars;

class MaxCharsTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param int $input
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($input, $expectedResults)
    {
        $maxChar = new MaxChars();
        $testResults = $maxChar->index($input);

        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        return array(
            array("Hello", "l"),
            array("Hello world!", "l"),
            array("9001", "0"),
            array("90011", "0"),
        );
    }
}
