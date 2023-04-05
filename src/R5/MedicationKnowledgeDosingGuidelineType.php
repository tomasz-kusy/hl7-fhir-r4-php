<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgeDosingGuidelineType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.DosingGuideline
 */
class MedicationKnowledgeDosingGuidelineType extends BackboneElementType
{

    /**
     * The overall intention of the treatment, for example, prophylactic, supporative, curative, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $treatmentIntent
     */
    private $treatmentIntent = null;

    /**
     * Dosage for the medication for the specific guidelines.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgeDosageType[] $dosage
     */
    private $dosage = null;

    /**
     * The type of the treatment that the guideline applies to, for example, long term therapy, first line treatment, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $administrationTreatment
     */
    private $administrationTreatment = null;

    /**
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationKnowledgePatientCharacteristicType[] $patientCharacteristic
     */
    private $patientCharacteristic = null;

    /**
     * Gets as treatmentIntent
     *
     * The overall intention of the treatment, for example, prophylactic, supporative, curative, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTreatmentIntent()
    {
        return $this->treatmentIntent;
    }

    /**
     * Sets a new treatmentIntent
     *
     * The overall intention of the treatment, for example, prophylactic, supporative, curative, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $treatmentIntent
     * @return self
     */
    public function setTreatmentIntent(?\TKusy\Hl7Fhir\R5\CodeableConceptType $treatmentIntent = null)
    {
        $this->treatmentIntent = $treatmentIntent;
        return $this;
    }

    /**
     * Adds as dosage
     *
     * Dosage for the medication for the specific guidelines.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeDosageType $dosage
     */
    public function addToDosage(\TKusy\Hl7Fhir\R5\MedicationKnowledgeDosageType $dosage)
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
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgeDosageType[]
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
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgeDosageType[] $dosage
     * @return self
     */
    public function setDosage(array $dosage = null)
    {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Gets as administrationTreatment
     *
     * The type of the treatment that the guideline applies to, for example, long term therapy, first line treatment, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAdministrationTreatment()
    {
        return $this->administrationTreatment;
    }

    /**
     * Sets a new administrationTreatment
     *
     * The type of the treatment that the guideline applies to, for example, long term therapy, first line treatment, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $administrationTreatment
     * @return self
     */
    public function setAdministrationTreatment(?\TKusy\Hl7Fhir\R5\CodeableConceptType $administrationTreatment = null)
    {
        $this->administrationTreatment = $administrationTreatment;
        return $this;
    }

    /**
     * Adds as patientCharacteristic
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgePatientCharacteristicType $patientCharacteristic
     */
    public function addToPatientCharacteristic(\TKusy\Hl7Fhir\R5\MedicationKnowledgePatientCharacteristicType $patientCharacteristic)
    {
        $this->patientCharacteristic[] = $patientCharacteristic;
        return $this;
    }

    /**
     * isset patientCharacteristic
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPatientCharacteristic($index)
    {
        return isset($this->patientCharacteristic[$index]);
    }

    /**
     * unset patientCharacteristic
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPatientCharacteristic($index)
    {
        unset($this->patientCharacteristic[$index]);
    }

    /**
     * Gets as patientCharacteristic
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationKnowledgePatientCharacteristicType[]
     */
    public function getPatientCharacteristic()
    {
        return $this->patientCharacteristic;
    }

    /**
     * Sets a new patientCharacteristic
     *
     * Characteristics of the patient that are relevant to the administration guidelines (for example, height, weight, gender, etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\MedicationKnowledgePatientCharacteristicType[] $patientCharacteristic
     * @return self
     */
    public function setPatientCharacteristic(array $patientCharacteristic = null)
    {
        $this->patientCharacteristic = $patientCharacteristic;
        return $this;
    }


}

