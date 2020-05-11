<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AppointmentResponseType
 *
 * A reply to an appointment request for a patient and/or practitioner(s), such as a confirmation or rejection.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: AppointmentResponse
 */
class AppointmentResponseType extends DomainResourceType
{

    /**
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Appointment that this response is replying to.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $appointment
     */
    private $appointment = null;

    /**
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $start
     */
    private $start = null;

    /**
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $end
     */
    private $end = null;

    /**
     * Role of participant in the appointment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $participantType
     */
    private $participantType = [
        
    ];

    /**
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     *
     * @var \TKusy\Hl7FhirR4\ParticipationStatusType $participantStatus
     */
    private $participantStatus = null;

    /**
     * Additional comments about the appointment.
     *
     * @var \TKusy\Hl7FhirR4\StringType $comment
     */
    private $comment = null;

    /**
     * Adds as identifier
     *
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as appointment
     *
     * Appointment that this response is replying to.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * Sets a new appointment
     *
     * Appointment that this response is replying to.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $appointment
     * @return self
     */
    public function setAppointment(\TKusy\Hl7FhirR4\ReferenceType $appointment)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * Gets as start
     *
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @param \TKusy\Hl7FhirR4\InstantType $start
     * @return self
     */
    public function setStart(\TKusy\Hl7FhirR4\InstantType $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     *
     * @param \TKusy\Hl7FhirR4\InstantType $end
     * @return self
     */
    public function setEnd(\TKusy\Hl7FhirR4\InstantType $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Adds as participantType
     *
     * Role of participant in the appointment.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $participantType
     */
    public function addToParticipantType(\TKusy\Hl7FhirR4\CodeableConceptType $participantType)
    {
        $this->participantType[] = $participantType;
        return $this;
    }

    /**
     * isset participantType
     *
     * Role of participant in the appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParticipantType($index)
    {
        return isset($this->participantType[$index]);
    }

    /**
     * unset participantType
     *
     * Role of participant in the appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParticipantType($index)
    {
        unset($this->participantType[$index]);
    }

    /**
     * Gets as participantType
     *
     * Role of participant in the appointment.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getParticipantType()
    {
        return $this->participantType;
    }

    /**
     * Sets a new participantType
     *
     * Role of participant in the appointment.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $participantType
     * @return self
     */
    public function setParticipantType(array $participantType)
    {
        $this->participantType = $participantType;
        return $this;
    }

    /**
     * Gets as actor
     *
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
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
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
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
     * Gets as participantStatus
     *
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     *
     * @return \TKusy\Hl7FhirR4\ParticipationStatusType
     */
    public function getParticipantStatus()
    {
        return $this->participantStatus;
    }

    /**
     * Sets a new participantStatus
     *
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     *
     * @param \TKusy\Hl7FhirR4\ParticipationStatusType $participantStatus
     * @return self
     */
    public function setParticipantStatus(\TKusy\Hl7FhirR4\ParticipationStatusType $participantStatus)
    {
        $this->participantStatus = $participantStatus;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Additional comments about the appointment.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Additional comments about the appointment.
     *
     * @param \TKusy\Hl7FhirR4\StringType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7FhirR4\StringType $comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

