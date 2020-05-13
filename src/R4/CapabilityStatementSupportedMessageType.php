<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CapabilityStatementSupportedMessageType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * XSD Type: CapabilityStatement.SupportedMessage
 */
class CapabilityStatementSupportedMessageType extends BackboneElementType
{

    /**
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @var \TKusy\Hl7Fhir\R4\EventCapabilityModeType $mode
     */
    private $mode = null;

    /**
     * Points to a message definition that identifies the messaging event, message structure, allowed responses, etc.
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType $definition
     */
    private $definition = null;

    /**
     * Gets as mode
     *
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @return \TKusy\Hl7Fhir\R4\EventCapabilityModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * The mode of this event declaration - whether application is sender or receiver.
     *
     * @param \TKusy\Hl7Fhir\R4\EventCapabilityModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7Fhir\R4\EventCapabilityModeType $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as definition
     *
     * Points to a message definition that identifies the messaging event, message structure, allowed responses, etc.
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
     * Points to a message definition that identifies the messaging event, message structure, allowed responses, etc.
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

