<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing LocationType
 *
 * Details and position information for a place where services are provided and resources and participants may be stored, found, contained, or accommodated.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Location
 */
class LocationType extends DomainResourceType
{

    /**
     * Unique code or number identifying the location to its users.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     *
     * @var \TKusy\Hl7Fhir\R5\LocationStatusType $status
     */
    private $status = null;

    /**
     * The operational status covers operation values most relevant to beds (but can also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping, and other activities like maintenance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType $operationalStatus
     */
    private $operationalStatus = null;

    /**
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A list of alternate names that the location is known as, or was known as, in the past.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $alias
     */
    private $alias = null;

    /**
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     *
     * @var \TKusy\Hl7Fhir\R5\LocationModeType $mode
     */
    private $mode = null;

    /**
     * Indicates the type of function performed at the location.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The contact details of communication devices available at the location. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @var \TKusy\Hl7Fhir\R5\ExtendedContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * Physical location.
     *
     * @var \TKusy\Hl7Fhir\R5\AddressType $address
     */
    private $address = null;

    /**
     * Physical form of the location, e.g. building, room, vehicle, road, virtual.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $form
     */
    private $form = null;

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     *
     * @var \TKusy\Hl7Fhir\R5\LocationPositionType $position
     */
    private $position = null;

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * Another Location of which this Location is physically a part of.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    private $partOf = null;

    /**
     * Collection of characteristics (attributes).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $characteristic
     */
    private $characteristic = null;

    /**
     * What days/times during a week is this location usually open, and any exceptions where the location is not available.
     *
     * @var \TKusy\Hl7Fhir\R5\AvailabilityType[] $hoursOfOperation
     */
    private $hoursOfOperation = null;

    /**
     * Connection details of a virtual service (e.g. shared conference call facility with dedicated number/details).
     *
     * @var \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[] $virtualService
     */
    private $virtualService = null;

