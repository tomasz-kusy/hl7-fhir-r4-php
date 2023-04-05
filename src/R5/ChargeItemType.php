<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ChargeItemType
 *
 * The resource ChargeItem describes the provision of healthcare provider products for a certain patient, therefore referring not only to the product, but containing in addition details of the provision, like date, time, amounts and participating organizations and persons. Main Usage of the ChargeItem is to enable the billing process and internal cost allocation.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ChargeItem
 */
class ChargeItemType extends DomainResourceType
{

    /**
     * Identifiers assigned to this event performer or other systems.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $definitionUri
     */
    private $definitionUri = null;

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $definitionCanonical
     */
    private $definitionCanonical = null;

    /**
     * The current state of the ChargeItem.
     *
     * @var \TKusy\Hl7Fhir\R5\ChargeItemStatusType $status
     */
    private $status = null;

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code that identifies the charge, like a billing code.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The individual or set of individuals the action is being or was performed on.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * This ChargeItem has the details of how the associated Encounter should be billed or otherwise be handled by finance systems.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

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
     * Indicates who or what performed or participated in the charged service.
     *
     * @var \TKusy\Hl7Fhir\R5\ChargeItemPerformerType[] $performer
     */
    private $performer = null;

    /**
     * The organization performing the service.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $performingOrganization
     */
    private $performingOrganization = null;

    /**
     * The organization requesting the service.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requestingOrganization
     */
    private $requestingOrganization = null;

    /**
     * The financial cost center permits the tracking of charge attribution.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $costCenter
     */
    private $costCenter = null;

    /**
     * Quantity of which the charge item has been serviced.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The anatomical location where the related service has been applied.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $bodysite
     */
    private $bodysite = null;

    /**
     * The unit price of the chargable item.
     *
     * @var \TKusy\Hl7Fhir\R5\MonetaryComponentType $unitPriceComponent
     */
    private $unitPriceComponent = null;

    /**
     * The total price for the chargable item, accounting for the quantity.
     *
     * @var \TKusy\Hl7Fhir\R5\MonetaryComponentType $totalPriceComponent
     */
    private $totalPriceComponent = null;

    /**
     * If the list price or the rule-based factor associated with the code is overridden, this attribute can capture a text to indicate the reason for this action.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $overrideReason
     */
    private $overrideReason = null;

    /**
     * The device, practitioner, etc. who entered the charge item.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $enterer
     */
    private $enterer = null;

    /**
     * Date the charge item was entered.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $enteredDate
     */
    private $enteredDate = null;

    /**
     * Describes why the event occurred in coded or textual form.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $reason
     */
    private $reason = null;

    /**
     * Indicated the rendered service that caused this charge.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $service
     */
    private $service = null;

    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $product
     */
    private $product = null;

    /**
     * Account into which this ChargeItems belongs.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $account
     */
    private $account = null;

    /**
     * Comments made about the event by the performer, subject or other participants.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Further information supporting this charge.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this event performer or other systems.
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
     * Identifiers assigned to this event performer or other systems.
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
     * Identifiers assigned to this event performer or other systems.
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
     * Identifiers assigned to this event performer or other systems.
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
     * Identifiers assigned to this event performer or other systems.
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
     * Adds as definitionUri
     *
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $definitionUri
     */
    public function addToDefinitionUri(\TKusy\Hl7Fhir\R5\UriType $definitionUri)
    {
        $this->definitionUri[] = $definitionUri;
        return $this;
    }

    /**
     * isset definitionUri
     *
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDefinitionUri($index)
    {
        return isset($this->definitionUri[$index]);
    }

    /**
     * unset definitionUri
     *
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDefinitionUri($index)
    {
        unset($this->definitionUri[$index]);
    }

    /**
     * Gets as definitionUri
     *
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getDefinitionUri()
    {
        return $this->definitionUri;
    }

    /**
     * Sets a new definitionUri
     *
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $definitionUri
     * @return self
     */
    public function setDefinitionUri(array $definitionUri = null)
    {
        $this->definitionUri = $definitionUri;
        return $this;
    }

    /**
     * Adds as definitionCanonical
     *
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $definitionCanonical
     */
    public function addToDefinitionCanonical(\TKusy\Hl7Fhir\R5\CanonicalType $definitionCanonical)
    {
        $this->definitionCanonical[] = $definitionCanonical;
        return $this;
    }

