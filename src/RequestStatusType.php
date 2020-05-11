<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RequestStatusType
 *
 * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: RequestStatus
 */
class RequestStatusType extends ElementType
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

