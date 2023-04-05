<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DeviceType
 *
 * A type of a manufactured item that is used in the provision of healthcare without being substantially changed through that activity. The device may be a medical or non-medical device.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Device
 */
class DeviceType extends DomainResourceType
{

    /**
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The name used to display by default when the device is referenced. Based on intent of use by the resource creator, this may reflect one of the names in Device.name, or may be another simple name.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $displayName
     */
    private $displayName = null;

    /**
     * The reference to the definition for the device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $definition
     */
    private $definition = null;

    /**
     * Unique device identifier (UDI) assigned to device label or package. Note that the Device may include multiple udiCarriers as it either may include just the udiCarrier for the jurisdiction it is sold, or for multiple jurisdictions it could have been sold.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceUdiCarrierType[] $udiCarrier
     */
    private $udiCarrier = null;

    /**
     * The Device record status. This is not the status of the device like availability.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRDeviceStatusType $status
     */
    private $status = null;

    /**
     * The availability of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $availabilityStatus
     */
    private $availabilityStatus = null;

    /**
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent
     */
    private $biologicalSourceEvent = null;

    /**
     * A name of the manufacturer or entity legally responsible for the device.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $manufacturer
     */
    private $manufacturer = null;

    /**
     * The date and time when the device was manufactured.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $manufactureDate
     */
    private $manufactureDate = null;

    /**
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $expirationDate
     */
    private $expirationDate = null;

    /**
     * Lot number assigned by the manufacturer.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $lotNumber
     */
    private $lotNumber = null;

    /**
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $serialNumber
     */
    private $serialNumber = null;

    /**
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceNameType[] $name
     */
    private $name = null;

    /**
     * The manufacturer's model number for the device.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $modelNumber
     */
    private $modelNumber = null;

    /**
     * The part number or catalog number of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $partNumber
     */
    private $partNumber = null;

    /**
     * Devices may be associated with one or more categories.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * The kind or type of device. A device instance may have more than one type - in which case those are the types that apply to the specific instance of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The actual design of the device or software version running on the device.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceVersionType[] $version
     */
    private $version = null;

    /**
     * Identifies the standards, specifications, or formal guidances for the capabilities supported by the device. The device may be certified as conformant to these specifications e.g., communication, performance, process, measurement, or specialization standards.
     *
     * @var \TKusy\Hl7Fhir\R5\DeviceConformsToType[] $conformsTo
     */
    private $conformsTo = null;

    /**
     * Static or essentially fixed characteristics or features of the device (e.g., time or timing attributes, resolution, accuracy, intended use or instructions for use, and physical attributes) that are not otherwise captured in more specific attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\DevicePropertyType[] $property
     */
    private $property = null;

    /**
     * The designated condition for performing a task with the device.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $mode
     */
    private $mode = null;

    /**
     * The series of occurrences that repeats during the operation of the device.
     *
     * @var \TKusy\Hl7Fhir\R5\CountType $cycle
     */
    private $cycle = null;

