<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubscriptionType
 *
 * The subscription resource is used to define a push-based subscription from a server to another system. Once a subscription is registered with the server, the server checks every resource that is created or updated, and if the resource matches the given criteria, it sends a message on the defined "channel" so that another system can take an appropriate action.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Subscription
 */
class SubscriptionType extends DomainResourceType
{

    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     *
     * @var \TKusy\Hl7FhirR4\SubscriptionStatusType $status
     */
    private $status = null;

    /**
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $contact
     */
    private $contact = null;

    /**
     * The time for the server to turn the subscription off.
     *
     * @var \TKusy\Hl7FhirR4\InstantType $end
     */
    private $end = null;

    /**
     * A description of why this subscription is defined.
     *
     * @var \TKusy\Hl7FhirR4\StringType $reason
     */
    private $reason = null;

    /**
     * The rules that the server should use to determine when to generate notifications for this subscription.
     *
     * @var \TKusy\Hl7FhirR4\StringType $criteria
     */
    private $criteria = null;

    /**
     * A record of the last error that occurred when the server processed a notification.
     *
     * @var \TKusy\Hl7FhirR4\StringType $error
     */
    private $error = null;

    /**
     * Details where to send notifications when resources are received that meet the criteria.
     *
     * @var \TKusy\Hl7FhirR4\SubscriptionChannelType $channel
     */
    private $channel = null;

    /**
     * Gets as status
     *
     * The status of the subscription, which marks the server state for managing the subscription.
     *
     * @return \TKusy\Hl7FhirR4\SubscriptionStatusType
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
     * @param \TKusy\Hl7FhirR4\SubscriptionStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\SubscriptionStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details for a human to contact about the subscription. The primary use of this for system administrator troubleshooting.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContactPointType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\ContactPointType $contact)
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
     * @return \TKusy\Hl7FhirR4\ContactPointType[]
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
     * @param \TKusy\Hl7FhirR4\ContactPointType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as end
     *
     * The time for the server to turn the subscription off.
     *
     * @return \TKusy\Hl7FhirR4\InstantType
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
     * @param \TKusy\Hl7FhirR4\InstantType $end
     * @return self
     */
    public function setEnd(\TKusy\Hl7FhirR4\InstantType $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A description of why this subscription is defined.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $reason
     * @return self
     */
    public function setReason(\TKusy\Hl7FhirR4\StringType $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as criteria
     *
     * The rules that the server should use to determine when to generate notifications for this subscription.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Sets a new criteria
     *
     * The rules that the server should use to determine when to generate notifications for this subscription.
     *
     * @param \TKusy\Hl7FhirR4\StringType $criteria
     * @return self
     */
    public function setCriteria(\TKusy\Hl7FhirR4\StringType $criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Gets as error
     *
     * A record of the last error that occurred when the server processed a notification.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * A record of the last error that occurred when the server processed a notification.
     *
     * @param \TKusy\Hl7FhirR4\StringType $error
     * @return self
     */
    public function setError(\TKusy\Hl7FhirR4\StringType $error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * Gets as channel
     *
     * Details where to send notifications when resources are received that meet the criteria.
     *
     * @return \TKusy\Hl7FhirR4\SubscriptionChannelType
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * Details where to send notifications when resources are received that meet the criteria.
     *
     * @param \TKusy\Hl7FhirR4\SubscriptionChannelType $channel
     * @return self
     */
    public function setChannel(\TKusy\Hl7FhirR4\SubscriptionChannelType $channel)
    {
        $this->channel = $channel;
        return $this;
    }


}

