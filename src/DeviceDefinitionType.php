<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceDefinitionType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: DeviceDefinition
 */
class DeviceDefinitionType extends DomainResourceType
{

    /**
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @var \TKusy\Hl7FhirR4\DeviceDefinitionUdiDeviceIdentifierType[] $udiDeviceIdentifier
     */
    private $udiDeviceIdentifier = [
        
    ];

    /**
     * A name of the manufacturer. (choose any one of manufacturer*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $manufacturerString
     */
    private $manufacturerString = null;

    /**
     * A name of the manufacturer. (choose any one of manufacturer*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $manufacturerReference
     */
    private $manufacturerReference = null;

    /**
     * A name given to the device to identify it.
     *
     * @var \TKusy\Hl7FhirR4\DeviceDefinitionDeviceNameType[] $deviceName
     */
    private $deviceName = [
        
    ];

    /**
     * The model number for the device.
     *
     * @var \TKusy\Hl7FhirR4\StringType $modelNumber
     */
    private $modelNumber = null;

    /**
     * What kind of device or device system this is.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The capabilities supported on a device, the standards to which the device conforms for a particular purpose, and used for the communication.
     *
     * @var \TKusy\Hl7FhirR4\DeviceDefinitionSpecializationType[] $specialization
     */
    private $specialization = [
        
    ];

    /**
     * The available versions of the device, e.g., software versions.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $version
     */
    private $version = [
        
    ];

    /**
     * Safety characteristics of the device.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $safety
     */
    private $safety = [
        
    ];

    /**
     * Shelf Life and storage information.
     *
     * @var \TKusy\Hl7FhirR4\ProductShelfLifeType[] $shelfLifeStorage
     */
    private $shelfLifeStorage = [
        
    ];

    /**
     * Dimensions, color etc.
     *
     * @var \TKusy\Hl7FhirR4\ProdCharacteristicType $physicalCharacteristics
     */
    private $physicalCharacteristics = null;

    /**
     * Language code for the human-readable text strings produced by the device (all supported).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $languageCode
     */
    private $languageCode = [
        
    ];

    /**
     * Device capabilities.
     *
     * @var \TKusy\Hl7FhirR4\DeviceDefinitionCapabilityType[] $capability
     */
    private $capability = [
        
    ];

    /**
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     *
     * @var \TKusy\Hl7FhirR4\DeviceDefinitionPropertyType[] $property
     */
    private $property = [
        
    ];

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $owner
     */
    private $owner = null;

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * A network address on which the device may be contacted directly.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * Access to on-line information about the device.
     *
     * @var \TKusy\Hl7FhirR4\UriType $onlineInformation
     */
    private $onlineInformation = null;

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * The quantity of the device present in the packaging (e.g. the number of devices present in a pack, or the number of devices in the same package of the medicinal product).
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * The parent device it can be part of.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $parentDevice
     */
    private $parentDevice = null;

    /**
     * A substance used to create the material(s) of which the device is made.
     *
     * @var \TKusy\Hl7FhirR4\DeviceDefinitionMaterialType[] $material
     */
    private $material = [
        
    ];

    /**
     * Adds as identifier
     *
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID.
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
     * Adds as udiDeviceIdentifier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionUdiDeviceIdentifierType $udiDeviceIdentifier
     */
    public function addToUdiDeviceIdentifier(\TKusy\Hl7FhirR4\DeviceDefinitionUdiDeviceIdentifierType $udiDeviceIdentifier)
    {
        $this->udiDeviceIdentifier[] = $udiDeviceIdentifier;
        return $this;
    }

    /**
     * isset udiDeviceIdentifier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
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
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
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
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @return \TKusy\Hl7FhirR4\DeviceDefinitionUdiDeviceIdentifierType[]
     */
    public function getUdiDeviceIdentifier()
    {
        return $this->udiDeviceIdentifier;
    }

    /**
     * Sets a new udiDeviceIdentifier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionUdiDeviceIdentifierType[] $udiDeviceIdentifier
     * @return self
     */
    public function setUdiDeviceIdentifier(array $udiDeviceIdentifier)
    {
        $this->udiDeviceIdentifier = $udiDeviceIdentifier;
        return $this;
    }

    /**
     * Gets as manufacturerString
     *
     * A name of the manufacturer. (choose any one of manufacturer*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getManufacturerString()
    {
        return $this->manufacturerString;
    }

    /**
     * Sets a new manufacturerString
     *
     * A name of the manufacturer. (choose any one of manufacturer*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $manufacturerString
     * @return self
     */
    public function setManufacturerString(\TKusy\Hl7FhirR4\StringType $manufacturerString)
    {
        $this->manufacturerString = $manufacturerString;
        return $this;
    }

