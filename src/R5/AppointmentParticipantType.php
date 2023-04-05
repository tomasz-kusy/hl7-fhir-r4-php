<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Participation period of the actor.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * The individual, device, location, or service participating in the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Whether this participant is required to be present at the meeting. If false, the participant is optional.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $required
     */
    private $required = null;

    /**
     * Participation status of the actor.
     *
     * @var \TKusy\Hl7Fhir\R5\ParticipationStatusType $status
     */
    private $status = null;

    /**
     * Adds as type
     *
     * Role of participant in the appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as period
     *
     * Participation period of the actor.
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
     * Participation period of the actor.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as actor
     *
     * The individual, device, location, or service participating in the appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * The individual, device, location, or service participating in the appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actor
     * @return self
     */
    public function setActor(?\TKusy\Hl7Fhir\R5\ReferenceType $actor = null)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Gets as required
     *
     * Whether this participant is required to be present at the meeting. If false, the participant is optional.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * Whether this participant is required to be present at the meeting. If false, the participant is optional.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $required
     * @return self
     */
    public function setRequired(?\TKusy\Hl7Fhir\R5\BooleanType $required = null)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Gets as status
     *
     * Participation status of the actor.
     *
     * @return \TKusy\Hl7Fhir\R5\ParticipationStatusType
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
     * @param \TKusy\Hl7Fhir\R5\ParticipationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\ParticipationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }


}

