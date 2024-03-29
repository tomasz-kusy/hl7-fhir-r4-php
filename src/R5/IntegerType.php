<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing IntegerType
 *
 * A whole number
 * 32 bit number; for values larger than this, use decimal
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: integer
 */
class IntegerType extends ElementType
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

