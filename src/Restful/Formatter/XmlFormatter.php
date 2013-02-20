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

        return $xml . '</' . $this->getRootNode() . '>';
    }

    private function getRootNode()
    {
        return $this->getData()->getIterator()->key();
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

    /*
     * Constructs a basic XML document that follows the conventions laid out
     * by eWay. See: http://www.eway.com.au/support/xml_structure.aspx?p=cvn
     *
     * @return string An XML formated string.
     *
    public function getXml()
    {
        $xml = '<' . self::ROOT_TAG . '>';

        foreach (self::$fields as $field => $properties)
        {
            $content = isset ($this->data[$field]) ? $this->data[$field] : '';

            // Trim the content to fit within the maximum length specified.
            if (strlen ($content) > $properties['max']) {
                $content = substr ($content, 0, $properties['max']);
            }

            $xml .= $this->wrap(self::FIELD_PREFIX . $field, $content);
        }

        return $xml . '</' . self::ROOT_TAG . '>';
    }
*/

