<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing TestScriptVariableType
 *
 * A structured set of tests against a FHIR server or client implementation to determine compliance against the FHIR specification.
 * XSD Type: TestScript.Variable
 */
class TestScriptVariableType extends BackboneElementType
{

    /**
     * Descriptive name for this variable.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * A default, hard-coded, or user-defined value for this variable.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $defaultValue
     */
    private $defaultValue = null;

    /**
     * A free text natural language description of the variable and its purpose.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $description
     */
    private $description = null;

    /**
     * The FHIRPath expression to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $expression
     */
    private $expression = null;

    /**
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $headerField
     */
    private $headerField = null;

    /**
     * Displayable text string with hint help information to the user when entering a default value.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $hint
     */
    private $hint = null;

    /**
     * XPath or JSONPath to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $path
     */
    private $path = null;

    /**
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against within this variable.
     *
     * @var \TKusy\Hl7Fhir\R4\IdType $sourceId
     */
    private $sourceId = null;

    /**
     * Gets as name
     *
     * Descriptive name for this variable.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Descriptive name for this variable.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as defaultValue
     *
     * A default, hard-coded, or user-defined value for this variable.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue
     *
     * A default, hard-coded, or user-defined value for this variable.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $defaultValue
     * @return self
     */
    public function setDefaultValue(\TKusy\Hl7Fhir\R4\StringType $defaultValue)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * Gets as description
     *
     * A free text natural language description of the variable and its purpose.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A free text natural language description of the variable and its purpose.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as expression
     *
     * The FHIRPath expression to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * The FHIRPath expression to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $expression
     * @return self
     */
    public function setExpression(\TKusy\Hl7Fhir\R4\StringType $expression)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Gets as headerField
     *
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getHeaderField()
    {
        return $this->headerField;
    }

    /**
     * Sets a new headerField
     *
     * Will be used to grab the HTTP header field value from the headers that sourceId is pointing to.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $headerField
     * @return self
     */
    public function setHeaderField(\TKusy\Hl7Fhir\R4\StringType $headerField)
    {
        $this->headerField = $headerField;
        return $this;
    }

    /**
     * Gets as hint
     *
     * Displayable text string with hint help information to the user when entering a default value.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getHint()
    {
        return $this->hint;
    }

    /**
     * Sets a new hint
     *
     * Displayable text string with hint help information to the user when entering a default value.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $hint
     * @return self
     */
    public function setHint(\TKusy\Hl7Fhir\R4\StringType $hint)
    {
        $this->hint = $hint;
        return $this;
    }

    /**
     * Gets as path
     *
     * XPath or JSONPath to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * XPath or JSONPath to evaluate against the fixture body. When variables are defined, only one of either expression, headerField or path must be specified.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $path
     * @return self
     */
    public function setPath(\TKusy\Hl7Fhir\R4\StringType $path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as sourceId
     *
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against within this variable.
     *
     * @return \TKusy\Hl7Fhir\R4\IdType
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * Sets a new sourceId
     *
     * Fixture to evaluate the XPath/JSONPath expression or the headerField against within this variable.
     *
     * @param \TKusy\Hl7Fhir\R4\IdType $sourceId
     * @return self
     */
    public function setSourceId(\TKusy\Hl7Fhir\R4\IdType $sourceId)
    {
        $this->sourceId = $sourceId;
        return $this;
    }


}

