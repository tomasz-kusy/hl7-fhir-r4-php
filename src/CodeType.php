<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CodeType
 *
 * A string which has at least one character and no leading or trailing whitespace and where there is no whitespace other than single spaces in the contentsIf the element is present, it must have either a \@value, an \@id referenced from the Narrative, or extensions
 * XSD Type: code
 */
class CodeType extends ElementType
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

