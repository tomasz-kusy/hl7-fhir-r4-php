<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MessageHeaderResponseType
 *
 * The header for a message exchange that is either requesting or responding to an action. The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * XSD Type: MessageHeader.Response
 */
class MessageHeaderResponseType extends BackboneElementType
{

    /**
     * The MessageHeader.id of the message to which this message is a response.
     *
     * @var \TKusy\Hl7FhirR4\IdType $identifier
     */
    private $identifier = null;

    /**
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     *
     * @var \TKusy\Hl7FhirR4\ResponseTypeType $code
     */
    private $code = null;

    /**
     * Full details of any issues found in the message.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $details
     */
    private $details = null;

    /**
     * Gets as identifier
     *
     * The MessageHeader.id of the message to which this message is a response.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The MessageHeader.id of the message to which this message is a response.
     *
     * @param \TKusy\Hl7FhirR4\IdType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as code
     *
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     *
     * @return \TKusy\Hl7FhirR4\ResponseTypeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     *
     * @param \TKusy\Hl7FhirR4\ResponseTypeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\ResponseTypeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as details
     *
     * Full details of any issues found in the message.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Full details of any issues found in the message.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $details
     * @return self
     */
    public function setDetails(\TKusy\Hl7FhirR4\ReferenceType $details)
    {
        $this->details = $details;
        return $this;
    }


}

