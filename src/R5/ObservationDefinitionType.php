<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ObservationDefinitionType
 *
 * Set of definitional characteristics for a kind of observation or measurement produced or consumed by an orderable health care service.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ObservationDefinition
 */
class ObservationDefinitionType extends MetadataResourceType
{

    /**
     * An absolute URL that is used to identify this ObservationDefinition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this ObservationDefinition is (or will be) published. The URL SHOULD include the major version of the ObservationDefinition. For more information see Technical and Business Versions.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * Business identifiers assigned to this ObservationDefinition. by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the ObservationDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the ObservationDefinition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $versionAlgorithmString
     */
    private $versionAlgorithmString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $versionAlgorithmCoding
     */
    private $versionAlgorithmCoding = null;

    /**
     * A natural language name identifying the ObservationDefinition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The current state of the ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A flag to indicate that this ObservationDefinition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the ObservationDefinition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the ObservationDefinition changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * Helps establish the "authority/credibility" of the ObservationDefinition. May also allow for contact.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $publisher
     */
    private $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * A free text natural language description of the ObservationDefinition from the consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate ObservationDefinition instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A jurisdiction in which the ObservationDefinition is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explains why this ObservationDefinition is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * Copyright statement relating to the ObservationDefinition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * A short string (<50 characters), suitable for inclusion in a page footer that identifies the copyright holder, effective period, and optionally whether rights are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $copyrightLabel
     */
    private $copyrightLabel = null;

    /**
     * The date on which the asset content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $approvalDate
     */
    private $approvalDate = null;

    /**
     * The date on which the asset content was last reviewed. Review happens periodically after that, but doesn't change the original approval date.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $lastReviewDate
     */
    private $lastReviewDate = null;

    /**
     * The period during which the ObservationDefinition content was or is planned to be effective.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is adhered to in whole or in part by this definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $derivedFromCanonical
     */
    private $derivedFromCanonical = null;

    /**
     * The URL pointing to an externally-defined observation definition, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $derivedFromUri
     */
    private $derivedFromUri = null;

    /**
     * A code that describes the intended kind of subject of Observation instances conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subject
     */
    private $subject = null;

    /**
     * The type of individual/organization/device that is expected to act upon instances of this definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $performerType
     */
    private $performerType = null;

    /**
     * A code that classifies the general type of observation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Describes what will be observed. Sometimes this is called the observation "name".
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\ObservationDataTypeType[] $permittedDataType
     */
    private $permittedDataType = null;

    /**
     * Multiple results allowed for observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $multipleResultsAllowed
     */
    private $multipleResultsAllowed = null;

    /**
     * The site on the subject's body where the observation is to be made.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite
     */
    private $bodySite = null;

    /**
     * The method or technique used to perform the observation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     */
    private $method = null;

    /**
     * The kind of specimen that this type of observation is produced on.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $specimen
     */
    private $specimen = null;

    /**
     * The measurement model of device or actual device used to produce observations of this type.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $device
     */
    private $device = null;

    /**
     * The preferred name to be used when reporting the results of observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $preferredReportName
     */
    private $preferredReportName = null;

    /**
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $permittedUnit
     */
    private $permittedUnit = null;

    /**
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @var \TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType[] $qualifiedValue
     */
    private $qualifiedValue = null;

    /**
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $hasMember
     */
    private $hasMember = null;

    /**
     * Some observations have multiple component observations, expressed as separate code value pairs.
     *
     * @var \TKusy\Hl7Fhir\R5\ObservationDefinitionComponentType[] $component
     */
    private $component = null;

    /**
     * Gets as url
     *
     * An absolute URL that is used to identify this ObservationDefinition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this ObservationDefinition is (or will be) published. The URL SHOULD include the major version of the ObservationDefinition. For more information see Technical and Business Versions.
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
     * An absolute URL that is used to identify this ObservationDefinition when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this ObservationDefinition is (or will be) published. The URL SHOULD include the major version of the ObservationDefinition. For more information see Technical and Business Versions.
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
     * Gets as identifier
     *
     * Business identifiers assigned to this ObservationDefinition. by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Business identifiers assigned to this ObservationDefinition. by the performer and/or other systems. These identifiers remain constant as the resource is updated and propagates from server to server.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as version
     *
     * The identifier that is used to identify this version of the ObservationDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the ObservationDefinition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The identifier that is used to identify this version of the ObservationDefinition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the ObservationDefinition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions are orderable.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $version
     * @return self
     */
    public function setVersion(?\TKusy\Hl7Fhir\R5\StringType $version = null)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as versionAlgorithmString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getVersionAlgorithmString()
    {
        return $this->versionAlgorithmString;
    }

