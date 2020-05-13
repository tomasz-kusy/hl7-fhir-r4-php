<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicationKnowledgeDosageType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Dosage
 */
class MedicationKnowledgeDosageType extends BackboneElementType
{

    /**
     * The type of dosage (for example, prophylaxis, maintenance, therapeutic, etc.).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Dosage for the medication for the specific guidelines.
     *
     * @var \TKusy\Hl7Fhir\R4\DosageType[] $dosage
     */
    private $dosage = null;

    /**
     * Gets as type
     *
     * The type of dosage (for example, prophylaxis, maintenance, therapeutic, etc.).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of dosage (for example, prophylaxis, maintenance, therapeutic, etc.).
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as dosage
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\DosageType $dosage
     */
    public function addToDosage(\TKusy\Hl7Fhir\R4\DosageType $dosage)
    {
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * isset dosage
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDosage($index)
    {
        return isset($this->dosage[$index]);
    }

    /**
     * unset dosage
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDosage($index)
    {
        unset($this->dosage[$index]);
    }

    /**
     * Gets as dosage
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return \TKusy\Hl7Fhir\R4\DosageType[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Sets a new dosage
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @param \TKusy\Hl7Fhir\R4\DosageType[] $dosage
     * @return self
     */
    public function setDosage(array $dosage)
    {
        $this->dosage = $dosage;
        return $this;
    }


}

