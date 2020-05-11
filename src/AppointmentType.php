<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AppointmentType
 *
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Appointment
 */
class AppointmentType extends DomainResourceType
{

    /**
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     *
     * @var \TKusy\Hl7FhirR4\AppointmentStatusType $status
     */
    private $status = null;

    /**
     * The coded reason for the appointment being cancelled. This is often used in reporting/billing/futher processing to determine if further actions are required, or specific fees apply.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $cancelationReason
     */
    private $cancelationReason = null;

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $serviceCategory
     */
    private $serviceCategory = null;

    /**
     * The specific service that is to be performed during this appointment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $serviceType
     */
    private $serviceType = null;

    /**
     * The specialty of a practitioner that would be required to perform the service requested in this appointment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $specialty
     */
    private $specialty = null;

    /**
     * The style of appointment or patient that has been booked in the slot (not service type).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $appointmentType
     */
    private $appointmentType = null;

    /**
     * The coded reason that this appointment is being scheduled. This is more clinical than administrative.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $priority
     */
    private $priority = null;

    /**
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Additional information to support the appointment provided when making the appointment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * Date/Time that the appointment is to take place.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $start
     */
    private $start = null;

    /**
     * Date/Time that the appointment is to conclude.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $end
     */
    private $end = null;

    /**
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times. For example, where the actual time of appointment is only an estimate or if a 30 minute appointment is being requested, but any time would work. Also, if there is, for example, a planned 15 minute break in the middle of a long appointment, the duration may be 15 minutes less than the difference between the start and end.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $minutesDuration
     */
    private $minutesDuration = null;

    /**
     * The slots from the participants' schedules that will be filled by the appointment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $slot
     */
    private $slot = null;

    /**
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * Additional comments about the appointment.
     *
     * @var \TKusy\Hl7FhirR4\StringType $comment
     */
    private $comment = null;

    /**
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @var \TKusy\Hl7FhirR4\StringType $patientInstruction
     */
    private $patientInstruction = null;

    /**
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * List of participants involved in the appointment.
     *
     * @var \TKusy\Hl7FhirR4\AppointmentParticipantType[] $participant
     */
    private $participant = null;

    /**
     * A set of date ranges (potentially including times) that the appointment is preferred to be scheduled within.
     *
     * The duration (usually in minutes) could also be provided to indicate the length of the appointment to fill and populate the start/end times for the actual allocated time. However, in other situations the duration may be calculated by the scheduling system.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType[] $requestedPeriod
     */
    private $requestedPeriod = null;

    /**
     * Adds as identifier
     *
     * This records identifiers associated with this appointment concern that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The overall status of the Appointment. Each of the participants has their own participation status which indicates their involvement in the process, however this status indicates the shared status.
     *
     * @return \TKusy\Hl7FhirR4\AppointmentStatusType
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
     * @param \TKusy\Hl7FhirR4\AppointmentStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\AppointmentStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as cancelationReason
     *
     * The coded reason for the appointment being cancelled. This is often used in reporting/billing/futher processing to determine if further actions are required, or specific fees apply.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCancelationReason()
    {
        return $this->cancelationReason;
    }

    /**
     * Sets a new cancelationReason
     *
     * The coded reason for the appointment being cancelled. This is often used in reporting/billing/futher processing to determine if further actions are required, or specific fees apply.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $cancelationReason
     * @return self
     */
    public function setCancelationReason(\TKusy\Hl7FhirR4\CodeableConceptType $cancelationReason)
    {
        $this->cancelationReason = $cancelationReason;
        return $this;
    }

    /**
     * Adds as serviceCategory
     *
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $serviceCategory
     */
    public function addToServiceCategory(\TKusy\Hl7FhirR4\CodeableConceptType $serviceCategory)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $serviceCategory
     * @return self
     */
    public function setServiceCategory(array $serviceCategory)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $serviceType
     */
    public function addToServiceType(\TKusy\Hl7FhirR4\CodeableConceptType $serviceType)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $serviceType
     * @return self
     */
    public function setServiceType(array $serviceType)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $specialty
     */
    public function addToSpecialty(\TKusy\Hl7FhirR4\CodeableConceptType $specialty)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $specialty
     * @return self
     */
    public function setSpecialty(array $specialty)
    {
        $this->specialty = $specialty;
        return $this;
    }

