<?php

namespace Tests\FizzBuzzTest;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function testNormalInputSet()
    {
        $fizzBuzz = new FizzBuzz();

        $inputSet = array(

        );

        $expectedResults = array(

        );

        $testResults = $fizzBuzz->index($inputSet);
        $this->assertEquals($expectedResults, $testResults);
    }
}
