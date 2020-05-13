<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ChargeItemType
 *
 * The resource ChargeItem describes the provision of healthcare provider products for a certain patient, therefore referring not only to the product, but containing in addition details of the provision, like date, time, amounts and participating organizations and persons. Main Usage of the ChargeItem is to enable the billing process and internal cost allocation.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ChargeItem
 */
class ChargeItemType extends DomainResourceType
{

    /**
     * Identifiers assigned to this event performer or other systems.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * References the (external) source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType[] $definitionUri
     */
    private $definitionUri = null;

    /**
     * References the source of pricing information, rules of application for the code this ChargeItem uses.
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType[] $definitionCanonical
     */
    private $definitionCanonical = null;

    /**
     * The current state of the ChargeItem.
     *
     * @var \TKusy\Hl7Fhir\R4\ChargeItemStatusType $status
     */
    private $status = null;

    /**
     * ChargeItems can be grouped to larger ChargeItems covering the whole set.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code that identifies the charge, like a billing code.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The individual or set of individuals the action is being or was performed on.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter or episode of care that establishes the context for this event.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $context
     */
    private $context = null;

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * Indicates who or what performed or participated in the charged service.
     *
     * @var \TKusy\Hl7Fhir\R4\ChargeItemPerformerType[] $performer
     */
    private $performer = null;

    /**
     * The organization requesting the service.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $performingOrganization
     */
    private $performingOrganization = null;

    /**
     * The organization performing the service.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $requestingOrganization
     */
    private $requestingOrganization = null;

    /**
     * The financial cost center permits the tracking of charge attribution.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $costCenter
     */
    private $costCenter = null;

    /**
     * Quantity of which the charge item has been serviced.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The anatomical location where the related service has been applied.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $bodysite
     */
    private $bodysite = null;

    /**
     * Factor overriding the factor determined by the rules associated with the code.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $factorOverride
     */
    private $factorOverride = null;

    /**
     * Total price of the charge overriding the list price associated with the code.
     *
     * @var \TKusy\Hl7Fhir\R4\MoneyType $priceOverride
     */
    private $priceOverride = null;

    /**
     * If the list price or the rule-based factor associated with the code is overridden, this attribute can capture a text to indicate the reason for this action.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $overrideReason
     */
    private $overrideReason = null;

    /**
     * The device, practitioner, etc. who entered the charge item.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $enterer
     */
    private $enterer = null;

    /**
     * Date the charge item was entered.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $enteredDate
     */
    private $enteredDate = null;

    /**
     * Describes why the event occurred in coded or textual form.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reason
     */
    private $reason = null;

