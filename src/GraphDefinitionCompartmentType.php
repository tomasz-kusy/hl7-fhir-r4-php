<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing GraphDefinitionCompartmentType
 *
 * A formal computable definition of a graph of resources - that is, a coherent set of resources that form a graph by following references. The Graph Definition resource defines a set and makes rules about the set.
 * XSD Type: GraphDefinition.Compartment
 */
class GraphDefinitionCompartmentType extends BackboneElementType
{

    /**
     * Defines how the compartment rule is used - whether it it is used to test whether resources are subject to the rule, or whether it is a rule that must be followed.
     *
     * @var \TKusy\Hl7FhirR4\GraphCompartmentUseType $use
     */
    private $use = null;

    /**
     * Identifies the compartment.
     *
     * @var \TKusy\Hl7FhirR4\CompartmentTypeType $code
     */
    private $code = null;

    /**
     * identical | matching | different | no-rule | custom.
     *
     * @var \TKusy\Hl7FhirR4\GraphCompartmentRuleType $rule
     */
    private $rule = null;

    /**
     * Custom rule, as a FHIRPath expression.
     *
     * @var string $expression
     */
    private $expression = null;

    /**
     * Documentation for FHIRPath expression.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as use
     *
     * Defines how the compartment rule is used - whether it it is used to test whether resources are subject to the rule, or whether it is a rule that must be followed.
     *
     * @return \TKusy\Hl7FhirR4\GraphCompartmentUseType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * Defines how the compartment rule is used - whether it it is used to test whether resources are subject to the rule, or whether it is a rule that must be followed.
     *
     * @param \TKusy\Hl7FhirR4\GraphCompartmentUseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7FhirR4\GraphCompartmentUseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies the compartment.
     *
     * @return \TKusy\Hl7FhirR4\CompartmentTypeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies the compartment.
     *
     * @param \TKusy\Hl7FhirR4\CompartmentTypeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CompartmentTypeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as rule
     *
     * identical | matching | different | no-rule | custom.
     *
     * @return \TKusy\Hl7FhirR4\GraphCompartmentRuleType
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * identical | matching | different | no-rule | custom.
     *
     * @param \TKusy\Hl7FhirR4\GraphCompartmentRuleType $rule
     * @return self
     */
    public function setRule(\TKusy\Hl7FhirR4\GraphCompartmentRuleType $rule)
    {
        $this->rule = $rule;
        return $this;
    }

    /**
     * Gets as expression
     *
     * Custom rule, as a FHIRPath expression.
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Sets a new expression
     *
     * Custom rule, as a FHIRPath expression.
     *
     * @param string $expression
     * @return self
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;
        return $this;
    }

    /**
     * Gets as description
     *
     * Documentation for FHIRPath expression.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Documentation for FHIRPath expression.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

