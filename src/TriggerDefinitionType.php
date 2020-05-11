<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TriggerDefinitionType
 *
 * A description of a triggering event. Triggering events can be named events, data events, or periodic, as determined by the type element.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: TriggerDefinition
 */
class TriggerDefinitionType extends ElementType
{

    /**
     * The type of triggering event.
     *
     * @var \TKusy\Hl7FhirR4\TriggerTypeType $type
     */
    private $type = null;

    /**
     * A formal name for the event. This may be an absolute URI that identifies the event formally (e.g. from a trigger registry), or a simple relative URI that identifies the event in a local context.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $timingTiming
     */
    private $timingTiming = null;

    /**
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $timingReference
     */
    private $timingReference = null;

    /**
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $timingDate
     */
    private $timingDate = null;

    /**
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $timingDateTime
     */
    private $timingDateTime = null;

    /**
     * The triggering data of the event (if this is a data trigger). If more than one data is requirement is specified, then all the data requirements must be true.
     *
     * @var \TKusy\Hl7FhirR4\DataRequirementType[] $data
     */
    private $data = null;

    /**
     * A boolean-valued expression that is evaluated in the context of the container of the trigger definition and returns whether or not the trigger fires.
     *
     * @var \TKusy\Hl7FhirR4\ExpressionType $condition
     */
    private $condition = null;

    /**
     * Gets as type
     *
     * The type of triggering event.
     *
     * @return \TKusy\Hl7FhirR4\TriggerTypeType
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
     * @param \TKusy\Hl7FhirR4\TriggerTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\TriggerTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * A formal name for the event. This may be an absolute URI that identifies the event formally (e.g. from a trigger registry), or a simple relative URI that identifies the event in a local context.
     *
     * @return string
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
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as timingTiming
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Sets a new timingTiming
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $timingTiming
     * @return self
     */
    public function setTimingTiming(\TKusy\Hl7FhirR4\TimingType $timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Gets as timingReference
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getTimingReference()
    {
        return $this->timingReference;
    }

    /**
     * Sets a new timingReference
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $timingReference
     * @return self
     */
    public function setTimingReference(\TKusy\Hl7FhirR4\ReferenceType $timingReference)
    {
        $this->timingReference = $timingReference;
        return $this;
    }

    /**
     * Gets as timingDate
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getTimingDate()
    {
        return $this->timingDate;
    }

    /**
     * Sets a new timingDate
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $timingDate
     * @return self
     */
    public function setTimingDate(\TKusy\Hl7FhirR4\DateType $timingDate)
    {
        $this->timingDate = $timingDate;
        return $this;
    }

    /**
     * Gets as timingDateTime
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * Sets a new timingDateTime
     *
     * The timing of the event (if this is a periodic trigger). (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $timingDateTime
     * @return self
     */
    public function setTimingDateTime(\TKusy\Hl7FhirR4\DateTimeType $timingDateTime)
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
     * @param \TKusy\Hl7FhirR4\DataRequirementType $data
     */
    public function addToData(\TKusy\Hl7FhirR4\DataRequirementType $data)
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
     * @return \TKusy\Hl7FhirR4\DataRequirementType[]
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
     * @param \TKusy\Hl7FhirR4\DataRequirementType[] $data
     * @return self
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as condition
     *
     * A boolean-valued expression that is evaluated in the context of the container of the trigger definition and returns whether or not the trigger fires.
     *
     * @return \TKusy\Hl7FhirR4\ExpressionType
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
     * @param \TKusy\Hl7FhirR4\ExpressionType $condition
     * @return self
     */
    public function setCondition(\TKusy\Hl7FhirR4\ExpressionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }


}

