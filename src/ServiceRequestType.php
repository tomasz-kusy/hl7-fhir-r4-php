<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ServiceRequestType
 *
 * A record of a request for service such as diagnostic investigations, treatments, or operations to be performed.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: ServiceRequest
 */
class ServiceRequestType extends DomainResourceType
{

    /**
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = [
        
    ];

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     */
    private $instantiatesUri = [
        
    ];

    /**
     * Plan/proposal/order fulfilled by this request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = [
        
    ];

    /**
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $replaces
     */
    private $replaces = [
        
    ];

    /**
     * A shared identifier common to all service requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $requisition
     */
    private $requisition = null;

    /**
     * The status of the order.
     *
     * @var \TKusy\Hl7FhirR4\RequestStatusType $status
     */
    private $status = null;

    /**
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @var \TKusy\Hl7FhirR4\RequestIntentType $intent
     */
    private $intent = null;

    /**
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7FhirR4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * A code that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Additional details and instructions about the how the services are to be delivered. For example, and order for a urinary catheter may have an order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $orderDetail
     */
    private $orderDetail = [
        
    ];

    /**
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantityQuantity
     */
    private $quantityQuantity = null;

    /**
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $quantityRatio
     */
    private $quantityRatio = null;

    /**
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $quantityRange
     */
    private $quantityRange = null;

    /**
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the service. For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $asNeededBoolean
     */
    private $asNeededBoolean = null;

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the service. For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $asNeededCodeableConcept
     */
    private $asNeededCodeableConcept = null;

    /**
     * When the request transitioned to being actionable.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The individual who initiated the request and has responsibility for its activation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $requester
     */
    private $requester = null;

    /**
     * Desired type of performer for doing the requested service.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $performerType
     */
    private $performerType = null;

    /**
     * The desired performer for doing the requested service. For example, the surgeon, dermatopathologist, endoscopist, etc.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $performer
     */
    private $performer = [
        
    ];

    /**
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $locationCode
     */
    private $locationCode = [
        
    ];

    /**
     * A reference to the the preferred location(s) where the procedure should actually happen. E.g. at home or nursing day care center.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $locationReference
     */
    private $locationReference = [
        
    ];

    /**
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = [
        
    ];

    /**
     * Indicates another resource that provides a justification for why this service is being requested. May relate to the resources referred to in `supportingInfo`.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = [
        
    ];

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $insurance
     */
    private $insurance = [
        
    ];

    /**
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations. This information includes diagnosis, clinical findings and other observations. In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)". This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example, reporting the amount of inspired oxygen for blood gas measurements.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $supportingInfo
     */
    private $supportingInfo = [
        
    ];

    /**
     * One or more specimens that the laboratory procedure will use.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $specimen
     */
    private $specimen = [
        
    ];

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $bodySite
     */
    private $bodySite = [
        
    ];

    /**
     * Any other notes and comments made about the service request. For example, internal billing notes.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @var \TKusy\Hl7FhirR4\StringType $patientInstruction
     */
    private $patientInstruction = null;

