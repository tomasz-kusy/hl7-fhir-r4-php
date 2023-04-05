<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResearchStudyProgressStatusType
 *
 * A scientific study of nature that sometimes includes processes involved in health and disease. For example, clinical trials are research studies that involve people. These studies may be related to new ways to screen, prevent, diagnose, and treat disease. They may also study certain outcomes and certain groups of people by looking at data collected in the past or future.
 * XSD Type: ResearchStudy.ProgressStatus
 */
class ResearchStudyProgressStatusType extends BackboneElementType
{

    /**
     * Label for status or state (e.g. recruitment status).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $state
     */
    private $state = null;

    /**
     * An indication of whether or not the date is a known date when the state changed or will change. A value of true indicates a known date. A value of false indicates an estimated date.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $actual
     */
    private $actual = null;

    /**
     * Date range.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as state
     *
     * Label for status or state (e.g. recruitment status).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * Label for status or state (e.g. recruitment status).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $state
     * @return self
     */
    public function setState(\TKusy\Hl7Fhir\R5\CodeableConceptType $state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as actual
     *
     * An indication of whether or not the date is a known date when the state changed or will change. A value of true indicates a known date. A value of false indicates an estimated date.
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
     * An indication of whether or not the date is a known date when the state changed or will change. A value of true indicates a known date. A value of false indicates an estimated date.
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
     * Date range.
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
     * Date range.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }


}

