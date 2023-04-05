<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceDefinitionType
 *
 * The characteristics, operational status and capabilities of a medical-related component of a medical device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DeviceDefinition
 */
class DeviceDefinitionType extends DomainResourceType
{

    /**
     * Additional information to describe the device.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID. The identifier is typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not valued and represents a different type of identifier. However, it is permissible to still include those identifiers in DeviceDefinition.identifier with the appropriate identifier.type.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionUdiDeviceIdentifierType[] $udiDeviceIdentifier
     */
    private $udiDeviceIdentifier = null;

    /**
     * Identifier associated with the regulatory documentation (certificates, technical documentation, post-market surveillance documentation and reports) of a set of device models sharing the same intended purpose, risk class and essential design and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierType[] $regulatoryIdentifier
     */
    private $regulatoryIdentifier = null;

    /**
     * The part number or catalog number of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $partNumber
     */
    private $partNumber = null;

    /**
     * A name of the manufacturer or legal representative e.g. labeler. Whether this is the actual manufacturer or the labeler or responsible depends on implementation and jurisdiction.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $manufacturer
     */
    private $manufacturer = null;

    /**
     * The name or names of the device as given by the manufacturer.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionDeviceNameType[] $deviceName
     */
    private $deviceName = null;

    /**
     * The model number for the device for example as defined by the manufacturer or labeler, or other agency.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $modelNumber
     */
    private $modelNumber = null;

    /**
     * What kind of device or device system this is.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionClassificationType[] $classification
     */
    private $classification = null;

    /**
     * Identifies the standards, specifications, or formal guidances for the capabilities supported by the device. The device may be certified as conformant to these specifications e.g., communication, performance, process, measurement, or specialization standards.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionConformsToType[] $conformsTo
     */
    private $conformsTo = null;

    /**
     * A device that is part (for example a component) of the present device.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionHasPartType[] $hasPart
     */
    private $hasPart = null;

    /**
     * Information about the packaging of the device, i.e. how the device is packaged.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionPackagingType[] $packaging
     */
    private $packaging = null;

    /**
     * The version of the device or software.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionVersionType[] $version
     */
    private $version = null;

    /**
     * Safety characteristics of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $safety
     */
    private $safety = null;

    /**
     * Shelf Life and storage information.
     *
     * @var \TKusy\Hl7Fhir\R5\ProductShelfLifeType[] $shelfLifeStorage
     */
    private $shelfLifeStorage = null;

    /**
     * Language code for the human-readable text strings produced by the device (all supported).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $languageCode
     */
    private $languageCode = null;

    /**
     * Static or essentially fixed characteristics or features of this kind of device that are otherwise not captured in more specific attributes, e.g., time or timing attributes, resolution, accuracy, and physical attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionPropertyType[] $property
     */
    private $property = null;

    /**
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $owner
     */
    private $owner = null;

    /**
     * Contact details for an organization or a particular human that is responsible for the device.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactPointType[] $contact
     */
    private $contact = null;

    /**
     * An associated device, attached to, used with, communicating with or linking a previous or new device model to the focal device.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionLinkType[] $link
     */
    private $link = null;

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * A substance used to create the material(s) of which the device is made.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionMaterialType[] $material
     */
    private $material = null;

    /**
     * Indicates the production identifier(s) that are expected to appear in the UDI carrier on the device label.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceProductionIdentifierInUDIType[] $productionIdentifierInUDI
     */
    private $productionIdentifierInUDI = null;

    /**
     * Information aimed at providing directions for the usage of this model of device.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionGuidelineType $guideline
     */
    private $guideline = null;

    /**
     * Tracking of latest field safety corrective action.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionCorrectiveActionType $correctiveAction
     */
    private $correctiveAction = null;

    /**
     * Billing code or reference associated with the device.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceDefinitionChargeItemType[] $chargeItem
     */
    private $chargeItem = null;

