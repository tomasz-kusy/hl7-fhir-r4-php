<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing HealthcareServiceAvailableTimeType
 *
 * The details of a healthcare service available at a location.
 * XSD Type: HealthcareService.AvailableTime
 */
class HealthcareServiceAvailableTimeType extends BackboneElementType
{

    /**
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var \TKusy\Hl7FhirR4\DaysOfWeekType[] $daysOfWeek
     */
    private $daysOfWeek = [
        
    ];

    /**
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $allDay
     */
    private $allDay = null;

    /**
     * The opening time of day. Note: If the AllDay flag is set, then this time is ignored.
     *
     * @var \TKusy\Hl7FhirR4\TimeType $availableStartTime
     */
    private $availableStartTime = null;

    /**
     * The closing time of day. Note: If the AllDay flag is set, then this time is ignored.
     *
     * @var \TKusy\Hl7FhirR4\TimeType $availableEndTime
     */
    private $availableEndTime = null;

    /**
     * Adds as daysOfWeek
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DaysOfWeekType $daysOfWeek
     */
    public function addToDaysOfWeek(\TKusy\Hl7FhirR4\DaysOfWeekType $daysOfWeek)
    {
        $this->daysOfWeek[] = $daysOfWeek;
        return $this;
    }

    /**
     * isset daysOfWeek
     *
     * Indicates which days of the week are available between the start and end Times.
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
     * Indicates which days of the week are available between the start and end Times.
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
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return \TKusy\Hl7FhirR4\DaysOfWeekType[]
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * Sets a new daysOfWeek
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @param \TKusy\Hl7FhirR4\DaysOfWeekType[] $daysOfWeek
     * @return self
     */
    public function setDaysOfWeek(array $daysOfWeek)
    {
        $this->daysOfWeek = $daysOfWeek;
        return $this;
    }

    /**
     * Gets as allDay
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getAllDay()
    {
        return $this->allDay;
    }

    /**
     * Sets a new allDay
     *
     * Is this always available? (hence times are irrelevant) e.g. 24 hour service.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $allDay
     * @return self
     */
    public function setAllDay(\TKusy\Hl7FhirR4\BooleanType $allDay)
    {
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * Gets as availableStartTime
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is ignored.
     *
     * @return \TKusy\Hl7FhirR4\TimeType
     */
    public function getAvailableStartTime()
    {
        return $this->availableStartTime;
    }

    /**
     * Sets a new availableStartTime
     *
     * The opening time of day. Note: If the AllDay flag is set, then this time is ignored.
     *
     * @param \TKusy\Hl7FhirR4\TimeType $availableStartTime
     * @return self
     */
    public function setAvailableStartTime(\TKusy\Hl7FhirR4\TimeType $availableStartTime)
    {
        $this->availableStartTime = $availableStartTime;
        return $this;
    }

    /**
     * Gets as availableEndTime
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is ignored.
     *
     * @return \TKusy\Hl7FhirR4\TimeType
     */
    public function getAvailableEndTime()
    {
        return $this->availableEndTime;
    }

    /**
     * Sets a new availableEndTime
     *
     * The closing time of day. Note: If the AllDay flag is set, then this time is ignored.
     *
     * @param \TKusy\Hl7FhirR4\TimeType $availableEndTime
     * @return self
     */
    public function setAvailableEndTime(\TKusy\Hl7FhirR4\TimeType $availableEndTime)
    {
        $this->availableEndTime = $availableEndTime;
        return $this;
    }


}