    /**
     * Sets a new versionAlgorithmString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $versionAlgorithmString
     * @return self
     */
    public function setVersionAlgorithmString(?\TKusy\Hl7Fhir\R5\StringType $versionAlgorithmString = null)
    {
        $this->versionAlgorithmString = $versionAlgorithmString;
        return $this;
    }

    /**
     * Gets as versionAlgorithmCoding
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getVersionAlgorithmCoding()
    {
        return $this->versionAlgorithmCoding;
    }

    /**
     * Sets a new versionAlgorithmCoding
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $versionAlgorithmCoding
     * @return self
     */
    public function setVersionAlgorithmCoding(?\TKusy\Hl7Fhir\R5\CodingType $versionAlgorithmCoding = null)
    {
        $this->versionAlgorithmCoding = $versionAlgorithmCoding;
        return $this;
    }

    /**
     * Gets as name
     *
     * A natural language name identifying the ObservationDefinition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the ObservationDefinition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * Gets as title
     *
     * A short, descriptive, user-friendly title for the ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short, descriptive, user-friendly title for the ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $title
     * @return self
     */
    public function setTitle(?\TKusy\Hl7Fhir\R5\StringType $title = null)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of the ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as experimental
     *
     * A flag to indicate that this ObservationDefinition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Sets a new experimental
     *
     * A flag to indicate that this ObservationDefinition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $experimental
     * @return self
     */
    public function setExperimental(?\TKusy\Hl7Fhir\R5\BooleanType $experimental = null)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the ObservationDefinition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the ObservationDefinition changes.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date (and optionally time) when the ObservationDefinition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the ObservationDefinition changes.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as publisher
     *
     * Helps establish the "authority/credibility" of the ObservationDefinition. May also allow for contact.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * Helps establish the "authority/credibility" of the ObservationDefinition. May also allow for contact.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $publisher
     * @return self
     */
    public function setPublisher(?\TKusy\Hl7Fhir\R5\StringType $publisher = null)
    {
        $this->publisher = $publisher;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R5\ContactDetailType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * Contact details to assist a user in finding and communicating with the publisher.
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
     * Contact details to assist a user in finding and communicating with the publisher.
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
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $contact
     * @return self
     */
    public function setContact(array $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as description
     *
     * A free text natural language description of the ObservationDefinition from the consumer's perspective.
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
     * A free text natural language description of the ObservationDefinition from the consumer's perspective.
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
     * Adds as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate ObservationDefinition instances.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UsageContextType $useContext
     */
    public function addToUseContext(\TKusy\Hl7Fhir\R5\UsageContextType $useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * isset useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate ObservationDefinition instances.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUseContext($index)
    {
        return isset($this->useContext[$index]);
    }

    /**
     * unset useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate ObservationDefinition instances.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUseContext($index)
    {
        unset($this->useContext[$index]);
    }

    /**
     * Gets as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate ObservationDefinition instances.
     *
     * @return \TKusy\Hl7Fhir\R5\UsageContextType[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Sets a new useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate ObservationDefinition instances.
     *
     * @param \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     * @return self
     */
    public function setUseContext(array $useContext = null)
    {
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * Adds as jurisdiction
     *
     * A jurisdiction in which the ObservationDefinition is intended to be used.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7Fhir\R5\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * isset jurisdiction
     *
     * A jurisdiction in which the ObservationDefinition is intended to be used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdiction($index)
    {
        return isset($this->jurisdiction[$index]);
    }

    /**
     * unset jurisdiction
     *
     * A jurisdiction in which the ObservationDefinition is intended to be used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdiction($index)
    {
        unset($this->jurisdiction[$index]);
    }

    /**
     * Gets as jurisdiction
     *
     * A jurisdiction in which the ObservationDefinition is intended to be used.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * A jurisdiction in which the ObservationDefinition is intended to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     * @return self
     */
    public function setJurisdiction(array $jurisdiction = null)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as purpose
     *
     * Explains why this ObservationDefinition is needed and why it has been designed as it has.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Explains why this ObservationDefinition is needed and why it has been designed as it has.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     * @return self
     */
    public function setPurpose(?\TKusy\Hl7Fhir\R5\MarkdownType $purpose = null)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * Copyright statement relating to the ObservationDefinition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * Copyright statement relating to the ObservationDefinition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $copyright
     * @return self
     */
    public function setCopyright(?\TKusy\Hl7Fhir\R5\MarkdownType $copyright = null)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Gets as copyrightLabel
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that identifies the copyright holder, effective period, and optionally whether rights are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCopyrightLabel()
    {
        return $this->copyrightLabel;
    }

    /**
     * Sets a new copyrightLabel
     *
     * A short string (<50 characters), suitable for inclusion in a page footer that identifies the copyright holder, effective period, and optionally whether rights are resctricted. (e.g. 'All rights reserved', 'Some rights reserved').
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $copyrightLabel
     * @return self
     */
    public function setCopyrightLabel(?\TKusy\Hl7Fhir\R5\StringType $copyrightLabel = null)
    {
        $this->copyrightLabel = $copyrightLabel;
        return $this;
    }

    /**
     * Gets as approvalDate
     *
     * The date on which the asset content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    /**
     * Sets a new approvalDate
     *
     * The date on which the asset content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $approvalDate
     * @return self
     */
    public function setApprovalDate(?\TKusy\Hl7Fhir\R5\DateType $approvalDate = null)
    {
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * Gets as lastReviewDate
     *
     * The date on which the asset content was last reviewed. Review happens periodically after that, but doesn't change the original approval date.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * Sets a new lastReviewDate
     *
     * The date on which the asset content was last reviewed. Review happens periodically after that, but doesn't change the original approval date.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $lastReviewDate
     * @return self
     */
    public function setLastReviewDate(?\TKusy\Hl7Fhir\R5\DateType $lastReviewDate = null)
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * The period during which the ObservationDefinition content was or is planned to be effective.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The period during which the ObservationDefinition content was or is planned to be effective.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Adds as derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is adhered to in whole or in part by this definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $derivedFromCanonical
     */
    public function addToDerivedFromCanonical(\TKusy\Hl7Fhir\R5\CanonicalType $derivedFromCanonical)
    {
        $this->derivedFromCanonical[] = $derivedFromCanonical;
        return $this;
    }

    /**
     * isset derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is adhered to in whole or in part by this definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFromCanonical($index)
    {
        return isset($this->derivedFromCanonical[$index]);
    }

    /**
     * unset derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is adhered to in whole or in part by this definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFromCanonical($index)
    {
        unset($this->derivedFromCanonical[$index]);
    }

    /**
     * Gets as derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is adhered to in whole or in part by this definition.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getDerivedFromCanonical()
    {
        return $this->derivedFromCanonical;
    }

    /**
     * Sets a new derivedFromCanonical
     *
     * The canonical URL pointing to another FHIR-defined ObservationDefinition that is adhered to in whole or in part by this definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $derivedFromCanonical
     * @return self
     */
    public function setDerivedFromCanonical(array $derivedFromCanonical = null)
    {
        $this->derivedFromCanonical = $derivedFromCanonical;
        return $this;
    }

    /**
     * Adds as derivedFromUri
     *
     * The URL pointing to an externally-defined observation definition, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $derivedFromUri
     */
    public function addToDerivedFromUri(\TKusy\Hl7Fhir\R5\UriType $derivedFromUri)
    {
        $this->derivedFromUri[] = $derivedFromUri;
        return $this;
    }

    /**
     * isset derivedFromUri
     *
     * The URL pointing to an externally-defined observation definition, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFromUri($index)
    {
        return isset($this->derivedFromUri[$index]);
    }

    /**
     * unset derivedFromUri
     *
     * The URL pointing to an externally-defined observation definition, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFromUri($index)
    {
        unset($this->derivedFromUri[$index]);
    }

    /**
     * Gets as derivedFromUri
     *
     * The URL pointing to an externally-defined observation definition, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getDerivedFromUri()
    {
        return $this->derivedFromUri;
    }

    /**
     * Sets a new derivedFromUri
     *
     * The URL pointing to an externally-defined observation definition, guideline or other definition that is adhered to in whole or in part by this definition.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $derivedFromUri
     * @return self
     */
    public function setDerivedFromUri(array $derivedFromUri = null)
    {
        $this->derivedFromUri = $derivedFromUri;
        return $this;
    }

    /**
     * Adds as subject
     *
     * A code that describes the intended kind of subject of Observation instances conforming to this ObservationDefinition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subject
     */
    public function addToSubject(\TKusy\Hl7Fhir\R5\CodeableConceptType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * A code that describes the intended kind of subject of Observation instances conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * A code that describes the intended kind of subject of Observation instances conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * A code that describes the intended kind of subject of Observation instances conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * A code that describes the intended kind of subject of Observation instances conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $subject
     * @return self
     */
    public function setSubject(array $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as performerType
     *
     * The type of individual/organization/device that is expected to act upon instances of this definition.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * Sets a new performerType
     *
     * The type of individual/organization/device that is expected to act upon instances of this definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $performerType
     * @return self
     */
    public function setPerformerType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $performerType = null)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Adds as category
     *
     * A code that classifies the general type of observation.
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
     * A code that classifies the general type of observation.
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
     * A code that classifies the general type of observation.
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
     * A code that classifies the general type of observation.
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
     * A code that classifies the general type of observation.
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
     * Gets as code
     *
     * Describes what will be observed. Sometimes this is called the observation "name".
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Describes what will be observed. Sometimes this is called the observation "name".
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R5\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ObservationDataTypeType $permittedDataType
     */
    public function addToPermittedDataType(\TKusy\Hl7Fhir\R5\ObservationDataTypeType $permittedDataType)
    {
        $this->permittedDataType[] = $permittedDataType;
        return $this;
    }

    /**
     * isset permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPermittedDataType($index)
    {
        return isset($this->permittedDataType[$index]);
    }

    /**
     * unset permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPermittedDataType($index)
    {
        unset($this->permittedDataType[$index]);
    }

    /**
     * Gets as permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\ObservationDataTypeType[]
     */
    public function getPermittedDataType()
    {
        return $this->permittedDataType;
    }

    /**
     * Sets a new permittedDataType
     *
     * The data types allowed for the value element of the instance observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\ObservationDataTypeType[] $permittedDataType
     * @return self
     */
    public function setPermittedDataType(array $permittedDataType = null)
    {
        $this->permittedDataType = $permittedDataType;
        return $this;
    }

    /**
     * Gets as multipleResultsAllowed
     *
     * Multiple results allowed for observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getMultipleResultsAllowed()
    {
        return $this->multipleResultsAllowed;
    }

    /**
     * Sets a new multipleResultsAllowed
     *
     * Multiple results allowed for observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $multipleResultsAllowed
     * @return self
     */
    public function setMultipleResultsAllowed(?\TKusy\Hl7Fhir\R5\BooleanType $multipleResultsAllowed = null)
    {
        $this->multipleResultsAllowed = $multipleResultsAllowed;
        return $this;
    }

    /**
     * Gets as bodySite
     *
     * The site on the subject's body where the observation is to be made.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * The site on the subject's body where the observation is to be made.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite
     * @return self
     */
    public function setBodySite(?\TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as method
     *
     * The method or technique used to perform the observation.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * The method or technique used to perform the observation.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     * @return self
     */
    public function setMethod(?\TKusy\Hl7Fhir\R5\CodeableConceptType $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Adds as specimen
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $specimen
     */
    public function addToSpecimen(\TKusy\Hl7Fhir\R5\ReferenceType $specimen)
    {
        $this->specimen[] = $specimen;
        return $this;
    }

    /**
     * isset specimen
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecimen($index)
    {
        return isset($this->specimen[$index]);
    }

    /**
     * unset specimen
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecimen($index)
    {
        unset($this->specimen[$index]);
    }

    /**
     * Gets as specimen
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Sets a new specimen
     *
     * The kind of specimen that this type of observation is produced on.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $specimen
     * @return self
     */
    public function setSpecimen(array $specimen = null)
    {
        $this->specimen = $specimen;
        return $this;
    }

    /**
     * Adds as device
     *
     * The measurement model of device or actual device used to produce observations of this type.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $device
     */
    public function addToDevice(\TKusy\Hl7Fhir\R5\ReferenceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * The measurement model of device or actual device used to produce observations of this type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDevice($index)
    {
        return isset($this->device[$index]);
    }

    /**
     * unset device
     *
     * The measurement model of device or actual device used to produce observations of this type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDevice($index)
    {
        unset($this->device[$index]);
    }

    /**
     * Gets as device
     *
     * The measurement model of device or actual device used to produce observations of this type.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The measurement model of device or actual device used to produce observations of this type.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $device
     * @return self
     */
    public function setDevice(array $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as preferredReportName
     *
     * The preferred name to be used when reporting the results of observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPreferredReportName()
    {
        return $this->preferredReportName;
    }

    /**
     * Sets a new preferredReportName
     *
     * The preferred name to be used when reporting the results of observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $preferredReportName
     * @return self
     */
    public function setPreferredReportName(?\TKusy\Hl7Fhir\R5\StringType $preferredReportName = null)
    {
        $this->preferredReportName = $preferredReportName;
        return $this;
    }

    /**
     * Adds as permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $permittedUnit
     */
    public function addToPermittedUnit(\TKusy\Hl7Fhir\R5\CodingType $permittedUnit)
    {
        $this->permittedUnit[] = $permittedUnit;
        return $this;
    }

    /**
     * isset permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPermittedUnit($index)
    {
        return isset($this->permittedUnit[$index]);
    }

    /**
     * unset permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPermittedUnit($index)
    {
        unset($this->permittedUnit[$index]);
    }

    /**
     * Gets as permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getPermittedUnit()
    {
        return $this->permittedUnit;
    }

    /**
     * Sets a new permittedUnit
     *
     * Units allowed for the valueQuantity element in the instance observations conforming to this ObservationDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $permittedUnit
     * @return self
     */
    public function setPermittedUnit(array $permittedUnit = null)
    {
        $this->permittedUnit = $permittedUnit;
        return $this;
    }

    /**
     * Adds as qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType $qualifiedValue
     */
    public function addToQualifiedValue(\TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType $qualifiedValue)
    {
        $this->qualifiedValue[] = $qualifiedValue;
        return $this;
    }

    /**
     * isset qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQualifiedValue($index)
    {
        return isset($this->qualifiedValue[$index]);
    }

    /**
     * unset qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQualifiedValue($index)
    {
        unset($this->qualifiedValue[$index]);
    }

    /**
     * Gets as qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @return \TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType[]
     */
    public function getQualifiedValue()
    {
        return $this->qualifiedValue;
    }

    /**
     * Sets a new qualifiedValue
     *
     * A set of qualified values associated with a context and a set of conditions - provides a range for quantitative and ordinal observations and a collection of value sets for qualitative observations.
     *
     * @param \TKusy\Hl7Fhir\R5\ObservationDefinitionQualifiedValueType[] $qualifiedValue
     * @return self
     */
    public function setQualifiedValue(array $qualifiedValue = null)
    {
        $this->qualifiedValue = $qualifiedValue;
        return $this;
    }

    /**
     * Adds as hasMember
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $hasMember
     */
    public function addToHasMember(\TKusy\Hl7Fhir\R5\ReferenceType $hasMember)
    {
        $this->hasMember[] = $hasMember;
        return $this;
    }

    /**
     * isset hasMember
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHasMember($index)
    {
        return isset($this->hasMember[$index]);
    }

    /**
     * unset hasMember
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHasMember($index)
    {
        unset($this->hasMember[$index]);
    }

    /**
     * Gets as hasMember
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getHasMember()
    {
        return $this->hasMember;
    }

    /**
     * Sets a new hasMember
     *
     * This ObservationDefinition defines a group observation (e.g. a battery, a panel of tests, a set of vital sign measurements) that includes the target as a member of the group.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $hasMember
     * @return self
     */
    public function setHasMember(array $hasMember = null)
    {
        $this->hasMember = $hasMember;
        return $this;
    }

    /**
     * Adds as component
     *
     * Some observations have multiple component observations, expressed as separate code value pairs.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ObservationDefinitionComponentType $component
     */
    public function addToComponent(\TKusy\Hl7Fhir\R5\ObservationDefinitionComponentType $component)
    {
        $this->component[] = $component;
        return $this;
    }

    /**
     * isset component
     *
     * Some observations have multiple component observations, expressed as separate code value pairs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComponent($index)
    {
        return isset($this->component[$index]);
    }

    /**
     * unset component
     *
     * Some observations have multiple component observations, expressed as separate code value pairs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComponent($index)
    {
        unset($this->component[$index]);
    }

    /**
     * Gets as component
     *
     * Some observations have multiple component observations, expressed as separate code value pairs.
     *
     * @return \TKusy\Hl7Fhir\R5\ObservationDefinitionComponentType[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * Some observations have multiple component observations, expressed as separate code value pairs.
     *
     * @param \TKusy\Hl7Fhir\R5\ObservationDefinitionComponentType[] $component
     * @return self
     */
    public function setComponent(array $component = null)
    {
        $this->component = $component;
        return $this;
    }


}

