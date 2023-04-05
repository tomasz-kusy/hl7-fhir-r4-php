<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionMarketDistributionType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.MarketDistribution
 */
class DeviceDefinitionMarketDistributionType extends BackboneElementType
{

    /**
     * Begin and end dates for the commercial distribution of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $marketPeriod
     */
    private $marketPeriod = null;

    /**
     * National state or territory to which the marketDistribution recers, typically where the device is commercialized.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $subJurisdiction
     */
    private $subJurisdiction = null;

    /**
     * Gets as marketPeriod
     *
     * Begin and end dates for the commercial distribution of the device.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getMarketPeriod()
    {
        return $this->marketPeriod;
    }

    /**
     * Sets a new marketPeriod
     *
     * Begin and end dates for the commercial distribution of the device.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $marketPeriod
     * @return self
     */
    public function setMarketPeriod(\TKusy\Hl7Fhir\R5\PeriodType $marketPeriod)
    {
        $this->marketPeriod = $marketPeriod;
        return $this;
    }

    /**
     * Gets as subJurisdiction
     *
     * National state or territory to which the marketDistribution recers, typically where the device is commercialized.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getSubJurisdiction()
    {
        return $this->subJurisdiction;
    }

    /**
     * Sets a new subJurisdiction
     *
     * National state or territory to which the marketDistribution recers, typically where the device is commercialized.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $subJurisdiction
     * @return self
     */
    public function setSubJurisdiction(\TKusy\Hl7Fhir\R5\UriType $subJurisdiction)
    {
        $this->subJurisdiction = $subJurisdiction;
        return $this;
    }


}