    /**
     * Key events in the history of the request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $relevantHistory
     */
    private $relevantHistory = [
        
    ];

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
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
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
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
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
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
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
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
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
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
     * Adds as instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * isset instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Adds as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7FhirR4\UriType $instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * isset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @return \TKusy\Hl7FhirR4\UriType[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @param \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $replaces
     */
    public function addToReplaces(\TKusy\Hl7FhirR4\ReferenceType $replaces)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $replaces
     * @return self
     */
    public function setReplaces(array $replaces)
    {
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * Gets as requisition
     *
     * A shared identifier common to all service requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getRequisition()
    {
        return $this->requisition;
    }

    /**
     * Sets a new requisition
     *
     * A shared identifier common to all service requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $requisition
     * @return self
     */
    public function setRequisition(\TKusy\Hl7FhirR4\IdentifierType $requisition)
    {
        $this->requisition = $requisition;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the order.
     *
     * @return \TKusy\Hl7FhirR4\RequestStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the order.
     *
     * @param \TKusy\Hl7FhirR4\RequestStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\RequestStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Whether the request is a proposal, plan, an original order or a reflex order.
     *
     * @return \TKusy\Hl7FhirR4\RequestIntentType
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
     * @param \TKusy\Hl7FhirR4\RequestIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7FhirR4\RequestIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Adds as category
     *
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
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
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
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
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
     *
     * @return \TKusy\Hl7FhirR4\RequestPriorityType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
     *
     * @param \TKusy\Hl7FhirR4\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\RequestPriorityType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as doNotPerform
     *
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Sets a new doNotPerform
     *
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     * @return self
     */
    public function setDoNotPerform(\TKusy\Hl7FhirR4\BooleanType $doNotPerform)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as orderDetail
     *
     * Additional details and instructions about the how the services are to be delivered. For example, and order for a urinary catheter may have an order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $orderDetail
     */
    public function addToOrderDetail(\TKusy\Hl7FhirR4\CodeableConceptType $orderDetail)
    {
        $this->orderDetail[] = $orderDetail;
        return $this;
    }

    /**
     * isset orderDetail
     *
     * Additional details and instructions about the how the services are to be delivered. For example, and order for a urinary catheter may have an order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderDetail($index)
    {
        return isset($this->orderDetail[$index]);
    }

    /**
     * unset orderDetail
     *
     * Additional details and instructions about the how the services are to be delivered. For example, and order for a urinary catheter may have an order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderDetail($index)
    {
        unset($this->orderDetail[$index]);
    }

    /**
     * Gets as orderDetail
     *
     * Additional details and instructions about the how the services are to be delivered. For example, and order for a urinary catheter may have an order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getOrderDetail()
    {
        return $this->orderDetail;
    }

    /**
     * Sets a new orderDetail
     *
     * Additional details and instructions about the how the services are to be delivered. For example, and order for a urinary catheter may have an order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $orderDetail
     * @return self
     */
    public function setOrderDetail(array $orderDetail)
    {
        $this->orderDetail = $orderDetail;
        return $this;
    }

    /**
     * Gets as quantityQuantity
     *
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getQuantityQuantity()
    {
        return $this->quantityQuantity;
    }

    /**
     * Sets a new quantityQuantity
     *
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $quantityQuantity
     * @return self
     */
    public function setQuantityQuantity(\TKusy\Hl7FhirR4\QuantityType $quantityQuantity)
    {
        $this->quantityQuantity = $quantityQuantity;
        return $this;
    }

    /**
     * Gets as quantityRatio
     *
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getQuantityRatio()
    {
        return $this->quantityRatio;
    }

    /**
     * Sets a new quantityRatio
     *
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $quantityRatio
     * @return self
     */
    public function setQuantityRatio(\TKusy\Hl7FhirR4\RatioType $quantityRatio)
    {
        $this->quantityRatio = $quantityRatio;
        return $this;
    }

    /**
     * Gets as quantityRange
     *
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getQuantityRange()
    {
        return $this->quantityRange;
    }

    /**
     * Sets a new quantityRange
     *
     * An amount of service being requested which can be a quantity ( for example $1,500 home modification), a ratio ( for example, 20 half day visits per month), or a range (2.0 to 1.8 Gy per fraction). (choose any one of quantity*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $quantityRange
     * @return self
     */
    public function setQuantityRange(\TKusy\Hl7FhirR4\RangeType $quantityRange)
    {
        $this->quantityRange = $quantityRange;
        return $this;
    }

    /**
     * Gets as subject
     *
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * An encounter that provides additional information about the healthcare context in which this request is made.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * An encounter that provides additional information about the healthcare context in which this request is made.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7FhirR4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
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
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
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
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
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
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
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
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
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
     * The date/time at which the requested service should occur. (choose any one of occurrence*, but only one)
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
     * Gets as asNeededBoolean
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing the service. For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * Sets a new asNeededBoolean
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing the service. For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $asNeededBoolean
     * @return self
     */
    public function setAsNeededBoolean(\TKusy\Hl7FhirR4\BooleanType $asNeededBoolean)
    {
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * Gets as asNeededCodeableConcept
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing the service. For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * Sets a new asNeededCodeableConcept
     *
     * If a CodeableConcept is present, it indicates the pre-condition for performing the service. For example "pain", "on flare-up", etc. (choose any one of asNeeded*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $asNeededCodeableConcept
     * @return self
     */
    public function setAsNeededCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $asNeededCodeableConcept)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
        return $this;
    }

    /**
     * Gets as authoredOn
     *
     * When the request transitioned to being actionable.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $authoredOn
     * @return self
     */
    public function setAuthoredOn(\TKusy\Hl7FhirR4\DateTimeType $authoredOn)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * Gets as requester
     *
     * The individual who initiated the request and has responsibility for its activation.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Sets a new requester
     *
     * The individual who initiated the request and has responsibility for its activation.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $requester
     * @return self
     */
    public function setRequester(\TKusy\Hl7FhirR4\ReferenceType $requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Gets as performerType
     *
     * Desired type of performer for doing the requested service.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * Sets a new performerType
     *
     * Desired type of performer for doing the requested service.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $performerType
     * @return self
     */
    public function setPerformerType(\TKusy\Hl7FhirR4\CodeableConceptType $performerType)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Adds as performer
     *
     * The desired performer for doing the requested service. For example, the surgeon, dermatopathologist, endoscopist, etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    public function addToPerformer(\TKusy\Hl7FhirR4\ReferenceType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * The desired performer for doing the requested service. For example, the surgeon, dermatopathologist, endoscopist, etc.
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
     * The desired performer for doing the requested service. For example, the surgeon, dermatopathologist, endoscopist, etc.
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
     * The desired performer for doing the requested service. For example, the surgeon, dermatopathologist, endoscopist, etc.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The desired performer for doing the requested service. For example, the surgeon, dermatopathologist, endoscopist, etc.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $performer
     * @return self
     */
    public function setPerformer(array $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as locationCode
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $locationCode
     */
    public function addToLocationCode(\TKusy\Hl7FhirR4\CodeableConceptType $locationCode)
    {
        $this->locationCode[] = $locationCode;
        return $this;
    }

    /**
     * isset locationCode
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationCode($index)
    {
        return isset($this->locationCode[$index]);
    }

    /**
     * unset locationCode
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationCode($index)
    {
        unset($this->locationCode[$index]);
    }

    /**
     * Gets as locationCode
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $locationCode
     * @return self
     */
    public function setLocationCode(array $locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }

    /**
     * Adds as locationReference
     *
     * A reference to the the preferred location(s) where the procedure should actually happen. E.g. at home or nursing day care center.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $locationReference
     */
    public function addToLocationReference(\TKusy\Hl7FhirR4\ReferenceType $locationReference)
    {
        $this->locationReference[] = $locationReference;
        return $this;
    }

    /**
     * isset locationReference
     *
     * A reference to the the preferred location(s) where the procedure should actually happen. E.g. at home or nursing day care center.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationReference($index)
    {
        return isset($this->locationReference[$index]);
    }

    /**
     * unset locationReference
     *
     * A reference to the the preferred location(s) where the procedure should actually happen. E.g. at home or nursing day care center.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationReference($index)
    {
        unset($this->locationReference[$index]);
    }

    /**
     * Gets as locationReference
     *
     * A reference to the the preferred location(s) where the procedure should actually happen. E.g. at home or nursing day care center.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getLocationReference()
    {
        return $this->locationReference;
    }

    /**
     * Sets a new locationReference
     *
     * A reference to the the preferred location(s) where the procedure should actually happen. E.g. at home or nursing day care center.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $locationReference
     * @return self
     */
    public function setLocationReference(array $locationReference)
    {
        $this->locationReference = $locationReference;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reasonCode
     */
    public function addToReasonCode(\TKusy\Hl7FhirR4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * isset reasonCode
     *
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
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
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
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
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
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
     * Indicates another resource that provides a justification for why this service is being requested. May relate to the resources referred to in `supportingInfo`.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $reasonReference
     */
    public function addToReasonReference(\TKusy\Hl7FhirR4\ReferenceType $reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * isset reasonReference
     *
     * Indicates another resource that provides a justification for why this service is being requested. May relate to the resources referred to in `supportingInfo`.
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
     * Indicates another resource that provides a justification for why this service is being requested. May relate to the resources referred to in `supportingInfo`.
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
     * Indicates another resource that provides a justification for why this service is being requested. May relate to the resources referred to in `supportingInfo`.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * Indicates another resource that provides a justification for why this service is being requested. May relate to the resources referred to in `supportingInfo`.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     * @return self
     */
    public function setReasonReference(array $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7FhirR4\ReferenceType $insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * isset insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations. This information includes diagnosis, clinical findings and other observations. In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)". This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example, reporting the amount of inspired oxygen for blood gas measurements.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7FhirR4\ReferenceType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations. This information includes diagnosis, clinical findings and other observations. In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)". This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example, reporting the amount of inspired oxygen for blood gas measurements.
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
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations. This information includes diagnosis, clinical findings and other observations. In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)". This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example, reporting the amount of inspired oxygen for blood gas measurements.
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
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations. This information includes diagnosis, clinical findings and other observations. In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)". This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example, reporting the amount of inspired oxygen for blood gas measurements.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations. This information includes diagnosis, clinical findings and other observations. In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)". This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example, reporting the amount of inspired oxygen for blood gas measurements.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Adds as specimen
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $specimen
     */
    public function addToSpecimen(\TKusy\Hl7FhirR4\ReferenceType $specimen)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * isset specimen
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecimen($index)
    {
        return isset($this->specimen[$index]);
    }

    /**
     * unset specimen
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecimen($index)
    {
        unset($this->specimen[$index]);
    }

    /**
     * Gets as specimen
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * One or more specimens that the laboratory procedure will use.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $specimen
     * @return self
     */
    public function setSpecimen(array $specimen)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Adds as bodySite
     *
     * Anatomic location where the procedure should be performed. This is the target site.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7FhirR4\CodeableConceptType $bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * isset bodySite
     *
     * Anatomic location where the procedure should be performed. This is the target site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodySite($index)
    {
        return isset($this->bodySite[$index]);
    }

    /**
     * unset bodySite
     *
     * Anatomic location where the procedure should be performed. This is the target site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodySite($index)
    {
        unset($this->bodySite[$index]);
    }

    /**
     * Gets as bodySite
     *
     * Anatomic location where the procedure should be performed. This is the target site.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * Anatomic location where the procedure should be performed. This is the target site.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Adds as note
     *
     * Any other notes and comments made about the service request. For example, internal billing notes.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Any other notes and comments made about the service request. For example, internal billing notes.
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
     * Any other notes and comments made about the service request. For example, internal billing notes.
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
     * Any other notes and comments made about the service request. For example, internal billing notes.
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Any other notes and comments made about the service request. For example, internal billing notes.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPatientInstruction()
    {
        return $this->patientInstruction;
    }

    /**
     * Sets a new patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @param \TKusy\Hl7FhirR4\StringType $patientInstruction
     * @return self
     */
    public function setPatientInstruction(\TKusy\Hl7FhirR4\StringType $patientInstruction)
    {
        $this->patientInstruction = $patientInstruction;
        return $this;
    }

    /**
     * Adds as relevantHistory
     *
     * Key events in the history of the request.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $relevantHistory
     */
    public function addToRelevantHistory(\TKusy\Hl7FhirR4\ReferenceType $relevantHistory)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $relevantHistory
     * @return self
     */
    public function setRelevantHistory(array $relevantHistory)
    {
        $this->relevantHistory = $relevantHistory;
        return $this;
    }


}

