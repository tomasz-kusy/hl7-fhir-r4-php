<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SupplyDeliveryType
 *
 * Record of delivery of what is supplied.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SupplyDelivery
 */
class SupplyDeliveryType extends DomainResourceType
{

    /**
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = [
        
    ];

    /**
     * A larger event of which this particular event is a component or step.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     */
    private $partOf = [
        
    ];

    /**
     * A code specifying the state of the dispense event.
     *
     * @var \TKusy\Hl7FhirR4\SupplyDeliveryStatusType $status
     */
    private $status = null;

    /**
     * A link to a resource representing the person whom the delivered item is for.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The item that is being delivered or has been supplied.
     *
     * @var \TKusy\Hl7FhirR4\SupplyDeliverySuppliedItemType $suppliedItem
     */
    private $suppliedItem = null;

    /**
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $supplier
     */
    private $supplier = null;

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $destination
     */
    private $destination = null;

    /**
     * Identifies the person who picked up the Supply.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $receiver
     */
    private $receiver = [
        
    ];

    /**
     * Adds as identifier
     *
     * Identifier for the supply delivery event that is used to identify it across multiple disparate systems.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
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
     * A plan, proposal or order that is fulfilled in whole or in part by this event.
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7FhirR4\ReferenceType $partOf)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code specifying the state of the dispense event.
     *
     * @return \TKusy\Hl7FhirR4\SupplyDeliveryStatusType
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
     * @param \TKusy\Hl7FhirR4\SupplyDeliveryStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\SupplyDeliveryStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as patient
     *
     * A link to a resource representing the person whom the delivered item is for.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as suppliedItem
     *
     * The item that is being delivered or has been supplied.
     *
     * @return \TKusy\Hl7FhirR4\SupplyDeliverySuppliedItemType
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
     * @param \TKusy\Hl7FhirR4\SupplyDeliverySuppliedItemType $suppliedItem
     * @return self
     */
    public function setSuppliedItem(\TKusy\Hl7FhirR4\SupplyDeliverySuppliedItemType $suppliedItem)
    {
        $this->suppliedItem = $suppliedItem;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(\TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrencePeriod
     *
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Sets a new occurrencePeriod
     *
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     * @return self
     */
    public function setOccurrencePeriod(\TKusy\Hl7FhirR4\PeriodType $occurrencePeriod)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Gets as occurrenceTiming
     *
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * Sets a new occurrenceTiming
     *
     * The date or time(s) the activity occurred. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $occurrenceTiming
     * @return self
     */
    public function setOccurrenceTiming(\TKusy\Hl7FhirR4\TimingType $occurrenceTiming)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * Gets as supplier
     *
     * The individual responsible for dispensing the medication, supplier or device.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Sets a new supplier
     *
     * The individual responsible for dispensing the medication, supplier or device.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $supplier
     * @return self
     */
    public function setSupplier(\TKusy\Hl7FhirR4\ReferenceType $supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $destination
     * @return self
     */
    public function setDestination(\TKusy\Hl7FhirR4\ReferenceType $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Adds as receiver
     *
     * Identifies the person who picked up the Supply.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $receiver
     */
    public function addToReceiver(\TKusy\Hl7FhirR4\ReferenceType $receiver)
    {
        $this->receiver[] = $receiver;
        return $this;
    }

    /**
     * isset receiver
     *
     * Identifies the person who picked up the Supply.
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
     * Identifies the person who picked up the Supply.
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
     * Identifies the person who picked up the Supply.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets a new receiver
     *
     * Identifies the person who picked up the Supply.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $receiver
     * @return self
     */
    public function setReceiver(array $receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }


}

