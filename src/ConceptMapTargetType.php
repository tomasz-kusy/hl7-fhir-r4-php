<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ConceptMapTargetType
 *
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 * XSD Type: ConceptMap.Target
 */
class ConceptMapTargetType extends BackboneElementType
{

    /**
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @var string $display
     */
    private $display = null;

    /**
     * The equivalence between the source and target concepts (counting for the dependencies and products). The equivalence is read from target to source (e.g. the target is 'wider' than the source).
     *
     * @var \TKusy\Hl7FhirR4\ConceptMapEquivalenceType $equivalence
     */
    private $equivalence = null;

    /**
     * A description of status/issues in mapping that conveys additional information not represented in the structured data.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     *
     * @var \TKusy\Hl7FhirR4\ConceptMapDependsOnType[] $dependsOn
     */
    private $dependsOn = null;

    /**
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @var \TKusy\Hl7FhirR4\ConceptMapDependsOnType[] $product
     */
    private $product = null;

    /**
     * Gets as code
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as display
     *
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Sets a new display
     *
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @param string $display
     * @return self
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as equivalence
     *
     * The equivalence between the source and target concepts (counting for the dependencies and products). The equivalence is read from target to source (e.g. the target is 'wider' than the source).
     *
     * @return \TKusy\Hl7FhirR4\ConceptMapEquivalenceType
     */
    public function getEquivalence()
    {
        return $this->equivalence;
    }

    /**
     * Sets a new equivalence
     *
     * The equivalence between the source and target concepts (counting for the dependencies and products). The equivalence is read from target to source (e.g. the target is 'wider' than the source).
     *
     * @param \TKusy\Hl7FhirR4\ConceptMapEquivalenceType $equivalence
     * @return self
     */
    public function setEquivalence(\TKusy\Hl7FhirR4\ConceptMapEquivalenceType $equivalence)
    {
        $this->equivalence = $equivalence;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A description of status/issues in mapping that conveys additional information not represented in the structured data.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A description of status/issues in mapping that conveys additional information not represented in the structured data.
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as dependsOn
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ConceptMapDependsOnType $dependsOn
     */
    public function addToDependsOn(\TKusy\Hl7FhirR4\ConceptMapDependsOnType $dependsOn)
    {
        $this->dependsOn[] = $dependsOn;
        return $this;
    }

    /**
     * isset dependsOn
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDependsOn($index)
    {
        return isset($this->dependsOn[$index]);
    }

    /**
     * unset dependsOn
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDependsOn($index)
    {
        unset($this->dependsOn[$index]);
    }

    /**
     * Gets as dependsOn
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     *
     * @return \TKusy\Hl7FhirR4\ConceptMapDependsOnType[]
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }

    /**
     * Sets a new dependsOn
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified element can be resolved, and it has the specified value.
     *
     * @param \TKusy\Hl7FhirR4\ConceptMapDependsOnType[] $dependsOn
     * @return self
     */
    public function setDependsOn(array $dependsOn)
    {
        $this->dependsOn = $dependsOn;
        return $this;
    }

    /**
     * Adds as product
     *
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ConceptMapDependsOnType $product
     */
    public function addToProduct(\TKusy\Hl7FhirR4\ConceptMapDependsOnType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProduct($index)
    {
        return isset($this->product[$index]);
    }

    /**
     * unset product
     *
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProduct($index)
    {
        unset($this->product[$index]);
    }

    /**
     * Gets as product
     *
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @return \TKusy\Hl7FhirR4\ConceptMapDependsOnType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * A set of additional outcomes from this mapping to other elements. To properly execute this mapping, the specified element must be mapped to some data element or source that is in context. The mapping may still be useful without a place for the additional data elements, but the equivalence cannot be relied on.
     *
     * @param \TKusy\Hl7FhirR4\ConceptMapDependsOnType[] $product
     * @return self
     */
    public function setProduct(array $product)
    {
        $this->product = $product;
        return $this;
    }


}

