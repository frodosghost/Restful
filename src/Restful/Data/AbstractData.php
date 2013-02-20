<?php

namespace Restful\Data;

use IteratorAggregate, ArrayIterator, RecursiveArrayIterator;

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

    public function keys()
    {
        return array_keys($this->data);
    }

    public function values()
    {
        return array_values($this->data);
    }

    public function count()
    {
        return count($this->data);
    }

    /**
     * Returns the Iterator associated with the class.
     */
    public function getIterator()
    {
        return new ArrayIterator($this->data);
    }

    /**
     * Returns the RecursiveIterator associated with the class.
     */
    public function getRecursiveIterator()
    {
        return new RecursiveArrayIterator($this->data);
    }

}
