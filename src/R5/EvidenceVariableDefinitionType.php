<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceVariableDefinitionType
 *
 * The Evidence Resource provides a machine-interpretable expression of an evidence concept including the evidence variables (e.g., population, exposures/interventions, comparators, outcomes, measured variables, confounding variables), the statistics, and the certainty of this evidence.
 * XSD Type: Evidence.VariableDefinition
 */
class EvidenceVariableDefinitionType extends BackboneElementType
{

    /**
     * A text description or summary of the variable.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Footnotes and/or explanatory notes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * population | subpopulation | exposure | referenceExposure | measuredVariable | confounder.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $variableRole
     */
    private $variableRole = null;

    /**
     * Definition of the actual variable related to the statistic(s).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $observed
     */
    private $observed = null;

    /**
     * Definition of the intended variable related to the Evidence.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $intended
     */
    private $intended = null;

    /**
     * Indication of quality of match between intended variable to actual variable.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $directnessMatch
     */
    private $directnessMatch = null;

    /**
     * Gets as description
     *
     * A text description or summary of the variable.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A text description or summary of the variable.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as note
     *
     * Footnotes and/or explanatory notes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Footnotes and/or explanatory notes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Footnotes and/or explanatory notes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Footnotes and/or explanatory notes.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Footnotes and/or explanatory notes.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as variableRole
     *
     * population | subpopulation | exposure | referenceExposure | measuredVariable | confounder.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getVariableRole()
    {
        return $this->variableRole;
    }

    /**
     * Sets a new variableRole
     *
     * population | subpopulation | exposure | referenceExposure | measuredVariable | confounder.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $variableRole
     * @return self
     */
    public function setVariableRole(\TKusy\Hl7Fhir\R5\CodeableConceptType $variableRole)
    {
        $this->variableRole = $variableRole;
        return $this;
    }

    /**
     * Gets as observed
     *
     * Definition of the actual variable related to the statistic(s).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getObserved()
    {
        return $this->observed;
    }

    /**
     * Sets a new observed
     *
     * Definition of the actual variable related to the statistic(s).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $observed
     * @return self
     */
    public function setObserved(?\TKusy\Hl7Fhir\R5\ReferenceType $observed = null)
    {
        $this->observed = $observed;
        return $this;
    }

    /**
     * Gets as intended
     *
     * Definition of the intended variable related to the Evidence.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getIntended()
    {
        return $this->intended;
    }

    /**
     * Sets a new intended
     *
     * Definition of the intended variable related to the Evidence.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $intended
     * @return self
     */
    public function setIntended(?\TKusy\Hl7Fhir\R5\ReferenceType $intended = null)
    {
        $this->intended = $intended;
        return $this;
    }

    /**
     * Gets as directnessMatch
     *
     * Indication of quality of match between intended variable to actual variable.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDirectnessMatch()
    {
        return $this->directnessMatch;
    }

    /**
     * Sets a new directnessMatch
     *
     * Indication of quality of match between intended variable to actual variable.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $directnessMatch
     * @return self
     */
    public function setDirectnessMatch(?\TKusy\Hl7Fhir\R5\CodeableConceptType $directnessMatch = null)
    {
        $this->directnessMatch = $directnessMatch;
        return $this;
    }


}

