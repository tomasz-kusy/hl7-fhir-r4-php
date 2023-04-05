<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TransportType
 *
 * Record of transport of item.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Transport
 */
class TransportType extends DomainResourceType
{

    /**
     * Identifier for the transport event that is used to identify it across multiple disparate systems.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Transport.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Transport.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * BasedOn refers to a higher-level authorization that triggered the creation of the transport. It references a "request" resource such as a ServiceRequest or Transport, which is distinct from the "request" resource the Transport is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a transport is created to fulfill a procedureRequest ( = FocusOn ) to transport a specimen to the lab.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A shared identifier common to multiple independent Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * A larger event of which this particular event is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * A code specifying the state of the transport event.
     *
     * @var \TKusy\Hl7Fhir\R5\TransportStatusType $status
     */
    private $status = null;

    /**
     * An explanation as to why this transport is held, failed, was refused, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * Indicates the "level" of actionability associated with the Transport, i.e. i+R[9]Cs this a proposed transport, a planned transport, an actionable transport, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\TransportIntentType $intent
     */
    private $intent = null;

    /**
     * Indicates how quickly the Transport should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * A name or code (or both) briefly describing what the transport involves.
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
     * The request being actioned or the resource being manipulated by this transport.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $focus
     */
    private $focus = null;

    /**
     * The entity who benefits from the performance of the service specified in the transport (e.g., the patient).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $for
     */
    private $for = null;

    /**
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this transport was created.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Identifies the completion time of the event (the occurrence).
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $completionTime
     */
    private $completionTime = null;

    /**
     * The date and time this transport was created.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The date and time of last modification to this transport.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $lastModified
     */
    private $lastModified = null;

    /**
     * The creator of the transport.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requester
     */
    private $requester = null;

    /**
     * The kind of participant that should perform the transport.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $performerType
     */
    private $performerType = null;

    /**
     * Individual organization or Device currently responsible for transport execution.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $owner
     */
    private $owner = null;

    /**
     * Principal physical location where this transport is performed.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Transport.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $insurance
     */
    private $insurance = null;

    /**
     * Free-text information captured about the transport as it progresses.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Links to Provenance records for past versions of this Transport that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the transport.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $relevantHistory
     */
    private $relevantHistory = null;

    /**
     * If the Transport.focus is a request resource and the transport is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     *
     * @var \TKusy\Hl7Fhir\R5\TransportRestrictionType $restriction
     */
    private $restriction = null;

    /**
     * Additional information that may be needed in the execution of the transport.
     *
     * @var \TKusy\Hl7Fhir\R5\TransportInputType[] $input
     */
    private $input = null;

    /**
     * Outputs produced by the Transport.
     *
     * @var \TKusy\Hl7Fhir\R5\TransportOutputType[] $output
     */
    private $output = null;

    /**
     * The desired or final location for the transport.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requestedLocation
     */
    private $requestedLocation = null;

    /**
     * The current location for the entity to be transported.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $currentLocation
     */
    private $currentLocation = null;

    /**
     * A resource reference indicating why this transport needs to be performed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $reason
     */
    private $reason = null;

    /**
     * The transport event prior to this one.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $history
     */
    private $history = null;

