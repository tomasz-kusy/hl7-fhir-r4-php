<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AppointmentParticipantType
 *
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * XSD Type: Appointment.Participant
 */
class AppointmentParticipantType extends BackboneElementType
{

    /**
     * Role of participant in the appointment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Whether this participant is required to be present at the meeting. This covers a use-case where two doctors need to meet to discuss the results for a specific patient, and the patient is not required to be present.
     *
     * @var \TKusy\Hl7FhirR4\ParticipantRequiredType $required
     */
    private $required = null;

    /**
     * Participation status of the actor.
     *
     * @var \TKusy\Hl7FhirR4\ParticipationStatusType $status
     */
    private $status = null;

    /**
     * Participation period of the actor.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Adds as type
     *
     * Role of participant in the appointment.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Role of participant in the appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * Role of participant in the appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * Role of participant in the appointment.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Role of participant in the appointment.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as actor
     *
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * A Person, Location/HealthcareService or Device that is participating in the appointment.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $actor
     * @return self
     */
    public function setActor(\TKusy\Hl7FhirR4\ReferenceType $actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Gets as required
     *
     * Whether this participant is required to be present at the meeting. This covers a use-case where two doctors need to meet to discuss the results for a specific patient, and the patient is not required to be present.
     *
     * @return \TKusy\Hl7FhirR4\ParticipantRequiredType
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * Whether this participant is required to be present at the meeting. This covers a use-case where two doctors need to meet to discuss the results for a specific patient, and the patient is not required to be present.
     *
     * @param \TKusy\Hl7FhirR4\ParticipantRequiredType $required
     * @return self
     */
    public function setRequired(\TKusy\Hl7FhirR4\ParticipantRequiredType $required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Gets as status
     *
     * Participation status of the actor.
     *
     * @return \TKusy\Hl7FhirR4\ParticipationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Participation status of the actor.
     *
     * @param \TKusy\Hl7FhirR4\ParticipationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ParticipationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as period
     *
     * Participation period of the actor.
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
     * Participation period of the actor.
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