    /**
     * Gets as manufacturerReference
     *
     * A name of the manufacturer. (choose any one of manufacturer*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getManufacturerReference()
    {
        return $this->manufacturerReference;
    }

    /**
     * Sets a new manufacturerReference
     *
     * A name of the manufacturer. (choose any one of manufacturer*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $manufacturerReference
     * @return self
     */
    public function setManufacturerReference(\TKusy\Hl7FhirR4\ReferenceType $manufacturerReference)
    {
        $this->manufacturerReference = $manufacturerReference;
        return $this;
    }

    /**
     * Adds as deviceName
     *
     * A name given to the device to identify it.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionDeviceNameType $deviceName
     */
    public function addToDeviceName(\TKusy\Hl7FhirR4\DeviceDefinitionDeviceNameType $deviceName)
    {
        $this->deviceName[] = $deviceName;
        return $this;
    }

    /**
     * isset deviceName
     *
     * A name given to the device to identify it.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeviceName($index)
    {
        return isset($this->deviceName[$index]);
    }

    /**
     * unset deviceName
     *
     * A name given to the device to identify it.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeviceName($index)
    {
        unset($this->deviceName[$index]);
    }

    /**
     * Gets as deviceName
     *
     * A name given to the device to identify it.
     *
     * @return \TKusy\Hl7FhirR4\DeviceDefinitionDeviceNameType[]
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Sets a new deviceName
     *
     * A name given to the device to identify it.
     *
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionDeviceNameType[] $deviceName
     * @return self
     */
    public function setDeviceName(array $deviceName)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Gets as modelNumber
     *
     * The model number for the device.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getModelNumber()
    {
        return $this->modelNumber;
    }

    /**
     * Sets a new modelNumber
     *
     * The model number for the device.
     *
     * @param \TKusy\Hl7FhirR4\StringType $modelNumber
     * @return self
     */
    public function setModelNumber(\TKusy\Hl7FhirR4\StringType $modelNumber)
    {
        $this->modelNumber = $modelNumber;
        return $this;
    }

    /**
     * Gets as type
     *
     * What kind of device or device system this is.
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
     * What kind of device or device system this is.
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
     * Adds as specialization
     *
     * The capabilities supported on a device, the standards to which the device conforms for a particular purpose, and used for the communication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionSpecializationType $specialization
     */
    public function addToSpecialization(\TKusy\Hl7FhirR4\DeviceDefinitionSpecializationType $specialization)
    {
        $this->specialization[] = $specialization;
        return $this;
    }

    /**
     * isset specialization
     *
     * The capabilities supported on a device, the standards to which the device conforms for a particular purpose, and used for the communication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialization($index)
    {
        return isset($this->specialization[$index]);
    }

    /**
     * unset specialization
     *
     * The capabilities supported on a device, the standards to which the device conforms for a particular purpose, and used for the communication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialization($index)
    {
        unset($this->specialization[$index]);
    }

    /**
     * Gets as specialization
     *
     * The capabilities supported on a device, the standards to which the device conforms for a particular purpose, and used for the communication.
     *
     * @return \TKusy\Hl7FhirR4\DeviceDefinitionSpecializationType[]
     */
    public function getSpecialization()
    {
        return $this->specialization;
    }

    /**
     * Sets a new specialization
     *
     * The capabilities supported on a device, the standards to which the device conforms for a particular purpose, and used for the communication.
     *
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionSpecializationType[] $specialization
     * @return self
     */
    public function setSpecialization(array $specialization)
    {
        $this->specialization = $specialization;
        return $this;
    }

    /**
     * Adds as version
     *
     * The available versions of the device, e.g., software versions.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\StringType $version
     */
    public function addToVersion(\TKusy\Hl7FhirR4\StringType $version)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * isset version
     *
     * The available versions of the device, e.g., software versions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVersion($index)
    {
        return isset($this->version[$index]);
    }

