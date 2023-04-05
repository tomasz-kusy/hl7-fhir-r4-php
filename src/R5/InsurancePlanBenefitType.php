<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InsurancePlanBenefitType
 *
 * Details of a Health Insurance product/plan provided by an organization.
 * XSD Type: InsurancePlan.Benefit
 */
class InsurancePlanBenefitType extends BackboneElementType
{

    /**
     * Type of benefit (primary care; speciality care; inpatient; outpatient).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The referral requirements to have access/coverage for this benefit.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $requirement
     */
    private $requirement = null;

    /**
     * The specific limits on the benefit.
     *
     * @var \TKusy\Hl7Fhir\R5\InsurancePlanLimitType[] $limit
     */
    private $limit = null;

    /**
     * Gets as type
     *
     * Type of benefit (primary care; speciality care; inpatient; outpatient).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type of benefit (primary care; speciality care; inpatient; outpatient).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as requirement
     *
     * The referral requirements to have access/coverage for this benefit.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getRequirement()
    {
        return $this->requirement;
    }

    /**
     * Sets a new requirement
     *
     * The referral requirements to have access/coverage for this benefit.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $requirement
     * @return self
     */
    public function setRequirement(?\TKusy\Hl7Fhir\R5\StringType $requirement = null)
    {
        $this->requirement = $requirement;
        return $this;
    }

    /**
     * Adds as limit
     *
     * The specific limits on the benefit.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InsurancePlanLimitType $limit
     */
    public function addToLimit(\TKusy\Hl7Fhir\R5\InsurancePlanLimitType $limit)
    {
        $this->limit[] = $limit;
        return $this;
    }

    /**
     * isset limit
     *
     * The specific limits on the benefit.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLimit($index)
    {
        return isset($this->limit[$index]);
    }

    /**
     * unset limit
     *
     * The specific limits on the benefit.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLimit($index)
    {
        unset($this->limit[$index]);
    }

    /**
     * Gets as limit
     *
     * The specific limits on the benefit.
     *
     * @return \TKusy\Hl7Fhir\R5\InsurancePlanLimitType[]
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Sets a new limit
     *
     * The specific limits on the benefit.
     *
     * @param \TKusy\Hl7Fhir\R5\InsurancePlanLimitType[] $limit
     * @return self
     */
    public function setLimit(array $limit = null)
    {
        $this->limit = $limit;
        return $this;
    }


}

