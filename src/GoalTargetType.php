<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing GoalTargetType
 *
 * Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.
 * XSD Type: Goal.Target
 */
class GoalTargetType extends BackboneElementType
{

    /**
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $measure
     */
    private $measure = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $detailQuantity
     */
    private $detailQuantity = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $detailRange
     */
    private $detailRange = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $detailCodeableConcept
     */
    private $detailCodeableConcept = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $detailString
     */
    private $detailString = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $detailBoolean
     */
    private $detailBoolean = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\IntegerType $detailInteger
     */
    private $detailInteger = null;

    /**
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $detailRatio
     */
    private $detailRatio = null;

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateType $dueDate
     */
    private $dueDate = null;

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $dueDuration
     */
    private $dueDuration = null;

    /**
     * Gets as measure
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * The parameter whose value is being tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $measure
     * @return self
     */
    public function setMeasure(\TKusy\Hl7FhirR4\CodeableConceptType $measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Gets as detailQuantity
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getDetailQuantity()
    {
        return $this->detailQuantity;
    }

    /**
     * Sets a new detailQuantity
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $detailQuantity
     * @return self
     */
    public function setDetailQuantity(\TKusy\Hl7FhirR4\QuantityType $detailQuantity)
    {
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * Gets as detailRange
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getDetailRange()
    {
        return $this->detailRange;
    }

    /**
     * Sets a new detailRange
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $detailRange
     * @return self
     */
    public function setDetailRange(\TKusy\Hl7FhirR4\RangeType $detailRange)
    {
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * Gets as detailCodeableConcept
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDetailCodeableConcept()
    {
        return $this->detailCodeableConcept;
    }

    /**
     * Sets a new detailCodeableConcept
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $detailCodeableConcept
     * @return self
     */
    public function setDetailCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $detailCodeableConcept)
    {
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * Gets as detailString
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDetailString()
    {
        return $this->detailString;
    }

    /**
     * Sets a new detailString
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $detailString
     * @return self
     */
    public function setDetailString(\TKusy\Hl7FhirR4\StringType $detailString)
    {
        $this->detailString = $detailString;
        return $this;
    }

    /**
     * Gets as detailBoolean
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getDetailBoolean()
    {
        return $this->detailBoolean;
    }

    /**
     * Sets a new detailBoolean
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $detailBoolean
     * @return self
     */
    public function setDetailBoolean(\TKusy\Hl7FhirR4\BooleanType $detailBoolean)
    {
        $this->detailBoolean = $detailBoolean;
        return $this;
    }

    /**
     * Gets as detailInteger
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\IntegerType
     */
    public function getDetailInteger()
    {
        return $this->detailInteger;
    }

    /**
     * Sets a new detailInteger
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\IntegerType $detailInteger
     * @return self
     */
    public function setDetailInteger(\TKusy\Hl7FhirR4\IntegerType $detailInteger)
    {
        $this->detailInteger = $detailInteger;
        return $this;
    }

    /**
     * Gets as detailRatio
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getDetailRatio()
    {
        return $this->detailRatio;
    }

    /**
     * Sets a new detailRatio
     *
     * The target value of the focus to be achieved to signify the fulfillment of the goal, e.g. 150 pounds, 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any focus value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any focus value at or above the low value. (choose any one of detail*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $detailRatio
     * @return self
     */
    public function setDetailRatio(\TKusy\Hl7FhirR4\RatioType $detailRatio)
    {
        $this->detailRatio = $detailRatio;
        return $this;
    }

    /**
     * Gets as dueDate
     *
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets a new dueDate
     *
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateType $dueDate
     * @return self
     */
    public function setDueDate(\TKusy\Hl7FhirR4\DateType $dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Gets as dueDuration
     *
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getDueDuration()
    {
        return $this->dueDuration;
    }

    /**
     * Sets a new dueDuration
     *
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of due*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $dueDuration
     * @return self
     */
    public function setDueDuration(\TKusy\Hl7FhirR4\DurationType $dueDuration)
    {
        $this->dueDuration = $dueDuration;
        return $this;
    }


}

