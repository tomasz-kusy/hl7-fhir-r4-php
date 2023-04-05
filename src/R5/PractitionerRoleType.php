<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PractitionerRoleType
 *
 * A specific set of Roles/Locations/specialties/services that a practitioner may perform at an organization for a period of time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: PractitionerRole
 */
class PractitionerRoleType extends DomainResourceType
{

    /**
     * Business Identifiers that are specific to a role/location.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether this practitioner role record is in active use. Some systems may use this property to mark non-active practitioners, such as those that are not currently employed.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $active
     */
    private $active = null;

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Practitioner that is able to provide the defined services for the organization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $practitioner
     */
    private $practitioner = null;

    /**
     * The organization where the Practitioner performs the roles associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $organization
     */
    private $organization = null;

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     */
    private $code = null;

    /**
     * The specialty of a practitioner that describes the functional role they are practicing at a given organization or location.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialty
     */
    private $specialty = null;

    /**
     * The location(s) at which this practitioner provides care.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $location
     */
    private $location = null;

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $healthcareService
     */
    private $healthcareService = null;

    /**
     * The contact details of communication devices available relevant to the specific PractitionerRole. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     *
     * @var \TKusy\Hl7Fhir\R5\ExtendedContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * Collection of characteristics (attributes).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $characteristic
     */
    private $characteristic = null;

    /**
     * A language the practitioner can use in patient communication. The practitioner may know several languages (listed in practitioner.communication), however these are the languages that could be advertised in a directory for a patient to search.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $communication
     */
    private $communication = null;

    /**
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @var \TKusy\Hl7Fhir\R5\AvailabilityType[] $availability
     */
    private $availability = null;