    /**
     * Technical endpoints providing access to services operated for the location.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * Adds as identifier
     *
     * Unique code or number identifying the location to its users.
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
     * Unique code or number identifying the location to its users.
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
     * Unique code or number identifying the location to its users.
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
     * Unique code or number identifying the location to its users.
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
     * Unique code or number identifying the location to its users.
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
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     *
     * @return \TKusy\Hl7Fhir\R5\LocationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     *
     * @param \TKusy\Hl7Fhir\R5\LocationStatusType $status
     * @return self
     */
    public function setStatus(?\TKusy\Hl7Fhir\R5\LocationStatusType $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as operationalStatus
     *
     * The operational status covers operation values most relevant to beds (but can also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping, and other activities like maintenance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * Sets a new operationalStatus
     *
     * The operational status covers operation values most relevant to beds (but can also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping, and other activities like maintenance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $operationalStatus
     * @return self
     */
    public function setOperationalStatus(?\TKusy\Hl7Fhir\R5\CodingType $operationalStatus = null)
    {
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name of the location as used by humans. Does not need to be unique.
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
     * Name of the location as used by humans. Does not need to be unique.
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
     * Adds as alias
     *
     * A list of alternate names that the location is known as, or was known as, in the past.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $alias
     */
    public function addToAlias(\TKusy\Hl7Fhir\R5\StringType $alias)
    {
        $this->alias[] = $alias;
        return $this;
    }

    /**
     * isset alias
     *
     * A list of alternate names that the location is known as, or was known as, in the past.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlias($index)
    {
        return isset($this->alias[$index]);
    }

    /**
     * unset alias
     *
     * A list of alternate names that the location is known as, or was known as, in the past.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlias($index)
    {
        unset($this->alias[$index]);
    }

    /**
     * Gets as alias
     *
     * A list of alternate names that the location is known as, or was known as, in the past.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Sets a new alias
     *
     * A list of alternate names that the location is known as, or was known as, in the past.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $alias
     * @return self
     */
    public function setAlias(array $alias = null)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the Location, which helps in finding or referencing the place.
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
     * Description of the Location, which helps in finding or referencing the place.
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
     * Gets as mode
     *
     * Indicates whether a resource instance represents a specific location or a class of locations.
     *
     * @return \TKusy\Hl7Fhir\R5\LocationModeType
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * Indicates whether a resource instance represents a specific location or a class of locations.
     *
     * @param \TKusy\Hl7Fhir\R5\LocationModeType $mode
     * @return self
     */
    public function setMode(?\TKusy\Hl7Fhir\R5\LocationModeType $mode = null)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * Adds as type
     *
     * Indicates the type of function performed at the location.
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
     * Indicates the type of function performed at the location.
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
     * Indicates the type of function performed at the location.
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
     * Indicates the type of function performed at the location.
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
     * Indicates the type of function performed at the location.
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
     * Adds as contact
     *
     * The contact details of communication devices available at the location. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExtendedContactDetailType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R5\ExtendedContactDetailType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * The contact details of communication devices available at the location. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * The contact details of communication devices available at the location. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * The contact details of communication devices available at the location. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @return \TKusy\Hl7Fhir\R5\ExtendedContactDetailType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * The contact details of communication devices available at the location. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @param \TKusy\Hl7Fhir\R5\ExtendedContactDetailType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as address
     *
     * Physical location.
     *
     * @return \TKusy\Hl7Fhir\R5\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Physical location.
     *
     * @param \TKusy\Hl7Fhir\R5\AddressType $address
     * @return self
     */
    public function setAddress(?\TKusy\Hl7Fhir\R5\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as form
     *
     * Physical form of the location, e.g. building, room, vehicle, road, virtual.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * Physical form of the location, e.g. building, room, vehicle, road, virtual.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $form
     * @return self
     */
    public function setForm(?\TKusy\Hl7Fhir\R5\CodeableConceptType $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Gets as position
     *
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     *
     * @return \TKusy\Hl7Fhir\R5\LocationPositionType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     *
     * @param \TKusy\Hl7Fhir\R5\LocationPositionType $position
     * @return self
     */
    public function setPosition(?\TKusy\Hl7Fhir\R5\LocationPositionType $position = null)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as managingOrganization
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * Sets a new managingOrganization
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     * @return self
     */
    public function setManagingOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Gets as partOf
     *
     * Another Location of which this Location is physically a part of.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * Another Location of which this Location is physically a part of.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     * @return self
     */
    public function setPartOf(?\TKusy\Hl7Fhir\R5\ReferenceType $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * Collection of characteristics (attributes).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7Fhir\R5\CodeableConceptType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * Collection of characteristics (attributes).
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
     * Collection of characteristics (attributes).
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
     * Collection of characteristics (attributes).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * Collection of characteristics (attributes).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic = null)
    {
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Adds as hoursOfOperation
     *
     * What days/times during a week is this location usually open, and any exceptions where the location is not available.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AvailabilityType $hoursOfOperation
     */
    public function addToHoursOfOperation(\TKusy\Hl7Fhir\R5\AvailabilityType $hoursOfOperation)
    {
        $this->hoursOfOperation[] = $hoursOfOperation;
        return $this;
    }

    /**
     * isset hoursOfOperation
     *
     * What days/times during a week is this location usually open, and any exceptions where the location is not available.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHoursOfOperation($index)
    {
        return isset($this->hoursOfOperation[$index]);
    }

    /**
     * unset hoursOfOperation
     *
     * What days/times during a week is this location usually open, and any exceptions where the location is not available.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHoursOfOperation($index)
    {
        unset($this->hoursOfOperation[$index]);
    }

    /**
     * Gets as hoursOfOperation
     *
     * What days/times during a week is this location usually open, and any exceptions where the location is not available.
     *
     * @return \TKusy\Hl7Fhir\R5\AvailabilityType[]
     */
    public function getHoursOfOperation()
    {
        return $this->hoursOfOperation;
    }

    /**
     * Sets a new hoursOfOperation
     *
     * What days/times during a week is this location usually open, and any exceptions where the location is not available.
     *
     * @param \TKusy\Hl7Fhir\R5\AvailabilityType[] $hoursOfOperation
     * @return self
     */
    public function setHoursOfOperation(array $hoursOfOperation = null)
    {
        $this->hoursOfOperation = $hoursOfOperation;
        return $this;
    }

    /**
     * Adds as virtualService
     *
     * Connection details of a virtual service (e.g. shared conference call facility with dedicated number/details).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\VirtualServiceDetailType $virtualService
     */
    public function addToVirtualService(\TKusy\Hl7Fhir\R5\VirtualServiceDetailType $virtualService)
    {
        $this->virtualService[] = $virtualService;
        return $this;
    }

    /**
     * isset virtualService
     *
     * Connection details of a virtual service (e.g. shared conference call facility with dedicated number/details).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVirtualService($index)
    {
        return isset($this->virtualService[$index]);
    }

    /**
     * unset virtualService
     *
     * Connection details of a virtual service (e.g. shared conference call facility with dedicated number/details).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVirtualService($index)
    {
        unset($this->virtualService[$index]);
    }

    /**
     * Gets as virtualService
     *
     * Connection details of a virtual service (e.g. shared conference call facility with dedicated number/details).
     *
     * @return \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[]
     */
    public function getVirtualService()
    {
        return $this->virtualService;
    }

    /**
     * Sets a new virtualService
     *
     * Connection details of a virtual service (e.g. shared conference call facility with dedicated number/details).
     *
     * @param \TKusy\Hl7Fhir\R5\VirtualServiceDetailType[] $virtualService
     * @return self
     */
    public function setVirtualService(array $virtualService = null)
    {
        $this->virtualService = $virtualService;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * Technical endpoints providing access to services operated for the location.
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
     * Technical endpoints providing access to services operated for the location.
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
     * Technical endpoints providing access to services operated for the location.
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
     * Technical endpoints providing access to services operated for the location.
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
     * Technical endpoints providing access to services operated for the location.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint = null)
    {
        $this->endpoint = $endpoint;
        return $this;
    }


}

