<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MessageDefinitionFocusType
 *
 * Defines the characteristics of a message that can be shared between systems, including the type of event that initiates the message, the content to be transmitted and what response(s), if any, are permitted.
 * XSD Type: MessageDefinition.Focus
 */
class MessageDefinitionFocusType extends BackboneElementType
{

    /**
     * The kind of resource that must be the focus for this message.
     *
     * @var \TKusy\Hl7Fhir\R5\ResourceTypeType $code
     */
    private $code = null;

    /**
     * A profile that reflects constraints for the focal resource (and potentially for related resources).
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $profile
     */
    private $profile = null;

    /**
     * Identifies the minimum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $min
     */
    private $min = null;

    /**
     * Identifies the maximum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $max
     */
    private $max = null;

    /**
     * Gets as code
     *
     * The kind of resource that must be the focus for this message.
     *
     * @return \TKusy\Hl7Fhir\R5\ResourceTypeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The kind of resource that must be the focus for this message.
     *
     * @param \TKusy\Hl7Fhir\R5\ResourceTypeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\ResourceTypeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as profile
     *
     * A profile that reflects constraints for the focal resource (and potentially for related resources).
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * A profile that reflects constraints for the focal resource (and potentially for related resources).
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $profile
     * @return self
     */
    public function setProfile(?\TKusy\Hl7Fhir\R5\CanonicalType $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as min
     *
     * Identifies the minimum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * Identifies the minimum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $min
     * @return self
     */
    public function setMin(\TKusy\Hl7Fhir\R5\UnsignedIntType $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * Identifies the maximum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * Identifies the maximum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $max
     * @return self
     */
    public function setMax(?\TKusy\Hl7Fhir\R5\StringType $max = null)
    {
        $this->max = $max;
        return $this;
    }


}

