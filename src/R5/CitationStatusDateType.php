<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationStatusDateType
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.StatusDate
 */
class CitationStatusDateType extends BackboneElementType
{

    /**
     * The state or status of the citation record (that will be paired with the period).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $activity
     */
    private $activity = null;

    /**
     * Whether the status date is actual (has occurred) or expected (estimated or anticipated).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $actual
     */
    private $actual = null;

    /**
     * When the status started and/or ended.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as activity
     *
     * The state or status of the citation record (that will be paired with the period).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Sets a new activity
     *
     * The state or status of the citation record (that will be paired with the period).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $activity
     * @return self
     */
    public function setActivity(\TKusy\Hl7Fhir\R5\CodeableConceptType $activity)
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * Gets as actual
     *
     * Whether the status date is actual (has occurred) or expected (estimated or anticipated).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * Sets a new actual
     *
     * Whether the status date is actual (has occurred) or expected (estimated or anticipated).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $actual
     * @return self
     */
    public function setActual(?\TKusy\Hl7Fhir\R5\BooleanType $actual = null)
    {
        $this->actual = $actual;
        return $this;
    }

    /**
     * Gets as period
     *
     * When the status started and/or ended.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * When the status started and/or ended.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R5\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

