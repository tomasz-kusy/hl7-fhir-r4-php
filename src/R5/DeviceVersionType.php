<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceVersionType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * XSD Type: Device.Version
 */
class DeviceVersionType extends BackboneElementType
{

    /**
     * The type of the device version, e.g. manufacturer, approved, internal.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The hardware or software module of the device to which the version applies.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $component
     */
    private $component = null;

    /**
     * The date the version was installed on the device.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $installDate
     */
    private $installDate = null;

    /**
     * The version text.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $value
     */
    private $value = null;

    /**
     * Gets as type
     *
     * The type of the device version, e.g. manufacturer, approved, internal.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the device version, e.g. manufacturer, approved, internal.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as component
     *
     * The hardware or software module of the device to which the version applies.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * The hardware or software module of the device to which the version applies.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $component
     * @return self
     */
    public function setComponent(?\TKusy\Hl7Fhir\R5\IdentifierType $component = null)
    {
        $this->component = $component;
        return $this;
    }

    /**
     * Gets as installDate
     *
     * The date the version was installed on the device.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getInstallDate()
    {
        return $this->installDate;
    }

    /**
     * Sets a new installDate
     *
     * The date the version was installed on the device.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $installDate
     * @return self
     */
    public function setInstallDate(?\TKusy\Hl7Fhir\R5\DateTimeType $installDate = null)
    {
        $this->installDate = $installDate;
        return $this;
    }

    /**
     * Gets as value
     *
     * The version text.
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
     * The version text.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R5\StringType $value)
    {
        $this->value = $value;
        return $this;
    }


}

