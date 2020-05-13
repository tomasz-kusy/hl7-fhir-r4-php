<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing DeviceUseStatementType
 *
 * A record of a device being used by a patient where the record is the result of a report from the patient or another clinician.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DeviceUseStatement
 */
class DeviceUseStatementType extends DomainResourceType
{

    /**
     * An external identifier for this statement such as an IRI.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about. Generally this will be active or completed.
     *
     * @var \TKusy\Hl7Fhir\R4\DeviceUseStatementStatusType $status
     */
    private $status = null;

    /**
     * The patient who used the device.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimingType $timingTiming
     */
    private $timingTiming = null;

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $timingPeriod
     */
    private $timingPeriod = null;

    /**
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $timingDateTime
     */
    private $timingDateTime = null;

    /**
     * The time at which the statement was made/recorded.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $recordedOn
     */
    private $recordedOn = null;

    /**
     * Who reported the device was being used by the patient.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $source
     */
    private $source = null;

    /**
     * The details of the device used.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $device
     */
    private $device = null;

    /**
     * Reason or justification for the use of the device.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $bodySite
     */
    private $bodySite = null;

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     *
     * @var \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * An external identifier for this statement such as an IRI.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
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
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R4\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A plan, proposal or order that is fulfilled in whole or in part by this DeviceUseStatement.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about. Generally this will be active or completed.
     *
     * @return \TKusy\Hl7Fhir\R4\DeviceUseStatementStatusType
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
     * @param \TKusy\Hl7Fhir\R4\DeviceUseStatementStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\DeviceUseStatementStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient who used the device.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The patient who used the device.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Adds as derivedFrom
     *
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $derivedFrom
     */
    public function addToDerivedFrom(\TKusy\Hl7Fhir\R4\ReferenceType $derivedFrom)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * isset derivedFrom
     *
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
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
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
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
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * Allows linking the DeviceUseStatement to the underlying Request, or to other information that supports or is used to derive the DeviceUseStatement.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $derivedFrom
     * @return self
     */
    public function setDerivedFrom(array $derivedFrom)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Gets as timingTiming
     *
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\TimingType
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Sets a new timingTiming
     *
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\TimingType $timingTiming
     * @return self
     */
    public function setTimingTiming(\TKusy\Hl7Fhir\R4\TimingType $timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Gets as timingPeriod
     *
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * Sets a new timingPeriod
     *
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $timingPeriod
     * @return self
     */
    public function setTimingPeriod(\TKusy\Hl7Fhir\R4\PeriodType $timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Gets as timingDateTime
     *
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * Sets a new timingDateTime
     *
     * How often the device was used. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $timingDateTime
     * @return self
     */
    public function setTimingDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $timingDateTime)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * Gets as recordedOn
     *
     * The time at which the statement was made/recorded.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getRecordedOn()
    {
        return $this->recordedOn;
    }

    /**
     * Sets a new recordedOn
     *
     * The time at which the statement was made/recorded.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $recordedOn
     * @return self
     */
    public function setRecordedOn(\TKusy\Hl7Fhir\R4\DateTimeType $recordedOn)
    {
        $this->recordedOn = $recordedOn;
        return $this;
    }

    /**
     * Gets as source
     *
     * Who reported the device was being used by the patient.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Who reported the device was being used by the patient.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7Fhir\R4\ReferenceType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as device
     *
     * The details of the device used.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The details of the device used.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7Fhir\R4\ReferenceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Reason or justification for the use of the device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $reasonCode
     */
    public function addToReasonCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * isset reasonCode
     *
     * Reason or justification for the use of the device.
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
     * Reason or justification for the use of the device.
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
     * Reason or justification for the use of the device.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * Reason or justification for the use of the device.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
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
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $reasonReference
     */
    public function addToReasonReference(\TKusy\Hl7Fhir\R4\ReferenceType $reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * isset reasonReference
     *
     * Indicates another resource whose existence justifies this DeviceUseStatement.
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
     * Indicates another resource whose existence justifies this DeviceUseStatement.
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
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * Indicates another resource whose existence justifies this DeviceUseStatement.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     * @return self
     */
    public function setReasonReference(array $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Gets as bodySite
     *
     * Indicates the anotomic location on the subject's body where the device was used ( i.e. the target).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $bodySite
     * @return self
     */
    public function setBodySite(\TKusy\Hl7Fhir\R4\CodeableConceptType $bodySite)
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R4\AnnotationType $note)
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
     * @return \TKusy\Hl7Fhir\R4\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

