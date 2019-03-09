<?php

namespace Tests\FizzBuzzTest;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param int $input
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($input, $expectedResults)
    {
        $fizzBuzz = new FizzBuzz();
        $testResults = $fizzBuzz->index($input);
        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        $resultArray1 = array(
            1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz",
            11, "Fizz", 13, 14, "FizzBuzz"
        );

        $resultArray2 = array(
            1, 2, "Fizz"
        );

        $resultArray3 = array(
            1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz",
            11, "Fizz", 13, 14, "FizzBuzz", 16, 17, "Fizz", 19, "Buzz",
            "Fizz", 22, 23, "Fizz", "Buzz", 26, "Fizz", 28, 29, "FizzBuzz",
            31, 32, "Fizz", 34, "Buzz", "Fizz"
        );

        return array(
            array(15, $resultArray1),
            array(3, $resultArray2),
            array(36, $resultArray3)
        );
    }
}
