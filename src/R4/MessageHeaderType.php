<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MessageHeaderType
 *
 * The header for a message exchange that is either requesting or responding to an action. The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MessageHeader
 */
class MessageHeaderType extends DomainResourceType
{

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events". Alternatively uri to the EventDefinition. (choose any one of event*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType $eventCoding
     */
    private $eventCoding = null;

    /**
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events". Alternatively uri to the EventDefinition. (choose any one of event*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $eventUri
     */
    private $eventUri = null;

    /**
     * The destination application which the message is intended for.
     *
     * @var \TKusy\Hl7Fhir\R4\MessageHeaderDestinationType[] $destination
     */
    private $destination = null;

    /**
     * Identifies the sending system to allow the use of a trust relationship.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $sender
     */
    private $sender = null;

    /**
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $enterer
     */
    private $enterer = null;

    /**
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $author
     */
    private $author = null;

    /**
     * The source application from which this message originated.
     *
     * @var \TKusy\Hl7Fhir\R4\MessageHeaderSourceType $source
     */
    private $source = null;

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $responsible
     */
    private $responsible = null;

    /**
     * Coded indication of the cause for the event - indicates a reason for the occurrence of the event that is a focus of this message.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $reason
     */
    private $reason = null;

    /**
     * Information about the message that this message is a response to. Only present if this message is a response.
     *
     * @var \TKusy\Hl7Fhir\R4\MessageHeaderResponseType $response
     */
    private $response = null;

    /**
     * The actual data of the message - a reference to the root/focus class of the event.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $focus
     */
    private $focus = null;

    /**
     * Permanent link to the MessageDefinition for this message.
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType $definition
     */
    private $definition = null;

    /**
     * Gets as eventCoding
     *
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events". Alternatively uri to the EventDefinition. (choose any one of event*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType
     */
    public function getEventCoding()
    {
        return $this->eventCoding;
    }

    /**
     * Sets a new eventCoding
     *
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events". Alternatively uri to the EventDefinition. (choose any one of event*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType $eventCoding
     * @return self
     */
    public function setEventCoding(\TKusy\Hl7Fhir\R4\CodingType $eventCoding)
    {
        $this->eventCoding = $eventCoding;
        return $this;
    }

    /**
     * Gets as eventUri
     *
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events". Alternatively uri to the EventDefinition. (choose any one of event*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getEventUri()
    {
        return $this->eventUri;
    }

    /**
     * Sets a new eventUri
     *
     * Code that identifies the event this message represents and connects it with its definition. Events defined as part of the FHIR specification have the system value "http://terminology.hl7.org/CodeSystem/message-events". Alternatively uri to the EventDefinition. (choose any one of event*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $eventUri
     * @return self
     */
    public function setEventUri(\TKusy\Hl7Fhir\R4\UriType $eventUri)
    {
        $this->eventUri = $eventUri;
        return $this;
    }

    /**
     * Adds as destination
     *
     * The destination application which the message is intended for.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MessageHeaderDestinationType $destination
     */
    public function addToDestination(\TKusy\Hl7Fhir\R4\MessageHeaderDestinationType $destination)
    {
        $this->destination[] = $destination;
        return $this;
    }

    /**
     * isset destination
     *
     * The destination application which the message is intended for.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestination($index)
    {
        return isset($this->destination[$index]);
    }

    /**
     * unset destination
     *
     * The destination application which the message is intended for.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestination($index)
    {
        unset($this->destination[$index]);
    }

    /**
     * Gets as destination
     *
     * The destination application which the message is intended for.
     *
     * @return \TKusy\Hl7Fhir\R4\MessageHeaderDestinationType[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * The destination application which the message is intended for.
     *
     * @param \TKusy\Hl7Fhir\R4\MessageHeaderDestinationType[] $destination
     * @return self
     */
    public function setDestination(array $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as sender
     *
     * Identifies the sending system to allow the use of a trust relationship.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * Identifies the sending system to allow the use of a trust relationship.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $sender
     * @return self
     */
    public function setSender(\TKusy\Hl7Fhir\R4\ReferenceType $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Gets as enterer
     *
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * Sets a new enterer
     *
     * The person or device that performed the data entry leading to this message. When there is more than one candidate, pick the most proximal to the message. Can provide other enterers in extensions.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $enterer
     * @return self
     */
    public function setEnterer(\TKusy\Hl7Fhir\R4\ReferenceType $enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Gets as author
     *
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * The logical author of the message - the person or device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $author
     * @return self
     */
    public function setAuthor(\TKusy\Hl7Fhir\R4\ReferenceType $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as source
     *
     * The source application from which this message originated.
     *
     * @return \TKusy\Hl7Fhir\R4\MessageHeaderSourceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The source application from which this message originated.
     *
     * @param \TKusy\Hl7Fhir\R4\MessageHeaderSourceType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7Fhir\R4\MessageHeaderSourceType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as responsible
     *
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Sets a new responsible
     *
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $responsible
     * @return self
     */
    public function setResponsible(\TKusy\Hl7Fhir\R4\ReferenceType $responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Coded indication of the cause for the event - indicates a reason for the occurrence of the event that is a focus of this message.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Coded indication of the cause for the event - indicates a reason for the occurrence of the event that is a focus of this message.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $reason
     * @return self
     */
    public function setReason(\TKusy\Hl7Fhir\R4\CodeableConceptType $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as response
     *
     * Information about the message that this message is a response to. Only present if this message is a response.
     *
     * @return \TKusy\Hl7Fhir\R4\MessageHeaderResponseType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * Information about the message that this message is a response to. Only present if this message is a response.
     *
     * @param \TKusy\Hl7Fhir\R4\MessageHeaderResponseType $response
     * @return self
     */
    public function setResponse(\TKusy\Hl7Fhir\R4\MessageHeaderResponseType $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Adds as focus
     *
     * The actual data of the message - a reference to the root/focus class of the event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $focus
     */
    public function addToFocus(\TKusy\Hl7Fhir\R4\ReferenceType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * The actual data of the message - a reference to the root/focus class of the event.
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
     * The actual data of the message - a reference to the root/focus class of the event.
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
     * The actual data of the message - a reference to the root/focus class of the event.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The actual data of the message - a reference to the root/focus class of the event.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $focus
     * @return self
     */
    public function setFocus(array $focus)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as definition
     *
     * Permanent link to the MessageDefinition for this message.
     *
     * @return \TKusy\Hl7Fhir\R4\CanonicalType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * Permanent link to the MessageDefinition for this message.
     *
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7Fhir\R4\CanonicalType $definition)
    {
        $this->definition = $definition;
        return $this;
    }


}

