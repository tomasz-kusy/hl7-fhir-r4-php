<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing RiskEvidenceSynthesisPrecisionEstimateType
 *
 * The RiskEvidenceSynthesis resource describes the likelihood of an outcome in a population plus exposure state where the risk estimate is derived from a combination of research studies.
 * XSD Type: RiskEvidenceSynthesis.PrecisionEstimate
 */
class RiskEvidenceSynthesisPrecisionEstimateType extends BackboneElementType
{

    /**
     * Examples include confidence interval and interquartile range.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Use 95 for a 95% confidence interval.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $level
     */
    private $level = null;

    /**
     * Lower bound of confidence interval.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $from
     */
    private $from = null;

    /**
     * Upper bound of confidence interval.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $to
     */
    private $to = null;

    /**
     * Gets as type
     *
     * Examples include confidence interval and interquartile range.
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
     * Examples include confidence interval and interquartile range.
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
     * Gets as level
     *
     * Use 95 for a 95% confidence interval.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * Use 95 for a 95% confidence interval.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $level
     * @return self
     */
    public function setLevel(\TKusy\Hl7Fhir\R4\DecimalType $level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Gets as from
     *
     * Lower bound of confidence interval.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * Lower bound of confidence interval.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $from
     * @return self
     */
    public function setFrom(\TKusy\Hl7Fhir\R4\DecimalType $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * Upper bound of confidence interval.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * Upper bound of confidence interval.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $to
     * @return self
     */
    public function setTo(\TKusy\Hl7Fhir\R4\DecimalType $to)
    {
        $this->to = $to;
        return $this;
    }


}

