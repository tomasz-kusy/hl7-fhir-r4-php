<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TaskType
 *
 * A task to be performed.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Task
 */
class TaskType extends DomainResourceType
{

    /**
     * The business identifier for this task.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by focus. For example, based on a CarePlan (= basedOn), a task is created to fulfill a ServiceRequest ( = focus ) to collect a specimen from a patient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A shared identifier common to multiple independent Task and Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * Task that this particular task is part of.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * The current status of the task.
     *
     * @var \TKusy\Hl7Fhir\R5\TaskStatusType $status
     */
    private $status = null;

    /**
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $statusReason
     */
    private $statusReason = null;

    /**
     * Contains business-specific nuances of the business state.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $businessStatus
     */
    private $businessStatus = null;

    /**
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\TaskIntentType $intent
     */
    private $intent = null;

    /**
     * Indicates how quickly the Task should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * If true indicates that the Task is asking for the specified action to *not* occur.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * A name or code (or both) briefly describing what the task involves.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A free-text description of what is to be performed.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * The request being fulfilled or the resource being manipulated (changed, suspended, etc.) by this task.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $focus
     */
    private $focus = null;

    /**
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $for
     */
    private $for = null;

    /**
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this task was created.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Indicates the start and/or end of the period of time when completion of the task is desired to take place.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $requestedPeriod
     */
    private $requestedPeriod = null;

    /**
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $executionPeriod
     */
    private $executionPeriod = null;

    /**
     * The date and time this task was created.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The date and time of last modification to this task.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $lastModified
     */
    private $lastModified = null;

    /**
     * The creator of the task.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requester
     */
    private $requester = null;

    /**
     * The kind of participant or specific participant that should perform the task.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $requestedPerformer
     */
    private $requestedPerformer = null;

    /**
     * Party responsible for managing task execution.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $owner
     */
    private $owner = null;

    /**
     * The entity who performed the requested task.
     *
     * @var \TKusy\Hl7Fhir\R5\TaskPerformerType[] $performer
     */
    private $performer = null;

    /**
     * Principal physical location where this task is performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * A description, code, or reference indicating why this task needs to be performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $insurance
     */
    private $insurance = null;

    /**
     * Free-text information captured about the task as it progresses.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $relevantHistory
     */
    private $relevantHistory = null;

    /**
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     *
     * @var \TKusy\Hl7Fhir\R5\TaskRestrictionType $restriction
     */
    private $restriction = null;

    /**
     * Additional information that may be needed in the execution of the task.
     *
     * @var \TKusy\Hl7Fhir\R5\TaskInputType[] $input
     */
    private $input = null;

    /**
     * Outputs produced by the Task.
     *
     * @var \TKusy\Hl7Fhir\R5\TaskOutputType[] $output
     */
    private $output = null;

