<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DateType
 *
 * A date or partial date (e.g. just year or year + month). There is no time zone. The format is a union of the schema types gYear, gYearMonth and date. Dates SHALL be valid dates.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: date
 */
class DateType extends ElementType
{

    /**
     * @var int $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param int $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

