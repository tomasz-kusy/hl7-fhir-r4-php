<?php

namespace TKusy\Hl7Fhir\R5;

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
     * @var \TKusy\Hl7Fhir\R5\ResourceTypeType $code
     */
    private $code = null;

    /**
     * The name of a search parameter that represents the link to the compartment. More than one may be listed because a resource may be linked to a compartment in more than one way,.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $param
     */
    private $param = null;

    /**
     * Additional documentation about the resource and compartment.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $documentation
     */
    private $documentation = null;

    /**
     * Search Parameter for mapping requests made with $everything.start (e.g. on [Patient.$everything](patient-operation-everything.html)).
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $startParam
     */
    private $startParam = null;

    /**
     * Search Parameter for mapping requests made with $everything.end (e.g. on [Patient.$everything](patient-operation-everything.html)).
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $endParam
     */
    private $endParam = null;

    /**
     * Gets as code
     *
     * The name of a resource supported by the server.
     *
     * @return \TKusy\Hl7Fhir\R5\ResourceTypeType
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
     * @param \TKusy\Hl7Fhir\R5\ResourceTypeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\ResourceTypeType $code)
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
     * @param \TKusy\Hl7Fhir\R5\StringType $param
     */
    public function addToParam(\TKusy\Hl7Fhir\R5\StringType $param)
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
     * @return \TKusy\Hl7Fhir\R5\StringType[]
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
     * @param \TKusy\Hl7Fhir\R5\StringType[] $param
     * @return self
     */
    public function setParam(array $param = null)
    {
        $this->param = $param;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * Additional documentation about the resource and compartment.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $documentation
     * @return self
     */
    public function setDocumentation(?\TKusy\Hl7Fhir\R5\StringType $documentation = null)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * Gets as startParam
     *
     * Search Parameter for mapping requests made with $everything.start (e.g. on [Patient.$everything](patient-operation-everything.html)).
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getStartParam()
    {
        return $this->startParam;
    }

    /**
     * Sets a new startParam
     *
     * Search Parameter for mapping requests made with $everything.start (e.g. on [Patient.$everything](patient-operation-everything.html)).
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $startParam
     * @return self
     */
    public function setStartParam(?\TKusy\Hl7Fhir\R5\UriType $startParam = null)
    {
        $this->startParam = $startParam;
        return $this;
    }

    /**
     * Gets as endParam
     *
     * Search Parameter for mapping requests made with $everything.end (e.g. on [Patient.$everything](patient-operation-everything.html)).
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getEndParam()
    {
        return $this->endParam;
    }

    /**
     * Sets a new endParam
     *
     * Search Parameter for mapping requests made with $everything.end (e.g. on [Patient.$everything](patient-operation-everything.html)).
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $endParam
     * @return self
     */
    public function setEndParam(?\TKusy\Hl7Fhir\R5\UriType $endParam = null)
    {
        $this->endParam = $endParam;
        return $this;
    }


}

