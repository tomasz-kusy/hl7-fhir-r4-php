<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing InsurancePlanSpecificCostType
 *
 * Details of a Health Insurance product/plan provided by an organization.
 * XSD Type: InsurancePlan.SpecificCost
 */
class InsurancePlanSpecificCostType extends BackboneElementType
{

    /**
     * General category of benefit (Medical; Dental; Vision; Drug; Mental Health; Substance Abuse; Hospice, Home Health).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * List of the specific benefits under this category of benefit.
     *
     * @var \TKusy\Hl7FhirR4\InsurancePlanBenefit1Type[] $benefit
     */
    private $benefit = null;

    /**
     * Gets as category
     *
     * General category of benefit (Medical; Dental; Vision; Drug; Mental Health; Substance Abuse; Hospice, Home Health).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * General category of benefit (Medical; Dental; Vision; Drug; Mental Health; Substance Abuse; Hospice, Home Health).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as benefit
     *
     * List of the specific benefits under this category of benefit.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\InsurancePlanBenefit1Type $benefit
     */
    public function addToBenefit(\TKusy\Hl7FhirR4\InsurancePlanBenefit1Type $benefit)
    {
        $this->benefit[] = $benefit;
        return $this;
    }

    /**
     * isset benefit
     *
     * List of the specific benefits under this category of benefit.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBenefit($index)
    {
        return isset($this->benefit[$index]);
    }

    /**
     * unset benefit
     *
     * List of the specific benefits under this category of benefit.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBenefit($index)
    {
        unset($this->benefit[$index]);
    }

    /**
     * Gets as benefit
     *
     * List of the specific benefits under this category of benefit.
     *
     * @return \TKusy\Hl7FhirR4\InsurancePlanBenefit1Type[]
     */
    public function getBenefit()
    {
        return $this->benefit;
    }

    /**
     * Sets a new benefit
     *
     * List of the specific benefits under this category of benefit.
     *
     * @param \TKusy\Hl7FhirR4\InsurancePlanBenefit1Type[] $benefit
     * @return self
     */
    public function setBenefit(array $benefit)
    {
        $this->benefit = $benefit;
        return $this;
    }


}

