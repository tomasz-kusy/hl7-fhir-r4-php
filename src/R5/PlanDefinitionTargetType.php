<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PlanDefinitionTargetType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical and non-clinical artifacts such as clinical decision support rules, order sets, protocols, and drug quality specifications.
 * XSD Type: PlanDefinition.Target
 */
class PlanDefinitionTargetType extends BackboneElementType
{

    /**
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $measure
     */
    private $measure = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $detailQuantity
     */
    private $detailQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $detailRange
     */
    private $detailRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $detailCodeableConcept
     */
    private $detailCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $detailString
     */
    private $detailString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\BooleanType $detailBoolean
     */
    private $detailBoolean = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IntegerType $detailInteger
     */
    private $detailInteger = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $detailRatio
     */
    private $detailRatio = null;

    /**
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $due
     */
    private $due = null;

    /**
     * Gets as measure
     *
     * The parameter whose value is to be tracked, e.g. body weight, blood pressure, or hemoglobin A1c level.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $measure
     * @return self
     */
    public function setMeasure(?\TKusy\Hl7Fhir\R5\CodeableConceptType $measure = null)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Gets as detailQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getDetailQuantity()
    {
        return $this->detailQuantity;
    }

    /**
     * Sets a new detailQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $detailQuantity
     * @return self
     */
    public function setDetailQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $detailQuantity = null)
    {
        $this->detailQuantity = $detailQuantity;
        return $this;
    }

    /**
     * Gets as detailRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getDetailRange()
    {
        return $this->detailRange;
    }

    /**
     * Sets a new detailRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $detailRange
     * @return self
     */
    public function setDetailRange(?\TKusy\Hl7Fhir\R5\RangeType $detailRange = null)
    {
        $this->detailRange = $detailRange;
        return $this;
    }

    /**
     * Gets as detailCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDetailCodeableConcept()
    {
        return $this->detailCodeableConcept;
    }

    /**
     * Sets a new detailCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $detailCodeableConcept
     * @return self
     */
    public function setDetailCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $detailCodeableConcept = null)
    {
        $this->detailCodeableConcept = $detailCodeableConcept;
        return $this;
    }

    /**
     * Gets as detailString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDetailString()
    {
        return $this->detailString;
    }

    /**
     * Sets a new detailString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $detailString
     * @return self
     */
    public function setDetailString(?\TKusy\Hl7Fhir\R5\StringType $detailString = null)
    {
        $this->detailString = $detailString;
        return $this;
    }

    /**
     * Gets as detailBoolean
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getDetailBoolean()
    {
        return $this->detailBoolean;
    }

    /**
     * Sets a new detailBoolean
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $detailBoolean
     * @return self
     */
    public function setDetailBoolean(?\TKusy\Hl7Fhir\R5\BooleanType $detailBoolean = null)
    {
        $this->detailBoolean = $detailBoolean;
        return $this;
    }

    /**
     * Gets as detailInteger
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getDetailInteger()
    {
        return $this->detailInteger;
    }

    /**
     * Sets a new detailInteger
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $detailInteger
     * @return self
     */
    public function setDetailInteger(?\TKusy\Hl7Fhir\R5\IntegerType $detailInteger = null)
    {
        $this->detailInteger = $detailInteger;
        return $this;
    }

    /**
     * Gets as detailRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getDetailRatio()
    {
        return $this->detailRatio;
    }

    /**
     * Sets a new detailRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $detailRatio
     * @return self
     */
    public function setDetailRatio(?\TKusy\Hl7Fhir\R5\RatioType $detailRatio = null)
    {
        $this->detailRatio = $detailRatio;
        return $this;
    }

    /**
     * Gets as due
     *
     * Indicates the timeframe after the start of the goal in which the goal should be met.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
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
     * @param \TKusy\Hl7Fhir\R5\DurationType $due
     * @return self
     */
    public function setDue(?\TKusy\Hl7Fhir\R5\DurationType $due = null)
    {
        $this->due = $due;
        return $this;
    }


}