    /**
     * isset definitionCanonical
     *
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDefinitionCanonical($index)
    {
        return isset($this->definitionCanonical[$index]);
    }

    /**
     * unset definitionCanonical
     *
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDefinitionCanonical($index)
    {
        unset($this->definitionCanonical[$index]);
    }

    /**
     * Gets as definitionCanonical
     *
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getDefinitionCanonical()
    {
        return $this->definitionCanonical;
    }

    /**
     * Sets a new definitionCanonical
     *
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $definitionCanonical
     * @return self
     */
    public function setDefinitionCanonical(array $definitionCanonical = null)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of the ChargeItem.
     *
     * @return \TKusy\Hl7Fhir\R5\ChargeItemStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the ChargeItem.
     *
     * @param \TKusy\Hl7Fhir\R5\ChargeItemStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\ChargeItemStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
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
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
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
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
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
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
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
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
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
     * Gets as code
     *
     * A code that identifies the charge, like a billing code.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that identifies the charge, like a billing code.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The individual or set of individuals the action is being or was performed on.
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
     * The individual or set of individuals the action is being or was performed on.
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
     * Gets as encounter
     *
     * This ChargeItem has the details of how the associated Encounter should be billed or otherwise be handled by finance systems.
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
     * This ChargeItem has the details of how the associated Encounter should be billed or otherwise be handled by finance systems.
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
     * Adds as performer
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ChargeItemPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\ChargeItemPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * Indicates who or what performed or participated in the charged service.
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
     * Indicates who or what performed or participated in the charged service.
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
     * Indicates who or what performed or participated in the charged service.
     *
     * @return \TKusy\Hl7Fhir\R5\ChargeItemPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @param \TKusy\Hl7Fhir\R5\ChargeItemPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as performingOrganization
     *
     * The organization performing the service.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPerformingOrganization()
    {
        return $this->performingOrganization;
    }

