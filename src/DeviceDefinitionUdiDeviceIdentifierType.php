<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceDefinitionUdiDeviceIdentifierType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.UdiDeviceIdentifier
 */
class DeviceDefinitionUdiDeviceIdentifierType extends BackboneElementType
{

    /**
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdication porvided in the DeviceDefinition.udiDeviceIdentifier.
     *
     * @var string $deviceIdentifier
     */
    private $deviceIdentifier = null;

    /**
     * The organization that assigns the identifier algorithm.
     *
     * @var \TKusy\Hl7FhirR4\UriType $issuer
     */
    private $issuer = null;

    /**
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @var \TKusy\Hl7FhirR4\UriType $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Gets as deviceIdentifier
     *
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdication porvided in the DeviceDefinition.udiDeviceIdentifier.
     *
     * @return string
     */
    public function getDeviceIdentifier()
    {
        return $this->deviceIdentifier;
    }

    /**
     * Sets a new deviceIdentifier
     *
     * The identifier that is to be associated with every Device that references this DeviceDefintiion for the issuer and jurisdication porvided in the DeviceDefinition.udiDeviceIdentifier.
     *
     * @param string $deviceIdentifier
     * @return self
     */
    public function setDeviceIdentifier($deviceIdentifier)
    {
        $this->deviceIdentifier = $deviceIdentifier;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * The organization that assigns the identifier algorithm.
     *
     * @return \TKusy\Hl7FhirR4\UriType
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
     * @param \TKusy\Hl7FhirR4\UriType $issuer
     * @return self
     */
    public function setIssuer(\TKusy\Hl7FhirR4\UriType $issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as jurisdiction
     *
     * The jurisdiction to which the deviceIdentifier applies.
     *
     * @return \TKusy\Hl7FhirR4\UriType
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
     * @param \TKusy\Hl7FhirR4\UriType $jurisdiction
     * @return self
     */
    public function setJurisdiction(\TKusy\Hl7FhirR4\UriType $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }


}

