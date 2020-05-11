<?php

namespace TKusy\Hl7FhirR4;

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
     * A concept from the target value set that this concept maps to.
     *
     * @var \TKusy\Hl7FhirR4\ConceptMapTargetType[] $target
     */
    private $target = null;

    /**
     * Gets as code
     *
     * Identity (code or path) or the element/item being mapped.
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
     * Identity (code or path) or the element/item being mapped.
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
     * Adds as target
     *
     * A concept from the target value set that this concept maps to.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ConceptMapTargetType $target
     */
    public function addToTarget(\TKusy\Hl7FhirR4\ConceptMapTargetType $target)
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
     * @return \TKusy\Hl7FhirR4\ConceptMapTargetType[]
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
     * @param \TKusy\Hl7FhirR4\ConceptMapTargetType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }


}

