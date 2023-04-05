<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InstantType
 *
 * An instant in time - known at least to the second
 * Note: This is intended for where precisely observed times are required, typically system logs etc., and not human-reported times - for them, see date and dateTime (which can be as precise as instant, but is not required to be) below. UTC offset is always required
 * If the element is present, it must have either a \@value, an \@id, or extensions
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

