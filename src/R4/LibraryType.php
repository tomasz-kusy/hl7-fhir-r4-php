<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing LibraryType
 *
 * The Library resource is a general-purpose container for knowledge asset definitions. It can be used to describe and expose existing knowledge assets such as logic libraries and information model descriptions, as well as to describe a collection of knowledge assets.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Library
 */
class LibraryType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this library when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this library is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the library is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the library when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the library author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $version
     */
    private $version = null;

    /**
     * A natural language name identifying the library. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the library.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $title
     */
    private $title = null;

    /**
     * An explanatory or alternate title for the library giving additional information about its content.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $subtitle
     */
    private $subtitle = null;

    /**
     * The status of this library. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this library is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * Identifies the type of library such as a Logic Library, Model Definition, Asset Collection, or Module Definition.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A code or group definition that describes the intended subject of the contents of the library. (choose any one of subject*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $subjectCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * A code or group definition that describes the intended subject of the contents of the library. (choose any one of subject*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subjectReference
     */
    private $subjectReference = null;

    /**
     * The date (and optionally time) when the library was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the library changes.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the library.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $publisher
     */
    private $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @var \TKusy\Hl7Fhir\R4\ContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * A free text natural language description of the library from a consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
     *
     * @var \TKusy\Hl7Fhir\R4\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the library is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this library is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A detailed description of how the library is used from a clinical perspective.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $usage
     */
    private $usage = null;

    /**
     * A copyright statement relating to the library and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the library.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $approvalDate
     */
    private $approvalDate = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @var \TKusy\Hl7Fhir\R4\DateType $lastReviewDate
     */
    private $lastReviewDate = null;

    /**
     * The period during which the library content was or is planned to be in active use.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $topic
     */
    private $topic = null;

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     *
     * @var \TKusy\Hl7Fhir\R4\ContactDetailType[] $author
     */
    private $author = null;

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     *
     * @var \TKusy\Hl7Fhir\R4\ContactDetailType[] $editor
     */
    private $editor = null;

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     *
     * @var \TKusy\Hl7Fhir\R4\ContactDetailType[] $reviewer
     */
    private $reviewer = null;

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     *
     * @var \TKusy\Hl7Fhir\R4\ContactDetailType[] $endorser
     */
    private $endorser = null;

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     *
     * @var \TKusy\Hl7Fhir\R4\RelatedArtifactType[] $relatedArtifact
     */
    private $relatedArtifact = null;

    /**
     * The parameter element defines parameters used by the library.
     *
     * @var \TKusy\Hl7Fhir\R4\ParameterDefinitionType[] $parameter
     */
    private $parameter = null;

    /**
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     *
     * @var \TKusy\Hl7Fhir\R4\DataRequirementType[] $dataRequirement
     */
    private $dataRequirement = null;

    /**
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     *
     * @var \TKusy\Hl7Fhir\R4\AttachmentType[] $content
     */
    private $content = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this library when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this library is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the library is stored on different servers.
     *
     * @return \TKusy\Hl7Fhir\R4\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * An absolute URI that is used to identify this library when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this library is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the library is stored on different servers.
     *
     * @param \TKusy\Hl7Fhir\R4\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7Fhir\R4\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
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
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
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
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A formal identifier that is used to identify this library when it is represented in other formats, or referenced in a specification, model, design or an instance. e.g. CMS or NQF identifiers for a measure artifact. Note that at least one identifier is required for non-experimental active artifacts.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as version
     *
     * The identifier that is used to identify this version of the library when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the library author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The identifier that is used to identify this version of the library when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the library author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $version
     * @return self
     */
    public function setVersion(\TKusy\Hl7Fhir\R4\StringType $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as name
     *
     * A natural language name identifying the library. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A natural language name identifying the library. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short, descriptive, user-friendly title for the library.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short, descriptive, user-friendly title for the library.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7Fhir\R4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as subtitle
     *
     * An explanatory or alternate title for the library giving additional information about its content.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * An explanatory or alternate title for the library giving additional information about its content.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $subtitle
     * @return self
     */
    public function setSubtitle(\TKusy\Hl7Fhir\R4\StringType $subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this library. Enables tracking the life-cycle of the content.
     *
     * @return \TKusy\Hl7Fhir\R4\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of this library. Enables tracking the life-cycle of the content.
     *
     * @param \TKusy\Hl7Fhir\R4\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as experimental
     *
     * A Boolean value to indicate that this library is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Sets a new experimental
     *
     * A Boolean value to indicate that this library is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $experimental
     * @return self
     */
    public function setExperimental(\TKusy\Hl7Fhir\R4\BooleanType $experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * Gets as type
     *
     * Identifies the type of library such as a Logic Library, Model Definition, Asset Collection, or Module Definition.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the type of library such as a Logic Library, Model Definition, Asset Collection, or Module Definition.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as subjectCodeableConcept
     *
     * A code or group definition that describes the intended subject of the contents of the library. (choose any one of subject*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * Sets a new subjectCodeableConcept
     *
     * A code or group definition that describes the intended subject of the contents of the library. (choose any one of subject*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $subjectCodeableConcept
     * @return self
     */
    public function setSubjectCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $subjectCodeableConcept)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * Gets as subjectReference
     *
     * A code or group definition that describes the intended subject of the contents of the library. (choose any one of subject*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * Sets a new subjectReference
     *
     * A code or group definition that describes the intended subject of the contents of the library. (choose any one of subject*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subjectReference
     * @return self
     */
    public function setSubjectReference(\TKusy\Hl7Fhir\R4\ReferenceType $subjectReference)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the library was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the library changes.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date (and optionally time) when the library was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the library changes.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7Fhir\R4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as publisher
     *
     * The name of the organization or individual that published the library.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * The name of the organization or individual that published the library.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $publisher
     * @return self
     */
    public function setPublisher(\TKusy\Hl7Fhir\R4\StringType $publisher)
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
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType $contact
     */
    public function addToContact(\TKusy\Hl7Fhir\R4\ContactDetailType $contact)
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
     * @return \TKusy\Hl7Fhir\R4\ContactDetailType[]
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
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as description
     *
     * A free text natural language description of the library from a consumer's perspective.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A free text natural language description of the library from a consumer's perspective.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\UsageContextType $useContext
     */
    public function addToUseContext(\TKusy\Hl7Fhir\R4\UsageContextType $useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * isset useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
     *
     * @return \TKusy\Hl7Fhir\R4\UsageContextType[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Sets a new useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate library instances.
     *
     * @param \TKusy\Hl7Fhir\R4\UsageContextType[] $useContext
     * @return self
     */
    public function setUseContext(array $useContext)
    {
        $this->useContext = $useContext;
        return $this;
    }

    /**
     * Adds as jurisdiction
     *
     * A legal or geographic region in which the library is intended to be used.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7Fhir\R4\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * isset jurisdiction
     *
     * A legal or geographic region in which the library is intended to be used.
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
     * A legal or geographic region in which the library is intended to be used.
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
     * A legal or geographic region in which the library is intended to be used.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * A legal or geographic region in which the library is intended to be used.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $jurisdiction
     * @return self
     */
    public function setJurisdiction(array $jurisdiction)
    {
        $this->jurisdiction = $jurisdiction;
        return $this;
    }

    /**
     * Gets as purpose
     *
     * Explanation of why this library is needed and why it has been designed as it has.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Explanation of why this library is needed and why it has been designed as it has.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $purpose
     * @return self
     */
    public function setPurpose(\TKusy\Hl7Fhir\R4\MarkdownType $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as usage
     *
     * A detailed description of how the library is used from a clinical perspective.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A detailed description of how the library is used from a clinical perspective.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $usage
     * @return self
     */
    public function setUsage(\TKusy\Hl7Fhir\R4\StringType $usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * A copyright statement relating to the library and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the library.
     *
     * @return \TKusy\Hl7Fhir\R4\MarkdownType
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * A copyright statement relating to the library and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the library.
     *
     * @param \TKusy\Hl7Fhir\R4\MarkdownType $copyright
     * @return self
     */
    public function setCopyright(\TKusy\Hl7Fhir\R4\MarkdownType $copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Gets as approvalDate
     *
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @return \TKusy\Hl7Fhir\R4\DateType
     */
    public function getApprovalDate()
    {
        return $this->approvalDate;
    }

    /**
     * Sets a new approvalDate
     *
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @param \TKusy\Hl7Fhir\R4\DateType $approvalDate
     * @return self
     */
    public function setApprovalDate(\TKusy\Hl7Fhir\R4\DateType $approvalDate)
    {
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * Gets as lastReviewDate
     *
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @return \TKusy\Hl7Fhir\R4\DateType
     */
    public function getLastReviewDate()
    {
        return $this->lastReviewDate;
    }

    /**
     * Sets a new lastReviewDate
     *
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @param \TKusy\Hl7Fhir\R4\DateType $lastReviewDate
     * @return self
     */
    public function setLastReviewDate(\TKusy\Hl7Fhir\R4\DateType $lastReviewDate)
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * The period during which the library content was or is planned to be in active use.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The period during which the library content was or is planned to be in active use.
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\TKusy\Hl7Fhir\R4\PeriodType $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Adds as topic
     *
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $topic
     */
    public function addToTopic(\TKusy\Hl7Fhir\R4\CodeableConceptType $topic)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * isset topic
     *
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTopic($index)
    {
        return isset($this->topic[$index]);
    }

    /**
     * unset topic
     *
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTopic($index)
    {
        unset($this->topic[$index]);
    }

    /**
     * Gets as topic
     *
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * Descriptive topics related to the content of the library. Topics provide a high-level categorization of the library that can be useful for filtering and searching.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $topic
     * @return self
     */
    public function setTopic(array $topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Adds as author
     *
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType $author
     */
    public function addToAuthor(\TKusy\Hl7Fhir\R4\ContactDetailType $author)
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * isset author
     *
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthor($index)
    {
        return isset($this->author[$index]);
    }

    /**
     * unset author
     *
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthor($index)
    {
        unset($this->author[$index]);
    }

    /**
     * Gets as author
     *
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     *
     * @return \TKusy\Hl7Fhir\R4\ContactDetailType[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     *
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType[] $author
     * @return self
     */
    public function setAuthor(array $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as editor
     *
     * An individual or organization primarily responsible for internal coherence of the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType $editor
     */
    public function addToEditor(\TKusy\Hl7Fhir\R4\ContactDetailType $editor)
    {
        $this->editor[] = $editor;
        return $this;
    }

    /**
     * isset editor
     *
     * An individual or organization primarily responsible for internal coherence of the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEditor($index)
    {
        return isset($this->editor[$index]);
    }

    /**
     * unset editor
     *
     * An individual or organization primarily responsible for internal coherence of the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEditor($index)
    {
        unset($this->editor[$index]);
    }

    /**
     * Gets as editor
     *
     * An individual or organization primarily responsible for internal coherence of the content.
     *
     * @return \TKusy\Hl7Fhir\R4\ContactDetailType[]
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Sets a new editor
     *
     * An individual or organization primarily responsible for internal coherence of the content.
     *
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType[] $editor
     * @return self
     */
    public function setEditor(array $editor)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * Adds as reviewer
     *
     * An individual or organization primarily responsible for review of some aspect of the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType $reviewer
     */
    public function addToReviewer(\TKusy\Hl7Fhir\R4\ContactDetailType $reviewer)
    {
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * isset reviewer
     *
     * An individual or organization primarily responsible for review of some aspect of the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReviewer($index)
    {
        return isset($this->reviewer[$index]);
    }

    /**
     * unset reviewer
     *
     * An individual or organization primarily responsible for review of some aspect of the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReviewer($index)
    {
        unset($this->reviewer[$index]);
    }

    /**
     * Gets as reviewer
     *
     * An individual or organization primarily responsible for review of some aspect of the content.
     *
     * @return \TKusy\Hl7Fhir\R4\ContactDetailType[]
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * Sets a new reviewer
     *
     * An individual or organization primarily responsible for review of some aspect of the content.
     *
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType[] $reviewer
     * @return self
     */
    public function setReviewer(array $reviewer)
    {
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * Adds as endorser
     *
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType $endorser
     */
    public function addToEndorser(\TKusy\Hl7Fhir\R4\ContactDetailType $endorser)
    {
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * isset endorser
     *
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndorser($index)
    {
        return isset($this->endorser[$index]);
    }

    /**
     * unset endorser
     *
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndorser($index)
    {
        unset($this->endorser[$index]);
    }

    /**
     * Gets as endorser
     *
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     *
     * @return \TKusy\Hl7Fhir\R4\ContactDetailType[]
     */
    public function getEndorser()
    {
        return $this->endorser;
    }

    /**
     * Sets a new endorser
     *
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     *
     * @param \TKusy\Hl7Fhir\R4\ContactDetailType[] $endorser
     * @return self
     */
    public function setEndorser(array $endorser)
    {
        $this->endorser = $endorser;
        return $this;
    }

    /**
     * Adds as relatedArtifact
     *
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\RelatedArtifactType $relatedArtifact
     */
    public function addToRelatedArtifact(\TKusy\Hl7Fhir\R4\RelatedArtifactType $relatedArtifact)
    {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * isset relatedArtifact
     *
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedArtifact($index)
    {
        return isset($this->relatedArtifact[$index]);
    }

    /**
     * unset relatedArtifact
     *
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedArtifact($index)
    {
        unset($this->relatedArtifact[$index]);
    }

    /**
     * Gets as relatedArtifact
     *
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     *
     * @return \TKusy\Hl7Fhir\R4\RelatedArtifactType[]
     */
    public function getRelatedArtifact()
    {
        return $this->relatedArtifact;
    }

    /**
     * Sets a new relatedArtifact
     *
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     *
     * @param \TKusy\Hl7Fhir\R4\RelatedArtifactType[] $relatedArtifact
     * @return self
     */
    public function setRelatedArtifact(array $relatedArtifact)
    {
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * The parameter element defines parameters used by the library.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ParameterDefinitionType $parameter
     */
    public function addToParameter(\TKusy\Hl7Fhir\R4\ParameterDefinitionType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * The parameter element defines parameters used by the library.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * The parameter element defines parameters used by the library.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * The parameter element defines parameters used by the library.
     *
     * @return \TKusy\Hl7Fhir\R4\ParameterDefinitionType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * The parameter element defines parameters used by the library.
     *
     * @param \TKusy\Hl7Fhir\R4\ParameterDefinitionType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Adds as dataRequirement
     *
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\DataRequirementType $dataRequirement
     */
    public function addToDataRequirement(\TKusy\Hl7Fhir\R4\DataRequirementType $dataRequirement)
    {
        $this->dataRequirement[] = $dataRequirement;
        return $this;
    }

    /**
     * isset dataRequirement
     *
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataRequirement($index)
    {
        return isset($this->dataRequirement[$index]);
    }

    /**
     * unset dataRequirement
     *
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataRequirement($index)
    {
        unset($this->dataRequirement[$index]);
    }

    /**
     * Gets as dataRequirement
     *
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     *
     * @return \TKusy\Hl7Fhir\R4\DataRequirementType[]
     */
    public function getDataRequirement()
    {
        return $this->dataRequirement;
    }

    /**
     * Sets a new dataRequirement
     *
     * Describes a set of data that must be provided in order to be able to successfully perform the computations defined by the library.
     *
     * @param \TKusy\Hl7Fhir\R4\DataRequirementType[] $dataRequirement
     * @return self
     */
    public function setDataRequirement(array $dataRequirement)
    {
        $this->dataRequirement = $dataRequirement;
        return $this;
    }

    /**
     * Adds as content
     *
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\AttachmentType $content
     */
    public function addToContent(\TKusy\Hl7Fhir\R4\AttachmentType $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     *
     * @return \TKusy\Hl7Fhir\R4\AttachmentType[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The content of the library as an Attachment. The content may be a reference to a url, or may be directly embedded as a base-64 string. Either way, the contentType of the attachment determines how to interpret the content.
     *
     * @param \TKusy\Hl7Fhir\R4\AttachmentType[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }


}

