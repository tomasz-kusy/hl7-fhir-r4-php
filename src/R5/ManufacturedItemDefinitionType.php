<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ManufacturedItemDefinitionType
 *
 * The definition and characteristics of a medicinal manufactured item, such as a tablet or capsule, as contained in a packaged medicinal product.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ManufacturedItemDefinition
 */
class ManufacturedItemDefinitionType extends DomainResourceType
{

    /**
     * Unique identifier.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of this item. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A descriptive name applied to this item.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $manufacturedDoseForm
     */
    private $manufacturedDoseForm = null;

    /**
     * The “real-world” units in which the quantity of the manufactured item is described.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $unitOfPresentation
     */
    private $unitOfPresentation = null;

    /**
     * Manufacturer of the item, one of several possible.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     */
    private $manufacturer = null;

    /**
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @var \TKusy\Hl7Fhir\R5\MarketingStatusType[] $marketingStatus
     */
    private $marketingStatus = null;

    /**
     * The ingredients of this manufactured item. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $ingredient
     */
    private $ingredient = null;

    /**
     * General characteristics of this item.
     *
     * @var \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionPropertyType[] $property
     */
    private $property = null;

    /**
     * Physical parts of the manufactured item, that it is intrisically made from. This is distinct from the ingredients that are part of its chemical makeup.
     *
     * @var \TKusy\Hl7Fhir\R5\ManufacturedItemDefinitionComponentType[] $component
     */
    private $component = null;

    /**
     * Adds as identifier
     *
     * Unique identifier.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R5\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Unique identifier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdentifier($index)
    {
        return isset($this->identifier[$index]);
    }

    /**
     * unset identifier
     *
     * Unique identifier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdentifier($index)
    {
        unset($this->identifier[$index]);
    }

    /**
     * Gets as identifier
     *
     * Unique identifier.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique identifier.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this item. Enables tracking the life-cycle of the content.
     *
     * @return \TKusy\Hl7Fhir\R5\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of this item. Enables tracking the life-cycle of the content.
     *
     * @param \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as name
     *
     * A descriptive name applied to this item.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A descriptive name applied to this item.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as manufacturedDoseForm
     *
     * Dose form as manufactured and before any transformation into the pharmaceutical product.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $manufacturedDoseForm
     * @return self
     */
    public function setManufacturedDoseForm(\TKusy\Hl7Fhir\R5\CodeableConceptType $manufacturedDoseForm)
    {
        $this->manufacturedDoseForm = $manufacturedDoseForm;
        return $this;
    }

    /**
     * Gets as unitOfPresentation
     *
     * The “real-world” units in which the quantity of the manufactured item is described.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getUnitOfPresentation()
    {
        return $this->unitOfPresentation;
    }

    /**
     * Sets a new unitOfPresentation
     *
     * The “real-world” units in which the quantity of the manufactured item is described.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $unitOfPresentation
     * @return self
     */
    public function setUnitOfPresentation(?\TKusy\Hl7Fhir\R5\CodeableConceptType $unitOfPresentation = null)
    {
        $this->unitOfPresentation = $unitOfPresentation;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * Manufacturer of the item, one of several possible.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $manufacturer
     */
    public function addToManufacturer(\TKusy\Hl7Fhir\R5\ReferenceType $manufacturer)
    {
        $this->manufacturer[] = $manufacturer;
        return $this;
    }

    /**
     * isset manufacturer
     *
     * Manufacturer of the item, one of several possible.
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
     * Manufacturer of the item, one of several possible.
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
     * Manufacturer of the item, one of several possible.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * Manufacturer of the item, one of several possible.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as marketingStatus
     *
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MarketingStatusType $marketingStatus
     */
    public function addToMarketingStatus(\TKusy\Hl7Fhir\R5\MarketingStatusType $marketingStatus)
    {
        $this->marketingStatus[] = $marketingStatus;
        return $this;
    }

    /**
     * isset marketingStatus
     *
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingStatus($index)
    {
        return isset($this->marketingStatus[$index]);
    }

    /**
     * unset marketingStatus
     *
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingStatus($index)
    {
        unset($this->marketingStatus[$index]);
    }

    /**
     * Gets as marketingStatus
     *
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @return \TKusy\Hl7Fhir\R5\MarketingStatusType[]
     */
    public function getMarketingStatus()
    {
        return $this->marketingStatus;
    }

    /**
     * Sets a new marketingStatus
     *
     * Allows specifying that an item is on the market for sale, or that it is not available, and the dates and locations associated.
     *
     * @param \TKusy\Hl7Fhir\R5\MarketingStatusType[] $marketingStatus
     * @return self
     */
    public function setMarketingStatus(array $marketingStatus = null)
    {
        $this->marketingStatus = $marketingStatus;
        return $this;
    }

    /**
     * Adds as ingredient
     *
     * The ingredients of this manufactured item. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $ingredient
     */
    public function addToIngredient(\TKusy\Hl7Fhir\R5\CodeableConceptType $ingredient)
    {
        $this->ingredient[] = $ingredient;
        return $this;
    }

    /**
     * isset ingredient
     *
     * The ingredients of this manufactured item. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource.
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
     * The ingredients of this manufactured item. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource.
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
     * The ingredients of this manufactured item. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * Sets a new ingredient
     *
     * The ingredients of this manufactured item. This is only needed if the ingredients are not specified by incoming references from the Ingredient resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $ingredient
     * @return self
     */
    public function setIngredient(array $ingredient = null)
    {
        $this->ingredient = $ingredient;
        return $this;
    }

    /**
     * Adds as property
     *
     * General characteristics of this item.
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
     * General characteristics of this item.
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
     * General characteristics of this item.
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
     * General characteristics of this item.
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
     * General characteristics of this item.
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
     * Physical parts of the manufactured item, that it is intrisically made from. This is distinct from the ingredients that are part of its chemical makeup.
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
     * Physical parts of the manufactured item, that it is intrisically made from. This is distinct from the ingredients that are part of its chemical makeup.
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
     * Physical parts of the manufactured item, that it is intrisically made from. This is distinct from the ingredients that are part of its chemical makeup.
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
     * Physical parts of the manufactured item, that it is intrisically made from. This is distinct from the ingredients that are part of its chemical makeup.
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
     * Physical parts of the manufactured item, that it is intrisically made from. This is distinct from the ingredients that are part of its chemical makeup.
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

