<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductManufacturedType
 *
 * The manufactured item as contained in the packaged medicinal product.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicinalProductManufactured
 */
class MedicinalProductManufacturedType extends DomainResourceType
{

    /**
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $manufacturedDoseForm
     */
    private $manufacturedDoseForm = null;

    /**
     * The “real world” units in which the quantity of the manufactured item is described.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $unitOfPresentation
     */
    private $unitOfPresentation = null;

    /**
     * The quantity or "count number" of the manufactured item.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $manufacturer
     */
    private $manufacturer = null;

    /**
     * Ingredient.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $ingredient
     */
    private $ingredient = null;

    /**
     * Dimensions, color etc.
     *
     * @var \TKusy\Hl7Fhir\R4\ProdCharacteristicType $physicalCharacteristics
     */
    private $physicalCharacteristics = null;

    /**
     * Other codeable characteristics.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $otherCharacteristics
     */
    private $otherCharacteristics = null;

    /**
     * Gets as manufacturedDoseForm
     *
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getManufacturedDoseForm()
    {
        return $this->manufacturedDoseForm;
    }

    /**
     * Sets a new manufacturedDoseForm
     *
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $manufacturedDoseForm
     * @return self
     */
    public function setManufacturedDoseForm(\TKusy\Hl7Fhir\R4\CodeableConceptType $manufacturedDoseForm)
    {
        $this->manufacturedDoseForm = $manufacturedDoseForm;
        return $this;
    }

    /**
     * Gets as unitOfPresentation
     *
     * The “real world” units in which the quantity of the manufactured item is described.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getUnitOfPresentation()
    {
        return $this->unitOfPresentation;
    }

    /**
     * Sets a new unitOfPresentation
     *
     * The “real world” units in which the quantity of the manufactured item is described.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $unitOfPresentation
     * @return self
     */
    public function setUnitOfPresentation(\TKusy\Hl7Fhir\R4\CodeableConceptType $unitOfPresentation)
    {
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity or "count number" of the manufactured item.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity or "count number" of the manufactured item.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7Fhir\R4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7Fhir\R4\ReferenceType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
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
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
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
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Manufacturer of the item (Note that this should be named "manufacturer" but it currently causes technical issues).
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * Ingredient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7Fhir\R4\ReferenceType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * Ingredient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIngredient($index)
    {
        return isset($this->ingredient[$index]);
    }

    /**
     * unset ingredient
     *
     * Ingredient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIngredient($index)
    {
        unset($this->ingredient[$index]);
    }

    /**
     * Gets as ingredient
     *
     * Ingredient.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * Ingredient.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Gets as physicalCharacteristics
     *
     * Dimensions, color etc.
     *
     * @return \TKusy\Hl7Fhir\R4\ProdCharacteristicType
     */
    public function getPhysicalCharacteristics()
    {
        return $this->physicalCharacteristics;
    }

    /**
     * Sets a new physicalCharacteristics
     *
     * Dimensions, color etc.
     *
     * @param \TKusy\Hl7Fhir\R4\ProdCharacteristicType $physicalCharacteristics
     * @return self
     */
    public function setPhysicalCharacteristics(\TKusy\Hl7Fhir\R4\ProdCharacteristicType $physicalCharacteristics)
    {
        $this->physicalCharacteristics = $physicalCharacteristics;
        return $this;
    }

    /**
     * Adds as otherCharacteristics
     *
     * Other codeable characteristics.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $otherCharacteristics
     */
    public function addToOtherCharacteristics(\TKusy\Hl7Fhir\R4\CodeableConceptType $otherCharacteristics)
    {
        $this->otherCharacteristics[] = $otherCharacteristics;
        return $this;
    }

    /**
     * isset otherCharacteristics
     *
     * Other codeable characteristics.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCharacteristics($index)
    {
        return isset($this->otherCharacteristics[$index]);
    }

    /**
     * unset otherCharacteristics
     *
     * Other codeable characteristics.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCharacteristics($index)
    {
        unset($this->otherCharacteristics[$index]);
    }

    /**
     * Gets as otherCharacteristics
     *
     * Other codeable characteristics.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getOtherCharacteristics()
    {
        return $this->otherCharacteristics;
    }

    /**
     * Sets a new otherCharacteristics
     *
     * Other codeable characteristics.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $otherCharacteristics
     * @return self
     */
    public function setOtherCharacteristics(array $otherCharacteristics)
    {
        $this->otherCharacteristics = $otherCharacteristics;
        return $this;
    }


}

