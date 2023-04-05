<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MessageheaderResponseRequestType
 *
 * HL7-defined table of codes which identify conditions under which acknowledgments are required to be returned in response to a message.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MessageheaderResponseRequest
 */
class MessageheaderResponseRequestType extends ElementType
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

