<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EffectEvidenceSynthesisCertaintySubcomponentType
 *
 * The EffectEvidenceSynthesis resource describes the difference in an outcome between exposures states in a population where the effect estimate is derived from a combination of research studies.
 * XSD Type: EffectEvidenceSynthesis.CertaintySubcomponent
 */
class EffectEvidenceSynthesisCertaintySubcomponentType extends BackboneElementType
{

    /**
     * Type of subcomponent of certainty rating.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A rating of a subcomponent of rating certainty.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $rating
     */
    private $rating = null;

    /**
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Gets as type
     *
     * Type of subcomponent of certainty rating.
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
     * Type of subcomponent of certainty rating.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as rating
     *
     * A rating of a subcomponent of rating certainty.
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
     * A rating of a subcomponent of rating certainty.
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
     * A rating of a subcomponent of rating certainty.
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
     * A rating of a subcomponent of rating certainty.
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
     * A rating of a subcomponent of rating certainty.
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


}

