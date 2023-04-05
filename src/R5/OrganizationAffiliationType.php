<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing OrganizationAffiliationType
 *
 * Defines an affiliation/association/relationship between 2 distinct organizations, that is not a part-of relationship/sub-division relationship.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: OrganizationAffiliation
 */
class OrganizationAffiliationType extends DomainResourceType
{

    /**
     * Business identifiers that are specific to this role.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Whether this organization affiliation record is in active use.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $active
     */
    private $active = null;

    /**
     * The period during which the participatingOrganization is affiliated with the primary organization.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Organization where the role is available (primary organization/has members).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $organization
     */
    private $organization = null;

    /**
     * The Participating Organization provides/performs the role(s) defined by the code to the Primary Organization (e.g. providing services or is a member of).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $participatingOrganization
     */
    private $participatingOrganization = null;

    /**
     * The network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $network
     */
    private $network = null;

    /**
     * Definition of the role the participatingOrganization plays in the association.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $code
     */
    private $code = null;

    /**
     * Specific specialty of the participatingOrganization in the context of the role.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $specialty
     */
    private $specialty = null;

    /**
     * The location(s) at which the role occurs.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $location
     */
    private $location = null;

    /**
     * Healthcare services provided through the role.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $healthcareService
     */
    private $healthcareService = null;

    /**
     * The contact details of communication devices available at the participatingOrganization relevant to this Affiliation.
     *
     * @var \TKusy\Hl7Fhir\R5\ExtendedContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * Technical endpoints providing access to services operated for this role.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * Adds as identifier
     *
     * Business identifiers that are specific to this role.
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
     * Business identifiers that are specific to this role.
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
     * Business identifiers that are specific to this role.
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
     * Business identifiers that are specific to this role.
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
     * Business identifiers that are specific to this role.
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
     * Whether this organization affiliation record is in active use.
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
     * Whether this organization affiliation record is in active use.
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
     * The period during which the participatingOrganization is affiliated with the primary organization.
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
     * The period during which the participatingOrganization is affiliated with the primary organization.
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
     * Gets as organization
     *
     * Organization where the role is available (primary organization/has members).
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
     * Organization where the role is available (primary organization/has members).
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
     * Gets as participatingOrganization
     *
     * The Participating Organization provides/performs the role(s) defined by the code to the Primary Organization (e.g. providing services or is a member of).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getParticipatingOrganization()
    {
        return $this->participatingOrganization;
    }

    /**
     * Sets a new participatingOrganization
     *
     * The Participating Organization provides/performs the role(s) defined by the code to the Primary Organization (e.g. providing services or is a member of).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $participatingOrganization
     * @return self
     */
    public function setParticipatingOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $participatingOrganization = null)
    {
        $this->participatingOrganization = $participatingOrganization;
        return $this;
    }

    /**
     * Adds as network
     *
     * The network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $network
     */
    public function addToNetwork(\TKusy\Hl7Fhir\R5\ReferenceType $network)
    {
        $this->network[] = $network;
        return $this;
    }

    /**
     * isset network
     *
     * The network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNetwork($index)
    {
        return isset($this->network[$index]);
    }

    /**
     * unset network
     *
     * The network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNetwork($index)
    {
        unset($this->network[$index]);
    }

    /**
     * Gets as network
     *
     * The network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * The network in which the participatingOrganization provides the role's services (if defined) at the indicated locations (if defined).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $network
     * @return self
     */
    public function setNetwork(array $network = null)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Adds as code
     *
     * Definition of the role the participatingOrganization plays in the association.
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
     * Definition of the role the participatingOrganization plays in the association.
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
     * Definition of the role the participatingOrganization plays in the association.
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
     * Definition of the role the participatingOrganization plays in the association.
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
     * Definition of the role the participatingOrganization plays in the association.
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
     * Specific specialty of the participatingOrganization in the context of the role.
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
     * Specific specialty of the participatingOrganization in the context of the role.
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
     * Specific specialty of the participatingOrganization in the context of the role.
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
     * Specific specialty of the participatingOrganization in the context of the role.
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
     * Specific specialty of the participatingOrganization in the context of the role.
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
     * The location(s) at which the role occurs.
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
     * The location(s) at which the role occurs.
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
     * The location(s) at which the role occurs.
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
     * The location(s) at which the role occurs.
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
     * The location(s) at which the role occurs.
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
     * Healthcare services provided through the role.
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
     * Healthcare services provided through the role.
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
     * Healthcare services provided through the role.
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
     * Healthcare services provided through the role.
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
     * Healthcare services provided through the role.
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
     * The contact details of communication devices available at the participatingOrganization relevant to this Affiliation.
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
     * The contact details of communication devices available at the participatingOrganization relevant to this Affiliation.
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
     * The contact details of communication devices available at the participatingOrganization relevant to this Affiliation.
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
     * The contact details of communication devices available at the participatingOrganization relevant to this Affiliation.
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
     * The contact details of communication devices available at the participatingOrganization relevant to this Affiliation.
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
     * Adds as endpoint
     *
     * Technical endpoints providing access to services operated for this role.
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
     * Technical endpoints providing access to services operated for this role.
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
     * Technical endpoints providing access to services operated for this role.
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
     * Technical endpoints providing access to services operated for this role.
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
     * Technical endpoints providing access to services operated for this role.
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

