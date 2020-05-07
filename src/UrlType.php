<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing UrlType
 *
 * A URI that is a literal referenceIf the element is present, it must have either a @value, an @id referenced from the Narrative, or extensions
 * XSD Type: url
 */
class UrlType extends ElementType
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

