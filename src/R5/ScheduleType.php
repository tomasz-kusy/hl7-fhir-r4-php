<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ScheduleType
 *
 * A container for slots of time that may be available for booking appointments.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Schedule
 */
class ScheduleType extends DomainResourceType
{

    /**
     * External Ids for this item.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether this schedule record is in active use or should not be used (such as was entered in error).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $active
     */
    private $active = null;

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
     * Further description of the schedule as it would be presented to a consumer while searching.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Slots that reference this schedule resource provide the availability details to these referenced resource(s).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $actor
     */
    private $actor = null;

    /**
     * The period of time that the slots that reference this Schedule resource cover (even if none exist). These cover the amount of time that an organization's planning horizon; the interval for which they are currently accepting appointments. This does not define a "template" for planning outside these dates.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $planningHorizon
     */
    private $planningHorizon = null;

    /**
     * Comments on the availability to describe any extended information. Such as custom constraints on the slots that may be associated.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $comment
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
     * Gets as active
     *
     * Whether this schedule record is in active use or should not be used (such as was entered in error).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Whether this schedule record is in active use or should not be used (such as was entered in error).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $active
     * @return self
     */
    public function setActive(?\TKusy\Hl7Fhir\R5\BooleanType $active = null)
    {
        $this->active = $active;
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
     * Gets as name
     *
     * Further description of the schedule as it would be presented to a consumer while searching.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Further description of the schedule as it would be presented to a consumer while searching.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as actor
     *
     * Slots that reference this schedule resource provide the availability details to these referenced resource(s).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $actor
     */
    public function addToActor(\TKusy\Hl7Fhir\R5\ReferenceType $actor)
    {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * isset actor
     *
     * Slots that reference this schedule resource provide the availability details to these referenced resource(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActor($index)
    {
        return isset($this->actor[$index]);
    }

    /**
     * unset actor
     *
     * Slots that reference this schedule resource provide the availability details to these referenced resource(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActor($index)
    {
        unset($this->actor[$index]);
    }

    /**
     * Gets as actor
     *
     * Slots that reference this schedule resource provide the availability details to these referenced resource(s).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Sets a new actor
     *
     * Slots that reference this schedule resource provide the availability details to these referenced resource(s).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $actor
     * @return self
     */
    public function setActor(array $actor)
    {
        $this->actor = $actor;
        return $this;
    }

    /**
     * Gets as planningHorizon
     *
     * The period of time that the slots that reference this Schedule resource cover (even if none exist). These cover the amount of time that an organization's planning horizon; the interval for which they are currently accepting appointments. This does not define a "template" for planning outside these dates.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPlanningHorizon()
    {
        return $this->planningHorizon;
    }

    /**
     * Sets a new planningHorizon
     *
     * The period of time that the slots that reference this Schedule resource cover (even if none exist). These cover the amount of time that an organization's planning horizon; the interval for which they are currently accepting appointments. This does not define a "template" for planning outside these dates.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $planningHorizon
     * @return self
     */
    public function setPlanningHorizon(?\TKusy\Hl7Fhir\R5\PeriodType $planningHorizon = null)
    {
        $this->planningHorizon = $planningHorizon;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Comments on the availability to describe any extended information. Such as custom constraints on the slots that may be associated.
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
     * Comments on the availability to describe any extended information. Such as custom constraints on the slots that may be associated.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $comment
     * @return self
     */
    public function setComment(?\TKusy\Hl7Fhir\R5\MarkdownType $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }


}

