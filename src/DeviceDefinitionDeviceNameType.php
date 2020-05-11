<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceDefinitionDeviceNameType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.DeviceName
 */
class DeviceDefinitionDeviceNameType extends BackboneElementType
{

    /**
     * The name of the device.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The type of deviceName.
     * UDILabelName | UserFriendlyName | PatientReportedName | ManufactureDeviceName | ModelName.
     *
     * @var \TKusy\Hl7FhirR4\DeviceNameTypeType $type
     */
    private $type = null;

    /**
     * Gets as name
     *
     * The name of the device.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the device.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of deviceName.
     * UDILabelName | UserFriendlyName | PatientReportedName | ManufactureDeviceName | ModelName.
     *
     * @return \TKusy\Hl7FhirR4\DeviceNameTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of deviceName.
     * UDILabelName | UserFriendlyName | PatientReportedName | ManufactureDeviceName | ModelName.
     *
     * @param \TKusy\Hl7FhirR4\DeviceNameTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\DeviceNameTypeType $type)
    {
        $this->type = $type;
        return $this;
    }


}

