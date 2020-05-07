<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ParametersType
 *
 * This resource is a non-persisted resource used to pass information into and back from an [operation](operations.html). It has no other use, and there is no RESTful endpoint associated with it.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Parameters
 */
class ParametersType extends ResourceType
{

    /**
     * A parameter passed to or received from the operation.
     *
     * @var \TKusy\Hl7FhirR4\ParametersParameterType[] $parameter
     */
    private $parameter = [
        
    ];

    /**
     * Adds as parameter
     *
     * A parameter passed to or received from the operation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ParametersParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7FhirR4\ParametersParameterType $parameter)
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
     * @return \TKusy\Hl7FhirR4\ParametersParameterType[]
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
     * @param \TKusy\Hl7FhirR4\ParametersParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }


}