    /**
     * Gets as appointmentType
     *
     * The style of appointment or patient that has been booked in the slot (not service type).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $appointmentType
     * @return self
     */
    public function setAppointmentType(\TKusy\Hl7FhirR4\CodeableConceptType $appointmentType)
    {
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * The coded reason that this appointment is being scheduled. This is more clinical than administrative.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reasonCode
     */
    public function addToReasonCode(\TKusy\Hl7FhirR4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * isset reasonCode
     *
     * The coded reason that this appointment is being scheduled. This is more clinical than administrative.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonCode($index)
    {
        return isset($this->reasonCode[$index]);
    }

    /**
     * unset reasonCode
     *
     * The coded reason that this appointment is being scheduled. This is more clinical than administrative.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonCode($index)
    {
        unset($this->reasonCode[$index]);
    }

    /**
     * Gets as reasonCode
     *
     * The coded reason that this appointment is being scheduled. This is more clinical than administrative.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * The coded reason that this appointment is being scheduled. This is more clinical than administrative.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     * @return self
     */
    public function setReasonCode(array $reasonCode)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Adds as reasonReference
     *
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $reasonReference
     */
    public function addToReasonReference(\TKusy\Hl7FhirR4\ReferenceType $reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * isset reasonReference
     *
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonReference($index)
    {
        return isset($this->reasonReference[$index]);
    }

    /**
     * unset reasonReference
     *
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonReference($index)
    {
        unset($this->reasonReference[$index]);
    }

    /**
     * Gets as reasonReference
     *
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * Reason the appointment has been scheduled to take place, as specified using information from another resource. When the patient arrives and the encounter begins it may be used as the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     * @return self
     */
    public function setReasonReference(array $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Gets as priority
     *
     * The priority of the appointment. Can be used to make informed decisions if needing to re-prioritize appointments. (The iCal Standard specifies 0 as undefined, 1 as highest, 9 as lowest priority).
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
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
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\UnsignedIntType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as description
     *
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The brief description of the appointment as would be shown on a subject line in a meeting request, or appointment list. Detailed or expanded information should be put in the comment field.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as supportingInformation
     *
     * Additional information to support the appointment provided when making the appointment.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7FhirR4\ReferenceType $supportingInformation)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Gets as start
     *
     * Date/Time that the appointment is to take place.
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
     * Date/Time that the appointment is to take place.
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
     * Date/Time that the appointment is to conclude.
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
     * Date/Time that the appointment is to conclude.
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
     * Gets as minutesDuration
     *
     * Number of minutes that the appointment is to take. This can be less than the duration between the start and end times. For example, where the actual time of appointment is only an estimate or if a 30 minute appointment is being requested, but any time would work. Also, if there is, for example, a planned 15 minute break in the middle of a long appointment, the duration may be 15 minutes less than the difference between the start and end.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType $minutesDuration
     * @return self
     */
    public function setMinutesDuration(\TKusy\Hl7FhirR4\PositiveIntType $minutesDuration)
    {
        $this->minutesDuration = $minutesDuration;
        return $this;
    }

    /**
     * Adds as slot
     *
     * The slots from the participants' schedules that will be filled by the appointment.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $slot
     */
    public function addToSlot(\TKusy\Hl7FhirR4\ReferenceType $slot)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $slot
     * @return self
     */
    public function setSlot(array $slot)
    {
        $this->slot = $slot;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date that this appointment was initially created. This could be different to the meta.lastModified value on the initial entry, as this could have been before the resource was created on the FHIR server, and should remain unchanged over the lifespan of the appointment.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7FhirR4\DateTimeType $created)
    {
        $this->created = $created;
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

    /**
     * Gets as patientInstruction
     *
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }

    /**
     * Sets a new patientInstruction
     *
     * While Appointment.comment contains information for internal use, Appointment.patientInstructions is used to capture patient facing information about the Appointment (e.g. please bring your referral or fast from 8pm night before).
     *
     * @param \TKusy\Hl7FhirR4\StringType $patientInstruction
     * @return self
     */
    public function setPatientInstruction(\TKusy\Hl7FhirR4\StringType $patientInstruction)
    {
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7FhirR4\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
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
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
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
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * The service request this appointment is allocated to assess (e.g. incoming referral or procedure request).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Adds as participant
     *
     * List of participants involved in the appointment.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AppointmentParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7FhirR4\AppointmentParticipantType $participant)
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
     * @return \TKusy\Hl7FhirR4\AppointmentParticipantType[]
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
     * @param \TKusy\Hl7FhirR4\AppointmentParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant)
    {
        $this->participant = $participant;
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
     * @param \TKusy\Hl7FhirR4\PeriodType $requestedPeriod
     */
    public function addToRequestedPeriod(\TKusy\Hl7FhirR4\PeriodType $requestedPeriod)
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
     * @return \TKusy\Hl7FhirR4\PeriodType[]
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
     * @param \TKusy\Hl7FhirR4\PeriodType[] $requestedPeriod
     * @return self
     */
    public function setRequestedPeriod(array $requestedPeriod)
    {
        $this->requestedPeriod = $requestedPeriod;
        return $this;
    }


}

