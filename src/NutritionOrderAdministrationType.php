<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing NutritionOrderAdministrationType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.Administration
 */
class NutritionOrderAdministrationType extends BackboneElementType
{

    /**
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     *
     * @var \TKusy\Hl7FhirR4\TimingType $schedule
     */
    private $schedule = null;

    /**
     * The volume of formula to provide to the patient per the specified administration schedule.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule. (choose any one of rate*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $rateQuantity
     */
    private $rateQuantity = null;

    /**
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule. (choose any one of rate*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RatioType $rateRatio
     */
    private $rateRatio = null;

    /**
     * Gets as schedule
     *
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * The time period and frequency at which the enteral formula should be delivered to the patient.
     *
     * @param \TKusy\Hl7FhirR4\TimingType $schedule
     * @return self
     */
    public function setSchedule(\TKusy\Hl7FhirR4\TimingType $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The volume of formula to provide to the patient per the specified administration schedule.
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
     * The volume of formula to provide to the patient per the specified administration schedule.
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
     * Gets as rateQuantity
     *
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule. (choose any one of rate*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getRateQuantity()
    {
        return $this->rateQuantity;
    }

    /**
     * Sets a new rateQuantity
     *
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule. (choose any one of rate*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $rateQuantity
     * @return self
     */
    public function setRateQuantity(\TKusy\Hl7FhirR4\QuantityType $rateQuantity)
    {
        $this->rateQuantity = $rateQuantity;
        return $this;
    }

    /**
     * Gets as rateRatio
     *
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule. (choose any one of rate*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * Sets a new rateRatio
     *
     * The rate of administration of formula via a feeding pump, e.g. 60 mL per hour, according to the specified schedule. (choose any one of rate*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RatioType $rateRatio
     * @return self
     */
    public function setRateRatio(\TKusy\Hl7FhirR4\RatioType $rateRatio)
    {
        $this->rateRatio = $rateRatio;
        return $this;
    }


}

