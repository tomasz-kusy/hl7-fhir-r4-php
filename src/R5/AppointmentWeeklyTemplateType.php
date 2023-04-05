<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AppointmentWeeklyTemplateType
 *
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * XSD Type: Appointment.WeeklyTemplate
 */
class AppointmentWeeklyTemplateType extends BackboneElementType
{

    /**
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $monday
     */
    private $monday = null;

    /**
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $tuesday
     */
    private $tuesday = null;

    /**
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $wednesday
     */
    private $wednesday = null;

    /**
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $thursday
     */
    private $thursday = null;

    /**
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $friday
     */
    private $friday = null;

    /**
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $saturday
     */
    private $saturday = null;

    /**
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $sunday
     */
    private $sunday = null;

    /**
     * The interval defines if the recurrence is every nth week. The default is every week, so it is expected that this value will be 2 or more.
     *
     * e.g. For recurring every second week this interval would be 2, or every third week the interval would be 3.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $weekInterval
     */
    private $weekInterval = null;

    /**
     * Gets as monday
     *
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getMonday()
    {
        return $this->monday;
    }

    /**
     * Sets a new monday
     *
     * Indicates that recurring appointments should occur on Mondays.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $monday
     * @return self
     */
    public function setMonday(?\TKusy\Hl7Fhir\R5\BooleanType $monday = null)
    {
        $this->monday = $monday;
        return $this;
    }

    /**
     * Gets as tuesday
     *
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getTuesday()
    {
        return $this->tuesday;
    }

    /**
     * Sets a new tuesday
     *
     * Indicates that recurring appointments should occur on Tuesdays.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $tuesday
     * @return self
     */
    public function setTuesday(?\TKusy\Hl7Fhir\R5\BooleanType $tuesday = null)
    {
        $this->tuesday = $tuesday;
        return $this;
    }

    /**
     * Gets as wednesday
     *
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getWednesday()
    {
        return $this->wednesday;
    }

    /**
     * Sets a new wednesday
     *
     * Indicates that recurring appointments should occur on Wednesdays.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $wednesday
     * @return self
     */
    public function setWednesday(?\TKusy\Hl7Fhir\R5\BooleanType $wednesday = null)
    {
        $this->wednesday = $wednesday;
        return $this;
    }

    /**
     * Gets as thursday
     *
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getThursday()
    {
        return $this->thursday;
    }

    /**
     * Sets a new thursday
     *
     * Indicates that recurring appointments should occur on Thursdays.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $thursday
     * @return self
     */
    public function setThursday(?\TKusy\Hl7Fhir\R5\BooleanType $thursday = null)
    {
        $this->thursday = $thursday;
        return $this;
    }

    /**
     * Gets as friday
     *
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getFriday()
    {
        return $this->friday;
    }

    /**
     * Sets a new friday
     *
     * Indicates that recurring appointments should occur on Fridays.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $friday
     * @return self
     */
    public function setFriday(?\TKusy\Hl7Fhir\R5\BooleanType $friday = null)
    {
        $this->friday = $friday;
        return $this;
    }

    /**
     * Gets as saturday
     *
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getSaturday()
    {
        return $this->saturday;
    }

    /**
     * Sets a new saturday
     *
     * Indicates that recurring appointments should occur on Saturdays.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $saturday
     * @return self
     */
    public function setSaturday(?\TKusy\Hl7Fhir\R5\BooleanType $saturday = null)
    {
        $this->saturday = $saturday;
        return $this;
    }

    /**
     * Gets as sunday
     *
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getSunday()
    {
        return $this->sunday;
    }

    /**
     * Sets a new sunday
     *
     * Indicates that recurring appointments should occur on Sundays.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $sunday
     * @return self
     */
    public function setSunday(?\TKusy\Hl7Fhir\R5\BooleanType $sunday = null)
    {
        $this->sunday = $sunday;
        return $this;
    }

    /**
     * Gets as weekInterval
     *
     * The interval defines if the recurrence is every nth week. The default is every week, so it is expected that this value will be 2 or more.
     *
     * e.g. For recurring every second week this interval would be 2, or every third week the interval would be 3.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getWeekInterval()
    {
        return $this->weekInterval;
    }

    /**
     * Sets a new weekInterval
     *
     * The interval defines if the recurrence is every nth week. The default is every week, so it is expected that this value will be 2 or more.
     *
     * e.g. For recurring every second week this interval would be 2, or every third week the interval would be 3.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $weekInterval
     * @return self
     */
    public function setWeekInterval(?\TKusy\Hl7Fhir\R5\PositiveIntType $weekInterval = null)
    {
        $this->weekInterval = $weekInterval;
        return $this;
    }


}

