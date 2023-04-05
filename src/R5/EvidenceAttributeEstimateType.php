<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceAttributeEstimateType
 *
 * The Evidence Resource provides a machine-interpretable expression of an evidence concept including the evidence variables (e.g., population, exposures/interventions, comparators, outcomes, measured variables, confounding variables), the statistics, and the certainty of this evidence.
 * XSD Type: Evidence.AttributeEstimate
 */
class EvidenceAttributeEstimateType extends BackboneElementType
{

    /**
     * Human-readable summary of the estimate.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Footnote or explanatory note about the estimate.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The type of attribute estimate, e.g., confidence interval or p value.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The singular quantity of the attribute estimate, for attribute estimates represented as single values; also used to report unit of measure.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Use 95 for a 95% confidence interval.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $level
     */
    private $level = null;

    /**
     * Lower bound of confidence interval.
     *
     * @var \TKusy\Hl7Fhir\R5\RangeType $range
     */
    private $range = null;

    /**
     * A nested attribute estimate; which is the attribute estimate of an attribute estimate.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType[] $attributeEstimate
     */
    private $attributeEstimate = null;

    /**
     * Gets as description
     *
     * Human-readable summary of the estimate.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Human-readable summary of the estimate.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as note
     *
     * Footnote or explanatory note about the estimate.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Footnote or explanatory note about the estimate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Footnote or explanatory note about the estimate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Footnote or explanatory note about the estimate.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Footnote or explanatory note about the estimate.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of attribute estimate, e.g., confidence interval or p value.
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
     * The type of attribute estimate, e.g., confidence interval or p value.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The singular quantity of the attribute estimate, for attribute estimates represented as single values; also used to report unit of measure.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The singular quantity of the attribute estimate, for attribute estimates represented as single values; also used to report unit of measure.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as level
     *
     * Use 95 for a 95% confidence interval.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * Use 95 for a 95% confidence interval.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $level
     * @return self
     */
    public function setLevel(?\TKusy\Hl7Fhir\R5\DecimalType $level = null)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Gets as range
     *
     * Lower bound of confidence interval.
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Sets a new range
     *
     * Lower bound of confidence interval.
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $range
     * @return self
     */
    public function setRange(?\TKusy\Hl7Fhir\R5\RangeType $range = null)
    {
        $this->range = $range;
        return $this;
    }

    /**
     * Adds as attributeEstimate
     *
     * A nested attribute estimate; which is the attribute estimate of an attribute estimate.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType $attributeEstimate
     */
    public function addToAttributeEstimate(\TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType $attributeEstimate)
    {
        $this->attributeEstimate[] = $attributeEstimate;
        return $this;
    }

    /**
     * isset attributeEstimate
     *
     * A nested attribute estimate; which is the attribute estimate of an attribute estimate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttributeEstimate($index)
    {
        return isset($this->attributeEstimate[$index]);
    }

    /**
     * unset attributeEstimate
     *
     * A nested attribute estimate; which is the attribute estimate of an attribute estimate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttributeEstimate($index)
    {
        unset($this->attributeEstimate[$index]);
    }

    /**
     * Gets as attributeEstimate
     *
     * A nested attribute estimate; which is the attribute estimate of an attribute estimate.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType[]
     */
    public function getAttributeEstimate()
    {
        return $this->attributeEstimate;
    }

    /**
     * Sets a new attributeEstimate
     *
     * A nested attribute estimate; which is the attribute estimate of an attribute estimate.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType[] $attributeEstimate
     * @return self
     */
    public function setAttributeEstimate(array $attributeEstimate = null)
    {
        $this->attributeEstimate = $attributeEstimate;
        return $this;
    }


}

