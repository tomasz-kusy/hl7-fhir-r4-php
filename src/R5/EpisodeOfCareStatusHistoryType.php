<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EpisodeOfCareStatusHistoryType
 *
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 * XSD Type: EpisodeOfCare.StatusHistory
 */
class EpisodeOfCareStatusHistoryType extends BackboneElementType
{

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @var \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusType $status
     */
    private $status = null;

    /**
     * The period during this EpisodeOfCare that the specific status applied.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Gets as status
     *
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @return \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\EpisodeOfCareStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period during this EpisodeOfCare that the specific status applied.
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
     * The period during this EpisodeOfCare that the specific status applied.
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

