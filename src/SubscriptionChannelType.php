<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubscriptionChannelType
 *
 * The subscription resource is used to define a push-based subscription from a server to another system. Once a subscription is registered with the server, the server checks every resource that is created or updated, and if the resource matches the given criteria, it sends a message on the defined "channel" so that another system can take an appropriate action.
 * XSD Type: Subscription.Channel
 */
class SubscriptionChannelType extends BackboneElementType
{

    /**
     * The type of channel to send notifications on.
     *
     * @var \TKusy\Hl7FhirR4\SubscriptionChannelTypeType $type
     */
    private $type = null;

    /**
     * The url that describes the actual end-point to send messages to.
     *
     * @var \TKusy\Hl7FhirR4\UrlType $endpoint
     */
    private $endpoint = null;

    /**
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification. The mime type "text/plain" may also be used for Email and SMS subscriptions.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $payload
     */
    private $payload = null;

    /**
     * Additional headers / information to send as part of the notification.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $header
     */
    private $header = [
        
    ];

    /**
     * Gets as type
     *
     * The type of channel to send notifications on.
     *
     * @return \TKusy\Hl7FhirR4\SubscriptionChannelTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of channel to send notifications on.
     *
     * @param \TKusy\Hl7FhirR4\SubscriptionChannelTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\SubscriptionChannelTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as endpoint
     *
     * The url that describes the actual end-point to send messages to.
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
     * The url that describes the actual end-point to send messages to.
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
     * Gets as payload
     *
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification. The mime type "text/plain" may also be used for Email and SMS subscriptions.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Sets a new payload
     *
     * The mime type to send the payload in - either application/fhir+xml, or application/fhir+json. If the payload is not present, then there is no payload in the notification, just a notification. The mime type "text/plain" may also be used for Email and SMS subscriptions.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $payload
     * @return self
     */
    public function setPayload(\TKusy\Hl7FhirR4\CodeType $payload)
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * Adds as header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $header
     */
    public function addToHeader(\TKusy\Hl7FhirR4\StringType $header)
    {
        $this->header[] = $header;
        return $this;
    }

    /**
     * isset header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHeader($index)
    {
        return isset($this->header[$index]);
    }

    /**
     * unset header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHeader($index)
    {
        unset($this->header[$index]);
    }

    /**
     * Gets as header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * Additional headers / information to send as part of the notification.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $header
     * @return self
     */
    public function setHeader(array $header)
    {
        $this->header = $header;
        return $this;
    }


}

