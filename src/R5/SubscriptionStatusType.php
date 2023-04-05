<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionStatusType
 *
 * The SubscriptionStatus resource describes the state of a Subscription during notifications.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubscriptionStatus
 */
class SubscriptionStatusType extends DomainResourceType
{

    /**
     * The status of the subscription, which marks the server state for managing the subscription.
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionStatusCodesType $status
     */
    private $status = null;

    /**
     * The type of event being conveyed with this notification.
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionNotificationTypeType $type
     */
    private $type = null;

    /**
     * The total number of actual events which have been generated since the Subscription was created (inclusive of this notification) - regardless of how many have been successfully communicated. This number is NOT incremented for handshake and heartbeat notifications.
     *
     * @var \TKusy\Hl7Fhir\R5\Integer64Type $eventsSinceSubscriptionStart
     */
    private $eventsSinceSubscriptionStart = null;

    /**
     * Detailed information about events relevant to this subscription notification.
     *
     * @var \TKusy\Hl7Fhir\R5\SubscriptionStatusNotificationEventType[] $notificationEvent
     */
    private $notificationEvent = null;

    /**
     * The reference to the Subscription which generated this notification.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subscription
     */
    private $subscription = null;

    /**
     * The reference to the SubscriptionTopic for the Subscription which generated this notification.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $topic
     */
    private $topic = null;

    /**
     * A record of errors that occurred when the server processed a notification.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $error
     */
    private $error = null;

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
    public function setStatus(?\TKusy\Hl7Fhir\R5\SubscriptionStatusCodesType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of event being conveyed with this notification.
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionNotificationTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of event being conveyed with this notification.
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionNotificationTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\SubscriptionNotificationTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as eventsSinceSubscriptionStart
     *
     * The total number of actual events which have been generated since the Subscription was created (inclusive of this notification) - regardless of how many have been successfully communicated. This number is NOT incremented for handshake and heartbeat notifications.
     *
     * @return \TKusy\Hl7Fhir\R5\Integer64Type
     */
    public function getEventsSinceSubscriptionStart()
    {
        return $this->eventsSinceSubscriptionStart;
    }

    /**
     * Sets a new eventsSinceSubscriptionStart
     *
     * The total number of actual events which have been generated since the Subscription was created (inclusive of this notification) - regardless of how many have been successfully communicated. This number is NOT incremented for handshake and heartbeat notifications.
     *
     * @param \TKusy\Hl7Fhir\R5\Integer64Type $eventsSinceSubscriptionStart
     * @return self
     */
    public function setEventsSinceSubscriptionStart(?\TKusy\Hl7Fhir\R5\Integer64Type $eventsSinceSubscriptionStart = null)
    {
        $this->eventsSinceSubscriptionStart = $eventsSinceSubscriptionStart;
        return $this;
    }

    /**
     * Adds as notificationEvent
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubscriptionStatusNotificationEventType $notificationEvent
     */
    public function addToNotificationEvent(\TKusy\Hl7Fhir\R5\SubscriptionStatusNotificationEventType $notificationEvent)
    {
        $this->notificationEvent[] = $notificationEvent;
        return $this;
    }

    /**
     * isset notificationEvent
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationEvent($index)
    {
        return isset($this->notificationEvent[$index]);
    }

    /**
     * unset notificationEvent
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationEvent($index)
    {
        unset($this->notificationEvent[$index]);
    }

    /**
     * Gets as notificationEvent
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @return \TKusy\Hl7Fhir\R5\SubscriptionStatusNotificationEventType[]
     */
    public function getNotificationEvent()
    {
        return $this->notificationEvent;
    }

    /**
     * Sets a new notificationEvent
     *
     * Detailed information about events relevant to this subscription notification.
     *
     * @param \TKusy\Hl7Fhir\R5\SubscriptionStatusNotificationEventType[] $notificationEvent
     * @return self
     */
    public function setNotificationEvent(array $notificationEvent = null)
    {
        $this->notificationEvent = $notificationEvent;
        return $this;
    }

    /**
     * Gets as subscription
     *
     * The reference to the Subscription which generated this notification.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Sets a new subscription
     *
     * The reference to the Subscription which generated this notification.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subscription
     * @return self
     */
    public function setSubscription(\TKusy\Hl7Fhir\R5\ReferenceType $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * Gets as topic
     *
     * The reference to the SubscriptionTopic for the Subscription which generated this notification.
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
     * The reference to the SubscriptionTopic for the Subscription which generated this notification.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $topic
     * @return self
     */
    public function setTopic(?\TKusy\Hl7Fhir\R5\CanonicalType $topic = null)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Adds as error
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $error
     */
    public function addToError(\TKusy\Hl7Fhir\R5\CodeableConceptType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * A record of errors that occurred when the server processed a notification.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $error
     * @return self
     */
    public function setError(array $error = null)
    {
        $this->error = $error;
        return $this;
    }


}

