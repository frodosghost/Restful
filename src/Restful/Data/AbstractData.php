<?php

namespace Restful\Data;

use IteratorAggregate, ArrayIterator;

/**
 * @author James Rickard <james@frodosghost.com>
 */
abstract class AbstractData implements IteratorAggregate
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data = array())
    {
        $this->data = $data;
    }

    /**
     * Validate the data to be correct for a request
     */
    abstract public function validate();

    /**
     * Returns the data associated with the class.
     */
    public function getIterator()
    {
        return new ArrayIterator($this->data);
    }

}
