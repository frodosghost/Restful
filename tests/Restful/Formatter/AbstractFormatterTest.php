<?php

namespace Restful\Formatter;

use Restful\Formatter\AbstractFormatter;

class AbstractFormatterTest extends \PHPUnit_Framework_TestCase
{
    public function testHasType()
    {
        $formatter = new TestFormatter();

        $formatter->addData(array('foo' => 'bar'));

        $this->assertInstanceOf('\ArrayIterator', $formatter->getData());
    }

}

class TestFormatter extends AbstractFormatter
{
    public function format()
    {
    }
}
