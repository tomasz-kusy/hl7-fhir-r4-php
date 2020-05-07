<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SampledDataDataType
 *
 * 
 * XSD Type: SampledDataDataType
 */
class SampledDataDataType extends ElementType
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

