<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LinkedList;

class GetSizeTest extends TestCase
{
    /**
     * @dataProvider provider
     * @param array $inputData
     * @param array $expectedResults
     *
     */
    public function testNormalInputSet($inputData, $expectedResults)
    {
        $list = new LinkedList();

        foreach ($inputData as $singleInputData) {
            $list->insertFirst($singleInputData);
        }

        $testResults = $list->getSize();
        $this->assertEquals($expectedResults, $testResults);
    }

    public function provider()
    {
        return array(
            array(
                array(1, 2),
                2
            ),
            array(
                array(1, 1, 1),
                3
            ),
            array(
                array(1, 1, 1, 2, 2, 2),
                6
            )
        );
    }
}
