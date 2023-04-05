<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\CodeType $code
     */
    private $code = null;

    /**
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $display
     */
    private $display = null;

    /**
     * The set of concepts from the ConceptMap.group.target code system which are all being mapped to as part of this mapping rule. The effect of using this data element is the same as having multiple ConceptMap.group.element.target elements with one for each concept in the ConceptMap.group.element.target.valueSet value set.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     */
    private $valueSet = null;

    /**
     * The relationship between the source and target concepts. The relationship is read from source to target (e.g. source-is-narrower-than-target).
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapRelationshipType $relationship
     */
    private $relationship = null;

    /**
     * A description of status/issues in mapping that conveys additional information not represented in the structured data.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $comment
     */
    private $comment = null;

    /**
     * A property value for this source -> target mapping.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapProperty1Type[] $property
     */
    private $property = null;

    /**
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified data attribute can be resolved, and it has the specified value.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapDependsOnType[] $dependsOn
     */
    private $dependsOn = null;

    /**
     * Product is the output of a ConceptMap that provides additional values that go in other attributes / data elemnts of the target data.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapDependsOnType[] $product
     */
    private $product = null;

    /**
     * Gets as code
     *
     * Identity (code or path) or the element/item that the map refers to.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
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
     * @param \TKusy\Hl7Fhir\R5\CodeType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as display
     *
     * The display for the code. The display is only provided to help editors when editing the concept map.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $display
     * @return self
     */
    public function setDisplay(?\TKusy\Hl7Fhir\R5\StringType $display = null)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Gets as valueSet
     *
     * The set of concepts from the ConceptMap.group.target code system which are all being mapped to as part of this mapping rule. The effect of using this data element is the same as having multiple ConceptMap.group.element.target elements with one for each concept in the ConceptMap.group.element.target.valueSet value set.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * The set of concepts from the ConceptMap.group.target code system which are all being mapped to as part of this mapping rule. The effect of using this data element is the same as having multiple ConceptMap.group.element.target elements with one for each concept in the ConceptMap.group.element.target.valueSet value set.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     * @return self
     */
    public function setValueSet(?\TKusy\Hl7Fhir\R5\CanonicalType $valueSet = null)
    {
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * The relationship between the source and target concepts. The relationship is read from source to target (e.g. source-is-narrower-than-target).
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapRelationshipType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * The relationship between the source and target concepts. The relationship is read from source to target (e.g. source-is-narrower-than-target).
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapRelationshipType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7Fhir\R5\ConceptMapRelationshipType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as comment
     *
     * A description of status/issues in mapping that conveys additional information not represented in the structured data.
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
     * A description of status/issues in mapping that conveys additional information not represented in the structured data.
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
     * Adds as property
     *
     * A property value for this source -> target mapping.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConceptMapProperty1Type $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\ConceptMapProperty1Type $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * A property value for this source -> target mapping.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * A property value for this source -> target mapping.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * A property value for this source -> target mapping.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapProperty1Type[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A property value for this source -> target mapping.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapProperty1Type[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as dependsOn
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified data attribute can be resolved, and it has the specified value.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConceptMapDependsOnType $dependsOn
     */
    public function addToDependsOn(\TKusy\Hl7Fhir\R5\ConceptMapDependsOnType $dependsOn)
    {
        $this->dependsOn[] = $dependsOn;
        return $this;
    }

    /**
     * isset dependsOn
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified data attribute can be resolved, and it has the specified value.
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
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified data attribute can be resolved, and it has the specified value.
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
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified data attribute can be resolved, and it has the specified value.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapDependsOnType[]
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }

    /**
     * Sets a new dependsOn
     *
     * A set of additional dependencies for this mapping to hold. This mapping is only applicable if the specified data attribute can be resolved, and it has the specified value.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapDependsOnType[] $dependsOn
     * @return self
     */
    public function setDependsOn(array $dependsOn = null)
    {
        $this->dependsOn = $dependsOn;
        return $this;
    }

    /**
     * Adds as product
     *
     * Product is the output of a ConceptMap that provides additional values that go in other attributes / data elemnts of the target data.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConceptMapDependsOnType $product
     */
    public function addToProduct(\TKusy\Hl7Fhir\R5\ConceptMapDependsOnType $product)
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * isset product
     *
     * Product is the output of a ConceptMap that provides additional values that go in other attributes / data elemnts of the target data.
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
     * Product is the output of a ConceptMap that provides additional values that go in other attributes / data elemnts of the target data.
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
     * Product is the output of a ConceptMap that provides additional values that go in other attributes / data elemnts of the target data.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapDependsOnType[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * Product is the output of a ConceptMap that provides additional values that go in other attributes / data elemnts of the target data.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapDependsOnType[] $product
     * @return self
     */
    public function setProduct(array $product = null)
    {
        $this->product = $product;
        return $this;
    }


}

