<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceNameType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * XSD Type: Device.Name
 */
class DeviceNameType extends BackboneElementType
{

    /**
     * The actual name that identifies the device.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Indicates the kind of name. RegisteredName | UserFriendlyName | PatientReportedName.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceNameTypeType $type
     */
    private $type = null;

    /**
     * Indicates the default or preferred name to be displayed.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $display
     */
    private $display = null;

    /**
     * Gets as value
     *
     * The actual name that identifies the device.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The actual name that identifies the device.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates the kind of name. RegisteredName | UserFriendlyName | PatientReportedName.
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
     * Indicates the kind of name. RegisteredName | UserFriendlyName | PatientReportedName.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceNameTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\DeviceNameTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as display
     *
     * Indicates the default or preferred name to be displayed.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * Indicates the default or preferred name to be displayed.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $display
     * @return self
     */
    public function setDisplay(?\TKusy\Hl7Fhir\R5\BooleanType $display = null)
    {
        $this->display = $display;
        return $this;
    }


}

