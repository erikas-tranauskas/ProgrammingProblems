<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\ReverseCharacters;

class ReverseIntegerTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param int $input
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($input, $expectedResults)
    {
        $reverseInt = new ReverseCharacters();
        $testResults = $reverseInt->reverseInteger($input);

        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        return array(
            array(15, 51),
            array(-10, -1),
            array(365, 563),
        );
    }
}
