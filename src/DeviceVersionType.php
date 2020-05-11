<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceVersionType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * XSD Type: Device.Version
 */
class DeviceVersionType extends BackboneElementType
{

    /**
     * The type of the device version.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A single component of the device version.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $component
     */
    private $component = null;

    /**
     * The version text.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as type
     *
     * The type of the device version.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the device version.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as component
     *
     * A single component of the device version.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * A single component of the device version.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $component
     * @return self
     */
    public function setComponent(\TKusy\Hl7FhirR4\IdentifierType $component)
    {
        $this->component = $component;
        return $this;
    }

    /**
     * Gets as value
     *
     * The version text.
     *
     * @return string
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
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

