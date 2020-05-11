<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TaskType
 *
 * A task to be performed.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Task
 */
class TaskType extends DomainResourceType
{

    /**
     * The business identifier for this task.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @var \TKusy\Hl7FhirR4\UriType $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * An identifier that links together multiple tasks and other requests that were created in the same context.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * Task that this particular task is part of.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * The current status of the task.
     *
     * @var \TKusy\Hl7FhirR4\TaskStatusType $status
     */
    private $status = null;

    /**
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * Contains business-specific nuances of the business state.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $businessStatus
     */
    private $businessStatus = null;

    /**
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     *
     * @var \TKusy\Hl7FhirR4\TaskIntentType $intent
     */
    private $intent = null;

    /**
     * Indicates how quickly the Task should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7FhirR4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * A name or code (or both) briefly describing what the task involves.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A free-text description of what is to be performed.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * The request being actioned or the resource being manipulated by this task.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $focus
     */
    private $focus = null;

    /**
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $for
     */
    private $for = null;

    /**
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this task was created.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $executionPeriod
     */
    private $executionPeriod = null;

    /**
     * The date and time this task was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The date and time of last modification to this task.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $lastModified
     */
    private $lastModified = null;

    /**
     * The creator of the task.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $requester
     */
    private $requester = null;

    /**
     * The kind of participant that should perform the task.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $performerType
     */
    private $performerType = null;

    /**
     * Individual organization or Device currently responsible for task execution.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $owner
     */
    private $owner = null;

    /**
     * Principal physical location where the this task is performed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * A description or code indicating why this task needs to be performed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $reasonCode
     */
    private $reasonCode = null;

    /**
     * A resource reference indicating why this task needs to be performed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $reasonReference
     */
    private $reasonReference = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $insurance
     */
    private $insurance = null;

    /**
     * Free-text information captured about the task as it progresses.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $relevantHistory
     */
    private $relevantHistory = null;

    /**
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     *
     * @var \TKusy\Hl7FhirR4\TaskRestrictionType $restriction
     */
    private $restriction = null;

    /**
     * Additional information that may be needed in the execution of the task.
     *
     * @var \TKusy\Hl7FhirR4\TaskInputType[] $input
     */
    private $input = null;

    /**
     * Outputs produced by the Task.
     *
     * @var \TKusy\Hl7FhirR4\TaskOutputType[] $output
     */
    private $output = null;

