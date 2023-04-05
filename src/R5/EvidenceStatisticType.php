<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceStatisticType
 *
 * The Evidence Resource provides a machine-interpretable expression of an evidence concept including the evidence variables (e.g., population, exposures/interventions, comparators, outcomes, measured variables, confounding variables), the statistics, and the certainty of this evidence.
 * XSD Type: Evidence.Statistic
 */
class EvidenceStatisticType extends BackboneElementType
{

    /**
     * A description of the content value of the statistic.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Footnotes and/or explanatory notes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Type of statistic, e.g., relative risk.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $statisticType
     */
    private $statisticType = null;

    /**
     * When the measured variable is handled categorically, the category element is used to define which category the statistic is reporting.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Statistic value.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The number of events associated with the statistic, where the unit of analysis is different from numberAffected, sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfEvents
     */
    private $numberOfEvents = null;

    /**
     * The number of participants affected where the unit of analysis is the same as sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $numberAffected
     */
    private $numberAffected = null;

    /**
     * Number of samples in the statistic.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceSampleSizeType $sampleSize
     */
    private $sampleSize = null;

    /**
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType[] $attributeEstimate
     */
    private $attributeEstimate = null;

    /**
     * A component of the method to generate the statistic.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceModelCharacteristicType[] $modelCharacteristic
     */
    private $modelCharacteristic = null;

    /**
     * Gets as description
     *
     * A description of the content value of the statistic.
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
     * A description of the content value of the statistic.
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
     * Footnotes and/or explanatory notes.
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
     * Footnotes and/or explanatory notes.
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
     * Footnotes and/or explanatory notes.
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
     * Footnotes and/or explanatory notes.
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
     * Footnotes and/or explanatory notes.
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
     * Gets as statisticType
     *
     * Type of statistic, e.g., relative risk.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStatisticType()
    {
        return $this->statisticType;
    }

    /**
     * Sets a new statisticType
     *
     * Type of statistic, e.g., relative risk.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $statisticType
     * @return self
     */
    public function setStatisticType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $statisticType = null)
    {
        $this->statisticType = $statisticType;
        return $this;
    }

    /**
     * Gets as category
     *
     * When the measured variable is handled categorically, the category element is used to define which category the statistic is reporting.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * When the measured variable is handled categorically, the category element is used to define which category the statistic is reporting.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(?\TKusy\Hl7Fhir\R5\CodeableConceptType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Statistic value.
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
     * Statistic value.
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
     * Gets as numberOfEvents
     *
     * The number of events associated with the statistic, where the unit of analysis is different from numberAffected, sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getNumberOfEvents()
    {
        return $this->numberOfEvents;
    }

    /**
     * Sets a new numberOfEvents
     *
     * The number of events associated with the statistic, where the unit of analysis is different from numberAffected, sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfEvents
     * @return self
     */
    public function setNumberOfEvents(?\TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfEvents = null)
    {
        $this->numberOfEvents = $numberOfEvents;
        return $this;
    }

    /**
     * Gets as numberAffected
     *
     * The number of participants affected where the unit of analysis is the same as sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getNumberAffected()
    {
        return $this->numberAffected;
    }

    /**
     * Sets a new numberAffected
     *
     * The number of participants affected where the unit of analysis is the same as sampleSize.knownDataCount and sampleSize.numberOfParticipants.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $numberAffected
     * @return self
     */
    public function setNumberAffected(?\TKusy\Hl7Fhir\R5\UnsignedIntType $numberAffected = null)
    {
        $this->numberAffected = $numberAffected;
        return $this;
    }

    /**
     * Gets as sampleSize
     *
     * Number of samples in the statistic.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceSampleSizeType
     */
    public function getSampleSize()
    {
        return $this->sampleSize;
    }

    /**
     * Sets a new sampleSize
     *
     * Number of samples in the statistic.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceSampleSizeType $sampleSize
     * @return self
     */
    public function setSampleSize(?\TKusy\Hl7Fhir\R5\EvidenceSampleSizeType $sampleSize = null)
    {
        $this->sampleSize = $sampleSize;
        return $this;
    }

    /**
     * Adds as attributeEstimate
     *
     * A statistical attribute of the statistic such as a measure of heterogeneity.
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
     * A statistical attribute of the statistic such as a measure of heterogeneity.
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
     * A statistical attribute of the statistic such as a measure of heterogeneity.
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
     * A statistical attribute of the statistic such as a measure of heterogeneity.
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
     * A statistical attribute of the statistic such as a measure of heterogeneity.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceAttributeEstimateType[] $attributeEstimate
     * @return self
     */
    public function setAttributeEstimate(array $attributeEstimate = null)
    {
        $this->attributeEstimate = $attributeEstimate;
        return $this;
    }

    /**
     * Adds as modelCharacteristic
     *
     * A component of the method to generate the statistic.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceModelCharacteristicType $modelCharacteristic
     */
    public function addToModelCharacteristic(\TKusy\Hl7Fhir\R5\EvidenceModelCharacteristicType $modelCharacteristic)
    {
        $this->modelCharacteristic[] = $modelCharacteristic;
        return $this;
    }

    /**
     * isset modelCharacteristic
     *
     * A component of the method to generate the statistic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModelCharacteristic($index)
    {
        return isset($this->modelCharacteristic[$index]);
    }

    /**
     * unset modelCharacteristic
     *
     * A component of the method to generate the statistic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModelCharacteristic($index)
    {
        unset($this->modelCharacteristic[$index]);
    }

    /**
     * Gets as modelCharacteristic
     *
     * A component of the method to generate the statistic.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceModelCharacteristicType[]
     */
    public function getModelCharacteristic()
    {
        return $this->modelCharacteristic;
    }

    /**
     * Sets a new modelCharacteristic
     *
     * A component of the method to generate the statistic.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceModelCharacteristicType[] $modelCharacteristic
     * @return self
     */
    public function setModelCharacteristic(array $modelCharacteristic = null)
    {
        $this->modelCharacteristic = $modelCharacteristic;
        return $this;
    }


}

