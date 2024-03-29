<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing TerminologyCapabilitiesType
 *
 * A TerminologyCapabilities resource documents a set of capabilities (behaviors) of a FHIR Terminology Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: TerminologyCapabilities
 */
class TerminologyCapabilitiesType extends CanonicalResourceType
{

    /**
     * An absolute URI that is used to identify this terminology capabilities when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this terminology capabilities is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the terminology capabilities is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this terminology capabilities when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the terminology capabilities when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the terminology capabilities author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the terminology capabilities. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the terminology capabilities.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The status of this terminology capabilities. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this terminology capabilities is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the terminology capabilities was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the terminology capabilities changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual responsible for the release and ongoing maintenance of the terminology capabilities.
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
     * A free text natural language description of the terminology capabilities from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate terminology capabilities instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the terminology capabilities is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this terminology capabilities is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the terminology capabilities and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the terminology capabilities.
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
     * Software that is covered by this terminology capability statement. It is used when the statement describes the capabilities of a particular software version, independent of an installation.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesSoftwareType $software
     */
    private $software = null;

    /**
     * Identifies a specific implementation instance that is described by the terminology capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesImplementationType $implementation
     */
    private $implementation = null;

    /**
     * Whether the server supports lockedDate.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $lockedDate
     */
    private $lockedDate = null;

    /**
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesCodeSystemType[] $codeSystem
     */
    private $codeSystem = null;

    /**
     * Information about the [ValueSet/$expand](valueset-operation-expand.html) operation.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesExpansionType $expansion
     */
    private $expansion = null;

    /**
     * The degree to which the server supports the code search parameter on ValueSet, if it is supported.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeSearchSupportType $codeSearch
     */
    private $codeSearch = null;

    /**
     * Information about the [ValueSet/$validate-code](valueset-operation-validate-code.html) operation.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesValidateCodeType $validateCode
     */
    private $validateCode = null;

    /**
     * Information about the [ConceptMap/$translate](conceptmap-operation-translate.html) operation.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesTranslationType $translation
     */
    private $translation = null;

    /**
     * Whether the $closure operation is supported.
     *
     * @var \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesClosureType $closure
     */
    private $closure = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this terminology capabilities when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this terminology capabilities is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the terminology capabilities is stored on different servers.
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
     * An absolute URI that is used to identify this terminology capabilities when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this terminology capabilities is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the terminology capabilities is stored on different servers.
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
     * A formal identifier that is used to identify this terminology capabilities when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this terminology capabilities when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this terminology capabilities when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this terminology capabilities when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this terminology capabilities when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the terminology capabilities when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the terminology capabilities author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the terminology capabilities when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the terminology capabilities author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the terminology capabilities. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the terminology capabilities. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the terminology capabilities.
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
     * A short, descriptive, user-friendly title for the terminology capabilities.
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
     * The status of this terminology capabilities. Enables tracking the life-cycle of the content.
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
     * The status of this terminology capabilities. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this terminology capabilities is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this terminology capabilities is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the terminology capabilities was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the terminology capabilities changes.
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
     * The date (and optionally time) when the terminology capabilities was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the terminology capabilities changes.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the terminology capabilities.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the terminology capabilities.
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
     * A free text natural language description of the terminology capabilities from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
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
     * A free text natural language description of the terminology capabilities from a consumer's perspective. Typically, this is used when the capability statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate terminology capabilities instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate terminology capabilities instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate terminology capabilities instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate terminology capabilities instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate terminology capabilities instances.
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
     * A legal or geographic region in which the terminology capabilities is intended to be used.
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
     * A legal or geographic region in which the terminology capabilities is intended to be used.
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
     * A legal or geographic region in which the terminology capabilities is intended to be used.
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
     * A legal or geographic region in which the terminology capabilities is intended to be used.
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
     * A legal or geographic region in which the terminology capabilities is intended to be used.
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
     * Explanation of why this terminology capabilities is needed and why it has been designed as it has.
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
     * Explanation of why this terminology capabilities is needed and why it has been designed as it has.
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
     * A copyright statement relating to the terminology capabilities and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the terminology capabilities.
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
     * A copyright statement relating to the terminology capabilities and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the terminology capabilities.
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
     * Gets as software
     *
     * Software that is covered by this terminology capability statement. It is used when the statement describes the capabilities of a particular software version, independent of an installation.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesSoftwareType
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Sets a new software
     *
     * Software that is covered by this terminology capability statement. It is used when the statement describes the capabilities of a particular software version, independent of an installation.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesSoftwareType $software
     * @return self
     */
    public function setSoftware(?\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesSoftwareType $software = null)
    {
        $this->software = $software;
        return $this;
    }

