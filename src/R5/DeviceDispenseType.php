<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDispenseType
 *
 * A record of dispensation of a device - i.e., assigning a device to a patient, or to a professional for their use.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DeviceDispense
 */
class DeviceDispenseType extends DomainResourceType
{

    /**
     * Business identifier for this dispensation.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The order or request that this dispense is fulfilling.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The bigger event that this dispense is a part of.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code specifying the state of the set of dispense events.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDispenseStatusCodesType $status
     */
    private $status = null;

    /**
     * Indicates the reason why a dispense was or was not performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $statusReason
     */
    private $statusReason = null;

    /**
     * Indicates the type of device dispense.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Identifies the device being dispensed. This is either a link to a resource representing the details of the device or a simple attribute carrying a code that identifies the device from a known list of devices.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $device
     */
    private $device = null;

    /**
     * A link to a resource representing the person to whom the device is intended.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Identifies the person who picked up the device or the person or location where the device was delivered. This may be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $receiver
     */
    private $receiver = null;

    /**
     * The encounter that establishes the context for this event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Additional information that supports the device being dispensed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * Indicates who or what performed the event.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDispensePerformerType[] $performer
     */
    private $performer = null;

    /**
     * The principal physical location where the dispense was performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Indicates the type of dispensing event that is performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The number of devices that have been dispensed.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The time when the dispensed product was packaged and reviewed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $preparedDate
     */
    private $preparedDate = null;

    /**
     * The time the dispensed product was made available to the patient or their representative.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver
     */
    private $whenHandedOver = null;

    /**
     * Identification of the facility/location where the device was /should be shipped to, as part of the dispense process.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $destination
     */
    private $destination = null;

    /**
     * Extra information about the dispense that could not be conveyed in the other attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The full representation of the instructions.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $usageInstruction
     */
    private $usageInstruction = null;

    /**
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $eventHistory
     */
    private $eventHistory = null;

