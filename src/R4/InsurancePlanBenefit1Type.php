<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing InsurancePlanBenefit1Type
 *
 * Details of a Health Insurance product/plan provided by an organization.
 * XSD Type: InsurancePlan.Benefit1
 */
class InsurancePlanBenefit1Type extends BackboneElementType
{

    /**
     * Type of specific benefit (preventative; primary care office visit; speciality office visit; hospitalization; emergency room; urgent care).
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * List of the costs associated with a specific benefit.
     *
     * @var \TKusy\Hl7Fhir\R4\InsurancePlanCostType[] $cost
     */
    private $cost = null;

    /**
     * Gets as type
     *
     * Type of specific benefit (preventative; primary care office visit; speciality office visit; hospitalization; emergency room; urgent care).
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
     * Type of specific benefit (preventative; primary care office visit; speciality office visit; hospitalization; emergency room; urgent care).
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
     * Adds as cost
     *
     * List of the costs associated with a specific benefit.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\InsurancePlanCostType $cost
     */
    public function addToCost(\TKusy\Hl7Fhir\R4\InsurancePlanCostType $cost)
    {
        $this->cost[] = $cost;
        return $this;
    }

    /**
     * isset cost
     *
     * List of the costs associated with a specific benefit.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCost($index)
    {
        return isset($this->cost[$index]);
    }

    /**
     * unset cost
     *
     * List of the costs associated with a specific benefit.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCost($index)
    {
        unset($this->cost[$index]);
    }

    /**
     * Gets as cost
     *
     * List of the costs associated with a specific benefit.
     *
     * @return \TKusy\Hl7Fhir\R4\InsurancePlanCostType[]
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets a new cost
     *
     * List of the costs associated with a specific benefit.
     *
     * @param \TKusy\Hl7Fhir\R4\InsurancePlanCostType[] $cost
     * @return self
     */
    public function setCost(array $cost)
    {
        $this->cost = $cost;
        return $this;
    }


}

