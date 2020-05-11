<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExposureStateType
 *
 * Whether the results by exposure is describing the results for the primary exposure of interest (exposure) or the alternative state (exposureAlternative).If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ExposureState
 */
class ExposureStateType extends ElementType
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

