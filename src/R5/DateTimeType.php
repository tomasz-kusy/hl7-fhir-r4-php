<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DateTimeType
 *
 * A date, date-time or partial date (e.g. just year or year + month). If hours and minutes are specified, a UTC offset SHALL be populated. The format is a union of the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided due to schema type constraints but may be zero-filled and may be ignored. Dates SHALL be valid dates.
 * UTC offset is allowed for dates and partial dates
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: dateTime
 */
class DateTimeType extends ElementType
{

    /**
     * @var \DateTime $value
     */
    private $value = null;

    /**
     * Gets as value
     *
     * @return \DateTime
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \DateTime $value
     * @return self
     */
    public function setValue(\DateTime $value)
    {
        $this->value = $value;
        return $this;
    }


}