    /**
     * Sets a new performingOrganization
     *
     * The organization performing the service.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $performingOrganization
     * @return self
     */
    public function setPerformingOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $performingOrganization = null)
    {
        $this->performingOrganization = $performingOrganization;
        return $this;
    }

    /**
     * Gets as requestingOrganization
     *
     * The organization requesting the service.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRequestingOrganization()
    {
        return $this->requestingOrganization;
    }

    /**
     * Sets a new requestingOrganization
     *
     * The organization requesting the service.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $requestingOrganization
     * @return self
     */
    public function setRequestingOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $requestingOrganization = null)
    {
        $this->requestingOrganization = $requestingOrganization;
        return $this;
    }

    /**
     * Gets as costCenter
     *
     * The financial cost center permits the tracking of charge attribution.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     * Sets a new costCenter
     *
     * The financial cost center permits the tracking of charge attribution.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $costCenter
     * @return self
     */
    public function setCostCenter(?\TKusy\Hl7Fhir\R5\ReferenceType $costCenter = null)
    {
        $this->costCenter = $costCenter;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Quantity of which the charge item has been serviced.
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
     * Quantity of which the charge item has been serviced.
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
     * Adds as bodysite
     *
     * The anatomical location where the related service has been applied.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $bodysite
     */
    public function addToBodysite(\TKusy\Hl7Fhir\R5\CodeableConceptType $bodysite)
    {
        $this->bodysite[] = $bodysite;
        return $this;
    }

    /**
     * isset bodysite
     *
     * The anatomical location where the related service has been applied.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodysite($index)
    {
        return isset($this->bodysite[$index]);
    }

    /**
     * unset bodysite
     *
     * The anatomical location where the related service has been applied.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodysite($index)
    {
        unset($this->bodysite[$index]);
    }

    /**
     * Gets as bodysite
     *
     * The anatomical location where the related service has been applied.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getBodysite()
    {
        return $this->bodysite;
    }

    /**
     * Sets a new bodysite
     *
     * The anatomical location where the related service has been applied.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $bodysite
     * @return self
     */
    public function setBodysite(array $bodysite = null)
    {
        $this->bodysite = $bodysite;
        return $this;
    }

    /**
     * Gets as unitPriceComponent
     *
     * The unit price of the chargable item.
     *
     * @return \TKusy\Hl7Fhir\R5\MonetaryComponentType
     */
    public function getUnitPriceComponent()
    {
        return $this->unitPriceComponent;
    }

    /**
     * Sets a new unitPriceComponent
     *
     * The unit price of the chargable item.
     *
     * @param \TKusy\Hl7Fhir\R5\MonetaryComponentType $unitPriceComponent
     * @return self
     */
    public function setUnitPriceComponent(?\TKusy\Hl7Fhir\R5\MonetaryComponentType $unitPriceComponent = null)
    {
        $this->unitPriceComponent = $unitPriceComponent;
        return $this;
    }

    /**
     * Gets as totalPriceComponent
     *
     * The total price for the chargable item, accounting for the quantity.
     *
     * @return \TKusy\Hl7Fhir\R5\MonetaryComponentType
     */
    public function getTotalPriceComponent()
    {
        return $this->totalPriceComponent;
    }

    /**
     * Sets a new totalPriceComponent
     *
     * The total price for the chargable item, accounting for the quantity.
     *
     * @param \TKusy\Hl7Fhir\R5\MonetaryComponentType $totalPriceComponent
     * @return self
     */
    public function setTotalPriceComponent(?\TKusy\Hl7Fhir\R5\MonetaryComponentType $totalPriceComponent = null)
    {
        $this->totalPriceComponent = $totalPriceComponent;
        return $this;
    }

    /**
     * Gets as overrideReason
     *
     * If the list price or the rule-based factor associated with the code is overridden, this attribute can capture a text to indicate the reason for this action.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOverrideReason()
    {
        return $this->overrideReason;
    }

    /**
     * Sets a new overrideReason
     *
     * If the list price or the rule-based factor associated with the code is overridden, this attribute can capture a text to indicate the reason for this action.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $overrideReason
     * @return self
     */
    public function setOverrideReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $overrideReason = null)
    {
        $this->overrideReason = $overrideReason;
        return $this;
    }

    /**
     * Gets as enterer
     *
     * The device, practitioner, etc. who entered the charge item.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * Sets a new enterer
     *
     * The device, practitioner, etc. who entered the charge item.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $enterer
     * @return self
     */
    public function setEnterer(?\TKusy\Hl7Fhir\R5\ReferenceType $enterer = null)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Gets as enteredDate
     *
     * Date the charge item was entered.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getEnteredDate()
    {
        return $this->enteredDate;
    }

    /**
     * Sets a new enteredDate
     *
     * Date the charge item was entered.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $enteredDate
     * @return self
     */
    public function setEnteredDate(?\TKusy\Hl7Fhir\R5\DateTimeType $enteredDate = null)
    {
        $this->enteredDate = $enteredDate;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableConceptType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * Describes why the event occurred in coded or textual form.
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
     * Describes why the event occurred in coded or textual form.
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
     * Describes why the event occurred in coded or textual form.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Describes why the event occurred in coded or textual form.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Adds as service
     *
     * Indicated the rendered service that caused this charge.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $service
     */
    public function addToService(\TKusy\Hl7Fhir\R5\CodeableReferenceType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * Indicated the rendered service that caused this charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Indicated the rendered service that caused this charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Indicated the rendered service that caused this charge.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Indicated the rendered service that caused this charge.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $service
     * @return self
     */
    public function setService(array $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Adds as product
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $product
     */
    public function addToProduct(\TKusy\Hl7Fhir\R5\CodeableReferenceType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $product
     * @return self
     */
    public function setProduct(array $product = null)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Adds as account
     *
     * Account into which this ChargeItems belongs.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $account
     */
    public function addToAccount(\TKusy\Hl7Fhir\R5\ReferenceType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * Account into which this ChargeItems belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * Account into which this ChargeItems belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * Account into which this ChargeItems belongs.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Account into which this ChargeItems belongs.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $account
     * @return self
     */
    public function setAccount(array $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the event by the performer, subject or other participants.
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
     * Comments made about the event by the performer, subject or other participants.
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
     * Comments made about the event by the performer, subject or other participants.
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
     * Comments made about the event by the performer, subject or other participants.
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
     * Comments made about the event by the performer, subject or other participants.
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
     * Adds as supportingInformation
     *
     * Further information supporting this charge.
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
     * Further information supporting this charge.
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
     * Further information supporting this charge.
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
     * Further information supporting this charge.
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
     * Further information supporting this charge.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation = null)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }


}

