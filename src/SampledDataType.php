<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SampledDataType
 *
 * A series of measurements taken by a device, with upper and lower limits. There may be more than one dimension in the data.If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 * XSD Type: SampledData
 */
class SampledDataType extends ElementType
{

    /**
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $origin
     */
    private $origin = null;

    /**
     * The length of time between sampling times, measured in milliseconds.
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $period
     */
    private $period = null;

    /**
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $factor
     */
    private $factor = null;

    /**
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $lowerLimit
     */
    private $lowerLimit = null;

    /**
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $upperLimit
     */
    private $upperLimit = null;

    /**
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $dimensions
     */
    private $dimensions = null;

    /**
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @var \TKusy\Hl7FhirR4\SampledDataDataType $data
     */
    private $data = null;

    /**
     * Gets as origin
     *
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $origin
     * @return self
     */
    public function setOrigin(\TKusy\Hl7FhirR4\QuantityType $origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as period
     *
     * The length of time between sampling times, measured in milliseconds.
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The length of time between sampling times, measured in milliseconds.
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\DecimalType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as factor
     *
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Sets a new factor
     *
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $factor
     * @return self
     */
    public function setFactor(\TKusy\Hl7FhirR4\DecimalType $factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Gets as lowerLimit
     *
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getLowerLimit()
    {
        return $this->lowerLimit;
    }

    /**
     * Sets a new lowerLimit
     *
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $lowerLimit
     * @return self
     */
    public function setLowerLimit(\TKusy\Hl7FhirR4\DecimalType $lowerLimit)
    {
        $this->lowerLimit = $lowerLimit;
        return $this;
    }

    /**
     * Gets as upperLimit
     *
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getUpperLimit()
    {
        return $this->upperLimit;
    }

    /**
     * Sets a new upperLimit
     *
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $upperLimit
     * @return self
     */
    public function setUpperLimit(\TKusy\Hl7FhirR4\DecimalType $upperLimit)
    {
        $this->upperLimit = $upperLimit;
        return $this;
    }

    /**
     * Gets as dimensions
     *
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * Sets a new dimensions
     *
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $dimensions
     * @return self
     */
    public function setDimensions(\TKusy\Hl7FhirR4\PositiveIntType $dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * Gets as data
     *
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @return \TKusy\Hl7FhirR4\SampledDataDataType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * A series of data points which are decimal values separated by a single space (character u20). The special values "E" (error), "L" (below detection limit) and "U" (above detection limit) can also be used in place of a decimal value.
     *
     * @param \TKusy\Hl7FhirR4\SampledDataDataType $data
     * @return self
     */
    public function setData(\TKusy\Hl7FhirR4\SampledDataDataType $data)
    {
        $this->data = $data;
        return $this;
    }


}

