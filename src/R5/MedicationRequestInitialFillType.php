<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationRequestInitialFillType
 *
 * An order or request for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to generalize the use across inpatient and outpatient settings, including care plans, etc., and to harmonize with workflow patterns.
 * XSD Type: MedicationRequest.InitialFill
 */
class MedicationRequestInitialFillType extends BackboneElementType
{

    /**
     * The amount or quantity to provide as part of the first dispense.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The length of time that the first dispense is expected to last.
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $duration
     */
    private $duration = null;

    /**
     * Gets as quantity
     *
     * The amount or quantity to provide as part of the first dispense.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount or quantity to provide as part of the first dispense.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The length of time that the first dispense is expected to last.
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The length of time that the first dispense is expected to last.
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $duration
     * @return self
     */
    public function setDuration(?\TKusy\Hl7Fhir\R5\DurationType $duration = null)
    {
        $this->duration = $duration;
        return $this;
    }


}

