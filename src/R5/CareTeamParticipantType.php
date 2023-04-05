<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CareTeamParticipantType
 *
 * The Care Team includes all the people and organizations who plan to participate in the coordination and delivery of care.
 * XSD Type: CareTeam.Participant
 */
class CareTeamParticipantType extends BackboneElementType
{

    /**
     * Indicates specific responsibility of an individual within the care team, such as "Primary care physician", "Trained social worker counselor", "Caregiver", etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     */
    private $role = null;

    /**
     * The specific person or organization who is participating/expected to participate in the care team.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $member
     */
    private $member = null;

    /**
     * The organization of the practitioner.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf
     */
    private $onBehalfOf = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $coveragePeriod
     */
    private $coveragePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $coverageTiming
     */
    private $coverageTiming = null;

    /**
     * Gets as role
     *
     * Indicates specific responsibility of an individual within the care team, such as "Primary care physician", "Trained social worker counselor", "Caregiver", etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Indicates specific responsibility of an individual within the care team, such as "Primary care physician", "Trained social worker counselor", "Caregiver", etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $role
     * @return self
     */
    public function setRole(?\TKusy\Hl7Fhir\R5\CodeableConceptType $role = null)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as member
     *
     * The specific person or organization who is participating/expected to participate in the care team.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Sets a new member
     *
     * The specific person or organization who is participating/expected to participate in the care team.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $member
     * @return self
     */
    public function setMember(?\TKusy\Hl7Fhir\R5\ReferenceType $member = null)
    {
        $this->member = $member;
        return $this;
    }

    /**
     * Gets as onBehalfOf
     *
     * The organization of the practitioner.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOnBehalfOf()
    {
        return $this->onBehalfOf;
    }

    /**
     * Sets a new onBehalfOf
     *
     * The organization of the practitioner.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf
     * @return self
     */
    public function setOnBehalfOf(?\TKusy\Hl7Fhir\R5\ReferenceType $onBehalfOf = null)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * Gets as coveragePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getCoveragePeriod()
    {
        return $this->coveragePeriod;
    }

    /**
     * Sets a new coveragePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $coveragePeriod
     * @return self
     */
    public function setCoveragePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $coveragePeriod = null)
    {
        $this->coveragePeriod = $coveragePeriod;
        return $this;
    }

    /**
     * Gets as coverageTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getCoverageTiming()
    {
        return $this->coverageTiming;
    }

    /**
     * Sets a new coverageTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $coverageTiming
     * @return self
     */
    public function setCoverageTiming(?\TKusy\Hl7Fhir\R5\TimingType $coverageTiming = null)
    {
        $this->coverageTiming = $coverageTiming;
        return $this;
    }


}

