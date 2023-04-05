<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing CapabilityStatementType
 *
 * A Capability Statement documents a set of capabilities (behaviors) of a FHIR Server or Client for a particular version of FHIR that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CapabilityStatement
 */
class CapabilityStatementType extends CanonicalResourceType
{

    /**
     * An absolute URI that is used to identify this capability statement when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this capability statement is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the capability statement is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this CapabilityStatement when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the capability statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the capability statement author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the capability statement. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the capability statement.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The status of this capability statement. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this capability statement is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the capability statement was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the capability statement changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual responsible for the release and ongoing maintenance of the capability statement.
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
     * A free text natural language description of the capability statement from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate capability statement instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the capability statement is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this capability statement is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the capability statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the capability statement.
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
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind, not instance of software) or a class of implementation (e.g. a desired purchase).
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementKindType $kind
     */
    private $kind = null;

    /**
     * Reference to a canonical URL of another CapabilityStatement that this software implements. This capability statement is a published API description that corresponds to a business service. The server may actually implement a subset of the capability statement it claims to implement, so the capability statement must specify the full capability details.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiates
     */
    private $instantiates = null;

    /**
     * Reference to a canonical URL of another CapabilityStatement that this software adds to. The capability statement automatically includes everything in the other statement, and it is not duplicated, though the server may repeat the same resources, interactions and operations to add additional details to them.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $imports
     */
    private $imports = null;

    /**
     * Software that is covered by this capability statement. It is used when the capability statement describes the capabilities of a particular software version, independent of an installation.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementSoftwareType $software
     */
    private $software = null;

    /**
     * Identifies a specific implementation instance that is described by the capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementImplementationType $implementation
     */
    private $implementation = null;

    /**
     * The version of the FHIR specification that this CapabilityStatement describes (which SHALL be the same as the FHIR version of the CapabilityStatement itself). There is no default value.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRVersionType $fhirVersion
     */
    private $fhirVersion = null;

    /**
     * A list of the formats supported by this implementation using their content types.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType[] $format
     */
    private $format = null;

    /**
     * A list of the patch formats supported by this implementation using their content types.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType[] $patchFormat
     */
    private $patchFormat = null;

    /**
     * A list of the languages supported by this implementation that are usefully supported in the ```Accept-Language``` header.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType[] $acceptLanguage
     */
    private $acceptLanguage = null;

    /**
     * A list of implementation guides that the server does (or should) support in their entirety.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $implementationGuide
     */
    private $implementationGuide = null;

    /**
     * A definition of the restful capabilities of the solution, if any.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementRestType[] $rest
     */
    private $rest = null;

    /**
     * A description of the messaging capabilities of the solution.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementMessagingType[] $messaging
     */
    private $messaging = null;