    /**
     * Gets as description
     *
     * Additional information to describe the device.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Additional information to describe the device.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID. The identifier is typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not valued and represents a different type of identifier. However, it is permissible to still include those identifiers in DeviceDefinition.identifier with the appropriate identifier.type.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID. The identifier is typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not valued and represents a different type of identifier. However, it is permissible to still include those identifiers in DeviceDefinition.identifier with the appropriate identifier.type.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID. The identifier is typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not valued and represents a different type of identifier. However, it is permissible to still include those identifiers in DeviceDefinition.identifier with the appropriate identifier.type.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID. The identifier is typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not valued and represents a different type of identifier. However, it is permissible to still include those identifiers in DeviceDefinition.identifier with the appropriate identifier.type.
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
     * Unique instance identifiers assigned to a device by the software, manufacturers, other organizations or owners. For example: handle ID. The identifier is typically valued if the udiDeviceIdentifier, partNumber or modelNumber is not valued and represents a different type of identifier. However, it is permissible to still include those identifiers in DeviceDefinition.identifier with the appropriate identifier.type.
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
     * Adds as udiDeviceIdentifier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
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
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionUdiDeviceIdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionUdiDeviceIdentifierType[] $udiDeviceIdentifier
     * @return self
     */
    public function setUdiDeviceIdentifier(array $udiDeviceIdentifier = null)
    {
        $this->udiDeviceIdentifier = $udiDeviceIdentifier;
        return $this;
    }

    /**
     * Adds as regulatoryIdentifier
     *
     * Identifier associated with the regulatory documentation (certificates, technical documentation, post-market surveillance documentation and reports) of a set of device models sharing the same intended purpose, risk class and essential design and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierType $regulatoryIdentifier
     */
    public function addToRegulatoryIdentifier(\TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierType $regulatoryIdentifier)
    {
        $this->regulatoryIdentifier[] = $regulatoryIdentifier;
        return $this;
    }

    /**
     * isset regulatoryIdentifier
     *
     * Identifier associated with the regulatory documentation (certificates, technical documentation, post-market surveillance documentation and reports) of a set of device models sharing the same intended purpose, risk class and essential design and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegulatoryIdentifier($index)
    {
        return isset($this->regulatoryIdentifier[$index]);
    }

    /**
     * unset regulatoryIdentifier
     *
     * Identifier associated with the regulatory documentation (certificates, technical documentation, post-market surveillance documentation and reports) of a set of device models sharing the same intended purpose, risk class and essential design and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegulatoryIdentifier($index)
    {
        unset($this->regulatoryIdentifier[$index]);
    }

    /**
     * Gets as regulatoryIdentifier
     *
     * Identifier associated with the regulatory documentation (certificates, technical documentation, post-market surveillance documentation and reports) of a set of device models sharing the same intended purpose, risk class and essential design and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierType[]
     */
    public function getRegulatoryIdentifier()
    {
        return $this->regulatoryIdentifier;
    }

    /**
     * Sets a new regulatoryIdentifier
     *
     * Identifier associated with the regulatory documentation (certificates, technical documentation, post-market surveillance documentation and reports) of a set of device models sharing the same intended purpose, risk class and essential design and manufacturing characteristics. One example is the Basic UDI-DI in Europe.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionRegulatoryIdentifierType[] $regulatoryIdentifier
     * @return self
     */
    public function setRegulatoryIdentifier(array $regulatoryIdentifier = null)
    {
        $this->regulatoryIdentifier = $regulatoryIdentifier;
        return $this;
    }

