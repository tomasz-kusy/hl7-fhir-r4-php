<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing InsurancePlanGeneralCostType
 *
 * Details of a Health Insurance product/plan provided by an organization.
 * XSD Type: InsurancePlan.GeneralCost
 */
class InsurancePlanGeneralCostType extends BackboneElementType
{

    /**
     * Type of cost.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Number of participants enrolled in the plan.
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType $groupSize
     */
    private $groupSize = null;

    /**
     * Value of the cost.
     *
     * @var \TKusy\Hl7Fhir\R4\MoneyType $cost
     */
    private $cost = null;

    /**
     * Additional information about the general costs associated with this plan.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $comment
     */
    private $comment = null;

    /**
     * Gets as type
     *
     * Type of cost.
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
     * Type of cost.
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
     * Gets as groupSize
     *
     * Number of participants enrolled in the plan.
     *
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType
     */
    public function getGroupSize()
    {
        return $this->groupSize;
    }

    /**
     * Sets a new groupSize
     *
     * Number of participants enrolled in the plan.
     *
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $groupSize
     * @return self
     */
    public function setGroupSize(\TKusy\Hl7Fhir\R4\PositiveIntType $groupSize)
    {
        $this->groupSize = $groupSize;
        return $this;
    }

    /**
     * Gets as cost
     *
     * Value of the cost.
     *
     * @return \TKusy\Hl7Fhir\R4\MoneyType
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets a new cost
     *
     * Value of the cost.
     *
     * @param \TKusy\Hl7Fhir\R4\MoneyType $cost
     * @return self
     */
    public function setCost(\TKusy\Hl7Fhir\R4\MoneyType $cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Additional information about the general costs associated with this plan.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Additional information about the general costs associated with this plan.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7Fhir\R4\StringType $comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

