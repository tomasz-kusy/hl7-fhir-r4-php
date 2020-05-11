<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductIngredientType
 *
 * An ingredient of a manufactured item or pharmaceutical product.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductIngredient
 */
class MedicinalProductIngredientType extends DomainResourceType
{

    /**
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Ingredient role e.g. Active ingredient, excipient.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $role
     */
    private $role = null;

    /**
     * If the ingredient is a known or suspected allergen.
     *
     * @var bool $allergenicIndicator
     */
    private $allergenicIndicator = null;

    /**
     * Manufacturer of this Ingredient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $manufacturer
     */
    private $manufacturer = null;

    /**
     * A specified substance that comprises this ingredient.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductIngredientSpecifiedSubstanceType[] $specifiedSubstance
     */
    private $specifiedSubstance = null;

    /**
     * The ingredient substance.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductIngredientSubstanceType $substance
     */
    private $substance = null;

    /**
     * Gets as identifier
     *
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The identifier(s) of this Ingredient that are assigned by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as role
     *
     * Ingredient role e.g. Active ingredient, excipient.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Ingredient role e.g. Active ingredient, excipient.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $role
     * @return self
     */
    public function setRole(\TKusy\Hl7FhirR4\CodeableConceptType $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as allergenicIndicator
     *
     * If the ingredient is a known or suspected allergen.
     *
     * @return bool
     */
    public function getAllergenicIndicator()
    {
        return $this->allergenicIndicator;
    }

    /**
     * Sets a new allergenicIndicator
     *
     * If the ingredient is a known or suspected allergen.
     *
     * @param bool $allergenicIndicator
     * @return self
     */
    public function setAllergenicIndicator($allergenicIndicator)
    {
        $this->allergenicIndicator = $allergenicIndicator;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * Manufacturer of this Ingredient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7FhirR4\ReferenceType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * Manufacturer of this Ingredient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturer($index)
    {
        return isset($this->manufacturer[$index]);
    }

    /**
     * unset manufacturer
     *
     * Manufacturer of this Ingredient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturer($index)
    {
        unset($this->manufacturer[$index]);
    }

    /**
     * Gets as manufacturer
     *
     * Manufacturer of this Ingredient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Manufacturer of this Ingredient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as specifiedSubstance
     *
     * A specified substance that comprises this ingredient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductIngredientSpecifiedSubstanceType $specifiedSubstance
     */
    public function addToSpecifiedSubstance(\TKusy\Hl7FhirR4\MedicinalProductIngredientSpecifiedSubstanceType $specifiedSubstance)
    {
        $this->specifiedSubstance[] = $specifiedSubstance;
        return $this;
    }

    /**
     * isset specifiedSubstance
     *
     * A specified substance that comprises this ingredient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecifiedSubstance($index)
    {
        return isset($this->specifiedSubstance[$index]);
    }

    /**
     * unset specifiedSubstance
     *
     * A specified substance that comprises this ingredient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecifiedSubstance($index)
    {
        unset($this->specifiedSubstance[$index]);
    }

    /**
     * Gets as specifiedSubstance
     *
     * A specified substance that comprises this ingredient.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductIngredientSpecifiedSubstanceType[]
     */
    public function getSpecifiedSubstance()
    {
        return $this->specifiedSubstance;
    }

    /**
     * Sets a new specifiedSubstance
     *
     * A specified substance that comprises this ingredient.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductIngredientSpecifiedSubstanceType[] $specifiedSubstance
     * @return self
     */
    public function setSpecifiedSubstance(array $specifiedSubstance)
    {
        $this->specifiedSubstance = $specifiedSubstance;
        return $this;
    }

    /**
     * Gets as substance
     *
     * The ingredient substance.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductIngredientSubstanceType
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Sets a new substance
     *
     * The ingredient substance.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductIngredientSubstanceType $substance
     * @return self
     */
    public function setSubstance(\TKusy\Hl7FhirR4\MedicinalProductIngredientSubstanceType $substance)
    {
        $this->substance = $substance;
        return $this;
    }


}

