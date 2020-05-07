<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing HTTPVerbType
 *
 * HTTP verbs (in the HTTP command line). See [HTTP rfc](https://tools.ietf.org/html/rfc7231) for details.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: HTTPVerb
 */
class HTTPVerbType extends ElementType
{

    /**
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

