<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing BiologicallyDerivedProductStorageType
 *
 * A material substance originating from a biological entity intended to be transplanted or infused
 * into another (possibly the same) biological entity.
 * XSD Type: BiologicallyDerivedProduct.Storage
 */
class BiologicallyDerivedProductStorageType extends BackboneElementType
{

    /**
     * Description of storage.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $description
     */
    private $description = null;

    /**
     * Storage temperature.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $temperature
     */
    private $temperature = null;

    /**
     * Temperature scale used.
     *
     * @var \TKusy\Hl7Fhir\R4\BiologicallyDerivedProductStorageScaleType $scale
     */
    private $scale = null;

    /**
     * Storage timeperiod.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $duration
     */
    private $duration = null;

    /**
     * Gets as description
     *
     * Description of storage.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of storage.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as temperature
     *
     * Storage temperature.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Sets a new temperature
     *
     * Storage temperature.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $temperature
     * @return self
     */
    public function setTemperature(\TKusy\Hl7Fhir\R4\DecimalType $temperature)
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * Gets as scale
     *
     * Temperature scale used.
     *
     * @return \TKusy\Hl7Fhir\R4\BiologicallyDerivedProductStorageScaleType
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * Sets a new scale
     *
     * Temperature scale used.
     *
     * @param \TKusy\Hl7Fhir\R4\BiologicallyDerivedProductStorageScaleType $scale
     * @return self
     */
    public function setScale(\TKusy\Hl7Fhir\R4\BiologicallyDerivedProductStorageScaleType $scale)
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * Gets as duration
     *
     * Storage timeperiod.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * Storage timeperiod.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $duration
     * @return self
     */
    public function setDuration(\TKusy\Hl7Fhir\R4\PeriodType $duration)
    {
        $this->duration = $duration;
        return $this;
    }


}

