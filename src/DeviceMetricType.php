<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceMetricType
 *
 * Describes a measurement, calculation or setting capability of a medical device.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: DeviceMetric
 */
class DeviceMetricType extends DomainResourceType
{

    /**
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $unit
     */
    private $unit = null;

    /**
     * Describes the link to the Device that this DeviceMetric belongs to and that contains administrative device information such as manufacturer, serial number, etc.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $source
     */
    private $source = null;

    /**
     * Describes the link to the Device that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a Device that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $parent
     */
    private $parent = null;

    /**
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     *
     * @var \TKusy\Hl7FhirR4\DeviceMetricOperationalStatusType $operationalStatus
     */
    private $operationalStatus = null;

    /**
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     *
     * @var \TKusy\Hl7FhirR4\DeviceMetricColorType $color
     */
    private $color = null;

    /**
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     *
     * @var \TKusy\Hl7FhirR4\DeviceMetricCategoryType $category
     */
    private $category = null;

    /**
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     *
     * @var \TKusy\Hl7FhirR4\TimingType $measurementPeriod
     */
    private $measurementPeriod = null;

    /**
     * Describes the calibrations that have been performed or that are required to be performed.
     *
     * @var \TKusy\Hl7FhirR4\DeviceMetricCalibrationType[] $calibration
     */
    private $calibration = [
        
    ];

    /**
     * Adds as identifier
     *
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique instance identifiers assigned to a device by the device or gateway software, manufacturers, other organizations or owners. For example: handle ID.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
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
     * Describes the type of the metric. For example: Heart Rate, PEEP Setting, etc.
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
     * Gets as unit
     *
     * Describes the unit that an observed value determined for this metric will have. For example: Percent, Seconds, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $unit
     * @return self
     */
    public function setUnit(\TKusy\Hl7FhirR4\CodeableConceptType $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as source
     *
     * Describes the link to the Device that this DeviceMetric belongs to and that contains administrative device information such as manufacturer, serial number, etc.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Describes the link to the Device that this DeviceMetric belongs to and that contains administrative device information such as manufacturer, serial number, etc.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7FhirR4\ReferenceType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as parent
     *
     * Describes the link to the Device that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a Device that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * Describes the link to the Device that this DeviceMetric belongs to and that provide information about the location of this DeviceMetric in the containment structure of the parent Device. An example would be a Device that represents a Channel. This reference can be used by a client application to distinguish DeviceMetrics that have the same type, but should be interpreted based on their containment location.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $parent
     * @return self
     */
    public function setParent(\TKusy\Hl7FhirR4\ReferenceType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as operationalStatus
     *
     * Indicates current operational state of the device. For example: On, Off, Standby, etc.
     *
     * @return \TKusy\Hl7FhirR4\DeviceMetricOperationalStatusType
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
     * @param \TKusy\Hl7FhirR4\DeviceMetricOperationalStatusType $operationalStatus
     * @return self
     */
    public function setOperationalStatus(\TKusy\Hl7FhirR4\DeviceMetricOperationalStatusType $operationalStatus)
    {
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * Gets as color
     *
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     *
     * @return \TKusy\Hl7FhirR4\DeviceMetricColorType
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * Describes the color representation for the metric. This is often used to aid clinicians to track and identify parameter types by color. In practice, consider a Patient Monitor that has ECG/HR and Pleth for example; the parameters are displayed in different characteristic colors, such as HR-blue, BP-green, and PR and SpO2- magenta.
     *
     * @param \TKusy\Hl7FhirR4\DeviceMetricColorType $color
     * @return self
     */
    public function setColor(\TKusy\Hl7FhirR4\DeviceMetricColorType $color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as category
     *
     * Indicates the category of the observation generation process. A DeviceMetric can be for example a setting, measurement, or calculation.
     *
     * @return \TKusy\Hl7FhirR4\DeviceMetricCategoryType
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
     * @param \TKusy\Hl7FhirR4\DeviceMetricCategoryType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\DeviceMetricCategoryType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as measurementPeriod
     *
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getMeasurementPeriod()
    {
        return $this->measurementPeriod;
    }

    /**
     * Sets a new measurementPeriod
     *
     * Describes the measurement repetition time. This is not necessarily the same as the update period. The measurement repetition time can range from milliseconds up to hours. An example for a measurement repetition time in the range of milliseconds is the sampling rate of an ECG. An example for a measurement repetition time in the range of hours is a NIBP that is triggered automatically every hour. The update period may be different than the measurement repetition time, if the device does not update the published observed value with the same frequency as it was measured.
     *
     * @param \TKusy\Hl7FhirR4\TimingType $measurementPeriod
     * @return self
     */
    public function setMeasurementPeriod(\TKusy\Hl7FhirR4\TimingType $measurementPeriod)
    {
        $this->measurementPeriod = $measurementPeriod;
        return $this;
    }

    /**
     * Adds as calibration
     *
     * Describes the calibrations that have been performed or that are required to be performed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceMetricCalibrationType $calibration
     */
    public function addToCalibration(\TKusy\Hl7FhirR4\DeviceMetricCalibrationType $calibration)
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
     * @return \TKusy\Hl7FhirR4\DeviceMetricCalibrationType[]
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
     * @param \TKusy\Hl7FhirR4\DeviceMetricCalibrationType[] $calibration
     * @return self
     */
    public function setCalibration(array $calibration)
    {
        $this->calibration = $calibration;
        return $this;
    }


}