    /**
     * Adds as identifier
     *
     * Identifier for the transport event that is used to identify it across multiple disparate systems.
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
     * Identifier for the transport event that is used to identify it across multiple disparate systems.
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
     * Identifier for the transport event that is used to identify it across multiple disparate systems.
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
     * Identifier for the transport event that is used to identify it across multiple disparate systems.
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
     * Identifier for the transport event that is used to identify it across multiple disparate systems.
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
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Transport.
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
     * The URL pointing to a *FHIR*-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Transport.
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
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Transport.
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
     * The URL pointing to an *externally* maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Transport.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the transport. It references a "request" resource such as a ServiceRequest or Transport, which is distinct from the "request" resource the Transport is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a transport is created to fulfill a procedureRequest ( = FocusOn ) to transport a specimen to the lab.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the transport. It references a "request" resource such as a ServiceRequest or Transport, which is distinct from the "request" resource the Transport is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a transport is created to fulfill a procedureRequest ( = FocusOn ) to transport a specimen to the lab.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the transport. It references a "request" resource such as a ServiceRequest or Transport, which is distinct from the "request" resource the Transport is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a transport is created to fulfill a procedureRequest ( = FocusOn ) to transport a specimen to the lab.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the transport. It references a "request" resource such as a ServiceRequest or Transport, which is distinct from the "request" resource the Transport is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a transport is created to fulfill a procedureRequest ( = FocusOn ) to transport a specimen to the lab.
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
     * BasedOn refers to a higher-level authorization that triggered the creation of the transport. It references a "request" resource such as a ServiceRequest or Transport, which is distinct from the "request" resource the Transport is seeking to fulfill. This latter resource is referenced by FocusOn. For example, based on a ServiceRequest (= BasedOn), a transport is created to fulfill a procedureRequest ( = FocusOn ) to transport a specimen to the lab.
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
     * Adds as partOf
     *
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A larger event of which this particular event is a component or step.
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
     * A code specifying the state of the transport event.
     *
     * @return \TKusy\Hl7Fhir\R5\TransportStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code specifying the state of the transport event.
     *
     * @param \TKusy\Hl7Fhir\R5\TransportStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\TransportStatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * An explanation as to why this transport is held, failed, was refused, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * An explanation as to why this transport is held, failed, was refused, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     * @return self
     */
    public function setStatusReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Indicates the "level" of actionability associated with the Transport, i.e. i+R[9]Cs this a proposed transport, a planned transport, an actionable transport, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\TransportIntentType
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Sets a new intent
     *
     * Indicates the "level" of actionability associated with the Transport, i.e. i+R[9]Cs this a proposed transport, a planned transport, an actionable transport, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\TransportIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7Fhir\R5\TransportIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the Transport should be addressed with respect to other requests.
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
     * Indicates how quickly the Transport should be addressed with respect to other requests.
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
     * A name or code (or both) briefly describing what the transport involves.
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
     * A name or code (or both) briefly describing what the transport involves.
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
     * The request being actioned or the resource being manipulated by this transport.
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
     * The request being actioned or the resource being manipulated by this transport.
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
     * The entity who benefits from the performance of the service specified in the transport (e.g., the patient).
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
     * The entity who benefits from the performance of the service specified in the transport (e.g., the patient).
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this transport was created.
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
     * The healthcare event (e.g. a patient and healthcare provider interaction) during which this transport was created.
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
     * Gets as completionTime
     *
     * Identifies the completion time of the event (the occurrence).
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCompletionTime()
    {
        return $this->completionTime;
    }

    /**
     * Sets a new completionTime
     *
     * Identifies the completion time of the event (the occurrence).
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $completionTime
     * @return self
     */
    public function setCompletionTime(?\TKusy\Hl7Fhir\R5\DateTimeType $completionTime = null)
    {
        $this->completionTime = $completionTime;
        return $this;
    }

    /**
     * Gets as authoredOn
     *
     * The date and time this transport was created.
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
     * The date and time this transport was created.
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
     * The date and time of last modification to this transport.
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
     * The date and time of last modification to this transport.
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
     * The creator of the transport.
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
     * The creator of the transport.
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
     * Adds as performerType
     *
     * The kind of participant that should perform the transport.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $performerType
     */
    public function addToPerformerType(\TKusy\Hl7Fhir\R5\CodeableConceptType $performerType)
    {
        $this->performerType[] = $performerType;
        return $this;
    }

