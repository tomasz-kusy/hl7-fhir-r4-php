<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgeIndicationGuidelineType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.IndicationGuideline
 */
class MedicationKnowledgeIndicationGuidelineType extends BackboneElementType
{

    /**
     * Indication or reason for use of the medication that applies to the specific administration guideline.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $indication
     */
    private $indication = null;

    /**
     * The guidelines for the dosage of the medication for the indication.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeDosingGuidelineType[] $dosingGuideline
     */
    private $dosingGuideline = null;

    /**
     * Adds as indication
     *
     * Indication or reason for use of the medication that applies to the specific administration guideline.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $indication
     */
    public function addToIndication(\TKusy\Hl7Fhir\R5\CodeableReferenceType $indication)
    {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * isset indication
     *
     * Indication or reason for use of the medication that applies to the specific administration guideline.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndication($index)
    {
        return isset($this->indication[$index]);
    }

    /**
     * unset indication
     *
     * Indication or reason for use of the medication that applies to the specific administration guideline.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndication($index)
    {
        unset($this->indication[$index]);
    }

    /**
     * Gets as indication
     *
     * Indication or reason for use of the medication that applies to the specific administration guideline.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Sets a new indication
     *
     * Indication or reason for use of the medication that applies to the specific administration guideline.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $indication
     * @return self
     */
    public function setIndication(array $indication = null)
    {
        $this->indication = $indication;
        return $this;
    }

    /**
     * Adds as dosingGuideline
     *
     * The guidelines for the dosage of the medication for the indication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeDosingGuidelineType $dosingGuideline
     */
    public function addToDosingGuideline(\TKusy\Hl7Fhir\R5\MedicationKnowledgeDosingGuidelineType $dosingGuideline)
    {
        $this->dosingGuideline[] = $dosingGuideline;
        return $this;
    }

    /**
     * isset dosingGuideline
     *
     * The guidelines for the dosage of the medication for the indication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDosingGuideline($index)
    {
        return isset($this->dosingGuideline[$index]);
    }

    /**
     * unset dosingGuideline
     *
     * The guidelines for the dosage of the medication for the indication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDosingGuideline($index)
    {
        unset($this->dosingGuideline[$index]);
    }

    /**
     * Gets as dosingGuideline
     *
     * The guidelines for the dosage of the medication for the indication.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeDosingGuidelineType[]
     */
    public function getDosingGuideline()
    {
        return $this->dosingGuideline;
    }

    /**
     * Sets a new dosingGuideline
     *
     * The guidelines for the dosage of the medication for the indication.
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeDosingGuidelineType[] $dosingGuideline
     * @return self
     */
    public function setDosingGuideline(array $dosingGuideline = null)
    {
        $this->dosingGuideline = $dosingGuideline;
        return $this;
    }


}

