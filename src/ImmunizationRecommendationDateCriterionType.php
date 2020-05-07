<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImmunizationRecommendationDateCriterionType
 *
 * A patient's point-in-time set of recommendations (i.e. forecasting) according to a published schedule with optional supporting justification.
 * XSD Type: ImmunizationRecommendation.DateCriterion
 */
class ImmunizationRecommendationDateCriterionType extends BackboneElementType
{

    /**
     * Date classification of recommendation. For example, earliest date to give, latest date to give, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The date whose meaning is specified by dateCriterion.code.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $value
     */
    private $value = null;

    /**
     * Gets as code
     *
     * Date classification of recommendation. For example, earliest date to give, latest date to give, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Date classification of recommendation. For example, earliest date to give, latest date to give, etc.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as value
     *
     * The date whose meaning is specified by dateCriterion.code.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The date whose meaning is specified by dateCriterion.code.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7FhirR4\DateTimeType $value)
    {
        $this->value = $value;
        return $this;
    }


}

