<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MessageHeaderDestinationType
 *
 * The header for a message exchange that is either requesting or responding to an action. The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * XSD Type: MessageHeader.Destination
 */
class MessageHeaderDestinationType extends BackboneElementType
{

    /**
     * Human-readable name for the target system.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $target
     */
    private $target = null;

    /**
     * Indicates where the message should be routed to.
     *
     * @var \TKusy\Hl7FhirR4\UrlType $endpoint
     */
    private $endpoint = null;

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $receiver
     */
    private $receiver = null;

    /**
     * Gets as name
     *
     * Human-readable name for the target system.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Human-readable name for the target system.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as target
     *
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $target
     * @return self
     */
    public function setTarget(\TKusy\Hl7FhirR4\ReferenceType $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as endpoint
     *
     * Indicates where the message should be routed to.
     *
     * @return \TKusy\Hl7FhirR4\UrlType
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * Indicates where the message should be routed to.
     *
     * @param \TKusy\Hl7FhirR4\UrlType $endpoint
     * @return self
     */
    public function setEndpoint(\TKusy\Hl7FhirR4\UrlType $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Gets as receiver
     *
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Sets a new receiver
     *
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $receiver
     * @return self
     */
    public function setReceiver(\TKusy\Hl7FhirR4\ReferenceType $receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }


}

