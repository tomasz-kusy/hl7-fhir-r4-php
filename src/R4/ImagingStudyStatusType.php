<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ImagingStudyStatusType
 *
 * The status of the ImagingStudy.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ImagingStudyStatus
 */
class ImagingStudyStatusType extends ElementType
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

