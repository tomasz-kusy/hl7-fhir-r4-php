<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SampledDataType
 *
 * A series of measurements taken by a device, with upper and lower limits. There may be more than one dimension in the data.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: SampledData
 */
class SampledDataType extends DataTypeType
{

    /**
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $origin
     */
    private $origin = null;

    /**
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based sampling.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $interval
     */
    private $interval = null;

    /**
     * The measurement unit in which the sample interval is expressed.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $intervalUnit
     */
    private $intervalUnit = null;

    /**
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $factor
     */
    private $factor = null;

    /**
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $lowerLimit
     */
    private $lowerLimit = null;

    /**
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $upperLimit
     */
    private $upperLimit = null;

    /**
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $dimensions
     */
    private $dimensions = null;

    /**
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $codeMap
     */
    private $codeMap = null;

    /**
     * A series of data points which are decimal values separated by a single space (character u20). The units in which the offsets are expressed are found in intervalUnit. The absolute point at which the measurements begin SHALL be conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime for a timing offset.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $offsets
     */
    private $offsets = null;

    /**
     * A series of data points which are decimal values or codes separated by a single space (character u20). The special codes "E" (error), "L" (below detection limit) and "U" (above detection limit) are also defined for used in place of decimal values.
     *
     * @var \TKusy\Hl7Fhir\R5\SampledDataDataTypeType $data
     */
    private $data = null;

    /**
     * Gets as origin
     *
     * The base quantity that a measured value of zero represents. In addition, this provides the units of the entire measurement series.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
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
     * @param \TKusy\Hl7Fhir\R5\QuantityType $origin
     * @return self
     */
    public function setOrigin(\TKusy\Hl7Fhir\R5\QuantityType $origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Gets as interval
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based sampling.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets a new interval
     *
     * Amount of intervalUnits between samples, e.g. milliseconds for time-based sampling.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $interval
     * @return self
     */
    public function setInterval(?\TKusy\Hl7Fhir\R5\DecimalType $interval = null)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * Gets as intervalUnit
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getIntervalUnit()
    {
        return $this->intervalUnit;
    }

    /**
     * Sets a new intervalUnit
     *
     * The measurement unit in which the sample interval is expressed.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $intervalUnit
     * @return self
     */
    public function setIntervalUnit(\TKusy\Hl7Fhir\R5\CodeType $intervalUnit)
    {
        $this->intervalUnit = $intervalUnit;
        return $this;
    }

    /**
     * Gets as factor
     *
     * A correction factor that is applied to the sampled data points before they are added to the origin.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
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
     * @param \TKusy\Hl7Fhir\R5\DecimalType $factor
     * @return self
     */
    public function setFactor(?\TKusy\Hl7Fhir\R5\DecimalType $factor = null)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Gets as lowerLimit
     *
     * The lower limit of detection of the measured points. This is needed if any of the data points have the value "L" (lower than detection limit).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
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
     * @param \TKusy\Hl7Fhir\R5\DecimalType $lowerLimit
     * @return self
     */
    public function setLowerLimit(?\TKusy\Hl7Fhir\R5\DecimalType $lowerLimit = null)
    {
        $this->lowerLimit = $lowerLimit;
        return $this;
    }

    /**
     * Gets as upperLimit
     *
     * The upper limit of detection of the measured points. This is needed if any of the data points have the value "U" (higher than detection limit).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
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
     * @param \TKusy\Hl7Fhir\R5\DecimalType $upperLimit
     * @return self
     */
    public function setUpperLimit(?\TKusy\Hl7Fhir\R5\DecimalType $upperLimit = null)
    {
        $this->upperLimit = $upperLimit;
        return $this;
    }

    /**
     * Gets as dimensions
     *
     * The number of sample points at each time point. If this value is greater than one, then the dimensions will be interlaced - all the sample points for a point in time will be recorded at once.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
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
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $dimensions
     * @return self
     */
    public function setDimensions(\TKusy\Hl7Fhir\R5\PositiveIntType $dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * Gets as codeMap
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getCodeMap()
    {
        return $this->codeMap;
    }

    /**
     * Sets a new codeMap
     *
     * Reference to ConceptMap that defines the codes used in the data.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $codeMap
     * @return self
     */
    public function setCodeMap(?\TKusy\Hl7Fhir\R5\CanonicalType $codeMap = null)
    {
        $this->codeMap = $codeMap;
        return $this;
    }

    /**
     * Gets as offsets
     *
     * A series of data points which are decimal values separated by a single space (character u20). The units in which the offsets are expressed are found in intervalUnit. The absolute point at which the measurements begin SHALL be conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime for a timing offset.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getOffsets()
    {
        return $this->offsets;
    }

    /**
     * Sets a new offsets
     *
     * A series of data points which are decimal values separated by a single space (character u20). The units in which the offsets are expressed are found in intervalUnit. The absolute point at which the measurements begin SHALL be conveyed outside the scope of this datatype, e.g. Observation.effectiveDateTime for a timing offset.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $offsets
     * @return self
     */
    public function setOffsets(?\TKusy\Hl7Fhir\R5\StringType $offsets = null)
    {
        $this->offsets = $offsets;
        return $this;
    }

    /**
     * Gets as data
     *
     * A series of data points which are decimal values or codes separated by a single space (character u20). The special codes "E" (error), "L" (below detection limit) and "U" (above detection limit) are also defined for used in place of decimal values.
     *
     * @return \TKusy\Hl7Fhir\R5\SampledDataDataTypeType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * A series of data points which are decimal values or codes separated by a single space (character u20). The special codes "E" (error), "L" (below detection limit) and "U" (above detection limit) are also defined for used in place of decimal values.
     *
     * @param \TKusy\Hl7Fhir\R5\SampledDataDataTypeType $data
     * @return self
     */
    public function setData(?\TKusy\Hl7Fhir\R5\SampledDataDataTypeType $data = null)
    {
        $this->data = $data;
        return $this;
    }


}

