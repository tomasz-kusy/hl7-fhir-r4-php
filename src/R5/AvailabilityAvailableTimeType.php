<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AvailabilityAvailableTimeType
 *
 * Availability data for an {item}.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Availability.AvailableTime
 */
class AvailabilityAvailableTimeType extends DataTypeType
{

    /**
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType[] $daysOfWeek
     */
    private $daysOfWeek = null;

    /**
     * Always available? i.e. 24 hour service.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $allDay
     */
    private $allDay = null;

    /**
     * Opening time of day (ignored if allDay = true).
     *
     * @var \TKusy\Hl7Fhir\R5\TimeType $availableStartTime
     */
    private $availableStartTime = null;

    /**
     * Closing time of day (ignored if allDay = true).
     *
     * @var \TKusy\Hl7Fhir\R5\TimeType $availableEndTime
     */
    private $availableEndTime = null;

    /**
     * Adds as daysOfWeek
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeType $daysOfWeek
     */
    public function addToDaysOfWeek(\TKusy\Hl7Fhir\R5\CodeType $daysOfWeek)
    {
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * isset daysOfWeek
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDaysOfWeek($index)
    {
        return isset($this->daysOfWeek[$index]);
    }

    /**
     * unset daysOfWeek
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDaysOfWeek($index)
    {
        unset($this->daysOfWeek[$index]);
    }

    /**
     * Gets as daysOfWeek
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType[]
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * Sets a new daysOfWeek
     *
     * mon | tue | wed | thu | fri | sat | sun.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType[] $daysOfWeek
     * @return self
     */
    public function setDaysOfWeek(array $daysOfWeek = null)
    {
        $this->daysOfWeek = $daysOfWeek;
        return $this;
    }

    /**
     * Gets as allDay
     *
     * Always available? i.e. 24 hour service.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAllDay()
    {
        return $this->allDay;
    }

    /**
     * Sets a new allDay
     *
     * Always available? i.e. 24 hour service.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $allDay
     * @return self
     */
    public function setAllDay(?\TKusy\Hl7Fhir\R5\BooleanType $allDay = null)
    {
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * Gets as availableStartTime
     *
     * Opening time of day (ignored if allDay = true).
     *
     * @return \TKusy\Hl7Fhir\R5\TimeType
     */
    public function getAvailableStartTime()
    {
        return $this->availableStartTime;
    }

    /**
     * Sets a new availableStartTime
     *
     * Opening time of day (ignored if allDay = true).
     *
     * @param \TKusy\Hl7Fhir\R5\TimeType $availableStartTime
     * @return self
     */
    public function setAvailableStartTime(?\TKusy\Hl7Fhir\R5\TimeType $availableStartTime = null)
    {
        $this->availableStartTime = $availableStartTime;
        return $this;
    }

    /**
     * Gets as availableEndTime
     *
     * Closing time of day (ignored if allDay = true).
     *
     * @return \TKusy\Hl7Fhir\R5\TimeType
     */
    public function getAvailableEndTime()
    {
        return $this->availableEndTime;
    }

    /**
     * Sets a new availableEndTime
     *
     * Closing time of day (ignored if allDay = true).
     *
     * @param \TKusy\Hl7Fhir\R5\TimeType $availableEndTime
     * @return self
     */
    public function setAvailableEndTime(?\TKusy\Hl7Fhir\R5\TimeType $availableEndTime = null)
    {
        $this->availableEndTime = $availableEndTime;
        return $this;
    }


}

