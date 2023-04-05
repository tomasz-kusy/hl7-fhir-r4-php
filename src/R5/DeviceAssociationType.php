<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceAssociationType
 *
 * A record of association or dissociation of a device with a patient.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DeviceAssociation
 */
class DeviceAssociationType extends DomainResourceType
{

    /**
     * Instance identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Reference to the devices associated with the patient or group.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    private $device = null;

    /**
     * Describes the relationship between the device and subject.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Indicates the state of the Device association.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     */
    private $status = null;

    /**
     * The reasons given for the current association status.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $statusReason
     */
    private $statusReason = null;

    /**
     * The individual, group of individuals or device that the device is on or associated with.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Current anatomical location of the device in/on subject.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $bodyStructure
     */
    private $bodyStructure = null;

    /**
     * Begin and end dates and times for the device association.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * The details about the device when it is in use to describe its operation.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceAssociationOperationType[] $operation
     */
    private $operation = null;

    /**
     * Adds as identifier
     *
     * Instance identifier.
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
     * Instance identifier.
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
     * Instance identifier.
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
     * Instance identifier.
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
     * Instance identifier.
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
     * Gets as device
     *
     * Reference to the devices associated with the patient or group.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * Reference to the devices associated with the patient or group.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7Fhir\R5\ReferenceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adds as category
     *
     * Describes the relationship between the device and subject.
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
     * Describes the relationship between the device and subject.
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
     * Describes the relationship between the device and subject.
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
     * Describes the relationship between the device and subject.
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
     * Describes the relationship between the device and subject.
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
     * Gets as status
     *
     * Indicates the state of the Device association.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the state of the Device association.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\CodeableConceptType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as statusReason
     *
     * The reasons given for the current association status.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    public function addToStatusReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason)
    {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * isset statusReason
     *
     * The reasons given for the current association status.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusReason($index)
    {
        return isset($this->statusReason[$index]);
    }

    /**
     * unset statusReason
     *
     * The reasons given for the current association status.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusReason($index)
    {
        unset($this->statusReason[$index]);
    }

    /**
     * Gets as statusReason
     *
     * The reasons given for the current association status.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * The reasons given for the current association status.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $statusReason
     * @return self
     */
    public function setStatusReason(array $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The individual, group of individuals or device that the device is on or associated with.
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
     * The individual, group of individuals or device that the device is on or associated with.
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
     * Gets as bodyStructure
     *
     * Current anatomical location of the device in/on subject.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getBodyStructure()
    {
        return $this->bodyStructure;
    }

    /**
     * Sets a new bodyStructure
     *
     * Current anatomical location of the device in/on subject.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $bodyStructure
     * @return self
     */
    public function setBodyStructure(?\TKusy\Hl7Fhir\R5\ReferenceType $bodyStructure = null)
    {
        $this->bodyStructure = $bodyStructure;
        return $this;
    }

    /**
     * Gets as period
     *
     * Begin and end dates and times for the device association.
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
     * Begin and end dates and times for the device association.
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
     * Adds as operation
     *
     * The details about the device when it is in use to describe its operation.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceAssociationOperationType $operation
     */
    public function addToOperation(\TKusy\Hl7Fhir\R5\DeviceAssociationOperationType $operation)
    {
        $this->operation[] = $operation;
        return $this;
    }

    /**
     * isset operation
     *
     * The details about the device when it is in use to describe its operation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperation($index)
    {
        return isset($this->operation[$index]);
    }

    /**
     * unset operation
     *
     * The details about the device when it is in use to describe its operation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperation($index)
    {
        unset($this->operation[$index]);
    }

    /**
     * Gets as operation
     *
     * The details about the device when it is in use to describe its operation.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceAssociationOperationType[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * The details about the device when it is in use to describe its operation.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceAssociationOperationType[] $operation
     * @return self
     */
    public function setOperation(array $operation = null)
    {
        $this->operation = $operation;
        return $this;
    }


}