    /**
     * Adds as identifier
     *
     * Business identifier for this dispensation.
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
     * Business identifier for this dispensation.
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
     * Business identifier for this dispensation.
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
     * Business identifier for this dispensation.
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
     * Business identifier for this dispensation.
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
     * The order or request that this dispense is fulfilling.
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
     * The order or request that this dispense is fulfilling.
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
     * The order or request that this dispense is fulfilling.
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
     * The order or request that this dispense is fulfilling.
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
     * The order or request that this dispense is fulfilling.
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
     * Adds as partOf
     *
     * The bigger event that this dispense is a part of.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R5\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * The bigger event that this dispense is a part of.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartOf($index)
    {
        return isset($this->partOf[$index]);
    }

    /**
     * unset partOf
     *
     * The bigger event that this dispense is a part of.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartOf($index)
    {
        unset($this->partOf[$index]);
    }

    /**
     * Gets as partOf
     *
     * The bigger event that this dispense is a part of.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * The bigger event that this dispense is a part of.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code specifying the state of the set of dispense events.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDispenseStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code specifying the state of the set of dispense events.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDispenseStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\DeviceDispenseStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Indicates the reason why a dispense was or was not performed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * Indicates the reason why a dispense was or was not performed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $statusReason
     * @return self
     */
    public function setStatusReason(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Adds as category
     *
     * Indicates the type of device dispense.
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
     * Indicates the type of device dispense.
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
     * Indicates the type of device dispense.
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
     * Indicates the type of device dispense.
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
     * Indicates the type of device dispense.
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
     * Gets as device
     *
     * Identifies the device being dispensed. This is either a link to a resource representing the details of the device or a simple attribute carrying a code that identifies the device from a known list of devices.
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
     * Identifies the device being dispensed. This is either a link to a resource representing the details of the device or a simple attribute carrying a code that identifies the device from a known list of devices.
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
     * Gets as subject
     *
     * A link to a resource representing the person to whom the device is intended.
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
     * A link to a resource representing the person to whom the device is intended.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as receiver
     *
     * Identifies the person who picked up the device or the person or location where the device was delivered. This may be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets a new receiver
     *
     * Identifies the person who picked up the device or the person or location where the device was delivered. This may be a patient or their caregiver, but some cases exist where it can be a healthcare professional or a location.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $receiver
     * @return self
     */
    public function setReceiver(?\TKusy\Hl7Fhir\R5\ReferenceType $receiver = null)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The encounter that establishes the context for this event.
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
     * The encounter that establishes the context for this event.
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
     * Adds as supportingInformation
     *
     * Additional information that supports the device being dispensed.
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
     * Additional information that supports the device being dispensed.
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
     * Additional information that supports the device being dispensed.
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
     * Additional information that supports the device being dispensed.
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
     * Additional information that supports the device being dispensed.
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
     * Adds as performer
     *
     * Indicates who or what performed the event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDispensePerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\DeviceDispensePerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who or what performed the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformer($index)
    {
        return isset($this->performer[$index]);
    }

    /**
     * unset performer
     *
     * Indicates who or what performed the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformer($index)
    {
        unset($this->performer[$index]);
    }

    /**
     * Gets as performer
     *
     * Indicates who or what performed the event.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDispensePerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who or what performed the event.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDispensePerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as location
     *
     * The principal physical location where the dispense was performed.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The principal physical location where the dispense was performed.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates the type of dispensing event that is performed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates the type of dispensing event that is performed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of devices that have been dispensed.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of devices that have been dispensed.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as preparedDate
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getPreparedDate()
    {
        return $this->preparedDate;
    }

    /**
     * Sets a new preparedDate
     *
     * The time when the dispensed product was packaged and reviewed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $preparedDate
     * @return self
     */
    public function setPreparedDate(?\TKusy\Hl7Fhir\R5\DateTimeType $preparedDate = null)
    {
        $this->preparedDate = $preparedDate;
        return $this;
    }

    /**
     * Gets as whenHandedOver
     *
     * The time the dispensed product was made available to the patient or their representative.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }

    /**
     * Sets a new whenHandedOver
     *
     * The time the dispensed product was made available to the patient or their representative.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver
     * @return self
     */
    public function setWhenHandedOver(?\TKusy\Hl7Fhir\R5\DateTimeType $whenHandedOver = null)
    {
        $this->whenHandedOver = $whenHandedOver;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Identification of the facility/location where the device was /should be shipped to, as part of the dispense process.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Identification of the facility/location where the device was /should be shipped to, as part of the dispense process.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $destination
     * @return self
     */
    public function setDestination(?\TKusy\Hl7Fhir\R5\ReferenceType $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Adds as note
     *
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Extra information about the dispense that could not be conveyed in the other attributes.
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
     * Gets as usageInstruction
     *
     * The full representation of the instructions.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getUsageInstruction()
    {
        return $this->usageInstruction;
    }

    /**
     * Sets a new usageInstruction
     *
     * The full representation of the instructions.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $usageInstruction
     * @return self
     */
    public function setUsageInstruction(?\TKusy\Hl7Fhir\R5\MarkdownType $usageInstruction = null)
    {
        $this->usageInstruction = $usageInstruction;
        return $this;
    }

    /**
     * Adds as eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $eventHistory
     */
    public function addToEventHistory(\TKusy\Hl7Fhir\R5\ReferenceType $eventHistory)
    {
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * isset eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventHistory($index)
    {
        return isset($this->eventHistory[$index]);
    }

    /**
     * unset eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventHistory($index)
    {
        unset($this->eventHistory[$index]);
    }

    /**
     * Gets as eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * Sets a new eventHistory
     *
     * A summary of the events of interest that have occurred, such as when the dispense was verified.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $eventHistory
     * @return self
     */
    public function setEventHistory(array $eventHistory = null)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }


}

