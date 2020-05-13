<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing UuidType
 *
 * A UUID, represented as a URISee The Open Group, CDE 1.1 Remote Procedure Call specification, Appendix A.If the element is present, it must have either a \@value, an \@id referenced from the Narrative, or extensions
 * XSD Type: uuid
 */
class UuidType extends ElementType
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