    /**
     * A measurement of time during the device's operation (e.g., days, hours, mins, etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\DurationType $duration
     */
    private $duration = null;

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
     * The place where the device can be found.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * A network address on which the device may be contacted directly.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * Technical endpoints providing access to services provided by the device defined at this resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * The linked device acting as a communication controller, data collector, translator, or concentrator for the current device (e.g., mobile phone application that relays a blood pressure device's data).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $gateway
     */
    private $gateway = null;

    /**
     * Descriptive information, usage information or implantation information that is not captured in an existing element.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Provides additional safety characteristics about a medical device. For example devices containing latex.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $safety
     */
    private $safety = null;

    /**
     * The higher level or encompassing device that this device is a logical part of.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $parent
     */
    private $parent = null;

    /**
     * Adds as identifier
     *
     * Unique instance identifiers assigned to a device by manufacturers other organizations or owners.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as displayName
     *
     * The name used to display by default when the device is referenced. Based on intent of use by the resource creator, this may reflect one of the names in Device.name, or may be another simple name.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Sets a new displayName
     *
     * The name used to display by default when the device is referenced. Based on intent of use by the resource creator, this may reflect one of the names in Device.name, or may be another simple name.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $displayName
     * @return self
     */
    public function setDisplayName(?\TKusy\Hl7Fhir\R5\StringType $displayName = null)
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * Gets as definition
     *
     * The reference to the definition for the device.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $definition
     * @return self
     */
    public function setDefinition(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $definition = null)
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
     * @param \TKusy\Hl7Fhir\R5\DeviceUdiCarrierType $udiCarrier
     */
    public function addToUdiCarrier(\TKusy\Hl7Fhir\R5\DeviceUdiCarrierType $udiCarrier)
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
     * @return \TKusy\Hl7Fhir\R5\DeviceUdiCarrierType[]
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
     * @param \TKusy\Hl7Fhir\R5\DeviceUdiCarrierType[] $udiCarrier
     * @return self
     */
    public function setUdiCarrier(array $udiCarrier = null)
    {
        $this->udiCarrier = $udiCarrier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The Device record status. This is not the status of the device like availability.
     *
     * @return \TKusy\Hl7Fhir\R5\FHIRDeviceStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The Device record status. This is not the status of the device like availability.
     *
     * @param \TKusy\Hl7Fhir\R5\FHIRDeviceStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\FHIRDeviceStatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as availabilityStatus
     *
     * The availability of the device.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAvailabilityStatus()
    {
        return $this->availabilityStatus;
    }

    /**
     * Sets a new availabilityStatus
     *
     * The availability of the device.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $availabilityStatus = null)
    {
        $this->availabilityStatus = $availabilityStatus;
        return $this;
    }

    /**
     * Gets as biologicalSourceEvent
     *
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getBiologicalSourceEvent()
    {
        return $this->biologicalSourceEvent;
    }

    /**
     * Sets a new biologicalSourceEvent
     *
     * An identifier that supports traceability to the event during which material in this product from one or more biological entities was obtained or pooled.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent
     * @return self
     */
    public function setBiologicalSourceEvent(?\TKusy\Hl7Fhir\R5\IdentifierType $biologicalSourceEvent = null)
    {
        $this->biologicalSourceEvent = $biologicalSourceEvent;
        return $this;
    }

    /**
     * Gets as manufacturer
     *
     * A name of the manufacturer or entity legally responsible for the device.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Sets a new manufacturer
     *
     * A name of the manufacturer or entity legally responsible for the device.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $manufacturer
     * @return self
     */
    public function setManufacturer(?\TKusy\Hl7Fhir\R5\StringType $manufacturer = null)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    /**
     * Gets as manufactureDate
     *
     * The date and time when the device was manufactured.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $manufactureDate
     * @return self
     */
    public function setManufactureDate(?\TKusy\Hl7Fhir\R5\DateTimeType $manufactureDate = null)
    {
        $this->manufactureDate = $manufactureDate;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * The date and time beyond which this device is no longer valid or should not be used (if applicable).
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $expirationDate
     * @return self
     */
    public function setExpirationDate(?\TKusy\Hl7Fhir\R5\DateTimeType $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as lotNumber
     *
     * Lot number assigned by the manufacturer.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $lotNumber
     * @return self
     */
    public function setLotNumber(?\TKusy\Hl7Fhir\R5\StringType $lotNumber = null)
    {
        $this->lotNumber = $lotNumber;
        return $this;
    }

    /**
     * Gets as serialNumber
     *
     * The serial number assigned by the organization when the device was manufactured.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $serialNumber
     * @return self
     */
    public function setSerialNumber(?\TKusy\Hl7Fhir\R5\StringType $serialNumber = null)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Adds as name
     *
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceNameType $name
     */
    public function addToName(\TKusy\Hl7Fhir\R5\DeviceNameType $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
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
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
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
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\DeviceNameType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This represents the manufacturer's name of the device as provided by the device, from a UDI label, or by a person describing the Device. This typically would be used when a person provides the name(s) or when the device represents one of the names available from DeviceDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\DeviceNameType[] $name
     * @return self
     */
    public function setName(array $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as modelNumber
     *
     * The manufacturer's model number for the device.
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
     * The manufacturer's model number for the device.
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
     * Adds as category
     *
     * Devices may be associated with one or more categories.
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
     * Devices may be associated with one or more categories.
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
     * Devices may be associated with one or more categories.
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
     * Devices may be associated with one or more categories.
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
     * Devices may be associated with one or more categories.
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
     * Adds as type
     *
     * The kind or type of device. A device instance may have more than one type - in which case those are the types that apply to the specific instance of the device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The kind or type of device. A device instance may have more than one type - in which case those are the types that apply to the specific instance of the device.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The kind or type of device. A device instance may have more than one type - in which case those are the types that apply to the specific instance of the device.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The kind or type of device. A device instance may have more than one type - in which case those are the types that apply to the specific instance of the device.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The kind or type of device. A device instance may have more than one type - in which case those are the types that apply to the specific instance of the device.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as version
     *
     * The actual design of the device or software version running on the device.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceVersionType $version
     */
    public function addToVersion(\TKusy\Hl7Fhir\R5\DeviceVersionType $version)
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
     * @return \TKusy\Hl7Fhir\R5\DeviceVersionType[]
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
     * @param \TKusy\Hl7Fhir\R5\DeviceVersionType[] $version
     * @return self
     */
    public function setVersion(array $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as conformsTo
     *
     * Identifies the standards, specifications, or formal guidances for the capabilities supported by the device. The device may be certified as conformant to these specifications e.g., communication, performance, process, measurement, or specialization standards.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DeviceConformsToType $conformsTo
     */
    public function addToConformsTo(\TKusy\Hl7Fhir\R5\DeviceConformsToType $conformsTo)
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
     * @return \TKusy\Hl7Fhir\R5\DeviceConformsToType[]
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
     * @param \TKusy\Hl7Fhir\R5\DeviceConformsToType[] $conformsTo
     * @return self
     */
    public function setConformsTo(array $conformsTo = null)
    {
        $this->conformsTo = $conformsTo;
        return $this;
    }

    /**
     * Adds as property
     *
     * Static or essentially fixed characteristics or features of the device (e.g., time or timing attributes, resolution, accuracy, intended use or instructions for use, and physical attributes) that are not otherwise captured in more specific attributes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DevicePropertyType $property
     */
    public function addToProperty(\TKusy\Hl7Fhir\R5\DevicePropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * Static or essentially fixed characteristics or features of the device (e.g., time or timing attributes, resolution, accuracy, intended use or instructions for use, and physical attributes) that are not otherwise captured in more specific attributes.
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
     * Static or essentially fixed characteristics or features of the device (e.g., time or timing attributes, resolution, accuracy, intended use or instructions for use, and physical attributes) that are not otherwise captured in more specific attributes.
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
     * Static or essentially fixed characteristics or features of the device (e.g., time or timing attributes, resolution, accuracy, intended use or instructions for use, and physical attributes) that are not otherwise captured in more specific attributes.
     *
     * @return \TKusy\Hl7Fhir\R5\DevicePropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * Static or essentially fixed characteristics or features of the device (e.g., time or timing attributes, resolution, accuracy, intended use or instructions for use, and physical attributes) that are not otherwise captured in more specific attributes.
     *
     * @param \TKusy\Hl7Fhir\R5\DevicePropertyType[] $property
     * @return self
     */
    public function setProperty(array $property = null)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Gets as mode
     *
     * The designated condition for performing a task with the device.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * The designated condition for performing a task with the device.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $mode
     * @return self
     */
    public function setMode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Gets as cycle
     *
     * The series of occurrences that repeats during the operation of the device.
     *
     * @return \TKusy\Hl7Fhir\R5\CountType
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Sets a new cycle
     *
     * The series of occurrences that repeats during the operation of the device.
     *
     * @param \TKusy\Hl7Fhir\R5\CountType $cycle
     * @return self
     */
    public function setCycle(?\TKusy\Hl7Fhir\R5\CountType $cycle = null)
    {
        $this->cycle = $cycle;
        return $this;
    }

    /**
     * Gets as duration
     *
     * A measurement of time during the device's operation (e.g., days, hours, mins, etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * A measurement of time during the device's operation (e.g., days, hours, mins, etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\DurationType $duration
     * @return self
     */
    public function setDuration(?\TKusy\Hl7Fhir\R5\DurationType $duration = null)
    {
        $this->duration = $duration;
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
     * Gets as location
     *
     * The place where the device can be found.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as url
     *
     * A network address on which the device may be contacted directly.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
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
     * @param \TKusy\Hl7Fhir\R5\UriType $url
     * @return self
     */
    public function setUrl(?\TKusy\Hl7Fhir\R5\UriType $url = null)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * Technical endpoints providing access to services provided by the device defined at this resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $endpoint
     */
    public function addToEndpoint(\TKusy\Hl7Fhir\R5\ReferenceType $endpoint)
    {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * isset endpoint
     *
     * Technical endpoints providing access to services provided by the device defined at this resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndpoint($index)
    {
        return isset($this->endpoint[$index]);
    }

    /**
     * unset endpoint
     *
     * Technical endpoints providing access to services provided by the device defined at this resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndpoint($index)
    {
        unset($this->endpoint[$index]);
    }

    /**
     * Gets as endpoint
     *
     * Technical endpoints providing access to services provided by the device defined at this resource.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Sets a new endpoint
     *
     * Technical endpoints providing access to services provided by the device defined at this resource.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint = null)
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    /**
     * Adds as gateway
     *
     * The linked device acting as a communication controller, data collector, translator, or concentrator for the current device (e.g., mobile phone application that relays a blood pressure device's data).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $gateway
     */
    public function addToGateway(\TKusy\Hl7Fhir\R5\CodeableReferenceType $gateway)
    {
        $this->gateway[] = $gateway;
        return $this;
    }

    /**
     * isset gateway
     *
     * The linked device acting as a communication controller, data collector, translator, or concentrator for the current device (e.g., mobile phone application that relays a blood pressure device's data).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGateway($index)
    {
        return isset($this->gateway[$index]);
    }

    /**
     * unset gateway
     *
     * The linked device acting as a communication controller, data collector, translator, or concentrator for the current device (e.g., mobile phone application that relays a blood pressure device's data).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGateway($index)
    {
        unset($this->gateway[$index]);
    }

    /**
     * Gets as gateway
     *
     * The linked device acting as a communication controller, data collector, translator, or concentrator for the current device (e.g., mobile phone application that relays a blood pressure device's data).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Sets a new gateway
     *
     * The linked device acting as a communication controller, data collector, translator, or concentrator for the current device (e.g., mobile phone application that relays a blood pressure device's data).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $gateway
     * @return self
     */
    public function setGateway(array $gateway = null)
    {
        $this->gateway = $gateway;
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
     * Adds as safety
     *
     * Provides additional safety characteristics about a medical device. For example devices containing latex.
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $safety
     * @return self
     */
    public function setSafety(array $safety = null)
    {
        $this->safety = $safety;
        return $this;
    }

    /**
     * Gets as parent
     *
     * The higher level or encompassing device that this device is a logical part of.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * The higher level or encompassing device that this device is a logical part of.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $parent
     * @return self
     */
    public function setParent(?\TKusy\Hl7Fhir\R5\ReferenceType $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }


}

