<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CareTeamParticipantType
 *
 * The Care Team includes all the people and organizations who plan to participate in the coordination and delivery of care for a patient.
 * XSD Type: CareTeam.Participant
 */
class CareTeamParticipantType extends BackboneElementType
{

    /**
     * Indicates specific responsibility of an individual within the care team, such as "Primary care physician", "Trained social worker counselor", "Caregiver", etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $role
     */
    private $role = null;

    /**
     * The specific person or organization who is participating/expected to participate in the care team.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $member
     */
    private $member = null;

    /**
     * The organization of the practitioner.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $onBehalfOf
     */
    private $onBehalfOf = null;

    /**
     * Indicates when the specific member or organization did (or is intended to) come into effect and end.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Adds as role
     *
     * Indicates specific responsibility of an individual within the care team, such as "Primary care physician", "Trained social worker counselor", "Caregiver", etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $role
     */
    public function addToRole(\TKusy\Hl7FhirR4\CodeableConceptType $role)
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * isset role
     *
     * Indicates specific responsibility of an individual within the care team, such as "Primary care physician", "Trained social worker counselor", "Caregiver", etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * Indicates specific responsibility of an individual within the care team, such as "Primary care physician", "Trained social worker counselor", "Caregiver", etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * Indicates specific responsibility of an individual within the care team, such as "Primary care physician", "Trained social worker counselor", "Caregiver", etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $role
     * @return self
     */
    public function setRole(array $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as member
     *
     * The specific person or organization who is participating/expected to participate in the care team.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $member
     * @return self
     */
    public function setMember(\TKusy\Hl7FhirR4\ReferenceType $member)
    {
        $this->member = $member;
        return $this;
    }

    /**
     * Gets as onBehalfOf
     *
     * The organization of the practitioner.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $onBehalfOf
     * @return self
     */
    public function setOnBehalfOf(\TKusy\Hl7FhirR4\ReferenceType $onBehalfOf)
    {
        $this->onBehalfOf = $onBehalfOf;
        return $this;
    }

    /**
     * Gets as period
     *
     * Indicates when the specific member or organization did (or is intended to) come into effect and end.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Indicates when the specific member or organization did (or is intended to) come into effect and end.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }


}

