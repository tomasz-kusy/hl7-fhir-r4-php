<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceSpecializationType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * XSD Type: Device.Specialization
 */
class DeviceSpecializationType extends BackboneElementType
{

    /**
     * The standard that is used to operate and communicate.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $systemType
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $systemType
     * @return self
     */
    public function setSystemType(\TKusy\Hl7FhirR4\CodeableConceptType $systemType)
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

