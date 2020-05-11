<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RequestGroupType
 *
 * A group of related requests that can be used to capture intended activities that have inter-dependencies such as "give this medication after that one".If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: RequestGroup
 */
class RequestGroupType extends DomainResourceType
{

    /**
     * Allows a service to provide a unique, business identifier for the request.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = [
        
    ];

    /**
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     */
    private $instantiatesUri = [
        
    ];

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = [
        
    ];

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $replaces
     */
    private $replaces = [
        
    ];

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition, prescription or similar form.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * The current state of the request. For request groups, the status reflects the status of all the requests in the group.
     *
     * @var \TKusy\Hl7FhirR4\RequestStatusType $status
     */
    private $status = null;

    /**
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
     *
     * @var \TKusy\Hl7FhirR4\RequestIntentType $intent
     */
    private $intent = null;

    /**
     * Indicates how quickly the request should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7FhirR4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * A code that identifies what the overall request group is.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The subject for which the request group was created.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Describes the context of the request group, if any.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Indicates when the request group was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * Provides a reference to the author of the request group.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $author
     */
    private $author = null;

    /**
     * Describes the reason for the request group in coded or textual form.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = [
        
    ];

    /**
     * Indicates another resource whose existence justifies this request group.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = [
        
    ];

    /**
     * Provides a mechanism to communicate additional information about the response.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @var \TKusy\Hl7FhirR4\RequestGroupActionType[] $action
     */
    private $action = [
        
    ];

    /**
     * Adds as identifier
     *
     * Allows a service to provide a unique, business identifier for the request.
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
     * Allows a service to provide a unique, business identifier for the request.
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
     * Allows a service to provide a unique, business identifier for the request.
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
     * Allows a service to provide a unique, business identifier for the request.
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
     * Allows a service to provide a unique, business identifier for the request.
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
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
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
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
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
     * Completed or terminated request(s) whose function is taken by this new request.
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
     * Completed or terminated request(s) whose function is taken by this new request.
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
     * Completed or terminated request(s) whose function is taken by this new request.
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
     * Completed or terminated request(s) whose function is taken by this new request.
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
     * Completed or terminated request(s) whose function is taken by this new request.
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
     * Gets as groupIdentifier
     *
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition, prescription or similar form.
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
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition, prescription or similar form.
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
     * The current state of the request. For request groups, the status reflects the status of all the requests in the group.
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
     * The current state of the request. For request groups, the status reflects the status of all the requests in the group.
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
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
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
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
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
     * Indicates how quickly the request should be addressed with respect to other requests.
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
     * Indicates how quickly the request should be addressed with respect to other requests.
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
     * Gets as code
     *
     * A code that identifies what the overall request group is.
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
     * A code that identifies what the overall request group is.
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
     * Gets as subject
     *
     * The subject for which the request group was created.
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
     * The subject for which the request group was created.
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
     * Describes the context of the request group, if any.
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
     * Describes the context of the request group, if any.
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
     * Gets as authoredOn
     *
     * Indicates when the request group was created.
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
     * Indicates when the request group was created.
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
     * Gets as author
     *
     * Provides a reference to the author of the request group.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Provides a reference to the author of the request group.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $author
     * @return self
     */
    public function setAuthor(\TKusy\Hl7FhirR4\ReferenceType $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Describes the reason for the request group in coded or textual form.
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
     * Describes the reason for the request group in coded or textual form.
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
     * Describes the reason for the request group in coded or textual form.
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
     * Describes the reason for the request group in coded or textual form.
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
     * Describes the reason for the request group in coded or textual form.
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
     * Indicates another resource whose existence justifies this request group.
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
     * Indicates another resource whose existence justifies this request group.
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
     * Indicates another resource whose existence justifies this request group.
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
     * Indicates another resource whose existence justifies this request group.
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
     * Indicates another resource whose existence justifies this request group.
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
     * Adds as note
     *
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
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
     * Provides a mechanism to communicate additional information about the response.
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
     * Adds as action
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RequestGroupActionType $action
     */
    public function addToAction(\TKusy\Hl7FhirR4\RequestGroupActionType $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @return \TKusy\Hl7FhirR4\RequestGroupActionType[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @param \TKusy\Hl7FhirR4\RequestGroupActionType[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }


}

