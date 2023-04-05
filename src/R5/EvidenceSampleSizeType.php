<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceSampleSizeType
 *
 * The Evidence Resource provides a machine-interpretable expression of an evidence concept including the evidence variables (e.g., population, exposures/interventions, comparators, outcomes, measured variables, confounding variables), the statistics, and the certainty of this evidence.
 * XSD Type: Evidence.SampleSize
 */
class EvidenceSampleSizeType extends BackboneElementType
{

    /**
     * Human-readable summary of population sample size.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Footnote or explanatory note about the sample size.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Number of participants in the population.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfStudies
     */
    private $numberOfStudies = null;

    /**
     * A human-readable string to clarify or explain concepts about the sample size.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfParticipants
     */
    private $numberOfParticipants = null;

    /**
     * Number of participants with known results for measured variables.
     *
     * @var \TKusy\Hl7Fhir\R5\UnsignedIntType $knownDataCount
     */
    private $knownDataCount = null;

    /**
     * Gets as description
     *
     * Human-readable summary of population sample size.
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
     * Human-readable summary of population sample size.
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
     * Footnote or explanatory note about the sample size.
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
     * Footnote or explanatory note about the sample size.
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
     * Footnote or explanatory note about the sample size.
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
     * Footnote or explanatory note about the sample size.
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
     * Footnote or explanatory note about the sample size.
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
     * Gets as numberOfStudies
     *
     * Number of participants in the population.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getNumberOfStudies()
    {
        return $this->numberOfStudies;
    }

    /**
     * Sets a new numberOfStudies
     *
     * Number of participants in the population.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfStudies
     * @return self
     */
    public function setNumberOfStudies(?\TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfStudies = null)
    {
        $this->numberOfStudies = $numberOfStudies;
        return $this;
    }

    /**
     * Gets as numberOfParticipants
     *
     * A human-readable string to clarify or explain concepts about the sample size.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getNumberOfParticipants()
    {
        return $this->numberOfParticipants;
    }

    /**
     * Sets a new numberOfParticipants
     *
     * A human-readable string to clarify or explain concepts about the sample size.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfParticipants
     * @return self
     */
    public function setNumberOfParticipants(?\TKusy\Hl7Fhir\R5\UnsignedIntType $numberOfParticipants = null)
    {
        $this->numberOfParticipants = $numberOfParticipants;
        return $this;
    }

    /**
     * Gets as knownDataCount
     *
     * Number of participants with known results for measured variables.
     *
     * @return \TKusy\Hl7Fhir\R5\UnsignedIntType
     */
    public function getKnownDataCount()
    {
        return $this->knownDataCount;
    }

    /**
     * Sets a new knownDataCount
     *
     * Number of participants with known results for measured variables.
     *
     * @param \TKusy\Hl7Fhir\R5\UnsignedIntType $knownDataCount
     * @return self
     */
    public function setKnownDataCount(?\TKusy\Hl7Fhir\R5\UnsignedIntType $knownDataCount = null)
    {
        $this->knownDataCount = $knownDataCount;
        return $this;
    }


}

