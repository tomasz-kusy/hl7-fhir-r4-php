<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeCostType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Cost
 */
class MedicationKnowledgeCostType extends BackboneElementType
{

    /**
     * The category of the cost information. For example, manufacturers' cost, patient cost, claim reimbursement cost, actual acquisition cost.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The source or owner that assigns the price to the medication.
     *
     * @var string $source
     */
    private $source = null;

    /**
     * The price of the medication.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $cost
     */
    private $cost = null;

    /**
     * Gets as type
     *
     * The category of the cost information. For example, manufacturers' cost, patient cost, claim reimbursement cost, actual acquisition cost.
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
     * The category of the cost information. For example, manufacturers' cost, patient cost, claim reimbursement cost, actual acquisition cost.
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
     * Gets as source
     *
     * The source or owner that assigns the price to the medication.
     *
     * @return string
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
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as cost
     *
     * The price of the medication.
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets a new cost
     *
     * The price of the medication.
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $cost
     * @return self
     */
    public function setCost(\TKusy\Hl7FhirR4\MoneyType $cost)
    {
        $this->cost = $cost;
        return $this;
    }


}

