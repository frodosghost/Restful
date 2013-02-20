<?php

namespace Restful\Formatter;

use Restful\Formatter\AbstractFormatter;
use Restful\Data\AbstractData;

class AbstractFormatterTest extends \PHPUnit_Framework_TestCase
{
    private $testData;

    public function setUp()
    {
        $this->testData = new TestAbstractData(array('foo' => array(
            'foo' => 'bar'
        )));
    }

    public function testHasType()
    {
        $formatter = new TestFormatter();

        $formatter->addData($this->testData);

        $this->assertInstanceOf('Restful\Formatter\TestAbstractData', $formatter->getData());
    }

}

class TestFormatter extends AbstractFormatter
{
    public function format()
    {
    }
}

class TestAbstractData extends AbstractData
{
    public function validate()
    {
    }
}