<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureMapSourceListModeType
 *
 * If field is a list, how to manage the source.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: StructureMapSourceListMode
 */
class StructureMapSourceListModeType extends ElementType
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

