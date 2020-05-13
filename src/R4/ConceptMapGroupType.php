<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\UriType $source
     */
    private $source = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $sourceVersion
     */
    private $sourceVersion = null;

    /**
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $target
     */
    private $target = null;

    /**
     * The specific version of the code system, as determined by the code system authority.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $targetVersion
     */
    private $targetVersion = null;

    /**
     * Mappings for an individual concept in the source to one or more concepts in the target.
     *
     * @var \TKusy\Hl7Fhir\R4\ConceptMapElementType[] $element
     */
    private $element = null;

    /**
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unmatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
     *
     * @var \TKusy\Hl7Fhir\R4\ConceptMapUnmappedType $unmapped
     */
    private $unmapped = null;

    /**
     * Gets as source
     *
     * An absolute URI that identifies the source system where the concepts to be mapped are defined.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
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
     * @param \TKusy\Hl7Fhir\R4\UriType $source
     * @return self
     */
    public function setSource(\TKusy\Hl7Fhir\R4\UriType $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as sourceVersion
     *
     * The specific version of the code system, as determined by the code system authority.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getSourceVersion()
    {
        return $this->sourceVersion;
    }

    /**
     * Sets a new sourceVersion
     *
     * The specific version of the code system, as determined by the code system authority.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $sourceVersion
     * @return self
     */
    public function setSourceVersion(\TKusy\Hl7Fhir\R4\StringType $sourceVersion)
    {
        $this->sourceVersion = $sourceVersion;
        return $this;
    }

    /**
     * Gets as target
     *
     * An absolute URI that identifies the target system that the concepts will be mapped to.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
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
     * @param \TKusy\Hl7Fhir\R4\UriType $target
     * @return self
     */
    public function setTarget(\TKusy\Hl7Fhir\R4\UriType $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as targetVersion
     *
     * The specific version of the code system, as determined by the code system authority.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getTargetVersion()
    {
        return $this->targetVersion;
    }

    /**
     * Sets a new targetVersion
     *
     * The specific version of the code system, as determined by the code system authority.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $targetVersion
     * @return self
     */
    public function setTargetVersion(\TKusy\Hl7Fhir\R4\StringType $targetVersion)
    {
        $this->targetVersion = $targetVersion;
        return $this;
    }

    /**
     * Adds as element
     *
     * Mappings for an individual concept in the source to one or more concepts in the target.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ConceptMapElementType $element
     */
    public function addToElement(\TKusy\Hl7Fhir\R4\ConceptMapElementType $element)
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
     * @return \TKusy\Hl7Fhir\R4\ConceptMapElementType[]
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
     * @param \TKusy\Hl7Fhir\R4\ConceptMapElementType[] $element
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
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unmatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
     *
     * @return \TKusy\Hl7Fhir\R4\ConceptMapUnmappedType
     */
    public function getUnmapped()
    {
        return $this->unmapped;
    }

    /**
     * Sets a new unmapped
     *
     * What to do when there is no mapping for the source concept. "Unmapped" does not include codes that are unmatched, and the unmapped element is ignored in a code is specified to have equivalence = unmatched.
     *
     * @param \TKusy\Hl7Fhir\R4\ConceptMapUnmappedType $unmapped
     * @return self
     */
    public function setUnmapped(\TKusy\Hl7Fhir\R4\ConceptMapUnmappedType $unmapped)
    {
        $this->unmapped = $unmapped;
        return $this;
    }


}

