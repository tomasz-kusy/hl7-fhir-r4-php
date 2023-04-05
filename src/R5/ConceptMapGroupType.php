<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConceptMapGroupType
 *
 * A statement of relationships from one set of concepts to one or more other concepts - either concepts in code systems, or data element/data element concepts, or classes in class models.
 * XSD Type: ConceptMap.Group
 */
class ConceptMapGroupType extends BackboneElementType
{

    /**
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $source
     */
    private $source = null;

    /**
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $target
     */
    private $target = null;

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapElementType[] $element
     */
    private $element = null;

    /**
     * What to do when there is no mapping to a target concept from the source concept and ConceptMap.group.element.noMap is not true. This provides the "default" to be applied when there is no target concept mapping specified or the expansion of ConceptMap.group.element.target.valueSet is empty.
     *
     * @var \TKusy\Hl7Fhir\R5\ConceptMapUnmappedType $unmapped
     */
    private $unmapped = null;

    /**
     * Gets as source
     *
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $source
     * @return self
     */
    public function setSource(?\TKusy\Hl7Fhir\R5\CanonicalType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as target
     *
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $target
     * @return self
     */
    public function setTarget(?\TKusy\Hl7Fhir\R5\CanonicalType $target = null)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Adds as element
     *
     * Mappings for an individual concept in the source to one or more concepts in the target.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConceptMapElementType $element
     */
    public function addToElement(\TKusy\Hl7Fhir\R5\ConceptMapElementType $element)
    {
        $this->element[] = $element;
        return $this;
    }

    /**
     * isset element
     *
     * Mappings for an individual concept in the source to one or more concepts in the target.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElement($index)
    {
        return isset($this->element[$index]);
    }

    /**
     * unset element
     *
     * Mappings for an individual concept in the source to one or more concepts in the target.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElement($index)
    {
        unset($this->element[$index]);
    }

    /**
     * Gets as element
     *
     * Mappings for an individual concept in the source to one or more concepts in the target.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapElementType[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * Mappings for an individual concept in the source to one or more concepts in the target.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapElementType[] $element
     * @return self
     */
    public function setElement(array $element)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * Gets as unmapped
     *
     * What to do when there is no mapping to a target concept from the source concept and ConceptMap.group.element.noMap is not true. This provides the "default" to be applied when there is no target concept mapping specified or the expansion of ConceptMap.group.element.target.valueSet is empty.
     *
     * @return \TKusy\Hl7Fhir\R5\ConceptMapUnmappedType
     */
    public function getUnmapped()
    {
        return $this->unmapped;
    }

    /**
     * Sets a new unmapped
     *
     * What to do when there is no mapping to a target concept from the source concept and ConceptMap.group.element.noMap is not true. This provides the "default" to be applied when there is no target concept mapping specified or the expansion of ConceptMap.group.element.target.valueSet is empty.
     *
     * @param \TKusy\Hl7Fhir\R5\ConceptMapUnmappedType $unmapped
     * @return self
     */
    public function setUnmapped(?\TKusy\Hl7Fhir\R5\ConceptMapUnmappedType $unmapped = null)
    {
        $this->unmapped = $unmapped;
        return $this;
    }


}

