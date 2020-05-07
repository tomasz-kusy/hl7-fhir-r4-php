<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RequestIntentType
 *
 * Codes indicating the degree of authority/intentionality associated with a request.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: RequestIntent
 */
class RequestIntentType extends ElementType
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

