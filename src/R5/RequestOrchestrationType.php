<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RequestOrchestrationType
 *
 * A set of related requests that can be used to capture intended activities that have inter-dependencies such as "give this medication after that one".
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: RequestOrchestration
 */
class RequestOrchestrationType extends DomainResourceType
{

    /**
     * Allows a service to provide a unique, business identifier for the request.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
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
     * The current state of the request. For request orchestrations, the status reflects the status of all the requests in the orchestration.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestStatusType $status
     */
    private $status = null;

    /**
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
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
     * A code that identifies what the overall request orchestration is.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The subject for which the request orchestration was created.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Describes the context of the request orchestration, if any.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Indicates when the request orchestration was created.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * Provides a reference to the author of the request orchestration.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * Describes the reason for the request orchestration in coded or textual form.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Goals that are intended to be achieved by following the requests in this RequestOrchestration.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $goal
     */
    private $goal = null;

    /**
     * Provides a mechanism to communicate additional information about the response.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The actions, if any, produced by the evaluation of the artifact.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestOrchestrationActionType[] $action
     */
    private $action = null;

    /**
     * Adds as identifier
     *
     * Allows a service to provide a unique, business identifier for the request.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * A canonical URL referencing a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
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
     * A URL referencing an externally defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
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
     * @return \TKusy\Hl7Fhir\R5\UriType[]
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
     * A plan, proposal or order that is fulfilled in whole or in part by this request.
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * Completed or terminated request(s) whose function is taken by this new request.
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * The current state of the request. For request orchestrations, the status reflects the status of all the requests in the orchestration.
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
     * The current state of the request. For request orchestrations, the status reflects the status of all the requests in the orchestration.
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
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
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
     * Indicates the level of authority/intentionality associated with the request and where the request fits into the workflow chain.
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
     * Gets as code
     *
     * A code that identifies what the overall request orchestration is.
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
     * A code that identifies what the overall request orchestration is.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The subject for which the request orchestration was created.
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
     * The subject for which the request orchestration was created.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * Describes the context of the request orchestration, if any.
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
     * Describes the context of the request orchestration, if any.
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
     * Gets as authoredOn
     *
     * Indicates when the request orchestration was created.
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
     * Indicates when the request orchestration was created.
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
     * Gets as author
     *
     * Provides a reference to the author of the request orchestration.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Provides a reference to the author of the request orchestration.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     * @return self
     */
    public function setAuthor(?\TKusy\Hl7Fhir\R5\ReferenceType $author = null)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Describes the reason for the request orchestration in coded or textual form.
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
     * Describes the reason for the request orchestration in coded or textual form.
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
     * Describes the reason for the request orchestration in coded or textual form.
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
     * Describes the reason for the request orchestration in coded or textual form.
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
     * Describes the reason for the request orchestration in coded or textual form.
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
     * Adds as goal
     *
     * Goals that are intended to be achieved by following the requests in this RequestOrchestration.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $goal
     */
    public function addToGoal(\TKusy\Hl7Fhir\R5\ReferenceType $goal)
    {
        $this->goal[] = $goal;
        return $this;
    }

    /**
     * isset goal
     *
     * Goals that are intended to be achieved by following the requests in this RequestOrchestration.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoal($index)
    {
        return isset($this->goal[$index]);
    }

    /**
     * unset goal
     *
     * Goals that are intended to be achieved by following the requests in this RequestOrchestration.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoal($index)
    {
        unset($this->goal[$index]);
    }

    /**
     * Gets as goal
     *
     * Goals that are intended to be achieved by following the requests in this RequestOrchestration.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Sets a new goal
     *
     * Goals that are intended to be achieved by following the requests in this RequestOrchestration.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $goal
     * @return self
     */
    public function setGoal(array $goal = null)
    {
        $this->goal = $goal;
        return $this;
    }

    /**
     * Adds as note
     *
     * Provides a mechanism to communicate additional information about the response.
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
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
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationActionType $action
     */
    public function addToAction(\TKusy\Hl7Fhir\R5\RequestOrchestrationActionType $action)
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
     * @return \TKusy\Hl7Fhir\R5\RequestOrchestrationActionType[]
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
     * @param \TKusy\Hl7Fhir\R5\RequestOrchestrationActionType[] $action
     * @return self
     */
    public function setAction(array $action = null)
    {
        $this->action = $action;
        return $this;
    }


}

