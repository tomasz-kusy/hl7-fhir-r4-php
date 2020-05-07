<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing NutritionOrderNutrientType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.Nutrient
 */
class NutritionOrderNutrientType extends BackboneElementType
{

    /**
     * The nutrient that is being modified such as carbohydrate or sodium.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $modifier
     */
    private $modifier = null;

    /**
     * The quantity of the specified nutrient to include in diet.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $amount
     */
    private $amount = null;

    /**
     * Gets as modifier
     *
     * The nutrient that is being modified such as carbohydrate or sodium.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * The nutrient that is being modified such as carbohydrate or sodium.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $modifier
     * @return self
     */
    public function setModifier(\TKusy\Hl7FhirR4\CodeableConceptType $modifier)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The quantity of the specified nutrient to include in diet.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The quantity of the specified nutrient to include in diet.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7FhirR4\QuantityType $amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

