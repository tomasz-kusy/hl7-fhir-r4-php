<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing IngredientSubstanceType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * XSD Type: Ingredient.Substance
 */
class IngredientSubstanceType extends BackboneElementType
{

    /**
     * A code or full resource that represents the ingredient's substance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     */
    private $code = null;

    /**
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item. The allowed repetitions do not represent different strengths, but are different representations - mathematically equivalent - of a single strength.
     *
     * @var \TKusy\Hl7Fhir\R5\IngredientStrengthType[] $strength
     */
    private $strength = null;

    /**
     * Gets as code
     *
     * A code or full resource that represents the ingredient's substance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code or full resource that represents the ingredient's substance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableReferenceType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as strength
     *
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item. The allowed repetitions do not represent different strengths, but are different representations - mathematically equivalent - of a single strength.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IngredientStrengthType $strength
     */
    public function addToStrength(\TKusy\Hl7Fhir\R5\IngredientStrengthType $strength)
    {
        $this->strength[] = $strength;
        return $this;
    }

    /**
     * isset strength
     *
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item. The allowed repetitions do not represent different strengths, but are different representations - mathematically equivalent - of a single strength.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStrength($index)
    {
        return isset($this->strength[$index]);
    }

    /**
     * unset strength
     *
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item. The allowed repetitions do not represent different strengths, but are different representations - mathematically equivalent - of a single strength.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStrength($index)
    {
        unset($this->strength[$index]);
    }

    /**
     * Gets as strength
     *
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item. The allowed repetitions do not represent different strengths, but are different representations - mathematically equivalent - of a single strength.
     *
     * @return \TKusy\Hl7Fhir\R5\IngredientStrengthType[]
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Sets a new strength
     *
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item. The allowed repetitions do not represent different strengths, but are different representations - mathematically equivalent - of a single strength.
     *
     * @param \TKusy\Hl7Fhir\R5\IngredientStrengthType[] $strength
     * @return self
     */
    public function setStrength(array $strength = null)
    {
        $this->strength = $strength;
        return $this;
    }


}

