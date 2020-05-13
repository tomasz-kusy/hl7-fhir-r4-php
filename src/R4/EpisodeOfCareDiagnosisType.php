<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing EpisodeOfCareDiagnosisType
 *
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 * XSD Type: EpisodeOfCare.Diagnosis
 */
class EpisodeOfCareDiagnosisType extends BackboneElementType
{

    /**
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $condition
     */
    private $condition = null;

    /**
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $role
     */
    private $role = null;

    /**
     * Ranking of the diagnosis (for each role type).
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType $rank
     */
    private $rank = null;

    /**
     * Gets as condition
     *
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * A list of conditions/problems/diagnoses that this episode of care is intended to be providing care for.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $condition
     * @return self
     */
    public function setCondition(\TKusy\Hl7Fhir\R4\ReferenceType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as role
     *
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Role that this diagnosis has within the episode of care (e.g. admission, billing, discharge …).
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7Fhir\R4\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as rank
     *
     * Ranking of the diagnosis (for each role type).
     *
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType
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
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $rank
     * @return self
     */
    public function setRank(\TKusy\Hl7Fhir\R4\PositiveIntType $rank)
    {
        $this->rank = $rank;
        return $this;
    }


}

