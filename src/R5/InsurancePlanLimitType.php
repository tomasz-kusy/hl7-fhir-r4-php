<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InsurancePlanLimitType
 *
 * Details of a Health Insurance product/plan provided by an organization.
 * XSD Type: InsurancePlan.Limit
 */
class InsurancePlanLimitType extends BackboneElementType
{

    /**
     * The maximum amount of a service item a plan will pay for a covered benefit. For examples. wellness visits, or eyeglasses.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $value
     */
    private $value = null;

    /**
     * The specific limit on the benefit.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Gets as value
     *
     * The maximum amount of a service item a plan will pay for a covered benefit. For examples. wellness visits, or eyeglasses.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The maximum amount of a service item a plan will pay for a covered benefit. For examples. wellness visits, or eyeglasses.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $value
     * @return self
     */
    public function setValue(?\TKusy\Hl7Fhir\R5\QuantityType $value = null)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as code
     *
     * The specific limit on the benefit.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The specific limit on the benefit.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }


}

