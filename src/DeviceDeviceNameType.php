<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceDeviceNameType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * XSD Type: Device.DeviceName
 */
class DeviceDeviceNameType extends BackboneElementType
{

    /**
     * The name of the device.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
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
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
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

