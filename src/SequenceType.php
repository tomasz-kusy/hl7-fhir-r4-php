<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SequenceType
 *
 * Type if a sequence -- DNA, RNA, or amino acid sequence.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: sequenceType
 */
class SequenceType extends ElementType
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

