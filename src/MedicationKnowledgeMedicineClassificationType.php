<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Specific category assigned to the medication (e.g. anti-infective, anti-hypertensive, antibiotic, etc.).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $classification
     */
    private $classification = [
        
    ];

    /**
     * Gets as type
     *
     * The type of category for the medication (for example, therapeutic classification, therapeutic sub-classification).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as classification
     *
     * Specific category assigned to the medication (e.g. anti-infective, anti-hypertensive, antibiotic, etc.).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $classification
     */
    public function addToClassification(\TKusy\Hl7FhirR4\CodeableConceptType $classification)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $classification
     * @return self
     */
    public function setClassification(array $classification)
    {
        $this->classification = $classification;
        return $this;
    }


}

