<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EncounterReasonType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient. Encounter is primarily used to record information about the actual activities that occurred, where Appointment is used to record planned activities.
 * XSD Type: Encounter.Reason
 */
class EncounterReasonType extends BackboneElementType
{

    /**
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $use
     */
    private $use = null;

    /**
     * Reason the encounter takes place, expressed as a code or a reference to another resource. For admissions, this can be used for a coded admission diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $value
     */
    private $value = null;

    /**
     * Adds as use
     *
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $use
     */
    public function addToUse(\TKusy\Hl7Fhir\R5\CodeableConceptType $use)
    {
        $this->use[] = $use;
        return $this;
    }

    /**
     * isset use
     *
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUse($index)
    {
        return isset($this->use[$index]);
    }

    /**
     * unset use
     *
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUse($index)
    {
        unset($this->use[$index]);
    }

    /**
     * Gets as use
     *
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * What the reason value should be used as e.g. Chief Complaint, Health Concern, Health Maintenance (including screening).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $use
     * @return self
     */
    public function setUse(array $use = null)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Adds as value
     *
     * Reason the encounter takes place, expressed as a code or a reference to another resource. For admissions, this can be used for a coded admission diagnosis.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $value
     */
    public function addToValue(\TKusy\Hl7Fhir\R5\CodeableReferenceType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * Reason the encounter takes place, expressed as a code or a reference to another resource. For admissions, this can be used for a coded admission diagnosis.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * Reason the encounter takes place, expressed as a code or a reference to another resource. For admissions, this can be used for a coded admission diagnosis.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * Reason the encounter takes place, expressed as a code or a reference to another resource. For admissions, this can be used for a coded admission diagnosis.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Reason the encounter takes place, expressed as a code or a reference to another resource. For admissions, this can be used for a coded admission diagnosis.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $value
     * @return self
     */
    public function setValue(array $value = null)
    {
        $this->value = $value;
        return $this;
    }


}

