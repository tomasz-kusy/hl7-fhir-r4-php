<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SupplyRequestType
 *
 * A record of a request for a medication, substance or device used in the healthcare setting.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SupplyRequest
 */
class SupplyRequestType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this SupplyRequest by the author and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Status of the supply request.
     *
     * @var \TKusy\Hl7Fhir\R4\SupplyRequestStatusType $status
     */
    private $status = null;

    /**
     * Category of supply, e.g. central, non-stock, etc. This is used to support work flows associated with the supply process.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Indicates how quickly this SupplyRequest should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7Fhir\R4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $itemCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $itemReference
     */
    private $itemReference = null;

    /**
     * The amount that is being ordered of the indicated item.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Specific parameters for the ordered item. For example, the size of the indicated item.
     *
     * @var \TKusy\Hl7Fhir\R4\SupplyRequestParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * When the request was made.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The device, practitioner, etc. who initiated the request.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $requester
     */
    private $requester = null;

    /**
     * Who is intended to fulfill the request.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $supplier
     */
    private $supplier = null;

    /**
     * The reason why the supply item was requested.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * The reason why the supply item was requested.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * Where the supply is expected to come from.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $deliverFrom
     */
    private $deliverFrom = null;

    /**
     * Where the supply is destined to go.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $deliverTo
     */
    private $deliverTo = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this SupplyRequest by the author and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this SupplyRequest by the author and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this SupplyRequest by the author and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this SupplyRequest by the author and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this SupplyRequest by the author and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * Gets as status
     *
     * Status of the supply request.
     *
     * @return \TKusy\Hl7Fhir\R4\SupplyRequestStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status of the supply request.
     *
     * @param \TKusy\Hl7Fhir\R4\SupplyRequestStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\SupplyRequestStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as category
     *
     * Category of supply, e.g. central, non-stock, etc. This is used to support work flows associated with the supply process.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Category of supply, e.g. central, non-stock, etc. This is used to support work flows associated with the supply process.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7Fhir\R4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly this SupplyRequest should be addressed with respect to other requests.
     *
     * @return \TKusy\Hl7Fhir\R4\RequestPriorityType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Indicates how quickly this SupplyRequest should be addressed with respect to other requests.
     *
     * @param \TKusy\Hl7Fhir\R4\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7Fhir\R4\RequestPriorityType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as itemCodeableConcept
     *
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Sets a new itemCodeableConcept
     *
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $itemCodeableConcept
     * @return self
     */
    public function setItemCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $itemCodeableConcept)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * Gets as itemReference
     *
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list. (choose any one of item*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $itemReference
     * @return self
     */
    public function setItemReference(\TKusy\Hl7Fhir\R4\ReferenceType $itemReference)
    {
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount that is being ordered of the indicated item.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount that is being ordered of the indicated item.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7Fhir\R4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Specific parameters for the ordered item. For example, the size of the indicated item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\SupplyRequestParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R4\SupplyRequestParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * Specific parameters for the ordered item. For example, the size of the indicated item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * Specific parameters for the ordered item. For example, the size of the indicated item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * Specific parameters for the ordered item. For example, the size of the indicated item.
     *
     * @return \TKusy\Hl7Fhir\R4\SupplyRequestParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * Specific parameters for the ordered item. For example, the size of the indicated item.
     *
     * @param \TKusy\Hl7Fhir\R4\SupplyRequestParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrencePeriod
     *
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Sets a new occurrencePeriod
     *
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $occurrencePeriod
     * @return self
     */
    public function setOccurrencePeriod(\TKusy\Hl7Fhir\R4\PeriodType $occurrencePeriod)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Gets as occurrenceTiming
     *
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\TimingType
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * Sets a new occurrenceTiming
     *
     * When the request should be fulfilled. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\TimingType $occurrenceTiming
     * @return self
     */
    public function setOccurrenceTiming(\TKusy\Hl7Fhir\R4\TimingType $occurrenceTiming)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * Gets as authoredOn
     *
     * When the request was made.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

    /**
     * Sets a new authoredOn
     *
     * When the request was made.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $authoredOn
     * @return self
     */
    public function setAuthoredOn(\TKusy\Hl7Fhir\R4\DateTimeType $authoredOn)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * Gets as requester
     *
     * The device, practitioner, etc. who initiated the request.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Sets a new requester
     *
     * The device, practitioner, etc. who initiated the request.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $requester
     * @return self
     */
    public function setRequester(\TKusy\Hl7Fhir\R4\ReferenceType $requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Adds as supplier
     *
     * Who is intended to fulfill the request.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $supplier
     */
    public function addToSupplier(\TKusy\Hl7Fhir\R4\ReferenceType $supplier)
    {
        $this->supplier[] = $supplier;
        return $this;
    }

    /**
     * isset supplier
     *
     * Who is intended to fulfill the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplier($index)
    {
        return isset($this->supplier[$index]);
    }

    /**
     * unset supplier
     *
     * Who is intended to fulfill the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplier($index)
    {
        unset($this->supplier[$index]);
    }

    /**
     * Gets as supplier
     *
     * Who is intended to fulfill the request.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Sets a new supplier
     *
     * Who is intended to fulfill the request.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $supplier
     * @return self
     */
    public function setSupplier(array $supplier)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * Gets as deliverFrom
     *
     * Where the supply is expected to come from.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getDeliverFrom()
    {
        return $this->deliverFrom;
    }

    /**
     * Sets a new deliverFrom
     *
     * Where the supply is expected to come from.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $deliverFrom
     * @return self
     */
    public function setDeliverFrom(\TKusy\Hl7Fhir\R4\ReferenceType $deliverFrom)
    {
        $this->deliverFrom = $deliverFrom;
        return $this;
    }

    /**
     * Gets as deliverTo
     *
     * Where the supply is destined to go.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getDeliverTo()
    {
        return $this->deliverTo;
    }

    /**
     * Sets a new deliverTo
     *
     * Where the supply is destined to go.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $deliverTo
     * @return self
     */
    public function setDeliverTo(\TKusy\Hl7Fhir\R4\ReferenceType $deliverTo)
    {
        $this->deliverTo = $deliverTo;
        return $this;
    }


}

