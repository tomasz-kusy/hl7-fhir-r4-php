<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PositiveIntType
 *
 * An integer with a value that is positive (e.g. >0)
 * If the element is present, it must have either a \@value, an \@id referenced from the Narrative, or extensions
 * XSD Type: positiveInt
 */
class PositiveIntType extends ElementType
{

    /**
     * @var int $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