    /**
     * Gets as implementation
     *
     * Identifies a specific implementation instance that is described by the terminology capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesImplementationType
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Sets a new implementation
     *
     * Identifies a specific implementation instance that is described by the terminology capability statement - i.e. a particular installation, rather than the capabilities of a software program.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesImplementationType $implementation
     * @return self
     */
    public function setImplementation(?\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesImplementationType $implementation = null)
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * Gets as lockedDate
     *
     * Whether the server supports lockedDate.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getLockedDate()
    {
        return $this->lockedDate;
    }

    /**
     * Sets a new lockedDate
     *
     * Whether the server supports lockedDate.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $lockedDate
     * @return self
     */
    public function setLockedDate(?\TKusy\Hl7Fhir\R5\BooleanType $lockedDate = null)
    {
        $this->lockedDate = $lockedDate;
        return $this;
    }

    /**
     * Adds as codeSystem
     *
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesCodeSystemType $codeSystem
     */
    public function addToCodeSystem(\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesCodeSystemType $codeSystem)
    {
        $this->codeSystem[] = $codeSystem;
        return $this;
    }

    /**
     * isset codeSystem
     *
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCodeSystem($index)
    {
        return isset($this->codeSystem[$index]);
    }

    /**
     * unset codeSystem
     *
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCodeSystem($index)
    {
        unset($this->codeSystem[$index]);
    }

    /**
     * Gets as codeSystem
     *
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesCodeSystemType[]
     */
    public function getCodeSystem()
    {
        return $this->codeSystem;
    }

    /**
     * Sets a new codeSystem
     *
     * Identifies a code system that is supported by the server. If there is a no code system URL, then this declares the general assumptions a client can make about support for any CodeSystem resource.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesCodeSystemType[] $codeSystem
     * @return self
     */
    public function setCodeSystem(array $codeSystem = null)
    {
        $this->codeSystem = $codeSystem;
        return $this;
    }

    /**
     * Gets as expansion
     *
     * Information about the [ValueSet/$expand](valueset-operation-expand.html) operation.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesExpansionType
     */
    public function getExpansion()
    {
        return $this->expansion;
    }

    /**
     * Sets a new expansion
     *
     * Information about the [ValueSet/$expand](valueset-operation-expand.html) operation.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesExpansionType $expansion
     * @return self
     */
    public function setExpansion(?\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesExpansionType $expansion = null)
    {
        $this->expansion = $expansion;
        return $this;
    }

    /**
     * Gets as codeSearch
     *
     * The degree to which the server supports the code search parameter on ValueSet, if it is supported.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeSearchSupportType
     */
    public function getCodeSearch()
    {
        return $this->codeSearch;
    }

    /**
     * Sets a new codeSearch
     *
     * The degree to which the server supports the code search parameter on ValueSet, if it is supported.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeSearchSupportType $codeSearch
     * @return self
     */
    public function setCodeSearch(?\TKusy\Hl7Fhir\R5\CodeSearchSupportType $codeSearch = null)
    {
        $this->codeSearch = $codeSearch;
        return $this;
    }

    /**
     * Gets as validateCode
     *
     * Information about the [ValueSet/$validate-code](valueset-operation-validate-code.html) operation.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesValidateCodeType
     */
    public function getValidateCode()
    {
        return $this->validateCode;
    }

    /**
     * Sets a new validateCode
     *
     * Information about the [ValueSet/$validate-code](valueset-operation-validate-code.html) operation.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesValidateCodeType $validateCode
     * @return self
     */
    public function setValidateCode(?\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesValidateCodeType $validateCode = null)
    {
        $this->validateCode = $validateCode;
        return $this;
    }

    /**
     * Gets as translation
     *
     * Information about the [ConceptMap/$translate](conceptmap-operation-translate.html) operation.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesTranslationType
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Sets a new translation
     *
     * Information about the [ConceptMap/$translate](conceptmap-operation-translate.html) operation.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesTranslationType $translation
     * @return self
     */
    public function setTranslation(?\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesTranslationType $translation = null)
    {
        $this->translation = $translation;
        return $this;
    }

    /**
     * Gets as closure
     *
     * Whether the $closure operation is supported.
     *
     * @return \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesClosureType
     */
    public function getClosure()
    {
        return $this->closure;
    }

    /**
     * Sets a new closure
     *
     * Whether the $closure operation is supported.
     *
     * @param \TKusy\Hl7Fhir\R5\TerminologyCapabilitiesClosureType $closure
     * @return self
     */
    public function setClosure(?\TKusy\Hl7Fhir\R5\TerminologyCapabilitiesClosureType $closure = null)
    {
        $this->closure = $closure;
        return $this;
    }


}

