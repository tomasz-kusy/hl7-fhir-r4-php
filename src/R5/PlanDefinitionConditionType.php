<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PlanDefinitionConditionType
 *
 * This resource allows for the definition of various types of plans as a sharable, consumable, and executable artifact. The resource is general enough to support the description of a broad range of clinical and non-clinical artifacts such as clinical decision support rules, order sets, protocols, and drug quality specifications.
 * XSD Type: PlanDefinition.Condition
 */
class PlanDefinitionConditionType extends BackboneElementType
{

    /**
     * The kind of condition.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionConditionKindType $kind
     */
    private $kind = null;

    /**
     * An expression that returns true or false, indicating whether the condition is satisfied.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $expression
     */
    private $expression = null;

    /**
     * Gets as kind
     *
     * The kind of condition.
     *
     * @return \TKusy\Hl7Fhir\R5\ActionConditionKindType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * The kind of condition.
     *
     * @param \TKusy\Hl7Fhir\R5\ActionConditionKindType $kind
     * @return self
     */
    public function setKind(\TKusy\Hl7Fhir\R5\ActionConditionKindType $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Gets as expression
     *
     * An expression that returns true or false, indicating whether the condition is satisfied.
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
     * An expression that returns true or false, indicating whether the condition is satisfied.
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $expression
     * @return self
     */
    public function setExpression(?\TKusy\Hl7Fhir\R5\ExpressionType $expression = null)
    {
        $this->expression = $expression;
        return $this;
    }


}

