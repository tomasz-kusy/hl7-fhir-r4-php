<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AppointmentType
 *
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Appointment
 */
class AppointmentType extends DomainResourceType
{

    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     *
     * @var \TKusy\Hl7Fhir\R5\AppointmentStatusType $status
     */
    private $status = null;

    /**
     * The coded reason for the appointment being cancelled. This is often used in reporting/billing/futher processing to determine if further actions are required, or specific fees apply.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $cancellationReason
     */
    private $cancellationReason = null;

    /**
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $class
     */
    private $class = null;

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $serviceCategory
     */
    private $serviceCategory = null;

    /**
     * The specific service that is to be performed during this appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $serviceType
     */
    private $serviceType = null;

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialty
     */
    private $specialty = null;

    /**
     * The style of appointment or patient that has been booked in the slot (not service type).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $appointmentType
     */
    private $appointmentType = null;

    /**
     * The reason that this appointment is being scheduled. This is more clinical than administrative. This can be coded, or as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the note field.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * Appointment replaced by this Appointment in cases where there is a cancellation, the details of the cancellation can be found in the cancellationReason property (on the referenced resource).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $replaces
     */
    private $replaces = null;

    /**
     * Connection details of a virtual service (e.g. conference call).
     *
     * @var \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[] $virtualService
     */
    private $virtualService = null;

    /**
     * Additional information to support the appointment provided when making the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * The previous appointment in a series of related appointments.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $previousAppointment
     */
    private $previousAppointment = null;

    /**
     * The originating appointment in a recurring set of related appointments.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $originatingAppointment
     */
    private $originatingAppointment = null;

    /**
     * Date/Time that the appointment is to take place.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $start
     */
    private $start = null;

    /**
     * Date/Time that the appointment is to conclude.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $end
     */
    private $end = null;

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times. For example, where the actual time of appointment is only an estimate or if a 30 minute appointment is being requested, but any time would work. Also, if there is, for example, a planned 15 minute break in the middle of a long appointment, the duration may be 15 minutes less than the difference between the start and end.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $minutesDuration
     */
    private $minutesDuration = null;

    /**
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within.
     *
     * The duration (usually in minutes) could also be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time. However, in other situations the duration may be calculated by the scheduling system.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType[] $requestedPeriod
     */
    private $requestedPeriod = null;

    /**
     * The slots from the participants' schedules that will be filled by the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $slot
     */
    private $slot = null;

    /**
     * The set of accounts that is expected to be used for billing the activities that result from this Appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $account
     */
    private $account = null;

    /**
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $created
     */
    private $created = null;

    /**
     * The date/time describing when the appointment was cancelled.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $cancellationDate
     */
    private $cancellationDate = null;

    /**
     * Additional notes/comments about the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * While Appointment.note contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $patientInstruction
     */
    private $patientInstruction = null;

    /**
     * The request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The patient or group associated with the appointment, if they are to be present (usually) then they should also be included in the participant backbone element.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * List of participants involved in the appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\AppointmentParticipantType[] $participant
     */
    private $participant = null;

    /**
     * The sequence number that identifies a specific appointment in a recurring pattern.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $recurrenceId
     */
    private $recurrenceId = null;

    /**
     * This appointment varies from the recurring pattern.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $occurrenceChanged
     */
    private $occurrenceChanged = null;

    /**
     * The details of the recurrence pattern or template that is used to generate recurring appointments.
     *
     * @var \TKusy\Hl7Fhir\R5\AppointmentRecurrenceTemplateType[] $recurrenceTemplate
     */
    private $recurrenceTemplate = null;

