<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing StructureMapSourceType
 *
 * A Map of relationships between 2 structures that can be used to transform data.
 * XSD Type: StructureMap.Source
 */
class StructureMapSourceType extends BackboneElementType
{

    /**
     * Type or variable this rule applies to.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $context
     */
    private $context = null;

    /**
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $min
     */
    private $min = null;

    /**
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $max
     */
    private $max = null;

    /**
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $type
     */
    private $type = null;

    /**
     * A value to use if there is no existing value in the source object.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $defaultValue
     */
    private $defaultValue = null;

    /**
     * Optional field for this source.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $element
     */
    private $element = null;

    /**
     * How to handle the list mode for this element.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureMapSourceListModeType $listMode
     */
    private $listMode = null;

    /**
     * Named context for field, if a field is specified.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $variable
     */
    private $variable = null;

    /**
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $condition
     */
    private $condition = null;

    /**
     * FHIRPath expression - must be true or the mapping engine throws an error instead of completing.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $check
     */
    private $check = null;

    /**
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $logMessage
     */
    private $logMessage = null;

    /**
     * Gets as context
     *
     * Type or variable this rule applies to.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
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
     * @param \TKusy\Hl7Fhir\R5\IdType $context
     * @return self
     */
    public function setContext(\TKusy\Hl7Fhir\R5\IdType $context)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Gets as min
     *
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Sets a new min
     *
     * Specified minimum cardinality for the element. This is optional; if present, it acts an implicit check on the input content.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $min
     * @return self
     */
    public function setMin(?\TKusy\Hl7Fhir\R5\IntegerType $min = null)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Gets as max
     *
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Sets a new max
     *
     * Specified maximum cardinality for the element - a number or a "*". This is optional; if present, it acts an implicit check on the input content (* just serves as documentation; it's the default value).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $max
     * @return self
     */
    public function setMax(?\TKusy\Hl7Fhir\R5\StringType $max = null)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Gets as type
     *
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specified type for the element. This works as a condition on the mapping - use for polymorphic elements.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\StringType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as defaultValue
     *
     * A value to use if there is no existing value in the source object.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Sets a new defaultValue
     *
     * A value to use if there is no existing value in the source object.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $defaultValue
     * @return self
     */
    public function setDefaultValue(?\TKusy\Hl7Fhir\R5\StringType $defaultValue = null)
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * Gets as element
     *
     * Optional field for this source.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Sets a new element
     *
     * Optional field for this source.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $element
     * @return self
     */
    public function setElement(?\TKusy\Hl7Fhir\R5\StringType $element = null)
    {
        $this->element = $element;
        return $this;
    }

    /**
     * Gets as listMode
     *
     * How to handle the list mode for this element.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureMapSourceListModeType
     */
    public function getListMode()
    {
        return $this->listMode;
    }

    /**
     * Sets a new listMode
     *
     * How to handle the list mode for this element.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureMapSourceListModeType $listMode
     * @return self
     */
    public function setListMode(?\TKusy\Hl7Fhir\R5\StructureMapSourceListModeType $listMode = null)
    {
        $this->listMode = $listMode;
        return $this;
    }

    /**
     * Gets as variable
     *
     * Named context for field, if a field is specified.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * Sets a new variable
     *
     * Named context for field, if a field is specified.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $variable
     * @return self
     */
    public function setVariable(?\TKusy\Hl7Fhir\R5\IdType $variable = null)
    {
        $this->variable = $variable;
        return $this;
    }

    /**
     * Gets as condition
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * FHIRPath expression - must be true or the rule does not apply.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $condition
     * @return self
     */
    public function setCondition(?\TKusy\Hl7Fhir\R5\StringType $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as check
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead of completing.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCheck()
    {
        return $this->check;
    }

    /**
     * Sets a new check
     *
     * FHIRPath expression - must be true or the mapping engine throws an error instead of completing.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $check
     * @return self
     */
    public function setCheck(?\TKusy\Hl7Fhir\R5\StringType $check = null)
    {
        $this->check = $check;
        return $this;
    }

    /**
     * Gets as logMessage
     *
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getLogMessage()
    {
        return $this->logMessage;
    }

    /**
     * Sets a new logMessage
     *
     * A FHIRPath expression which specifies a message to put in the transform log when content matching the source rule is found.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $logMessage
     * @return self
     */
    public function setLogMessage(?\TKusy\Hl7Fhir\R5\StringType $logMessage = null)
    {
        $this->logMessage = $logMessage;
        return $this;
    }


}

