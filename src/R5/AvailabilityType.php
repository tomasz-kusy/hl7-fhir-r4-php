<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AvailabilityType
 *
 * Availability data for an {item}.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Availability
 */
class AvailabilityType extends DataTypeType
{

    /**
     * Times the {item} is available.
     *
     * @var \TKusy\Hl7Fhir\R5\AvailabilityAvailableTimeType[] $availableTime
     */
    private $availableTime = null;

    /**
     * Not available during this time due to provided reason.
     *
     * @var \TKusy\Hl7Fhir\R5\AvailabilityNotAvailableTimeType[] $notAvailableTime
     */
    private $notAvailableTime = null;

    /**
     * Adds as availableTime
     *
     * Times the {item} is available.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AvailabilityAvailableTimeType $availableTime
     */
    public function addToAvailableTime(\TKusy\Hl7Fhir\R5\AvailabilityAvailableTimeType $availableTime)
    {
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * isset availableTime
     *
     * Times the {item} is available.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailableTime($index)
    {
        return isset($this->availableTime[$index]);
    }

    /**
     * unset availableTime
     *
     * Times the {item} is available.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailableTime($index)
    {
        unset($this->availableTime[$index]);
    }

    /**
     * Gets as availableTime
     *
     * Times the {item} is available.
     *
     * @return \TKusy\Hl7Fhir\R5\AvailabilityAvailableTimeType[]
     */
    public function getAvailableTime()
    {
        return $this->availableTime;
    }

    /**
     * Sets a new availableTime
     *
     * Times the {item} is available.
     *
     * @param \TKusy\Hl7Fhir\R5\AvailabilityAvailableTimeType[] $availableTime
     * @return self
     */
    public function setAvailableTime(array $availableTime = null)
    {
        $this->availableTime = $availableTime;
        return $this;
    }

    /**
     * Adds as notAvailableTime
     *
     * Not available during this time due to provided reason.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AvailabilityNotAvailableTimeType $notAvailableTime
     */
    public function addToNotAvailableTime(\TKusy\Hl7Fhir\R5\AvailabilityNotAvailableTimeType $notAvailableTime)
    {
        $this->notAvailableTime[] = $notAvailableTime;
        return $this;
    }

    /**
     * isset notAvailableTime
     *
     * Not available during this time due to provided reason.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotAvailableTime($index)
    {
        return isset($this->notAvailableTime[$index]);
    }

    /**
     * unset notAvailableTime
     *
     * Not available during this time due to provided reason.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotAvailableTime($index)
    {
        unset($this->notAvailableTime[$index]);
    }

    /**
     * Gets as notAvailableTime
     *
     * Not available during this time due to provided reason.
     *
     * @return \TKusy\Hl7Fhir\R5\AvailabilityNotAvailableTimeType[]
     */
    public function getNotAvailableTime()
    {
        return $this->notAvailableTime;
    }

    /**
     * Sets a new notAvailableTime
     *
     * Not available during this time due to provided reason.
     *
     * @param \TKusy\Hl7Fhir\R5\AvailabilityNotAvailableTimeType[] $notAvailableTime
     * @return self
     */
    public function setNotAvailableTime(array $notAvailableTime = null)
    {
        $this->notAvailableTime = $notAvailableTime;
        return $this;
    }


}

