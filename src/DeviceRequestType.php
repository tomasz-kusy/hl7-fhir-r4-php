<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceRequestType
 *
 * Represents a request for a patient to employ a medical device. The device may be an implantable device, or an external assistive device, such as a walker.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DeviceRequest
 */
class DeviceRequestType extends DomainResourceType
{

    /**
     * Identifiers assigned to this order by the orderer or by the receiver.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = [
        
    ];

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
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
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $priorRequest
     */
    private $priorRequest = [
        
    ];

    /**
     * Composite request this is part of.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * The status of the request.
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
     * Indicates how quickly the {{title}} should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7FhirR4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * The details of the device to be used. (choose any one of code*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $codeReference
     */
    private $codeReference = null;

    /**
     * The details of the device to be used. (choose any one of code*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $codeCodeableConcept
     */
    private $codeCodeableConcept = null;

    /**
     * Specific parameters for the ordered item. For example, the prism value for lenses.
     *
     * @var \TKusy\Hl7FhirR4\DeviceRequestParameterType[] $parameter
     */
    private $parameter = [
        
    ];

    /**
     * The patient who will use the device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * An encounter that provides additional context in which this request is made.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

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
     * Desired type of performer for doing the diagnostic testing.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $performerType
     */
    private $performerType = null;

    /**
     * The desired performer for doing the diagnostic testing.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    private $performer = null;

    /**
     * Reason or justification for the use of this device.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = [
        
    ];

    /**
     * Reason or justification for the use of this device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = [
        
    ];

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $insurance
     */
    private $insurance = [
        
    ];

    /**
     * Additional clinical information about the patient that may influence the request fulfilment. For example, this may include where on the subject's body the device will be used (i.e. the target site).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $supportingInfo
     */
    private $supportingInfo = [
        
    ];

    /**
     * Details about this request that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

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
     * Identifiers assigned to this order by the orderer or by the receiver.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
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
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this DeviceRequest.
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
     * @return \TKusy\Hl7FhirR4\UriType[]
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
     * Adds as priorRequest
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $priorRequest
     */
    public function addToPriorRequest(\TKusy\Hl7FhirR4\ReferenceType $priorRequest)
    {
        $this->priorRequest[] = $priorRequest;
        return $this;
    }

    /**
     * isset priorRequest
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriorRequest($index)
    {
        return isset($this->priorRequest[$index]);
    }

    /**
     * unset priorRequest
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriorRequest($index)
    {
        unset($this->priorRequest[$index]);
    }

    /**
     * Gets as priorRequest
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPriorRequest()
    {
        return $this->priorRequest;
    }

    /**
     * Sets a new priorRequest
     *
     * The request takes the place of the referenced completed or terminated request(s).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $priorRequest
     * @return self
     */
    public function setPriorRequest(array $priorRequest)
    {
        $this->priorRequest = $priorRequest;
        return $this;
    }

    /**
     * Gets as groupIdentifier
     *
     * Composite request this is part of.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

    /**
     * Sets a new groupIdentifier
     *
     * Composite request this is part of.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $groupIdentifier
     * @return self
     */
    public function setGroupIdentifier(\TKusy\Hl7FhirR4\IdentifierType $groupIdentifier)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the request.
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
     * The status of the request.
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
     * Gets as priority
     *
     * Indicates how quickly the {{title}} should be addressed with respect to other requests.
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
     * Indicates how quickly the {{title}} should be addressed with respect to other requests.
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
     * Gets as codeReference
     *
     * The details of the device to be used. (choose any one of code*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getCodeReference()
    {
        return $this->codeReference;
    }

    /**
     * Sets a new codeReference
     *
     * The details of the device to be used. (choose any one of code*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $codeReference
     * @return self
     */
    public function setCodeReference(\TKusy\Hl7FhirR4\ReferenceType $codeReference)
    {
        $this->codeReference = $codeReference;
        return $this;
    }

    /**
     * Gets as codeCodeableConcept
     *
     * The details of the device to be used. (choose any one of code*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCodeCodeableConcept()
    {
        return $this->codeCodeableConcept;
    }

    /**
     * Sets a new codeCodeableConcept
     *
     * The details of the device to be used. (choose any one of code*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $codeCodeableConcept
     * @return self
     */
    public function setCodeCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $codeCodeableConcept)
    {
        $this->codeCodeableConcept = $codeCodeableConcept;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Specific parameters for the ordered item. For example, the prism value for lenses.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceRequestParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7FhirR4\DeviceRequestParameterType $parameter)
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
     * @return \TKusy\Hl7FhirR4\DeviceRequestParameterType[]
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
     * @param \TKusy\Hl7FhirR4\DeviceRequestParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient who will use the device.
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
     * The patient who will use the device.
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
     * An encounter that provides additional context in which this request is made.
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
     * An encounter that provides additional context in which this request is made.
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
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
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
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
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
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
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
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
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
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
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
     * The timing schedule for the use of the device. The Schedule data type allows many different expressions, for example. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of occurrence*, but only one)
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
     * Desired type of performer for doing the diagnostic testing.
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
     * Desired type of performer for doing the diagnostic testing.
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
     * Gets as performer
     *
     * The desired performer for doing the diagnostic testing.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The desired performer for doing the diagnostic testing.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $performer
     * @return self
     */
    public function setPerformer(\TKusy\Hl7FhirR4\ReferenceType $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Reason or justification for the use of this device.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * Additional clinical information about the patient that may influence the request fulfilment. For example, this may include where on the subject's body the device will be used (i.e. the target site).
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo)
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
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

