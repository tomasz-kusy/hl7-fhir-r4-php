<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AppointmentResponseType
 *
 * A reply to an appointment request for a patient and/or practitioner(s), such as a confirmation or rejection.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: AppointmentResponse
 */
class AppointmentResponseType extends DomainResourceType
{

    /**
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Appointment that this response is replying to.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $appointment
     */
    private $appointment = null;

    /**
     * Indicates that the response is proposing a different time that was initially requested. The new proposed time will be indicated in the start and end properties.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $proposedNewTime
     */
    private $proposedNewTime = null;

    /**
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $start
     */
    private $start = null;

    /**
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $end
     */
    private $end = null;

    /**
     * Role of participant in the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $participantType
     */
    private $participantType = null;

    /**
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    private $actor = null;

    /**
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     *
     * @var \TKusy\Hl7Fhir\R5\AppointmentResponseStatusType $participantStatus
     */
    private $participantStatus = null;

    /**
     * Additional comments about the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $comment
     */
    private $comment = null;

    /**
     * Indicates that this AppointmentResponse applies to all occurrences in a recurring request.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $recurring
     */
    private $recurring = null;

    /**
     * The original date within a recurring request. This could be used in place of the recurrenceId to be more direct (or where the template is provided through the simple list of dates in `Appointment.occurrenceDate`).
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $occurrenceDate
     */
    private $occurrenceDate = null;

    /**
     * The recurrence ID (sequence number) of the specific appointment when responding to a recurring request.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $recurrenceId
     */
    private $recurrenceId = null;

    /**
     * Adds as identifier
     *
     * This records identifiers associated with this appointment response concern that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as appointment
     *
     * Appointment that this response is replying to.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $appointment
     * @return self
     */
    public function setAppointment(\TKusy\Hl7Fhir\R5\ReferenceType $appointment)
    {
        $this->appointment = $appointment;
        return $this;
    }

    /**
     * Gets as proposedNewTime
     *
     * Indicates that the response is proposing a different time that was initially requested. The new proposed time will be indicated in the start and end properties.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getProposedNewTime()
    {
        return $this->proposedNewTime;
    }

    /**
     * Sets a new proposedNewTime
     *
     * Indicates that the response is proposing a different time that was initially requested. The new proposed time will be indicated in the start and end properties.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $proposedNewTime
     * @return self
     */
    public function setProposedNewTime(?\TKusy\Hl7Fhir\R5\BooleanType $proposedNewTime = null)
    {
        $this->proposedNewTime = $proposedNewTime;
        return $this;
    }

    /**
     * Gets as start
     *
     * Date/Time that the appointment is to take place, or requested new start time.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
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
     * @param \TKusy\Hl7Fhir\R5\InstantType $start
     * @return self
     */
    public function setStart(?\TKusy\Hl7Fhir\R5\InstantType $start = null)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * This may be either the same as the appointment request to confirm the details of the appointment, or alternately a new time to request a re-negotiation of the end time.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
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
     * @param \TKusy\Hl7Fhir\R5\InstantType $end
     * @return self
     */
    public function setEnd(?\TKusy\Hl7Fhir\R5\InstantType $end = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $participantType
     */
    public function addToParticipantType(\TKusy\Hl7Fhir\R5\CodeableConceptType $participantType)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $participantType
     * @return self
     */
    public function setParticipantType(array $participantType = null)
    {
        $this->participantType = $participantType;
        return $this;
    }

    /**
     * Gets as actor
     *
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
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
     * A Person, Location, HealthcareService, or Device that is participating in the appointment.
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
     * Gets as participantStatus
     *
     * Participation status of the participant. When the status is declined or tentative if the start/end times are different to the appointment, then these times should be interpreted as a requested time change. When the status is accepted, the times can either be the time of the appointment (as a confirmation of the time) or can be empty.
     *
     * @return \TKusy\Hl7Fhir\R5\AppointmentResponseStatusType
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
     * @param \TKusy\Hl7Fhir\R5\AppointmentResponseStatusType $participantStatus
     * @return self
     */
    public function setParticipantStatus(\TKusy\Hl7Fhir\R5\AppointmentResponseStatusType $participantStatus)
    {
        $this->participantStatus = $participantStatus;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Additional comments about the appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $comment
     * @return self
     */
    public function setComment(?\TKusy\Hl7Fhir\R5\MarkdownType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as recurring
     *
     * Indicates that this AppointmentResponse applies to all occurrences in a recurring request.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * Sets a new recurring
     *
     * Indicates that this AppointmentResponse applies to all occurrences in a recurring request.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $recurring
     * @return self
     */
    public function setRecurring(?\TKusy\Hl7Fhir\R5\BooleanType $recurring = null)
    {
        $this->recurring = $recurring;
        return $this;
    }

    /**
     * Gets as occurrenceDate
     *
     * The original date within a recurring request. This could be used in place of the recurrenceId to be more direct (or where the template is provided through the simple list of dates in `Appointment.occurrenceDate`).
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getOccurrenceDate()
    {
        return $this->occurrenceDate;
    }

    /**
     * Sets a new occurrenceDate
     *
     * The original date within a recurring request. This could be used in place of the recurrenceId to be more direct (or where the template is provided through the simple list of dates in `Appointment.occurrenceDate`).
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $occurrenceDate
     * @return self
     */
    public function setOccurrenceDate(?\TKusy\Hl7Fhir\R5\DateType $occurrenceDate = null)
    {
        $this->occurrenceDate = $occurrenceDate;
        return $this;
    }

    /**
     * Gets as recurrenceId
     *
     * The recurrence ID (sequence number) of the specific appointment when responding to a recurring request.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getRecurrenceId()
    {
        return $this->recurrenceId;
    }

    /**
     * Sets a new recurrenceId
     *
     * The recurrence ID (sequence number) of the specific appointment when responding to a recurring request.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $recurrenceId
     * @return self
     */
    public function setRecurrenceId(?\TKusy\Hl7Fhir\R5\PositiveIntType $recurrenceId = null)
    {
        $this->recurrenceId = $recurrenceId;
        return $this;
    }


}

