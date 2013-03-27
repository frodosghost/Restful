<?php

namespace Restful\Formatter;

/**
 * This formatter formats AbstractData for an XML query.
 *
 * Follows the format of providing a single multidimensional array, with
 * the nested array containing the fields and values.
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
     * Quick method for returning an XML tagged string
     *
     * @return string
     */
    private function wrap($tag, $content)
    {
        return "<$tag>$content</$tag>";
    }

    public function getContentType()
    {
        return 'text/xml';
    }
}
