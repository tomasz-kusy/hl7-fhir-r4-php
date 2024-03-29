<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceReferenceInformationGeneElementType
 *
 * Todo.
 * XSD Type: SubstanceReferenceInformation.GeneElement
 */
class SubstanceReferenceInformationGeneElementType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $element
     */
    private $element = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as type
     *
     * Todo.
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
     * Todo.
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
     * Gets as element
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $element
     * @return self
     */
    public function setElement(?\TKusy\Hl7Fhir\R5\IdentifierType $element = null)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * Adds as source
     *
     * Todo.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $source
     */
    public function addToSource(\TKusy\Hl7Fhir\R5\ReferenceType $source)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     * @return self
     */
    public function setSource(array $source = null)
    {
        $this->source = $source;
        return $this;
    }


}

