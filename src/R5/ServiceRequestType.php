<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ServiceRequestType
 *
 * A record of a request for service such as diagnostic investigations, treatments, or operations to be performed.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ServiceRequest
 */
class ServiceRequestType extends DomainResourceType
{

    /**
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
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
     * A shared identifier common to all service requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $requisition
     */
    private $requisition = null;

    /**
     * The status of the order.
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
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * A code or reference that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     */
    private $code = null;

    /**
     * Additional details and instructions about the how the services are to be delivered. For example, and order for a urinary catheter may have an order detail for an external or indwelling catheter, or an order for a bandage may require additional instructions specifying how the bandage should be applied.
     *
     * @var \TKusy\Hl7Fhir\R5\ServiceRequestOrderDetailType[] $orderDetail
     */
    private $orderDetail = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantityQuantity
     */
    private $quantityQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $quantityRatio
     */
    private $quantityRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $quantityRange
     */
    private $quantityRange = null;

    /**
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The actual focus of a service request when it is not the subject of record representing something or someone associated with the subject such as a spouse, parent, fetus, or donor. The focus of a service request could also be an existing condition, an intervention, the subject's diet, another service request on the subject, or a body structure such as tumor or implanted device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     */
    private $focus = null;

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
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
     * @var \TKusy\Hl7Fhir\R5\BooleanType $asNeededBoolean
     */
    private $asNeededBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededCodeableConcept
     */
    private $asNeededCodeableConcept = null;

    /**
     * When the request transitioned to being actionable.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The individual who initiated the request and has responsibility for its activation.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requester
     */
    private $requester = null;

    /**
     * Desired type of performer for doing the requested service.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $performerType
     */
    private $performerType = null;

    /**
     * The desired performer for doing the requested service. For example, the surgeon, dermatopathologist, endoscopist, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $performer
     */
    private $performer = null;

    /**
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $location
     */
    private $location = null;

    /**
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $insurance
     */
    private $insurance = null;

    /**
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations. This information includes diagnosis, clinical findings and other observations. In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)". This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example, reporting the amount of inspired oxygen for blood gas measurements.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * One or more specimens that the laboratory procedure will use.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $specimen
     */
    private $specimen = null;

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $bodySite
     */
    private $bodySite = null;

    /**
     * Anatomic location where the procedure should be performed. This is the target site.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $bodyStructure
     */
    private $bodyStructure = null;

    /**
     * Any other notes and comments made about the service request. For example, internal billing notes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @var \TKusy\Hl7Fhir\R5\ServiceRequestPatientInstructionType[] $patientInstruction
     */
    private $patientInstruction = null;

