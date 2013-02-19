<?php


namespace Restful\Formatter;

use ArrayIterator;

/**
 * @author James Rickard <james@frodosghost.com>
 */
abstract class AbstractFormatter
{

    /**
     * @var ArrayIterator
     */
    private $data;

    /**
     * Add Data that is to be used within the Formatter
     * 
     * @param array $data
     */
    public function addData(array $data)
    {
        $this->data = new ArrayIterator($data);
    }

    /**
     * Returns the data associated with the formatter
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Formats the data into the desired format for making a request
     */
    abstract public function format();

}
