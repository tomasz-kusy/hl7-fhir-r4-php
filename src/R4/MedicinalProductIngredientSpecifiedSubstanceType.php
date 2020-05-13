<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductIngredientSpecifiedSubstanceType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * XSD Type: MedicinalProductIngredient.SpecifiedSubstance
 */
class MedicinalProductIngredientSpecifiedSubstanceType extends BackboneElementType
{

    /**
     * The specified substance.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The group of specified substance, e.g. group 1 to 4.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $group
     */
    private $group = null;

    /**
     * Confidentiality level of the specified substance as the ingredient.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $confidentiality
     */
    private $confidentiality = null;

    /**
     * Quantity of the substance or specified substance present in the manufactured item or pharmaceutical product.
     *
     * @var \TKusy\Hl7Fhir\R4\MedicinalProductIngredientStrengthType[] $strength
     */
    private $strength = null;

    /**
     * Gets as code
     *
     * The specified substance.
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
     * The specified substance.
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
     * Gets as group
     *
     * The group of specified substance, e.g. group 1 to 4.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * The group of specified substance, e.g. group 1 to 4.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $group
     * @return self
     */
    public function setGroup(\TKusy\Hl7Fhir\R4\CodeableConceptType $group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Gets as confidentiality
     *
     * Confidentiality level of the specified substance as the ingredient.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * Sets a new confidentiality
     *
     * Confidentiality level of the specified substance as the ingredient.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $confidentiality
     * @return self
     */
    public function setConfidentiality(\TKusy\Hl7Fhir\R4\CodeableConceptType $confidentiality)
    {
        $this->confidentiality = $confidentiality;
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

