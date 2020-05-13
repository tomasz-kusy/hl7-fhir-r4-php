<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing NutritionOrderTextureType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.Texture
 */
class NutritionOrderTextureType extends BackboneElementType
{

    /**
     * Any texture modifications (for solid foods) that should be made, e.g. easy to chew, chopped, ground, and pureed.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $modifier
     */
    private $modifier = null;

    /**
     * The food type(s) (e.g. meats, all foods) that the texture modification applies to. This could be all foods types.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $foodType
     */
    private $foodType = null;

    /**
     * Gets as modifier
     *
     * Any texture modifications (for solid foods) that should be made, e.g. easy to chew, chopped, ground, and pureed.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * Any texture modifications (for solid foods) that should be made, e.g. easy to chew, chopped, ground, and pureed.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $modifier
     * @return self
     */
    public function setModifier(\TKusy\Hl7Fhir\R4\CodeableConceptType $modifier)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Gets as foodType
     *
     * The food type(s) (e.g. meats, all foods) that the texture modification applies to. This could be all foods types.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getFoodType()
    {
        return $this->foodType;
    }

    /**
     * Sets a new foodType
     *
     * The food type(s) (e.g. meats, all foods) that the texture modification applies to. This could be all foods types.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $foodType
     * @return self
     */
    public function setFoodType(\TKusy\Hl7Fhir\R4\CodeableConceptType $foodType)
    {
        $this->foodType = $foodType;
        return $this;
    }


}

