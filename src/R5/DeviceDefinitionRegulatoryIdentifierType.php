<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionRegulatoryIdentifierType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.RegulatoryIdentifier
 */
class DeviceDefinitionRegulatoryIdentifierType extends BackboneElementType
{

    /**
     * The type of identifier itself.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierTypeType $type
     */
    private $type = null;

    /**
     * The identifier itself.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $deviceIdentifier
     */
    private $deviceIdentifier = null;

    /**
     * The organization that issued this identifier.
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
     * Gets as type
     *
     * The type of identifier itself.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of identifier itself.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as deviceIdentifier
     *
     * The identifier itself.
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
     * The identifier itself.
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
     * The organization that issued this identifier.
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
     * The organization that issued this identifier.
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


}

