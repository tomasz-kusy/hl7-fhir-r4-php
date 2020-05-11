<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CapabilityStatementMessagingType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.Messaging
 */
class CapabilityStatementMessagingType extends BackboneElementType
{

    /**
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     *
     * @var \TKusy\Hl7FhirR4\CapabilityStatementEndpointType[] $endpoint
     */
    private $endpoint = null;

    /**
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or how long the cache length on the receiver should be (if a sender).
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $reliableCache
     */
    private $reliableCache = null;

    /**
     * Documentation about the system's messaging capabilities for this endpoint not otherwise documented by the capability statement. For example, the process for becoming an authorized messaging exchange partner.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $documentation
     */
    private $documentation = null;

    /**
     * References to message definitions for messages this system can send or receive.
     *
     * @var \TKusy\Hl7FhirR4\CapabilityStatementSupportedMessageType[] $supportedMessage
     */
    private $supportedMessage = null;

    /**
     * Adds as endpoint
     *
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CapabilityStatementEndpointType $endpoint
     */
    public function addToEndpoint(\TKusy\Hl7FhirR4\CapabilityStatementEndpointType $endpoint)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * isset endpoint
     *
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndpoint($index)
    {
        return isset($this->endpoint[$index]);
    }

    /**
     * unset endpoint
     *
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndpoint($index)
    {
        unset($this->endpoint[$index]);
    }

    /**
     * Gets as endpoint
     *
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     *
     * @return \TKusy\Hl7FhirR4\CapabilityStatementEndpointType[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * An endpoint (network accessible address) to which messages and/or replies are to be sent.
     *
     * @param \TKusy\Hl7FhirR4\CapabilityStatementEndpointType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Gets as reliableCache
     *
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or how long the cache length on the receiver should be (if a sender).
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
     */
    public function getReliableCache()
    {
        return $this->reliableCache;
    }

    /**
     * Sets a new reliableCache
     *
     * Length if the receiver's reliable messaging cache in minutes (if a receiver) or how long the cache length on the receiver should be (if a sender).
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $reliableCache
     * @return self
     */
    public function setReliableCache(\TKusy\Hl7FhirR4\UnsignedIntType $reliableCache)
    {
        $this->reliableCache = $reliableCache;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Documentation about the system's messaging capabilities for this endpoint not otherwise documented by the capability statement. For example, the process for becoming an authorized messaging exchange partner.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Documentation about the system's messaging capabilities for this endpoint not otherwise documented by the capability statement. For example, the process for becoming an authorized messaging exchange partner.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7FhirR4\MarkdownType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as supportedMessage
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CapabilityStatementSupportedMessageType $supportedMessage
     */
    public function addToSupportedMessage(\TKusy\Hl7FhirR4\CapabilityStatementSupportedMessageType $supportedMessage)
    {
        $this->supportedMessage[] = $supportedMessage;
        return $this;
    }

    /**
     * isset supportedMessage
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedMessage($index)
    {
        return isset($this->supportedMessage[$index]);
    }

    /**
     * unset supportedMessage
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedMessage($index)
    {
        unset($this->supportedMessage[$index]);
    }

    /**
     * Gets as supportedMessage
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @return \TKusy\Hl7FhirR4\CapabilityStatementSupportedMessageType[]
     */
    public function getSupportedMessage()
    {
        return $this->supportedMessage;
    }

    /**
     * Sets a new supportedMessage
     *
     * References to message definitions for messages this system can send or receive.
     *
     * @param \TKusy\Hl7FhirR4\CapabilityStatementSupportedMessageType[] $supportedMessage
     * @return self
     */
    public function setSupportedMessage(array $supportedMessage)
    {
        $this->supportedMessage = $supportedMessage;
        return $this;
    }


}

