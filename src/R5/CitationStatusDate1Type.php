<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CitationStatusDate1Type
 *
 * The Citation Resource enables reference to any knowledge artifact for purposes of identification and attribution. The Citation Resource supports existing reference structures and developing publication practices such as versioning, expressing complex contributorship roles, and referencing computable resources.
 * XSD Type: Citation.StatusDate1
 */
class CitationStatusDate1Type extends BackboneElementType
{

    /**
     * A definition of the status associated with a date or period.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $activity
     */
    private $activity = null;

    /**
     * Either occurred or expected.
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
     * A definition of the status associated with a date or period.
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
     * A definition of the status associated with a date or period.
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
     * Either occurred or expected.
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
     * Either occurred or expected.
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

