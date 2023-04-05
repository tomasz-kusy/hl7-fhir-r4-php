<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceUsageType
 *
 * A record of a device being used by a patient where the record is the result of a report from the patient or a clinician.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DeviceUsage
 */
class DeviceUsageType extends DomainResourceType
{

    /**
     * An external identifier for this statement such as an IRI.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUsage.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about. Generally this will be active or completed.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceUsageStatusType $status
     */
    private $status = null;

    /**
     * This attribute indicates a category for the statement - The device statement may be made in an inpatient or outpatient settting (inpatient | outpatient | community | patientspecified).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * The patient who used the device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * Allows linking the DeviceUsage to the underlying Request, or to other information that supports or is used to derive the DeviceUsage.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * The encounter or episode of care that establishes the context for this device use statement.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $context
     */
    private $context = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $timingTiming
     */
    private $timingTiming = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $timingPeriod
     */
    private $timingPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime
     */
    private $timingDateTime = null;

    /**
     * The time at which the statement was recorded by informationSource.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $dateAsserted
     */
    private $dateAsserted = null;

    /**
     * The status of the device usage, for example always, sometimes, never. This is not the same as the status of the statement.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $usageStatus
     */
    private $usageStatus = null;

    /**
     * The reason for asserting the usage status - for example forgot, lost, stolen, broken.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $usageReason
     */
    private $usageReason = null;

    /**
     * This indicates how or if the device is being used.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceUsageAdherenceType $adherence
     */
    private $adherence = null;

    /**
     * Who reported the device was being used by the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $informationSource
     */
    private $informationSource = null;

    /**
     * Code or Reference to device used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $device
     */
    private $device = null;

    /**
     * Reason or justification for the use of the device. A coded concept, or another resource whose existence justifies this DeviceUsage.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite
     */
    private $bodySite = null;

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * An external identifier for this statement such as an IRI.
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
     * An external identifier for this statement such as an IRI.
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
     * An external identifier for this statement such as an IRI.
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
     * An external identifier for this statement such as an IRI.
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
     * An external identifier for this statement such as an IRI.
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
     * Adds as basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUsage.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUsage.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUsage.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUsage.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUsage.
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
     * Gets as status
     *
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about. Generally this will be active or completed.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceUsageStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about. Generally this will be active or completed.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceUsageStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\DeviceUsageStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * This attribute indicates a category for the statement - The device statement may be made in an inpatient or outpatient settting (inpatient | outpatient | community | patientspecified).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * This attribute indicates a category for the statement - The device statement may be made in an inpatient or outpatient settting (inpatient | outpatient | community | patientspecified).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * This attribute indicates a category for the statement - The device statement may be made in an inpatient or outpatient settting (inpatient | outpatient | community | patientspecified).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * This attribute indicates a category for the statement - The device statement may be made in an inpatient or outpatient settting (inpatient | outpatient | community | patientspecified).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * This attribute indicates a category for the statement - The device statement may be made in an inpatient or outpatient settting (inpatient | outpatient | community | patientspecified).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient who used the device.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The patient who used the device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7Fhir\R5\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Adds as derivedFrom
     *
     * Allows linking the DeviceUsage to the underlying Request, or to other information that supports or is used to derive the DeviceUsage.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $derivedFrom
     */
    public function addToDerivedFrom(\TKusy\Hl7Fhir\R5\ReferenceType $derivedFrom)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * isset derivedFrom
     *
     * Allows linking the DeviceUsage to the underlying Request, or to other information that supports or is used to derive the DeviceUsage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFrom($index)
    {
        return isset($this->derivedFrom[$index]);
    }

    /**
     * unset derivedFrom
     *
     * Allows linking the DeviceUsage to the underlying Request, or to other information that supports or is used to derive the DeviceUsage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFrom($index)
    {
        unset($this->derivedFrom[$index]);
    }

    /**
     * Gets as derivedFrom
     *
     * Allows linking the DeviceUsage to the underlying Request, or to other information that supports or is used to derive the DeviceUsage.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * Allows linking the DeviceUsage to the underlying Request, or to other information that supports or is used to derive the DeviceUsage.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $derivedFrom
     * @return self
     */
    public function setDerivedFrom(array $derivedFrom = null)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Gets as context
     *
     * The encounter or episode of care that establishes the context for this device use statement.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * The encounter or episode of care that establishes the context for this device use statement.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $context
     * @return self
     */
    public function setContext(?\TKusy\Hl7Fhir\R5\ReferenceType $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Gets as timingTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Sets a new timingTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $timingTiming
     * @return self
     */
    public function setTimingTiming(?\TKusy\Hl7Fhir\R5\TimingType $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Gets as timingPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * Sets a new timingPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $timingPeriod
     * @return self
     */
    public function setTimingPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $timingPeriod = null)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Gets as timingDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * Sets a new timingDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime
     * @return self
     */
    public function setTimingDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime = null)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * Gets as dateAsserted
     *
     * The time at which the statement was recorded by informationSource.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDateAsserted()
    {
        return $this->dateAsserted;
    }

