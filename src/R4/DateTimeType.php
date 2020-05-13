<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing DateTimeType
 *
 * A date, date-time or partial date (e.g. just year or year + month). If hours and minutes are specified, a time zone SHALL be populated. The format is a union of the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided due to schema type constraints but may be zero-filled and may be ignored. Dates SHALL be valid dates.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: dateTime
 */
class DateTimeType extends ElementType
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