    /**
     * Adds as identifier
     *
     * The business identifier for this task.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
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
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical = null)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Task.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
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
     * @param \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(?\TKusy\Hl7Fhir\R5\UriType $instantiatesUri = null)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by focus. For example, based on a CarePlan (= basedOn), a task is created to fulfill a ServiceRequest ( = focus ) to collect a specimen from a patient.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by focus. For example, based on a CarePlan (= basedOn), a task is created to fulfill a ServiceRequest ( = focus ) to collect a specimen from a patient.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by focus. For example, based on a CarePlan (= basedOn), a task is created to fulfill a ServiceRequest ( = focus ) to collect a specimen from a patient.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by focus. For example, based on a CarePlan (= basedOn), a task is created to fulfill a ServiceRequest ( = focus ) to collect a specimen from a patient.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the task. It references a "request" resource such as a ServiceRequest, MedicationRequest, CarePlan, etc. which is distinct from the "request" resource the task is seeking to fulfill. This latter resource is referenced by focus. For example, based on a CarePlan (= basedOn), a task is created to fulfill a ServiceRequest ( = focus ) to collect a specimen from a patient.
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
     * Gets as groupIdentifier
     *
     * A shared identifier common to multiple independent Task and Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
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
     * A shared identifier common to multiple independent Task and Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
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
     * Adds as partOf
     *
     * Task that this particular task is part of.
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current status of the task.
     *
     * @return \TKusy\Hl7Fhir\R5\TaskStatusType
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
     * @param \TKusy\Hl7Fhir\R5\TaskStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\TaskStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * An explanation as to why this task is held, failed, was refused, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $statusReason
     * @return self
     */
    public function setStatusReason(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as businessStatus
     *
     * Contains business-specific nuances of the business state.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $businessStatus
     * @return self
     */
    public function setBusinessStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $businessStatus = null)
    {
        $this->businessStatus = $businessStatus;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Indicates the "level" of actionability associated with the Task, i.e. i+R[9]Cs this a proposed task, a planned task, an actionable task, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\TaskIntentType
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
     * @param \TKusy\Hl7Fhir\R5\TaskIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7Fhir\R5\TaskIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the Task should be addressed with respect to other requests.
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
     * Indicates how quickly the Task should be addressed with respect to other requests.
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
     * If true indicates that the Task is asking for the specified action to *not* occur.
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
     * If true indicates that the Task is asking for the specified action to *not* occur.
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
     * A name or code (or both) briefly describing what the task involves.
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
     * A name or code (or both) briefly describing what the task involves.
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
     * Gets as description
     *
     * A free-text description of what is to be performed.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as focus
     *
     * The request being fulfilled or the resource being manipulated (changed, suspended, etc.) by this task.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The request being fulfilled or the resource being manipulated (changed, suspended, etc.) by this task.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $focus
     * @return self
     */
    public function setFocus(?\TKusy\Hl7Fhir\R5\ReferenceType $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as for
     *
     * The entity who benefits from the performance of the service specified in the task (e.g., the patient).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $for
     * @return self
     */
    public function setFor(?\TKusy\Hl7Fhir\R5\ReferenceType $for = null)
    {
        $this->for = $for;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this task was created.
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this task was created.
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
     * Gets as requestedPeriod
     *
     * Indicates the start and/or end of the period of time when completion of the task is desired to take place.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getRequestedPeriod()
    {
        return $this->requestedPeriod;
    }

    /**
     * Sets a new requestedPeriod
     *
     * Indicates the start and/or end of the period of time when completion of the task is desired to take place.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $requestedPeriod
     * @return self
     */
    public function setRequestedPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $requestedPeriod = null)
    {
        $this->requestedPeriod = $requestedPeriod;
        return $this;
    }

    /**
     * Gets as executionPeriod
     *
     * Identifies the time action was first taken against the task (start) and/or the time final action was taken against the task prior to marking it as completed (end).
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
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
     * @param \TKusy\Hl7Fhir\R5\PeriodType $executionPeriod
     * @return self
     */
    public function setExecutionPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $executionPeriod = null)
    {
        $this->executionPeriod = $executionPeriod;
        return $this;
    }

    /**
     * Gets as authoredOn
     *
     * The date and time this task was created.
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
     * The date and time this task was created.
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
     * Gets as lastModified
     *
     * The date and time of last modification to this task.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $lastModified
     * @return self
     */
    public function setLastModified(?\TKusy\Hl7Fhir\R5\DateTimeType $lastModified = null)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * Gets as requester
     *
     * The creator of the task.
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
     * The creator of the task.
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
     * Adds as requestedPerformer
     *
     * The kind of participant or specific participant that should perform the task.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $requestedPerformer
     */
    public function addToRequestedPerformer(\TKusy\Hl7Fhir\R5\CodeableReferenceType $requestedPerformer)
    {
        $this->requestedPerformer[] = $requestedPerformer;
        return $this;
    }

    /**
     * isset requestedPerformer
     *
     * The kind of participant or specific participant that should perform the task.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedPerformer($index)
    {
        return isset($this->requestedPerformer[$index]);
    }

    /**
     * unset requestedPerformer
     *
     * The kind of participant or specific participant that should perform the task.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedPerformer($index)
    {
        unset($this->requestedPerformer[$index]);
    }

    /**
     * Gets as requestedPerformer
     *
     * The kind of participant or specific participant that should perform the task.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getRequestedPerformer()
    {
        return $this->requestedPerformer;
    }

    /**
     * Sets a new requestedPerformer
     *
     * The kind of participant or specific participant that should perform the task.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $requestedPerformer
     * @return self
     */
    public function setRequestedPerformer(array $requestedPerformer = null)
    {
        $this->requestedPerformer = $requestedPerformer;
        return $this;
    }

    /**
     * Gets as owner
     *
     * Party responsible for managing task execution.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * Party responsible for managing task execution.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $owner
     * @return self
     */
    public function setOwner(?\TKusy\Hl7Fhir\R5\ReferenceType $owner = null)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Adds as performer
     *
     * The entity who performed the requested task.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TaskPerformerType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\TaskPerformerType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * The entity who performed the requested task.
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
     * The entity who performed the requested task.
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
     * The entity who performed the requested task.
     *
     * @return \TKusy\Hl7Fhir\R5\TaskPerformerType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The entity who performed the requested task.
     *
     * @param \TKusy\Hl7Fhir\R5\TaskPerformerType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Gets as location
     *
     * Principal physical location where this task is performed.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Principal physical location where this task is performed.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as reason
     *
     * A description, code, or reference indicating why this task needs to be performed.
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
     * A description, code, or reference indicating why this task needs to be performed.
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
     * A description, code, or reference indicating why this task needs to be performed.
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
     * A description, code, or reference indicating why this task needs to be performed.
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
     * A description, code, or reference indicating why this task needs to be performed.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Task.
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance = null)
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * Links to Provenance records for past versions of this Task that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the task.
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $relevantHistory
     * @return self
     */
    public function setRelevantHistory(array $relevantHistory = null)
    {
        $this->relevantHistory = $relevantHistory;
        return $this;
    }

    /**
     * Gets as restriction
     *
     * If the Task.focus is a request resource and the task is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     *
     * @return \TKusy\Hl7Fhir\R5\TaskRestrictionType
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
     * @param \TKusy\Hl7Fhir\R5\TaskRestrictionType $restriction
     * @return self
     */
    public function setRestriction(?\TKusy\Hl7Fhir\R5\TaskRestrictionType $restriction = null)
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
     * @param \TKusy\Hl7Fhir\R5\TaskInputType $input
     */
    public function addToInput(\TKusy\Hl7Fhir\R5\TaskInputType $input)
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
     * @return \TKusy\Hl7Fhir\R5\TaskInputType[]
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
     * @param \TKusy\Hl7Fhir\R5\TaskInputType[] $input
     * @return self
     */
    public function setInput(array $input = null)
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
     * @param \TKusy\Hl7Fhir\R5\TaskOutputType $output
     */
    public function addToOutput(\TKusy\Hl7Fhir\R5\TaskOutputType $output)
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
     * @return \TKusy\Hl7Fhir\R5\TaskOutputType[]
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
     * @param \TKusy\Hl7Fhir\R5\TaskOutputType[] $output
     * @return self
     */
    public function setOutput(array $output = null)
    {
        $this->output = $output;
        return $this;
    }


}

