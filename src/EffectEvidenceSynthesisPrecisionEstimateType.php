<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EffectEvidenceSynthesisPrecisionEstimateType
 *
 * The EffectEvidenceSynthesis resource describes the difference in an outcome between exposures states in a population where the effect estimate is derived from a combination of research studies.
 * XSD Type: EffectEvidenceSynthesis.PrecisionEstimate
 */
class EffectEvidenceSynthesisPrecisionEstimateType extends BackboneElementType
{

    /**
     * Examples include confidence interval and interquartile range.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Use 95 for a 95% confidence interval.
     *
     * @var float $level
     */
    private $level = null;

    /**
     * Lower bound of confidence interval.
     *
     * @var float $from
     */
    private $from = null;

    /**
     * Upper bound of confidence interval.
     *
     * @var float $to
     */
    private $to = null;

    /**
     * Gets as type
     *
     * Examples include confidence interval and interquartile range.
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
     * Examples include confidence interval and interquartile range.
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
     * Gets as level
     *
     * Use 95 for a 95% confidence interval.
     *
     * @return float
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
     * @param float $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Gets as from
     *
     * Lower bound of confidence interval.
     *
     * @return float
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
     * @param float $from
     * @return self
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * Upper bound of confidence interval.
     *
     * @return float
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
     * @param float $to
     * @return self
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }


}

