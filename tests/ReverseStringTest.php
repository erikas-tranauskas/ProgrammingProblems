<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\ReverseCharacters;

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
        $reverseString = new ReverseCharacters();
        $testResults = $reverseString->index($input);
        $testResultsAlt = $reverseString->alternate($input);

        $this->assertEquals($expectedResults, $testResults);
        $this->assertEquals($expectedResults, $testResultsAlt);
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
