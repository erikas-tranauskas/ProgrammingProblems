<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\StringCapitalization;

class StringCapitalizationTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param string $inputString
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputString, $expectedResults)
    {
        $capitalization = new StringCapitalization();
        $testResults = $capitalization->index($inputString);

        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        return array(
            array("Hello", "Hello", true),
            array("hello", "Hello", true),
            array("hello world", "Hello World", true),
        );
    }
}