    /**
     * Sets a new dateAsserted
     *
     * The time at which the statement was recorded by informationSource.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $dateAsserted
     * @return self
     */
    public function setDateAsserted(?\TKusy\Hl7Fhir\R5\DateTimeType $dateAsserted = null)
    {
        $this->dateAsserted = $dateAsserted;
        return $this;
    }

    /**
     * Gets as usageStatus
     *
     * The status of the device usage, for example always, sometimes, never. This is not the same as the status of the statement.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getUsageStatus()
    {
        return $this->usageStatus;
    }

    /**
     * Sets a new usageStatus
     *
     * The status of the device usage, for example always, sometimes, never. This is not the same as the status of the statement.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $usageStatus
     * @return self
     */
    public function setUsageStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $usageStatus = null)
    {
        $this->usageStatus = $usageStatus;
        return $this;
    }

    /**
     * Adds as usageReason
     *
     * The reason for asserting the usage status - for example forgot, lost, stolen, broken.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $usageReason
     */
    public function addToUsageReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $usageReason)
    {
        $this->usageReason[] = $usageReason;
        return $this;
    }

    /**
     * isset usageReason
     *
     * The reason for asserting the usage status - for example forgot, lost, stolen, broken.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUsageReason($index)
    {
        return isset($this->usageReason[$index]);
    }

    /**
     * unset usageReason
     *
     * The reason for asserting the usage status - for example forgot, lost, stolen, broken.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUsageReason($index)
    {
        unset($this->usageReason[$index]);
    }

    /**
     * Gets as usageReason
     *
     * The reason for asserting the usage status - for example forgot, lost, stolen, broken.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getUsageReason()
    {
        return $this->usageReason;
    }

    /**
     * Sets a new usageReason
     *
     * The reason for asserting the usage status - for example forgot, lost, stolen, broken.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $usageReason
     * @return self
     */
    public function setUsageReason(array $usageReason = null)
    {
        $this->usageReason = $usageReason;
        return $this;
    }

    /**
     * Gets as adherence
     *
     * This indicates how or if the device is being used.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceUsageAdherenceType
     */
    public function getAdherence()
    {
        return $this->adherence;
    }

    /**
     * Sets a new adherence
     *
     * This indicates how or if the device is being used.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceUsageAdherenceType $adherence
     * @return self
     */
    public function setAdherence(?\TKusy\Hl7Fhir\R5\DeviceUsageAdherenceType $adherence = null)
    {
        $this->adherence = $adherence;
        return $this;
    }

    /**
     * Gets as informationSource
     *
     * Who reported the device was being used by the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getInformationSource()
    {
        return $this->informationSource;
    }

    /**
     * Sets a new informationSource
     *
     * Who reported the device was being used by the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $informationSource
     * @return self
     */
    public function setInformationSource(?\TKusy\Hl7Fhir\R5\ReferenceType $informationSource = null)
    {
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * Gets as device
     *
     * Code or Reference to device used.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * Code or Reference to device used.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7Fhir\R5\CodeableReferenceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Reason or justification for the use of the device. A coded concept, or another resource whose existence justifies this DeviceUsage.
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
     * Reason or justification for the use of the device. A coded concept, or another resource whose existence justifies this DeviceUsage.
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
     * Reason or justification for the use of the device. A coded concept, or another resource whose existence justifies this DeviceUsage.
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
     * Reason or justification for the use of the device. A coded concept, or another resource whose existence justifies this DeviceUsage.
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
     * Reason or justification for the use of the device. A coded concept, or another resource whose existence justifies this DeviceUsage.
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
     * Gets as bodySite
     *
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite
     * @return self
     */
    public function setBodySite(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Adds as note
     *
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

