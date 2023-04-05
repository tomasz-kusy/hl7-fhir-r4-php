<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionType
 *
 * The subscription resource describes a particular client's request to be notified about a SubscriptionTopic.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Subscription
 */
class SubscriptionType extends DomainResourceType
{

    /**
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A natural language name identifying the subscription.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionStatusCodesType $status
     */
    private $status = null;

    /**
     * The reference to the subscription topic to be notified about.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $topic
     */
    private $topic = null;

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType[] $contact
     */
    private $contact = null;

    /**
     * The time for the server to turn the subscription off.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $end
     */
    private $end = null;

    /**
     * Entity with authorization to make subsequent revisions to the Subscription and also determines what data the subscription is authorized to disclose.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $managingEntity
     */
    private $managingEntity = null;

    /**
     * A description of why this subscription is defined.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $reason
     */
    private $reason = null;

    /**
     * The filter properties to be applied to narrow the subscription topic stream. When multiple filters are applied, evaluates to true if all the conditions applicable to that resource are met; otherwise it returns false (i.e., logical AND).
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionFilterByType[] $filterBy
     */
    private $filterBy = null;

    /**
     * The type of channel to send notifications on.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $channelType
     */
    private $channelType = null;

    /**
     * The url that describes the actual end-point to send notifications to.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType $endpoint
     */
    private $endpoint = null;

    /**
     * Channel-dependent information to send as part of the notification (e.g., HTTP Headers).
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel with an interval period equal to this elements integer value in seconds. If not present, a heartbeat notification is not sent.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $heartbeatPeriod
     */
    private $heartbeatPeriod = null;

    /**
     * If present, the maximum amount of time a server will allow before failing a notification attempt.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $timeout
     */
    private $timeout = null;

    /**
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or `application/fhir+json`. Note that:
     *
     * * clients may request notifications in a specific FHIR version by using the [FHIR Version Parameter](http.html#version-parameter) - e.g., `application/fhir+json; fhirVersion=4.0`.
     *
     * * additional MIME types can be allowed by channels - e.g., `text/plain` and `text/html` are defined by the Email channel.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $contentType
     */
    private $contentType = null;

    /**
     * How much of the resource content to deliver in the notification payload. The choices are an empty payload, only the resource id, or the full resource content.
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionPayloadContentType $content
     */
    private $content = null;

