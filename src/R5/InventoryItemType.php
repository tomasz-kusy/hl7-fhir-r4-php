<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InventoryItemType
 *
 * A functional description of an inventory item used in inventory and supply-related workflows.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: InventoryItem
 */
class InventoryItemType extends DomainResourceType
{

    /**
     * Business identifier for the inventory item.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Status of the item entry.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryItemStatusCodesType $status
     */
    private $status = null;

    /**
     * Category or class of the item.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Code designating the specific type of item.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     */
    private $code = null;

    /**
     * The item name(s) - the brand name, or common name, functional name, generic name.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryItemNameType[] $name
     */
    private $name = null;

    /**
     * Organization(s) responsible for the product.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryItemResponsibleOrganizationType[] $responsibleOrganization
     */
    private $responsibleOrganization = null;

    /**
     * The descriptive characteristics of the inventory item.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryItemDescriptionType $description
     */
    private $description = null;

    /**
     * The usage status e.g. recalled, in use, discarded... This can be used to indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $inventoryStatus
     */
    private $inventoryStatus = null;

    /**
     * The base unit of measure - the unit in which the product is used or counted.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $baseUnit
     */
    private $baseUnit = null;

    /**
     * Net content or amount present in the item.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $netContent
     */
    private $netContent = null;

    /**
     * Association with other items or products.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryItemAssociationType[] $association
     */
    private $association = null;

    /**
     * The descriptive or identifying characteristics of the item.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryItemCharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Instances or occurrences of the product.
     *
     * @var \TKusy\Hl7Fhir\R5\InventoryItemInstanceType $instance
     */
    private $instance = null;

    /**
     * Link to a product resource used in clinical workflows.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $productReference
     */
    private $productReference = null;

