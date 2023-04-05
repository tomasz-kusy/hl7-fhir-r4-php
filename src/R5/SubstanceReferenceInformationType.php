<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceReferenceInformationType
 *
 * Todo.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: SubstanceReferenceInformation
 */
class SubstanceReferenceInformationType extends DomainResourceType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $comment
     */
    private $comment = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneType[] $gene
     */
    private $gene = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneElementType[] $geneElement
     */
    private $geneElement = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationTargetType[] $target
     */
    private $target = null;

    /**
     * Gets as comment
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $comment
     * @return self
     */
    public function setComment(?\TKusy\Hl7Fhir\R5\StringType $comment = null)
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
     * @param \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneType $gene
     */
    public function addToGene(\TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneType $gene)
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
     * @return \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneType[]
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
     * @param \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneType[] $gene
     * @return self
     */
    public function setGene(array $gene = null)
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
     * @param \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneElementType $geneElement
     */
    public function addToGeneElement(\TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneElementType $geneElement)
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
     * @return \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneElementType[]
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
     * @param \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationGeneElementType[] $geneElement
     * @return self
     */
    public function setGeneElement(array $geneElement = null)
    {
        $this->geneElement = $geneElement;
        return $this;
    }

    /**
     * Adds as target
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationTargetType $target
     */
    public function addToTarget(\TKusy\Hl7Fhir\R5\SubstanceReferenceInformationTargetType $target)
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
     * @return \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationTargetType[]
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
     * @param \TKusy\Hl7Fhir\R5\SubstanceReferenceInformationTargetType[] $target
     * @return self
     */
    public function setTarget(array $target = null)
    {
        $this->target = $target;
        return $this;
    }


}

