<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing Integer64Type
 *
 * A very large whole number
 * Typically this is used for record counters (e.g. database keys)
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: integer64
 */
class Integer64Type extends ElementType
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

