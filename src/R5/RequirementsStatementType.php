<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RequirementsStatementType
 *
 * A set of requirements - a list of features or behaviors of designed systems that are necessary to achieve organizational or regulatory goals.
 * XSD Type: Requirements.Statement
 */
class RequirementsStatementType extends BackboneElementType
{

    /**
     * Key that identifies this statement (unique within this resource).
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $key
     */
    private $key = null;

    /**
     * A short human usable label for this statement.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $label
     */
    private $label = null;

    /**
     * A short human usable label for this statement.
     *
     * @var \TKusy\Hl7Fhir\R5\ConformanceExpectationType[] $conformance
     */
    private $conformance = null;

    /**
     * This boolean flag is set to true of the text of the requirement is conditional on something e.g. it includes lanauage like 'if x then y'. This conditionality flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $conditionality
     */
    private $conditionality = null;

    /**
     * The actual requirement for human consumption.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $requirement
     */
    private $requirement = null;

    /**
     * Another statement on one of the requirements that this requirement clarifies or restricts.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $parent
     */
    private $parent = null;

    /**
     * A reference to another artifact that satisfies this requirement. This could be a Profile, extension, or an element in one of those, or a CapabilityStatement, OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType[] $satisfiedBy
     */
    private $satisfiedBy = null;

    /**
     * A reference to another artifact that created this requirement. This could be a Profile, etc., or external regulation, or business requirements expressed elsewhere.
     *
     * @var \TKusy\Hl7Fhir\R5\UrlType[] $reference
     */
    private $reference = null;

    /**
     * Who asked for this statement to be a requirement. By default, it's assumed that the publisher knows who it is if it matters.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $source
     */
    private $source = null;

