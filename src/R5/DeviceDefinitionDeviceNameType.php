<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionDeviceNameType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.DeviceName
 */
class DeviceDefinitionDeviceNameType extends BackboneElementType
{

    /**
     * A human-friendly name that is used to refer to the device - depending on the type, it can be the brand name, the common name or alias, or other.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * The type of deviceName.
     * RegisteredName | UserFriendlyName | PatientReportedName.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceNameTypeType $type
     */
    private $type = null;

    /**
     * Gets as name
     *
     * A human-friendly name that is used to refer to the device - depending on the type, it can be the brand name, the common name or alias, or other.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A human-friendly name that is used to refer to the device - depending on the type, it can be the brand name, the common name or alias, or other.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of deviceName.
     * RegisteredName | UserFriendlyName | PatientReportedName.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceNameTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of deviceName.
     * RegisteredName | UserFriendlyName | PatientReportedName.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceNameTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\DeviceNameTypeType $type)
    {
        $this->type = $type;
        return $this;
    }


}

