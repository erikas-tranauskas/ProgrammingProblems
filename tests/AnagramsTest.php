<?php

namespace Tests\FizzBuzzTest;

use PHPUnit\Framework\TestCase;
use App\Anagrams;

class AnagramsTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param string $inputString1
     * @param string $inputString2
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputString1, $inputString2, $expectedResults)
    {
        $anagrams = new Anagrams();
        $testResults = $anagrams->index($inputString1, $inputString2);
        $testResultsAlt = $anagrams->alternate($inputString1, $inputString2);

        $this->assertEquals($expectedResults, $testResults);
        $this->assertEquals($expectedResults, $testResultsAlt);
    }

    public function provider()
    {
        return array(
            array("Rail Safety!", "Fairy Tales", true),
            array("Hello", "Hello", true),
            array("Rail Safety", "Fairy Tales", true),
            array("Rail Safety!", "Fairy Tales", true),
            array("Rail Safety!", "Fairy Tales2", false)
        );
    }
}