    /**
     * isset performerType
     *
     * The kind of participant that should perform the transport.
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
     * The kind of participant that should perform the transport.
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
     * The kind of participant that should perform the transport.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * Sets a new performerType
     *
     * The kind of participant that should perform the transport.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $performerType
     * @return self
     */
    public function setPerformerType(array $performerType = null)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Gets as owner
     *
     * Individual organization or Device currently responsible for transport execution.
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
     * Individual organization or Device currently responsible for transport execution.
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
     * Gets as location
     *
     * Principal physical location where this transport is performed.
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
     * Principal physical location where this transport is performed.
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
     * Adds as insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Transport.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Transport.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Transport.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Transport.
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
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be relevant to the Transport.
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
     * Free-text information captured about the transport as it progresses.
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
     * Free-text information captured about the transport as it progresses.
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
     * Free-text information captured about the transport as it progresses.
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
     * Free-text information captured about the transport as it progresses.
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
     * Free-text information captured about the transport as it progresses.
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
     * Links to Provenance records for past versions of this Transport that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the transport.
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
     * Links to Provenance records for past versions of this Transport that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the transport.
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
     * Links to Provenance records for past versions of this Transport that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the transport.
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
     * Links to Provenance records for past versions of this Transport that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the transport.
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
     * Links to Provenance records for past versions of this Transport that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the transport.
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
     * If the Transport.focus is a request resource and the transport is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     *
     * @return \TKusy\Hl7Fhir\R5\TransportRestrictionType
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * If the Transport.focus is a request resource and the transport is seeking fulfillment (i.e. is asking for the request to be actioned), this element identifies any limitations on what parts of the referenced request should be actioned.
     *
     * @param \TKusy\Hl7Fhir\R5\TransportRestrictionType $restriction
     * @return self
     */
    public function setRestriction(?\TKusy\Hl7Fhir\R5\TransportRestrictionType $restriction = null)
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Adds as input
     *
     * Additional information that may be needed in the execution of the transport.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TransportInputType $input
     */
    public function addToInput(\TKusy\Hl7Fhir\R5\TransportInputType $input)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * isset input
     *
     * Additional information that may be needed in the execution of the transport.
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
     * Additional information that may be needed in the execution of the transport.
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
     * Additional information that may be needed in the execution of the transport.
     *
     * @return \TKusy\Hl7Fhir\R5\TransportInputType[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Sets a new input
     *
     * Additional information that may be needed in the execution of the transport.
     *
     * @param \TKusy\Hl7Fhir\R5\TransportInputType[] $input
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
     * Outputs produced by the Transport.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TransportOutputType $output
     */
    public function addToOutput(\TKusy\Hl7Fhir\R5\TransportOutputType $output)
    {
        $this->output[] = $output;
        return $this;
    }

    /**
     * isset output
     *
     * Outputs produced by the Transport.
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
     * Outputs produced by the Transport.
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
     * Outputs produced by the Transport.
     *
     * @return \TKusy\Hl7Fhir\R5\TransportOutputType[]
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * Sets a new output
     *
     * Outputs produced by the Transport.
     *
     * @param \TKusy\Hl7Fhir\R5\TransportOutputType[] $output
     * @return self
     */
    public function setOutput(array $output = null)
    {
        $this->output = $output;
        return $this;
    }

    /**
     * Gets as requestedLocation
     *
     * The desired or final location for the transport.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRequestedLocation()
    {
        return $this->requestedLocation;
    }

    /**
     * Sets a new requestedLocation
     *
     * The desired or final location for the transport.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $requestedLocation
     * @return self
     */
    public function setRequestedLocation(\TKusy\Hl7Fhir\R5\ReferenceType $requestedLocation)
    {
        $this->requestedLocation = $requestedLocation;
        return $this;
    }

    /**
     * Gets as currentLocation
     *
     * The current location for the entity to be transported.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    /**
     * Sets a new currentLocation
     *
     * The current location for the entity to be transported.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $currentLocation
     * @return self
     */
    public function setCurrentLocation(\TKusy\Hl7Fhir\R5\ReferenceType $currentLocation)
    {
        $this->currentLocation = $currentLocation;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A resource reference indicating why this transport needs to be performed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A resource reference indicating why this transport needs to be performed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as history
     *
     * The transport event prior to this one.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Sets a new history
     *
     * The transport event prior to this one.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $history
     * @return self
     */
    public function setHistory(?\TKusy\Hl7Fhir\R5\ReferenceType $history = null)
    {
        $this->history = $history;
        return $this;
    }


}

