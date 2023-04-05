<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceRequestType
 *
 * Represents a request for a patient to employ a medical device. The device may be an implantable device, or an external assistive device, such as a walker.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DeviceRequest
 */
class DeviceRequestType extends DomainResourceType
{

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * Plan/proposal/order fulfilled by this request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $replaces
     */
    private $replaces = null;

    /**
     * A shared identifier common to multiple independent Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * The status of the request.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestStatusType $status
     */
    private $status = null;

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestIntentType $intent
     */
    private $intent = null;

    /**
     * Indicates how quickly the request should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * If true, indicates that the provider is asking for the patient to either stop using or to not start using the specified device or category of devices. For example, the patient has undergone surgery and the provider is indicating that the patient should not wear contact lenses.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * The details of the device to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     */
    private $code = null;

    /**
     * The number of devices to be provided.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $quantity
     */
    private $quantity = null;

    /**
     * Specific parameters for the ordered item. For example, the prism value for lenses.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceRequestParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * The patient who will use the device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * An encounter that provides additional context in which this request is made.
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
     * When the request transitioned to being actionable.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The individual or entity who initiated the request and has responsibility for its activation.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requester
     */
    private $requester = null;

    /**
     * The desired individual or entity to provide the device to the subject of the request (e.g., patient, location).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $performer
     */
    private $performer = null;

    /**
     * Reason or justification for the use of this device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * This status is to indicate whether the request is a PRN or may be given as needed.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $asNeeded
     */
    private $asNeeded = null;

    /**
     * The reason for using the device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededFor
     */
    private $asNeededFor = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $insurance
     */
    private $insurance = null;

    /**
     * Additional clinical information about the patient that may influence the request fulfilment. For example, this may include where on the subject's body the device will be used (i.e. the target site).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Key events in the history of the request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $relevantHistory
     */
    private $relevantHistory = null;

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * Adds as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * isset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesCanonical($index)
    {
        return isset($this->instantiatesCanonical[$index]);
    }

