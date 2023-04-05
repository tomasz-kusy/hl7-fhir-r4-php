<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ManufacturedItemDefinitionConstituentType
 *
 * The definition and characteristics of a medicinal manufactured item, such as a tablet or capsule, as contained in a packaged medicinal product.
 * XSD Type: ManufacturedItemDefinition.Constituent
 */
class ManufacturedItemDefinitionConstituentType extends BackboneElementType
{

    /**
     * The measurable amount of the substance, expressable in different ways (e.g. by mass or volume).
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType[] $amount
     */
    private $amount = null;

    /**
     * The physical location of the constituent/ingredient within the component. Example – if the component is the bead in the capsule, then the location would be where the ingredient resides within the product part – intragranular, extra-granular, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $location
     */
    private $location = null;

    /**
     * The function of this constituent within the component e.g. binder.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $function
     */
    private $function = null;

    /**
     * The ingredient that is the constituent of the given component.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $hasIngredient
     */
    private $hasIngredient = null;

    /**
     * Adds as amount
     *
     * The measurable amount of the substance, expressable in different ways (e.g. by mass or volume).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\QuantityType $amount
     */
    public function addToAmount(\TKusy\Hl7Fhir\R5\QuantityType $amount)
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * isset amount
     *
     * The measurable amount of the substance, expressable in different ways (e.g. by mass or volume).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmount($index)
    {
        return isset($this->amount[$index]);
    }

    /**
     * unset amount
     *
     * The measurable amount of the substance, expressable in different ways (e.g. by mass or volume).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmount($index)
    {
        unset($this->amount[$index]);
    }

    /**
     * Gets as amount
     *
     * The measurable amount of the substance, expressable in different ways (e.g. by mass or volume).
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType[]
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The measurable amount of the substance, expressable in different ways (e.g. by mass or volume).
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType[] $amount
     * @return self
     */
    public function setAmount(array $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as location
     *
     * The physical location of the constituent/ingredient within the component. Example – if the component is the bead in the capsule, then the location would be where the ingredient resides within the product part – intragranular, extra-granular, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $location
     */
    public function addToLocation(\TKusy\Hl7Fhir\R5\CodeableConceptType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * The physical location of the constituent/ingredient within the component. Example – if the component is the bead in the capsule, then the location would be where the ingredient resides within the product part – intragranular, extra-granular, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * The physical location of the constituent/ingredient within the component. Example – if the component is the bead in the capsule, then the location would be where the ingredient resides within the product part – intragranular, extra-granular, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * The physical location of the constituent/ingredient within the component. Example – if the component is the bead in the capsule, then the location would be where the ingredient resides within the product part – intragranular, extra-granular, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The physical location of the constituent/ingredient within the component. Example – if the component is the bead in the capsule, then the location would be where the ingredient resides within the product part – intragranular, extra-granular, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as function
     *
     * The function of this constituent within the component e.g. binder.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $function
     */
    public function addToFunction(\TKusy\Hl7Fhir\R5\CodeableConceptType $function)
    {
        $this->function[] = $function;
        return $this;
    }

    /**
     * isset function
     *
     * The function of this constituent within the component e.g. binder.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFunction($index)
    {
        return isset($this->function[$index]);
    }

    /**
     * unset function
     *
     * The function of this constituent within the component e.g. binder.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFunction($index)
    {
        unset($this->function[$index]);
    }

    /**
     * Gets as function
     *
     * The function of this constituent within the component e.g. binder.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Sets a new function
     *
     * The function of this constituent within the component e.g. binder.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $function
     * @return self
     */
    public function setFunction(array $function = null)
    {
        $this->function = $function;
        return $this;
    }

    /**
     * Adds as hasIngredient
     *
     * The ingredient that is the constituent of the given component.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $hasIngredient
     */
    public function addToHasIngredient(\TKusy\Hl7Fhir\R5\CodeableReferenceType $hasIngredient)
    {
        $this->hasIngredient[] = $hasIngredient;
        return $this;
    }

    /**
     * isset hasIngredient
     *
     * The ingredient that is the constituent of the given component.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHasIngredient($index)
    {
        return isset($this->hasIngredient[$index]);
    }

    /**
     * unset hasIngredient
     *
     * The ingredient that is the constituent of the given component.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHasIngredient($index)
    {
        unset($this->hasIngredient[$index]);
    }

    /**
     * Gets as hasIngredient
     *
     * The ingredient that is the constituent of the given component.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getHasIngredient()
    {
        return $this->hasIngredient;
    }

    /**
     * Sets a new hasIngredient
     *
     * The ingredient that is the constituent of the given component.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $hasIngredient
     * @return self
     */
    public function setHasIngredient(array $hasIngredient = null)
    {
        $this->hasIngredient = $hasIngredient;
        return $this;
    }


}

