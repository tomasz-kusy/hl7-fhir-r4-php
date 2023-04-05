<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RiskAssessmentPredictionType
 *
 * An assessment of the likely outcome(s) for a patient or other subject as well as the likelihood of each outcome.
 * XSD Type: RiskAssessment.Prediction
 */
class RiskAssessmentPredictionType extends BackboneElementType
{

    /**
     * One of the potential outcomes for the patient (e.g. remission, death, a particular condition).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $outcome
     */
    private $outcome = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DecimalType $probabilityDecimal
     */
    private $probabilityDecimal = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $probabilityRange
     */
    private $probabilityRange = null;

    /**
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a qualitative value (e.g. low, medium, or high).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $qualitativeRisk
     */
    private $qualitativeRisk = null;

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general. (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $relativeRisk
     */
    private $relativeRisk = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $whenPeriod
     */
    private $whenPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $whenRange
     */
    private $whenRange = null;

    /**
     * Additional information explaining the basis for the prediction.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $rationale
     */
    private $rationale = null;

    /**
     * Gets as outcome
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a particular condition).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a particular condition).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $outcome
     * @return self
     */
    public function setOutcome(?\TKusy\Hl7Fhir\R5\CodeableConceptType $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as probabilityDecimal
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getProbabilityDecimal()
    {
        return $this->probabilityDecimal;
    }

    /**
     * Sets a new probabilityDecimal
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $probabilityDecimal
     * @return self
     */
    public function setProbabilityDecimal(?\TKusy\Hl7Fhir\R5\DecimalType $probabilityDecimal = null)
    {
        $this->probabilityDecimal = $probabilityDecimal;
        return $this;
    }

    /**
     * Gets as probabilityRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getProbabilityRange()
    {
        return $this->probabilityRange;
    }

    /**
     * Sets a new probabilityRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $probabilityRange
     * @return self
     */
    public function setProbabilityRange(?\TKusy\Hl7Fhir\R5\RangeType $probabilityRange = null)
    {
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * Gets as qualitativeRisk
     *
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a qualitative value (e.g. low, medium, or high).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getQualitativeRisk()
    {
        return $this->qualitativeRisk;
    }

    /**
     * Sets a new qualitativeRisk
     *
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a qualitative value (e.g. low, medium, or high).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $qualitativeRisk
     * @return self
     */
    public function setQualitativeRisk(?\TKusy\Hl7Fhir\R5\CodeableConceptType $qualitativeRisk = null)
    {
        $this->qualitativeRisk = $qualitativeRisk;
        return $this;
    }

    /**
     * Gets as relativeRisk
     *
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general. (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getRelativeRisk()
    {
        return $this->relativeRisk;
    }

    /**
     * Sets a new relativeRisk
     *
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general. (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $relativeRisk
     * @return self
     */
    public function setRelativeRisk(?\TKusy\Hl7Fhir\R5\DecimalType $relativeRisk = null)
    {
        $this->relativeRisk = $relativeRisk;
        return $this;
    }

    /**
     * Gets as whenPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getWhenPeriod()
    {
        return $this->whenPeriod;
    }

    /**
     * Sets a new whenPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $whenPeriod
     * @return self
     */
    public function setWhenPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $whenPeriod = null)
    {
        $this->whenPeriod = $whenPeriod;
        return $this;
    }

    /**
     * Gets as whenRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getWhenRange()
    {
        return $this->whenRange;
    }

    /**
     * Sets a new whenRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $whenRange
     * @return self
     */
    public function setWhenRange(?\TKusy\Hl7Fhir\R5\RangeType $whenRange = null)
    {
        $this->whenRange = $whenRange;
        return $this;
    }

    /**
     * Gets as rationale
     *
     * Additional information explaining the basis for the prediction.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getRationale()
    {
        return $this->rationale;
    }

    /**
     * Sets a new rationale
     *
     * Additional information explaining the basis for the prediction.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $rationale
     * @return self
     */
    public function setRationale(?\TKusy\Hl7Fhir\R5\StringType $rationale = null)
    {
        $this->rationale = $rationale;
        return $this;
    }


}

