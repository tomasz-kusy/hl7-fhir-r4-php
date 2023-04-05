<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\IdType $name
     */
    private $name = null;

    /**
     * Parameter to pass to the rule or group.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureMapParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * Gets as name
     *
     * Name of a rule or group to apply.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
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
     * @param \TKusy\Hl7Fhir\R5\IdType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\IdType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Parameter to pass to the rule or group.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StructureMapParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\StructureMapParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * Parameter to pass to the rule or group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * Parameter to pass to the rule or group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * Parameter to pass to the rule or group.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureMapParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * Parameter to pass to the rule or group.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureMapParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }


}

