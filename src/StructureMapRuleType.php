<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureMapRuleType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Rule
 */
class StructureMapRuleType extends BackboneElementType
{

    /**
     * Name of the rule for internal references.
     *
     * @var \TKusy\Hl7FhirR4\IdType $name
     */
    private $name = null;

    /**
     * Source inputs to the mapping.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapSourceType[] $source
     */
    private $source = null;

    /**
     * Content to create because of this mapping rule.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapTargetType[] $target
     */
    private $target = null;

    /**
     * Rules contained in this rule.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapRuleType[] $rule
     */
    private $rule = null;

    /**
     * Which other rules to apply in the context of this rule.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapDependentType[] $dependent
     */
    private $dependent = null;

    /**
     * Documentation for this instance of data.
     *
     * @var \TKusy\Hl7FhirR4\StringType $documentation
     */
    private $documentation = null;

    /**
     * Gets as name
     *
     * Name of the rule for internal references.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the rule for internal references.
     *
     * @param \TKusy\Hl7FhirR4\IdType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\IdType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as source
     *
     * Source inputs to the mapping.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StructureMapSourceType $source
     */
    public function addToSource(\TKusy\Hl7FhirR4\StructureMapSourceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * Source inputs to the mapping.
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
     * Source inputs to the mapping.
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
     * Source inputs to the mapping.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapSourceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Source inputs to the mapping.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapSourceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Adds as target
     *
     * Content to create because of this mapping rule.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StructureMapTargetType $target
     */
    public function addToTarget(\TKusy\Hl7FhirR4\StructureMapTargetType $target)
    {
        $this->target[] = $target;
        return $this;
    }

    /**
     * isset target
     *
     * Content to create because of this mapping rule.
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
     * Content to create because of this mapping rule.
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
     * Content to create because of this mapping rule.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapTargetType[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Content to create because of this mapping rule.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapTargetType[] $target
     * @return self
     */
    public function setTarget(array $target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Adds as rule
     *
     * Rules contained in this rule.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StructureMapRuleType $rule
     */
    public function addToRule(\TKusy\Hl7FhirR4\StructureMapRuleType $rule)
    {
        $this->rule[] = $rule;
        return $this;
    }

    /**
     * isset rule
     *
     * Rules contained in this rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRule($index)
    {
        return isset($this->rule[$index]);
    }

    /**
     * unset rule
     *
     * Rules contained in this rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRule($index)
    {
        unset($this->rule[$index]);
    }

    /**
     * Gets as rule
     *
     * Rules contained in this rule.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapRuleType[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * Rules contained in this rule.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapRuleType[] $rule
     * @return self
     */
    public function setRule(array $rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Adds as dependent
     *
     * Which other rules to apply in the context of this rule.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StructureMapDependentType $dependent
     */
    public function addToDependent(\TKusy\Hl7FhirR4\StructureMapDependentType $dependent)
    {
        $this->dependent[] = $dependent;
        return $this;
    }

    /**
     * isset dependent
     *
     * Which other rules to apply in the context of this rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDependent($index)
    {
        return isset($this->dependent[$index]);
    }

    /**
     * unset dependent
     *
     * Which other rules to apply in the context of this rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDependent($index)
    {
        unset($this->dependent[$index]);
    }

    /**
     * Gets as dependent
     *
     * Which other rules to apply in the context of this rule.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapDependentType[]
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * Sets a new dependent
     *
     * Which other rules to apply in the context of this rule.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapDependentType[] $dependent
     * @return self
     */
    public function setDependent(array $dependent)
    {
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Documentation for this instance of data.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Documentation for this instance of data.
     *
     * @param \TKusy\Hl7FhirR4\StringType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7FhirR4\StringType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

