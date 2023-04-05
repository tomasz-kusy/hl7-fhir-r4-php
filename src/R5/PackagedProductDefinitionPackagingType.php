<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PackagedProductDefinitionPackagingType
 *
 * A medically related item or items, in a container or package.
 * XSD Type: PackagedProductDefinition.Packaging
 */
class PackagedProductDefinitionPackagingType extends BackboneElementType
{

    /**
     * A business identifier that is specific to this particular part of the packaging, often assigned by the manufacturer. Including possibly Data Carrier Identifier (a GS1 barcode).
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The physical type of the container of the items.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Is this a part of the packaging (e.g. a cap or bottle stopper), rather than the packaging itself (e.g. a bottle or vial). The latter type are designed be a container, but the former are not.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $componentPart
     */
    private $componentPart = null;

    /**
     * The quantity of packaging items contained at this layer of the package. This does not relate to the number of contained items but relates solely to the number of packaging items. When looking at the outermost layer it is always 1. If there are two boxes within, at the next layer it would be 2.
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $quantity
     */
    private $quantity = null;

    /**
     * Material type of the package item.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $material
     */
    private $material = null;

    /**
     * A possible alternate material for this part of the packaging, that is allowed to be used instead of the usual material (e.g. different types of plastic for a blister sleeve).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $alternateMaterial
     */
    private $alternateMaterial = null;

    /**
     * Shelf Life and storage information.
     *
     * @var \TKusy\Hl7Fhir\R5\ProductShelfLifeType[] $shelfLifeStorage
     */
    private $shelfLifeStorage = null;

    /**
     * Manufacturer of this packaging item. When there are multiple values each one is a potential manufacturer of this packaging item.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $manufacturer
     */
    private $manufacturer = null;

    /**
     * General characteristics of this item.
     *
     * @var \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType[] $property
     */
    private $property = null;

    /**
     * The item(s) within the packaging.
     *
     * @var \TKusy\Hl7Fhir\R5\PackagedProductDefinitionContainedItemType[] $containedItem
     */
    private $containedItem = null;

    /**
     * Allows containers (and parts of containers) within containers, still as a part of a single packaged product. See also PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @var \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType[] $packaging
     */
    private $packaging = null;

