<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LinkedList;

class InsertFirstTest extends TestCase
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

        $testResults = $list->head->data;
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
                array(1, 2, 3),
                3
            )
        );
    }
}
