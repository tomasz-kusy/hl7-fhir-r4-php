<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing EncounterClassHistoryType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * XSD Type: Encounter.ClassHistory
 */
class EncounterClassHistoryType extends BackboneElementType
{

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $class
     */
    private $class = null;

    /**
     * The time that the episode was in the specified class.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as class
     *
     * inpatient | outpatient | ambulatory | emergency +.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * inpatient | outpatient | ambulatory | emergency +.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType $class
     * @return self
     */
    public function setClass(\TKusy\Hl7Fhir\R4\CodingType $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as period
     *
     * The time that the episode was in the specified class.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The time that the episode was in the specified class.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

