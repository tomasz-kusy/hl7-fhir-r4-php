<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionOrderAdministrationType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.Administration
 */
class NutritionOrderAdministrationType extends BackboneElementType
{

    /**
     * Schedule information for an enteral formula.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionOrderSchedule2Type $schedule
     */
    private $schedule = null;

    /**
     * The volume of formula to provide to the patient per the specified administration schedule.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $rateQuantity
     */
    private $rateQuantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $rateRatio
     */
    private $rateRatio = null;

    /**
     * Gets as schedule
     *
     * Schedule information for an enteral formula.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionOrderSchedule2Type
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Schedule information for an enteral formula.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderSchedule2Type $schedule
     * @return self
     */
    public function setSchedule(?\TKusy\Hl7Fhir\R5\NutritionOrderSchedule2Type $schedule = null)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The volume of formula to provide to the patient per the specified administration schedule.
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
     * The volume of formula to provide to the patient per the specified administration schedule.
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
     * Gets as rateQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }

    /**
     * Sets a new rateQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $rateQuantity
     * @return self
     */
    public function setRateQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $rateQuantity = null)
    {
        $this->rateQuantity = $rateQuantity;
        return $this;
    }

    /**
     * Gets as rateRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * Sets a new rateRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $rateRatio
     * @return self
     */
    public function setRateRatio(?\TKusy\Hl7Fhir\R5\RatioType $rateRatio = null)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }


}

