<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DecimalType
 *
 * A rational number with implicit precision
 * Do not use an IEEE type floating point type, instead use something that works like a true decimal, with inbuilt precision (e.g. Java BigInteger)
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: decimal
 */
class DecimalType extends ElementType
{

    /**
     * @var float $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

