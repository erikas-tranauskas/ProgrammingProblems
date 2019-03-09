<?php

namespace Tests\FizzBuzzTest;

use PHPUnit\Framework\TestCase;
use App\Palindromes;

class PalindromesTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param int $input
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($input, $expectedResults)
    {
        $reverseString = new Palindromes();
        $testResults = $reverseString->index($input);

        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        return array(
            array("Hello", false),
            array("abba", true),
            array("001100", true),
        );
    }
}