    /**
     * Gets as key
     *
     * Key that identifies this statement (unique within this resource).
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Sets a new key
     *
     * Key that identifies this statement (unique within this resource).
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $key
     * @return self
     */
    public function setKey(\TKusy\Hl7Fhir\R5\IdType $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * Gets as label
     *
     * A short human usable label for this statement.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * A short human usable label for this statement.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $label
     * @return self
     */
    public function setLabel(?\TKusy\Hl7Fhir\R5\StringType $label = null)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Adds as conformance
     *
     * A short human usable label for this statement.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConformanceExpectationType $conformance
     */
    public function addToConformance(\TKusy\Hl7Fhir\R5\ConformanceExpectationType $conformance)
    {
        $this->conformance[] = $conformance;
        return $this;
    }

    /**
     * isset conformance
     *
     * A short human usable label for this statement.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConformance($index)
    {
        return isset($this->conformance[$index]);
    }

    /**
     * unset conformance
     *
     * A short human usable label for this statement.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConformance($index)
    {
        unset($this->conformance[$index]);
    }

    /**
     * Gets as conformance
     *
     * A short human usable label for this statement.
     *
     * @return \TKusy\Hl7Fhir\R5\ConformanceExpectationType[]
     */
    public function getConformance()
    {
        return $this->conformance;
    }

    /**
     * Sets a new conformance
     *
     * A short human usable label for this statement.
     *
     * @param \TKusy\Hl7Fhir\R5\ConformanceExpectationType[] $conformance
     * @return self
     */
    public function setConformance(array $conformance = null)
    {
        $this->conformance = $conformance;
        return $this;
    }

    /**
     * Gets as conditionality
     *
     * This boolean flag is set to true of the text of the requirement is conditional on something e.g. it includes lanauage like 'if x then y'. This conditionality flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getConditionality()
    {
        return $this->conditionality;
    }

    /**
     * Sets a new conditionality
     *
     * This boolean flag is set to true of the text of the requirement is conditional on something e.g. it includes lanauage like 'if x then y'. This conditionality flag is introduced for purposes of filtering and colour highlighting etc.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $conditionality
     * @return self
     */
    public function setConditionality(?\TKusy\Hl7Fhir\R5\BooleanType $conditionality = null)
    {
        $this->conditionality = $conditionality;
        return $this;
    }

    /**
     * Gets as requirement
     *
     * The actual requirement for human consumption.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Sets a new requirement
     *
     * The actual requirement for human consumption.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $requirement
     * @return self
     */
    public function setRequirement(\TKusy\Hl7Fhir\R5\MarkdownType $requirement)
    {
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * Gets as derivedFrom
     *
     * Another statement on one of the requirements that this requirement clarifies or restricts.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * Another statement on one of the requirements that this requirement clarifies or restricts.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $derivedFrom
     * @return self
     */
    public function setDerivedFrom(?\TKusy\Hl7Fhir\R5\StringType $derivedFrom = null)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Gets as parent
     *
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * A larger requirement that this requirement helps to refine and enable.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $parent
     * @return self
     */
    public function setParent(?\TKusy\Hl7Fhir\R5\StringType $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Adds as satisfiedBy
     *
     * A reference to another artifact that satisfies this requirement. This could be a Profile, extension, or an element in one of those, or a CapabilityStatement, OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UrlType $satisfiedBy
     */
    public function addToSatisfiedBy(\TKusy\Hl7Fhir\R5\UrlType $satisfiedBy)
    {
        $this->satisfiedBy[] = $satisfiedBy;
        return $this;
    }

    /**
     * isset satisfiedBy
     *
     * A reference to another artifact that satisfies this requirement. This could be a Profile, extension, or an element in one of those, or a CapabilityStatement, OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSatisfiedBy($index)
    {
        return isset($this->satisfiedBy[$index]);
    }

    /**
     * unset satisfiedBy
     *
     * A reference to another artifact that satisfies this requirement. This could be a Profile, extension, or an element in one of those, or a CapabilityStatement, OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSatisfiedBy($index)
    {
        unset($this->satisfiedBy[$index]);
    }

    /**
     * Gets as satisfiedBy
     *
     * A reference to another artifact that satisfies this requirement. This could be a Profile, extension, or an element in one of those, or a CapabilityStatement, OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType[]
     */
    public function getSatisfiedBy()
    {
        return $this->satisfiedBy;
    }

    /**
     * Sets a new satisfiedBy
     *
     * A reference to another artifact that satisfies this requirement. This could be a Profile, extension, or an element in one of those, or a CapabilityStatement, OperationDefinition, SearchParameter, CodeSystem(/code), ValueSet, Libary etc.
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType[] $satisfiedBy
     * @return self
     */
    public function setSatisfiedBy(array $satisfiedBy = null)
    {
        $this->satisfiedBy = $satisfiedBy;
        return $this;
    }

    /**
     * Adds as reference
     *
     * A reference to another artifact that created this requirement. This could be a Profile, etc., or external regulation, or business requirements expressed elsewhere.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UrlType $reference
     */
    public function addToReference(\TKusy\Hl7Fhir\R5\UrlType $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * A reference to another artifact that created this requirement. This could be a Profile, etc., or external regulation, or business requirements expressed elsewhere.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * A reference to another artifact that created this requirement. This could be a Profile, etc., or external regulation, or business requirements expressed elsewhere.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * A reference to another artifact that created this requirement. This could be a Profile, etc., or external regulation, or business requirements expressed elsewhere.
     *
     * @return \TKusy\Hl7Fhir\R5\UrlType[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A reference to another artifact that created this requirement. This could be a Profile, etc., or external regulation, or business requirements expressed elsewhere.
     *
     * @param \TKusy\Hl7Fhir\R5\UrlType[] $reference
     * @return self
     */
    public function setReference(array $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Adds as source
     *
     * Who asked for this statement to be a requirement. By default, it's assumed that the publisher knows who it is if it matters.
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
     * Who asked for this statement to be a requirement. By default, it's assumed that the publisher knows who it is if it matters.
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
     * Who asked for this statement to be a requirement. By default, it's assumed that the publisher knows who it is if it matters.
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
     * Who asked for this statement to be a requirement. By default, it's assumed that the publisher knows who it is if it matters.
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
     * Who asked for this statement to be a requirement. By default, it's assumed that the publisher knows who it is if it matters.
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

