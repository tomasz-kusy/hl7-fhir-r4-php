<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing StructureMapTargetType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Target
 */
class StructureMapTargetType extends BackboneElementType
{

    /**
     * Type or variable this rule applies to.
     *
     * @var \TKusy\Hl7FhirR4\IdType $context
     */
    private $context = null;

    /**
     * How to interpret the context.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapContextTypeType $contextType
     */
    private $contextType = null;

    /**
     * Field to create in the context.
     *
     * @var \TKusy\Hl7FhirR4\StringType $element
     */
    private $element = null;

    /**
     * Named context for field, if desired, and a field is specified.
     *
     * @var \TKusy\Hl7FhirR4\IdType $variable
     */
    private $variable = null;

    /**
     * If field is a list, how to manage the list.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapTargetListModeType[] $listMode
     */
    private $listMode = null;

    /**
     * Internal rule reference for shared list items.
     *
     * @var \TKusy\Hl7FhirR4\IdType $listRuleId
     */
    private $listRuleId = null;

    /**
     * How the data is copied / created.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapTransformType $transform
     */
    private $transform = null;

    /**
     * Parameters to the transform.
     *
     * @var \TKusy\Hl7FhirR4\StructureMapParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * Gets as context
     *
     * Type or variable this rule applies to.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Type or variable this rule applies to.
     *
     * @param \TKusy\Hl7FhirR4\IdType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7FhirR4\IdType $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Gets as contextType
     *
     * How to interpret the context.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapContextTypeType
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * Sets a new contextType
     *
     * How to interpret the context.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapContextTypeType $contextType
     * @return self
     */
    public function setContextType(\TKusy\Hl7FhirR4\StructureMapContextTypeType $contextType)
    {
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * Gets as element
     *
     * Field to create in the context.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * Field to create in the context.
     *
     * @param \TKusy\Hl7FhirR4\StringType $element
     * @return self
     */
    public function setElement(\TKusy\Hl7FhirR4\StringType $element)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * Gets as variable
     *
     * Named context for field, if desired, and a field is specified.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets a new variable
     *
     * Named context for field, if desired, and a field is specified.
     *
     * @param \TKusy\Hl7FhirR4\IdType $variable
     * @return self
     */
    public function setVariable(\TKusy\Hl7FhirR4\IdType $variable)
    {
        $this->variable = $variable;
        return $this;
    }

    /**
     * Adds as listMode
     *
     * If field is a list, how to manage the list.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StructureMapTargetListModeType $listMode
     */
    public function addToListMode(\TKusy\Hl7FhirR4\StructureMapTargetListModeType $listMode)
    {
        $this->listMode[] = $listMode;
        return $this;
    }

    /**
     * isset listMode
     *
     * If field is a list, how to manage the list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListMode($index)
    {
        return isset($this->listMode[$index]);
    }

    /**
     * unset listMode
     *
     * If field is a list, how to manage the list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListMode($index)
    {
        unset($this->listMode[$index]);
    }

    /**
     * Gets as listMode
     *
     * If field is a list, how to manage the list.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapTargetListModeType[]
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * Sets a new listMode
     *
     * If field is a list, how to manage the list.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapTargetListModeType[] $listMode
     * @return self
     */
    public function setListMode(array $listMode)
    {
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * Gets as listRuleId
     *
     * Internal rule reference for shared list items.
     *
     * @return \TKusy\Hl7FhirR4\IdType
     */
    public function getListRuleId()
    {
        return $this->listRuleId;
    }

    /**
     * Sets a new listRuleId
     *
     * Internal rule reference for shared list items.
     *
     * @param \TKusy\Hl7FhirR4\IdType $listRuleId
     * @return self
     */
    public function setListRuleId(\TKusy\Hl7FhirR4\IdType $listRuleId)
    {
        $this->listRuleId = $listRuleId;
        return $this;
    }

    /**
     * Gets as transform
     *
     * How the data is copied / created.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapTransformType
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * How the data is copied / created.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapTransformType $transform
     * @return self
     */
    public function setTransform(\TKusy\Hl7FhirR4\StructureMapTransformType $transform)
    {
        $this->transform = $transform;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Parameters to the transform.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StructureMapParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7FhirR4\StructureMapParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * Parameters to the transform.
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
     * Parameters to the transform.
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
     * Parameters to the transform.
     *
     * @return \TKusy\Hl7FhirR4\StructureMapParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * Parameters to the transform.
     *
     * @param \TKusy\Hl7FhirR4\StructureMapParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }


}

