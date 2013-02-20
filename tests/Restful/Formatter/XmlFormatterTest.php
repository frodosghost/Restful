<?php

namespace Restful\Formatter;

use Restful\Formatter\XmlFormatter;
use Restful\Data\AbstractData;

class XmlFormatterTest extends \PHPUnit_Framework_TestCase
{
    private $testData;

    public function setUp()
    {
        $this->testData = new TestData(array('root-foo' => array(
            'foo' => 'bar'
        )));
    }

    public function testFormat()
    {
        $formatter = new XmlFormatter();

        $formatter->addData($this->testData);

        $this->assertInstanceOf('Restful\Formatter\TestData', $formatter->getData());

        $this->assertEquals('<root-foo><foo>bar</foo></root-foo>', $formatter->format());
    }

}

class TestData extends AbstractData
{
    public function validate()
    {

    }
}