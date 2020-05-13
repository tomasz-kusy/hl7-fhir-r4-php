<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductIngredientSubstanceType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * XSD Type: MedicinalProductIngredient.Substance
 */
class MedicinalProductIngredientSubstanceType extends BackboneElementType
{

    /**
     * The ingredient substance.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
     *
     * @var \TKusy\Hl7Fhir\R4\MedicinalProductIngredientStrengthType[] $strength
     */
    private $strength = null;

    /**
     * Gets as code
     *
     * The ingredient substance.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The ingredient substance.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as strength
     *
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MedicinalProductIngredientStrengthType $strength
     */
    public function addToStrength(\TKusy\Hl7Fhir\R4\MedicinalProductIngredientStrengthType $strength)
    {
        $this->strength[] = $strength;
        return $this;
    }

    /**
     * isset strength
     *
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
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
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
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
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
     *
     * @return \TKusy\Hl7Fhir\R4\MedicinalProductIngredientStrengthType[]
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Sets a new strength
     *
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
     *
     * @param \TKusy\Hl7Fhir\R4\MedicinalProductIngredientStrengthType[] $strength
     * @return self
     */
    public function setStrength(array $strength)
    {
        $this->strength = $strength;
        return $this;
    }


}

