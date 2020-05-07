<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DeviceType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Device
 */
class DeviceType extends DomainResourceType
{

    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The reference to the definition for the device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $definition
     */
    private $definition = null;

    /**
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @var \TKusy\Hl7FhirR4\DeviceUdiCarrierType[] $udiCarrier
     */
    private $udiCarrier = [
        
    ];

    /**
     * Status of the Device availability.
     *
     * @var \TKusy\Hl7FhirR4\FHIRDeviceStatusType $status
     */
    private $status = null;

    /**
     * Reason for the dtatus of the Device availability.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $statusReason
     */
    private $statusReason = [
        
    ];

    /**
     * The distinct identification string as required by regulation for a human cell, tissue, or cellular and tissue-based product.
     *
     * @var \TKusy\Hl7FhirR4\StringType $distinctIdentifier
     */
    private $distinctIdentifier = null;

    /**
     * A name of the manufacturer.
     *
     * @var \TKusy\Hl7FhirR4\StringType $manufacturer
     */
    private $manufacturer = null;

    /**
     * The date and time when the device was manufactured.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $manufactureDate
     */
    private $manufactureDate = null;

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $expirationDate
     */
    private $expirationDate = null;

    /**
     * Lot number assigned by the manufacturer.
     *
     * @var \TKusy\Hl7FhirR4\StringType $lotNumber
     */
    private $lotNumber = null;

    /**
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @var \TKusy\Hl7FhirR4\StringType $serialNumber
     */
    private $serialNumber = null;

    /**
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     *
     * @var \TKusy\Hl7FhirR4\DeviceDeviceNameType[] $deviceName
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
     * The part number of the device.
     *
     * @var \TKusy\Hl7FhirR4\StringType $partNumber
     */
    private $partNumber = null;

    /**
     * The kind or type of device.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The capabilities supported on a device, the standards to which the device conforms for a particular purpose, and used for the communication.
     *
     * @var \TKusy\Hl7FhirR4\DeviceSpecializationType[] $specialization
     */
    private $specialization = [
        
    ];

    /**
     * The actual design of the device or software version running on the device.
     *
     * @var \TKusy\Hl7FhirR4\DeviceVersionType[] $version
     */
    private $version = [
        
    ];

    /**
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     *
     * @var \TKusy\Hl7FhirR4\DevicePropertyType[] $property
     */
    private $property = [
        
    ];

    /**
     * Patient information, If the device is affixed to a person.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

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
     * The place where the device can be found.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * A network address on which the device may be contacted directly.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * Provides additional safety characteristics about a medical device. For example devices containing latex.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $safety
     */
    private $safety = [
        
    ];

    /**
     * The parent device.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $parent
     */
    private $parent = null;

    /**
     * Adds as identifier
     *
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
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
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
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
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
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
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
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
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
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
     * Gets as definition
     *
     * The reference to the definition for the device.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * The reference to the definition for the device.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $definition
     * @return self
     */
    public function setDefinition(\TKusy\Hl7FhirR4\ReferenceType $definition)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Adds as udiCarrier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceUdiCarrierType $udiCarrier
     */
    public function addToUdiCarrier(\TKusy\Hl7FhirR4\DeviceUdiCarrierType $udiCarrier)
    {
        $this->udiCarrier[] = $udiCarrier;
        return $this;
    }

    /**
     * isset udiCarrier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUdiCarrier($index)
    {
        return isset($this->udiCarrier[$index]);
    }

    /**
     * unset udiCarrier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUdiCarrier($index)
    {
        unset($this->udiCarrier[$index]);
    }

    /**
     * Gets as udiCarrier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @return \TKusy\Hl7FhirR4\DeviceUdiCarrierType[]
     */
    public function getUdiCarrier()
    {
        return $this->udiCarrier;
    }

    /**
     * Sets a new udiCarrier
     *
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @param \TKusy\Hl7FhirR4\DeviceUdiCarrierType[] $udiCarrier
     * @return self
     */
    public function setUdiCarrier(array $udiCarrier)
    {
        $this->udiCarrier = $udiCarrier;
        return $this;
    }

    /**
     * Gets as status
     *
     * Status of the Device availability.
     *
     * @return \TKusy\Hl7FhirR4\FHIRDeviceStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status of the Device availability.
     *
     * @param \TKusy\Hl7FhirR4\FHIRDeviceStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\FHIRDeviceStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as statusReason
     *
     * Reason for the dtatus of the Device availability.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     */
    public function addToStatusReason(\TKusy\Hl7FhirR4\CodeableConceptType $statusReason)
    {
        $this->statusReason[] = $statusReason;
        return $this;
    }

