<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing IdType
 *
 * Any combination of letters, numerals, "-" and ".", with a length limit of 64 characters. (This might be an integer, an unprefixed OID, UUID or any other identifier pattern that meets these constraints.) Ids are case-insensitive.RFC 4122If the element is present, it must have either a @value, an @id referenced from the Narrative, or extensions
 * XSD Type: id
 */
class IdType extends ElementType
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

