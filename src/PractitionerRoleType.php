<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PractitionerRoleType
 *
 * A specific set of Roles/Locations/specialties/services that a practitioner may perform at an organization for a period of time.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: PractitionerRole
 */
class PractitionerRoleType extends DomainResourceType
{

    /**
     * Business Identifiers that are specific to a role/location.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Whether this practitioner role record is in active use.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $active
     */
    private $active = null;

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * Practitioner that is able to provide the defined services for the organization.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $practitioner
     */
    private $practitioner = null;

    /**
     * The organization where the Practitioner performs the roles associated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $organization
     */
    private $organization = null;

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     */
    private $code = [
        
    ];

    /**
     * Specific specialty of the practitioner.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $specialty
     */
    private $specialty = [
        
    ];

    /**
     * The location(s) at which this practitioner provides care.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $location
     */
    private $location = [
        
    ];

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $healthcareService
     */
    private $healthcareService = [
        
    ];

    /**
     * Contact details that are specific to the role/location/service.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     */
    private $telecom = [
        
    ];

    /**
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @var \TKusy\Hl7FhirR4\PractitionerRoleAvailableTimeType[] $availableTime
     */
    private $availableTime = [
        
    ];

    /**
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     *
     * @var \TKusy\Hl7FhirR4\PractitionerRoleNotAvailableType[] $notAvailable
     */
    private $notAvailable = [
        
    ];

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     *
     * @var \TKusy\Hl7FhirR4\StringType $availabilityExceptions
     */
    private $availabilityExceptions = null;

    /**
     * Technical endpoints providing access to services operated for the practitioner with this role.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     */
    private $endpoint = [
        
    ];

    /**
     * Adds as identifier
     *
     * Business Identifiers that are specific to a role/location.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as active
     *
     * Whether this practitioner role record is in active use.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Whether this practitioner role record is in active use.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $active
     * @return self
     */
    public function setActive(\TKusy\Hl7FhirR4\BooleanType $active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
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
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as practitioner
     *
     * Practitioner that is able to provide the defined services for the organization.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $practitioner
     * @return self
     */
    public function setPractitioner(\TKusy\Hl7FhirR4\ReferenceType $practitioner)
    {
        $this->practitioner = $practitioner;
        return $this;
    }

    /**
     * Gets as organization
     *
     * The organization where the Practitioner performs the roles associated.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $organization
     * @return self
     */
    public function setOrganization(\TKusy\Hl7FhirR4\ReferenceType $organization)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    public function addToCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as specialty
     *
     * Specific specialty of the practitioner.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $specialty
     */
    public function addToSpecialty(\TKusy\Hl7FhirR4\CodeableConceptType $specialty)
    {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * isset specialty
     *
     * Specific specialty of the practitioner.
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
     * Specific specialty of the practitioner.
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
     * Specific specialty of the practitioner.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Sets a new specialty
     *
     * Specific specialty of the practitioner.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $specialty
     * @return self
     */
    public function setSpecialty(array $specialty)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     */
    public function addToLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $location
     * @return self
     */
    public function setLocation(array $location)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $healthcareService
     */
    public function addToHealthcareService(\TKusy\Hl7FhirR4\ReferenceType $healthcareService)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $healthcareService
     * @return self
     */
    public function setHealthcareService(array $healthcareService)
    {
        $this->healthcareService = $healthcareService;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * Contact details that are specific to the role/location/service.
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
     * Contact details that are specific to the role/location/service.
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
     * Contact details that are specific to the role/location/service.
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
     * Contact details that are specific to the role/location/service.
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
     * Contact details that are specific to the role/location/service.
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
     * Adds as availableTime
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PractitionerRoleAvailableTimeType $availableTime
     */
    public function addToAvailableTime(\TKusy\Hl7FhirR4\PractitionerRoleAvailableTimeType $availableTime)
    {
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * isset availableTime
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailableTime($index)
    {
        return isset($this->availableTime[$index]);
    }

    /**
     * unset availableTime
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailableTime($index)
    {
        unset($this->availableTime[$index]);
    }

    /**
     * Gets as availableTime
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @return \TKusy\Hl7FhirR4\PractitionerRoleAvailableTimeType[]
     */
    public function getAvailableTime()
    {
        return $this->availableTime;
    }

    /**
     * Sets a new availableTime
     *
     * A collection of times the practitioner is available or performing this role at the location and/or healthcareservice.
     *
     * @param \TKusy\Hl7FhirR4\PractitionerRoleAvailableTimeType[] $availableTime
     * @return self
     */
    public function setAvailableTime(array $availableTime)
    {
        $this->availableTime = $availableTime;
        return $this;
    }

    /**
     * Adds as notAvailable
     *
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PractitionerRoleNotAvailableType $notAvailable
     */
    public function addToNotAvailable(\TKusy\Hl7FhirR4\PractitionerRoleNotAvailableType $notAvailable)
    {
        $this->notAvailable[] = $notAvailable;
        return $this;
    }

    /**
     * isset notAvailable
     *
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotAvailable($index)
    {
        return isset($this->notAvailable[$index]);
    }

    /**
     * unset notAvailable
     *
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotAvailable($index)
    {
        unset($this->notAvailable[$index]);
    }

    /**
     * Gets as notAvailable
     *
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     *
     * @return \TKusy\Hl7FhirR4\PractitionerRoleNotAvailableType[]
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }

    /**
     * Sets a new notAvailable
     *
     * The practitioner is not available or performing this role during this period of time due to the provided reason.
     *
     * @param \TKusy\Hl7FhirR4\PractitionerRoleNotAvailableType[] $notAvailable
     * @return self
     */
    public function setNotAvailable(array $notAvailable)
    {
        $this->notAvailable = $notAvailable;
        return $this;
    }

    /**
     * Gets as availabilityExceptions
     *
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
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
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
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
     * Technical endpoints providing access to services operated for the practitioner with this role.
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
     * Technical endpoints providing access to services operated for the practitioner with this role.
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
     * Technical endpoints providing access to services operated for the practitioner with this role.
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
     * Technical endpoints providing access to services operated for the practitioner with this role.
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
     * Technical endpoints providing access to services operated for the practitioner with this role.
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

