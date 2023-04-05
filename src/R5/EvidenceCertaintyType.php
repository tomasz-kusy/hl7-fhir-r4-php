<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EvidenceCertaintyType
 *
 * The Evidence Resource provides a machine-interpretable expression of an evidence concept including the evidence variables (e.g., population, exposures/interventions, comparators, outcomes, measured variables, confounding variables), the statistics, and the certainty of this evidence.
 * XSD Type: Evidence.Certainty
 */
class EvidenceCertaintyType extends BackboneElementType
{

    /**
     * Textual description of certainty.
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
     * Aspect of certainty being rated.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Assessment or judgement of the aspect.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $rating
     */
    private $rating = null;

    /**
     * Individual or group who did the rating.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $rater
     */
    private $rater = null;

    /**
     * A domain or subdomain of certainty.
     *
     * @var \TKusy\Hl7Fhir\R5\EvidenceCertaintyType[] $subcomponent
     */
    private $subcomponent = null;

    /**
     * Gets as description
     *
     * Textual description of certainty.
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
     * Textual description of certainty.
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
     * Gets as type
     *
     * Aspect of certainty being rated.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Aspect of certainty being rated.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as rating
     *
     * Assessment or judgement of the aspect.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * Assessment or judgement of the aspect.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $rating
     * @return self
     */
    public function setRating(?\TKusy\Hl7Fhir\R5\CodeableConceptType $rating = null)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Gets as rater
     *
     * Individual or group who did the rating.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getRater()
    {
        return $this->rater;
    }

    /**
     * Sets a new rater
     *
     * Individual or group who did the rating.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $rater
     * @return self
     */
    public function setRater(?\TKusy\Hl7Fhir\R5\StringType $rater = null)
    {
        $this->rater = $rater;
        return $this;
    }

    /**
     * Adds as subcomponent
     *
     * A domain or subdomain of certainty.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EvidenceCertaintyType $subcomponent
     */
    public function addToSubcomponent(\TKusy\Hl7Fhir\R5\EvidenceCertaintyType $subcomponent)
    {
        $this->subcomponent[] = $subcomponent;
        return $this;
    }

    /**
     * isset subcomponent
     *
     * A domain or subdomain of certainty.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubcomponent($index)
    {
        return isset($this->subcomponent[$index]);
    }

    /**
     * unset subcomponent
     *
     * A domain or subdomain of certainty.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubcomponent($index)
    {
        unset($this->subcomponent[$index]);
    }

    /**
     * Gets as subcomponent
     *
     * A domain or subdomain of certainty.
     *
     * @return \TKusy\Hl7Fhir\R5\EvidenceCertaintyType[]
     */
    public function getSubcomponent()
    {
        return $this->subcomponent;
    }

    /**
     * Sets a new subcomponent
     *
     * A domain or subdomain of certainty.
     *
     * @param \TKusy\Hl7Fhir\R5\EvidenceCertaintyType[] $subcomponent
     * @return self
     */
    public function setSubcomponent(array $subcomponent = null)
    {
        $this->subcomponent = $subcomponent;
        return $this;
    }


}

