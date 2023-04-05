<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgeMedicineClassificationType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.MedicineClassification
 */
class MedicationKnowledgeMedicineClassificationType extends BackboneElementType
{

    /**
     * The type of category for the medication (for example, therapeutic classification, therapeutic sub-classification).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $sourceString
     */
    private $sourceString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $sourceUri
     */
    private $sourceUri = null;

    /**
     * Specific category assigned to the medication (e.g. anti-infective, anti-hypertensive, antibiotic, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classification
     */
    private $classification = null;

    /**
     * Gets as type
     *
     * The type of category for the medication (for example, therapeutic classification, therapeutic sub-classification).
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
     * The type of category for the medication (for example, therapeutic classification, therapeutic sub-classification).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as sourceString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSourceString()
    {
        return $this->sourceString;
    }

    /**
     * Sets a new sourceString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $sourceString
     * @return self
     */
    public function setSourceString(?\TKusy\Hl7Fhir\R5\StringType $sourceString = null)
    {
        $this->sourceString = $sourceString;
        return $this;
    }

    /**
     * Gets as sourceUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getSourceUri()
    {
        return $this->sourceUri;
    }

    /**
     * Sets a new sourceUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $sourceUri
     * @return self
     */
    public function setSourceUri(?\TKusy\Hl7Fhir\R5\UriType $sourceUri = null)
    {
        $this->sourceUri = $sourceUri;
        return $this;
    }

    /**
     * Adds as classification
     *
     * Specific category assigned to the medication (e.g. anti-infective, anti-hypertensive, antibiotic, etc.).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $classification
     */
    public function addToClassification(\TKusy\Hl7Fhir\R5\CodeableConceptType $classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * isset classification
     *
     * Specific category assigned to the medication (e.g. anti-infective, anti-hypertensive, antibiotic, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassification($index)
    {
        return isset($this->classification[$index]);
    }

    /**
     * unset classification
     *
     * Specific category assigned to the medication (e.g. anti-infective, anti-hypertensive, antibiotic, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassification($index)
    {
        unset($this->classification[$index]);
    }

    /**
     * Gets as classification
     *
     * Specific category assigned to the medication (e.g. anti-infective, anti-hypertensive, antibiotic, etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Specific category assigned to the medication (e.g. anti-infective, anti-hypertensive, antibiotic, etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classification
     * @return self
     */
    public function setClassification(array $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }


}

