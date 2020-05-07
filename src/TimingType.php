<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing TimingType
 *
 * Specifies an event that may occur multiple times. Timing schedules are used to record when things are planned, expected or requested to occur. The most common usage is in dosage instructions for medications. They are also used when planning care of various kinds, and may be used for reporting the schedule to which past regular activities were carried out.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: Timing
 */
class TimingType extends BackboneElementType
{

    /**
     * Identifies specific times when the event occurs.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType[] $event
     */
    private $event = [
        
    ];

    /**
     * A set of rules that describe when the event is scheduled.
     *
     * @var \TKusy\Hl7FhirR4\TimingRepeatType $repeat
     */
    private $repeat = null;

    /**
     * A code for the timing schedule (or just text in code.text). Some codes such as BID are ubiquitous, but many institutions define their own additional codes. If a code is provided, the code is understood to be a complete statement of whatever is specified in the structured timing data, and either the code or the data may be used to interpret the Timing, with the exception that .repeat.bounds still applies over the code (and is not contained in the code).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Adds as event
     *
     * Identifies specific times when the event occurs.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DateTimeType $event
     */
    public function addToEvent(\TKusy\Hl7FhirR4\DateTimeType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * Identifies specific times when the event occurs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * Identifies specific times when the event occurs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * Identifies specific times when the event occurs.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * Identifies specific times when the event occurs.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType[] $event
     * @return self
     */
    public function setEvent(array $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Gets as repeat
     *
     * A set of rules that describe when the event is scheduled.
     *
     * @return \TKusy\Hl7FhirR4\TimingRepeatType
     */
    public function getRepeat()
    {
        return $this->repeat;
    }

    /**
     * Sets a new repeat
     *
     * A set of rules that describe when the event is scheduled.
     *
     * @param \TKusy\Hl7FhirR4\TimingRepeatType $repeat
     * @return self
     */
    public function setRepeat(\TKusy\Hl7FhirR4\TimingRepeatType $repeat)
    {
        $this->repeat = $repeat;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code for the timing schedule (or just text in code.text). Some codes such as BID are ubiquitous, but many institutions define their own additional codes. If a code is provided, the code is understood to be a complete statement of whatever is specified in the structured timing data, and either the code or the data may be used to interpret the Timing, with the exception that .repeat.bounds still applies over the code (and is not contained in the code).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code for the timing schedule (or just text in code.text). Some codes such as BID are ubiquitous, but many institutions define their own additional codes. If a code is provided, the code is understood to be a complete statement of whatever is specified in the structured timing data, and either the code or the data may be used to interpret the Timing, with the exception that .repeat.bounds still applies over the code (and is not contained in the code).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }


}

