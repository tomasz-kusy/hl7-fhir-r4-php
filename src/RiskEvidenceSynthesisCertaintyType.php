<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RiskEvidenceSynthesisCertaintyType
 *
 * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a population plus exposure state where the risk estimate is derived from a combination of research studies.
 * XSD Type: RiskEvidenceSynthesis.Certainty
 */
class RiskEvidenceSynthesisCertaintyType extends BackboneElementType
{

    /**
     * A rating of the certainty of the effect estimate.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $rating
     */
    private $rating = [
        
    ];

    /**
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * A description of a component of the overall certainty.
     *
     * @var \TKusy\Hl7FhirR4\RiskEvidenceSynthesisCertaintySubcomponentType[] $certaintySubcomponent
     */
    private $certaintySubcomponent = [
        
    ];

    /**
     * Adds as rating
     *
     * A rating of the certainty of the effect estimate.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $rating
     */
    public function addToRating(\TKusy\Hl7FhirR4\CodeableConceptType $rating)
    {
        $this->rating[] = $rating;
        return $this;
    }

    /**
     * isset rating
     *
     * A rating of the certainty of the effect estimate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRating($index)
    {
        return isset($this->rating[$index]);
    }

    /**
     * unset rating
     *
     * A rating of the certainty of the effect estimate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRating($index)
    {
        unset($this->rating[$index]);
    }

    /**
     * Gets as rating
     *
     * A rating of the certainty of the effect estimate.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * A rating of the certainty of the effect estimate.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $rating
     * @return self
     */
    public function setRating(array $rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Adds as note
     *
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * A human-readable string to clarify or explain concepts about the resource.
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
     * A human-readable string to clarify or explain concepts about the resource.
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
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as certaintySubcomponent
     *
     * A description of a component of the overall certainty.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RiskEvidenceSynthesisCertaintySubcomponentType $certaintySubcomponent
     */
    public function addToCertaintySubcomponent(\TKusy\Hl7FhirR4\RiskEvidenceSynthesisCertaintySubcomponentType $certaintySubcomponent)
    {
        $this->certaintySubcomponent[] = $certaintySubcomponent;
        return $this;
    }

    /**
     * isset certaintySubcomponent
     *
     * A description of a component of the overall certainty.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertaintySubcomponent($index)
    {
        return isset($this->certaintySubcomponent[$index]);
    }

    /**
     * unset certaintySubcomponent
     *
     * A description of a component of the overall certainty.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertaintySubcomponent($index)
    {
        unset($this->certaintySubcomponent[$index]);
    }

    /**
     * Gets as certaintySubcomponent
     *
     * A description of a component of the overall certainty.
     *
     * @return \TKusy\Hl7FhirR4\RiskEvidenceSynthesisCertaintySubcomponentType[]
     */
    public function getCertaintySubcomponent()
    {
        return $this->certaintySubcomponent;
    }

    /**
     * Sets a new certaintySubcomponent
     *
     * A description of a component of the overall certainty.
     *
     * @param \TKusy\Hl7FhirR4\RiskEvidenceSynthesisCertaintySubcomponentType[] $certaintySubcomponent
     * @return self
     */
    public function setCertaintySubcomponent(array $certaintySubcomponent)
    {
        $this->certaintySubcomponent = $certaintySubcomponent;
        return $this;
    }


}

