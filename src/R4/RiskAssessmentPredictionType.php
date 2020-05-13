<?php

namespace TKusy\Hl7Fhir\R4;

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
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $outcome
     */
    private $outcome = null;

    /**
     * Indicates how likely the outcome is (in the specified timeframe). (choose any one of probability*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $probabilityDecimal
     */
    private $probabilityDecimal = null;

    /**
     * Indicates how likely the outcome is (in the specified timeframe). (choose any one of probability*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RangeType $probabilityRange
     */
    private $probabilityRange = null;

    /**
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a qualitative value (e.g. low, medium, or high).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $qualitativeRisk
     */
    private $qualitativeRisk = null;

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general. (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $relativeRisk
     */
    private $relativeRisk = null;

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $whenPeriod
     */
    private $whenPeriod = null;

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RangeType $whenRange
     */
    private $whenRange = null;

    /**
     * Additional information explaining the basis for the prediction.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $rationale
     */
    private $rationale = null;

    /**
     * Gets as outcome
     *
     * One of the potential outcomes for the patient (e.g. remission, death, a particular condition).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7Fhir\R4\CodeableConceptType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as probabilityDecimal
     *
     * Indicates how likely the outcome is (in the specified timeframe). (choose any one of probability*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getProbabilityDecimal()
    {
        return $this->probabilityDecimal;
    }

    /**
     * Sets a new probabilityDecimal
     *
     * Indicates how likely the outcome is (in the specified timeframe). (choose any one of probability*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $probabilityDecimal
     * @return self
     */
    public function setProbabilityDecimal(\TKusy\Hl7Fhir\R4\DecimalType $probabilityDecimal)
    {
        $this->probabilityDecimal = $probabilityDecimal;
        return $this;
    }

    /**
     * Gets as probabilityRange
     *
     * Indicates how likely the outcome is (in the specified timeframe). (choose any one of probability*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RangeType
     */
    public function getProbabilityRange()
    {
        return $this->probabilityRange;
    }

    /**
     * Sets a new probabilityRange
     *
     * Indicates how likely the outcome is (in the specified timeframe). (choose any one of probability*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RangeType $probabilityRange
     * @return self
     */
    public function setProbabilityRange(\TKusy\Hl7Fhir\R4\RangeType $probabilityRange)
    {
        $this->probabilityRange = $probabilityRange;
        return $this;
    }

    /**
     * Gets as qualitativeRisk
     *
     * Indicates how likely the outcome is (in the specified timeframe), expressed as a qualitative value (e.g. low, medium, or high).
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $qualitativeRisk
     * @return self
     */
    public function setQualitativeRisk(\TKusy\Hl7Fhir\R4\CodeableConceptType $qualitativeRisk)
    {
        $this->qualitativeRisk = $qualitativeRisk;
        return $this;
    }

    /**
     * Gets as relativeRisk
     *
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general. (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
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
     * @param \TKusy\Hl7Fhir\R4\DecimalType $relativeRisk
     * @return self
     */
    public function setRelativeRisk(\TKusy\Hl7Fhir\R4\DecimalType $relativeRisk)
    {
        $this->relativeRisk = $relativeRisk;
        return $this;
    }

    /**
     * Gets as whenPeriod
     *
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getWhenPeriod()
    {
        return $this->whenPeriod;
    }

    /**
     * Sets a new whenPeriod
     *
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $whenPeriod
     * @return self
     */
    public function setWhenPeriod(\TKusy\Hl7Fhir\R4\PeriodType $whenPeriod)
    {
        $this->whenPeriod = $whenPeriod;
        return $this;
    }

    /**
     * Gets as whenRange
     *
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RangeType
     */
    public function getWhenRange()
    {
        return $this->whenRange;
    }

    /**
     * Sets a new whenRange
     *
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RangeType $whenRange
     * @return self
     */
    public function setWhenRange(\TKusy\Hl7Fhir\R4\RangeType $whenRange)
    {
        $this->whenRange = $whenRange;
        return $this;
    }

    /**
     * Gets as rationale
     *
     * Additional information explaining the basis for the prediction.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $rationale
     * @return self
     */
    public function setRationale(\TKusy\Hl7Fhir\R4\StringType $rationale)
    {
        $this->rationale = $rationale;
        return $this;
    }


}

