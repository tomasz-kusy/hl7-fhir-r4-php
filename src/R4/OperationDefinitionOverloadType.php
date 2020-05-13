<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing OperationDefinitionOverloadType
 *
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).
 * XSD Type: OperationDefinition.Overload
 */
class OperationDefinitionOverloadType extends BackboneElementType
{

    /**
     * Name of parameter to include in overload.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType[] $parameterName
     */
    private $parameterName = null;

    /**
     * Comments to go on overload.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $comment
     */
    private $comment = null;

    /**
     * Adds as parameterName
     *
     * Name of parameter to include in overload.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\StringType $parameterName
     */
    public function addToParameterName(\TKusy\Hl7Fhir\R4\StringType $parameterName)
    {
        $this->parameterName[] = $parameterName;
        return $this;
    }

    /**
     * isset parameterName
     *
     * Name of parameter to include in overload.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameterName($index)
    {
        return isset($this->parameterName[$index]);
    }

    /**
     * unset parameterName
     *
     * Name of parameter to include in overload.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameterName($index)
    {
        unset($this->parameterName[$index]);
    }

    /**
     * Gets as parameterName
     *
     * Name of parameter to include in overload.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType[]
     */
    public function getParameterName()
    {
        return $this->parameterName;
    }

    /**
     * Sets a new parameterName
     *
     * Name of parameter to include in overload.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType[] $parameterName
     * @return self
     */
    public function setParameterName(array $parameterName)
    {
        $this->parameterName = $parameterName;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Comments to go on overload.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments to go on overload.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7Fhir\R4\StringType $comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