    /**
     * unset version
     *
     * The available versions of the device, e.g., software versions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVersion($index)
    {
        unset($this->version[$index]);
    }

    /**
     * Gets as version
     *
     * The available versions of the device, e.g., software versions.
     *
     * @return \TKusy\Hl7FhirR4\StringType[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The available versions of the device, e.g., software versions.
     *
     * @param \TKusy\Hl7FhirR4\StringType[] $version
     * @return self
     */
    public function setVersion(array $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as safety
     *
     * Safety characteristics of the device.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $safety
     */
    public function addToSafety(\TKusy\Hl7FhirR4\CodeableConceptType $safety)
    {
        $this->safety[] = $safety;
        return $this;
    }

    /**
     * isset safety
     *
     * Safety characteristics of the device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSafety($index)
    {
        return isset($this->safety[$index]);
    }

    /**
     * unset safety
     *
     * Safety characteristics of the device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSafety($index)
    {
        unset($this->safety[$index]);
    }

    /**
     * Gets as safety
     *
     * Safety characteristics of the device.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getSafety()
    {
        return $this->safety;
    }

    /**
     * Sets a new safety
     *
     * Safety characteristics of the device.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $safety
     * @return self
     */
    public function setSafety(array $safety)
    {
        $this->safety = $safety;
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
     * Adds as languageCode
     *
     * Language code for the human-readable text strings produced by the device (all supported).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $languageCode
     */
    public function addToLanguageCode(\TKusy\Hl7FhirR4\CodeableConceptType $languageCode)
    {
        $this->languageCode[] = $languageCode;
        return $this;
    }

    /**
     * isset languageCode
     *
     * Language code for the human-readable text strings produced by the device (all supported).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguageCode($index)
    {
        return isset($this->languageCode[$index]);
    }

    /**
     * unset languageCode
     *
     * Language code for the human-readable text strings produced by the device (all supported).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguageCode($index)
    {
        unset($this->languageCode[$index]);
    }

    /**
     * Gets as languageCode
     *
     * Language code for the human-readable text strings produced by the device (all supported).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * Language code for the human-readable text strings produced by the device (all supported).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $languageCode
     * @return self
     */
    public function setLanguageCode(array $languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Adds as capability
     *
     * Device capabilities.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionCapabilityType $capability
     */
    public function addToCapability(\TKusy\Hl7FhirR4\DeviceDefinitionCapabilityType $capability)
    {
        $this->capability[] = $capability;
        return $this;
    }

    /**
     * isset capability
     *
     * Device capabilities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCapability($index)
    {
        return isset($this->capability[$index]);
    }

    /**
     * unset capability
     *
     * Device capabilities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCapability($index)
    {
        unset($this->capability[$index]);
    }

    /**
     * Gets as capability
     *
     * Device capabilities.
     *
     * @return \TKusy\Hl7FhirR4\DeviceDefinitionCapabilityType[]
     */
    public function getCapability()
    {
        return $this->capability;
    }

    /**
     * Sets a new capability
     *
     * Device capabilities.
     *
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionCapabilityType[] $capability
     * @return self
     */
    public function setCapability(array $capability)
    {
        $this->capability = $capability;
        return $this;
    }

    /**
     * Adds as property
     *
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7FhirR4\DeviceDefinitionPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
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
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
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
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     *
     * @return \TKusy\Hl7FhirR4\DeviceDefinitionPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     *
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Gets as owner
     *
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $owner
     * @return self
     */
    public function setOwner(\TKusy\Hl7FhirR4\ReferenceType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details for an organization or a particular human that is responsible for the device.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContactPointType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\ContactPointType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact details for an organization or a particular human that is responsible for the device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Contact details for an organization or a particular human that is responsible for the device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Contact details for an organization or a particular human that is responsible for the device.
     *
     * @return \TKusy\Hl7FhirR4\ContactPointType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact details for an organization or a particular human that is responsible for the device.
     *
     * @param \TKusy\Hl7FhirR4\ContactPointType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as url
     *
     * A network address on which the device may be contacted directly.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * A network address on which the device may be contacted directly.
     *
     * @param \TKusy\Hl7FhirR4\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Gets as onlineInformation
     *
     * Access to on-line information about the device.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getOnlineInformation()
    {
        return $this->onlineInformation;
    }

    /**
     * Sets a new onlineInformation
     *
     * Access to on-line information about the device.
     *
     * @param \TKusy\Hl7FhirR4\UriType $onlineInformation
     * @return self
     */
    public function setOnlineInformation(\TKusy\Hl7FhirR4\UriType $onlineInformation)
    {
        $this->onlineInformation = $onlineInformation;
        return $this;
    }

    /**
     * Adds as note
     *
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity of the device present in the packaging (e.g. the number of devices present in a pack, or the number of devices in the same package of the medicinal product).
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
     * The quantity of the device present in the packaging (e.g. the number of devices present in a pack, or the number of devices in the same package of the medicinal product).
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
     * Gets as parentDevice
     *
     * The parent device it can be part of.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getParentDevice()
    {
        return $this->parentDevice;
    }

    /**
     * Sets a new parentDevice
     *
     * The parent device it can be part of.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $parentDevice
     * @return self
     */
    public function setParentDevice(\TKusy\Hl7FhirR4\ReferenceType $parentDevice)
    {
        $this->parentDevice = $parentDevice;
        return $this;
    }

    /**
     * Adds as material
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionMaterialType $material
     */
    public function addToMaterial(\TKusy\Hl7FhirR4\DeviceDefinitionMaterialType $material)
    {
        $this->material[] = $material;
        return $this;
    }

    /**
     * isset material
     *
     * A substance used to create the material(s) of which the device is made.
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
     * A substance used to create the material(s) of which the device is made.
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
     * A substance used to create the material(s) of which the device is made.
     *
     * @return \TKusy\Hl7FhirR4\DeviceDefinitionMaterialType[]
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Sets a new material
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @param \TKusy\Hl7FhirR4\DeviceDefinitionMaterialType[] $material
     * @return self
     */
    public function setMaterial(array $material)
    {
        $this->material = $material;
        return $this;
    }


}

