<?php

namespace Restful\Formatter;

use Restful\Formatter\XmlFormatter;
use Restful\Data\AbstractData;

class XmlFormatterTest extends \PHPUnit_Framework_TestCase
{

    public function testFormat()
    {
        $formatter = new XmlFormatter();

        $testData = new TestData(array('root-foo' => array(
            'foo' => 'bar'
        )));

        $formatter->addData($testData);

        $this->assertInstanceOf('Restful\Formatter\TestData', $formatter->getData());

        $this->assertEquals('<?xml version="1.0" encoding="UTF-8" ?><root-foo><foo>bar</foo></root-foo>', $formatter->format());
    }

    public function testSecondLevelFormat()
    {
        $formatter = new XmlFormatter();

        $testData = new TestData(array('root-foo' => array(
            'foo' => array(
                'foo' => 'bar'
            )
        )));

        $formatter->addData($testData);

        $this->assertInstanceOf('Restful\Formatter\TestData', $formatter->getData());

        $this->assertEquals('<?xml version="1.0" encoding="UTF-8" ?><root-foo><foo><foo>bar</foo></foo></root-foo>', $formatter->format(), '->format() returns a second level of data.');
    }   

    public function testContentType()
    {
        $formatter = new XmlFormatter();

        $this->assertEquals('text/xml', $formatter->getContentType(), '->getContentType() returns the correct ContentType');
    }

}

class TestData extends AbstractData
{
    public function validate()
    {

    }
}