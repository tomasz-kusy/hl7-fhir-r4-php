<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing SearchParameterComponentType
 *
 * A search parameter that defines a named search item that can be used to search/filter on a resource.
 * XSD Type: SearchParameter.Component
 */
class SearchParameterComponentType extends BackboneElementType
{

    /**
     * The definition of the search parameter that describes this part.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $definition
     */
    private $definition = null;

    /**
     * A sub-expression that defines how to extract values for this component from the output of the main SearchParameter.expression.
     *
     * @var \TKusy\Hl7FhirR4\StringType $expression
     */
    private $expression = null;

    /**
     * Gets as definition
     *
     * The definition of the search parameter that describes this part.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * The definition of the search parameter that describes this part.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7FhirR4\CanonicalType $definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Gets as expression
     *
     * A sub-expression that defines how to extract values for this component from the output of the main SearchParameter.expression.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * A sub-expression that defines how to extract values for this component from the output of the main SearchParameter.expression.
     *
     * @param \TKusy\Hl7FhirR4\StringType $expression
     * @return self
     */
    public function setExpression(\TKusy\Hl7FhirR4\StringType $expression)
    {
        $this->expression = $expression;
        return $this;
    }


}

