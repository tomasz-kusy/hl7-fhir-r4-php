<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CarePlanActivityKindType
 *
 * Resource types defined as part of FHIR that can be represented as in-line definitions of a care plan activity.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CarePlanActivityKind
 */
class CarePlanActivityKindType extends ElementType
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