    /**
     * unset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesCanonical($index)
    {
        unset($this->instantiatesCanonical[$index]);
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Adds as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7Fhir\R5\UriType $instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * isset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesUri($index)
    {
        return isset($this->instantiatesUri[$index]);
    }

    /**
     * unset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesUri($index)
    {
        unset($this->instantiatesUri[$index]);
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri = null)
    {
        $this->instantiatesUri = $instantiatesUri;
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
     * Adds as replaces
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $replaces
     */
    public function addToReplaces(\TKusy\Hl7Fhir\R5\ReferenceType $replaces)
    {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * isset replaces
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplaces($index)
    {
        return isset($this->replaces[$index]);
    }

    /**
     * unset replaces
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplaces($index)
    {
        unset($this->replaces[$index]);
    }

    /**
     * Gets as replaces
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getReplaces()
    {
        return $this->replaces;
    }

    /**
     * Sets a new replaces
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $replaces
     * @return self
     */
    public function setReplaces(array $replaces = null)
    {
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * Gets as groupIdentifier
     *
     * A shared identifier common to multiple independent Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

    /**
     * Sets a new groupIdentifier
     *
     * A shared identifier common to multiple independent Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier
     * @return self
     */
    public function setGroupIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier = null)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the request.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the request.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\RequestStatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestIntentType
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Sets a new intent
     *
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7Fhir\R5\RequestIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the request should be addressed with respect to other requests.
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
     * Indicates how quickly the request should be addressed with respect to other requests.
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
     * Gets as doNotPerform
     *
     * If true, indicates that the provider is asking for the patient to either stop using or to not start using the specified device or category of devices. For example, the patient has undergone surgery and the provider is indicating that the patient should not wear contact lenses.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Sets a new doNotPerform
     *
     * If true, indicates that the provider is asking for the patient to either stop using or to not start using the specified device or category of devices. For example, the patient has undergone surgery and the provider is indicating that the patient should not wear contact lenses.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     * @return self
     */
    public function setDoNotPerform(?\TKusy\Hl7Fhir\R5\BooleanType $doNotPerform = null)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Gets as code
     *
     * The details of the device to be used.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The details of the device to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableReferenceType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of devices to be provided.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of devices to be provided.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\IntegerType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Specific parameters for the ordered item. For example, the prism value for lenses.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceRequestParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\DeviceRequestParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * Specific parameters for the ordered item. For example, the prism value for lenses.
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
     * Specific parameters for the ordered item. For example, the prism value for lenses.
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
     * Specific parameters for the ordered item. For example, the prism value for lenses.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceRequestParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * Specific parameters for the ordered item. For example, the prism value for lenses.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceRequestParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient who will use the device.
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
     * The patient who will use the device.
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
     * An encounter that provides additional context in which this request is made.
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
     * An encounter that provides additional context in which this request is made.
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
     * Gets as authoredOn
     *
     * When the request transitioned to being actionable.
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
     * When the request transitioned to being actionable.
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
     * The individual or entity who initiated the request and has responsibility for its activation.
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
     * The individual or entity who initiated the request and has responsibility for its activation.
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
     * Gets as performer
     *
     * The desired individual or entity to provide the device to the subject of the request (e.g., patient, location).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The desired individual or entity to provide the device to the subject of the request (e.g., patient, location).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $performer
     * @return self
     */
    public function setPerformer(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Gets as asNeeded
     *
     * This status is to indicate whether the request is a PRN or may be given as needed.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAsNeeded()
    {
        return $this->asNeeded;
    }

    /**
     * Sets a new asNeeded
     *
     * This status is to indicate whether the request is a PRN or may be given as needed.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $asNeeded
     * @return self
     */
    public function setAsNeeded(?\TKusy\Hl7Fhir\R5\BooleanType $asNeeded = null)
    {
        $this->asNeeded = $asNeeded;
        return $this;
    }

    /**
     * Gets as asNeededFor
     *
     * The reason for using the device.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAsNeededFor()
    {
        return $this->asNeededFor;
    }

    /**
     * Sets a new asNeededFor
     *
     * The reason for using the device.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededFor
     * @return self
     */
    public function setAsNeededFor(?\TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededFor = null)
    {
        $this->asNeededFor = $asNeededFor;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7Fhir\R5\ReferenceType $insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * isset insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsurance($index)
    {
        return isset($this->insurance[$index]);
    }

    /**
     * unset insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsurance($index)
    {
        unset($this->insurance[$index]);
    }

    /**
     * Gets as insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance = null)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Additional clinical information about the patient that may influence the request fulfilment. For example, this may include where on the subject's body the device will be used (i.e. the target site).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Additional clinical information about the patient that may influence the request fulfilment. For example, this may include where on the subject's body the device will be used (i.e. the target site).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInfo($index)
    {
        return isset($this->supportingInfo[$index]);
    }

    /**
     * unset supportingInfo
     *
     * Additional clinical information about the patient that may influence the request fulfilment. For example, this may include where on the subject's body the device will be used (i.e. the target site).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInfo($index)
    {
        unset($this->supportingInfo[$index]);
    }

    /**
     * Gets as supportingInfo
     *
     * Additional clinical information about the patient that may influence the request fulfilment. For example, this may include where on the subject's body the device will be used (i.e. the target site).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Additional clinical information about the patient that may influence the request fulfilment. For example, this may include where on the subject's body the device will be used (i.e. the target site).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo = null)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Adds as note
     *
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
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
     * Adds as relevantHistory
     *
     * Key events in the history of the request.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $relevantHistory
     */
    public function addToRelevantHistory(\TKusy\Hl7Fhir\R5\ReferenceType $relevantHistory)
    {
        $this->relevantHistory[] = $relevantHistory;
        return $this;
    }

    /**
     * isset relevantHistory
     *
     * Key events in the history of the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelevantHistory($index)
    {
        return isset($this->relevantHistory[$index]);
    }

    /**
     * unset relevantHistory
     *
     * Key events in the history of the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelevantHistory($index)
    {
        unset($this->relevantHistory[$index]);
    }

    /**
     * Gets as relevantHistory
     *
     * Key events in the history of the request.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRelevantHistory()
    {
        return $this->relevantHistory;
    }

    /**
     * Sets a new relevantHistory
     *
     * Key events in the history of the request.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $relevantHistory
     * @return self
     */
    public function setRelevantHistory(array $relevantHistory = null)
    {
        $this->relevantHistory = $relevantHistory;
        return $this;
    }


}

