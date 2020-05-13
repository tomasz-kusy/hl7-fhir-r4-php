<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing EncounterStatusHistoryType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * XSD Type: Encounter.StatusHistory
 */
class EncounterStatusHistoryType extends BackboneElementType
{

    /**
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @var \TKusy\Hl7Fhir\R4\EncounterStatusType $status
     */
    private $status = null;

    /**
     * The time that the episode was in the specified status.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as status
     *
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @return \TKusy\Hl7Fhir\R4\EncounterStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * planned | arrived | triaged | in-progress | onleave | finished | cancelled +.
     *
     * @param \TKusy\Hl7Fhir\R4\EncounterStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\EncounterStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as period
     *
     * The time that the episode was in the specified status.
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
     * The time that the episode was in the specified status.
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

