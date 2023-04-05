<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgeCostType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Cost
 */
class MedicationKnowledgeCostType extends BackboneElementType
{

    /**
     * The date range for which the cost information of the medication is effective.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType[] $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * The category of the cost information. For example, manufacturers' cost, patient cost, claim reimbursement cost, actual acquisition cost.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The source or owner that assigns the price to the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $source
     */
    private $source = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\MoneyType $costMoney
     */
    private $costMoney = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $costCodeableConcept
     */
    private $costCodeableConcept = null;

    /**
     * Adds as effectiveDate
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectiveDate
     */
    public function addToEffectiveDate(\TKusy\Hl7Fhir\R5\PeriodType $effectiveDate)
    {
        $this->effectiveDate[] = $effectiveDate;
        return $this;
    }

    /**
     * isset effectiveDate
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEffectiveDate($index)
    {
        return isset($this->effectiveDate[$index]);
    }

    /**
     * unset effectiveDate
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEffectiveDate($index)
    {
        unset($this->effectiveDate[$index]);
    }

    /**
     * Gets as effectiveDate
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType[]
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * The date range for which the cost information of the medication is effective.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType[] $effectiveDate
     * @return self
     */
    public function setEffectiveDate(array $effectiveDate = null)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as type
     *
     * The category of the cost information. For example, manufacturers' cost, patient cost, claim reimbursement cost, actual acquisition cost.
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
     * The category of the cost information. For example, manufacturers' cost, patient cost, claim reimbursement cost, actual acquisition cost.
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
     * Gets as source
     *
     * The source or owner that assigns the price to the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The source or owner that assigns the price to the medication.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $source
     * @return self
     */
    public function setSource(?\TKusy\Hl7Fhir\R5\StringType $source = null)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as costMoney
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getCostMoney()
    {
        return $this->costMoney;
    }

    /**
     * Sets a new costMoney
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $costMoney
     * @return self
     */
    public function setCostMoney(?\TKusy\Hl7Fhir\R5\MoneyType $costMoney = null)
    {
        $this->costMoney = $costMoney;
        return $this;
    }

    /**
     * Gets as costCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCostCodeableConcept()
    {
        return $this->costCodeableConcept;
    }

    /**
     * Sets a new costCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $costCodeableConcept
     * @return self
     */
    public function setCostCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $costCodeableConcept = null)
    {
        $this->costCodeableConcept = $costCodeableConcept;
        return $this;
    }


}

