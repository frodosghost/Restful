<?php

namespace Restful\Data;

use Restful\Data\AbstractData;

class AbstractDataTest extends \PHPUnit_Framework_TestCase
{
    public function testConfiguration()
    {
        $data = new TestData(array('foo' => 'bar'));

        $this->assertInstanceOf('\ArrayIterator', $data->getIterator());

        $this->assertEquals('foo', $data->getIterator()->key());
        $this->assertEquals('bar', $data->getIterator()->current());
    }

    public function testArrayAccessors()
    {
        $data = new TestData(array('foo' => 'bar', 'bar' => 'foo'));

        $this->assertEquals(array('foo', 'bar'), $data->keys());
        $this->assertEquals(array('bar', 'foo'), $data->values());
        $this->assertEquals(2, $data->count());
    }

}

class TestData extends AbstractData
{
    public function validate()
    {
    }
}
