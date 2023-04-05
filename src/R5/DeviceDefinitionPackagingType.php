<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionPackagingType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * XSD Type: DeviceDefinition.Packaging
 */
class DeviceDefinitionPackagingType extends BackboneElementType
{

    /**
     * The business identifier of the packaged medication.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * A code that defines the specific type of packaging.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The number of items contained in the package (devices or sub-packages).
     *
     * @var \TKusy\Hl7Fhir\R5\IntegerType $count
     */
    private $count = null;

    /**
     * An organization that distributes the packaged device.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionDistributorType[] $distributor
     */
    private $distributor = null;

    /**
     * Unique Device Identifier (UDI) Barcode string on the packaging.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionUdiDeviceIdentifierType[] $udiDeviceIdentifier
     */
    private $udiDeviceIdentifier = null;

    /**
     * Allows packages within packages.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionPackagingType[] $packaging
     */
    private $packaging = null;

    /**
     * Gets as identifier
     *
     * The business identifier of the packaged medication.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * The business identifier of the packaged medication.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * A code that defines the specific type of packaging.
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
     * A code that defines the specific type of packaging.
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
     * Gets as count
     *
     * The number of items contained in the package (devices or sub-packages).
     *
     * @return \TKusy\Hl7Fhir\R5\IntegerType
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The number of items contained in the package (devices or sub-packages).
     *
     * @param \TKusy\Hl7Fhir\R5\IntegerType $count
     * @return self
     */
    public function setCount(?\TKusy\Hl7Fhir\R5\IntegerType $count = null)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Adds as distributor
     *
     * An organization that distributes the packaged device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionDistributorType $distributor
     */
    public function addToDistributor(\TKusy\Hl7Fhir\R5\DeviceDefinitionDistributorType $distributor)
    {
        $this->distributor[] = $distributor;
        return $this;
    }

    /**
     * isset distributor
     *
     * An organization that distributes the packaged device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDistributor($index)
    {
        return isset($this->distributor[$index]);
    }

    /**
     * unset distributor
     *
     * An organization that distributes the packaged device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDistributor($index)
    {
        unset($this->distributor[$index]);
    }

    /**
     * Gets as distributor
     *
     * An organization that distributes the packaged device.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionDistributorType[]
     */
    public function getDistributor()
    {
        return $this->distributor;
    }

    /**
     * Sets a new distributor
     *
     * An organization that distributes the packaged device.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionDistributorType[] $distributor
     * @return self
     */
    public function setDistributor(array $distributor = null)
    {
        $this->distributor = $distributor;
        return $this;
    }

    /**
     * Adds as udiDeviceIdentifier
     *
     * Unique Device Identifier (UDI) Barcode string on the packaging.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionUdiDeviceIdentifierType $udiDeviceIdentifier
     */
    public function addToUdiDeviceIdentifier(\TKusy\Hl7Fhir\R5\DeviceDefinitionUdiDeviceIdentifierType $udiDeviceIdentifier)
    {
        $this->udiDeviceIdentifier[] = $udiDeviceIdentifier;
        return $this;
    }

    /**
     * isset udiDeviceIdentifier
     *
     * Unique Device Identifier (UDI) Barcode string on the packaging.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUdiDeviceIdentifier($index)
    {
        return isset($this->udiDeviceIdentifier[$index]);
    }

    /**
     * unset udiDeviceIdentifier
     *
     * Unique Device Identifier (UDI) Barcode string on the packaging.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUdiDeviceIdentifier($index)
    {
        unset($this->udiDeviceIdentifier[$index]);
    }

    /**
     * Gets as udiDeviceIdentifier
     *
     * Unique Device Identifier (UDI) Barcode string on the packaging.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionUdiDeviceIdentifierType[]
     */
    public function getUdiDeviceIdentifier()
    {
        return $this->udiDeviceIdentifier;
    }

    /**
     * Sets a new udiDeviceIdentifier
     *
     * Unique Device Identifier (UDI) Barcode string on the packaging.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionUdiDeviceIdentifierType[] $udiDeviceIdentifier
     * @return self
     */
    public function setUdiDeviceIdentifier(array $udiDeviceIdentifier = null)
    {
        $this->udiDeviceIdentifier = $udiDeviceIdentifier;
        return $this;
    }

    /**
     * Adds as packaging
     *
     * Allows packages within packages.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionPackagingType $packaging
     */
    public function addToPackaging(\TKusy\Hl7Fhir\R5\DeviceDefinitionPackagingType $packaging)
    {
        $this->packaging[] = $packaging;
        return $this;
    }

    /**
     * isset packaging
     *
     * Allows packages within packages.
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
     * Allows packages within packages.
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
     * Allows packages within packages.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionPackagingType[]
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * Sets a new packaging
     *
     * Allows packages within packages.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionPackagingType[] $packaging
     * @return self
     */
    public function setPackaging(array $packaging = null)
    {
        $this->packaging = $packaging;
        return $this;
    }


}

