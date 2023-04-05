<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EncounterDiagnosisType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient. Encounter is primarily used to record information about the actual activities that occurred, where Appointment is used to record planned activities.
 * XSD Type: Encounter.Diagnosis
 */
class EncounterDiagnosisType extends BackboneElementType
{

    /**
     * The coded diagnosis or a reference to a Condition (with other resources referenced in the evidence.detail), the use property will indicate the purpose of this specific diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $condition
     */
    private $condition = null;

    /**
     * Role that this diagnosis has within the encounter (e.g. admission, billing, discharge …).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $use
     */
    private $use = null;

    /**
     * Adds as condition
     *
     * The coded diagnosis or a reference to a Condition (with other resources referenced in the evidence.detail), the use property will indicate the purpose of this specific diagnosis.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $condition
     */
    public function addToCondition(\TKusy\Hl7Fhir\R5\CodeableReferenceType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * The coded diagnosis or a reference to a Condition (with other resources referenced in the evidence.detail), the use property will indicate the purpose of this specific diagnosis.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * The coded diagnosis or a reference to a Condition (with other resources referenced in the evidence.detail), the use property will indicate the purpose of this specific diagnosis.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * The coded diagnosis or a reference to a Condition (with other resources referenced in the evidence.detail), the use property will indicate the purpose of this specific diagnosis.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * The coded diagnosis or a reference to a Condition (with other resources referenced in the evidence.detail), the use property will indicate the purpose of this specific diagnosis.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as use
     *
     * Role that this diagnosis has within the encounter (e.g. admission, billing, discharge …).
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
     * Role that this diagnosis has within the encounter (e.g. admission, billing, discharge …).
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
     * Role that this diagnosis has within the encounter (e.g. admission, billing, discharge …).
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
     * Role that this diagnosis has within the encounter (e.g. admission, billing, discharge …).
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
     * Role that this diagnosis has within the encounter (e.g. admission, billing, discharge …).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $use
     * @return self
     */
    public function setUse(array $use = null)
    {
        $this->use = $use;
        return $this;
    }


}

