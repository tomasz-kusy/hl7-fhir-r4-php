<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing InvoicePriceComponentTypeType
 *
 * Codes indicating the kind of the price component.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: InvoicePriceComponentType
 */
class InvoicePriceComponentTypeType extends ElementType
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

