<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing BodyStructureDistanceFromLandmarkType
 *
 * Record details about an anatomical structure. This resource may be used when a coded concept does not provide the necessary detail needed for the use case.
 * XSD Type: BodyStructure.DistanceFromLandmark
 */
class BodyStructureDistanceFromLandmarkType extends BackboneElementType
{

    /**
     * An instrument, tool, analyzer, etc. used in the measurement.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $device
     */
    private $device = null;

    /**
     * The measured distance (e.g., in cm) from a body landmark.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType[] $value
     */
    private $value = null;

    /**
     * Adds as device
     *
     * An instrument, tool, analyzer, etc. used in the measurement.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $device
     */
    public function addToDevice(\TKusy\Hl7Fhir\R5\CodeableReferenceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * An instrument, tool, analyzer, etc. used in the measurement.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDevice($index)
    {
        return isset($this->device[$index]);
    }

    /**
     * unset device
     *
     * An instrument, tool, analyzer, etc. used in the measurement.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDevice($index)
    {
        unset($this->device[$index]);
    }

    /**
     * Gets as device
     *
     * An instrument, tool, analyzer, etc. used in the measurement.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * An instrument, tool, analyzer, etc. used in the measurement.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $device
     * @return self
     */
    public function setDevice(array $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adds as value
     *
     * The measured distance (e.g., in cm) from a body landmark.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuantityType $value
     */
    public function addToValue(\TKusy\Hl7Fhir\R5\QuantityType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * The measured distance (e.g., in cm) from a body landmark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * The measured distance (e.g., in cm) from a body landmark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * The measured distance (e.g., in cm) from a body landmark.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The measured distance (e.g., in cm) from a body landmark.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType[] $value
     * @return self
     */
    public function setValue(array $value = null)
    {
        $this->value = $value;
        return $this;
    }


}

