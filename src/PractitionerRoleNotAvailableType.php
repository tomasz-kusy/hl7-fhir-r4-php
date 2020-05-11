<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PractitionerRoleNotAvailableType
 *
 * A specific set of Roles/Locations/specialties/services that a practitioner may perform at an organization for a period of time.
 * XSD Type: PractitionerRole.NotAvailable
 */
class PractitionerRoleNotAvailableType extends BackboneElementType
{

    /**
     * The reason that can be presented to the user as to why this time is not available.
     *
     * @var string $description
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
     * @return string
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
     * @param string $description
     * @return self
     */
    public function setDescription($description)
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

