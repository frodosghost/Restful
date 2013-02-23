<?php

/**
 * Test the Configuration class
 */

namespace Restful\Connection;

class ConfigurationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Manhattan\LogBundle\Handler\CatchErrorHandler::__construct
     */
    public function testConstruct()
    {
        $handler = new Configuration('foo', 'bar');
        $this->assertInstanceOf('Restful\Connection\Configuration', $handler);
    }

    public function testConstructionPHPError()
    {
        $this->setExpectedException('ErrorException');
        $handler = new Configuration();
    }

    public function testConstructionPHPErrorWithFirstVariable()
    {
        $this->setExpectedException('ErrorException');
        $handler = new Configuration('foo');
    }
}
