<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing LocationHoursOfOperationType
 *
 * Details and position information for a physical place where services are provided and resources and participants may be stored, found, contained, or accommodated.
 * XSD Type: Location.HoursOfOperation
 */
class LocationHoursOfOperationType extends BackboneElementType
{

    /**
     * Indicates which days of the week are available between the start and end Times.
     *
     * @var \TKusy\Hl7Fhir\R4\DaysOfWeekType[] $daysOfWeek
     */
    private $daysOfWeek = null;

    /**
     * The Location is open all day.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $allDay
     */
    private $allDay = null;

    /**
     * Time that the Location opens.
     *
     * @var \TKusy\Hl7Fhir\R4\TimeType $openingTime
     */
    private $openingTime = null;

    /**
     * Time that the Location closes.
     *
     * @var \TKusy\Hl7Fhir\R4\TimeType $closingTime
     */
    private $closingTime = null;

    /**
     * Adds as daysOfWeek
     *
     * Indicates which days of the week are available between the start and end Times.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\DaysOfWeekType $daysOfWeek
     */
    public function addToDaysOfWeek(\TKusy\Hl7Fhir\R4\DaysOfWeekType $daysOfWeek)
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
     * @return \TKusy\Hl7Fhir\R4\DaysOfWeekType[]
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
     * @param \TKusy\Hl7Fhir\R4\DaysOfWeekType[] $daysOfWeek
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
     * The Location is open all day.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getAllDay()
    {
        return $this->allDay;
    }

    /**
     * Sets a new allDay
     *
     * The Location is open all day.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $allDay
     * @return self
     */
    public function setAllDay(\TKusy\Hl7Fhir\R4\BooleanType $allDay)
    {
        $this->allDay = $allDay;
        return $this;
    }

    /**
     * Gets as openingTime
     *
     * Time that the Location opens.
     *
     * @return \TKusy\Hl7Fhir\R4\TimeType
     */
    public function getOpeningTime()
    {
        return $this->openingTime;
    }

    /**
     * Sets a new openingTime
     *
     * Time that the Location opens.
     *
     * @param \TKusy\Hl7Fhir\R4\TimeType $openingTime
     * @return self
     */
    public function setOpeningTime(\TKusy\Hl7Fhir\R4\TimeType $openingTime)
    {
        $this->openingTime = $openingTime;
        return $this;
    }

    /**
     * Gets as closingTime
     *
     * Time that the Location closes.
     *
     * @return \TKusy\Hl7Fhir\R4\TimeType
     */
    public function getClosingTime()
    {
        return $this->closingTime;
    }

    /**
     * Sets a new closingTime
     *
     * Time that the Location closes.
     *
     * @param \TKusy\Hl7Fhir\R4\TimeType $closingTime
     * @return self
     */
    public function setClosingTime(\TKusy\Hl7Fhir\R4\TimeType $closingTime)
    {
        $this->closingTime = $closingTime;
        return $this;
    }


}

