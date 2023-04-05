<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DateType
 *
 * A date or partial date (e.g. just year or year + month). There is no UTC offset. The format is a union of the schema types gYear, gYearMonth and date. Dates SHALL be valid dates.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: date
 */
class DateType extends ElementType
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

