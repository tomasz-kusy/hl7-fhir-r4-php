<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MessageHeaderResponseType
 *
 * The header for a message exchange that is either requesting or responding to an action. The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 * XSD Type: MessageHeader.Response
 */
class MessageHeaderResponseType extends BackboneElementType
{

    /**
     * The Bundle.identifier of the message to which this message is a response.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     *
     * @var \TKusy\Hl7Fhir\R5\ResponseTypeType $code
     */
    private $code = null;

    /**
     * Full details of any issues found in the message.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $details
     */
    private $details = null;

    /**
     * Gets as identifier
     *
     * The Bundle.identifier of the message to which this message is a response.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The Bundle.identifier of the message to which this message is a response.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as code
     *
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     *
     * @return \TKusy\Hl7Fhir\R5\ResponseTypeType
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
     * @param \TKusy\Hl7Fhir\R5\ResponseTypeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\ResponseTypeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as details
     *
     * Full details of any issues found in the message.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $details
     * @return self
     */
    public function setDetails(?\TKusy\Hl7Fhir\R5\ReferenceType $details = null)
    {
        $this->details = $details;
        return $this;
    }


}

