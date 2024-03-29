<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TimingRepeatType
 *
 * Specifies an event that may occur multiple times. Timing schedules are used to record when things are planned, expected or requested to occur. The most common usage is in dosage instructions for medications. They are also used when planning care of various kinds, and may be used for reporting the schedule to which past regular activities were carried out.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Timing.Repeat
 */
class TimingRepeatType extends BackboneTypeType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\DurationType $boundsDuration
     */
    private $boundsDuration = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $boundsRange
     */
    private $boundsRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $boundsPeriod
     */
    private $boundsPeriod = null;

    /**
     * A total count of the desired number of repetitions across the duration of the entire timing specification. If countMax is present, this element indicates the lower bound of the allowed range of count values.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $count
     */
    private $count = null;

    /**
     * If present, indicates that the count is a range - so to perform the action between [count] and [countMax] times.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $countMax
     */
    private $countMax = null;

    /**
     * How long this thing happens for when it happens. If durationMax is present, this element indicates the lower bound of the allowed range of the duration.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $duration
     */
    private $duration = null;

    /**
     * If present, indicates that the duration is a range - so to perform the action between [duration] and [durationMax] time length.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $durationMax
     */
    private $durationMax = null;

    /**
     * The units of time for the duration, in UCUM units
     * Normal practice is to use the 'mo' code as a calendar month when calculating the next occurrence.
     *
     * @var \TKusy\Hl7Fhir\R5\UnitsOfTimeType $durationUnit
     */
    private $durationUnit = null;

    /**
     * The number of times to repeat the action within the specified period. If frequencyMax is present, this element indicates the lower bound of the allowed range of the frequency.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $frequency
     */
    private $frequency = null;

    /**
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $frequencyMax
     */
    private $frequencyMax = null;

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period. If periodMax is present, this element indicates the lower bound of the allowed range of the period length.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $period
     */
    private $period = null;

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $periodMax
     */
    private $periodMax = null;

    /**
     * The units of time for the period in UCUM units
     * Normal practice is to use the 'mo' code as a calendar month when calculating the next occurrence.
     *
     * @var \TKusy\Hl7Fhir\R5\UnitsOfTimeType $periodUnit
     */
    private $periodUnit = null;

    /**
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType[] $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * Specified time of day for action to take place.
     *
     * @var \TKusy\Hl7Fhir\R5\TimeType[] $timeOfDay
     */
    private $timeOfDay = null;

    /**
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     *
     * @var \TKusy\Hl7Fhir\R5\EventTimingType[] $when
     */
    private $when = null;

    /**
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $offset
     */
    private $offset = null;

    /**
     * Gets as boundsDuration
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getBoundsDuration()
    {
        return $this->boundsDuration;
    }

    /**
     * Sets a new boundsDuration
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $boundsDuration
     * @return self
     */
    public function setBoundsDuration(?\TKusy\Hl7Fhir\R5\DurationType $boundsDuration = null)
    {
        $this->boundsDuration = $boundsDuration;
        return $this;
    }

    /**
     * Gets as boundsRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getBoundsRange()
    {
        return $this->boundsRange;
    }

    /**
     * Sets a new boundsRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $boundsRange
     * @return self
     */
    public function setBoundsRange(?\TKusy\Hl7Fhir\R5\RangeType $boundsRange = null)
    {
        $this->boundsRange = $boundsRange;
        return $this;
    }

    /**
     * Gets as boundsPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getBoundsPeriod()
    {
        return $this->boundsPeriod;
    }

    /**
     * Sets a new boundsPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $boundsPeriod
     * @return self
     */
    public function setBoundsPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $boundsPeriod = null)
    {
        $this->boundsPeriod = $boundsPeriod;
        return $this;
    }

    /**
     * Gets as count
     *
     * A total count of the desired number of repetitions across the duration of the entire timing specification. If countMax is present, this element indicates the lower bound of the allowed range of count values.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * A total count of the desired number of repetitions across the duration of the entire timing specification. If countMax is present, this element indicates the lower bound of the allowed range of count values.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $count
     * @return self
     */
    public function setCount(?\TKusy\Hl7Fhir\R5\PositiveIntType $count = null)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as countMax
     *
     * If present, indicates that the count is a range - so to perform the action between [count] and [countMax] times.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getCountMax()
    {
        return $this->countMax;
    }

    /**
     * Sets a new countMax
     *
     * If present, indicates that the count is a range - so to perform the action between [count] and [countMax] times.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $countMax
     * @return self
     */
    public function setCountMax(?\TKusy\Hl7Fhir\R5\PositiveIntType $countMax = null)
    {
        $this->countMax = $countMax;
        return $this;
    }

    /**
     * Gets as duration
     *
     * How long this thing happens for when it happens. If durationMax is present, this element indicates the lower bound of the allowed range of the duration.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * How long this thing happens for when it happens. If durationMax is present, this element indicates the lower bound of the allowed range of the duration.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $duration
     * @return self
     */
    public function setDuration(?\TKusy\Hl7Fhir\R5\DecimalType $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as durationMax
     *
     * If present, indicates that the duration is a range - so to perform the action between [duration] and [durationMax] time length.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getDurationMax()
    {
        return $this->durationMax;
    }

    /**
     * Sets a new durationMax
     *
     * If present, indicates that the duration is a range - so to perform the action between [duration] and [durationMax] time length.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $durationMax
     * @return self
     */
    public function setDurationMax(?\TKusy\Hl7Fhir\R5\DecimalType $durationMax = null)
    {
        $this->durationMax = $durationMax;
        return $this;
    }

    /**
     * Gets as durationUnit
     *
     * The units of time for the duration, in UCUM units
     * Normal practice is to use the 'mo' code as a calendar month when calculating the next occurrence.
     *
     * @return \TKusy\Hl7Fhir\R5\UnitsOfTimeType
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }

    /**
     * Sets a new durationUnit
     *
     * The units of time for the duration, in UCUM units
     * Normal practice is to use the 'mo' code as a calendar month when calculating the next occurrence.
     *
     * @param \TKusy\Hl7Fhir\R5\UnitsOfTimeType $durationUnit
     * @return self
     */
    public function setDurationUnit(?\TKusy\Hl7Fhir\R5\UnitsOfTimeType $durationUnit = null)
    {
        $this->durationUnit = $durationUnit;
        return $this;
    }

    /**
     * Gets as frequency
     *
     * The number of times to repeat the action within the specified period. If frequencyMax is present, this element indicates the lower bound of the allowed range of the frequency.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * The number of times to repeat the action within the specified period. If frequencyMax is present, this element indicates the lower bound of the allowed range of the frequency.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $frequency
     * @return self
     */
    public function setFrequency(?\TKusy\Hl7Fhir\R5\PositiveIntType $frequency = null)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as frequencyMax
     *
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getFrequencyMax()
    {
        return $this->frequencyMax;
    }

    /**
     * Sets a new frequencyMax
     *
     * If present, indicates that the frequency is a range - so to repeat between [frequency] and [frequencyMax] times within the period or period range.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $frequencyMax
     * @return self
     */
    public function setFrequencyMax(?\TKusy\Hl7Fhir\R5\PositiveIntType $frequencyMax = null)
    {
        $this->frequencyMax = $frequencyMax;
        return $this;
    }

    /**
     * Gets as period
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period. If periodMax is present, this element indicates the lower bound of the allowed range of the period length.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period. If periodMax is present, this element indicates the lower bound of the allowed range of the period length.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\DecimalType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as periodMax
     *
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getPeriodMax()
    {
        return $this->periodMax;
    }

    /**
     * Sets a new periodMax
     *
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $periodMax
     * @return self
     */
    public function setPeriodMax(?\TKusy\Hl7Fhir\R5\DecimalType $periodMax = null)
    {
        $this->periodMax = $periodMax;
        return $this;
    }

    /**
     * Gets as periodUnit
     *
     * The units of time for the period in UCUM units
     * Normal practice is to use the 'mo' code as a calendar month when calculating the next occurrence.
     *
     * @return \TKusy\Hl7Fhir\R5\UnitsOfTimeType
     */
    public function getPeriodUnit()
    {
        return $this->periodUnit;
    }

    /**
     * Sets a new periodUnit
     *
     * The units of time for the period in UCUM units
     * Normal practice is to use the 'mo' code as a calendar month when calculating the next occurrence.
     *
     * @param \TKusy\Hl7Fhir\R5\UnitsOfTimeType $periodUnit
     * @return self
     */
    public function setPeriodUnit(?\TKusy\Hl7Fhir\R5\UnitsOfTimeType $periodUnit = null)
    {
        $this->periodUnit = $periodUnit;
        return $this;
    }

    /**
     * Adds as dayOfWeek
     *
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeType $dayOfWeek
     */
    public function addToDayOfWeek(\TKusy\Hl7Fhir\R5\CodeType $dayOfWeek)
    {
        $this->dayOfWeek[] = $dayOfWeek;
        return $this;
    }

    /**
     * isset dayOfWeek
     *
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDayOfWeek($index)
    {
        return isset($this->dayOfWeek[$index]);
    }

    /**
     * unset dayOfWeek
     *
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDayOfWeek($index)
    {
        unset($this->dayOfWeek[$index]);
    }

    /**
     * Gets as dayOfWeek
     *
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType[]
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * If one or more days of week is provided, then the action happens only on the specified day(s).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType[] $dayOfWeek
     * @return self
     */
    public function setDayOfWeek(array $dayOfWeek = null)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * Adds as timeOfDay
     *
     * Specified time of day for action to take place.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TimeType $timeOfDay
     */
    public function addToTimeOfDay(\TKusy\Hl7Fhir\R5\TimeType $timeOfDay)
    {
        $this->timeOfDay[] = $timeOfDay;
        return $this;
    }

    /**
     * isset timeOfDay
     *
     * Specified time of day for action to take place.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTimeOfDay($index)
    {
        return isset($this->timeOfDay[$index]);
    }

    /**
     * unset timeOfDay
     *
     * Specified time of day for action to take place.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTimeOfDay($index)
    {
        unset($this->timeOfDay[$index]);
    }

    /**
     * Gets as timeOfDay
     *
     * Specified time of day for action to take place.
     *
     * @return \TKusy\Hl7Fhir\R5\TimeType[]
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * Sets a new timeOfDay
     *
     * Specified time of day for action to take place.
     *
     * @param \TKusy\Hl7Fhir\R5\TimeType[] $timeOfDay
     * @return self
     */
    public function setTimeOfDay(array $timeOfDay = null)
    {
        $this->timeOfDay = $timeOfDay;
        return $this;
    }

    /**
     * Adds as when
     *
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EventTimingType $when
     */
    public function addToWhen(\TKusy\Hl7Fhir\R5\EventTimingType $when)
    {
        $this->when[] = $when;
        return $this;
    }

    /**
     * isset when
     *
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWhen($index)
    {
        return isset($this->when[$index]);
    }

    /**
     * unset when
     *
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWhen($index)
    {
        unset($this->when[$index]);
    }

    /**
     * Gets as when
     *
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     *
     * @return \TKusy\Hl7Fhir\R5\EventTimingType[]
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * Sets a new when
     *
     * An approximate time period during the day, potentially linked to an event of daily living that indicates when the action should occur.
     *
     * @param \TKusy\Hl7Fhir\R5\EventTimingType[] $when
     * @return self
     */
    public function setWhen(array $when = null)
    {
        $this->when = $when;
        return $this;
    }

    /**
     * Gets as offset
     *
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Sets a new offset
     *
     * The number of minutes from the event. If the event code does not indicate whether the minutes is before or after the event, then the offset is assumed to be after the event.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $offset
     * @return self
     */
    public function setOffset(?\TKusy\Hl7Fhir\R5\UnsignedIntType $offset = null)
    {
        $this->offset = $offset;
        return $this;
    }


}