    /**
     * Adds as identifier
     *
     * Business identifier for the inventory item.
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
     * Business identifier for the inventory item.
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
     * Business identifier for the inventory item.
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
     * Business identifier for the inventory item.
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
     * Business identifier for the inventory item.
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
     * Status of the item entry.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryItemStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status of the item entry.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryItemStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\InventoryItemStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * Category or class of the item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Category or class of the item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * Category or class of the item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * Category or class of the item.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Category or class of the item.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as code
     *
     * Code designating the specific type of item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * Code designating the specific type of item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * Code designating the specific type of item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * Code designating the specific type of item.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code designating the specific type of item.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as name
     *
     * The item name(s) - the brand name, or common name, functional name, generic name.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InventoryItemNameType $name
     */
    public function addToName(\TKusy\Hl7Fhir\R5\InventoryItemNameType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * The item name(s) - the brand name, or common name, functional name, generic name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * The item name(s) - the brand name, or common name, functional name, generic name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * The item name(s) - the brand name, or common name, functional name, generic name.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryItemNameType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The item name(s) - the brand name, or common name, functional name, generic name.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryItemNameType[] $name
     * @return self
     */
    public function setName(array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as responsibleOrganization
     *
     * Organization(s) responsible for the product.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InventoryItemResponsibleOrganizationType $responsibleOrganization
     */
    public function addToResponsibleOrganization(\TKusy\Hl7Fhir\R5\InventoryItemResponsibleOrganizationType $responsibleOrganization)
    {
        $this->responsibleOrganization[] = $responsibleOrganization;
        return $this;
    }

    /**
     * isset responsibleOrganization
     *
     * Organization(s) responsible for the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResponsibleOrganization($index)
    {
        return isset($this->responsibleOrganization[$index]);
    }

    /**
     * unset responsibleOrganization
     *
     * Organization(s) responsible for the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResponsibleOrganization($index)
    {
        unset($this->responsibleOrganization[$index]);
    }

    /**
     * Gets as responsibleOrganization
     *
     * Organization(s) responsible for the product.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryItemResponsibleOrganizationType[]
     */
    public function getResponsibleOrganization()
    {
        return $this->responsibleOrganization;
    }

    /**
     * Sets a new responsibleOrganization
     *
     * Organization(s) responsible for the product.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryItemResponsibleOrganizationType[] $responsibleOrganization
     * @return self
     */
    public function setResponsibleOrganization(array $responsibleOrganization = null)
    {
        $this->responsibleOrganization = $responsibleOrganization;
        return $this;
    }

    /**
     * Gets as description
     *
     * The descriptive characteristics of the inventory item.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryItemDescriptionType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The descriptive characteristics of the inventory item.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryItemDescriptionType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\InventoryItemDescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as inventoryStatus
     *
     * The usage status e.g. recalled, in use, discarded... This can be used to indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $inventoryStatus
     */
    public function addToInventoryStatus(\TKusy\Hl7Fhir\R5\CodeableConceptType $inventoryStatus)
    {
        $this->inventoryStatus[] = $inventoryStatus;
        return $this;
    }

    /**
     * isset inventoryStatus
     *
     * The usage status e.g. recalled, in use, discarded... This can be used to indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventoryStatus($index)
    {
        return isset($this->inventoryStatus[$index]);
    }

    /**
     * unset inventoryStatus
     *
     * The usage status e.g. recalled, in use, discarded... This can be used to indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventoryStatus($index)
    {
        unset($this->inventoryStatus[$index]);
    }

    /**
     * Gets as inventoryStatus
     *
     * The usage status e.g. recalled, in use, discarded... This can be used to indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getInventoryStatus()
    {
        return $this->inventoryStatus;
    }

    /**
     * Sets a new inventoryStatus
     *
     * The usage status e.g. recalled, in use, discarded... This can be used to indicate that the items have been taken out of inventory, or are in use, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $inventoryStatus
     * @return self
     */
    public function setInventoryStatus(array $inventoryStatus = null)
    {
        $this->inventoryStatus = $inventoryStatus;
        return $this;
    }

    /**
     * Gets as baseUnit
     *
     * The base unit of measure - the unit in which the product is used or counted.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getBaseUnit()
    {
        return $this->baseUnit;
    }

    /**
     * Sets a new baseUnit
     *
     * The base unit of measure - the unit in which the product is used or counted.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $baseUnit
     * @return self
     */
    public function setBaseUnit(?\TKusy\Hl7Fhir\R5\CodeableConceptType $baseUnit = null)
    {
        $this->baseUnit = $baseUnit;
        return $this;
    }

    /**
     * Gets as netContent
     *
     * Net content or amount present in the item.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getNetContent()
    {
        return $this->netContent;
    }

    /**
     * Sets a new netContent
     *
     * Net content or amount present in the item.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $netContent
     * @return self
     */
    public function setNetContent(?\TKusy\Hl7Fhir\R5\QuantityType $netContent = null)
    {
        $this->netContent = $netContent;
        return $this;
    }

    /**
     * Adds as association
     *
     * Association with other items or products.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InventoryItemAssociationType $association
     */
    public function addToAssociation(\TKusy\Hl7Fhir\R5\InventoryItemAssociationType $association)
    {
        $this->association[] = $association;
        return $this;
    }

    /**
     * isset association
     *
     * Association with other items or products.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssociation($index)
    {
        return isset($this->association[$index]);
    }

    /**
     * unset association
     *
     * Association with other items or products.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssociation($index)
    {
        unset($this->association[$index]);
    }

    /**
     * Gets as association
     *
     * Association with other items or products.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryItemAssociationType[]
     */
    public function getAssociation()
    {
        return $this->association;
    }

    /**
     * Sets a new association
     *
     * Association with other items or products.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryItemAssociationType[] $association
     * @return self
     */
    public function setAssociation(array $association = null)
    {
        $this->association = $association;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * The descriptive or identifying characteristics of the item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InventoryItemCharacteristicType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R5\InventoryItemCharacteristicType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * The descriptive or identifying characteristics of the item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharacteristic($index)
    {
        return isset($this->characteristic[$index]);
    }

    /**
     * unset characteristic
     *
     * The descriptive or identifying characteristics of the item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharacteristic($index)
    {
        unset($this->characteristic[$index]);
    }

    /**
     * Gets as characteristic
     *
     * The descriptive or identifying characteristics of the item.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryItemCharacteristicType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * The descriptive or identifying characteristics of the item.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryItemCharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic = null)
    {
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Gets as instance
     *
     * Instances or occurrences of the product.
     *
     * @return \TKusy\Hl7Fhir\R5\InventoryItemInstanceType
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * Instances or occurrences of the product.
     *
     * @param \TKusy\Hl7Fhir\R5\InventoryItemInstanceType $instance
     * @return self
     */
    public function setInstance(?\TKusy\Hl7Fhir\R5\InventoryItemInstanceType $instance = null)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Gets as productReference
     *
     * Link to a product resource used in clinical workflows.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Sets a new productReference
     *
     * Link to a product resource used in clinical workflows.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $productReference
     * @return self
     */
    public function setProductReference(?\TKusy\Hl7Fhir\R5\ReferenceType $productReference = null)
    {
        $this->productReference = $productReference;
        return $this;
    }


}

