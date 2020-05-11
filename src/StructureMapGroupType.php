<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureMapGroupType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Group
 */
class StructureMapGroupType extends BackboneElementType
{

    /**
     * A unique name for the group for the convenience of human readers.
     *
     * @var \TKusy\Hl7FhirR4\IdType $name
     */
    private $name = null;

    /**
     * Another group that this group adds rules to.
     *
     * @var \TKusy\Hl7FhirR4\IdType $extends
     */
    private $extends = null;

    /**
     * If this is the default rule set to apply for the source type or this combination of types.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapGroupTypeModeType $typeMode
     */
    private $typeMode = null;

    /**
     * Additional supporting documentation that explains the purpose of the group and the types of mappings within it.
     *
     * @var \TKusy\Hl7FhirR4\StringType $documentation
     */
    private $documentation = null;

    /**
     * A name assigned to an instance of data. The instance must be provided when the mapping is invoked.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapInputType[] $input
     */
    private $input = null;

    /**
     * Transform Rule from source to target.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapRuleType[] $rule
     */
    private $rule = null;

    /**
     * Gets as name
     *
     * A unique name for the group for the convenience of human readers.
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
     * A unique name for the group for the convenience of human readers.
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
     * Gets as extends
     *
     * Another group that this group adds rules to.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getExtends()
    {
        return $this->extends;
    }

    /**
     * Sets a new extends
     *
     * Another group that this group adds rules to.
     *
     * @param \TKusy\Hl7FhirR4\IdType $extends
     * @return self
     */
    public function setExtends(\TKusy\Hl7FhirR4\IdType $extends)
    {
        $this->extends = $extends;
        return $this;
    }

    /**
     * Gets as typeMode
     *
     * If this is the default rule set to apply for the source type or this combination of types.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapGroupTypeModeType
     */
    public function getTypeMode()
    {
        return $this->typeMode;
    }

    /**
     * Sets a new typeMode
     *
     * If this is the default rule set to apply for the source type or this combination of types.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapGroupTypeModeType $typeMode
     * @return self
     */
    public function setTypeMode(\TKusy\Hl7FhirR4\StructureMapGroupTypeModeType $typeMode)
    {
        $this->typeMode = $typeMode;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Additional supporting documentation that explains the purpose of the group and the types of mappings within it.
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
     * Additional supporting documentation that explains the purpose of the group and the types of mappings within it.
     *
     * @param \TKusy\Hl7FhirR4\StringType $documentation
     * @return self
     */
    public function setDocumentation(\TKusy\Hl7FhirR4\StringType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Adds as input
     *
     * A name assigned to an instance of data. The instance must be provided when the mapping is invoked.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StructureMapInputType $input
     */
    public function addToInput(\TKusy\Hl7FhirR4\StructureMapInputType $input)
    {
        $this->input[] = $input;
        return $this;
    }

    /**
     * isset input
     *
     * A name assigned to an instance of data. The instance must be provided when the mapping is invoked.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInput($index)
    {
        return isset($this->input[$index]);
    }

    /**
     * unset input
     *
     * A name assigned to an instance of data. The instance must be provided when the mapping is invoked.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInput($index)
    {
        unset($this->input[$index]);
    }

    /**
     * Gets as input
     *
     * A name assigned to an instance of data. The instance must be provided when the mapping is invoked.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapInputType[]
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Sets a new input
     *
     * A name assigned to an instance of data. The instance must be provided when the mapping is invoked.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapInputType[] $input
     * @return self
     */
    public function setInput(array $input)
    {
        $this->input = $input;
        return $this;
    }

    /**
     * Adds as rule
     *
     * Transform Rule from source to target.
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
     * Transform Rule from source to target.
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
     * Transform Rule from source to target.
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
     * Transform Rule from source to target.
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
     * Transform Rule from source to target.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapRuleType[] $rule
     * @return self
     */
    public function setRule(array $rule)
    {
        $this->rule = $rule;
        return $this;
    }


}

