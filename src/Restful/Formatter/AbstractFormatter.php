<?php


namespace Restful\Formatter;

use Restful\Data\AbstractData;

/**
 * @author James Rickard <james@frodosghost.com>
 */
abstract class AbstractFormatter
{

    /**
     * @var Restful\Data\AbstractData
     */
    private $data;

    /**
     * Add Data that is to be used within the Formatter
     * 
     * @param mixed $data
     */
    public function addData(AbstractData $data)
    {
        $this->data = $data;
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
