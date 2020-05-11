<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConceptMapGroupUnmappedModeType
 *
 * Defines which action to take if there is no match in the group.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ConceptMapGroupUnmappedMode
 */
class ConceptMapGroupUnmappedModeType extends ElementType
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

