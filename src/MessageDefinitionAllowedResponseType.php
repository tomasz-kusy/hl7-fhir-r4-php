<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MessageDefinitionAllowedResponseType
 *
 * Defines the characteristics of a message that can be shared between systems, including the type of event that initiates the message, the content to be transmitted and what response(s), if any, are permitted.
 * XSD Type: MessageDefinition.AllowedResponse
 */
class MessageDefinitionAllowedResponseType extends BackboneElementType
{

    /**
     * A reference to the message definition that must be adhered to by this supported response.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $message
     */
    private $message = null;

    /**
     * Provides a description of the circumstances in which this response should be used (as opposed to one of the alternative responses).
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $situation
     */
    private $situation = null;

    /**
     * Gets as message
     *
     * A reference to the message definition that must be adhered to by this supported response.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * A reference to the message definition that must be adhered to by this supported response.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $message
     * @return self
     */
    public function setMessage(\TKusy\Hl7FhirR4\CanonicalType $message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as situation
     *
     * Provides a description of the circumstances in which this response should be used (as opposed to one of the alternative responses).
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Sets a new situation
     *
     * Provides a description of the circumstances in which this response should be used (as opposed to one of the alternative responses).
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $situation
     * @return self
     */
    public function setSituation(\TKusy\Hl7FhirR4\MarkdownType $situation)
    {
        $this->situation = $situation;
        return $this;
    }


}

