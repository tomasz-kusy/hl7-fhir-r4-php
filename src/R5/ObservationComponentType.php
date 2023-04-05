<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     */
    private $valueCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $valueString
     */
    private $valueString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     */
    private $valueBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     */
    private $valueInteger = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $valueRange
     */
    private $valueRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $valueRatio
     */
    private $valueRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\SampledDataType $valueSampledData
     */
    private $valueSampledData = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimeType $valueTime
     */
    private $valueTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime
     */
    private $valueDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $valuePeriod
     */
    private $valuePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment
     */
    private $valueAttachment = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     */
    private $valueReference = null;

    /**
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $dataAbsentReason
     */
    private $dataAbsentReason = null;

    /**
     * A categorical assessment of an observation value. For example, high, low, normal.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $interpretation
     */
    private $interpretation = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     *
     * @var \TKusy\Hl7Fhir\R5\ObservationReferenceRangeType[] $referenceRange
     */
    private $referenceRange = null;

    /**
     * Gets as code
     *
     * Describes what was observed. Sometimes this is called the observation "code".
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $valueQuantity
     * @return self
     */
    public function setValueQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $valueQuantity = null)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Gets as valueCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Sets a new valueCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept
     * @return self
     */
    public function setValueCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $valueCodeableConcept = null)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
        return $this;
    }

    /**
     * Gets as valueString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Sets a new valueString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $valueString
     * @return self
     */
    public function setValueString(?\TKusy\Hl7Fhir\R5\StringType $valueString = null)
    {
        $this->valueString = $valueString;
        return $this;
    }

    /**
     * Gets as valueBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Sets a new valueBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $valueBoolean
     * @return self
     */
    public function setValueBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $valueBoolean = null)
    {
        $this->valueBoolean = $valueBoolean;
        return $this;
    }

    /**
     * Gets as valueInteger
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Sets a new valueInteger
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $valueInteger
     * @return self
     */
    public function setValueInteger(?\TKusy\Hl7Fhir\R5\IntegerType $valueInteger = null)
    {
        $this->valueInteger = $valueInteger;
        return $this;
    }

    /**
     * Gets as valueRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Sets a new valueRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $valueRange
     * @return self
     */
    public function setValueRange(?\TKusy\Hl7Fhir\R5\RangeType $valueRange = null)
    {
        $this->valueRange = $valueRange;
        return $this;
    }

    /**
     * Gets as valueRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Sets a new valueRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $valueRatio
     * @return self
     */
    public function setValueRatio(?\TKusy\Hl7Fhir\R5\RatioType $valueRatio = null)
    {
        $this->valueRatio = $valueRatio;
        return $this;
    }

    /**
     * Gets as valueSampledData
     *
     * @return \TKusy\Hl7Fhir\R5\SampledDataType
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * Sets a new valueSampledData
     *
     * @param \TKusy\Hl7Fhir\R5\SampledDataType $valueSampledData
     * @return self
     */
    public function setValueSampledData(?\TKusy\Hl7Fhir\R5\SampledDataType $valueSampledData = null)
    {
        $this->valueSampledData = $valueSampledData;
        return $this;
    }

    /**
     * Gets as valueTime
     *
     * @return \TKusy\Hl7Fhir\R5\TimeType
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * Sets a new valueTime
     *
     * @param \TKusy\Hl7Fhir\R5\TimeType $valueTime
     * @return self
     */
    public function setValueTime(?\TKusy\Hl7Fhir\R5\TimeType $valueTime = null)
    {
        $this->valueTime = $valueTime;
        return $this;
    }

    /**
     * Gets as valueDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Sets a new valueDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime
     * @return self
     */
    public function setValueDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $valueDateTime = null)
    {
        $this->valueDateTime = $valueDateTime;
        return $this;
    }

    /**
     * Gets as valuePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * Sets a new valuePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $valuePeriod
     * @return self
     */
    public function setValuePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $valuePeriod = null)
    {
        $this->valuePeriod = $valuePeriod;
        return $this;
    }

    /**
     * Gets as valueAttachment
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * Sets a new valueAttachment
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment
     * @return self
     */
    public function setValueAttachment(?\TKusy\Hl7Fhir\R5\AttachmentType $valueAttachment = null)
    {
        $this->valueAttachment = $valueAttachment;
        return $this;
    }

    /**
     * Gets as valueReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Sets a new valueReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $valueReference
     * @return self
     */
    public function setValueReference(?\TKusy\Hl7Fhir\R5\ReferenceType $valueReference = null)
    {
        $this->valueReference = $valueReference;
        return $this;
    }

    /**
     * Gets as dataAbsentReason
     *
     * Provides a reason why the expected value in the element Observation.component.value[x] is missing.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $dataAbsentReason
     * @return self
     */
    public function setDataAbsentReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $dataAbsentReason = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $interpretation
     */
    public function addToInterpretation(\TKusy\Hl7Fhir\R5\CodeableConceptType $interpretation)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $interpretation
     * @return self
     */
    public function setInterpretation(array $interpretation = null)
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
     * @param \TKusy\Hl7Fhir\R5\ObservationReferenceRangeType $referenceRange
     */
    public function addToReferenceRange(\TKusy\Hl7Fhir\R5\ObservationReferenceRangeType $referenceRange)
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
     * @return \TKusy\Hl7Fhir\R5\ObservationReferenceRangeType[]
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
     * @param \TKusy\Hl7Fhir\R5\ObservationReferenceRangeType[] $referenceRange
     * @return self
     */
    public function setReferenceRange(array $referenceRange = null)
    {
        $this->referenceRange = $referenceRange;
        return $this;
    }


}

