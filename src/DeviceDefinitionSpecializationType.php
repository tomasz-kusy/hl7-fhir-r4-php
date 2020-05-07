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
     * @var \TKusy\Hl7FhirR4\StringType $systemType
     */
    private $systemType = null;

    /**
     * The version of the standard that is used to operate and communicate.
     *
     * @var \TKusy\Hl7FhirR4\StringType $version
     */
    private $version = null;

    /**
     * Gets as systemType
     *
     * The standard that is used to operate and communicate.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $systemType
     * @return self
     */
    public function setSystemType(\TKusy\Hl7FhirR4\StringType $systemType)
    {
        $this->systemType = $systemType;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the standard that is used to operate and communicate.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $version
     * @return self
     */
    public function setVersion(\TKusy\Hl7FhirR4\StringType $version)
    {
        $this->version = $version;
        return $this;
    }


}

