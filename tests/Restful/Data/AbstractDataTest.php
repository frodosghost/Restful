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

    public function testAppend()
    {
        $data = new TestData();

        $data->append(array('bar' => 'foo'));

        $this->assertEquals(array('bar'), $data->keys());
        $this->assertEquals(array('foo'), $data->values());
        $this->assertEquals(1, $data->count());
    }

    public function testNestedArrays()
    {
        $data = new TestData(array('foo' => array(
            'bar' => 'foo')
        ));

        $this->assertEquals(array('foo'), $data->keys());
        $this->assertTrue($data->getRecursiveIterator()->hasChildren());
        $this->assertInstanceOf('\ArrayIterator', $data->getRecursiveIterator()->getChildren());
        
        $this->assertEquals('bar', $data->getRecursiveIterator()->getChildren()->key());
        $this->assertEquals('foo', $data->getRecursiveIterator()->getChildren()->current());
    }

}

class TestData extends AbstractData
{
    public function validate()
    {
    }
}
