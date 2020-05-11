<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ObservationComponentType
 *
 * Measurements and simple assertions made about a patient, device or other subject.
 * XSD Type: Observation.Component
 */
class ObservationComponentType extends BackboneElementType
{

    /**
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var string $valueString
     */
    private $valueString = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var bool $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \integer $valueInteger
     */
    private $valueInteger = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $valueRatio
     */
    private $valueRatio = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\SampledDataType $valueSampledData
     */
    private $valueSampledData = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $dataAbsentReason
     */
    private $dataAbsentReason = null;

    /**
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $interpretation
     */
    private $interpretation = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     *
     * @var \TKusy\Hl7FhirR4\ObservationReferenceRangeType[] $referenceRange
     */
    private $referenceRange = null;

    /**
     * Gets as code
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(\TKusy\Hl7FhirR4\QuantityType $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return string
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param string $valueString
     * @return self
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return bool
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param bool $valueBoolean
     * @return self
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \integer
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \integer $valueInteger
     * @return self
     */
    public function setValueInteger(\integer $valueInteger)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueRange
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $valueRange
     * @return self
     */
    public function setValueRange(\TKusy\Hl7FhirR4\RangeType $valueRange)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueRatio
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Sets a new valueRatio
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $valueRatio
     * @return self
     */
    public function setValueRatio(\TKusy\Hl7FhirR4\RatioType $valueRatio)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * Gets as valueSampledData
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\SampledDataType
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * Sets a new valueSampledData
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\SampledDataType $valueSampledData
     * @return self
     */
    public function setValueSampledData(\TKusy\Hl7FhirR4\SampledDataType $valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * Gets as valueTime
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimeType
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * Sets a new valueTime
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimeType $valueTime
     * @return self
     */
    public function setValueTime(\TKusy\Hl7FhirR4\TimeType $valueTime)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * Gets as valueDateTime
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Sets a new valueDateTime
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(\TKusy\Hl7FhirR4\DateTimeType $valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * Gets as valuePeriod
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * Sets a new valuePeriod
     *
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $valuePeriod
     * @return self
     */
    public function setValuePeriod(\TKusy\Hl7FhirR4\PeriodType $valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Gets as dataAbsentReason
     *
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }

    /**
     * Sets a new dataAbsentReason
     *
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $dataAbsentReason
     * @return self
     */
    public function setDataAbsentReason(\TKusy\Hl7FhirR4\CodeableConceptType $dataAbsentReason)
    {
        $this->dataAbsentReason = $dataAbsentReason;
        return $this;
    }

    /**
     * Adds as interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $interpretation
     */
    public function addToInterpretation(\TKusy\Hl7FhirR4\CodeableConceptType $interpretation)
    {
        $this->interpretation[] = $interpretation;
        return $this;
    }

    /**
     * isset interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInterpretation($index)
    {
        return isset($this->interpretation[$index]);
    }

    /**
     * unset interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInterpretation($index)
    {
        unset($this->interpretation[$index]);
    }

    /**
     * Gets as interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * Sets a new interpretation
     *
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $interpretation
     * @return self
     */
    public function setInterpretation(array $interpretation)
    {
        $this->interpretation = $interpretation;
        return $this;
    }

    /**
     * Adds as referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ObservationReferenceRangeType $referenceRange
     */
    public function addToReferenceRange(\TKusy\Hl7FhirR4\ObservationReferenceRangeType $referenceRange)
    {
        $this->referenceRange[] = $referenceRange;
        return $this;
    }

    /**
     * isset referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceRange($index)
    {
        return isset($this->referenceRange[$index]);
    }

    /**
     * unset referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceRange($index)
    {
        unset($this->referenceRange[$index]);
    }

    /**
     * Gets as referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     *
     * @return \TKusy\Hl7FhirR4\ObservationReferenceRangeType[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Sets a new referenceRange
     *
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     *
     * @param \TKusy\Hl7FhirR4\ObservationReferenceRangeType[] $referenceRange
     * @return self
     */
    public function setReferenceRange(array $referenceRange)
    {
        $this->referenceRange = $referenceRange;
        return $this;
    }


}

