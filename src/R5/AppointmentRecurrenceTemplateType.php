<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AppointmentRecurrenceTemplateType
 *
 * A booking of a healthcare event among patient(s), practitioner(s), related person(s) and/or device(s) for a specific date/time. This may result in one or more Encounter(s).
 * XSD Type: Appointment.RecurrenceTemplate
 */
class AppointmentRecurrenceTemplateType extends BackboneElementType
{

    /**
     * The timezone of the recurring appointment occurrences.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $timezone
     */
    private $timezone = null;

    /**
     * How often the appointment series should recur.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $recurrenceType
     */
    private $recurrenceType = null;

    /**
     * Recurring appointments will not occur after this date.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $lastOccurrenceDate
     */
    private $lastOccurrenceDate = null;

    /**
     * How many appointments are planned in the recurrence.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $occurrenceCount
     */
    private $occurrenceCount = null;

    /**
     * The list of specific dates that will have appointments generated.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType[] $occurrenceDate
     */
    private $occurrenceDate = null;

    /**
     * Information about weekly recurring appointments.
     *
     * @var \TKusy\Hl7Fhir\R5\AppointmentWeeklyTemplateType $weeklyTemplate
     */
    private $weeklyTemplate = null;

    /**
     * Information about monthly recurring appointments.
     *
     * @var \TKusy\Hl7Fhir\R5\AppointmentMonthlyTemplateType $monthlyTemplate
     */
    private $monthlyTemplate = null;

    /**
     * Information about yearly recurring appointments.
     *
     * @var \TKusy\Hl7Fhir\R5\AppointmentYearlyTemplateType $yearlyTemplate
     */
    private $yearlyTemplate = null;

    /**
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType[] $excludingDate
     */
    private $excludingDate = null;

    /**
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType[] $excludingRecurrenceId
     */
    private $excludingRecurrenceId = null;

    /**
     * Gets as timezone
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Sets a new timezone
     *
     * The timezone of the recurring appointment occurrences.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $timezone
     * @return self
     */
    public function setTimezone(?\TKusy\Hl7Fhir\R5\CodeableConceptType $timezone = null)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * Gets as recurrenceType
     *
     * How often the appointment series should recur.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRecurrenceType()
    {
        return $this->recurrenceType;
    }

    /**
     * Sets a new recurrenceType
     *
     * How often the appointment series should recur.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $recurrenceType
     * @return self
     */
    public function setRecurrenceType(\TKusy\Hl7Fhir\R5\CodeableConceptType $recurrenceType)
    {
        $this->recurrenceType = $recurrenceType;
        return $this;
    }

    /**
     * Gets as lastOccurrenceDate
     *
     * Recurring appointments will not occur after this date.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getLastOccurrenceDate()
    {
        return $this->lastOccurrenceDate;
    }

    /**
     * Sets a new lastOccurrenceDate
     *
     * Recurring appointments will not occur after this date.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $lastOccurrenceDate
     * @return self
     */
    public function setLastOccurrenceDate(?\TKusy\Hl7Fhir\R5\DateType $lastOccurrenceDate = null)
    {
        $this->lastOccurrenceDate = $lastOccurrenceDate;
        return $this;
    }

    /**
     * Gets as occurrenceCount
     *
     * How many appointments are planned in the recurrence.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getOccurrenceCount()
    {
        return $this->occurrenceCount;
    }

    /**
     * Sets a new occurrenceCount
     *
     * How many appointments are planned in the recurrence.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $occurrenceCount
     * @return self
     */
    public function setOccurrenceCount(?\TKusy\Hl7Fhir\R5\PositiveIntType $occurrenceCount = null)
    {
        $this->occurrenceCount = $occurrenceCount;
        return $this;
    }

    /**
     * Adds as occurrenceDate
     *
     * The list of specific dates that will have appointments generated.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DateType $occurrenceDate
     */
    public function addToOccurrenceDate(\TKusy\Hl7Fhir\R5\DateType $occurrenceDate)
    {
        $this->occurrenceDate[] = $occurrenceDate;
        return $this;
    }

    /**
     * isset occurrenceDate
     *
     * The list of specific dates that will have appointments generated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOccurrenceDate($index)
    {
        return isset($this->occurrenceDate[$index]);
    }

    /**
     * unset occurrenceDate
     *
     * The list of specific dates that will have appointments generated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOccurrenceDate($index)
    {
        unset($this->occurrenceDate[$index]);
    }

    /**
     * Gets as occurrenceDate
     *
     * The list of specific dates that will have appointments generated.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType[]
     */
    public function getOccurrenceDate()
    {
        return $this->occurrenceDate;
    }

