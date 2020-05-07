<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductPackagedPackageItemType
 *
 * A medicinal product in a container or package.
 * XSD Type: MedicinalProductPackaged.PackageItem
 */
class MedicinalProductPackagedPackageItemType extends BackboneElementType
{

    /**
     * Including possibly Data Carrier Identifier.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The physical type of the container of the medicine.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The quantity of this package in the medicinal product, at the current level of packaging. The outermost is always 1.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Material type of the package item.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $material
     */
    private $material = [
        
    ];

    /**
     * A possible alternate material for the packaging.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $alternateMaterial
     */
    private $alternateMaterial = [
        
    ];

    /**
     * A device accompanying a medicinal product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $device
     */
    private $device = [
        
    ];

    /**
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $manufacturedItem
     */
    private $manufacturedItem = [
        
    ];

    /**
     * Allows containers within containers.
     *
     * @var \TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType[] $packageItem
     */
    private $packageItem = [
        
    ];

    /**
     * Dimensions, color etc.
     *
     * @var \TKusy\Hl7FhirR4\ProdCharacteristicType $physicalCharacteristics
     */
    private $physicalCharacteristics = null;

    /**
     * Other codeable characteristics.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $otherCharacteristics
     */
    private $otherCharacteristics = [
        
    ];

    /**
     * Shelf Life and storage information.
     *
     * @var \TKusy\Hl7FhirR4\ProductShelfLifeType[] $shelfLifeStorage
     */
    private $shelfLifeStorage = [
        
    ];

    /**
     * Manufacturer of this Package Item.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $manufacturer
     */
    private $manufacturer = [
        
    ];

    /**
     * Adds as identifier
     *
     * Including possibly Data Carrier Identifier.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * Including possibly Data Carrier Identifier.
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
     * Including possibly Data Carrier Identifier.
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
     * Including possibly Data Carrier Identifier.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Including possibly Data Carrier Identifier.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * The physical type of the container of the medicine.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The physical type of the container of the medicine.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of this package in the medicinal product, at the current level of packaging. The outermost is always 1.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity of this package in the medicinal product, at the current level of packaging. The outermost is always 1.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $material
     */
    public function addToMaterial(\TKusy\Hl7FhirR4\CodeableConceptType $material)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $material
     * @return self
     */
    public function setMaterial(array $material)
    {
        $this->material = $material;
        return $this;
    }

    /**
     * Adds as alternateMaterial
     *
     * A possible alternate material for the packaging.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $alternateMaterial
     */
    public function addToAlternateMaterial(\TKusy\Hl7FhirR4\CodeableConceptType $alternateMaterial)
    {
        $this->alternateMaterial[] = $alternateMaterial;
        return $this;
    }

    /**
     * isset alternateMaterial
     *
     * A possible alternate material for the packaging.
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
     * A possible alternate material for the packaging.
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
     * A possible alternate material for the packaging.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getAlternateMaterial()
    {
        return $this->alternateMaterial;
    }

    /**
     * Sets a new alternateMaterial
     *
     * A possible alternate material for the packaging.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $alternateMaterial
     * @return self
     */
    public function setAlternateMaterial(array $alternateMaterial)
    {
        $this->alternateMaterial = $alternateMaterial;
        return $this;
    }

    /**
     * Adds as device
     *
     * A device accompanying a medicinal product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $device
     */
    public function addToDevice(\TKusy\Hl7FhirR4\ReferenceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * A device accompanying a medicinal product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDevice($index)
    {
        return isset($this->device[$index]);
    }

    /**
     * unset device
     *
     * A device accompanying a medicinal product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDevice($index)
    {
        unset($this->device[$index]);
    }

    /**
     * Gets as device
     *
     * A device accompanying a medicinal product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * A device accompanying a medicinal product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $device
     * @return self
     */
    public function setDevice(array $device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Adds as manufacturedItem
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $manufacturedItem
     */
    public function addToManufacturedItem(\TKusy\Hl7FhirR4\ReferenceType $manufacturedItem)
    {
        $this->manufacturedItem[] = $manufacturedItem;
        return $this;
    }

    /**
     * isset manufacturedItem
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetManufacturedItem($index)
    {
        return isset($this->manufacturedItem[$index]);
    }

    /**
     * unset manufacturedItem
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetManufacturedItem($index)
    {
        unset($this->manufacturedItem[$index]);
    }

    /**
     * Gets as manufacturedItem
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getManufacturedItem()
    {
        return $this->manufacturedItem;
    }

    /**
     * Sets a new manufacturedItem
     *
     * The manufactured item as contained in the packaged medicinal product.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $manufacturedItem
     * @return self
     */
    public function setManufacturedItem(array $manufacturedItem)
    {
        $this->manufacturedItem = $manufacturedItem;
        return $this;
    }

    /**
     * Adds as packageItem
     *
     * Allows containers within containers.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType $packageItem
     */
    public function addToPackageItem(\TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType $packageItem)
    {
        $this->packageItem[] = $packageItem;
        return $this;
    }

    /**
     * isset packageItem
     *
     * Allows containers within containers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackageItem($index)
    {
        return isset($this->packageItem[$index]);
    }

    /**
     * unset packageItem
     *
     * Allows containers within containers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackageItem($index)
    {
        unset($this->packageItem[$index]);
    }

    /**
     * Gets as packageItem
     *
     * Allows containers within containers.
     *
     * @return \TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType[]
     */
    public function getPackageItem()
    {
        return $this->packageItem;
    }

    /**
     * Sets a new packageItem
     *
     * Allows containers within containers.
     *
     * @param \TKusy\Hl7FhirR4\MedicinalProductPackagedPackageItemType[] $packageItem
     * @return self
     */
    public function setPackageItem(array $packageItem)
    {
        $this->packageItem = $packageItem;
        return $this;
    }

    /**
     * Gets as physicalCharacteristics
     *
     * Dimensions, color etc.
     *
     * @return \TKusy\Hl7FhirR4\ProdCharacteristicType
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
     * @param \TKusy\Hl7FhirR4\ProdCharacteristicType $physicalCharacteristics
     * @return self
     */
    public function setPhysicalCharacteristics(\TKusy\Hl7FhirR4\ProdCharacteristicType $physicalCharacteristics)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $otherCharacteristics
     */
    public function addToOtherCharacteristics(\TKusy\Hl7FhirR4\CodeableConceptType $otherCharacteristics)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $otherCharacteristics
     * @return self
     */
    public function setOtherCharacteristics(array $otherCharacteristics)
    {
        $this->otherCharacteristics = $otherCharacteristics;
        return $this;
    }

    /**
     * Adds as shelfLifeStorage
     *
     * Shelf Life and storage information.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ProductShelfLifeType $shelfLifeStorage
     */
    public function addToShelfLifeStorage(\TKusy\Hl7FhirR4\ProductShelfLifeType $shelfLifeStorage)
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
     * @return \TKusy\Hl7FhirR4\ProductShelfLifeType[]
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
     * @param \TKusy\Hl7FhirR4\ProductShelfLifeType[] $shelfLifeStorage
     * @return self
     */
    public function setShelfLifeStorage(array $shelfLifeStorage)
    {
        $this->shelfLifeStorage = $shelfLifeStorage;
        return $this;
    }

    /**
     * Adds as manufacturer
     *
     * Manufacturer of this Package Item.
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
     * Manufacturer of this Package Item.
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
     * Manufacturer of this Package Item.
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
     * Manufacturer of this Package Item.
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
     * Manufacturer of this Package Item.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $manufacturer
     * @return self
     */
    public function setManufacturer(array $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }


}

