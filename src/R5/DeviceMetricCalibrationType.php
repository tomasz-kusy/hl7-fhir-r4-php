<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceMetricCalibrationType
 *
 * Describes a measurement, calculation or setting capability of a device.
 * XSD Type: DeviceMetric.Calibration
 */
class DeviceMetricCalibrationType extends BackboneElementType
{

    /**
     * Describes the type of the calibration method.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationTypeType $type
     */
    private $type = null;

    /**
     * Describes the state of the calibration.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationStateType $state
     */
    private $state = null;

    /**
     * Describes the time last calibration has been performed.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $time
     */
    private $time = null;

    /**
     * Gets as type
     *
     * Describes the type of the calibration method.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Describes the type of the calibration method.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationTypeType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\DeviceMetricCalibrationTypeType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as state
     *
     * Describes the state of the calibration.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationStateType
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * Describes the state of the calibration.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationStateType $state
     * @return self
     */
    public function setState(?\TKusy\Hl7Fhir\R5\DeviceMetricCalibrationStateType $state = null)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as time
     *
     * Describes the time last calibration has been performed.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Describes the time last calibration has been performed.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $time
     * @return self
     */
    public function setTime(?\TKusy\Hl7Fhir\R5\InstantType $time = null)
    {
        $this->time = $time;
        return $this;
    }


}

