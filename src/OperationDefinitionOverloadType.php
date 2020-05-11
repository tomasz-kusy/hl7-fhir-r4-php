<?php

namespace TKusy\Hl7FhirR4;

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
     * @var string[] $parameterName
     */
    private $parameterName = null;

    /**
     * Comments to go on overload.
     *
     * @var string $comment
     */
    private $comment = null;

    /**
     * Adds as parameterName
     *
     * Name of parameter to include in overload.
     *
     * @return self
     * @param string $parameterName
     */
    public function addToParameterName($parameterName)
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
     * @return string[]
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
     * @param string[] $parameterName
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
     * @return string
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
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

