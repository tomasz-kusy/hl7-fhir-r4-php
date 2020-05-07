<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing OperationParameterUseType
 *
 * Whether an operation parameter is an input or an output parameter.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: OperationParameterUse
 */
class OperationParameterUseType extends ElementType
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

