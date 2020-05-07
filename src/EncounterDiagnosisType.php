<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EncounterDiagnosisType
 *
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * XSD Type: Encounter.Diagnosis
 */
class EncounterDiagnosisType extends BackboneElementType
{

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $condition
     */
    private $condition = null;

    /**
     * Role that this diagnosis has within the encounter (e.g. admission, billing, discharge …).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $use
     */
    private $use = null;

    /**
     * Ranking of the diagnosis (for each role type).
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $rank
     */
    private $rank = null;

    /**
     * Gets as condition
     *
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $condition
     * @return self
     */
    public function setCondition(\TKusy\Hl7FhirR4\ReferenceType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as use
     *
     * Role that this diagnosis has within the encounter (e.g. admission, billing, discharge …).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7FhirR4\CodeableConceptType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as rank
     *
     * Ranking of the diagnosis (for each role type).
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Sets a new rank
     *
     * Ranking of the diagnosis (for each role type).
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $rank
     * @return self
     */
    public function setRank(\TKusy\Hl7FhirR4\PositiveIntType $rank)
    {
        $this->rank = $rank;
        return $this;
    }


}

