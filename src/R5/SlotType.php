<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SlotType
 *
 * A slot of time on a schedule that may be available for booking appointments.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Slot
 */
class SlotType extends DomainResourceType
{

    /**
     * External Ids for this item.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A broad categorization of the service that is to be performed during this appointment.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $serviceCategory
     */
    private $serviceCategory = null;

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the Schedule resource.
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
     * The style of appointment or patient that may be booked in the slot (not service type).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $appointmentType
     */
    private $appointmentType = null;

    /**
     * The schedule resource that this slot defines an interval of status information.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $schedule
     */
    private $schedule = null;

    /**
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     *
     * @var \TKusy\Hl7Fhir\R5\SlotStatusType $status
     */
    private $status = null;

    /**
     * Date/Time that the slot is to begin.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $start
     */
    private $start = null;

    /**
     * Date/Time that the slot is to conclude.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $end
     */
    private $end = null;

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $overbooked
     */
    private $overbooked = null;

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $comment
     */
    private $comment = null;

    /**
     * Adds as identifier
     *
     * External Ids for this item.
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
     * External Ids for this item.
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
     * External Ids for this item.
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
     * External Ids for this item.
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
     * External Ids for this item.
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
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the Schedule resource.
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
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the Schedule resource.
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
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the Schedule resource.
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
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the Schedule resource.
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
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the Schedule resource.
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
     * Adds as appointmentType
     *
     * The style of appointment or patient that may be booked in the slot (not service type).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $appointmentType
     */
    public function addToAppointmentType(\TKusy\Hl7Fhir\R5\CodeableConceptType $appointmentType)
    {
        $this->appointmentType[] = $appointmentType;
        return $this;
    }

    /**
     * isset appointmentType
     *
     * The style of appointment or patient that may be booked in the slot (not service type).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAppointmentType($index)
    {
        return isset($this->appointmentType[$index]);
    }

    /**
     * unset appointmentType
     *
     * The style of appointment or patient that may be booked in the slot (not service type).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAppointmentType($index)
    {
        unset($this->appointmentType[$index]);
    }

    /**
     * Gets as appointmentType
     *
     * The style of appointment or patient that may be booked in the slot (not service type).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getAppointmentType()
    {
        return $this->appointmentType;
    }

    /**
     * Sets a new appointmentType
     *
     * The style of appointment or patient that may be booked in the slot (not service type).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $appointmentType
     * @return self
     */
    public function setAppointmentType(array $appointmentType = null)
    {
        $this->appointmentType = $appointmentType;
        return $this;
    }

    /**
     * Gets as schedule
     *
     * The schedule resource that this slot defines an interval of status information.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * The schedule resource that this slot defines an interval of status information.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $schedule
     * @return self
     */
    public function setSchedule(\TKusy\Hl7Fhir\R5\ReferenceType $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as status
     *
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     *
     * @return \TKusy\Hl7Fhir\R5\SlotStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * busy | free | busy-unavailable | busy-tentative | entered-in-error.
     *
     * @param \TKusy\Hl7Fhir\R5\SlotStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\SlotStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as start
     *
     * Date/Time that the slot is to begin.
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
     * Date/Time that the slot is to begin.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $start
     * @return self
     */
    public function setStart(\TKusy\Hl7Fhir\R5\InstantType $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * Date/Time that the slot is to conclude.
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
     * Date/Time that the slot is to conclude.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $end
     * @return self
     */
    public function setEnd(\TKusy\Hl7Fhir\R5\InstantType $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as overbooked
     *
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getOverbooked()
    {
        return $this->overbooked;
    }

    /**
     * Sets a new overbooked
     *
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $overbooked
     * @return self
     */
    public function setOverbooked(?\TKusy\Hl7Fhir\R5\BooleanType $overbooked = null)
    {
        $this->overbooked = $overbooked;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $comment
     * @return self
     */
    public function setComment(?\TKusy\Hl7Fhir\R5\StringType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }


}

