<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CompartmentDefinitionResourceType
 *
 * A compartment definition that defines how resources are accessed on a server.
 * XSD Type: CompartmentDefinition.Resource
 */
class CompartmentDefinitionResourceType extends BackboneElementType
{

    /**
     * The name of a resource supported by the server.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * The name of a search parameter that represents the link to the compartment. More than one may be listed because a resource may be linked to a compartment in more than one way,.
     *
     * @var string[] $param
     */
    private $param = null;

    /**
     * Additional documentation about the resource and compartment.
     *
     * @var string $documentation
     */
    private $documentation = null;

    /**
     * Gets as code
     *
     * The name of a resource supported by the server.
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
     * The name of a resource supported by the server.
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
     * Adds as param
     *
     * The name of a search parameter that represents the link to the compartment. More than one may be listed because a resource may be linked to a compartment in more than one way,.
     *
     * @return self
     * @param string $param
     */
    public function addToParam($param)
    {
        $this->param[] = $param;
        return $this;
    }

    /**
     * isset param
     *
     * The name of a search parameter that represents the link to the compartment. More than one may be listed because a resource may be linked to a compartment in more than one way,.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParam($index)
    {
        return isset($this->param[$index]);
    }

    /**
     * unset param
     *
     * The name of a search parameter that represents the link to the compartment. More than one may be listed because a resource may be linked to a compartment in more than one way,.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParam($index)
    {
        unset($this->param[$index]);
    }

    /**
     * Gets as param
     *
     * The name of a search parameter that represents the link to the compartment. More than one may be listed because a resource may be linked to a compartment in more than one way,.
     *
     * @return string[]
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * Sets a new param
     *
     * The name of a search parameter that represents the link to the compartment. More than one may be listed because a resource may be linked to a compartment in more than one way,.
     *
     * @param string[] $param
     * @return self
     */
    public function setParam(array $param)
    {
        $this->param = $param;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Additional documentation about the resource and compartment.
     *
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * Additional documentation about the resource and compartment.
     *
     * @param string $documentation
     * @return self
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }


}