    /**
     * Adds as identifier
     *
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * Gets as status
     *
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     *
     * @return \TKusy\Hl7Fhir\R5\AppointmentStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     *
     * @param \TKusy\Hl7Fhir\R5\AppointmentStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\AppointmentStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as cancellationReason
     *
     * The coded reason for the appointment being cancelled. This is often used in reporting/billing/futher processing to determine if further actions are required, or specific fees apply.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCancellationReason()
    {
        return $this->cancellationReason;
    }

    /**
     * Sets a new cancellationReason
     *
     * The coded reason for the appointment being cancelled. This is often used in reporting/billing/futher processing to determine if further actions are required, or specific fees apply.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $cancellationReason
     * @return self
     */
    public function setCancellationReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $cancellationReason = null)
    {
        $this->cancellationReason = $cancellationReason;
        return $this;
    }

    /**
     * Adds as class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $class
     */
    public function addToClass(\TKusy\Hl7Fhir\R5\CodeableConceptType $class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClass($index)
    {
        return isset($this->class[$index]);
    }

    /**
     * unset class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClass($index)
    {
        unset($this->class[$index]);
    }

    /**
     * Gets as class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $class
     * @return self
     */
    public function setClass(array $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as serviceCategory
     *
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $serviceCategory
     */
    public function addToServiceCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $serviceCategory)
    {
        $this->serviceCategory[] = $serviceCategory;
        return $this;
    }

    /**
     * isset serviceCategory
     *
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceCategory($index)
    {
        return isset($this->serviceCategory[$index]);
    }

    /**
     * unset serviceCategory
     *
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceCategory($index)
    {
        unset($this->serviceCategory[$index]);
    }

    /**
     * Gets as serviceCategory
     *
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * Sets a new serviceCategory
     *
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $serviceCategory
     * @return self
     */
    public function setServiceCategory(array $serviceCategory = null)
    {
        $this->serviceCategory = $serviceCategory;
        return $this;
    }

    /**
     * Adds as serviceType
     *
     * The specific service that is to be performed during this appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $serviceType
     */
    public function addToServiceType(\TKusy\Hl7Fhir\R5\CodeableReferenceType $serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * isset serviceType
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceType($index)
    {
        return isset($this->serviceType[$index]);
    }

    /**
     * unset serviceType
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceType($index)
    {
        unset($this->serviceType[$index]);
    }

    /**
     * Gets as serviceType
     *
     * The specific service that is to be performed during this appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * The specific service that is to be performed during this appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $serviceType
     * @return self
     */
    public function setServiceType(array $serviceType = null)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Adds as specialty
     *
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specialty
     */
    public function addToSpecialty(\TKusy\Hl7Fhir\R5\CodeableConceptType $specialty)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * isset specialty
     *
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialty($index)
    {
        return isset($this->specialty[$index]);
    }

    /**
     * unset specialty
     *
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialty($index)
    {
        unset($this->specialty[$index]);
    }

    /**
     * Gets as specialty
     *
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Sets a new specialty
     *
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialty
     * @return self
     */
    public function setSpecialty(array $specialty = null)
    {
        $this->specialty = $specialty;
        return $this;
    }

    /**
     * Gets as appointmentType
     *
     * The style of appointment or patient that has been booked in the slot (not service type).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }

    /**
     * Sets a new appointmentType
     *
     * The style of appointment or patient that has been booked in the slot (not service type).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $appointmentType
     * @return self
     */
    public function setAppointmentType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $appointmentType = null)
    {
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The reason that this appointment is being scheduled. This is more clinical than administrative. This can be coded, or as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableReferenceType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * The reason that this appointment is being scheduled. This is more clinical than administrative. This can be coded, or as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * The reason that this appointment is being scheduled. This is more clinical than administrative. This can be coded, or as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * The reason that this appointment is being scheduled. This is more clinical than administrative. This can be coded, or as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The reason that this appointment is being scheduled. This is more clinical than administrative. This can be coded, or as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as priority
     *
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(?\TKusy\Hl7Fhir\R5\CodeableConceptType $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as description
     *
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the note field.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the note field.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as replaces
     *
     * Appointment replaced by this Appointment in cases where there is a cancellation, the details of the cancellation can be found in the cancellationReason property (on the referenced resource).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $replaces
     */
    public function addToReplaces(\TKusy\Hl7Fhir\R5\ReferenceType $replaces)
    {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * isset replaces
     *
     * Appointment replaced by this Appointment in cases where there is a cancellation, the details of the cancellation can be found in the cancellationReason property (on the referenced resource).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplaces($index)
    {
        return isset($this->replaces[$index]);
    }

    /**
     * unset replaces
     *
     * Appointment replaced by this Appointment in cases where there is a cancellation, the details of the cancellation can be found in the cancellationReason property (on the referenced resource).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplaces($index)
    {
        unset($this->replaces[$index]);
    }

    /**
     * Gets as replaces
     *
     * Appointment replaced by this Appointment in cases where there is a cancellation, the details of the cancellation can be found in the cancellationReason property (on the referenced resource).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getReplaces()
    {
        return $this->replaces;
    }

    /**
     * Sets a new replaces
     *
     * Appointment replaced by this Appointment in cases where there is a cancellation, the details of the cancellation can be found in the cancellationReason property (on the referenced resource).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $replaces
     * @return self
     */
    public function setReplaces(array $replaces = null)
    {
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * Adds as virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\VirtualServiceDetailType $virtualService
     */
    public function addToVirtualService(\TKusy\Hl7Fhir\R5\VirtualServiceDetailType $virtualService)
    {
        $this->virtualService[] = $virtualService;
        return $this;
    }

    /**
     * isset virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVirtualService($index)
    {
        return isset($this->virtualService[$index]);
    }

    /**
     * unset virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVirtualService($index)
    {
        unset($this->virtualService[$index]);
    }

    /**
     * Gets as virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @return \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[]
     */
    public function getVirtualService()
    {
        return $this->virtualService;
    }

    /**
     * Sets a new virtualService
     *
     * Connection details of a virtual service (e.g. conference call).
     *
     * @param \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[] $virtualService
     * @return self
     */
    public function setVirtualService(array $virtualService = null)
    {
        $this->virtualService = $virtualService;
        return $this;
    }

    /**
     * Adds as supportingInformation
     *
     * Additional information to support the appointment provided when making the appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * isset supportingInformation
     *
     * Additional information to support the appointment provided when making the appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInformation($index)
    {
        return isset($this->supportingInformation[$index]);
    }

    /**
     * unset supportingInformation
     *
     * Additional information to support the appointment provided when making the appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInformation($index)
    {
        unset($this->supportingInformation[$index]);
    }

    /**
     * Gets as supportingInformation
     *
     * Additional information to support the appointment provided when making the appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Additional information to support the appointment provided when making the appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation = null)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Gets as previousAppointment
     *
     * The previous appointment in a series of related appointments.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPreviousAppointment()
    {
        return $this->previousAppointment;
    }

    /**
     * Sets a new previousAppointment
     *
     * The previous appointment in a series of related appointments.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $previousAppointment
     * @return self
     */
    public function setPreviousAppointment(?\TKusy\Hl7Fhir\R5\ReferenceType $previousAppointment = null)
    {
        $this->previousAppointment = $previousAppointment;
        return $this;
    }

    /**
     * Gets as originatingAppointment
     *
     * The originating appointment in a recurring set of related appointments.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOriginatingAppointment()
    {
        return $this->originatingAppointment;
    }

    /**
     * Sets a new originatingAppointment
     *
     * The originating appointment in a recurring set of related appointments.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $originatingAppointment
     * @return self
     */
    public function setOriginatingAppointment(?\TKusy\Hl7Fhir\R5\ReferenceType $originatingAppointment = null)
    {
        $this->originatingAppointment = $originatingAppointment;
        return $this;
    }

    /**
     * Gets as start
     *
     * Date/Time that the appointment is to take place.
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
     * Date/Time that the appointment is to take place.
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
     * Date/Time that the appointment is to conclude.
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
     * Date/Time that the appointment is to conclude.
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
     * Gets as minutesDuration
     *
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times. For example, where the actual time of appointment is only an estimate or if a 30 minute appointment is being requested, but any time would work. Also, if there is, for example, a planned 15 minute break in the middle of a long appointment, the duration may be 15 minutes less than the difference between the start and end.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getMinutesDuration()
    {
        return $this->minutesDuration;
    }

    /**
     * Sets a new minutesDuration
     *
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times. For example, where the actual time of appointment is only an estimate or if a 30 minute appointment is being requested, but any time would work. Also, if there is, for example, a planned 15 minute break in the middle of a long appointment, the duration may be 15 minutes less than the difference between the start and end.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $minutesDuration
     * @return self
     */
    public function setMinutesDuration(?\TKusy\Hl7Fhir\R5\PositiveIntType $minutesDuration = null)
    {
        $this->minutesDuration = $minutesDuration;
        return $this;
    }

    /**
     * Adds as requestedPeriod
     *
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within.
     *
     * The duration (usually in minutes) could also be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time. However, in other situations the duration may be calculated by the scheduling system.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PeriodType $requestedPeriod
     */
    public function addToRequestedPeriod(\TKusy\Hl7Fhir\R5\PeriodType $requestedPeriod)
    {
        $this->requestedPeriod[] = $requestedPeriod;
        return $this;
    }

    /**
     * isset requestedPeriod
     *
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within.
     *
     * The duration (usually in minutes) could also be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time. However, in other situations the duration may be calculated by the scheduling system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedPeriod($index)
    {
        return isset($this->requestedPeriod[$index]);
    }

    /**
     * unset requestedPeriod
     *
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within.
     *
     * The duration (usually in minutes) could also be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time. However, in other situations the duration may be calculated by the scheduling system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedPeriod($index)
    {
        unset($this->requestedPeriod[$index]);
    }

    /**
     * Gets as requestedPeriod
     *
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within.
     *
     * The duration (usually in minutes) could also be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time. However, in other situations the duration may be calculated by the scheduling system.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType[]
     */
    public function getRequestedPeriod()
    {
        return $this->requestedPeriod;
    }

    /**
     * Sets a new requestedPeriod
     *
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within.
     *
     * The duration (usually in minutes) could also be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time. However, in other situations the duration may be calculated by the scheduling system.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType[] $requestedPeriod
     * @return self
     */
    public function setRequestedPeriod(array $requestedPeriod = null)
    {
        $this->requestedPeriod = $requestedPeriod;
        return $this;
    }

    /**
     * Adds as slot
     *
     * The slots from the participants' schedules that will be filled by the appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $slot
     */
    public function addToSlot(\TKusy\Hl7Fhir\R5\ReferenceType $slot)
    {
        $this->slot[] = $slot;
        return $this;
    }

    /**
     * isset slot
     *
     * The slots from the participants' schedules that will be filled by the appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSlot($index)
    {
        return isset($this->slot[$index]);
    }

    /**
     * unset slot
     *
     * The slots from the participants' schedules that will be filled by the appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSlot($index)
    {
        unset($this->slot[$index]);
    }

    /**
     * Gets as slot
     *
     * The slots from the participants' schedules that will be filled by the appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Sets a new slot
     *
     * The slots from the participants' schedules that will be filled by the appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $slot
     * @return self
     */
    public function setSlot(array $slot = null)
    {
        $this->slot = $slot;
        return $this;
    }

    /**
     * Adds as account
     *
     * The set of accounts that is expected to be used for billing the activities that result from this Appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $account
     */
    public function addToAccount(\TKusy\Hl7Fhir\R5\ReferenceType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * The set of accounts that is expected to be used for billing the activities that result from this Appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * The set of accounts that is expected to be used for billing the activities that result from this Appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * The set of accounts that is expected to be used for billing the activities that result from this Appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * The set of accounts that is expected to be used for billing the activities that result from this Appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $account
     * @return self
     */
    public function setAccount(array $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $created
     * @return self
     */
    public function setCreated(?\TKusy\Hl7Fhir\R5\DateTimeType $created = null)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as cancellationDate
     *
     * The date/time describing when the appointment was cancelled.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCancellationDate()
    {
        return $this->cancellationDate;
    }

    /**
     * Sets a new cancellationDate
     *
     * The date/time describing when the appointment was cancelled.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $cancellationDate
     * @return self
     */
    public function setCancellationDate(?\TKusy\Hl7Fhir\R5\DateTimeType $cancellationDate = null)
    {
        $this->cancellationDate = $cancellationDate;
        return $this;
    }

    /**
     * Adds as note
     *
     * Additional notes/comments about the appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Additional notes/comments about the appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Additional notes/comments about the appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Additional notes/comments about the appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Additional notes/comments about the appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as patientInstruction
     *
     * While Appointment.note contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $patientInstruction
     */
    public function addToPatientInstruction(\TKusy\Hl7Fhir\R5\CodeableReferenceType $patientInstruction)
    {
        $this->patientInstruction[] = $patientInstruction;
        return $this;
    }

    /**
     * isset patientInstruction
     *
     * While Appointment.note contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPatientInstruction($index)
    {
        return isset($this->patientInstruction[$index]);
    }

    /**
     * unset patientInstruction
     *
     * While Appointment.note contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPatientInstruction($index)
    {
        unset($this->patientInstruction[$index]);
    }

    /**
     * Gets as patientInstruction
     *
     * While Appointment.note contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }

    /**
     * Sets a new patientInstruction
     *
     * While Appointment.note contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $patientInstruction
     * @return self
     */
    public function setPatientInstruction(array $patientInstruction = null)
    {
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * The request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * The request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * The request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * The request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * The request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient or group associated with the appointment, if they are to be present (usually) then they should also be included in the participant backbone element.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The patient or group associated with the appointment, if they are to be present (usually) then they should also be included in the participant backbone element.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Adds as participant
     *
     * List of participants involved in the appointment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AppointmentParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\AppointmentParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * List of participants involved in the appointment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParticipant($index)
    {
        return isset($this->participant[$index]);
    }

    /**
     * unset participant
     *
     * List of participants involved in the appointment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParticipant($index)
    {
        unset($this->participant[$index]);
    }

    /**
     * Gets as participant
     *
     * List of participants involved in the appointment.
     *
     * @return \TKusy\Hl7Fhir\R5\AppointmentParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * List of participants involved in the appointment.
     *
     * @param \TKusy\Hl7Fhir\R5\AppointmentParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Gets as recurrenceId
     *
     * The sequence number that identifies a specific appointment in a recurring pattern.
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
     * The sequence number that identifies a specific appointment in a recurring pattern.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $recurrenceId
     * @return self
     */
    public function setRecurrenceId(?\TKusy\Hl7Fhir\R5\PositiveIntType $recurrenceId = null)
    {
        $this->recurrenceId = $recurrenceId;
        return $this;
    }

    /**
     * Gets as occurrenceChanged
     *
     * This appointment varies from the recurring pattern.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getOccurrenceChanged()
    {
        return $this->occurrenceChanged;
    }

    /**
     * Sets a new occurrenceChanged
     *
     * This appointment varies from the recurring pattern.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $occurrenceChanged
     * @return self
     */
    public function setOccurrenceChanged(?\TKusy\Hl7Fhir\R5\BooleanType $occurrenceChanged = null)
    {
        $this->occurrenceChanged = $occurrenceChanged;
        return $this;
    }

    /**
     * Adds as recurrenceTemplate
     *
     * The details of the recurrence pattern or template that is used to generate recurring appointments.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AppointmentRecurrenceTemplateType $recurrenceTemplate
     */
    public function addToRecurrenceTemplate(\TKusy\Hl7Fhir\R5\AppointmentRecurrenceTemplateType $recurrenceTemplate)
    {
        $this->recurrenceTemplate[] = $recurrenceTemplate;
        return $this;
    }

    /**
     * isset recurrenceTemplate
     *
     * The details of the recurrence pattern or template that is used to generate recurring appointments.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecurrenceTemplate($index)
    {
        return isset($this->recurrenceTemplate[$index]);
    }

    /**
     * unset recurrenceTemplate
     *
     * The details of the recurrence pattern or template that is used to generate recurring appointments.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecurrenceTemplate($index)
    {
        unset($this->recurrenceTemplate[$index]);
    }

    /**
     * Gets as recurrenceTemplate
     *
     * The details of the recurrence pattern or template that is used to generate recurring appointments.
     *
     * @return \TKusy\Hl7Fhir\R5\AppointmentRecurrenceTemplateType[]
     */
    public function getRecurrenceTemplate()
    {
        return $this->recurrenceTemplate;
    }

    /**
     * Sets a new recurrenceTemplate
     *
     * The details of the recurrence pattern or template that is used to generate recurring appointments.
     *
     * @param \TKusy\Hl7Fhir\R5\AppointmentRecurrenceTemplateType[] $recurrenceTemplate
     * @return self
     */
    public function setRecurrenceTemplate(array $recurrenceTemplate = null)
    {
        $this->recurrenceTemplate = $recurrenceTemplate;
        return $this;
    }


}

