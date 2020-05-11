<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceReferenceInformationType
 *
 * Todo.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubstanceReferenceInformation
 */
class SubstanceReferenceInformationType extends DomainResourceType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\StringType $comment
     */
    private $comment = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneType[] $gene
     */
    private $gene = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneElementType[] $geneElement
     */
    private $geneElement = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceReferenceInformationClassificationType[] $classification
     */
    private $classification = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\SubstanceReferenceInformationTargetType[] $target
     */
    private $target = null;

    /**
     * Gets as comment
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\StringType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7FhirR4\StringType $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as gene
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneType $gene
     */
    public function addToGene(\TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneType $gene)
    {
        $this->gene[] = $gene;
        return $this;
    }

    /**
     * isset gene
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGene($index)
    {
        return isset($this->gene[$index]);
    }

    /**
     * unset gene
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGene($index)
    {
        unset($this->gene[$index]);
    }

    /**
     * Gets as gene
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneType[]
     */
    public function getGene()
    {
        return $this->gene;
    }

    /**
     * Sets a new gene
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneType[] $gene
     * @return self
     */
    public function setGene(array $gene)
    {
        $this->gene = $gene;
        return $this;
    }

    /**
     * Adds as geneElement
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneElementType $geneElement
     */
    public function addToGeneElement(\TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneElementType $geneElement)
    {
        $this->geneElement[] = $geneElement;
        return $this;
    }

    /**
     * isset geneElement
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGeneElement($index)
    {
        return isset($this->geneElement[$index]);
    }

    /**
     * unset geneElement
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGeneElement($index)
    {
        unset($this->geneElement[$index]);
    }

    /**
     * Gets as geneElement
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneElementType[]
     */
    public function getGeneElement()
    {
        return $this->geneElement;
    }

    /**
     * Sets a new geneElement
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationGeneElementType[] $geneElement
     * @return self
     */
    public function setGeneElement(array $geneElement)
    {
        $this->geneElement = $geneElement;
        return $this;
    }

    /**
     * Adds as classification
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationClassificationType $classification
     */
    public function addToClassification(\TKusy\Hl7FhirR4\SubstanceReferenceInformationClassificationType $classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * isset classification
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassification($index)
    {
        return isset($this->classification[$index]);
    }

    /**
     * unset classification
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassification($index)
    {
        unset($this->classification[$index]);
    }

    /**
     * Gets as classification
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceReferenceInformationClassificationType[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationClassificationType[] $classification
     * @return self
     */
    public function setClassification(array $classification)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Adds as target
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationTargetType $target
     */
    public function addToTarget(\TKusy\Hl7FhirR4\SubstanceReferenceInformationTargetType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTarget($index)
    {
        return isset($this->target[$index]);
    }

    /**
     * unset target
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTarget($index)
    {
        unset($this->target[$index]);
    }

    /**
     * Gets as target
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\SubstanceReferenceInformationTargetType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\SubstanceReferenceInformationTargetType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }


}

