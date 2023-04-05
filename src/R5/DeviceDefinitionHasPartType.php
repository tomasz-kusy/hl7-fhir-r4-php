<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionHasPartType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.HasPart
 */
class DeviceDefinitionHasPartType extends BackboneElementType
{

    /**
     * Reference to the device that is part of the current device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Number of instances of the component device in the current device.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $count
     */
    private $count = null;

    /**
     * Gets as reference
     *
     * Reference to the device that is part of the current device.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Reference to the device that is part of the current device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7Fhir\R5\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as count
     *
     * Number of instances of the component device in the current device.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * Number of instances of the component device in the current device.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $count
     * @return self
     */
    public function setCount(?\TKusy\Hl7Fhir\R5\IntegerType $count = null)
    {
        $this->count = $count;
        return $this;
    }


}

