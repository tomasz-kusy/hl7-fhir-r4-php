<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing LocationType
 *
 * Details and position information for a physical place where services are provided and resources and participants may be stored, found, contained, or accommodated.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: Location
 */
class LocationType extends DomainResourceType
{

    /**
     * Unique code or number identifying the location to its users.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     *
     * @var \TKusy\Hl7FhirR4\LocationStatusType $status
     */
    private $status = null;

    /**
     * The operational status covers operation values most relevant to beds (but can also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping, and other activities like maintenance.
     *
     * @var \TKusy\Hl7FhirR4\CodingType $operationalStatus
     */
    private $operationalStatus = null;

    /**
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A list of alternate names that the location is known as, or was known as, in the past.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $alias
     */
    private $alias = [
        
    ];

    /**
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     *
     * @var \TKusy\Hl7FhirR4\LocationModeType $mode
     */
    private $mode = null;

    /**
     * Indicates the type of function performed at the location.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     */
    private $type = [
        
    ];

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     */
    private $telecom = [
        
    ];

    /**
     * Physical location.
     *
     * @var \TKusy\Hl7FhirR4\AddressType $address
     */
    private $address = null;

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $physicalType
     */
    private $physicalType = null;

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     *
     * @var \TKusy\Hl7FhirR4\LocationPositionType $position
     */
    private $position = null;

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * Another Location of which this Location is physically a part of.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $partOf
     */
    private $partOf = null;

    /**
     * What days/times during a week is this location usually open.
     *
     * @var \TKusy\Hl7FhirR4\LocationHoursOfOperationType[] $hoursOfOperation
     */
    private $hoursOfOperation = [
        
    ];

    /**
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     *
     * @var \TKusy\Hl7FhirR4\StringType $availabilityExceptions
     */
    private $availabilityExceptions = null;

    /**
     * Technical endpoints providing access to services operated for the location.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     */
    private $endpoint = [
        
    ];

    /**
     * Adds as identifier
     *
     * Unique code or number identifying the location to its users.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status property covers the general availability of the resource, not the current value which may be covered by the operationStatus, or by a schedule/slots if they are configured for the location.
     *
     * @return \TKusy\Hl7FhirR4\LocationStatusType
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
     * @param \TKusy\Hl7FhirR4\LocationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\LocationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as operationalStatus
     *
     * The operational status covers operation values most relevant to beds (but can also apply to rooms/units/chairs/etc. such as an isolation unit/dialysis chair). This typically covers concepts such as contamination, housekeeping, and other activities like maintenance.
     *
     * @return \TKusy\Hl7FhirR4\CodingType
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
     * @param \TKusy\Hl7FhirR4\CodingType $operationalStatus
     * @return self
     */
    public function setOperationalStatus(\TKusy\Hl7FhirR4\CodingType $operationalStatus)
    {
        $this->operationalStatus = $operationalStatus;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name of the location as used by humans. Does not need to be unique.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7FhirR4\StringType $name)
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
     * @param \TKusy\Hl7FhirR4\StringType $alias
     */
    public function addToAlias(\TKusy\Hl7FhirR4\StringType $alias)
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
     * @return \TKusy\Hl7FhirR4\StringType[]
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
     * @param \TKusy\Hl7FhirR4\StringType[] $alias
     * @return self
     */
    public function setAlias(array $alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the Location, which helps in finding or referencing the place.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as mode
     *
     * Indicates whether a resource instance represents a specific location or a class of locations.
     *
     * @return \TKusy\Hl7FhirR4\LocationModeType
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
     * @param \TKusy\Hl7FhirR4\LocationModeType $mode
     * @return self
     */
    public function setMode(\TKusy\Hl7FhirR4\LocationModeType $mode)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ContactPointType $telecom
     */
    public function addToTelecom(\TKusy\Hl7FhirR4\ContactPointType $telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * isset telecom
     *
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelecom($index)
    {
        return isset($this->telecom[$index]);
    }

    /**
     * unset telecom
     *
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelecom($index)
    {
        unset($this->telecom[$index]);
    }

    /**
     * Gets as telecom
     *
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @return \TKusy\Hl7FhirR4\ContactPointType[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Sets a new telecom
     *
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @param \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     * @return self
     */
    public function setTelecom(array $telecom)
    {
        $this->telecom = $telecom;
        return $this;
    }

    /**
     * Gets as address
     *
     * Physical location.
     *
     * @return \TKusy\Hl7FhirR4\AddressType
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
     * @param \TKusy\Hl7FhirR4\AddressType $address
     * @return self
     */
    public function setAddress(\TKusy\Hl7FhirR4\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as physicalType
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPhysicalType()
    {
        return $this->physicalType;
    }

    /**
     * Sets a new physicalType
     *
     * Physical form of the location, e.g. building, room, vehicle, road.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $physicalType
     * @return self
     */
    public function setPhysicalType(\TKusy\Hl7FhirR4\CodeableConceptType $physicalType)
    {
        $this->physicalType = $physicalType;
        return $this;
    }

    /**
     * Gets as position
     *
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     *
     * @return \TKusy\Hl7FhirR4\LocationPositionType
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
     * @param \TKusy\Hl7FhirR4\LocationPositionType $position
     * @return self
     */
    public function setPosition(\TKusy\Hl7FhirR4\LocationPositionType $position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as managingOrganization
     *
     * The organization responsible for the provisioning and upkeep of the location.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $managingOrganization
     * @return self
     */
    public function setManagingOrganization(\TKusy\Hl7FhirR4\ReferenceType $managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Gets as partOf
     *
     * Another Location of which this Location is physically a part of.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $partOf
     * @return self
     */
    public function setPartOf(\TKusy\Hl7FhirR4\ReferenceType $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Adds as hoursOfOperation
     *
     * What days/times during a week is this location usually open.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\LocationHoursOfOperationType $hoursOfOperation
     */
    public function addToHoursOfOperation(\TKusy\Hl7FhirR4\LocationHoursOfOperationType $hoursOfOperation)
    {
        $this->hoursOfOperation[] = $hoursOfOperation;
        return $this;
    }

    /**
     * isset hoursOfOperation
     *
     * What days/times during a week is this location usually open.
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
     * What days/times during a week is this location usually open.
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
     * What days/times during a week is this location usually open.
     *
     * @return \TKusy\Hl7FhirR4\LocationHoursOfOperationType[]
     */
    public function getHoursOfOperation()
    {
        return $this->hoursOfOperation;
    }

    /**
     * Sets a new hoursOfOperation
     *
     * What days/times during a week is this location usually open.
     *
     * @param \TKusy\Hl7FhirR4\LocationHoursOfOperationType[] $hoursOfOperation
     * @return self
     */
    public function setHoursOfOperation(array $hoursOfOperation)
    {
        $this->hoursOfOperation = $hoursOfOperation;
        return $this;
    }

    /**
     * Gets as availabilityExceptions
     *
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }

    /**
     * Sets a new availabilityExceptions
     *
     * A description of when the locations opening ours are different to normal, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as detailed in the opening hours Times.
     *
     * @param \TKusy\Hl7FhirR4\StringType $availabilityExceptions
     * @return self
     */
    public function setAvailabilityExceptions(\TKusy\Hl7FhirR4\StringType $availabilityExceptions)
    {
        $this->availabilityExceptions = $availabilityExceptions;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * Technical endpoints providing access to services operated for the location.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $endpoint
     */
    public function addToEndpoint(\TKusy\Hl7FhirR4\ReferenceType $endpoint)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     * @return self
     */
    public function setEndpoint(array $endpoint)
    {
        $this->endpoint = $endpoint;
        return $this;
    }


}

