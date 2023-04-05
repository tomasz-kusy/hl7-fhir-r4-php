<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ManufacturedItemDefinitionComponentType
 *
 * The definition and characteristics of a medicinal manufactured item, such as a tablet or capsule, as contained in a packaged medicinal product.
 * XSD Type: ManufacturedItemDefinition.Component
 */
class ManufacturedItemDefinitionComponentType extends BackboneElementType
{

    /**
     * Defining type of the component e.g. shell, layer, ink.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The function of this component within the item e.g. delivers active ingredient, masks taste.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $function
     */
    private $function = null;

    /**
     * The measurable amount of total quantity of all substances in the component, expressable in different ways (e.g. by mass or volume).
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType[] $amount
     */
    private $amount = null;

    /**
     * A reference to a constituent of the manufactured item as a whole, linked here so that its component location within the item can be indicated. This not where the item's ingredient are primarily stated (for which see Ingredient.for or ManufacturedItemDefinition.ingredient).
     *
     * @var \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionConstituentType[] $constituent
     */
    private $constituent = null;

    /**
     * General characteristics of this component.
     *
     * @var \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionPropertyType[] $property
     */
    private $property = null;

    /**
     * A component that this component contains or is made from.
     *
     * @var \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionComponentType[] $component
     */
    private $component = null;

    /**
     * Gets as type
     *
     * Defining type of the component e.g. shell, layer, ink.
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
     * Defining type of the component e.g. shell, layer, ink.
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
     * Adds as function
     *
     * The function of this component within the item e.g. delivers active ingredient, masks taste.
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
     * The function of this component within the item e.g. delivers active ingredient, masks taste.
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
     * The function of this component within the item e.g. delivers active ingredient, masks taste.
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
     * The function of this component within the item e.g. delivers active ingredient, masks taste.
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
     * The function of this component within the item e.g. delivers active ingredient, masks taste.
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
     * Adds as amount
     *
     * The measurable amount of total quantity of all substances in the component, expressable in different ways (e.g. by mass or volume).
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
     * The measurable amount of total quantity of all substances in the component, expressable in different ways (e.g. by mass or volume).
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
     * The measurable amount of total quantity of all substances in the component, expressable in different ways (e.g. by mass or volume).
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
     * The measurable amount of total quantity of all substances in the component, expressable in different ways (e.g. by mass or volume).
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
     * The measurable amount of total quantity of all substances in the component, expressable in different ways (e.g. by mass or volume).
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
     * Adds as constituent
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so that its component location within the item can be indicated. This not where the item's ingredient are primarily stated (for which see Ingredient.for or ManufacturedItemDefinition.ingredient).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionConstituentType $constituent
     */
    public function addToConstituent(\TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionConstituentType $constituent)
    {
        $this->constituent[] = $constituent;
        return $this;
    }

    /**
     * isset constituent
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so that its component location within the item can be indicated. This not where the item's ingredient are primarily stated (for which see Ingredient.for or ManufacturedItemDefinition.ingredient).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConstituent($index)
    {
        return isset($this->constituent[$index]);
    }

    /**
     * unset constituent
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so that its component location within the item can be indicated. This not where the item's ingredient are primarily stated (for which see Ingredient.for or ManufacturedItemDefinition.ingredient).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConstituent($index)
    {
        unset($this->constituent[$index]);
    }

    /**
     * Gets as constituent
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so that its component location within the item can be indicated. This not where the item's ingredient are primarily stated (for which see Ingredient.for or ManufacturedItemDefinition.ingredient).
     *
     * @return \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionConstituentType[]
     */
    public function getConstituent()
    {
        return $this->constituent;
    }

    /**
     * Sets a new constituent
     *
     * A reference to a constituent of the manufactured item as a whole, linked here so that its component location within the item can be indicated. This not where the item's ingredient are primarily stated (for which see Ingredient.for or ManufacturedItemDefinition.ingredient).
     *
     * @param \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionConstituentType[] $constituent
     * @return self
     */
    public function setConstituent(array $constituent = null)
    {
        $this->constituent = $constituent;
        return $this;
    }

    /**
     * Adds as property
     *
     * General characteristics of this component.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * General characteristics of this component.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * General characteristics of this component.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * General characteristics of this component.
     *
     * @return \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * General characteristics of this component.
     *
     * @param \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as component
     *
     * A component that this component contains or is made from.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionComponentType $component
     */
    public function addToComponent(\TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionComponentType $component)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * isset component
     *
     * A component that this component contains or is made from.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponent($index)
    {
        return isset($this->component[$index]);
    }

    /**
     * unset component
     *
     * A component that this component contains or is made from.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponent($index)
    {
        unset($this->component[$index]);
    }

    /**
     * Gets as component
     *
     * A component that this component contains or is made from.
     *
     * @return \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionComponentType[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * A component that this component contains or is made from.
     *
     * @param \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionComponentType[] $component
     * @return self
     */
    public function setComponent(array $component = null)
    {
        $this->component = $component;
        return $this;
    }


}

