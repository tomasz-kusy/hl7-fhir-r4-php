<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ChargeItemDefinitionApplicabilityType
 *
 * The ChargeItemDefinition resource provides the properties that apply to the (billing) codes necessary to calculate costs and prices. The properties may differ largely depending on type and realm, therefore this resource gives only a rough structure and requires profiling for each type of billing code system.
 * XSD Type: ChargeItemDefinition.Applicability
 */
class ChargeItemDefinitionApplicabilityType extends BackboneElementType
{

    /**
     * An expression that returns true or false, indicating whether the condition is satisfied. When using FHIRPath expressions, the %context environment variable must be replaced at runtime with the ChargeItem resource to which this definition is applied.
     *
     * @var \TKusy\Hl7Fhir\R5\ExpressionType $condition
     */
    private $condition = null;

    /**
     * The period during which the charge item definition content was or is planned to be in active use.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * Reference to / quotation of the external source of the group of properties.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact
     */
    private $relatedArtifact = null;

    /**
     * Gets as condition
     *
     * An expression that returns true or false, indicating whether the condition is satisfied. When using FHIRPath expressions, the %context environment variable must be replaced at runtime with the ChargeItem resource to which this definition is applied.
     *
     * @return \TKusy\Hl7Fhir\R5\ExpressionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * An expression that returns true or false, indicating whether the condition is satisfied. When using FHIRPath expressions, the %context environment variable must be replaced at runtime with the ChargeItem resource to which this definition is applied.
     *
     * @param \TKusy\Hl7Fhir\R5\ExpressionType $condition
     * @return self
     */
    public function setCondition(?\TKusy\Hl7Fhir\R5\ExpressionType $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * The period during which the charge item definition content was or is planned to be in active use.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The period during which the charge item definition content was or is planned to be in active use.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as relatedArtifact
     *
     * Reference to / quotation of the external source of the group of properties.
     *
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Sets a new relatedArtifact
     *
     * Reference to / quotation of the external source of the group of properties.
     *
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact
     * @return self
     */
    public function setRelatedArtifact(?\TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact = null)
    {
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }


}

