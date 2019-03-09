<?php

namespace Tests\FizzBuzzTest;

use PHPUnit\Framework\TestCase;
use App\ReverseString;

class ReverseStringTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param int $input
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($input, $expectedResults)
    {
        $reverseString = new ReverseString();
        $testResults = $reverseString->index($input);
        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        return array(
            array("Hello", "olleH"),
            array("Hello world!", "!dlrow olleH"),
            array("Test case successful", "lufsseccus esac tseT"),
        );
    }
}