    /**
     * Sets a new occurrenceDate
     *
     * The list of specific dates that will have appointments generated.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType[] $occurrenceDate
     * @return self
     */
    public function setOccurrenceDate(array $occurrenceDate = null)
    {
        $this->occurrenceDate = $occurrenceDate;
        return $this;
    }

    /**
     * Gets as weeklyTemplate
     *
     * Information about weekly recurring appointments.
     *
     * @return \TKusy\Hl7Fhir\R5\AppointmentWeeklyTemplateType
     */
    public function getWeeklyTemplate()
    {
        return $this->weeklyTemplate;
    }

    /**
     * Sets a new weeklyTemplate
     *
     * Information about weekly recurring appointments.
     *
     * @param \TKusy\Hl7Fhir\R5\AppointmentWeeklyTemplateType $weeklyTemplate
     * @return self
     */
    public function setWeeklyTemplate(?\TKusy\Hl7Fhir\R5\AppointmentWeeklyTemplateType $weeklyTemplate = null)
    {
        $this->weeklyTemplate = $weeklyTemplate;
        return $this;
    }

    /**
     * Gets as monthlyTemplate
     *
     * Information about monthly recurring appointments.
     *
     * @return \TKusy\Hl7Fhir\R5\AppointmentMonthlyTemplateType
     */
    public function getMonthlyTemplate()
    {
        return $this->monthlyTemplate;
    }

    /**
     * Sets a new monthlyTemplate
     *
     * Information about monthly recurring appointments.
     *
     * @param \TKusy\Hl7Fhir\R5\AppointmentMonthlyTemplateType $monthlyTemplate
     * @return self
     */
    public function setMonthlyTemplate(?\TKusy\Hl7Fhir\R5\AppointmentMonthlyTemplateType $monthlyTemplate = null)
    {
        $this->monthlyTemplate = $monthlyTemplate;
        return $this;
    }

    /**
     * Gets as yearlyTemplate
     *
     * Information about yearly recurring appointments.
     *
     * @return \TKusy\Hl7Fhir\R5\AppointmentYearlyTemplateType
     */
    public function getYearlyTemplate()
    {
        return $this->yearlyTemplate;
    }

    /**
     * Sets a new yearlyTemplate
     *
     * Information about yearly recurring appointments.
     *
     * @param \TKusy\Hl7Fhir\R5\AppointmentYearlyTemplateType $yearlyTemplate
     * @return self
     */
    public function setYearlyTemplate(?\TKusy\Hl7Fhir\R5\AppointmentYearlyTemplateType $yearlyTemplate = null)
    {
        $this->yearlyTemplate = $yearlyTemplate;
        return $this;
    }

    /**
     * Adds as excludingDate
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DateType $excludingDate
     */
    public function addToExcludingDate(\TKusy\Hl7Fhir\R5\DateType $excludingDate)
    {
        $this->excludingDate[] = $excludingDate;
        return $this;
    }

    /**
     * isset excludingDate
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludingDate($index)
    {
        return isset($this->excludingDate[$index]);
    }

    /**
     * unset excludingDate
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludingDate($index)
    {
        unset($this->excludingDate[$index]);
    }

    /**
     * Gets as excludingDate
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType[]
     */
    public function getExcludingDate()
    {
        return $this->excludingDate;
    }

    /**
     * Sets a new excludingDate
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType[] $excludingDate
     * @return self
     */
    public function setExcludingDate(array $excludingDate = null)
    {
        $this->excludingDate = $excludingDate;
        return $this;
    }

    /**
     * Adds as excludingRecurrenceId
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $excludingRecurrenceId
     */
    public function addToExcludingRecurrenceId(\TKusy\Hl7Fhir\R5\PositiveIntType $excludingRecurrenceId)
    {
        $this->excludingRecurrenceId[] = $excludingRecurrenceId;
        return $this;
    }

    /**
     * isset excludingRecurrenceId
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludingRecurrenceId($index)
    {
        return isset($this->excludingRecurrenceId[$index]);
    }

    /**
     * unset excludingRecurrenceId
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludingRecurrenceId($index)
    {
        unset($this->excludingRecurrenceId[$index]);
    }

    /**
     * Gets as excludingRecurrenceId
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType[]
     */
    public function getExcludingRecurrenceId()
    {
        return $this->excludingRecurrenceId;
    }

    /**
     * Sets a new excludingRecurrenceId
     *
     * Any dates, such as holidays, that should be excluded from the recurrence.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType[] $excludingRecurrenceId
     * @return self
     */
    public function setExcludingRecurrenceId(array $excludingRecurrenceId = null)
    {
        $this->excludingRecurrenceId = $excludingRecurrenceId;
        return $this;
    }


}

