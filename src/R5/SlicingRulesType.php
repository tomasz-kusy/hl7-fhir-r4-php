<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SlicingRulesType
 *
 * How slices are interpreted when evaluating an instance.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SlicingRules
 */
class SlicingRulesType extends ElementType
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

