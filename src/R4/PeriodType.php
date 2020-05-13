<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing PeriodType
 *
 * A time period defined by a start and end date and optionally time.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Period
 */
class PeriodType extends ElementType
{

    /**
     * The start of the period. The boundary is inclusive.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $start
     */
    private $start = null;

    /**
     * The end of the period. If the end of the period is missing, it means no end was known or planned at the time the instance was created. The start may be in the past, and the end date in the future, which means that period is expected/planned to end at that time.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $end
     */
    private $end = null;

    /**
     * Gets as start
     *
     * The start of the period. The boundary is inclusive.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The start of the period. The boundary is inclusive.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $start
     * @return self
     */
    public function setStart(\TKusy\Hl7Fhir\R4\DateTimeType $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * The end of the period. If the end of the period is missing, it means no end was known or planned at the time the instance was created. The start may be in the past, and the end date in the future, which means that period is expected/planned to end at that time.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The end of the period. If the end of the period is missing, it means no end was known or planned at the time the instance was created. The start may be in the past, and the end date in the future, which means that period is expected/planned to end at that time.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $end
     * @return self
     */
    public function setEnd(\TKusy\Hl7Fhir\R4\DateTimeType $end)
    {
        $this->end = $end;
        return $this;
    }


}

