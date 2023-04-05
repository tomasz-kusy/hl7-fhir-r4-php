<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionIntakeConsumedItemType
 *
 * A record of food or fluid that is being consumed by a patient. A NutritionIntake may indicate that the patient may be consuming the food or fluid now or has consumed the food or fluid in the past. The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician. A common scenario where this information is captured is during the history taking process during a patient visit or stay or through an app that tracks food or fluids consumed. The consumption information may come from sources such as the patient's memory, from a nutrition label, or from a clinician documenting observed intake.
 * XSD Type: NutritionIntake.ConsumedItem
 */
class NutritionIntakeConsumedItemType extends BackboneElementType
{

    /**
     * Indicates what a category of item that was consumed: e.g., food, fluid, enteral, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Identifies the food or fluid product that was consumed. This is potentially a link to a resource representing the details of the food product (TBD) or a simple attribute carrying a code that identifies the food from a known list of foods.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $nutritionProduct
     */
    private $nutritionProduct = null;

    /**
     * Scheduled frequency of consumption.
     *
     * @var \TKusy\Hl7Fhir\R5\TimingType $schedule
     */
    private $schedule = null;

    /**
     * Quantity of the specified food.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $amount
     */
    private $amount = null;

    /**
     * Rate at which enteral feeding was administered.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $rate
     */
    private $rate = null;

    /**
     * Indicator when a patient is in a setting where it is helpful to know if food was not consumed, such as it was refused, held (as in tube feedings), or otherwise not provided. If a consumption is being recorded from an app, such as MyFitnessPal, this indicator will likely not be used.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $notConsumed
     */
    private $notConsumed = null;

    /**
     * Document the reason the food or fluid was not consumed, such as refused, held, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $notConsumedReason
     */
    private $notConsumedReason = null;

    /**
     * Gets as type
     *
     * Indicates what a category of item that was consumed: e.g., food, fluid, enteral, etc.
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
     * Indicates what a category of item that was consumed: e.g., food, fluid, enteral, etc.
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
     * Gets as nutritionProduct
     *
     * Identifies the food or fluid product that was consumed. This is potentially a link to a resource representing the details of the food product (TBD) or a simple attribute carrying a code that identifies the food from a known list of foods.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getNutritionProduct()
    {
        return $this->nutritionProduct;
    }

    /**
     * Sets a new nutritionProduct
     *
     * Identifies the food or fluid product that was consumed. This is potentially a link to a resource representing the details of the food product (TBD) or a simple attribute carrying a code that identifies the food from a known list of foods.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $nutritionProduct
     * @return self
     */
    public function setNutritionProduct(\TKusy\Hl7Fhir\R5\CodeableReferenceType $nutritionProduct)
    {
        $this->nutritionProduct = $nutritionProduct;
        return $this;
    }

    /**
     * Gets as schedule
     *
     * Scheduled frequency of consumption.
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Scheduled frequency of consumption.
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $schedule
     * @return self
     */
    public function setSchedule(?\TKusy\Hl7Fhir\R5\TimingType $schedule = null)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Quantity of the specified food.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Quantity of the specified food.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $amount
     * @return self
     */
    public function setAmount(?\TKusy\Hl7Fhir\R5\QuantityType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as rate
     *
     * Rate at which enteral feeding was administered.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Rate at which enteral feeding was administered.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $rate
     * @return self
     */
    public function setRate(?\TKusy\Hl7Fhir\R5\QuantityType $rate = null)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Gets as notConsumed
     *
     * Indicator when a patient is in a setting where it is helpful to know if food was not consumed, such as it was refused, held (as in tube feedings), or otherwise not provided. If a consumption is being recorded from an app, such as MyFitnessPal, this indicator will likely not be used.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getNotConsumed()
    {
        return $this->notConsumed;
    }

    /**
     * Sets a new notConsumed
     *
     * Indicator when a patient is in a setting where it is helpful to know if food was not consumed, such as it was refused, held (as in tube feedings), or otherwise not provided. If a consumption is being recorded from an app, such as MyFitnessPal, this indicator will likely not be used.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $notConsumed
     * @return self
     */
    public function setNotConsumed(?\TKusy\Hl7Fhir\R5\BooleanType $notConsumed = null)
    {
        $this->notConsumed = $notConsumed;
        return $this;
    }

    /**
     * Gets as notConsumedReason
     *
     * Document the reason the food or fluid was not consumed, such as refused, held, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getNotConsumedReason()
    {
        return $this->notConsumedReason;
    }

    /**
     * Sets a new notConsumedReason
     *
     * Document the reason the food or fluid was not consumed, such as refused, held, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $notConsumedReason
     * @return self
     */
    public function setNotConsumedReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $notConsumedReason = null)
    {
        $this->notConsumedReason = $notConsumedReason;
        return $this;
    }


}

