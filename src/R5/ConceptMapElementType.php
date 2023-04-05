<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConceptMapElementType
 *
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 * XSD Type: ConceptMap.Element
 */
class ConceptMapElementType extends BackboneElementType
{

    /**
     * Identity (code or path) or the element/item being mapped.
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
     * The set of concepts from the ConceptMap.group.source code system which are all being mapped to the target as part of this mapping rule.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $valueSet
     */
    private $valueSet = null;

    /**
     * If noMap = true this indicates that no mapping to a target concept exists for this source concept.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $noMap
     */
    private $noMap = null;

    /**
     * A concept from the target value set that this concept maps to.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapTargetType[] $target
     */
    private $target = null;

    /**
     * Gets as code
     *
     * Identity (code or path) or the element/item being mapped.
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
     * Identity (code or path) or the element/item being mapped.
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
     * The set of concepts from the ConceptMap.group.source code system which are all being mapped to the target as part of this mapping rule.
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
     * The set of concepts from the ConceptMap.group.source code system which are all being mapped to the target as part of this mapping rule.
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
     * Gets as noMap
     *
     * If noMap = true this indicates that no mapping to a target concept exists for this source concept.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getNoMap()
    {
        return $this->noMap;
    }

    /**
     * Sets a new noMap
     *
     * If noMap = true this indicates that no mapping to a target concept exists for this source concept.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $noMap
     * @return self
     */
    public function setNoMap(?\TKusy\Hl7Fhir\R5\BooleanType $noMap = null)
    {
        $this->noMap = $noMap;
        return $this;
    }

    /**
     * Adds as target
     *
     * A concept from the target value set that this concept maps to.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConceptMapTargetType $target
     */
    public function addToTarget(\TKusy\Hl7Fhir\R5\ConceptMapTargetType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * A concept from the target value set that this concept maps to.
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
     * A concept from the target value set that this concept maps to.
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
     * A concept from the target value set that this concept maps to.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapTargetType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * A concept from the target value set that this concept maps to.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapTargetType[] $target
     * @return self
     */
    public function setTarget(array $target = null)
    {
        $this->target = $target;
        return $this;
    }


}