    /**
     * Key events in the history of the request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $relevantHistory
     */
    private $relevantHistory = null;

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this order instance by the orderer and/or the receiver and/or order fulfiller.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
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
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this ServiceRequest.
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
     * @return \TKusy\Hl7Fhir\R5\UriType[]
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
     * Gets as requisition
     *
     * A shared identifier common to all service requests that were authorized more or less simultaneously by a single author, representing the composite or group identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $requisition
     * @return self
     */
    public function setRequisition(?\TKusy\Hl7Fhir\R5\IdentifierType $requisition = null)
    {
        $this->requisition = $requisition;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the order.
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
     * The status of the order.
     *
     * @param \TKusy\Hl7Fhir\R5\RequestStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\RequestStatusType $status)
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
     * Adds as category
     *
     * A code that classifies the service for searching, sorting and display purposes (e.g. "Surgical Procedure").
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
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
     * Indicates how quickly the ServiceRequest should be addressed with respect to other requests.
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
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
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
     * Set this to true if the record is saying that the service/procedure should NOT be performed.
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
     * A code or reference that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
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
     * A code or reference that identifies a particular service (i.e., procedure, diagnostic investigation, or panel of investigations) that have been requested.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $code = null)
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
     * @param \TKusy\Hl7Fhir\R5\ServiceRequestOrderDetailType $orderDetail
     */
    public function addToOrderDetail(\TKusy\Hl7Fhir\R5\ServiceRequestOrderDetailType $orderDetail)
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
     * @return \TKusy\Hl7Fhir\R5\ServiceRequestOrderDetailType[]
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
     * @param \TKusy\Hl7Fhir\R5\ServiceRequestOrderDetailType[] $orderDetail
     * @return self
     */
    public function setOrderDetail(array $orderDetail = null)
    {
        $this->orderDetail = $orderDetail;
        return $this;
    }

    /**
     * Gets as quantityQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantityQuantity()
    {
        return $this->quantityQuantity;
    }

    /**
     * Sets a new quantityQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantityQuantity
     * @return self
     */
    public function setQuantityQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantityQuantity = null)
    {
        $this->quantityQuantity = $quantityQuantity;
        return $this;
    }

    /**
     * Gets as quantityRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getQuantityRatio()
    {
        return $this->quantityRatio;
    }

    /**
     * Sets a new quantityRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $quantityRatio
     * @return self
     */
    public function setQuantityRatio(?\TKusy\Hl7Fhir\R5\RatioType $quantityRatio = null)
    {
        $this->quantityRatio = $quantityRatio;
        return $this;
    }

    /**
     * Gets as quantityRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getQuantityRange()
    {
        return $this->quantityRange;
    }

    /**
     * Sets a new quantityRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $quantityRange
     * @return self
     */
    public function setQuantityRange(?\TKusy\Hl7Fhir\R5\RangeType $quantityRange = null)
    {
        $this->quantityRange = $quantityRange;
        return $this;
    }

    /**
     * Gets as subject
     *
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
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
     * On whom or what the service is to be performed. This is usually a human patient, but can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
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
     * Adds as focus
     *
     * The actual focus of a service request when it is not the subject of record representing something or someone associated with the subject such as a spouse, parent, fetus, or donor. The focus of a service request could also be an existing condition, an intervention, the subject's diet, another service request on the subject, or a body structure such as tumor or implanted device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $focus
     */
    public function addToFocus(\TKusy\Hl7Fhir\R5\ReferenceType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * The actual focus of a service request when it is not the subject of record representing something or someone associated with the subject such as a spouse, parent, fetus, or donor. The focus of a service request could also be an existing condition, an intervention, the subject's diet, another service request on the subject, or a body structure such as tumor or implanted device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFocus($index)
    {
        return isset($this->focus[$index]);
    }

    /**
     * unset focus
     *
     * The actual focus of a service request when it is not the subject of record representing something or someone associated with the subject such as a spouse, parent, fetus, or donor. The focus of a service request could also be an existing condition, an intervention, the subject's diet, another service request on the subject, or a body structure such as tumor or implanted device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFocus($index)
    {
        unset($this->focus[$index]);
    }

    /**
     * Gets as focus
     *
     * The actual focus of a service request when it is not the subject of record representing something or someone associated with the subject such as a spouse, parent, fetus, or donor. The focus of a service request could also be an existing condition, an intervention, the subject's diet, another service request on the subject, or a body structure such as tumor or implanted device.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The actual focus of a service request when it is not the subject of record representing something or someone associated with the subject such as a spouse, parent, fetus, or donor. The focus of a service request could also be an existing condition, an intervention, the subject's diet, another service request on the subject, or a body structure such as tumor or implanted device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     * @return self
     */
    public function setFocus(array $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * An encounter that provides additional information about the healthcare context in which this request is made.
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
     * An encounter that provides additional information about the healthcare context in which this request is made.
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
     * Gets as asNeededBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * Sets a new asNeededBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $asNeededBoolean
     * @return self
     */
    public function setAsNeededBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $asNeededBoolean = null)
    {
        $this->asNeededBoolean = $asNeededBoolean;
        return $this;
    }

    /**
     * Gets as asNeededCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * Sets a new asNeededCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededCodeableConcept
     * @return self
     */
    public function setAsNeededCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededCodeableConcept = null)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
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
     * The individual who initiated the request and has responsibility for its activation.
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
     * The individual who initiated the request and has responsibility for its activation.
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
     * Gets as performerType
     *
     * Desired type of performer for doing the requested service.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $performerType
     * @return self
     */
    public function setPerformerType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $performerType = null)
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\ReferenceType $performer)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as location
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $location
     */
    public function addToLocation(\TKusy\Hl7Fhir\R5\CodeableReferenceType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The preferred location(s) where the procedure should actually happen in coded or free text form. E.g. at home or nursing day care center.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as reason
     *
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
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
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
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
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
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
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
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
     * An explanation or justification for why this service is being requested in coded or textual form. This is often for billing purposes. May relate to the resources referred to in `supportingInfo`.
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
     * Adds as insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be needed for delivering the requested service.
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * Additional clinical information about the patient or specimen that may influence the services or their interpretations. This information includes diagnosis, clinical findings and other observations. In laboratory ordering these are typically referred to as "ask at order entry questions (AOEs)". This includes observations explicitly requested by the producer (filler) to provide context or supporting information needed to complete the order. For example, reporting the amount of inspired oxygen for blood gas measurements.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R5\CodeableReferenceType $supportingInfo)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo = null)
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $specimen
     */
    public function addToSpecimen(\TKusy\Hl7Fhir\R5\ReferenceType $specimen)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $specimen
     * @return self
     */
    public function setSpecimen(array $specimen = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as bodyStructure
     *
     * Anatomic location where the procedure should be performed. This is the target site.
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
     * Anatomic location where the procedure should be performed. This is the target site.
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
     * Adds as note
     *
     * Any other notes and comments made about the service request. For example, internal billing notes.
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ServiceRequestPatientInstructionType $patientInstruction
     */
    public function addToPatientInstruction(\TKusy\Hl7Fhir\R5\ServiceRequestPatientInstructionType $patientInstruction)
    {
        $this->patientInstruction[] = $patientInstruction;
        return $this;
    }

    /**
     * isset patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPatientInstruction($index)
    {
        return isset($this->patientInstruction[$index]);
    }

    /**
     * unset patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPatientInstruction($index)
    {
        unset($this->patientInstruction[$index]);
    }

    /**
     * Gets as patientInstruction
     *
     * Instructions in terms that are understood by the patient or consumer.
     *
     * @return \TKusy\Hl7Fhir\R5\ServiceRequestPatientInstructionType[]
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
     * @param \TKusy\Hl7Fhir\R5\ServiceRequestPatientInstructionType[] $patientInstruction
     * @return self
     */
    public function setPatientInstruction(array $patientInstruction = null)
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