    /**
     * Technical endpoints providing access to services operated for the practitioner with this role. Commonly used for locating scheduling services, or identifying where to send referrals electronically.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * Adds as identifier
     *
     * Business Identifiers that are specific to a role/location.
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
     * Business Identifiers that are specific to a role/location.
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
     * Business Identifiers that are specific to a role/location.
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
     * Business Identifiers that are specific to a role/location.
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
     * Business Identifiers that are specific to a role/location.
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
     * Gets as active
     *
     * Whether this practitioner role record is in active use. Some systems may use this property to mark non-active practitioners, such as those that are not currently employed.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Whether this practitioner role record is in active use. Some systems may use this property to mark non-active practitioners, such as those that are not currently employed.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $active
     * @return self
     */
    public function setActive(?\TKusy\Hl7Fhir\R5\BooleanType $active = null)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as practitioner
     *
     * Practitioner that is able to provide the defined services for the organization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * Sets a new practitioner
     *
     * Practitioner that is able to provide the defined services for the organization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $practitioner
     * @return self
     */
    public function setPractitioner(?\TKusy\Hl7Fhir\R5\ReferenceType $practitioner = null)
    {
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * Gets as organization
     *
     * The organization where the Practitioner performs the roles associated.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * The organization where the Practitioner performs the roles associated.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $organization
     * @return self
     */
    public function setOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Adds as code
     *
     * Roles which this practitioner is authorized to perform for the organization.
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
     * Roles which this practitioner is authorized to perform for the organization.
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
     * Roles which this practitioner is authorized to perform for the organization.
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
     * Roles which this practitioner is authorized to perform for the organization.
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
     * Roles which this practitioner is authorized to perform for the organization.
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
     * Adds as specialty
     *
     * The specialty of a practitioner that describes the functional role they are practicing at a given organization or location.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $specialty
     */
    public function addToSpecialty(\TKusy\Hl7Fhir\R5\CodeableConceptType $specialty)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * isset specialty
     *
     * The specialty of a practitioner that describes the functional role they are practicing at a given organization or location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialty($index)
    {
        return isset($this->specialty[$index]);
    }

    /**
     * unset specialty
     *
     * The specialty of a practitioner that describes the functional role they are practicing at a given organization or location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialty($index)
    {
        unset($this->specialty[$index]);
    }

    /**
     * Gets as specialty
     *
     * The specialty of a practitioner that describes the functional role they are practicing at a given organization or location.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Sets a new specialty
     *
     * The specialty of a practitioner that describes the functional role they are practicing at a given organization or location.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialty
     * @return self
     */
    public function setSpecialty(array $specialty = null)
    {
        $this->specialty = $specialty;
        return $this;
    }

    /**
     * Adds as location
     *
     * The location(s) at which this practitioner provides care.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    public function addToLocation(\TKusy\Hl7Fhir\R5\ReferenceType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * The location(s) at which this practitioner provides care.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * The location(s) at which this practitioner provides care.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * The location(s) at which this practitioner provides care.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location(s) at which this practitioner provides care.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as healthcareService
     *
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $healthcareService
     */
    public function addToHealthcareService(\TKusy\Hl7Fhir\R5\ReferenceType $healthcareService)
    {
        $this->healthcareService[] = $healthcareService;
        return $this;
    }

    /**
     * isset healthcareService
     *
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHealthcareService($index)
    {
        return isset($this->healthcareService[$index]);
    }

    /**
     * unset healthcareService
     *
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHealthcareService($index)
    {
        unset($this->healthcareService[$index]);
    }

    /**
     * Gets as healthcareService
     *
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getHealthcareService()
    {
        return $this->healthcareService;
    }

    /**
     * Sets a new healthcareService
     *
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $healthcareService
     * @return self
     */
    public function setHealthcareService(array $healthcareService = null)
    {
        $this->healthcareService = $healthcareService;
        return $this;
    }

    /**
     * Adds as contact
     *
     * The contact details of communication devices available relevant to the specific PractitionerRole. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * The contact details of communication devices available relevant to the specific PractitionerRole. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * The contact details of communication devices available relevant to the specific PractitionerRole. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * The contact details of communication devices available relevant to the specific PractitionerRole. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * The contact details of communication devices available relevant to the specific PractitionerRole. This can include addresses, phone numbers, fax numbers, mobile numbers, email addresses and web sites.
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
     * Adds as communication
     *
     * A language the practitioner can use in patient communication. The practitioner may know several languages (listed in practitioner.communication), however these are the languages that could be advertised in a directory for a patient to search.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $communication
     */
    public function addToCommunication(\TKusy\Hl7Fhir\R5\CodeableConceptType $communication)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * isset communication
     *
     * A language the practitioner can use in patient communication. The practitioner may know several languages (listed in practitioner.communication), however these are the languages that could be advertised in a directory for a patient to search.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommunication($index)
    {
        return isset($this->communication[$index]);
    }

    /**
     * unset communication
     *
     * A language the practitioner can use in patient communication. The practitioner may know several languages (listed in practitioner.communication), however these are the languages that could be advertised in a directory for a patient to search.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommunication($index)
    {
        unset($this->communication[$index]);
    }

    /**
     * Gets as communication
     *
     * A language the practitioner can use in patient communication. The practitioner may know several languages (listed in practitioner.communication), however these are the languages that could be advertised in a directory for a patient to search.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * A language the practitioner can use in patient communication. The practitioner may know several languages (listed in practitioner.communication), however these are the languages that could be advertised in a directory for a patient to search.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $communication
     * @return self
     */
    public function setCommunication(array $communication = null)
    {
        $this->communication = $communication;
        return $this;
    }

    /**
     * Adds as availability
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AvailabilityType $availability
     */
    public function addToAvailability(\TKusy\Hl7Fhir\R5\AvailabilityType $availability)
    {
        $this->availability[] = $availability;
        return $this;
    }

    /**
     * isset availability
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailability($index)
    {
        return isset($this->availability[$index]);
    }

    /**
     * unset availability
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailability($index)
    {
        unset($this->availability[$index]);
    }

    /**
     * Gets as availability
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @return \TKusy\Hl7Fhir\R5\AvailabilityType[]
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @param \TKusy\Hl7Fhir\R5\AvailabilityType[] $availability
     * @return self
     */
    public function setAvailability(array $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * Adds as endpoint
     *
     * Technical endpoints providing access to services operated for the practitioner with this role. Commonly used for locating scheduling services, or identifying where to send referrals electronically.
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
     * Technical endpoints providing access to services operated for the practitioner with this role. Commonly used for locating scheduling services, or identifying where to send referrals electronically.
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
     * Technical endpoints providing access to services operated for the practitioner with this role. Commonly used for locating scheduling services, or identifying where to send referrals electronically.
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
     * Technical endpoints providing access to services operated for the practitioner with this role. Commonly used for locating scheduling services, or identifying where to send referrals electronically.
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
     * Technical endpoints providing access to services operated for the practitioner with this role. Commonly used for locating scheduling services, or identifying where to send referrals electronically.
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

