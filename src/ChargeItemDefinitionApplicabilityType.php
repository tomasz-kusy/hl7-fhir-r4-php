<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ChargeItemDefinitionApplicabilityType
 *
 * The ChargeItemDefinition resource provides the properties that apply to the (billing) codes necessary to calculate costs and prices. The properties may differ largely depending on type and realm, therefore this resource gives only a rough structure and requires profiling for each type of billing code system.
 * XSD Type: ChargeItemDefinition.Applicability
 */
class ChargeItemDefinitionApplicabilityType extends BackboneElementType
{

    /**
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * The media type of the language for the expression, e.g. "text/cql" for Clinical Query Language expressions or "text/fhirpath" for FHIRPath expressions.
     *
     * @var \TKusy\Hl7FhirR4\StringType $language
     */
    private $language = null;

    /**
     * An expression that returns true or false, indicating whether the condition is satisfied. When using FHIRPath expressions, the %context environment variable must be replaced at runtime with the ChargeItem resource to which this definition is applied.
     *
     * @var \TKusy\Hl7FhirR4\StringType $expression
     */
    private $expression = null;

    /**
     * Gets as description
     *
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A brief, natural language description of the condition that effectively communicates the intended semantics.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as language
     *
     * The media type of the language for the expression, e.g. "text/cql" for Clinical Query Language expressions or "text/fhirpath" for FHIRPath expressions.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The media type of the language for the expression, e.g. "text/cql" for Clinical Query Language expressions or "text/fhirpath" for FHIRPath expressions.
     *
     * @param \TKusy\Hl7FhirR4\StringType $language
     * @return self
     */
    public function setLanguage(\TKusy\Hl7FhirR4\StringType $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as expression
     *
     * An expression that returns true or false, indicating whether the condition is satisfied. When using FHIRPath expressions, the %context environment variable must be replaced at runtime with the ChargeItem resource to which this definition is applied.
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
     * An expression that returns true or false, indicating whether the condition is satisfied. When using FHIRPath expressions, the %context environment variable must be replaced at runtime with the ChargeItem resource to which this definition is applied.
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

