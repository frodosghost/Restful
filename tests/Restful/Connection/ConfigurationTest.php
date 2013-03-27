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

}
