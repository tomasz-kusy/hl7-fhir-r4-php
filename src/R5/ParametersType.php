<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ParametersType
 *
 * This resource is used to pass information into and back from an operation (whether invoked directly from REST or within a messaging environment). It is not persisted or allowed to be referenced by other resources.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Parameters
 */
class ParametersType extends ResourceType
{

    /**
     * A parameter passed to or received from the operation.
     *
     * @var \TKusy\Hl7Fhir\R5\ParametersParameterType[] $parameter
     */
    private $parameter = null;

    /**
     * Adds as parameter
     *
     * A parameter passed to or received from the operation.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ParametersParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R5\ParametersParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * A parameter passed to or received from the operation.
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
     * A parameter passed to or received from the operation.
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
     * A parameter passed to or received from the operation.
     *
     * @return \TKusy\Hl7Fhir\R5\ParametersParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * A parameter passed to or received from the operation.
     *
     * @param \TKusy\Hl7Fhir\R5\ParametersParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter = null)
    {
        $this->parameter = $parameter;
        return $this;
    }


}

