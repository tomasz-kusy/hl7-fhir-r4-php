<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing HealthcareServiceType
 *
 * The details of a healthcare service available at a location.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: HealthcareService
 */
class HealthcareServiceType extends DomainResourceType
{

    /**
     * External identifiers for this item.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * This flag is used to mark the record to not be used. This is not used when a center is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $active
     */
    private $active = null;

    /**
     * The organization that provides this healthcare service.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $providedBy
     */
    private $providedBy = null;

    /**
     * Identifies the broad category of service being performed or delivered.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * The specific type of service that may be delivered or performed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * Collection of specialties handled by the service site. This is more of a medical term.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $specialty
     */
    private $specialty = null;

    /**
     * The location(s) where this healthcare service may be provided.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $location
     */
    private $location = null;

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     *
     * @var \TKusy\Hl7FhirR4\StringType $comment
     */
    private $comment = null;

    /**
     * Extra details about the service that can't be placed in the other fields.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $extraDetails
     */
    private $extraDetails = null;

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $photo
     */
    private $photo = null;

    /**
     * List of contacts related to this specific healthcare service.
     *
     * @var \TKusy\Hl7FhirR4\ContactPointType[] $telecom
     */
    private $telecom = null;

    /**
     * The location(s) that this service is available to (not where the service is provided).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $coverageArea
     */
    private $coverageArea = null;

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $serviceProvisionCode
     */
    private $serviceProvisionCode = null;

    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     *
     * @var \TKusy\Hl7FhirR4\HealthcareServiceEligibilityType[] $eligibility
     */
    private $eligibility = null;

    /**
     * Programs that this service is applicable to.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $program
     */
    private $program = null;

    /**
     * Collection of characteristics (attributes).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Some services are specifically made available in multiple languages, this property permits a directory to declare the languages this is offered in. Typically this is only provided where a service operates in communities with mixed languages used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $communication
     */
    private $communication = null;

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $referralMethod
     */
    private $referralMethod = null;

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $appointmentRequired
     */
    private $appointmentRequired = null;

    /**
     * A collection of times that the Service Site is available.
     *
     * @var \TKusy\Hl7FhirR4\HealthcareServiceAvailableTimeType[] $availableTime
     */
    private $availableTime = null;

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     *
     * @var \TKusy\Hl7FhirR4\HealthcareServiceNotAvailableType[] $notAvailable
     */
    private $notAvailable = null;

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     *
     * @var \TKusy\Hl7FhirR4\StringType $availabilityExceptions
     */
    private $availabilityExceptions = null;

    /**
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $endpoint
     */
    private $endpoint = null;

    /**
     * Adds as identifier
     *
     * External identifiers for this item.
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
     * External identifiers for this item.
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
     * External identifiers for this item.
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
     * External identifiers for this item.
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
     * External identifiers for this item.
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
     * This flag is used to mark the record to not be used. This is not used when a center is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
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
     * This flag is used to mark the record to not be used. This is not used when a center is closed for maintenance, or for holidays, the notAvailable period is to be used for this.
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
     * Gets as providedBy
     *
     * The organization that provides this healthcare service.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * Sets a new providedBy
     *
     * The organization that provides this healthcare service.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $providedBy
     * @return self
     */
    public function setProvidedBy(\TKusy\Hl7FhirR4\ReferenceType $providedBy)
    {
        $this->providedBy = $providedBy;
        return $this;
    }

    /**
     * Adds as category
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Identifies the broad category of service being performed or delivered.
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
     * Identifies the broad category of service being performed or delivered.
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
     * Identifies the broad category of service being performed or delivered.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Identifies the broad category of service being performed or delivered.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as type
     *
     * The specific type of service that may be delivered or performed.
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
     * The specific type of service that may be delivered or performed.
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
     * The specific type of service that may be delivered or performed.
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
     * The specific type of service that may be delivered or performed.
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
     * The specific type of service that may be delivered or performed.
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
     * Adds as specialty
     *
     * Collection of specialties handled by the service site. This is more of a medical term.
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
     * Collection of specialties handled by the service site. This is more of a medical term.
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
     * Collection of specialties handled by the service site. This is more of a medical term.
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
     * Collection of specialties handled by the service site. This is more of a medical term.
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
     * Collection of specialties handled by the service site. This is more of a medical term.
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
     * The location(s) where this healthcare service may be provided.
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
     * The location(s) where this healthcare service may be provided.
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
     * The location(s) where this healthcare service may be provided.
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
     * The location(s) where this healthcare service may be provided.
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
     * The location(s) where this healthcare service may be provided.
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
     * Gets as name
     *
     * Further description of the service as it would be presented to a consumer while searching.
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
     * Further description of the service as it would be presented to a consumer while searching.
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
     * Gets as comment
     *
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     *
     * @param \TKusy\Hl7FhirR4\StringType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7FhirR4\StringType $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as extraDetails
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * Sets a new extraDetails
     *
     * Extra details about the service that can't be placed in the other fields.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $extraDetails
     * @return self
     */
    public function setExtraDetails(\TKusy\Hl7FhirR4\MarkdownType $extraDetails)
    {
        $this->extraDetails = $extraDetails;
        return $this;
    }

