<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SupplyDeliveryType
 *
 * Record of delivery of what is supplied.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SupplyDelivery
 */
class SupplyDeliveryType extends DomainResourceType
{

    /**
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event of which this particular event is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code specifying the state of the dispense event.
     *
     * @var \TKusy\Hl7Fhir\R5\SupplyDeliveryStatusType $status
     */
    private $status = null;

    /**
     * A link to a resource representing the person whom the delivered item is for.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * Indicates the type of supply being provided. Examples include: Medication, Device, Biologically Derived Product.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The item that is being delivered or has been supplied.
     *
     * @var \TKusy\Hl7Fhir\R5\SupplyDeliverySuppliedItemType[] $suppliedItem
     */
    private $suppliedItem = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * The individual or organization responsible for supplying the delivery.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $supplier
     */
    private $supplier = null;

    /**
     * Identification of the facility/location where the delivery was shipped to.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $destination
     */
    private $destination = null;

    /**
     * Identifies the individual or organization that received the delivery.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $receiver
     */
    private $receiver = null;

    /**
     * Adds as identifier
     *
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
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
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
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
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
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
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
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
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A code specifying the state of the dispense event.
     *
     * @return \TKusy\Hl7Fhir\R5\SupplyDeliveryStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code specifying the state of the dispense event.
     *
     * @param \TKusy\Hl7Fhir\R5\SupplyDeliveryStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\SupplyDeliveryStatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as patient
     *
     * A link to a resource representing the person whom the delivered item is for.
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
     * A link to a resource representing the person whom the delivered item is for.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $patient
     * @return self
     */
    public function setPatient(?\TKusy\Hl7Fhir\R5\ReferenceType $patient = null)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates the type of supply being provided. Examples include: Medication, Device, Biologically Derived Product.
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
     * Indicates the type of supply being provided. Examples include: Medication, Device, Biologically Derived Product.
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
     * Adds as suppliedItem
     *
     * The item that is being delivered or has been supplied.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SupplyDeliverySuppliedItemType $suppliedItem
     */
    public function addToSuppliedItem(\TKusy\Hl7Fhir\R5\SupplyDeliverySuppliedItemType $suppliedItem)
    {
        $this->suppliedItem[] = $suppliedItem;
        return $this;
    }

    /**
     * isset suppliedItem
     *
     * The item that is being delivered or has been supplied.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuppliedItem($index)
    {
        return isset($this->suppliedItem[$index]);
    }

    /**
     * unset suppliedItem
     *
     * The item that is being delivered or has been supplied.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuppliedItem($index)
    {
        unset($this->suppliedItem[$index]);
    }

    /**
     * Gets as suppliedItem
     *
     * The item that is being delivered or has been supplied.
     *
     * @return \TKusy\Hl7Fhir\R5\SupplyDeliverySuppliedItemType[]
     */
    public function getSuppliedItem()
    {
        return $this->suppliedItem;
    }

    /**
     * Sets a new suppliedItem
     *
     * The item that is being delivered or has been supplied.
     *
     * @param \TKusy\Hl7Fhir\R5\SupplyDeliverySuppliedItemType[] $suppliedItem
     * @return self
     */
    public function setSuppliedItem(array $suppliedItem = null)
    {
        $this->suppliedItem = $suppliedItem;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime = null)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrencePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Sets a new occurrencePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     * @return self
     */
    public function setOccurrencePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod = null)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Gets as occurrenceTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * Sets a new occurrenceTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming
     * @return self
     */
    public function setOccurrenceTiming(?\TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming = null)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * Gets as supplier
     *
     * The individual or organization responsible for supplying the delivery.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Sets a new supplier
     *
     * The individual or organization responsible for supplying the delivery.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supplier
     * @return self
     */
    public function setSupplier(?\TKusy\Hl7Fhir\R5\ReferenceType $supplier = null)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Identification of the facility/location where the delivery was shipped to.
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
     * Identification of the facility/location where the delivery was shipped to.
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
     * Adds as receiver
     *
     * Identifies the individual or organization that received the delivery.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $receiver
     */
    public function addToReceiver(\TKusy\Hl7Fhir\R5\ReferenceType $receiver)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * isset receiver
     *
     * Identifies the individual or organization that received the delivery.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiver($index)
    {
        return isset($this->receiver[$index]);
    }

    /**
     * unset receiver
     *
     * Identifies the individual or organization that received the delivery.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiver($index)
    {
        unset($this->receiver[$index]);
    }

    /**
     * Gets as receiver
     *
     * Identifies the individual or organization that received the delivery.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets a new receiver
     *
     * Identifies the individual or organization that received the delivery.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $receiver
     * @return self
     */
    public function setReceiver(array $receiver = null)
    {
        $this->receiver = $receiver;
        return $this;
    }


}