    /**
     * Adds as identifier
     *
     * A business identifier that is specific to this particular part of the packaging, often assigned by the manufacturer. Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * A business identifier that is specific to this particular part of the packaging, often assigned by the manufacturer. Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * A business identifier that is specific to this particular part of the packaging, often assigned by the manufacturer. Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * A business identifier that is specific to this particular part of the packaging, often assigned by the manufacturer. Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * A business identifier that is specific to this particular part of the packaging, often assigned by the manufacturer. Including possibly Data Carrier Identifier (a GS1 barcode).
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
     * Gets as type
     *
     * The physical type of the container of the items.
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
     * The physical type of the container of the items.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as componentPart
     *
     * Is this a part of the packaging (e.g. a cap or bottle stopper), rather than the packaging itself (e.g. a bottle or vial). The latter type are designed be a container, but the former are not.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getComponentPart()
    {
        return $this->componentPart;
    }

    /**
     * Sets a new componentPart
     *
     * Is this a part of the packaging (e.g. a cap or bottle stopper), rather than the packaging itself (e.g. a bottle or vial). The latter type are designed be a container, but the former are not.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $componentPart
     * @return self
     */
    public function setComponentPart(?\TKusy\Hl7Fhir\R5\BooleanType $componentPart = null)
    {
        $this->componentPart = $componentPart;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of packaging items contained at this layer of the package. This does not relate to the number of contained items but relates solely to the number of packaging items. When looking at the outermost layer it is always 1. If there are two boxes within, at the next layer it would be 2.
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of packaging items contained at this layer of the package. This does not relate to the number of contained items but relates solely to the number of packaging items. When looking at the outermost layer it is always 1. If there are two boxes within, at the next layer it would be 2.
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\IntegerType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as material
     *
     * Material type of the package item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $material
     */
    public function addToMaterial(\TKusy\Hl7Fhir\R5\CodeableConceptType $material)
    {
        $this->material[] = $material;
        return $this;
    }

    /**
     * isset material
     *
     * Material type of the package item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMaterial($index)
    {
        return isset($this->material[$index]);
    }

    /**
     * unset material
     *
     * Material type of the package item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMaterial($index)
    {
        unset($this->material[$index]);
    }

    /**
     * Gets as material
     *
     * Material type of the package item.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Sets a new material
     *
     * Material type of the package item.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $material
     * @return self
     */
    public function setMaterial(array $material = null)
    {
        $this->material = $material;
        return $this;
    }

    /**
     * Adds as alternateMaterial
     *
     * A possible alternate material for this part of the packaging, that is allowed to be used instead of the usual material (e.g. different types of plastic for a blister sleeve).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $alternateMaterial
     */
    public function addToAlternateMaterial(\TKusy\Hl7Fhir\R5\CodeableConceptType $alternateMaterial)
    {
        $this->alternateMaterial[] = $alternateMaterial;
        return $this;
    }

    /**
     * isset alternateMaterial
     *
     * A possible alternate material for this part of the packaging, that is allowed to be used instead of the usual material (e.g. different types of plastic for a blister sleeve).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternateMaterial($index)
    {
        return isset($this->alternateMaterial[$index]);
    }

    /**
     * unset alternateMaterial
     *
     * A possible alternate material for this part of the packaging, that is allowed to be used instead of the usual material (e.g. different types of plastic for a blister sleeve).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternateMaterial($index)
    {
        unset($this->alternateMaterial[$index]);
    }

    /**
     * Gets as alternateMaterial
     *
     * A possible alternate material for this part of the packaging, that is allowed to be used instead of the usual material (e.g. different types of plastic for a blister sleeve).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getAlternateMaterial()
    {
        return $this->alternateMaterial;
    }

    /**
     * Sets a new alternateMaterial
     *
     * A possible alternate material for this part of the packaging, that is allowed to be used instead of the usual material (e.g. different types of plastic for a blister sleeve).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $alternateMaterial
     * @return self
     */
    public function setAlternateMaterial(array $alternateMaterial = null)
    {
        $this->alternateMaterial = $alternateMaterial;
        return $this;
    }

    /**
     * Adds as shelfLifeStorage
     *
     * Shelf Life and storage information.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ProductShelfLifeType $shelfLifeStorage
     */
    public function addToShelfLifeStorage(\TKusy\Hl7Fhir\R5\ProductShelfLifeType $shelfLifeStorage)
    {
        $this->shelfLifeStorage[] = $shelfLifeStorage;
        return $this;
    }

    /**
     * isset shelfLifeStorage
     *
     * Shelf Life and storage information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShelfLifeStorage($index)
    {
        return isset($this->shelfLifeStorage[$index]);
    }

    /**
     * unset shelfLifeStorage
     *
     * Shelf Life and storage information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShelfLifeStorage($index)
    {
        unset($this->shelfLifeStorage[$index]);
    }

    /**
     * Gets as shelfLifeStorage
     *
     * Shelf Life and storage information.
     *
     * @return \TKusy\Hl7Fhir\R5\ProductShelfLifeType[]
     */
    public function getShelfLifeStorage()
    {
        return $this->shelfLifeStorage;
    }

    /**
     * Sets a new shelfLifeStorage
     *
     * Shelf Life and storage information.
     *
     * @param \TKusy\Hl7Fhir\R5\ProductShelfLifeType[] $shelfLifeStorage
     * @return self
     */
    public function setShelfLifeStorage(array $shelfLifeStorage = null)
    {
        $this->shelfLifeStorage = $shelfLifeStorage;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * Manufacturer of this packaging item. When there are multiple values each one is a potential manufacturer of this packaging item.
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
     * Manufacturer of this packaging item. When there are multiple values each one is a potential manufacturer of this packaging item.
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
     * Manufacturer of this packaging item. When there are multiple values each one is a potential manufacturer of this packaging item.
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
     * Manufacturer of this packaging item. When there are multiple values each one is a potential manufacturer of this packaging item.
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
     * Manufacturer of this packaging item. When there are multiple values each one is a potential manufacturer of this packaging item.
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
     * Adds as property
     *
     * General characteristics of this item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType $property)
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
     * @return \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType[]
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
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as containedItem
     *
     * The item(s) within the packaging.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionContainedItemType $containedItem
     */
    public function addToContainedItem(\TKusy\Hl7Fhir\R5\PackagedProductDefinitionContainedItemType $containedItem)
    {
        $this->containedItem[] = $containedItem;
        return $this;
    }

    /**
     * isset containedItem
     *
     * The item(s) within the packaging.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedItem($index)
    {
        return isset($this->containedItem[$index]);
    }

    /**
     * unset containedItem
     *
     * The item(s) within the packaging.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedItem($index)
    {
        unset($this->containedItem[$index]);
    }

    /**
     * Gets as containedItem
     *
     * The item(s) within the packaging.
     *
     * @return \TKusy\Hl7Fhir\R5\PackagedProductDefinitionContainedItemType[]
     */
    public function getContainedItem()
    {
        return $this->containedItem;
    }

    /**
     * Sets a new containedItem
     *
     * The item(s) within the packaging.
     *
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionContainedItemType[] $containedItem
     * @return self
     */
    public function setContainedItem(array $containedItem = null)
    {
        $this->containedItem = $containedItem;
        return $this;
    }

    /**
     * Adds as packaging
     *
     * Allows containers (and parts of containers) within containers, still as a part of a single packaged product. See also PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType $packaging
     */
    public function addToPackaging(\TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType $packaging)
    {
        $this->packaging[] = $packaging;
        return $this;
    }

    /**
     * isset packaging
     *
     * Allows containers (and parts of containers) within containers, still as a part of a single packaged product. See also PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackaging($index)
    {
        return isset($this->packaging[$index]);
    }

    /**
     * unset packaging
     *
     * Allows containers (and parts of containers) within containers, still as a part of a single packaged product. See also PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackaging($index)
    {
        unset($this->packaging[$index]);
    }

    /**
     * Gets as packaging
     *
     * Allows containers (and parts of containers) within containers, still as a part of a single packaged product. See also PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @return \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType[]
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Sets a new packaging
     *
     * Allows containers (and parts of containers) within containers, still as a part of a single packaged product. See also PackagedProductDefinition.packaging.containedItem.item(PackagedProductDefinition).
     *
     * @param \TKusy\Hl7Fhir\R5\PackagedProductDefinitionPackagingType[] $packaging
     * @return self
     */
    public function setPackaging(array $packaging = null)
    {
        $this->packaging = $packaging;
        return $this;
    }


}

