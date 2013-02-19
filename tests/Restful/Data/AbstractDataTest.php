<?php

namespace Restful\Data;

use Restful\Data\AbstractData;

class AbstractDataTest extends \PHPUnit_Framework_TestCase
{
    public function testHasType()
    {
        $data = new TestData(array('foo' => 'bar'));

        $this->assertInstanceOf('\ArrayIterator', $data->getIterator());

        $this->assertEquals('foo', $data->getIterator()->key());
        $this->assertEquals('bar', $data->getIterator()->current());
    }

}

class TestData extends AbstractData
{
    public function validate()
    {
    }
}