    /**
     * isset statusReason
     *
     * Reason for the dtatus of the Device availability.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusReason($index)
    {
        return isset($this->statusReason[$index]);
    }

    /**
     * unset statusReason
     *
     * Reason for the dtatus of the Device availability.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusReason($index)
    {
        unset($this->statusReason[$index]);
    }

    /**
     * Gets as statusReason
     *
     * Reason for the dtatus of the Device availability.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * Reason for the dtatus of the Device availability.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $statusReason
     * @return self
     */
    public function setStatusReason(array $statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as distinctIdentifier
     *
     * The distinct identification string as required by regulation for a human cell, tissue, or cellular and tissue-based product.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDistinctIdentifier()
    {
        return $this->distinctIdentifier;
    }

    /**
     * Sets a new distinctIdentifier
     *
     * The distinct identification string as required by regulation for a human cell, tissue, or cellular and tissue-based product.
     *
     * @param \TKusy\Hl7FhirR4\StringType $distinctIdentifier
     * @return self
     */
    public function setDistinctIdentifier(\TKusy\Hl7FhirR4\StringType $distinctIdentifier)
    {
        $this->distinctIdentifier = $distinctIdentifier;
        return $this;
    }

    /**
     * Gets as manufacturer
     *
     * A name of the manufacturer.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * A name of the manufacturer.
     *
     * @param \TKusy\Hl7FhirR4\StringType $manufacturer
     * @return self
     */
    public function setManufacturer(\TKusy\Hl7FhirR4\StringType $manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Gets as manufactureDate
     *
     * The date and time when the device was manufactured.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getManufactureDate()
    {
        return $this->manufactureDate;
    }

    /**
     * Sets a new manufactureDate
     *
     * The date and time when the device was manufactured.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $manufactureDate
     * @return self
     */
    public function setManufactureDate(\TKusy\Hl7FhirR4\DateTimeType $manufactureDate)
    {
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $expirationDate
     * @return self
     */
    public function setExpirationDate(\TKusy\Hl7FhirR4\DateTimeType $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as lotNumber
     *
     * Lot number assigned by the manufacturer.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * Sets a new lotNumber
     *
     * Lot number assigned by the manufacturer.
     *
     * @param \TKusy\Hl7FhirR4\StringType $lotNumber
     * @return self
     */
    public function setLotNumber(\TKusy\Hl7FhirR4\StringType $lotNumber)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Gets as serialNumber
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets a new serialNumber
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @param \TKusy\Hl7FhirR4\StringType $serialNumber
     * @return self
     */
    public function setSerialNumber(\TKusy\Hl7FhirR4\StringType $serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Adds as deviceName
     *
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceDeviceNameType $deviceName
     */
    public function addToDeviceName(\TKusy\Hl7FhirR4\DeviceDeviceNameType $deviceName)
    {
        $this->deviceName[] = $deviceName;
        return $this;
    }

    /**
     * isset deviceName
     *
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
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
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
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
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     *
     * @return \TKusy\Hl7FhirR4\DeviceDeviceNameType[]
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * Sets a new deviceName
     *
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     *
     * @param \TKusy\Hl7FhirR4\DeviceDeviceNameType[] $deviceName
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
     * Gets as partNumber
     *
     * The part number of the device.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Sets a new partNumber
     *
     * The part number of the device.
     *
     * @param \TKusy\Hl7FhirR4\StringType $partNumber
     * @return self
     */
    public function setPartNumber(\TKusy\Hl7FhirR4\StringType $partNumber)
    {
        $this->partNumber = $partNumber;
        return $this;
    }

    /**
     * Gets as type
     *
     * The kind or type of device.
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
     * The kind or type of device.
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
     * @param \TKusy\Hl7FhirR4\DeviceSpecializationType $specialization
     */
    public function addToSpecialization(\TKusy\Hl7FhirR4\DeviceSpecializationType $specialization)
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
     * @return \TKusy\Hl7FhirR4\DeviceSpecializationType[]
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
     * @param \TKusy\Hl7FhirR4\DeviceSpecializationType[] $specialization
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
     * The actual design of the device or software version running on the device.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DeviceVersionType $version
     */
    public function addToVersion(\TKusy\Hl7FhirR4\DeviceVersionType $version)
    {
        $this->version[] = $version;
        return $this;
    }

    /**
     * isset version
     *
     * The actual design of the device or software version running on the device.
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
     * The actual design of the device or software version running on the device.
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
     * The actual design of the device or software version running on the device.
     *
     * @return \TKusy\Hl7FhirR4\DeviceVersionType[]
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The actual design of the device or software version running on the device.
     *
     * @param \TKusy\Hl7FhirR4\DeviceVersionType[] $version
     * @return self
     */
    public function setVersion(array $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as property
     *
     * The actual configuration settings of a device as it actually operates, e.g., regulation status, time properties.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DevicePropertyType $property
     */
    public function addToProperty(\TKusy\Hl7FhirR4\DevicePropertyType $property)
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
     * @return \TKusy\Hl7FhirR4\DevicePropertyType[]
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
     * @param \TKusy\Hl7FhirR4\DevicePropertyType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Gets as patient
     *
     * Patient information, If the device is affixed to a person.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * Patient information, If the device is affixed to a person.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
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
     * Gets as location
     *
     * The place where the device can be found.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The place where the device can be found.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
    {
        $this->location = $location;
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
     * Adds as safety
     *
     * Provides additional safety characteristics about a medical device. For example devices containing latex.
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
     * Provides additional safety characteristics about a medical device. For example devices containing latex.
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
     * Provides additional safety characteristics about a medical device. For example devices containing latex.
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
     * Provides additional safety characteristics about a medical device. For example devices containing latex.
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
     * Provides additional safety characteristics about a medical device. For example devices containing latex.
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
     * Gets as parent
     *
     * The parent device.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * The parent device.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $parent
     * @return self
     */
    public function setParent(\TKusy\Hl7FhirR4\ReferenceType $parent)
    {
        $this->parent = $parent;
        return $this;
    }


}

