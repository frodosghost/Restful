<?php

namespace Restful\Formatter;

/**
 * This formatter formats the data for a XML query
 */
class XmlFormatter extends AbstractFormatter
{
    /**
     * {@inheritDoc}
     */
    public function format()
    {
        $xml = '<' . $this->getRootNode() . '>';

        foreach ($this->getNodes() as $field => $property) {
            $xml .= $this->wrap($field, $property);
        }

        return $xml . '</' . $this->getRootNode() . '>';
    }

    /**
     * Accessor to return Root Node
     * 
     * @return string
     */
    private function getRootNode()
    {
        return $this->getData()->getIterator()->key();
    }

    /**
     * Accessor to return nodes from Data
     * 
     * @return ArrayIterator
     */
    private function getNodes()
    {
        return $this->getData()->getRecursiveIterator()->getChildren();
    }

    /**
     * Quick method for returning a string in which a tag wraps some text
     * content.
     */
    private function wrap($tag, $content)
    {
        return "<$tag>$content</$tag>";
    }

}
