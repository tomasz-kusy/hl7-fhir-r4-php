<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing EffectEvidenceSynthesisEffectEstimateType
 *
 * The EffectEvidenceSynthesis resource describes the difference in an outcome between exposures states in a population where the effect estimate is derived from a combination of research studies.
 * XSD Type: EffectEvidenceSynthesis.EffectEstimate
 */
class EffectEvidenceSynthesisEffectEstimateType extends BackboneElementType
{

    /**
     * Human-readable summary of effect estimate.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $description
     */
    private $description = null;

    /**
     * Examples include relative risk and mean difference.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Used to define variant exposure states such as low-risk state.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $variantState
     */
    private $variantState = null;

    /**
     * The point estimate of the effect estimate.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $value
     */
    private $value = null;

    /**
     * Specifies the UCUM unit for the outcome.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * A description of the precision of the estimate for the effect.
     *
     * @var \TKusy\Hl7Fhir\R4\EffectEvidenceSynthesisPrecisionEstimateType[] $precisionEstimate
     */
    private $precisionEstimate = null;

    /**
     * Gets as description
     *
     * Human-readable summary of effect estimate.
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
     * Human-readable summary of effect estimate.
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
     * Gets as type
     *
     * Examples include relative risk and mean difference.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Examples include relative risk and mean difference.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as variantState
     *
     * Used to define variant exposure states such as low-risk state.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getVariantState()
    {
        return $this->variantState;
    }

    /**
     * Sets a new variantState
     *
     * Used to define variant exposure states such as low-risk state.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $variantState
     * @return self
     */
    public function setVariantState(\TKusy\Hl7Fhir\R4\CodeableConceptType $variantState)
    {
        $this->variantState = $variantState;
        return $this;
    }

    /**
     * Gets as value
     *
     * The point estimate of the effect estimate.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The point estimate of the effect estimate.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7Fhir\R4\DecimalType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure(\TKusy\Hl7Fhir\R4\CodeableConceptType $unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Adds as precisionEstimate
     *
     * A description of the precision of the estimate for the effect.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\EffectEvidenceSynthesisPrecisionEstimateType $precisionEstimate
     */
    public function addToPrecisionEstimate(\TKusy\Hl7Fhir\R4\EffectEvidenceSynthesisPrecisionEstimateType $precisionEstimate)
    {
        $this->precisionEstimate[] = $precisionEstimate;
        return $this;
    }

    /**
     * isset precisionEstimate
     *
     * A description of the precision of the estimate for the effect.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrecisionEstimate($index)
    {
        return isset($this->precisionEstimate[$index]);
    }

    /**
     * unset precisionEstimate
     *
     * A description of the precision of the estimate for the effect.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrecisionEstimate($index)
    {
        unset($this->precisionEstimate[$index]);
    }

    /**
     * Gets as precisionEstimate
     *
     * A description of the precision of the estimate for the effect.
     *
     * @return \TKusy\Hl7Fhir\R4\EffectEvidenceSynthesisPrecisionEstimateType[]
     */
    public function getPrecisionEstimate()
    {
        return $this->precisionEstimate;
    }

    /**
     * Sets a new precisionEstimate
     *
     * A description of the precision of the estimate for the effect.
     *
     * @param \TKusy\Hl7Fhir\R4\EffectEvidenceSynthesisPrecisionEstimateType[] $precisionEstimate
     * @return self
     */
    public function setPrecisionEstimate(array $precisionEstimate)
    {
        $this->precisionEstimate = $precisionEstimate;
        return $this;
    }


}

