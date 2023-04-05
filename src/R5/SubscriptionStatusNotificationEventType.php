<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubscriptionStatusNotificationEventType
 *
 * The SubscriptionStatus resource describes the state of a Subscription during notifications.
 * XSD Type: SubscriptionStatus.NotificationEvent
 */
class SubscriptionStatusNotificationEventType extends BackboneElementType
{

    /**
     * Either the sequential number of this event in this subscription context or a relative event number for this notification.
     *
     * @var \TKusy\Hl7Fhir\R5\Integer64Type $eventNumber
     */
    private $eventNumber = null;

    /**
     * The actual time this event occurred on the server.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $timestamp
     */
    private $timestamp = null;

    /**
     * The focus of this event. While this will usually be a reference to the focus resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $focus
     */
    private $focus = null;

    /**
     * Additional context information for this event. Generally, this will contain references to additional resources included with the event (e.g., the Patient relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $additionalContext
     */
    private $additionalContext = null;

    /**
     * Gets as eventNumber
     *
     * Either the sequential number of this event in this subscription context or a relative event number for this notification.
     *
     * @return \TKusy\Hl7Fhir\R5\Integer64Type
     */
    public function getEventNumber()
    {
        return $this->eventNumber;
    }

    /**
     * Sets a new eventNumber
     *
     * Either the sequential number of this event in this subscription context or a relative event number for this notification.
     *
     * @param \TKusy\Hl7Fhir\R5\Integer64Type $eventNumber
     * @return self
     */
    public function setEventNumber(\TKusy\Hl7Fhir\R5\Integer64Type $eventNumber)
    {
        $this->eventNumber = $eventNumber;
        return $this;
    }

    /**
     * Gets as timestamp
     *
     * The actual time this event occurred on the server.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Sets a new timestamp
     *
     * The actual time this event occurred on the server.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $timestamp
     * @return self
     */
    public function setTimestamp(?\TKusy\Hl7Fhir\R5\InstantType $timestamp = null)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Gets as focus
     *
     * The focus of this event. While this will usually be a reference to the focus resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The focus of this event. While this will usually be a reference to the focus resource of the event, it MAY contain a reference to a non-FHIR object.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $focus
     * @return self
     */
    public function setFocus(?\TKusy\Hl7Fhir\R5\ReferenceType $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Adds as additionalContext
     *
     * Additional context information for this event. Generally, this will contain references to additional resources included with the event (e.g., the Patient relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $additionalContext
     */
    public function addToAdditionalContext(\TKusy\Hl7Fhir\R5\ReferenceType $additionalContext)
    {
        $this->additionalContext[] = $additionalContext;
        return $this;
    }

    /**
     * isset additionalContext
     *
     * Additional context information for this event. Generally, this will contain references to additional resources included with the event (e.g., the Patient relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalContext($index)
    {
        return isset($this->additionalContext[$index]);
    }

    /**
     * unset additionalContext
     *
     * Additional context information for this event. Generally, this will contain references to additional resources included with the event (e.g., the Patient relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalContext($index)
    {
        unset($this->additionalContext[$index]);
    }

    /**
     * Gets as additionalContext
     *
     * Additional context information for this event. Generally, this will contain references to additional resources included with the event (e.g., the Patient relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAdditionalContext()
    {
        return $this->additionalContext;
    }

    /**
     * Sets a new additionalContext
     *
     * Additional context information for this event. Generally, this will contain references to additional resources included with the event (e.g., the Patient relevant to an Encounter), however it MAY refer to non-FHIR objects.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $additionalContext
     * @return self
     */
    public function setAdditionalContext(array $additionalContext = null)
    {
        $this->additionalContext = $additionalContext;
        return $this;
    }


}