    /**
     * Gets as photo
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets a new photo
     *
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     *
     * @param \TKusy\Hl7FhirR4\AttachmentType $photo
     * @return self
     */
    public function setPhoto(\TKusy\Hl7FhirR4\AttachmentType $photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * Adds as telecom
     *
     * List of contacts related to this specific healthcare service.
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
     * List of contacts related to this specific healthcare service.
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
     * List of contacts related to this specific healthcare service.
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
     * List of contacts related to this specific healthcare service.
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
     * List of contacts related to this specific healthcare service.
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
     * Adds as coverageArea
     *
     * The location(s) that this service is available to (not where the service is provided).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $coverageArea
     */
    public function addToCoverageArea(\TKusy\Hl7FhirR4\ReferenceType $coverageArea)
    {
        $this->coverageArea[] = $coverageArea;
        return $this;
    }

    /**
     * isset coverageArea
     *
     * The location(s) that this service is available to (not where the service is provided).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverageArea($index)
    {
        return isset($this->coverageArea[$index]);
    }

    /**
     * unset coverageArea
     *
     * The location(s) that this service is available to (not where the service is provided).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverageArea($index)
    {
        unset($this->coverageArea[$index]);
    }

    /**
     * Gets as coverageArea
     *
     * The location(s) that this service is available to (not where the service is provided).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }

    /**
     * Sets a new coverageArea
     *
     * The location(s) that this service is available to (not where the service is provided).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $coverageArea
     * @return self
     */
    public function setCoverageArea(array $coverageArea)
    {
        $this->coverageArea = $coverageArea;
        return $this;
    }

    /**
     * Adds as serviceProvisionCode
     *
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $serviceProvisionCode
     */
    public function addToServiceProvisionCode(\TKusy\Hl7FhirR4\CodeableConceptType $serviceProvisionCode)
    {
        $this->serviceProvisionCode[] = $serviceProvisionCode;
        return $this;
    }

    /**
     * isset serviceProvisionCode
     *
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProvisionCode($index)
    {
        return isset($this->serviceProvisionCode[$index]);
    }

    /**
     * unset serviceProvisionCode
     *
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProvisionCode($index)
    {
        unset($this->serviceProvisionCode[$index]);
    }

    /**
     * Gets as serviceProvisionCode
     *
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getServiceProvisionCode()
    {
        return $this->serviceProvisionCode;
    }

    /**
     * Sets a new serviceProvisionCode
     *
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $serviceProvisionCode
     * @return self
     */
    public function setServiceProvisionCode(array $serviceProvisionCode)
    {
        $this->serviceProvisionCode = $serviceProvisionCode;
        return $this;
    }

    /**
     * Adds as eligibility
     *
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\HealthcareServiceEligibilityType $eligibility
     */
    public function addToEligibility(\TKusy\Hl7FhirR4\HealthcareServiceEligibilityType $eligibility)
    {
        $this->eligibility[] = $eligibility;
        return $this;
    }

    /**
     * isset eligibility
     *
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEligibility($index)
    {
        return isset($this->eligibility[$index]);
    }

    /**
     * unset eligibility
     *
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEligibility($index)
    {
        unset($this->eligibility[$index]);
    }

    /**
     * Gets as eligibility
     *
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     *
     * @return \TKusy\Hl7FhirR4\HealthcareServiceEligibilityType[]
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }

    /**
     * Sets a new eligibility
     *
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     *
     * @param \TKusy\Hl7FhirR4\HealthcareServiceEligibilityType[] $eligibility
     * @return self
     */
    public function setEligibility(array $eligibility)
    {
        $this->eligibility = $eligibility;
        return $this;
    }

    /**
     * Adds as program
     *
     * Programs that this service is applicable to.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $program
     */
    public function addToProgram(\TKusy\Hl7FhirR4\CodeableConceptType $program)
    {
        $this->program[] = $program;
        return $this;
    }

    /**
     * isset program
     *
     * Programs that this service is applicable to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgram($index)
    {
        return isset($this->program[$index]);
    }

    /**
     * unset program
     *
     * Programs that this service is applicable to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgram($index)
    {
        unset($this->program[$index]);
    }

    /**
     * Gets as program
     *
     * Programs that this service is applicable to.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets a new program
     *
     * Programs that this service is applicable to.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $program
     * @return self
     */
    public function setProgram(array $program)
    {
        $this->program = $program;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * Collection of characteristics (attributes).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7FhirR4\CodeableConceptType $characteristic)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Adds as communication
     *
     * Some services are specifically made available in multiple languages, this property permits a directory to declare the languages this is offered in. Typically this is only provided where a service operates in communities with mixed languages used.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $communication
     */
    public function addToCommunication(\TKusy\Hl7FhirR4\CodeableConceptType $communication)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * isset communication
     *
     * Some services are specifically made available in multiple languages, this property permits a directory to declare the languages this is offered in. Typically this is only provided where a service operates in communities with mixed languages used.
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
     * Some services are specifically made available in multiple languages, this property permits a directory to declare the languages this is offered in. Typically this is only provided where a service operates in communities with mixed languages used.
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
     * Some services are specifically made available in multiple languages, this property permits a directory to declare the languages this is offered in. Typically this is only provided where a service operates in communities with mixed languages used.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * Some services are specifically made available in multiple languages, this property permits a directory to declare the languages this is offered in. Typically this is only provided where a service operates in communities with mixed languages used.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $communication
     * @return self
     */
    public function setCommunication(array $communication)
    {
        $this->communication = $communication;
        return $this;
    }

    /**
     * Adds as referralMethod
     *
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $referralMethod
     */
    public function addToReferralMethod(\TKusy\Hl7FhirR4\CodeableConceptType $referralMethod)
    {
        $this->referralMethod[] = $referralMethod;
        return $this;
    }

    /**
     * isset referralMethod
     *
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferralMethod($index)
    {
        return isset($this->referralMethod[$index]);
    }

    /**
     * unset referralMethod
     *
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferralMethod($index)
    {
        unset($this->referralMethod[$index]);
    }

    /**
     * Gets as referralMethod
     *
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReferralMethod()
    {
        return $this->referralMethod;
    }

    /**
     * Sets a new referralMethod
     *
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $referralMethod
     * @return self
     */
    public function setReferralMethod(array $referralMethod)
    {
        $this->referralMethod = $referralMethod;
        return $this;
    }

    /**
     * Gets as appointmentRequired
     *
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getAppointmentRequired()
    {
        return $this->appointmentRequired;
    }

    /**
     * Sets a new appointmentRequired
     *
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $appointmentRequired
     * @return self
     */
    public function setAppointmentRequired(\TKusy\Hl7FhirR4\BooleanType $appointmentRequired)
    {
        $this->appointmentRequired = $appointmentRequired;
        return $this;
    }

    /**
     * Adds as availableTime
     *
     * A collection of times that the Service Site is available.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\HealthcareServiceAvailableTimeType $availableTime
     */
    public function addToAvailableTime(\TKusy\Hl7FhirR4\HealthcareServiceAvailableTimeType $availableTime)
    {
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * isset availableTime
     *
     * A collection of times that the Service Site is available.
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
     * A collection of times that the Service Site is available.
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
     * A collection of times that the Service Site is available.
     *
     * @return \TKusy\Hl7FhirR4\HealthcareServiceAvailableTimeType[]
     */
    public function getAvailableTime()
    {
        return $this->availableTime;
    }

    /**
     * Sets a new availableTime
     *
     * A collection of times that the Service Site is available.
     *
     * @param \TKusy\Hl7FhirR4\HealthcareServiceAvailableTimeType[] $availableTime
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
     * The HealthcareService is not available during this period of time due to the provided reason.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\HealthcareServiceNotAvailableType $notAvailable
     */
    public function addToNotAvailable(\TKusy\Hl7FhirR4\HealthcareServiceNotAvailableType $notAvailable)
    {
        $this->notAvailable[] = $notAvailable;
        return $this;
    }

    /**
     * isset notAvailable
     *
     * The HealthcareService is not available during this period of time due to the provided reason.
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
     * The HealthcareService is not available during this period of time due to the provided reason.
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
     * The HealthcareService is not available during this period of time due to the provided reason.
     *
     * @return \TKusy\Hl7FhirR4\HealthcareServiceNotAvailableType[]
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }

    /**
     * Sets a new notAvailable
     *
     * The HealthcareService is not available during this period of time due to the provided reason.
     *
     * @param \TKusy\Hl7FhirR4\HealthcareServiceNotAvailableType[] $notAvailable
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
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
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
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
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
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
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
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
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
     * Technical endpoints providing access to services operated for the specific healthcare services defined at this resource.
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

