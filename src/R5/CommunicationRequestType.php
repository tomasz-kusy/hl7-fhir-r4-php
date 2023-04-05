<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CommunicationRequestType
 *
 * A request to convey information; e.g. the CDS system proposes that an alert be sent to a responsible provider, the CDS system proposes that the public health agency be notified about a reportable condition.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CommunicationRequest
 */
class CommunicationRequestType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan or proposal that is fulfilled in whole or in part by this request.
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
     * The status of the proposal or order.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the CommunicationRequest.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * Indicates the level of authority/intentionality associated with the CommunicationRequest and where the request fits into the workflow chain.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestIntentType $intent
     */
    private $intent = null;

    /**
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $medium
     */
    private $medium = null;

    /**
     * The patient or group that is the focus of this communication request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $about
     */
    private $about = null;

    /**
     * The Encounter during which this CommunicationRequest was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     *
     * @var \TKusy\Hl7Fhir\R5\CommunicationRequestPayloadType[] $payload
     */
    private $payload = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * For draft requests, indicates the date of initial creation. For requests with other statuses, indicates the date of activation.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The device, individual, or organization who asks for the information to be shared.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requester
     */
    private $requester = null;

    /**
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $recipient
     */
    private $recipient = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $informationProvider
     */
    private $informationProvider = null;

    /**
     * Describes why the request is being made in coded or textual form.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Adds as basedOn
     *
     * A plan or proposal that is fulfilled in whole or in part by this request.
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
     * A plan or proposal that is fulfilled in whole or in part by this request.
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
     * A plan or proposal that is fulfilled in whole or in part by this request.
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
     * A plan or proposal that is fulfilled in whole or in part by this request.
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
     * A plan or proposal that is fulfilled in whole or in part by this request.
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
     * The status of the proposal or order.
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
     * The status of the proposal or order.
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
     * Gets as statusReason
     *
     * Captures the reason for the current state of the CommunicationRequest.
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
     * Captures the reason for the current state of the CommunicationRequest.
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
     * Indicates the level of authority/intentionality associated with the CommunicationRequest and where the request fits into the workflow chain.
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
     * Indicates the level of authority/intentionality associated with the CommunicationRequest and where the request fits into the workflow chain.
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
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
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
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
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
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
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
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
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
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
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
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
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
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
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
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
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
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
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
     * Adds as medium
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $medium
     */
    public function addToMedium(\TKusy\Hl7Fhir\R5\CodeableConceptType $medium)
    {
        $this->medium[] = $medium;
        return $this;
    }

    /**
     * isset medium
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMedium($index)
    {
        return isset($this->medium[$index]);
    }

    /**
     * unset medium
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMedium($index)
    {
        unset($this->medium[$index]);
    }

    /**
     * Gets as medium
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Sets a new medium
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $medium
     * @return self
     */
    public function setMedium(array $medium = null)
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient or group that is the focus of this communication request.
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
     * The patient or group that is the focus of this communication request.
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
     * Adds as about
     *
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $about
     */
    public function addToAbout(\TKusy\Hl7Fhir\R5\ReferenceType $about)
    {
        $this->about[] = $about;
        return $this;
    }

    /**
     * isset about
     *
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAbout($index)
    {
        return isset($this->about[$index]);
    }

    /**
     * unset about
     *
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAbout($index)
    {
        unset($this->about[$index]);
    }

    /**
     * Gets as about
     *
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Sets a new about
     *
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $about
     * @return self
     */
    public function setAbout(array $about = null)
    {
        $this->about = $about;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter during which this CommunicationRequest was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this CommunicationRequest was created or to which the creation of this record is tightly associated.
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
     * Adds as payload
     *
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CommunicationRequestPayloadType $payload
     */
    public function addToPayload(\TKusy\Hl7Fhir\R5\CommunicationRequestPayloadType $payload)
    {
        $this->payload[] = $payload;
        return $this;
    }

    /**
     * isset payload
     *
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayload($index)
    {
        return isset($this->payload[$index]);
    }

    /**
     * unset payload
     *
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayload($index)
    {
        unset($this->payload[$index]);
    }

    /**
     * Gets as payload
     *
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     *
     * @return \TKusy\Hl7Fhir\R5\CommunicationRequestPayloadType[]
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Sets a new payload
     *
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     *
     * @param \TKusy\Hl7Fhir\R5\CommunicationRequestPayloadType[] $payload
     * @return self
     */
    public function setPayload(array $payload = null)
    {
        $this->payload = $payload;
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
     * Gets as authoredOn
     *
     * For draft requests, indicates the date of initial creation. For requests with other statuses, indicates the date of activation.
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
     * For draft requests, indicates the date of initial creation. For requests with other statuses, indicates the date of activation.
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
     * The device, individual, or organization who asks for the information to be shared.
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
     * The device, individual, or organization who asks for the information to be shared.
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
     * Adds as recipient
     *
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $recipient
     */
    public function addToRecipient(\TKusy\Hl7Fhir\R5\ReferenceType $recipient)
    {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * isset recipient
     *
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecipient($index)
    {
        return isset($this->recipient[$index]);
    }

    /**
     * unset recipient
     *
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecipient($index)
    {
        unset($this->recipient[$index]);
    }

    /**
     * Gets as recipient
     *
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $recipient
     * @return self
     */
    public function setRecipient(array $recipient = null)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Adds as informationProvider
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $informationProvider
     */
    public function addToInformationProvider(\TKusy\Hl7Fhir\R5\ReferenceType $informationProvider)
    {
        $this->informationProvider[] = $informationProvider;
        return $this;
    }

    /**
     * isset informationProvider
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationProvider($index)
    {
        return isset($this->informationProvider[$index]);
    }

    /**
     * unset informationProvider
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationProvider($index)
    {
        unset($this->informationProvider[$index]);
    }

    /**
     * Gets as informationProvider
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getInformationProvider()
    {
        return $this->informationProvider;
    }

    /**
     * Sets a new informationProvider
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $informationProvider
     * @return self
     */
    public function setInformationProvider(array $informationProvider = null)
    {
        $this->informationProvider = $informationProvider;
        return $this;
    }

    /**
     * Adds as reason
     *
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
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
     * Adds as note
     *
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
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
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
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
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
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
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
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
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