    /**
     * A document definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CapabilityStatementDocumentType[] $document
     */
    private $document = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this capability statement when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this capability statement is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the capability statement is stored on different servers.
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
     * An absolute URI that is used to identify this capability statement when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this capability statement is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the capability statement is stored on different servers.
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
     * Adds as identifier
     *
     * A formal identifier that is used to identify this CapabilityStatement when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this CapabilityStatement when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this CapabilityStatement when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this CapabilityStatement when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this CapabilityStatement when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * Gets as version
     *
     * The identifier that is used to identify this version of the capability statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the capability statement author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the capability statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the capability statement author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the capability statement. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the capability statement. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the capability statement.
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
     * A short, descriptive, user-friendly title for the capability statement.
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
     * The status of this capability statement. Enables tracking the life-cycle of the content.
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
     * The status of this capability statement. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this capability statement is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this capability statement is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the capability statement was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the capability statement changes.
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
     * The date (and optionally time) when the capability statement was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the capability statement changes.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7Fhir\R5\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as publisher
     *
     * The name of the organization or individual responsible for the release and ongoing maintenance of the capability statement.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the capability statement.
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
     * A free text natural language description of the capability statement from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
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
     * A free text natural language description of the capability statement from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate capability statement instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate capability statement instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate capability statement instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate capability statement instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate capability statement instances.
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
     * A legal or geographic region in which the capability statement is intended to be used.
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
     * A legal or geographic region in which the capability statement is intended to be used.
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
     * A legal or geographic region in which the capability statement is intended to be used.
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
     * A legal or geographic region in which the capability statement is intended to be used.
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
     * A legal or geographic region in which the capability statement is intended to be used.
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
     * Explanation of why this capability statement is needed and why it has been designed as it has.
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
     * Explanation of why this capability statement is needed and why it has been designed as it has.
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
     * A copyright statement relating to the capability statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the capability statement.
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
     * A copyright statement relating to the capability statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the capability statement.
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
     * Gets as kind
     *
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind, not instance of software) or a class of implementation (e.g. a desired purchase).
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementKindType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind, not instance of software) or a class of implementation (e.g. a desired purchase).
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementKindType $kind
     * @return self
     */
    public function setKind(\TKusy\Hl7Fhir\R5\CapabilityStatementKindType $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Adds as instantiates
     *
     * Reference to a canonical URL of another CapabilityStatement that this software implements. This capability statement is a published API description that corresponds to a business service. The server may actually implement a subset of the capability statement it claims to implement, so the capability statement must specify the full capability details.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $instantiates
     */
    public function addToInstantiates(\TKusy\Hl7Fhir\R5\CanonicalType $instantiates)
    {
        $this->instantiates[] = $instantiates;
        return $this;
    }

    /**
     * isset instantiates
     *
     * Reference to a canonical URL of another CapabilityStatement that this software implements. This capability statement is a published API description that corresponds to a business service. The server may actually implement a subset of the capability statement it claims to implement, so the capability statement must specify the full capability details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiates($index)
    {
        return isset($this->instantiates[$index]);
    }

    /**
     * unset instantiates
     *
     * Reference to a canonical URL of another CapabilityStatement that this software implements. This capability statement is a published API description that corresponds to a business service. The server may actually implement a subset of the capability statement it claims to implement, so the capability statement must specify the full capability details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiates($index)
    {
        unset($this->instantiates[$index]);
    }

    /**
     * Gets as instantiates
     *
     * Reference to a canonical URL of another CapabilityStatement that this software implements. This capability statement is a published API description that corresponds to a business service. The server may actually implement a subset of the capability statement it claims to implement, so the capability statement must specify the full capability details.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getInstantiates()
    {
        return $this->instantiates;
    }

    /**
     * Sets a new instantiates
     *
     * Reference to a canonical URL of another CapabilityStatement that this software implements. This capability statement is a published API description that corresponds to a business service. The server may actually implement a subset of the capability statement it claims to implement, so the capability statement must specify the full capability details.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $instantiates
     * @return self
     */
    public function setInstantiates(array $instantiates = null)
    {
        $this->instantiates = $instantiates;
        return $this;
    }

    /**
     * Adds as imports
     *
     * Reference to a canonical URL of another CapabilityStatement that this software adds to. The capability statement automatically includes everything in the other statement, and it is not duplicated, though the server may repeat the same resources, interactions and operations to add additional details to them.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $imports
     */
    public function addToImports(\TKusy\Hl7Fhir\R5\CanonicalType $imports)
    {
        $this->imports[] = $imports;
        return $this;
    }

    /**
     * isset imports
     *
     * Reference to a canonical URL of another CapabilityStatement that this software adds to. The capability statement automatically includes everything in the other statement, and it is not duplicated, though the server may repeat the same resources, interactions and operations to add additional details to them.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImports($index)
    {
        return isset($this->imports[$index]);
    }

    /**
     * unset imports
     *
     * Reference to a canonical URL of another CapabilityStatement that this software adds to. The capability statement automatically includes everything in the other statement, and it is not duplicated, though the server may repeat the same resources, interactions and operations to add additional details to them.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImports($index)
    {
        unset($this->imports[$index]);
    }

    /**
     * Gets as imports
     *
     * Reference to a canonical URL of another CapabilityStatement that this software adds to. The capability statement automatically includes everything in the other statement, and it is not duplicated, though the server may repeat the same resources, interactions and operations to add additional details to them.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getImports()
    {
        return $this->imports;
    }

    /**
     * Sets a new imports
     *
     * Reference to a canonical URL of another CapabilityStatement that this software adds to. The capability statement automatically includes everything in the other statement, and it is not duplicated, though the server may repeat the same resources, interactions and operations to add additional details to them.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $imports
     * @return self
     */
    public function setImports(array $imports = null)
    {
        $this->imports = $imports;
        return $this;
    }

    /**
     * Gets as software
     *
     * Software that is covered by this capability statement. It is used when the capability statement describes the capabilities of a particular software version, independent of an installation.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementSoftwareType
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Sets a new software
     *
     * Software that is covered by this capability statement. It is used when the capability statement describes the capabilities of a particular software version, independent of an installation.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementSoftwareType $software
     * @return self
     */
    public function setSoftware(?\TKusy\Hl7Fhir\R5\CapabilityStatementSoftwareType $software = null)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Gets as implementation
     *
     * Identifies a specific implementation instance that is described by the capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementImplementationType
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Sets a new implementation
     *
     * Identifies a specific implementation instance that is described by the capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementImplementationType $implementation
     * @return self
     */
    public function setImplementation(?\TKusy\Hl7Fhir\R5\CapabilityStatementImplementationType $implementation = null)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * Gets as fhirVersion
     *
     * The version of the FHIR specification that this CapabilityStatement describes (which SHALL be the same as the FHIR version of the CapabilityStatement itself). There is no default value.
     *
     * @return \TKusy\Hl7Fhir\R5\FHIRVersionType
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * Sets a new fhirVersion
     *
     * The version of the FHIR specification that this CapabilityStatement describes (which SHALL be the same as the FHIR version of the CapabilityStatement itself). There is no default value.
     *
     * @param \TKusy\Hl7Fhir\R5\FHIRVersionType $fhirVersion
     * @return self
     */
    public function setFhirVersion(\TKusy\Hl7Fhir\R5\FHIRVersionType $fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * Adds as format
     *
     * A list of the formats supported by this implementation using their content types.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeType $format
     */
    public function addToFormat(\TKusy\Hl7Fhir\R5\CodeType $format)
    {
        $this->format[] = $format;
        return $this;
    }

    /**
     * isset format
     *
     * A list of the formats supported by this implementation using their content types.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFormat($index)
    {
        return isset($this->format[$index]);
    }

    /**
     * unset format
     *
     * A list of the formats supported by this implementation using their content types.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFormat($index)
    {
        unset($this->format[$index]);
    }

    /**
     * Gets as format
     *
     * A list of the formats supported by this implementation using their content types.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * A list of the formats supported by this implementation using their content types.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType[] $format
     * @return self
     */
    public function setFormat(array $format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Adds as patchFormat
     *
     * A list of the patch formats supported by this implementation using their content types.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeType $patchFormat
     */
    public function addToPatchFormat(\TKusy\Hl7Fhir\R5\CodeType $patchFormat)
    {
        $this->patchFormat[] = $patchFormat;
        return $this;
    }

    /**
     * isset patchFormat
     *
     * A list of the patch formats supported by this implementation using their content types.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPatchFormat($index)
    {
        return isset($this->patchFormat[$index]);
    }

    /**
     * unset patchFormat
     *
     * A list of the patch formats supported by this implementation using their content types.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPatchFormat($index)
    {
        unset($this->patchFormat[$index]);
    }

    /**
     * Gets as patchFormat
     *
     * A list of the patch formats supported by this implementation using their content types.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType[]
     */
    public function getPatchFormat()
    {
        return $this->patchFormat;
    }

    /**
     * Sets a new patchFormat
     *
     * A list of the patch formats supported by this implementation using their content types.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType[] $patchFormat
     * @return self
     */
    public function setPatchFormat(array $patchFormat = null)
    {
        $this->patchFormat = $patchFormat;
        return $this;
    }

    /**
     * Adds as acceptLanguage
     *
     * A list of the languages supported by this implementation that are usefully supported in the ```Accept-Language``` header.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeType $acceptLanguage
     */
    public function addToAcceptLanguage(\TKusy\Hl7Fhir\R5\CodeType $acceptLanguage)
    {
        $this->acceptLanguage[] = $acceptLanguage;
        return $this;
    }

    /**
     * isset acceptLanguage
     *
     * A list of the languages supported by this implementation that are usefully supported in the ```Accept-Language``` header.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptLanguage($index)
    {
        return isset($this->acceptLanguage[$index]);
    }

    /**
     * unset acceptLanguage
     *
     * A list of the languages supported by this implementation that are usefully supported in the ```Accept-Language``` header.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptLanguage($index)
    {
        unset($this->acceptLanguage[$index]);
    }

    /**
     * Gets as acceptLanguage
     *
     * A list of the languages supported by this implementation that are usefully supported in the ```Accept-Language``` header.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType[]
     */
    public function getAcceptLanguage()
    {
        return $this->acceptLanguage;
    }

    /**
     * Sets a new acceptLanguage
     *
     * A list of the languages supported by this implementation that are usefully supported in the ```Accept-Language``` header.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType[] $acceptLanguage
     * @return self
     */
    public function setAcceptLanguage(array $acceptLanguage = null)
    {
        $this->acceptLanguage = $acceptLanguage;
        return $this;
    }

    /**
     * Adds as implementationGuide
     *
     * A list of implementation guides that the server does (or should) support in their entirety.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $implementationGuide
     */
    public function addToImplementationGuide(\TKusy\Hl7Fhir\R5\CanonicalType $implementationGuide)
    {
        $this->implementationGuide[] = $implementationGuide;
        return $this;
    }

    /**
     * isset implementationGuide
     *
     * A list of implementation guides that the server does (or should) support in their entirety.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImplementationGuide($index)
    {
        return isset($this->implementationGuide[$index]);
    }

    /**
     * unset implementationGuide
     *
     * A list of implementation guides that the server does (or should) support in their entirety.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImplementationGuide($index)
    {
        unset($this->implementationGuide[$index]);
    }

    /**
     * Gets as implementationGuide
     *
     * A list of implementation guides that the server does (or should) support in their entirety.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getImplementationGuide()
    {
        return $this->implementationGuide;
    }

    /**
     * Sets a new implementationGuide
     *
     * A list of implementation guides that the server does (or should) support in their entirety.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $implementationGuide
     * @return self
     */
    public function setImplementationGuide(array $implementationGuide = null)
    {
        $this->implementationGuide = $implementationGuide;
        return $this;
    }

    /**
     * Adds as rest
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementRestType $rest
     */
    public function addToRest(\TKusy\Hl7Fhir\R5\CapabilityStatementRestType $rest)
    {
        $this->rest[] = $rest;
        return $this;
    }

    /**
     * isset rest
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRest($index)
    {
        return isset($this->rest[$index]);
    }

    /**
     * unset rest
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRest($index)
    {
        unset($this->rest[$index]);
    }

    /**
     * Gets as rest
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementRestType[]
     */
    public function getRest()
    {
        return $this->rest;
    }

    /**
     * Sets a new rest
     *
     * A definition of the restful capabilities of the solution, if any.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementRestType[] $rest
     * @return self
     */
    public function setRest(array $rest = null)
    {
        $this->rest = $rest;
        return $this;
    }

    /**
     * Adds as messaging
     *
     * A description of the messaging capabilities of the solution.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementMessagingType $messaging
     */
    public function addToMessaging(\TKusy\Hl7Fhir\R5\CapabilityStatementMessagingType $messaging)
    {
        $this->messaging[] = $messaging;
        return $this;
    }

    /**
     * isset messaging
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessaging($index)
    {
        return isset($this->messaging[$index]);
    }

    /**
     * unset messaging
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessaging($index)
    {
        unset($this->messaging[$index]);
    }

    /**
     * Gets as messaging
     *
     * A description of the messaging capabilities of the solution.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementMessagingType[]
     */
    public function getMessaging()
    {
        return $this->messaging;
    }

    /**
     * Sets a new messaging
     *
     * A description of the messaging capabilities of the solution.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementMessagingType[] $messaging
     * @return self
     */
    public function setMessaging(array $messaging = null)
    {
        $this->messaging = $messaging;
        return $this;
    }

    /**
     * Adds as document
     *
     * A document definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementDocumentType $document
     */
    public function addToDocument(\TKusy\Hl7Fhir\R5\CapabilityStatementDocumentType $document)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * isset document
     *
     * A document definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document
     *
     * A document definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocument($index)
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document
     *
     * A document definition.
     *
     * @return \TKusy\Hl7Fhir\R5\CapabilityStatementDocumentType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * A document definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CapabilityStatementDocumentType[] $document
     * @return self
     */
    public function setDocument(array $document = null)
    {
        $this->document = $document;
        return $this;
    }


}

