<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeAdministrationGuidelinesType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.AdministrationGuidelines
 */
class MedicationKnowledgeAdministrationGuidelinesType extends BackboneElementType
{

    /**
     * Dosage for the medication for the specific guidelines.
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgeDosageType[] $dosage
     */
    private $dosage = null;

    /**
     * Indication for use that apply to the specific administration guidelines. (choose any one of indication*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $indicationCodeableConcept
     */
    private $indicationCodeableConcept = null;

    /**
     * Indication for use that apply to the specific administration guidelines. (choose any one of indication*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $indicationReference
     */
    private $indicationReference = null;

    /**
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @var \TKusy\Hl7FhirR4\MedicationKnowledgePatientCharacteristicsType[] $patientCharacteristics
     */
    private $patientCharacteristics = null;

    /**
     * Adds as dosage
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeDosageType $dosage
     */
    public function addToDosage(\TKusy\Hl7FhirR4\MedicationKnowledgeDosageType $dosage)
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
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgeDosageType[]
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
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgeDosageType[] $dosage
     * @return self
     */
    public function setDosage(array $dosage)
    {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Gets as indicationCodeableConcept
     *
     * Indication for use that apply to the specific administration guidelines. (choose any one of indication*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getIndicationCodeableConcept()
    {
        return $this->indicationCodeableConcept;
    }

    /**
     * Sets a new indicationCodeableConcept
     *
     * Indication for use that apply to the specific administration guidelines. (choose any one of indication*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $indicationCodeableConcept
     * @return self
     */
    public function setIndicationCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $indicationCodeableConcept)
    {
        $this->indicationCodeableConcept = $indicationCodeableConcept;
        return $this;
    }

    /**
     * Gets as indicationReference
     *
     * Indication for use that apply to the specific administration guidelines. (choose any one of indication*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getIndicationReference()
    {
        return $this->indicationReference;
    }

    /**
     * Sets a new indicationReference
     *
     * Indication for use that apply to the specific administration guidelines. (choose any one of indication*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $indicationReference
     * @return self
     */
    public function setIndicationReference(\TKusy\Hl7FhirR4\ReferenceType $indicationReference)
    {
        $this->indicationReference = $indicationReference;
        return $this;
    }

    /**
     * Adds as patientCharacteristics
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgePatientCharacteristicsType $patientCharacteristics
     */
    public function addToPatientCharacteristics(\TKusy\Hl7FhirR4\MedicationKnowledgePatientCharacteristicsType $patientCharacteristics)
    {
        $this->patientCharacteristics[] = $patientCharacteristics;
        return $this;
    }

    /**
     * isset patientCharacteristics
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPatientCharacteristics($index)
    {
        return isset($this->patientCharacteristics[$index]);
    }

    /**
     * unset patientCharacteristics
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPatientCharacteristics($index)
    {
        unset($this->patientCharacteristics[$index]);
    }

    /**
     * Gets as patientCharacteristics
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @return \TKusy\Hl7FhirR4\MedicationKnowledgePatientCharacteristicsType[]
     */
    public function getPatientCharacteristics()
    {
        return $this->patientCharacteristics;
    }

    /**
     * Sets a new patientCharacteristics
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @param \TKusy\Hl7FhirR4\MedicationKnowledgePatientCharacteristicsType[] $patientCharacteristics
     * @return self
     */
    public function setPatientCharacteristics(array $patientCharacteristics)
    {
        $this->patientCharacteristics = $patientCharacteristics;
        return $this;
    }


}

