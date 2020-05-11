<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CommunicationRequestType
 *
 * A request to convey information; e.g. the CDS system proposes that an alert be sent to a responsible provider, the CDS system proposes that the public health agency be notified about a reportable condition.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CommunicationRequest
 */
class CommunicationRequestType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan or proposal that is fulfilled in whole or in part by this request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $replaces
     */
    private $replaces = null;

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition, prescription or similar form.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * The status of the proposal or order.
     *
     * @var \TKusy\Hl7FhirR4\RequestStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the CommunicationRequest.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
     *
     * @var \TKusy\Hl7FhirR4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $medium
     */
    private $medium = null;

    /**
     * The patient or group that is the focus of this communication request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $about
     */
    private $about = null;

    /**
     * The Encounter during which this CommunicationRequest was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     *
     * @var \TKusy\Hl7FhirR4\CommunicationRequestPayloadType[] $payload
     */
    private $payload = null;

    /**
     * The time when this communication is to occur. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * The time when this communication is to occur. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * For draft requests, indicates the date of initial creation. For requests with other statuses, indicates the date of activation.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The device, individual, or organization who initiated the request and has responsibility for its activation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $requester
     */
    private $requester = null;

    /**
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $recipient
     */
    private $recipient = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $sender
     */
    private $sender = null;

    /**
     * Describes why the request is being made in coded or textual form.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Indicates another resource whose existence justifies this request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this communication request by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * The status of the proposal or order.
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
     * The status of the proposal or order.
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
     * Gets as statusReason
     *
     * Captures the reason for the current state of the CommunicationRequest.
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
     * Captures the reason for the current state of the CommunicationRequest.
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
     * Adds as category
     *
     * The type of message to be sent such as alert, notification, reminder, instruction, etc.
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
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
     * Characterizes how quickly the proposed act must be initiated. Includes concepts such as stat, urgent, routine.
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
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
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
     * If true indicates that the CommunicationRequest is asking for the specified action to *not* occur.
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
     * Adds as medium
     *
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $medium
     */
    public function addToMedium(\TKusy\Hl7FhirR4\CodeableConceptType $medium)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $medium
     * @return self
     */
    public function setMedium(array $medium)
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient or group that is the focus of this communication request.
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
     * The patient or group that is the focus of this communication request.
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
     * Adds as about
     *
     * Other resources that pertain to this communication request and to which this communication request should be associated.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $about
     */
    public function addToAbout(\TKusy\Hl7FhirR4\ReferenceType $about)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $about
     * @return self
     */
    public function setAbout(array $about)
    {
        $this->about = $about;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter during which this CommunicationRequest was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this CommunicationRequest was created or to which the creation of this record is tightly associated.
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
     * Adds as payload
     *
     * Text, attachment(s), or resource(s) to be communicated to the recipient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CommunicationRequestPayloadType $payload
     */
    public function addToPayload(\TKusy\Hl7FhirR4\CommunicationRequestPayloadType $payload)
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
     * @return \TKusy\Hl7FhirR4\CommunicationRequestPayloadType[]
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
     * @param \TKusy\Hl7FhirR4\CommunicationRequestPayloadType[] $payload
     * @return self
     */
    public function setPayload(array $payload)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * The time when this communication is to occur. (choose any one of occurrence*, but only one)
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
     * The time when this communication is to occur. (choose any one of occurrence*, but only one)
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
     * The time when this communication is to occur. (choose any one of occurrence*, but only one)
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
     * The time when this communication is to occur. (choose any one of occurrence*, but only one)
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
     * Gets as authoredOn
     *
     * For draft requests, indicates the date of initial creation. For requests with other statuses, indicates the date of activation.
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
     * For draft requests, indicates the date of initial creation. For requests with other statuses, indicates the date of activation.
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
     * The device, individual, or organization who initiated the request and has responsibility for its activation.
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
     * The device, individual, or organization who initiated the request and has responsibility for its activation.
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
     * Adds as recipient
     *
     * The entity (e.g. person, organization, clinical information system, device, group, or care team) which is the intended target of the communication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $recipient
     */
    public function addToRecipient(\TKusy\Hl7FhirR4\ReferenceType $recipient)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $recipient
     * @return self
     */
    public function setRecipient(array $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as sender
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is to be the source of the communication.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $sender
     * @return self
     */
    public function setSender(\TKusy\Hl7FhirR4\ReferenceType $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
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
     * Describes why the request is being made in coded or textual form.
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
     * Indicates another resource whose existence justifies this request.
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
     * Indicates another resource whose existence justifies this request.
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
     * Indicates another resource whose existence justifies this request.
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
     * Indicates another resource whose existence justifies this request.
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
     * Indicates another resource whose existence justifies this request.
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
     * Comments made about the request by the requester, sender, recipient, subject or other participants.
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

