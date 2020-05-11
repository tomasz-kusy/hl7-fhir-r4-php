<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing IdentityAssuranceLevelType
 *
 * The level of confidence that this link represents the same actual person, based on NIST Authentication Levels.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: IdentityAssuranceLevel
 */
class IdentityAssuranceLevelType extends ElementType
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