    /**
     * Adds as identifier
     *
     * The business identifier for this task.
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
     * The business identifier for this task.
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
     * The business identifier for this task.
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
     * The business identifier for this task.
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
     * The business identifier for this task.
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
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(\TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @param \TKusy\Hl7FhirR4\UriType $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(\TKusy\Hl7FhirR4\UriType $instantiatesUri)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, ServiceRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a task is created to fulfill a procedureRequest ( = FocusOn ) to collect a specimen from a patient.
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
     * Gets as groupIdentifier
     *
     * An identifier that links together multiple tasks and other requests that were created in the same context.
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
     * An identifier that links together multiple tasks and other requests that were created in the same context.
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
     * Adds as partOf
     *
     * Task that this particular task is part of.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7FhirR4\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * Task that this particular task is part of.
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
     * Task that this particular task is part of.
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
     * Task that this particular task is part of.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * Task that this particular task is part of.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current status of the task.
     *
     * @return \TKusy\Hl7FhirR4\TaskStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current status of the task.
     *
     * @param \TKusy\Hl7FhirR4\TaskStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\TaskStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     * @return self
     */
    public function setStatusReason(\TKusy\Hl7FhirR4\CodeableConceptType $statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as businessStatus
     *
     * Contains business-specific nuances of the business state.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getBusinessStatus()
    {
        return $this->businessStatus;
    }

    /**
     * Sets a new businessStatus
     *
     * Contains business-specific nuances of the business state.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $businessStatus
     * @return self
     */
    public function setBusinessStatus(\TKusy\Hl7FhirR4\CodeableConceptType $businessStatus)
    {
        $this->businessStatus = $businessStatus;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     *
     * @return \TKusy\Hl7FhirR4\TaskIntentType
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Sets a new intent
     *
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     *
     * @param \TKusy\Hl7FhirR4\TaskIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7FhirR4\TaskIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the Task should be addressed with respect to other requests.
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
     * Indicates how quickly the Task should be addressed with respect to other requests.
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
     * A name or code (or both) briefly describing what the task involves.
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
     * A name or code (or both) briefly describing what the task involves.
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
     * Gets as description
     *
     * A free-text description of what is to be performed.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A free-text description of what is to be performed.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as focus
     *
     * The request being actioned or the resource being manipulated by this task.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The request being actioned or the resource being manipulated by this task.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $focus
     * @return self
     */
    public function setFocus(\TKusy\Hl7FhirR4\ReferenceType $focus)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as for
     *
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getFor()
    {
        return $this->for;
    }

    /**
     * Sets a new for
     *
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $for
     * @return self
     */
    public function setFor(\TKusy\Hl7FhirR4\ReferenceType $for)
    {
        $this->for = $for;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this task was created.
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this task was created.
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
     * Gets as executionPeriod
     *
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getExecutionPeriod()
    {
        return $this->executionPeriod;
    }

    /**
     * Sets a new executionPeriod
     *
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $executionPeriod
     * @return self
     */
    public function setExecutionPeriod(\TKusy\Hl7FhirR4\PeriodType $executionPeriod)
    {
        $this->executionPeriod = $executionPeriod;
        return $this;
    }

    /**
     * Gets as authoredOn
     *
     * The date and time this task was created.
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
     * The date and time this task was created.
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
     * Gets as lastModified
     *
     * The date and time of last modification to this task.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Sets a new lastModified
     *
     * The date and time of last modification to this task.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $lastModified
     * @return self
     */
    public function setLastModified(\TKusy\Hl7FhirR4\DateTimeType $lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * Gets as requester
     *
     * The creator of the task.
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
     * The creator of the task.
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
     * Adds as performerType
     *
     * The kind of participant that should perform the task.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $performerType
     */
    public function addToPerformerType(\TKusy\Hl7FhirR4\CodeableConceptType $performerType)
    {
        $this->performerType[] = $performerType;
        return $this;
    }

    /**
     * isset performerType
     *
     * The kind of participant that should perform the task.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformerType($index)
    {
        return isset($this->performerType[$index]);
    }

    /**
     * unset performerType
     *
     * The kind of participant that should perform the task.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformerType($index)
    {
        unset($this->performerType[$index]);
    }

    /**
     * Gets as performerType
     *
     * The kind of participant that should perform the task.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * Sets a new performerType
     *
     * The kind of participant that should perform the task.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $performerType
     * @return self
     */
    public function setPerformerType(array $performerType)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Gets as owner
     *
     * Individual organization or Device currently responsible for task execution.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * Individual organization or Device currently responsible for task execution.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $owner
     * @return self
     */
    public function setOwner(\TKusy\Hl7FhirR4\ReferenceType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as location
     *
     * Principal physical location where the this task is performed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Principal physical location where the this task is performed.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as reasonCode
     *
     * A description or code indicating why this task needs to be performed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * A description or code indicating why this task needs to be performed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reasonCode
     * @return self
     */
    public function setReasonCode(\TKusy\Hl7FhirR4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Gets as reasonReference
     *
     * A resource reference indicating why this task needs to be performed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * A resource reference indicating why this task needs to be performed.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $reasonReference
     * @return self
     */
    public function setReasonReference(\TKusy\Hl7FhirR4\ReferenceType $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
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
     * Adds as note
     *
     * Free-text information captured about the task as it progresses.
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
     * Free-text information captured about the task as it progresses.
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
     * Free-text information captured about the task as it progresses.
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
     * Free-text information captured about the task as it progresses.
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
     * Free-text information captured about the task as it progresses.
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
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
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
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
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
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
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
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
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
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $relevantHistory
     * @return self
     */
    public function setRelevantHistory(array $relevantHistory)
    {
        $this->relevantHistory = $relevantHistory;
        return $this;
    }

    /**
     * Gets as restriction
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     *
     * @return \TKusy\Hl7FhirR4\TaskRestrictionType
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     *
     * @param \TKusy\Hl7FhirR4\TaskRestrictionType $restriction
     * @return self
     */
    public function setRestriction(\TKusy\Hl7FhirR4\TaskRestrictionType $restriction)
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Adds as input
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TaskInputType $input
     */
    public function addToInput(\TKusy\Hl7FhirR4\TaskInputType $input)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * isset input
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInput($index)
    {
        return isset($this->input[$index]);
    }

    /**
     * unset input
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInput($index)
    {
        unset($this->input[$index]);
    }

    /**
     * Gets as input
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @return \TKusy\Hl7FhirR4\TaskInputType[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Sets a new input
     *
     * Additional information that may be needed in the execution of the task.
     *
     * @param \TKusy\Hl7FhirR4\TaskInputType[] $input
     * @return self
     */
    public function setInput(array $input)
    {
        $this->input = $input;
        return $this;
    }

    /**
     * Adds as output
     *
     * Outputs produced by the Task.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TaskOutputType $output
     */
    public function addToOutput(\TKusy\Hl7FhirR4\TaskOutputType $output)
    {
        $this->output[] = $output;
        return $this;
    }

    /**
     * isset output
     *
     * Outputs produced by the Task.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutput($index)
    {
        return isset($this->output[$index]);
    }

    /**
     * unset output
     *
     * Outputs produced by the Task.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutput($index)
    {
        unset($this->output[$index]);
    }

    /**
     * Gets as output
     *
     * Outputs produced by the Task.
     *
     * @return \TKusy\Hl7FhirR4\TaskOutputType[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Sets a new output
     *
     * Outputs produced by the Task.
     *
     * @param \TKusy\Hl7FhirR4\TaskOutputType[] $output
     * @return self
     */
    public function setOutput(array $output)
    {
        $this->output = $output;
        return $this;
    }


}