    /**
     * Gets as partNumber
     *
     * The part number or catalog number of the device.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Sets a new partNumber
     *
     * The part number or catalog number of the device.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $partNumber
     * @return self
     */
    public function setPartNumber(?\TKusy\Hl7Fhir\R5\StringType $partNumber = null)
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * Gets as manufacturer
     *
     * A name of the manufacturer or legal representative e.g. labeler. Whether this is the actual manufacturer or the labeler or responsible depends on implementation and jurisdiction.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * A name of the manufacturer or legal representative e.g. labeler. Whether this is the actual manufacturer or the labeler or responsible depends on implementation and jurisdiction.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $manufacturer
     * @return self
     */
    public function setManufacturer(?\TKusy\Hl7Fhir\R5\ReferenceType $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Adds as deviceName
     *
     * The name or names of the device as given by the manufacturer.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionDeviceNameType $deviceName
     */
    public function addToDeviceName(\TKusy\Hl7Fhir\R5\DeviceDefinitionDeviceNameType $deviceName)
    {
        $this->deviceName[] = $deviceName;
        return $this;
    }

    /**
     * isset deviceName
     *
     * The name or names of the device as given by the manufacturer.
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
     * The name or names of the device as given by the manufacturer.
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
     * The name or names of the device as given by the manufacturer.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionDeviceNameType[]
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Sets a new deviceName
     *
     * The name or names of the device as given by the manufacturer.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionDeviceNameType[] $deviceName
     * @return self
     */
    public function setDeviceName(array $deviceName = null)
    {
        $this->deviceName = $deviceName;
        return $this;
    }

    /**
     * Gets as modelNumber
     *
     * The model number for the device for example as defined by the manufacturer or labeler, or other agency.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getModelNumber()
    {
        return $this->modelNumber;
    }

    /**
     * Sets a new modelNumber
     *
     * The model number for the device for example as defined by the manufacturer or labeler, or other agency.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $modelNumber
     * @return self
     */
    public function setModelNumber(?\TKusy\Hl7Fhir\R5\StringType $modelNumber = null)
    {
        $this->modelNumber = $modelNumber;
        return $this;
    }

    /**
     * Adds as classification
     *
     * What kind of device or device system this is.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionClassificationType $classification
     */
    public function addToClassification(\TKusy\Hl7Fhir\R5\DeviceDefinitionClassificationType $classification)
    {
        $this->classification[] = $classification;
        return $this;
    }

    /**
     * isset classification
     *
     * What kind of device or device system this is.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassification($index)
    {
        return isset($this->classification[$index]);
    }

    /**
     * unset classification
     *
     * What kind of device or device system this is.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassification($index)
    {
        unset($this->classification[$index]);
    }

    /**
     * Gets as classification
     *
     * What kind of device or device system this is.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionClassificationType[]
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * What kind of device or device system this is.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionClassificationType[] $classification
     * @return self
     */
    public function setClassification(array $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Adds as conformsTo
     *
     * Identifies the standards, specifications, or formal guidances for the capabilities supported by the device. The device may be certified as conformant to these specifications e.g., communication, performance, process, measurement, or specialization standards.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionConformsToType $conformsTo
     */
    public function addToConformsTo(\TKusy\Hl7Fhir\R5\DeviceDefinitionConformsToType $conformsTo)
    {
        $this->conformsTo[] = $conformsTo;
        return $this;
    }

    /**
     * isset conformsTo
     *
     * Identifies the standards, specifications, or formal guidances for the capabilities supported by the device. The device may be certified as conformant to these specifications e.g., communication, performance, process, measurement, or specialization standards.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConformsTo($index)
    {
        return isset($this->conformsTo[$index]);
    }

    /**
     * unset conformsTo
     *
     * Identifies the standards, specifications, or formal guidances for the capabilities supported by the device. The device may be certified as conformant to these specifications e.g., communication, performance, process, measurement, or specialization standards.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConformsTo($index)
    {
        unset($this->conformsTo[$index]);
    }

    /**
     * Gets as conformsTo
     *
     * Identifies the standards, specifications, or formal guidances for the capabilities supported by the device. The device may be certified as conformant to these specifications e.g., communication, performance, process, measurement, or specialization standards.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionConformsToType[]
     */
    public function getConformsTo()
    {
        return $this->conformsTo;
    }

    /**
     * Sets a new conformsTo
     *
     * Identifies the standards, specifications, or formal guidances for the capabilities supported by the device. The device may be certified as conformant to these specifications e.g., communication, performance, process, measurement, or specialization standards.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionConformsToType[] $conformsTo
     * @return self
     */
    public function setConformsTo(array $conformsTo = null)
    {
        $this->conformsTo = $conformsTo;
        return $this;
    }

    /**
     * Adds as hasPart
     *
     * A device that is part (for example a component) of the present device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionHasPartType $hasPart
     */
    public function addToHasPart(\TKusy\Hl7Fhir\R5\DeviceDefinitionHasPartType $hasPart)
    {
        $this->hasPart[] = $hasPart;
        return $this;
    }

    /**
     * isset hasPart
     *
     * A device that is part (for example a component) of the present device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHasPart($index)
    {
        return isset($this->hasPart[$index]);
    }

    /**
     * unset hasPart
     *
     * A device that is part (for example a component) of the present device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHasPart($index)
    {
        unset($this->hasPart[$index]);
    }

    /**
     * Gets as hasPart
     *
     * A device that is part (for example a component) of the present device.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionHasPartType[]
     */
    public function getHasPart()
    {
        return $this->hasPart;
    }

    /**
     * Sets a new hasPart
     *
     * A device that is part (for example a component) of the present device.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionHasPartType[] $hasPart
     * @return self
     */
    public function setHasPart(array $hasPart = null)
    {
        $this->hasPart = $hasPart;
        return $this;
    }

    /**
     * Adds as packaging
     *
     * Information about the packaging of the device, i.e. how the device is packaged.
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
     * Information about the packaging of the device, i.e. how the device is packaged.
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
     * Information about the packaging of the device, i.e. how the device is packaged.
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
     * Information about the packaging of the device, i.e. how the device is packaged.
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
     * Information about the packaging of the device, i.e. how the device is packaged.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionPackagingType[] $packaging
     * @return self
     */
    public function setPackaging(array $packaging = null)
    {
        $this->packaging = $packaging;
        return $this;
    }

    /**
     * Adds as version
     *
     * The version of the device or software.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionVersionType $version
     */
    public function addToVersion(\TKusy\Hl7Fhir\R5\DeviceDefinitionVersionType $version)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * isset version
     *
     * The version of the device or software.
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
     * The version of the device or software.
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
     * The version of the device or software.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionVersionType[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the device or software.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionVersionType[] $version
     * @return self
     */
    public function setVersion(array $version = null)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $safety
     */
    public function addToSafety(\TKusy\Hl7Fhir\R5\CodeableConceptType $safety)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $safety
     * @return self
     */
    public function setSafety(array $safety = null)
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
     * Adds as languageCode
     *
     * Language code for the human-readable text strings produced by the device (all supported).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $languageCode
     */
    public function addToLanguageCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $languageCode)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $languageCode
     * @return self
     */
    public function setLanguageCode(array $languageCode = null)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Adds as property
     *
     * Static or essentially fixed characteristics or features of this kind of device that are otherwise not captured in more specific attributes, e.g., time or timing attributes, resolution, accuracy, and physical attributes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\DeviceDefinitionPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * Static or essentially fixed characteristics or features of this kind of device that are otherwise not captured in more specific attributes, e.g., time or timing attributes, resolution, accuracy, and physical attributes.
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
     * Static or essentially fixed characteristics or features of this kind of device that are otherwise not captured in more specific attributes, e.g., time or timing attributes, resolution, accuracy, and physical attributes.
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
     * Static or essentially fixed characteristics or features of this kind of device that are otherwise not captured in more specific attributes, e.g., time or timing attributes, resolution, accuracy, and physical attributes.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * Static or essentially fixed characteristics or features of this kind of device that are otherwise not captured in more specific attributes, e.g., time or timing attributes, resolution, accuracy, and physical attributes.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Gets as owner
     *
     * An organization that is responsible for the provision and ongoing maintenance of the device.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $owner
     * @return self
     */
    public function setOwner(?\TKusy\Hl7Fhir\R5\ReferenceType $owner = null)
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
     * @param \TKusy\Hl7Fhir\R5\ContactPointType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R5\ContactPointType $contact)
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
     * @return \TKusy\Hl7Fhir\R5\ContactPointType[]
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
     * @param \TKusy\Hl7Fhir\R5\ContactPointType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as link
     *
     * An associated device, attached to, used with, communicating with or linking a previous or new device model to the focal device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionLinkType $link
     */
    public function addToLink(\TKusy\Hl7Fhir\R5\DeviceDefinitionLinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * An associated device, attached to, used with, communicating with or linking a previous or new device model to the focal device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * An associated device, attached to, used with, communicating with or linking a previous or new device model to the focal device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * An associated device, attached to, used with, communicating with or linking a previous or new device model to the focal device.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionLinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * An associated device, attached to, used with, communicating with or linking a previous or new device model to the focal device.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionLinkType[] $link
     * @return self
     */
    public function setLink(array $link = null)
    {
        $this->link = $link;
        return $this;
    }

    /**
     * Adds as note
     *
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as material
     *
     * A substance used to create the material(s) of which the device is made.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionMaterialType $material
     */
    public function addToMaterial(\TKusy\Hl7Fhir\R5\DeviceDefinitionMaterialType $material)
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
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionMaterialType[]
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
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionMaterialType[] $material
     * @return self
     */
    public function setMaterial(array $material = null)
    {
        $this->material = $material;
        return $this;
    }

    /**
     * Adds as productionIdentifierInUDI
     *
     * Indicates the production identifier(s) that are expected to appear in the UDI carrier on the device label.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceProductionIdentifierInUDIType $productionIdentifierInUDI
     */
    public function addToProductionIdentifierInUDI(\TKusy\Hl7Fhir\R5\DeviceProductionIdentifierInUDIType $productionIdentifierInUDI)
    {
        $this->productionIdentifierInUDI[] = $productionIdentifierInUDI;
        return $this;
    }

    /**
     * isset productionIdentifierInUDI
     *
     * Indicates the production identifier(s) that are expected to appear in the UDI carrier on the device label.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductionIdentifierInUDI($index)
    {
        return isset($this->productionIdentifierInUDI[$index]);
    }

    /**
     * unset productionIdentifierInUDI
     *
     * Indicates the production identifier(s) that are expected to appear in the UDI carrier on the device label.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductionIdentifierInUDI($index)
    {
        unset($this->productionIdentifierInUDI[$index]);
    }

    /**
     * Gets as productionIdentifierInUDI
     *
     * Indicates the production identifier(s) that are expected to appear in the UDI carrier on the device label.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceProductionIdentifierInUDIType[]
     */
    public function getProductionIdentifierInUDI()
    {
        return $this->productionIdentifierInUDI;
    }

    /**
     * Sets a new productionIdentifierInUDI
     *
     * Indicates the production identifier(s) that are expected to appear in the UDI carrier on the device label.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceProductionIdentifierInUDIType[] $productionIdentifierInUDI
     * @return self
     */
    public function setProductionIdentifierInUDI(array $productionIdentifierInUDI = null)
    {
        $this->productionIdentifierInUDI = $productionIdentifierInUDI;
        return $this;
    }

    /**
     * Gets as guideline
     *
     * Information aimed at providing directions for the usage of this model of device.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionGuidelineType
     */
    public function getGuideline()
    {
        return $this->guideline;
    }

    /**
     * Sets a new guideline
     *
     * Information aimed at providing directions for the usage of this model of device.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionGuidelineType $guideline
     * @return self
     */
    public function setGuideline(?\TKusy\Hl7Fhir\R5\DeviceDefinitionGuidelineType $guideline = null)
    {
        $this->guideline = $guideline;
        return $this;
    }

    /**
     * Gets as correctiveAction
     *
     * Tracking of latest field safety corrective action.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionCorrectiveActionType
     */
    public function getCorrectiveAction()
    {
        return $this->correctiveAction;
    }

    /**
     * Sets a new correctiveAction
     *
     * Tracking of latest field safety corrective action.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionCorrectiveActionType $correctiveAction
     * @return self
     */
    public function setCorrectiveAction(?\TKusy\Hl7Fhir\R5\DeviceDefinitionCorrectiveActionType $correctiveAction = null)
    {
        $this->correctiveAction = $correctiveAction;
        return $this;
    }

    /**
     * Adds as chargeItem
     *
     * Billing code or reference associated with the device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionChargeItemType $chargeItem
     */
    public function addToChargeItem(\TKusy\Hl7Fhir\R5\DeviceDefinitionChargeItemType $chargeItem)
    {
        $this->chargeItem[] = $chargeItem;
        return $this;
    }

    /**
     * isset chargeItem
     *
     * Billing code or reference associated with the device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChargeItem($index)
    {
        return isset($this->chargeItem[$index]);
    }

    /**
     * unset chargeItem
     *
     * Billing code or reference associated with the device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChargeItem($index)
    {
        unset($this->chargeItem[$index]);
    }

    /**
     * Gets as chargeItem
     *
     * Billing code or reference associated with the device.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceDefinitionChargeItemType[]
     */
    public function getChargeItem()
    {
        return $this->chargeItem;
    }

    /**
     * Sets a new chargeItem
     *
     * Billing code or reference associated with the device.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceDefinitionChargeItemType[] $chargeItem
     * @return self
     */
    public function setChargeItem(array $chargeItem = null)
    {
        $this->chargeItem = $chargeItem;
        return $this;
    }


}

