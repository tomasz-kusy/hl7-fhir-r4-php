<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConditionStageType
 *
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or clinical concept that has risen to a level of concern.
 * XSD Type: Condition.Stage
 */
class ConditionStageType extends BackboneElementType
{

    /**
     * A simple summary of the stage such as "Stage 3". The determination of the stage is disease-specific.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $summary
     */
    private $summary = null;

    /**
     * Reference to a formal record of the evidence on which the staging assessment is based.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $assessment
     */
    private $assessment = null;

    /**
     * The kind of staging, such as pathological or clinical staging.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Gets as summary
     *
     * A simple summary of the stage such as "Stage 3". The determination of the stage is disease-specific.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * A simple summary of the stage such as "Stage 3". The determination of the stage is disease-specific.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $summary
     * @return self
     */
    public function setSummary(\TKusy\Hl7FhirR4\CodeableConceptType $summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Adds as assessment
     *
     * Reference to a formal record of the evidence on which the staging assessment is based.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $assessment
     */
    public function addToAssessment(\TKusy\Hl7FhirR4\ReferenceType $assessment)
    {
        $this->assessment[] = $assessment;
        return $this;
    }

    /**
     * isset assessment
     *
     * Reference to a formal record of the evidence on which the staging assessment is based.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssessment($index)
    {
        return isset($this->assessment[$index]);
    }

    /**
     * unset assessment
     *
     * Reference to a formal record of the evidence on which the staging assessment is based.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssessment($index)
    {
        unset($this->assessment[$index]);
    }

    /**
     * Gets as assessment
     *
     * Reference to a formal record of the evidence on which the staging assessment is based.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getAssessment()
    {
        return $this->assessment;
    }

    /**
     * Sets a new assessment
     *
     * Reference to a formal record of the evidence on which the staging assessment is based.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $assessment
     * @return self
     */
    public function setAssessment(array $assessment)
    {
        $this->assessment = $assessment;
        return $this;
    }

    /**
     * Gets as type
     *
     * The kind of staging, such as pathological or clinical staging.
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
     * The kind of staging, such as pathological or clinical staging.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }


}

