<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing PlanDefinitionDynamicValueType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical artifacts such as clinical decision support rules, order sets and protocols.
 * XSD Type: PlanDefinition.DynamicValue
 */
class PlanDefinitionDynamicValueType extends BackboneElementType
{

    /**
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression. The specified path SHALL be a FHIRPath resolveable on the specified target type of the ActivityDefinition, and SHALL consist only of identifiers, constant indexers, and a restricted subset of functions. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $path
     */
    private $path = null;

    /**
     * An expression specifying the value of the customized element.
     *
     * @var \TKusy\Hl7Fhir\R4\ExpressionType $expression
     */
    private $expression = null;

    /**
     * Gets as path
     *
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression. The specified path SHALL be a FHIRPath resolveable on the specified target type of the ActivityDefinition, and SHALL consist only of identifiers, constant indexers, and a restricted subset of functions. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
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
     * The path to the element to be customized. This is the path on the resource that will hold the result of the calculation defined by the expression. The specified path SHALL be a FHIRPath resolveable on the specified target type of the ActivityDefinition, and SHALL consist only of identifiers, constant indexers, and a restricted subset of functions. The path is allowed to contain qualifiers (.) to traverse sub-elements, as well as indexers ([x]) to traverse multiple-cardinality sub-elements (see the [Simple FHIRPath Profile](fhirpath.html#simple) for full details).
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
     * Gets as expression
     *
     * An expression specifying the value of the customized element.
     *
     * @return \TKusy\Hl7Fhir\R4\ExpressionType
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
     * @param \TKusy\Hl7Fhir\R4\ExpressionType $expression
     * @return self
     */
    public function setExpression(\TKusy\Hl7Fhir\R4\ExpressionType $expression)
    {
        $this->expression = $expression;
        return $this;
    }


}

