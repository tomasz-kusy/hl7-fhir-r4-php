<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RiskEvidenceSynthesisRiskEstimateType
 *
 * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a population plus exposure state where the risk estimate is derived from a combination of research studies.
 * XSD Type: RiskEvidenceSynthesis.RiskEstimate
 */
class RiskEvidenceSynthesisRiskEstimateType extends BackboneElementType
{

    /**
     * Human-readable summary of risk estimate.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Examples include proportion and mean.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The point estimate of the risk estimate.
     *
     * @var float $value
     */
    private $value = null;

    /**
     * Specifies the UCUM unit for the outcome.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The sample size for the group that was measured for this risk estimate.
     *
     * @var \integer $denominatorCount
     */
    private $denominatorCount = null;

    /**
     * The number of group members with the outcome of interest.
     *
     * @var \integer $numeratorCount
     */
    private $numeratorCount = null;

    /**
     * A description of the precision of the estimate for the effect.
     *
     * @var \TKusy\Hl7FhirR4\RiskEvidenceSynthesisPrecisionEstimateType[] $precisionEstimate
     */
    private $precisionEstimate = null;

    /**
     * Gets as description
     *
     * Human-readable summary of risk estimate.
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
     * Human-readable summary of risk estimate.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as type
     *
     * Examples include proportion and mean.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Examples include proportion and mean.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as value
     *
     * The point estimate of the risk estimate.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The point estimate of the risk estimate.
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * Specifies the UCUM unit for the outcome.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure(\TKusy\Hl7FhirR4\CodeableConceptType $unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets as denominatorCount
     *
     * The sample size for the group that was measured for this risk estimate.
     *
     * @return \integer
     */
    public function getDenominatorCount()
    {
        return $this->denominatorCount;
    }

    /**
     * Sets a new denominatorCount
     *
     * The sample size for the group that was measured for this risk estimate.
     *
     * @param \integer $denominatorCount
     * @return self
     */
    public function setDenominatorCount(\integer $denominatorCount)
    {
        $this->denominatorCount = $denominatorCount;
        return $this;
    }

    /**
     * Gets as numeratorCount
     *
     * The number of group members with the outcome of interest.
     *
     * @return \integer
     */
    public function getNumeratorCount()
    {
        return $this->numeratorCount;
    }

    /**
     * Sets a new numeratorCount
     *
     * The number of group members with the outcome of interest.
     *
     * @param \integer $numeratorCount
     * @return self
     */
    public function setNumeratorCount(\integer $numeratorCount)
    {
        $this->numeratorCount = $numeratorCount;
        return $this;
    }

    /**
     * Adds as precisionEstimate
     *
     * A description of the precision of the estimate for the effect.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RiskEvidenceSynthesisPrecisionEstimateType $precisionEstimate
     */
    public function addToPrecisionEstimate(\TKusy\Hl7FhirR4\RiskEvidenceSynthesisPrecisionEstimateType $precisionEstimate)
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
     * @return \TKusy\Hl7FhirR4\RiskEvidenceSynthesisPrecisionEstimateType[]
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
     * @param \TKusy\Hl7FhirR4\RiskEvidenceSynthesisPrecisionEstimateType[] $precisionEstimate
     * @return self
     */
    public function setPrecisionEstimate(array $precisionEstimate)
    {
        $this->precisionEstimate = $precisionEstimate;
        return $this;
    }


}

