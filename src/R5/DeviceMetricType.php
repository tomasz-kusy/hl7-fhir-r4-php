<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceMetricType
 *
 * Describes a measurement, calculation or setting capability of a device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DeviceMetric
 */
class DeviceMetricType extends DomainResourceType
{

    /**
     * Instance identifiers assigned to a device, by the device or gateway software, manufacturers, other organizations or owners. For example, handle ID.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $unit
     */
    private $unit = null;

    /**
     * Describes the link to the Device. This is also known as a channel device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    private $device = null;

    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceMetricOperationalStatusType $operationalStatus
     */
    private $operationalStatus = null;

    /**
     * The preferred color associated with the metric (e.g., display color). This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth; the metrics are displayed in different characteristic colors, such as HR in blue, BP in green, and PR and SpO2 in magenta.
     *
     * @var \TKusy\Hl7Fhir\R5\ColorCodesOrRGBType $color
     */
    private $color = null;

    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceMetricCategoryType $category
     */
    private $category = null;

    /**
     * The frequency at which the metric is taken or recorded. Devices measure metrics at a wide range of frequencies; for example, an ECG might sample measurements in the millisecond range, while an NIBP might trigger only once an hour. Less often, the measurementFrequency may be based on a unit other than time, such as distance (e.g. for a measuring wheel). The update period may be different than the measurement frequency, if the device does not update the published observed value with the same frequency as it was measured.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $measurementFrequency
     */
    private $measurementFrequency = null;

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationType[] $calibration
     */
    private $calibration = null;

    /**
     * Adds as identifier
     *
     * Instance identifiers assigned to a device, by the device or gateway software, manufacturers, other organizations or owners. For example, handle ID.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Instance identifiers assigned to a device, by the device or gateway software, manufacturers, other organizations or owners. For example, handle ID.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Instance identifiers assigned to a device, by the device or gateway software, manufacturers, other organizations or owners. For example, handle ID.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Instance identifiers assigned to a device, by the device or gateway software, manufacturers, other organizations or owners. For example, handle ID.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Instance identifiers assigned to a device, by the device or gateway software, manufacturers, other organizations or owners. For example, handle ID.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
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
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as unit
     *
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $unit
     * @return self
     */
    public function setUnit(?\TKusy\Hl7Fhir\R5\CodeableConceptType $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as device
     *
     * Describes the link to the Device. This is also known as a channel device.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * Describes the link to the Device. This is also known as a channel device.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     * @return self
     */
    public function setDevice(\TKusy\Hl7Fhir\R5\ReferenceType $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as operationalStatus
     *
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceMetricOperationalStatusType
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * Sets a new operationalStatus
     *
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceMetricOperationalStatusType $operationalStatus
     * @return self
     */
    public function setOperationalStatus(?\TKusy\Hl7Fhir\R5\DeviceMetricOperationalStatusType $operationalStatus = null)
    {
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * Gets as color
     *
     * The preferred color associated with the metric (e.g., display color). This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth; the metrics are displayed in different characteristic colors, such as HR in blue, BP in green, and PR and SpO2 in magenta.
     *
     * @return \TKusy\Hl7Fhir\R5\ColorCodesOrRGBType
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * The preferred color associated with the metric (e.g., display color). This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth; the metrics are displayed in different characteristic colors, such as HR in blue, BP in green, and PR and SpO2 in magenta.
     *
     * @param \TKusy\Hl7Fhir\R5\ColorCodesOrRGBType $color
     * @return self
     */
    public function setColor(?\TKusy\Hl7Fhir\R5\ColorCodesOrRGBType $color = null)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as category
     *
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceMetricCategoryType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceMetricCategoryType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7Fhir\R5\DeviceMetricCategoryType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as measurementFrequency
     *
     * The frequency at which the metric is taken or recorded. Devices measure metrics at a wide range of frequencies; for example, an ECG might sample measurements in the millisecond range, while an NIBP might trigger only once an hour. Less often, the measurementFrequency may be based on a unit other than time, such as distance (e.g. for a measuring wheel). The update period may be different than the measurement frequency, if the device does not update the published observed value with the same frequency as it was measured.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getMeasurementFrequency()
    {
        return $this->measurementFrequency;
    }

    /**
     * Sets a new measurementFrequency
     *
     * The frequency at which the metric is taken or recorded. Devices measure metrics at a wide range of frequencies; for example, an ECG might sample measurements in the millisecond range, while an NIBP might trigger only once an hour. Less often, the measurementFrequency may be based on a unit other than time, such as distance (e.g. for a measuring wheel). The update period may be different than the measurement frequency, if the device does not update the published observed value with the same frequency as it was measured.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $measurementFrequency
     * @return self
     */
    public function setMeasurementFrequency(?\TKusy\Hl7Fhir\R5\QuantityType $measurementFrequency = null)
    {
        $this->measurementFrequency = $measurementFrequency;
        return $this;
    }

    /**
     * Adds as calibration
     *
     * Describes the calibrations that have been performed or that are required to be performed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationType $calibration
     */
    public function addToCalibration(\TKusy\Hl7Fhir\R5\DeviceMetricCalibrationType $calibration)
    {
        $this->calibration[] = $calibration;
        return $this;
    }

    /**
     * isset calibration
     *
     * Describes the calibrations that have been performed or that are required to be performed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCalibration($index)
    {
        return isset($this->calibration[$index]);
    }

    /**
     * unset calibration
     *
     * Describes the calibrations that have been performed or that are required to be performed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCalibration($index)
    {
        unset($this->calibration[$index]);
    }

    /**
     * Gets as calibration
     *
     * Describes the calibrations that have been performed or that are required to be performed.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationType[]
     */
    public function getCalibration()
    {
        return $this->calibration;
    }

    /**
     * Sets a new calibration
     *
     * Describes the calibrations that have been performed or that are required to be performed.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceMetricCalibrationType[] $calibration
     * @return self
     */
    public function setCalibration(array $calibration = null)
    {
        $this->calibration = $calibration;
        return $this;
    }


}

