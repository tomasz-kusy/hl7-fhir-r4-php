<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TimeType
 *
 * A time during the day, with no date specifiedIf the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: time
 */
class TimeType extends ElementType
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

