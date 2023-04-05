<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CommunicationType
 *
 * A clinical or business level record of information being transmitted or shared; e.g. an alert that was sent to a responsible provider, a public health agency communication to a provider/reporter in response to a case report for a reportable condition.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Communication
 */
class CommunicationType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = null;

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $instantiatesUri
     */
    private $instantiatesUri = null;

    /**
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * A larger event (e.g. Communication, Procedure) of which this particular communication is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * Prior communication that this communication is in response to.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $inResponseTo
     */
    private $inResponseTo = null;

    /**
     * The status of the transmission.
     *
     * @var \TKusy\Hl7Fhir\R5\EventStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the Communication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * A channel that was used for this communication (e.g. email, fax).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $medium
     */
    private $medium = null;

    /**
     * The patient or group that was the focus of this communication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * Description of the purpose/content, similar to a subject line in an email.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $topic
     */
    private $topic = null;

    /**
     * Other resources that pertain to this communication and to which this communication should be associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $about
     */
    private $about = null;

    /**
     * The Encounter during which this Communication was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The time when this communication was sent.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $sent
     */
    private $sent = null;

    /**
     * The time when this communication arrived at the destination.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $received
     */
    private $received = null;

    /**
     * The entity (e.g. person, organization, clinical information system, care team or device) which is the target of the communication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $recipient
     */
    private $recipient = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which is the source of the communication.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $sender
     */
    private $sender = null;

    /**
     * The reason or justification for the communication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @var \TKusy\Hl7Fhir\R5\CommunicationPayloadType[] $payload
     */
    private $payload = null;

    /**
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this communication by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to a FHIR-defined protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this Communication.
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
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
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
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
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
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
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
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
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
     * An order, proposal or plan fulfilled in whole or in part by this Communication.
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
     * Adds as partOf
     *
     * A larger event (e.g. Communication, Procedure) of which this particular communication is a component or step.
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
     * A larger event (e.g. Communication, Procedure) of which this particular communication is a component or step.
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
     * A larger event (e.g. Communication, Procedure) of which this particular communication is a component or step.
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
     * A larger event (e.g. Communication, Procedure) of which this particular communication is a component or step.
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
     * A larger event (e.g. Communication, Procedure) of which this particular communication is a component or step.
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
     * Adds as inResponseTo
     *
     * Prior communication that this communication is in response to.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $inResponseTo
     */
    public function addToInResponseTo(\TKusy\Hl7Fhir\R5\ReferenceType $inResponseTo)
    {
        $this->inResponseTo[] = $inResponseTo;
        return $this;
    }

    /**
     * isset inResponseTo
     *
     * Prior communication that this communication is in response to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInResponseTo($index)
    {
        return isset($this->inResponseTo[$index]);
    }

    /**
     * unset inResponseTo
     *
     * Prior communication that this communication is in response to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInResponseTo($index)
    {
        unset($this->inResponseTo[$index]);
    }

    /**
     * Gets as inResponseTo
     *
     * Prior communication that this communication is in response to.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getInResponseTo()
    {
        return $this->inResponseTo;
    }

    /**
     * Sets a new inResponseTo
     *
     * Prior communication that this communication is in response to.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $inResponseTo
     * @return self
     */
    public function setInResponseTo(array $inResponseTo = null)
    {
        $this->inResponseTo = $inResponseTo;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the transmission.
     *
     * @return \TKusy\Hl7Fhir\R5\EventStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the transmission.
     *
     * @param \TKusy\Hl7Fhir\R5\EventStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\EventStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current state of the Communication.
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
     * Captures the reason for the current state of the Communication.
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
     * Adds as category
     *
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
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
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
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
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
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
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
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
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
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
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
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
     * Characterizes how quickly the planned or in progress communication must be addressed. Includes concepts such as stat, urgent, routine.
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
     * The patient or group that was the focus of this communication.
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
     * The patient or group that was the focus of this communication.
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
     * Gets as topic
     *
     * Description of the purpose/content, similar to a subject line in an email.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * Description of the purpose/content, similar to a subject line in an email.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $topic
     * @return self
     */
    public function setTopic(?\TKusy\Hl7Fhir\R5\CodeableConceptType $topic = null)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Adds as about
     *
     * Other resources that pertain to this communication and to which this communication should be associated.
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
     * Other resources that pertain to this communication and to which this communication should be associated.
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
     * Other resources that pertain to this communication and to which this communication should be associated.
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
     * Other resources that pertain to this communication and to which this communication should be associated.
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
     * Other resources that pertain to this communication and to which this communication should be associated.
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
     * The Encounter during which this Communication was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this Communication was created or to which the creation of this record is tightly associated.
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
     * Gets as sent
     *
     * The time when this communication was sent.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Sets a new sent
     *
     * The time when this communication was sent.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $sent
     * @return self
     */
    public function setSent(?\TKusy\Hl7Fhir\R5\DateTimeType $sent = null)
    {
        $this->sent = $sent;
        return $this;
    }

    /**
     * Gets as received
     *
     * The time when this communication arrived at the destination.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Sets a new received
     *
     * The time when this communication arrived at the destination.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $received
     * @return self
     */
    public function setReceived(?\TKusy\Hl7Fhir\R5\DateTimeType $received = null)
    {
        $this->received = $received;
        return $this;
    }

    /**
     * Adds as recipient
     *
     * The entity (e.g. person, organization, clinical information system, care team or device) which is the target of the communication.
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
     * The entity (e.g. person, organization, clinical information system, care team or device) which is the target of the communication.
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
     * The entity (e.g. person, organization, clinical information system, care team or device) which is the target of the communication.
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
     * The entity (e.g. person, organization, clinical information system, care team or device) which is the target of the communication.
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
     * The entity (e.g. person, organization, clinical information system, care team or device) which is the target of the communication.
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
     * Gets as sender
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is the source of the communication.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * The entity (e.g. person, organization, clinical information system, or device) which is the source of the communication.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $sender
     * @return self
     */
    public function setSender(?\TKusy\Hl7Fhir\R5\ReferenceType $sender = null)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The reason or justification for the communication.
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
     * The reason or justification for the communication.
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
     * The reason or justification for the communication.
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
     * The reason or justification for the communication.
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
     * The reason or justification for the communication.
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
     * Adds as payload
     *
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CommunicationPayloadType $payload
     */
    public function addToPayload(\TKusy\Hl7Fhir\R5\CommunicationPayloadType $payload)
    {
        $this->payload[] = $payload;
        return $this;
    }

    /**
     * isset payload
     *
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
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
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
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
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @return \TKusy\Hl7Fhir\R5\CommunicationPayloadType[]
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Sets a new payload
     *
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     *
     * @param \TKusy\Hl7Fhir\R5\CommunicationPayloadType[] $payload
     * @return self
     */
    public function setPayload(array $payload = null)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * Adds as note
     *
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
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
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
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
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
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
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
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
     * Additional notes or commentary about the communication by the sender, receiver or other interested parties.
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

