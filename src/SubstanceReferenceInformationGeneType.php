<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SubstanceReferenceInformationGeneType
 *
 * Todo.
 * XSD Type: SubstanceReferenceInformation.Gene
 */
class SubstanceReferenceInformationGeneType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $geneSequenceOrigin
     */
    private $geneSequenceOrigin = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $gene
     */
    private $gene = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $source
     */
    private $source = [
        
    ];

    /**
     * Gets as geneSequenceOrigin
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getGeneSequenceOrigin()
    {
        return $this->geneSequenceOrigin;
    }

    /**
     * Sets a new geneSequenceOrigin
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $geneSequenceOrigin
     * @return self
     */
    public function setGeneSequenceOrigin(\TKusy\Hl7FhirR4\CodeableConceptType $geneSequenceOrigin)
    {
        $this->geneSequenceOrigin = $geneSequenceOrigin;
        return $this;
    }

    /**
     * Gets as gene
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $gene
     * @return self
     */
    public function setGene(\TKusy\Hl7FhirR4\CodeableConceptType $gene)
    {
        $this->gene = $gene;
        return $this;
    }

    /**
     * Adds as source
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7FhirR4\ReferenceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Todo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * Todo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * Todo.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Todo.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }


}

