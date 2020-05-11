<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * A profile that reflects constraints for the focal resource (and potentially for related resources).
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $profile
     */
    private $profile = null;

    /**
     * Identifies the minimum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $min
     */
    private $min = null;

    /**
     * Identifies the maximum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @var string $max
     */
    private $max = null;

    /**
     * Gets as code
     *
     * The kind of resource that must be the focus for this message.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
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
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as profile
     *
     * A profile that reflects constraints for the focal resource (and potentially for related resources).
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
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
     * @param \TKusy\Hl7FhirR4\CanonicalType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7FhirR4\CanonicalType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as min
     *
     * Identifies the minimum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
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
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $min
     * @return self
     */
    public function setMin(\TKusy\Hl7FhirR4\UnsignedIntType $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * Identifies the maximum number of resources of this type that must be pointed to by a message in order for it to be valid against this MessageDefinition.
     *
     * @return string
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
     * @param string $max
     * @return self
     */
    public function setMax($max)
    {
        $this->max = $max;
        return $this;
    }


}

