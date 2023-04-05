<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionIntakeIngredientLabelType
 *
 * A record of food or fluid that is being consumed by a patient. A NutritionIntake may indicate that the patient may be consuming the food or fluid now or has consumed the food or fluid in the past. The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician. A common scenario where this information is captured is during the history taking process during a patient visit or stay or through an app that tracks food or fluids consumed. The consumption information may come from sources such as the patient's memory, from a nutrition label, or from a clinician documenting observed intake.
 * XSD Type: NutritionIntake.IngredientLabel
 */
class NutritionIntakeIngredientLabelType extends BackboneElementType
{

    /**
     * Total nutrient consumed. This could be a macronutrient (protein, fat, carbohydrate), or a vitamin and mineral.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $nutrient
     */
    private $nutrient = null;

    /**
     * Total amount of nutrient consumed.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $amount
     */
    private $amount = null;

    /**
     * Gets as nutrient
     *
     * Total nutrient consumed. This could be a macronutrient (protein, fat, carbohydrate), or a vitamin and mineral.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getNutrient()
    {
        return $this->nutrient;
    }

    /**
     * Sets a new nutrient
     *
     * Total nutrient consumed. This could be a macronutrient (protein, fat, carbohydrate), or a vitamin and mineral.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $nutrient
     * @return self
     */
    public function setNutrient(\TKusy\Hl7Fhir\R5\CodeableReferenceType $nutrient)
    {
        $this->nutrient = $nutrient;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Total amount of nutrient consumed.
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
     * Total amount of nutrient consumed.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7Fhir\R5\QuantityType $amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

