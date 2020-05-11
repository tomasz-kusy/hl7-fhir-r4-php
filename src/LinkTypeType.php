<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing LinkTypeType
 *
 * The type of link between this patient resource and another patient resource.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: LinkType
 */
class LinkTypeType extends ElementType
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

