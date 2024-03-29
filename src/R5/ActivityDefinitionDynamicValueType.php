<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ActivityDefinitionDynamicValueType
 *
 * This resource allows for the definition of some activity to be performed, independent of a particular patient, practitioner, or other performance context.
 * XSD Type: ActivityDefinition.DynamicValue
 */
class ActivityDefinitionDynamicValueType extends BackboneElementType
{

    /**
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression. The specified path SHALL be a FHIRPath resolvable on the specified target type of the ActivityDefinition, and SHALL consist only of identifiers, constant indexers, and a restricted subset of functions. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $path
     */
    private $path = null;

    /**
     * An expression specifying the value of the customized element.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $expression
     */
    private $expression = null;

    /**
     * Gets as path
     *
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression. The specified path SHALL be a FHIRPath resolvable on the specified target type of the ActivityDefinition, and SHALL consist only of identifiers, constant indexers, and a restricted subset of functions. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression. The specified path SHALL be a FHIRPath resolvable on the specified target type of the ActivityDefinition, and SHALL consist only of identifiers, constant indexers, and a restricted subset of functions. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $path
     * @return self
     */
    public function setPath(\TKusy\Hl7Fhir\R5\StringType $path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as expression
     *
     * An expression specifying the value of the customized element.
     *
     * @return \TKusy\Hl7Fhir\R5\ExpressionType
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * An expression specifying the value of the customized element.
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $expression
     * @return self
     */
    public function setExpression(\TKusy\Hl7Fhir\R5\ExpressionType $expression)
    {
        $this->expression = $expression;
        return $this;
    }


}

