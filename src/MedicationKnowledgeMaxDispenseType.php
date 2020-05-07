<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationKnowledgeMaxDispenseType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.MaxDispense
 */
class MedicationKnowledgeMaxDispenseType extends BackboneElementType
{

    /**
     * The maximum number of units of the medication that can be dispensed.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The period that applies to the maximum number of units.
     *
     * @var \TKusy\Hl7FhirR4\DurationType $period
     */
    private $period = null;

    /**
     * Gets as quantity
     *
     * The maximum number of units of the medication that can be dispensed.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The maximum number of units of the medication that can be dispensed.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period that applies to the maximum number of units.
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period that applies to the maximum number of units.
     *
     * @param \TKusy\Hl7FhirR4\DurationType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\DurationType $period)
    {
        $this->period = $period;
        return $this;
    }


}

