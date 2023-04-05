<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RequestOrchestrationConditionType
 *
 * A set of related requests that can be used to capture intended activities that have inter-dependencies such as "give this medication after that one".
 * XSD Type: RequestOrchestration.Condition
 */
class RequestOrchestrationConditionType extends BackboneElementType
{

    /**
     * The kind of condition.
     *
     * @var \TKusy\Hl7Fhir\R5\ActionConditionKindType $kind
     */
    private $kind = null;

    /**
     * An expression that returns true or false, indicating whether or not the condition is satisfied.
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
     * An expression that returns true or false, indicating whether or not the condition is satisfied.
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
     * An expression that returns true or false, indicating whether or not the condition is satisfied.
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

