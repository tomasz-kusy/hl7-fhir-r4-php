<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureMapDependentType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Dependent
 */
class StructureMapDependentType extends BackboneElementType
{

    /**
     * Name of a rule or group to apply.
     *
     * @var \TKusy\Hl7FhirR4\IdType $name
     */
    private $name = null;

    /**
     * Variable to pass to the rule or group.
     *
     * @var string[] $variable
     */
    private $variable = null;

    /**
     * Gets as name
     *
     * Name of a rule or group to apply.
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
     * Name of a rule or group to apply.
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
     * Adds as variable
     *
     * Variable to pass to the rule or group.
     *
     * @return self
     * @param string $variable
     */
    public function addToVariable($variable)
    {
        $this->variable[] = $variable;
        return $this;
    }

    /**
     * isset variable
     *
     * Variable to pass to the rule or group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariable($index)
    {
        return isset($this->variable[$index]);
    }

    /**
     * unset variable
     *
     * Variable to pass to the rule or group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariable($index)
    {
        unset($this->variable[$index]);
    }

    /**
     * Gets as variable
     *
     * Variable to pass to the rule or group.
     *
     * @return string[]
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets a new variable
     *
     * Variable to pass to the rule or group.
     *
     * @param string[] $variable
     * @return self
     */
    public function setVariable(array $variable)
    {
        $this->variable = $variable;
        return $this;
    }


}

