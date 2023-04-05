<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionUdiDeviceIdentifierType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.UdiDeviceIdentifier
 */
class DeviceDefinitionUdiDeviceIdentifierType extends BackboneElementType
{

    /**
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdiction provided in the DeviceDefinition.udiDeviceIdentifier.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $deviceIdentifier
     */
    private $deviceIdentifier = null;

    /**
     * The organization that assigns the identifier algorithm.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $issuer
     */
    private $issuer = null;

    /**
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Indicates where and when the device is available on the market.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionMarketDistributionType[] $marketDistribution
     */
    private $marketDistribution = null;

    /**
     * Gets as deviceIdentifier
     *
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdiction provided in the DeviceDefinition.udiDeviceIdentifier.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * Sets a new deviceIdentifier
     *
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdiction provided in the DeviceDefinition.udiDeviceIdentifier.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $deviceIdentifier
     * @return self
     */
    public function setDeviceIdentifier(\TKusy\Hl7Fhir\R5\StringType $deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * The organization that assigns the identifier algorithm.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * The organization that assigns the identifier algorithm.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $issuer
     * @return self
     */
    public function setIssuer(\TKusy\Hl7Fhir\R5\UriType $issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as jurisdiction
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $jurisdiction
     * @return self
     */
    public function setJurisdiction(\TKusy\Hl7Fhir\R5\UriType $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Adds as marketDistribution
     *
     * Indicates where and when the device is available on the market.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionMarketDistributionType $marketDistribution
     */
    public function addToMarketDistribution(\TKusy\Hl7Fhir\R5\DeviceDefinitionMarketDistributionType $marketDistribution)
    {
        $this->marketDistribution[] = $marketDistribution;
        return $this;
    }

    /**
     * isset marketDistribution
     *
     * Indicates where and when the device is available on the market.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketDistribution($index)
    {
        return isset($this->marketDistribution[$index]);
    }

    /**
     * unset marketDistribution
     *
     * Indicates where and when the device is available on the market.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketDistribution($index)
    {
        unset($this->marketDistribution[$index]);
    }

    /**
     * Gets as marketDistribution
     *
     * Indicates where and when the device is available on the market.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionMarketDistributionType[]
     */
    public function getMarketDistribution()
    {
        return $this->marketDistribution;
    }

    /**
     * Sets a new marketDistribution
     *
     * Indicates where and when the device is available on the market.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionMarketDistributionType[] $marketDistribution
     * @return self
     */
    public function setMarketDistribution(array $marketDistribution = null)
    {
        $this->marketDistribution = $marketDistribution;
        return $this;
    }


}

