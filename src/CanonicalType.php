<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CanonicalType
 *
 * A URI that is a reference to a canonical URL on a FHIR resourcesee [Canonical References](references.html#canonical)If the element is present, it must have either a \@value, an \@id referenced from the Narrative, or extensions
 * XSD Type: canonical
 */
class CanonicalType extends ElementType
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

