<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AvailabilityNotAvailableTimeType
 *
 * Availability data for an {item}.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Availability.NotAvailableTime
 */
class AvailabilityNotAvailableTimeType extends DataTypeType
{

    /**
     * Reason presented to the user explaining why time not available.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $description
     */
    private $description = null;

    /**
     * Service not available during this period.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $during
     */
    private $during = null;

    /**
     * Gets as description
     *
     * Reason presented to the user explaining why time not available.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Reason presented to the user explaining why time not available.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\StringType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as during
     *
     * Service not available during this period.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getDuring()
    {
        return $this->during;
    }

    /**
     * Sets a new during
     *
     * Service not available during this period.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $during
     * @return self
     */
    public function setDuring(?\TKusy\Hl7Fhir\R5\PeriodType $during = null)
    {
        $this->during = $during;
        return $this;
    }


}

