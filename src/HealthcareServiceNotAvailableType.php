<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing HealthcareServiceNotAvailableType
 *
 * The details of a healthcare service available at a location.
 * XSD Type: HealthcareService.NotAvailable
 */
class HealthcareServiceNotAvailableType extends BackboneElementType
{

    /**
     * The reason that can be presented to the user as to why this time is not available.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Service is not available (seasonally or for a public holiday) from this date.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $during
     */
    private $during = null;

    /**
     * Gets as description
     *
     * The reason that can be presented to the user as to why this time is not available.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The reason that can be presented to the user as to why this time is not available.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as during
     *
     * Service is not available (seasonally or for a public holiday) from this date.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getDuring()
    {
        return $this->during;
    }

    /**
     * Sets a new during
     *
     * Service is not available (seasonally or for a public holiday) from this date.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $during
     * @return self
     */
    public function setDuring(\TKusy\Hl7FhirR4\PeriodType $during)
    {
        $this->during = $during;
        return $this;
    }


}

