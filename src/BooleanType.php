<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing BooleanType
 *
 * Value of "true" or "false"If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: boolean
 */
class BooleanType extends ElementType
{

    /**
     * @var bool $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param bool $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

