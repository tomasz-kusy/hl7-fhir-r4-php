<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PlanDefinitionTargetType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 * XSD Type: PlanDefinition.Target
 */
class PlanDefinitionTargetType extends BackboneElementType
{

    /**
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $measure
     */
    private $measure = null;

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $detailQuantity
     */
    private $detailQuantity = null;

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $detailRange
     */
    private $detailRange = null;

    /**
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $detailCodeableConcept
     */
    private $detailCodeableConcept = null;

    /**
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     *
     * @var \TKusy\Hl7FhirR4\DurationType $due
     */
    private $due = null;

    /**
     * Gets as measure
     *
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
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
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
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
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
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
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
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
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
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
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
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
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
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
     * The target value of the measure to be achieved to signify fulfillment of the goal, e.g. 150 pounds or 7.0%. Either the high or low or both values of the range can be specified. When a low value is missing, it indicates that the goal is achieved at any value at or below the high value. Similarly, if the high value is missing, it indicates that the goal is achieved at any value at or above the low value. (choose any one of detail*, but only one)
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
     * Gets as due
     *
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * Sets a new due
     *
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     *
     * @param \TKusy\Hl7FhirR4\DurationType $due
     * @return self
     */
    public function setDue(\TKusy\Hl7FhirR4\DurationType $due)
    {
        $this->due = $due;
        return $this;
    }


}

