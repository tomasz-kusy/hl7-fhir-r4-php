<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing UnsignedIntType
 *
 * An integer with a value that is not negative (e.g. >= 0)If the element is present, it must have either a @value, an @id referenced from the Narrative, or extensions
 * XSD Type: unsignedInt
 */
class UnsignedIntType extends ElementType
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