    /**
     * If present, the maximum number of events that will be included in a notification bundle. Note that this is not a strict limit on the number of entries in a bundle, as dependent resources can be included.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $maxCount
     */
    private $maxCount = null;

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as name
     *
     * A natural language name identifying the subscription.
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
     * A natural language name identifying the subscription.
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
     * Gets as status
     *
     * The status of the subscription, which marks the server state for managing the subscription.
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the subscription, which marks the server state for managing the subscription.
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\SubscriptionStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as topic
     *
     * The reference to the subscription topic to be notified about.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * The reference to the subscription topic to be notified about.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $topic
     * @return self
     */
    public function setTopic(\TKusy\Hl7Fhir\R5\CanonicalType $topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R5\ContactPointType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactPointType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactPointType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as end
     *
     * The time for the server to turn the subscription off.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The time for the server to turn the subscription off.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $end
     * @return self
     */
    public function setEnd(?\TKusy\Hl7Fhir\R5\InstantType $end = null)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as managingEntity
     *
     * Entity with authorization to make subsequent revisions to the Subscription and also determines what data the subscription is authorized to disclose.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getManagingEntity()
    {
        return $this->managingEntity;
    }

    /**
     * Sets a new managingEntity
     *
     * Entity with authorization to make subsequent revisions to the Subscription and also determines what data the subscription is authorized to disclose.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $managingEntity
     * @return self
     */
    public function setManagingEntity(?\TKusy\Hl7Fhir\R5\ReferenceType $managingEntity = null)
    {
        $this->managingEntity = $managingEntity;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A description of why this subscription is defined.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A description of why this subscription is defined.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\StringType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Adds as filterBy
     *
     * The filter properties to be applied to narrow the subscription topic stream. When multiple filters are applied, evaluates to true if all the conditions applicable to that resource are met; otherwise it returns false (i.e., logical AND).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubscriptionFilterByType $filterBy
     */
    public function addToFilterBy(\TKusy\Hl7Fhir\R5\SubscriptionFilterByType $filterBy)
    {
        $this->filterBy[] = $filterBy;
        return $this;
    }

    /**
     * isset filterBy
     *
     * The filter properties to be applied to narrow the subscription topic stream. When multiple filters are applied, evaluates to true if all the conditions applicable to that resource are met; otherwise it returns false (i.e., logical AND).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFilterBy($index)
    {
        return isset($this->filterBy[$index]);
    }

    /**
     * unset filterBy
     *
     * The filter properties to be applied to narrow the subscription topic stream. When multiple filters are applied, evaluates to true if all the conditions applicable to that resource are met; otherwise it returns false (i.e., logical AND).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFilterBy($index)
    {
        unset($this->filterBy[$index]);
    }

    /**
     * Gets as filterBy
     *
     * The filter properties to be applied to narrow the subscription topic stream. When multiple filters are applied, evaluates to true if all the conditions applicable to that resource are met; otherwise it returns false (i.e., logical AND).
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionFilterByType[]
     */
    public function getFilterBy()
    {
        return $this->filterBy;
    }

    /**
     * Sets a new filterBy
     *
     * The filter properties to be applied to narrow the subscription topic stream. When multiple filters are applied, evaluates to true if all the conditions applicable to that resource are met; otherwise it returns false (i.e., logical AND).
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionFilterByType[] $filterBy
     * @return self
     */
    public function setFilterBy(array $filterBy = null)
    {
        $this->filterBy = $filterBy;
        return $this;
    }

    /**
     * Gets as channelType
     *
     * The type of channel to send notifications on.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getChannelType()
    {
        return $this->channelType;
    }

    /**
     * Sets a new channelType
     *
     * The type of channel to send notifications on.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $channelType
     * @return self
     */
    public function setChannelType(\TKusy\Hl7Fhir\R5\CodingType $channelType)
    {
        $this->channelType = $channelType;
        return $this;
    }

    /**
     * Gets as endpoint
     *
     * The url that describes the actual end-point to send notifications to.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * The url that describes the actual end-point to send notifications to.
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType $endpoint
     * @return self
     */
    public function setEndpoint(?\TKusy\Hl7Fhir\R5\UrlType $endpoint = null)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP Headers).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubscriptionParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\SubscriptionParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP Headers).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP Headers).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP Headers).
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * Channel-dependent information to send as part of the notification (e.g., HTTP Headers).
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Gets as heartbeatPeriod
     *
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel with an interval period equal to this elements integer value in seconds. If not present, a heartbeat notification is not sent.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getHeartbeatPeriod()
    {
        return $this->heartbeatPeriod;
    }

    /**
     * Sets a new heartbeatPeriod
     *
     * If present, a 'heartbeat' notification (keep-alive) is sent via this channel with an interval period equal to this elements integer value in seconds. If not present, a heartbeat notification is not sent.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $heartbeatPeriod
     * @return self
     */
    public function setHeartbeatPeriod(?\TKusy\Hl7Fhir\R5\UnsignedIntType $heartbeatPeriod = null)
    {
        $this->heartbeatPeriod = $heartbeatPeriod;
        return $this;
    }

    /**
     * Gets as timeout
     *
     * If present, the maximum amount of time a server will allow before failing a notification attempt.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Sets a new timeout
     *
     * If present, the maximum amount of time a server will allow before failing a notification attempt.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $timeout
     * @return self
     */
    public function setTimeout(?\TKusy\Hl7Fhir\R5\UnsignedIntType $timeout = null)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * Gets as contentType
     *
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or `application/fhir+json`. Note that:
     *
     * * clients may request notifications in a specific FHIR version by using the [FHIR Version Parameter](http.html#version-parameter) - e.g., `application/fhir+json; fhirVersion=4.0`.
     *
     * * additional MIME types can be allowed by channels - e.g., `text/plain` and `text/html` are defined by the Email channel.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * The MIME type to send the payload in - e.g., `application/fhir+xml` or `application/fhir+json`. Note that:
     *
     * * clients may request notifications in a specific FHIR version by using the [FHIR Version Parameter](http.html#version-parameter) - e.g., `application/fhir+json; fhirVersion=4.0`.
     *
     * * additional MIME types can be allowed by channels - e.g., `text/plain` and `text/html` are defined by the Email channel.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $contentType
     * @return self
     */
    public function setContentType(?\TKusy\Hl7Fhir\R5\CodeType $contentType = null)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as content
     *
     * How much of the resource content to deliver in the notification payload. The choices are an empty payload, only the resource id, or the full resource content.
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionPayloadContentType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * How much of the resource content to deliver in the notification payload. The choices are an empty payload, only the resource id, or the full resource content.
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionPayloadContentType $content
     * @return self
     */
    public function setContent(?\TKusy\Hl7Fhir\R5\SubscriptionPayloadContentType $content = null)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as maxCount
     *
     * If present, the maximum number of events that will be included in a notification bundle. Note that this is not a strict limit on the number of entries in a bundle, as dependent resources can be included.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getMaxCount()
    {
        return $this->maxCount;
    }

    /**
     * Sets a new maxCount
     *
     * If present, the maximum number of events that will be included in a notification bundle. Note that this is not a strict limit on the number of entries in a bundle, as dependent resources can be included.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $maxCount
     * @return self
     */
    public function setMaxCount(?\TKusy\Hl7Fhir\R5\PositiveIntType $maxCount = null)
    {
        $this->maxCount = $maxCount;
        return $this;
    }


}

