<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StringType
 *
 * A sequence of Unicode charactersNote that FHIR strings SHALL NOT exceed 1MB in sizeIf the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: string
 */
class StringType extends ElementType
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

