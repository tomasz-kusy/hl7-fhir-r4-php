<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MessageHeaderType
 *
 * The header for a message exchange that is either requesting or responding to an action. The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MessageHeader
 */
class MessageHeaderType extends DomainResourceType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $eventCoding
     */
    private $eventCoding = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $eventCanonical
     */
    private $eventCanonical = null;

    /**
     * The destination application which the message is intended for.
     *
     * @var \TKusy\Hl7Fhir\R5\MessageHeaderDestinationType[] $destination
     */
    private $destination = null;

    /**
     * Identifies the sending system to allow the use of a trust relationship.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $sender
     */
    private $sender = null;

    /**
     * The logical author of the message - the personor device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * The source application from which this message originated.
     *
     * @var \TKusy\Hl7Fhir\R5\MessageHeaderSourceType $source
     */
    private $source = null;

    /**
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $responsible
     */
    private $responsible = null;

    /**
     * Coded indication of the cause for the event - indicates a reason for the occurrence of the event that is a focus of this message.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    private $reason = null;

    /**
     * Information about the message that this message is a response to. Only present if this message is a response.
     *
     * @var \TKusy\Hl7Fhir\R5\MessageHeaderResponseType $response
     */
    private $response = null;

    /**
     * The actual data of the message - a reference to the root/focus class of the event. This is allowed to be a Parameters resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     */
    private $focus = null;

    /**
     * Permanent link to the MessageDefinition for this message.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $definition
     */
    private $definition = null;

    /**
     * Gets as eventCoding
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getEventCoding()
    {
        return $this->eventCoding;
    }

    /**
     * Sets a new eventCoding
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $eventCoding
     * @return self
     */
    public function setEventCoding(?\TKusy\Hl7Fhir\R5\CodingType $eventCoding = null)
    {
        $this->eventCoding = $eventCoding;
        return $this;
    }

    /**
     * Gets as eventCanonical
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getEventCanonical()
    {
        return $this->eventCanonical;
    }

    /**
     * Sets a new eventCanonical
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $eventCanonical
     * @return self
     */
    public function setEventCanonical(?\TKusy\Hl7Fhir\R5\CanonicalType $eventCanonical = null)
    {
        $this->eventCanonical = $eventCanonical;
        return $this;
    }

    /**
     * Adds as destination
     *
     * The destination application which the message is intended for.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MessageHeaderDestinationType $destination
     */
    public function addToDestination(\TKusy\Hl7Fhir\R5\MessageHeaderDestinationType $destination)
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
     * @return \TKusy\Hl7Fhir\R5\MessageHeaderDestinationType[]
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
     * @param \TKusy\Hl7Fhir\R5\MessageHeaderDestinationType[] $destination
     * @return self
     */
    public function setDestination(array $destination = null)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as sender
     *
     * Identifies the sending system to allow the use of a trust relationship.
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
     * Identifies the sending system to allow the use of a trust relationship.
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
     * Gets as author
     *
     * The logical author of the message - the personor device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
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
     * The logical author of the message - the personor device that decided the described event should happen. When there is more than one candidate, pick the most proximal to the MessageHeader. Can provide other authors in extensions.
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
     * Gets as source
     *
     * The source application from which this message originated.
     *
     * @return \TKusy\Hl7Fhir\R5\MessageHeaderSourceType
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
     * @param \TKusy\Hl7Fhir\R5\MessageHeaderSourceType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7Fhir\R5\MessageHeaderSourceType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as responsible
     *
     * The person or organization that accepts overall responsibility for the contents of the message. The implication is that the message event happened under the policies of the responsible party.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $responsible
     * @return self
     */
    public function setResponsible(?\TKusy\Hl7Fhir\R5\ReferenceType $responsible = null)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Coded indication of the cause for the event - indicates a reason for the occurrence of the event that is a focus of this message.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as response
     *
     * Information about the message that this message is a response to. Only present if this message is a response.
     *
     * @return \TKusy\Hl7Fhir\R5\MessageHeaderResponseType
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
     * @param \TKusy\Hl7Fhir\R5\MessageHeaderResponseType $response
     * @return self
     */
    public function setResponse(?\TKusy\Hl7Fhir\R5\MessageHeaderResponseType $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Adds as focus
     *
     * The actual data of the message - a reference to the root/focus class of the event. This is allowed to be a Parameters resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $focus
     */
    public function addToFocus(\TKusy\Hl7Fhir\R5\ReferenceType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * The actual data of the message - a reference to the root/focus class of the event. This is allowed to be a Parameters resource.
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
     * The actual data of the message - a reference to the root/focus class of the event. This is allowed to be a Parameters resource.
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
     * The actual data of the message - a reference to the root/focus class of the event. This is allowed to be a Parameters resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The actual data of the message - a reference to the root/focus class of the event. This is allowed to be a Parameters resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $focus
     * @return self
     */
    public function setFocus(array $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as definition
     *
     * Permanent link to the MessageDefinition for this message.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
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
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $definition
     * @return self
     */
    public function setDefinition(?\TKusy\Hl7Fhir\R5\CanonicalType $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }


}