    /**
     * Indicated the rendered service that caused this charge.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $service
     */
    private $service = null;

    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance. (choose any one of product*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $productReference
     */
    private $productReference = null;

    /**
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance. (choose any one of product*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $productCodeableConcept
     */
    private $productCodeableConcept = null;

    /**
     * Account into which this ChargeItems belongs.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $account
     */
    private $account = null;

    /**
     * Comments made about the event by the performer, subject or other participants.
     *
     * @var \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Further information supporting this charge.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this event performer or other systems.
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
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
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
     * @param \TKusy\Hl7Fhir\R4\UriType $definitionUri
     */
    public function addToDefinitionUri(\TKusy\Hl7Fhir\R4\UriType $definitionUri)
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
     * @return \TKusy\Hl7Fhir\R4\UriType[]
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
     * @param \TKusy\Hl7Fhir\R4\UriType[] $definitionUri
     * @return self
     */
    public function setDefinitionUri(array $definitionUri)
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
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $definitionCanonical
     */
    public function addToDefinitionCanonical(\TKusy\Hl7Fhir\R4\CanonicalType $definitionCanonical)
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
     * @return \TKusy\Hl7Fhir\R4\CanonicalType[]
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
     * @param \TKusy\Hl7Fhir\R4\CanonicalType[] $definitionCanonical
     * @return self
     */
    public function setDefinitionCanonical(array $definitionCanonical)
    {
        $this->definitionCanonical = $definitionCanonical;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of the ChargeItem.
     *
     * @return \TKusy\Hl7Fhir\R4\ChargeItemStatusType
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
     * @param \TKusy\Hl7Fhir\R4\ChargeItemStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\ChargeItemStatusType $status)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R4\ReferenceType $partOf)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code that identifies the charge, like a billing code.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The individual or set of individuals the action is being or was performed on.
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
     * The individual or set of individuals the action is being or was performed on.
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
     * Gets as context
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * The encounter or episode of care that establishes the context for this event.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7Fhir\R4\ReferenceType $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
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
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
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
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
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
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
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
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
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
     * Date/time(s) or duration when the charged service was applied. (choose any one of occurrence*, but only one)
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
     * Adds as performer
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ChargeItemPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R4\ChargeItemPerformerType $performer)
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
     * @return \TKusy\Hl7Fhir\R4\ChargeItemPerformerType[]
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
     * @param \TKusy\Hl7Fhir\R4\ChargeItemPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as performingOrganization
     *
     * The organization requesting the service.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getPerformingOrganization()
    {
        return $this->performingOrganization;
    }

    /**
     * Sets a new performingOrganization
     *
     * The organization requesting the service.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $performingOrganization
     * @return self
     */
    public function setPerformingOrganization(\TKusy\Hl7Fhir\R4\ReferenceType $performingOrganization)
    {
        $this->performingOrganization = $performingOrganization;
        return $this;
    }

    /**
     * Gets as requestingOrganization
     *
     * The organization performing the service.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getRequestingOrganization()
    {
        return $this->requestingOrganization;
    }

    /**
     * Sets a new requestingOrganization
     *
     * The organization performing the service.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $requestingOrganization
     * @return self
     */
    public function setRequestingOrganization(\TKusy\Hl7Fhir\R4\ReferenceType $requestingOrganization)
    {
        $this->requestingOrganization = $requestingOrganization;
        return $this;
    }

    /**
     * Gets as costCenter
     *
     * The financial cost center permits the tracking of charge attribution.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $costCenter
     * @return self
     */
    public function setCostCenter(\TKusy\Hl7Fhir\R4\ReferenceType $costCenter)
    {
        $this->costCenter = $costCenter;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Quantity of which the charge item has been serviced.
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
     * Quantity of which the charge item has been serviced.
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
     * Adds as bodysite
     *
     * The anatomical location where the related service has been applied.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $bodysite
     */
    public function addToBodysite(\TKusy\Hl7Fhir\R4\CodeableConceptType $bodysite)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $bodysite
     * @return self
     */
    public function setBodysite(array $bodysite)
    {
        $this->bodysite = $bodysite;
        return $this;
    }

    /**
     * Gets as factorOverride
     *
     * Factor overriding the factor determined by the rules associated with the code.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getFactorOverride()
    {
        return $this->factorOverride;
    }

    /**
     * Sets a new factorOverride
     *
     * Factor overriding the factor determined by the rules associated with the code.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $factorOverride
     * @return self
     */
    public function setFactorOverride(\TKusy\Hl7Fhir\R4\DecimalType $factorOverride)
    {
        $this->factorOverride = $factorOverride;
        return $this;
    }

    /**
     * Gets as priceOverride
     *
     * Total price of the charge overriding the list price associated with the code.
     *
     * @return \TKusy\Hl7Fhir\R4\MoneyType
     */
    public function getPriceOverride()
    {
        return $this->priceOverride;
    }

    /**
     * Sets a new priceOverride
     *
     * Total price of the charge overriding the list price associated with the code.
     *
     * @param \TKusy\Hl7Fhir\R4\MoneyType $priceOverride
     * @return self
     */
    public function setPriceOverride(\TKusy\Hl7Fhir\R4\MoneyType $priceOverride)
    {
        $this->priceOverride = $priceOverride;
        return $this;
    }

    /**
     * Gets as overrideReason
     *
     * If the list price or the rule-based factor associated with the code is overridden, this attribute can capture a text to indicate the reason for this action.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $overrideReason
     * @return self
     */
    public function setOverrideReason(\TKusy\Hl7Fhir\R4\StringType $overrideReason)
    {
        $this->overrideReason = $overrideReason;
        return $this;
    }

    /**
     * Gets as enterer
     *
     * The device, practitioner, etc. who entered the charge item.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $enterer
     * @return self
     */
    public function setEnterer(\TKusy\Hl7Fhir\R4\ReferenceType $enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Gets as enteredDate
     *
     * Date the charge item was entered.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $enteredDate
     * @return self
     */
    public function setEnteredDate(\TKusy\Hl7Fhir\R4\DateTimeType $enteredDate)
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R4\CodeableConceptType $reason)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $reason
     * @return self
     */
    public function setReason(array $reason)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $service
     */
    public function addToService(\TKusy\Hl7Fhir\R4\ReferenceType $service)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Gets as productReference
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance. (choose any one of product*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Sets a new productReference
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance. (choose any one of product*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $productReference
     * @return self
     */
    public function setProductReference(\TKusy\Hl7Fhir\R4\ReferenceType $productReference)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Gets as productCodeableConcept
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance. (choose any one of product*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * Sets a new productCodeableConcept
     *
     * Identifies the device, food, drug or other product being charged either by type code or reference to an instance. (choose any one of product*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $productCodeableConcept
     * @return self
     */
    public function setProductCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $productCodeableConcept)
    {
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * Adds as account
     *
     * Account into which this ChargeItems belongs.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $account
     */
    public function addToAccount(\TKusy\Hl7Fhir\R4\ReferenceType $account)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $account
     * @return self
     */
    public function setAccount(array $account)
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
     * @return \TKusy\Hl7Fhir\R4\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7Fhir\R4\ReferenceType $supportingInformation)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }


}

