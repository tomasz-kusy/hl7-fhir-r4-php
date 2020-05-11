<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing InstantType
 *
 * An instant in time - known at least to the secondNote: This is intended for where precisely observed times are required, typically system logs etc., and not human-reported times - for them, see date and dateTime (which can be as precise as instant, but is not required to be) below. Time zone is always requiredIf the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: instant
 */
class InstantType extends ElementType
{

    /**
     * @var \DateTime $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return \DateTime
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \DateTime $value
     * @return self
     */
    public function setValue(\DateTime $value)
    {
        $this->value = $value;
        return $this;
    }


}

