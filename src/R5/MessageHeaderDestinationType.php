<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MessageHeaderDestinationType
 *
 * The header for a message exchange that is either requesting or responding to an action. The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * XSD Type: MessageHeader.Destination
 */
class MessageHeaderDestinationType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\UrlType $endpointUrl
     */
    private $endpointUrl = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $endpointReference
     */
    private $endpointReference = null;

    /**
     * Human-readable name for the target system.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $target
     */
    private $target = null;

    /**
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $receiver
     */
    private $receiver = null;

    /**
     * Gets as endpointUrl
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getEndpointUrl()
    {
        return $this->endpointUrl;
    }

    /**
     * Sets a new endpointUrl
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $endpointUrl
     * @return self
     */
    public function setEndpointUrl(?\TKusy\Hl7Fhir\R5\UrlType $endpointUrl = null)
    {
        $this->endpointUrl = $endpointUrl;
        return $this;
    }

    /**
     * Gets as endpointReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEndpointReference()
    {
        return $this->endpointReference;
    }

    /**
     * Sets a new endpointReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $endpointReference
     * @return self
     */
    public function setEndpointReference(?\TKusy\Hl7Fhir\R5\ReferenceType $endpointReference = null)
    {
        $this->endpointReference = $endpointReference;
        return $this;
    }

    /**
     * Gets as name
     *
     * Human-readable name for the target system.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as target
     *
     * Identifies the target end system in situations where the initial message transmission is to an intermediary system.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $target
     * @return self
     */
    public function setTarget(?\TKusy\Hl7Fhir\R5\ReferenceType $target = null)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as receiver
     *
     * Allows data conveyed by a message to be addressed to a particular person or department when routing to a specific application isn't sufficient.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $receiver
     * @return self
     */
    public function setReceiver(?\TKusy\Hl7Fhir\R5\ReferenceType $receiver = null)
    {
        $this->receiver = $receiver;
        return $this;
    }


}

