<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AllergyIntoleranceCriticalityType
 *
 * Estimate of the potential clinical harm, or seriousness, of a reaction to an identified substance.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: AllergyIntoleranceCriticality
 */
class AllergyIntoleranceCriticalityType extends ElementType
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

