<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConsentProvisionTypeType
 *
 * How a rule statement is applied, such as adding additional consent or removing consent.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: ConsentProvisionType
 */
class ConsentProvisionTypeType extends ElementType
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

