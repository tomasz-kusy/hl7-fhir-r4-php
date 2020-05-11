<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RequestPriorityType
 *
 * Identifies the level of importance to be assigned to actioning the request.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: RequestPriority
 */
class RequestPriorityType extends ElementType
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

