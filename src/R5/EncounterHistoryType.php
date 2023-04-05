<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EncounterHistoryType
 *
 * A record of significant events/milestones key data throughout the history of an Encounter, often tracked for specific purposes such as billing.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: EncounterHistory
 */
class EncounterHistoryType extends DomainResourceType
{

    /**
     * The Encounter associated with this set of historic values.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Identifier(s) by which this encounter is known.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * planned | in-progress | on-hold | discharged | completed | cancelled | discontinued | entered-in-error | unknown.
     *
     * @var \TKusy\Hl7Fhir\R5\EncounterStatusType $status
     */
    private $status = null;

    /**
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $class
     */
    private $class = null;

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Broad categorization of the service that is to be provided (e.g. cardiology).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $serviceType
     */
    private $serviceType = null;

    /**
     * The patient or group related to this encounter. In some use-cases the patient MAY not be present, such as a case meeting about a patient between several practitioners or a careteam.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The subjectStatus value can be used to track the patient's status within the encounter. It details whether the patient has arrived or departed, has been triaged or is currently in a waiting status.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectStatus
     */
    private $subjectStatus = null;

    /**
     * The start and end time associated with this set of values associated with the encounter, may be different to the planned times for various reasons.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $actualPeriod
     */
    private $actualPeriod = null;

    /**
     * The planned start date/time (or admission date) of the encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $plannedStartDate
     */
    private $plannedStartDate = null;

    /**
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $plannedEndDate
     */
    private $plannedEndDate = null;

    /**
     * Actual quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * When missing it is the time in between the start and end values.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $length
     */
    private $length = null;

    /**
     * The location of the patient at this point in the encounter, the multiple cardinality permits de-normalizing the levels of the location hierarchy, such as site/ward/room/bed.
     *
     * @var \TKusy\Hl7Fhir\R5\EncounterHistoryLocationType[] $location
     */
    private $location = null;

    /**
     * Gets as encounter
     *
     * The Encounter associated with this set of historic values.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The Encounter associated with this set of historic values.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * Identifier(s) by which this encounter is known.
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
     * planned | in-progress | on-hold | discharged | completed | cancelled | discontinued | entered-in-error | unknown.
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * planned | in-progress | on-hold | discharged | completed | cancelled | discontinued | entered-in-error | unknown.
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\EncounterStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as class
     *
     * Concepts representing classification of patient encounter such as ambulatory (outpatient), inpatient, emergency, home health or others due to local variations.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $class
     * @return self
     */
    public function setClass(\TKusy\Hl7Fhir\R5\CodeableConceptType $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Adds as type
     *
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
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
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
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
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
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
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
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
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
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
     * Adds as serviceType
     *
     * Broad categorization of the service that is to be provided (e.g. cardiology).
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
     * Broad categorization of the service that is to be provided (e.g. cardiology).
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
     * Broad categorization of the service that is to be provided (e.g. cardiology).
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
     * Broad categorization of the service that is to be provided (e.g. cardiology).
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
     * Broad categorization of the service that is to be provided (e.g. cardiology).
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
     * Gets as subject
     *
     * The patient or group related to this encounter. In some use-cases the patient MAY not be present, such as a case meeting about a patient between several practitioners or a careteam.
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
     * The patient or group related to this encounter. In some use-cases the patient MAY not be present, such as a case meeting about a patient between several practitioners or a careteam.
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
     * Gets as subjectStatus
     *
     * The subjectStatus value can be used to track the patient's status within the encounter. It details whether the patient has arrived or departed, has been triaged or is currently in a waiting status.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubjectStatus()
    {
        return $this->subjectStatus;
    }

    /**
     * Sets a new subjectStatus
     *
     * The subjectStatus value can be used to track the patient's status within the encounter. It details whether the patient has arrived or departed, has been triaged or is currently in a waiting status.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectStatus
     * @return self
     */
    public function setSubjectStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subjectStatus = null)
    {
        $this->subjectStatus = $subjectStatus;
        return $this;
    }

    /**
     * Gets as actualPeriod
     *
     * The start and end time associated with this set of values associated with the encounter, may be different to the planned times for various reasons.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getActualPeriod()
    {
        return $this->actualPeriod;
    }

    /**
     * Sets a new actualPeriod
     *
     * The start and end time associated with this set of values associated with the encounter, may be different to the planned times for various reasons.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $actualPeriod
     * @return self
     */
    public function setActualPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $actualPeriod = null)
    {
        $this->actualPeriod = $actualPeriod;
        return $this;
    }

    /**
     * Gets as plannedStartDate
     *
     * The planned start date/time (or admission date) of the encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getPlannedStartDate()
    {
        return $this->plannedStartDate;
    }

    /**
     * Sets a new plannedStartDate
     *
     * The planned start date/time (or admission date) of the encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $plannedStartDate
     * @return self
     */
    public function setPlannedStartDate(?\TKusy\Hl7Fhir\R5\DateTimeType $plannedStartDate = null)
    {
        $this->plannedStartDate = $plannedStartDate;
        return $this;
    }

    /**
     * Gets as plannedEndDate
     *
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getPlannedEndDate()
    {
        return $this->plannedEndDate;
    }

    /**
     * Sets a new plannedEndDate
     *
     * The planned end date/time (or discharge date) of the encounter.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $plannedEndDate
     * @return self
     */
    public function setPlannedEndDate(?\TKusy\Hl7Fhir\R5\DateTimeType $plannedEndDate = null)
    {
        $this->plannedEndDate = $plannedEndDate;
        return $this;
    }

    /**
     * Gets as length
     *
     * Actual quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * When missing it is the time in between the start and end values.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * Actual quantity of time the encounter lasted. This excludes the time during leaves of absence.
     *
     * When missing it is the time in between the start and end values.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $length
     * @return self
     */
    public function setLength(?\TKusy\Hl7Fhir\R5\DurationType $length = null)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Adds as location
     *
     * The location of the patient at this point in the encounter, the multiple cardinality permits de-normalizing the levels of the location hierarchy, such as site/ward/room/bed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EncounterHistoryLocationType $location
     */
    public function addToLocation(\TKusy\Hl7Fhir\R5\EncounterHistoryLocationType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * The location of the patient at this point in the encounter, the multiple cardinality permits de-normalizing the levels of the location hierarchy, such as site/ward/room/bed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * The location of the patient at this point in the encounter, the multiple cardinality permits de-normalizing the levels of the location hierarchy, such as site/ward/room/bed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * The location of the patient at this point in the encounter, the multiple cardinality permits de-normalizing the levels of the location hierarchy, such as site/ward/room/bed.
     *
     * @return \TKusy\Hl7Fhir\R5\EncounterHistoryLocationType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location of the patient at this point in the encounter, the multiple cardinality permits de-normalizing the levels of the location hierarchy, such as site/ward/room/bed.
     *
     * @param \TKusy\Hl7Fhir\R5\EncounterHistoryLocationType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }


}

