<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TriggerDefinitionType
 *
 * A description of a triggering event. Triggering events can be named events, data events, or periodic, as determined by the type element.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: TriggerDefinition
 */
class TriggerDefinitionType extends DataTypeType
{

    /**
     * The type of triggering event.
     *
     * @var \TKusy\Hl7Fhir\R5\TriggerTypeType $type
     */
    private $type = null;

    /**
     * A formal name for the event. This may be an absolute URI that identifies the event formally (e.g. from a trigger registry), or a simple relative URI that identifies the event in a local context.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A code that identifies the event.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A reference to a SubscriptionTopic resource that defines the event. If this element is provided, no other information about the trigger definition may be supplied.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $subscriptionTopic
     */
    private $subscriptionTopic = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $timingTiming
     */
    private $timingTiming = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $timingReference
     */
    private $timingReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $timingDate
     */
    private $timingDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime
     */
    private $timingDateTime = null;

    /**
     * The triggering data of the event (if this is a data trigger). If more than one data is requirement is specified, then all the data requirements must be true.
     *
     * @var \TKusy\Hl7Fhir\R5\DataRequirementType[] $data
     */
    private $data = null;

    /**
     * A boolean-valued expression that is evaluated in the context of the container of the trigger definition and returns whether or not the trigger fires.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $condition
     */
    private $condition = null;

    /**
     * Gets as type
     *
     * The type of triggering event.
     *
     * @return \TKusy\Hl7Fhir\R5\TriggerTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of triggering event.
     *
     * @param \TKusy\Hl7Fhir\R5\TriggerTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\TriggerTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * A formal name for the event. This may be an absolute URI that identifies the event formally (e.g. from a trigger registry), or a simple relative URI that identifies the event in a local context.
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
     * A formal name for the event. This may be an absolute URI that identifies the event formally (e.g. from a trigger registry), or a simple relative URI that identifies the event in a local context.
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
     * Gets as code
     *
     * A code that identifies the event.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that identifies the event.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subscriptionTopic
     *
     * A reference to a SubscriptionTopic resource that defines the event. If this element is provided, no other information about the trigger definition may be supplied.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getSubscriptionTopic()
    {
        return $this->subscriptionTopic;
    }

    /**
     * Sets a new subscriptionTopic
     *
     * A reference to a SubscriptionTopic resource that defines the event. If this element is provided, no other information about the trigger definition may be supplied.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $subscriptionTopic
     * @return self
     */
    public function setSubscriptionTopic(?\TKusy\Hl7Fhir\R5\CanonicalType $subscriptionTopic = null)
    {
        $this->subscriptionTopic = $subscriptionTopic;
        return $this;
    }

    /**
     * Gets as timingTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Sets a new timingTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $timingTiming
     * @return self
     */
    public function setTimingTiming(?\TKusy\Hl7Fhir\R5\TimingType $timingTiming = null)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Gets as timingReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getTimingReference()
    {
        return $this->timingReference;
    }

    /**
     * Sets a new timingReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $timingReference
     * @return self
     */
    public function setTimingReference(?\TKusy\Hl7Fhir\R5\ReferenceType $timingReference = null)
    {
        $this->timingReference = $timingReference;
        return $this;
    }

    /**
     * Gets as timingDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getTimingDate()
    {
        return $this->timingDate;
    }

    /**
     * Sets a new timingDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $timingDate
     * @return self
     */
    public function setTimingDate(?\TKusy\Hl7Fhir\R5\DateType $timingDate = null)
    {
        $this->timingDate = $timingDate;
        return $this;
    }

    /**
     * Gets as timingDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * Sets a new timingDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime
     * @return self
     */
    public function setTimingDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $timingDateTime = null)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * Adds as data
     *
     * The triggering data of the event (if this is a data trigger). If more than one data is requirement is specified, then all the data requirements must be true.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DataRequirementType $data
     */
    public function addToData(\TKusy\Hl7Fhir\R5\DataRequirementType $data)
    {
        $this->data[] = $data;
        return $this;
    }

    /**
     * isset data
     *
     * The triggering data of the event (if this is a data trigger). If more than one data is requirement is specified, then all the data requirements must be true.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetData($index)
    {
        return isset($this->data[$index]);
    }

    /**
     * unset data
     *
     * The triggering data of the event (if this is a data trigger). If more than one data is requirement is specified, then all the data requirements must be true.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetData($index)
    {
        unset($this->data[$index]);
    }

    /**
     * Gets as data
     *
     * The triggering data of the event (if this is a data trigger). If more than one data is requirement is specified, then all the data requirements must be true.
     *
     * @return \TKusy\Hl7Fhir\R5\DataRequirementType[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * The triggering data of the event (if this is a data trigger). If more than one data is requirement is specified, then all the data requirements must be true.
     *
     * @param \TKusy\Hl7Fhir\R5\DataRequirementType[] $data
     * @return self
     */
    public function setData(array $data = null)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as condition
     *
     * A boolean-valued expression that is evaluated in the context of the container of the trigger definition and returns whether or not the trigger fires.
     *
     * @return \TKusy\Hl7Fhir\R5\ExpressionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A boolean-valued expression that is evaluated in the context of the container of the trigger definition and returns whether or not the trigger fires.
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $condition
     * @return self
     */
    public function setCondition(?\TKusy\Hl7Fhir\R5\ExpressionType $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }


}

