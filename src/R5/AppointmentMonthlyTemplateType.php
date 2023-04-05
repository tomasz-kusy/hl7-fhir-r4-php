<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AppointmentMonthlyTemplateType
 *
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * XSD Type: Appointment.MonthlyTemplate
 */
class AppointmentMonthlyTemplateType extends BackboneElementType
{

    /**
     * Indicates that appointments in the series of recurring appointments should occur on a specific day of the month.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $dayOfMonth
     */
    private $dayOfMonth = null;

    /**
     * Indicates which week within a month the appointments in the series of recurring appointments should occur on.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $nthWeekOfMonth
     */
    private $nthWeekOfMonth = null;

    /**
     * Indicates which day of the week the recurring appointments should occur each nth week.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * Indicates that recurring appointments should occur every nth month.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $monthInterval
     */
    private $monthInterval = null;

    /**
     * Gets as dayOfMonth
     *
     * Indicates that appointments in the series of recurring appointments should occur on a specific day of the month.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getDayOfMonth()
    {
        return $this->dayOfMonth;
    }

    /**
     * Sets a new dayOfMonth
     *
     * Indicates that appointments in the series of recurring appointments should occur on a specific day of the month.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $dayOfMonth
     * @return self
     */
    public function setDayOfMonth(?\TKusy\Hl7Fhir\R5\PositiveIntType $dayOfMonth = null)
    {
        $this->dayOfMonth = $dayOfMonth;
        return $this;
    }

    /**
     * Gets as nthWeekOfMonth
     *
     * Indicates which week within a month the appointments in the series of recurring appointments should occur on.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getNthWeekOfMonth()
    {
        return $this->nthWeekOfMonth;
    }

    /**
     * Sets a new nthWeekOfMonth
     *
     * Indicates which week within a month the appointments in the series of recurring appointments should occur on.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $nthWeekOfMonth
     * @return self
     */
    public function setNthWeekOfMonth(?\TKusy\Hl7Fhir\R5\CodingType $nthWeekOfMonth = null)
    {
        $this->nthWeekOfMonth = $nthWeekOfMonth;
        return $this;
    }

    /**
     * Gets as dayOfWeek
     *
     * Indicates which day of the week the recurring appointments should occur each nth week.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * Indicates which day of the week the recurring appointments should occur each nth week.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $dayOfWeek
     * @return self
     */
    public function setDayOfWeek(?\TKusy\Hl7Fhir\R5\CodingType $dayOfWeek = null)
    {
        $this->dayOfWeek = $dayOfWeek;
        return $this;
    }

    /**
     * Gets as monthInterval
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getMonthInterval()
    {
        return $this->monthInterval;
    }

    /**
     * Sets a new monthInterval
     *
     * Indicates that recurring appointments should occur every nth month.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $monthInterval
     * @return self
     */
    public function setMonthInterval(\TKusy\Hl7Fhir\R5\PositiveIntType $monthInterval)
    {
        $this->monthInterval = $monthInterval;
        return $this;
    }


}

