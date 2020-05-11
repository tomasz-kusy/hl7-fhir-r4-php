<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceDefinitionSpecializationType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Specialization
 */
class DeviceDefinitionSpecializationType extends BackboneElementType
{

    /**
     * The standard that is used to operate and communicate.
     *
     * @var string $systemType
     */
    private $systemType = null;

    /**
     * The version of the standard that is used to operate and communicate.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * Gets as systemType
     *
     * The standard that is used to operate and communicate.
     *
     * @return string
     */
    public function getSystemType()
    {
        return $this->systemType;
    }

    /**
     * Sets a new systemType
     *
     * The standard that is used to operate and communicate.
     *
     * @param string $systemType
     * @return self
     */
    public function setSystemType($systemType)
    {
        $this->systemType = $systemType;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the standard that is used to operate and communicate.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the standard that is used to operate and communicate.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

