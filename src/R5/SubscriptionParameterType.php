<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionParameterType
 *
 * The subscription resource describes a particular client's request to be notified about a SubscriptionTopic.
 * XSD Type: Subscription.Parameter
 */
class SubscriptionParameterType extends BackboneElementType
{

    /**
     * Parameter name for information passed to the channel for notifications, for example in the case of a REST hook wanting to pass through an authorization header, the name would be Authorization.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Parameter value for information passed to the channel for notifications, for example in the case of a REST hook wanting to pass through an authorization header, the value would be `Bearer 0193...`.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Gets as name
     *
     * Parameter name for information passed to the channel for notifications, for example in the case of a REST hook wanting to pass through an authorization header, the name would be Authorization.
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
     * Parameter name for information passed to the channel for notifications, for example in the case of a REST hook wanting to pass through an authorization header, the name would be Authorization.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as value
     *
     * Parameter value for information passed to the channel for notifications, for example in the case of a REST hook wanting to pass through an authorization header, the value would be `Bearer 0193...`.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Parameter value for information passed to the channel for notifications, for example in the case of a REST hook wanting to pass through an authorization header, the value would be `Bearer 0193...`.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

