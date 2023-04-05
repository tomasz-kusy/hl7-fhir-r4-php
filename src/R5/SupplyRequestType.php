<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SupplyRequestType
 *
 * A record of a request to deliver a medication, substance or device used in the healthcare setting to a particular destination for a particular person or organization.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SupplyRequest
 */
class SupplyRequestType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this SupplyRequest by the author and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Status of the supply request.
     *
     * @var \TKusy\Hl7Fhir\R5\SupplyRequestStatusType $status
     */
    private $status = null;

    /**
     * Plan/proposal/order fulfilled by this request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * Category of supply, e.g. central, non-stock, etc. This is used to support work flows associated with the supply process.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Indicates how quickly this SupplyRequest should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * The patient to whom the supply will be given or for whom they will be used.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $deliverFor
     */
    private $deliverFor = null;

    /**
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     */
    private $item = null;

    /**
     * The amount that is being ordered of the indicated item.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Specific parameters for the ordered item. For example, the size of the indicated item.
     *
     * @var \TKusy\Hl7Fhir\R5\SupplyRequestParameterType[] $parameter
     */
    private $parameter = null;

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
     * When the request was made.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The device, practitioner, etc. who initiated the request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requester
     */
    private $requester = null;

    /**
     * Who is intended to fulfill the request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supplier
     */
    private $supplier = null;

    /**
     * The reason why the supply item was requested.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Where the supply is expected to come from.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $deliverFrom
     */
    private $deliverFrom = null;

    /**
     * Where the supply is destined to go.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $deliverTo
     */
    private $deliverTo = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this SupplyRequest by the author and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * Status of the supply request.
     *
     * @return \TKusy\Hl7Fhir\R5\SupplyRequestStatusType
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
     * @param \TKusy\Hl7Fhir\R5\SupplyRequestStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\SupplyRequestStatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * Plan/proposal/order fulfilled by this request.
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
     * Plan/proposal/order fulfilled by this request.
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
     * Plan/proposal/order fulfilled by this request.
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
     * Plan/proposal/order fulfilled by this request.
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
     * Plan/proposal/order fulfilled by this request.
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
     * Gets as category
     *
     * Category of supply, e.g. central, non-stock, etc. This is used to support work flows associated with the supply process.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(?\TKusy\Hl7Fhir\R5\CodeableConceptType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly this SupplyRequest should be addressed with respect to other requests.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestPriorityType
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
     * @param \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(?\TKusy\Hl7Fhir\R5\RequestPriorityType $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as deliverFor
     *
     * The patient to whom the supply will be given or for whom they will be used.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDeliverFor()
    {
        return $this->deliverFor;
    }

    /**
     * Sets a new deliverFor
     *
     * The patient to whom the supply will be given or for whom they will be used.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $deliverFor
     * @return self
     */
    public function setDeliverFor(?\TKusy\Hl7Fhir\R5\ReferenceType $deliverFor = null)
    {
        $this->deliverFor = $deliverFor;
        return $this;
    }

    /**
     * Gets as item
     *
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * The item that is requested to be supplied. This is either a link to a resource representing the details of the item or a code that identifies the item from a known list.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     * @return self
     */
    public function setItem(\TKusy\Hl7Fhir\R5\CodeableReferenceType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount that is being ordered of the indicated item.
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
     * The amount that is being ordered of the indicated item.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7Fhir\R5\QuantityType $quantity)
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
     * @param \TKusy\Hl7Fhir\R5\SupplyRequestParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\SupplyRequestParameterType $parameter)
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
     * @return \TKusy\Hl7Fhir\R5\SupplyRequestParameterType[]
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
     * @param \TKusy\Hl7Fhir\R5\SupplyRequestParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
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
     * Gets as authoredOn
     *
     * When the request was made.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     * @return self
     */
    public function setAuthoredOn(?\TKusy\Hl7Fhir\R5\DateTimeType $authoredOn = null)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * Gets as requester
     *
     * The device, practitioner, etc. who initiated the request.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $requester
     * @return self
     */
    public function setRequester(?\TKusy\Hl7Fhir\R5\ReferenceType $requester = null)
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supplier
     */
    public function addToSupplier(\TKusy\Hl7Fhir\R5\ReferenceType $supplier)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supplier
     * @return self
     */
    public function setSupplier(array $supplier = null)
    {
        $this->supplier = $supplier;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * The reason why the supply item was requested.
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
     * Gets as deliverFrom
     *
     * Where the supply is expected to come from.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $deliverFrom
     * @return self
     */
    public function setDeliverFrom(?\TKusy\Hl7Fhir\R5\ReferenceType $deliverFrom = null)
    {
        $this->deliverFrom = $deliverFrom;
        return $this;
    }

    /**
     * Gets as deliverTo
     *
     * Where the supply is destined to go.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $deliverTo
     * @return self
     */
    public function setDeliverTo(?\TKusy\Hl7Fhir\R5\ReferenceType $deliverTo = null)
    {
        $this->deliverTo = $deliverTo;
        return $this;
    }


}

