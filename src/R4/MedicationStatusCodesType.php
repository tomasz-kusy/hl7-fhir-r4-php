<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicationStatusCodesType
 *
 * A coded concept defining if the medication is in active use.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationStatusCodes
 */
class MedicationStatusCodesType extends ElementType
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

