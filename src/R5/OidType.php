<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing OidType
 *
 * An OID represented as a URI
 * RFC 3001. See also ISO/IEC 8824:1990 €
 * If the element is present, it must have either a \@value, an \@id referenced from the Narrative, or extensions
 * XSD Type: oid
 */
class OidType extends ElementType
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

