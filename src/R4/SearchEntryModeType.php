<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SearchEntryModeType
 *
 * Why an entry is in the result set - whether it's included as a match or because of an _include requirement, or to convey information or warning information about the search process.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SearchEntryMode
 */
class SearchEntryModeType extends ElementType
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

