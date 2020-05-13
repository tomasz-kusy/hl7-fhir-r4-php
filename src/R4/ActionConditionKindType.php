<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ActionConditionKindType
 *
 * Defines the kinds of conditions that can appear on actions.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ActionConditionKind
 */
class ActionConditionKindType extends ElementType
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

