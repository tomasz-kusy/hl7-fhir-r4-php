<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing StructureDefinitionType
 *
 * A definition of a FHIR structure. This resource is used to describe the underlying resources, data types defined in FHIR, and also for describing extensions and constraints on resources and data types.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: StructureDefinition
 */
class StructureDefinitionType extends CanonicalResourceType
{

    /**
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this structure definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure definition is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. There is no expectation that versions can be placed in a lexicographical sequence, so authors are encouraged to populate the StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there is no managed version available, authors can consider using ISO date/time syntax (e.g., '2023-01-01').
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
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the structure definition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * The status of this structure definition. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the structure definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual responsible for the release and ongoing maintenance of the structure definition.
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
     * A free text natural language description of the structure definition from a consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure definition instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the structure definition is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this structure definition is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition. The short copyright declaration (e.g. (c) '2015+ xyz organization' should be sent in the copyrightLabel element.
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
     * (DEPRECATED) A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     *
     * @var \TKusy\Hl7Fhir\R5\CodingType[] $keyword
     */
    private $keyword = null;

    /**
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.6.0. for this version.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRVersionType $fhirVersion
     */
    private $fhirVersion = null;

    /**
     * An external specification that the content is mapped to.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureDefinitionMappingType[] $mapping
     */
    private $mapping = null;

    /**
     * Defines the kind of structure that this definition is describing.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureDefinitionKindType $kind
     */
    private $kind = null;

    /**
     * Whether structure this definition describes is abstract or not - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged between systems.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $abstract
     */
    private $abstract = null;

    /**
     * Identifies the types of resource or data type elements to which the extension can be applied. For more guidance on using the 'context' element, see the [defining extensions page](defining-extensions.html#context).
     *
     * @var \TKusy\Hl7Fhir\R5\StructureDefinitionContextType[] $context
     */
    private $context = null;

    /**
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType[] $contextInvariant
     */
    private $contextInvariant = null;

    /**
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type). References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models, where they are required.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $type
     */
    private $type = null;

    /**
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $baseDefinition
     */
    private $baseDefinition = null;

    /**
     * How the type relates to the baseDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\TypeDerivationRuleType $derivation
     */
    private $derivation = null;

    /**
     * A snapshot view is expressed in a standalone form that can be used and interpreted without considering the base StructureDefinition.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureDefinitionSnapshotType $snapshot
     */
    private $snapshot = null;

    /**
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     *
     * @var \TKusy\Hl7Fhir\R5\StructureDefinitionDifferentialType $differential
     */
    private $differential = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this structure definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure definition is stored on different servers.
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
     * An absolute URI that is used to identify this structure definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this structure definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the structure definition is stored on different servers.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7Fhir\R5\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this structure definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. There is no expectation that versions can be placed in a lexicographical sequence, so authors are encouraged to populate the StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there is no managed version available, authors can consider using ISO date/time syntax (e.g., '2023-01-01').
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
     * The identifier that is used to identify this version of the structure definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the structure definition author and is not expected to be globally unique. There is no expectation that versions can be placed in a lexicographical sequence, so authors are encouraged to populate the StructureDefinition.versionAlgorithm[x] element to enable comparisons. If there is no managed version available, authors can consider using ISO date/time syntax (e.g., '2023-01-01').
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
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the structure definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R5\StringType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short, descriptive, user-friendly title for the structure definition.
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
     * A short, descriptive, user-friendly title for the structure definition.
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
     * The status of this structure definition. Enables tracking the life-cycle of the content.
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
     * The status of this structure definition. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this structure definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the structure definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
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
     * The date (and optionally time) when the structure definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the structure definition changes.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the structure definition.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the structure definition.
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
     * A free text natural language description of the structure definition from a consumer's perspective.
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
     * A free text natural language description of the structure definition from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate structure definition instances.
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
     * A legal or geographic region in which the structure definition is intended to be used.
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
     * A legal or geographic region in which the structure definition is intended to be used.
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
     * A legal or geographic region in which the structure definition is intended to be used.
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
     * A legal or geographic region in which the structure definition is intended to be used.
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
     * A legal or geographic region in which the structure definition is intended to be used.
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
     * Explanation of why this structure definition is needed and why it has been designed as it has.
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
     * Explanation of why this structure definition is needed and why it has been designed as it has.
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
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition. The short copyright declaration (e.g. (c) '2015+ xyz organization' should be sent in the copyrightLabel element.
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
     * A copyright statement relating to the structure definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the structure definition. The short copyright declaration (e.g. (c) '2015+ xyz organization' should be sent in the copyrightLabel element.
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
     * Adds as keyword
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodingType $keyword
     */
    public function addToKeyword(\TKusy\Hl7Fhir\R5\CodingType $keyword)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * isset keyword
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyword($index)
    {
        return isset($this->keyword[$index]);
    }

    /**
     * unset keyword
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyword($index)
    {
        unset($this->keyword[$index]);
    }

    /**
     * Gets as keyword
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Sets a new keyword
     *
     * (DEPRECATED) A set of key words or terms from external terminologies that may be used to assist with indexing and searching of templates nby describing the use of this structure definition, or the content it describes.
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType[] $keyword
     * @return self
     */
    public function setKeyword(array $keyword = null)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Gets as fhirVersion
     *
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.6.0. for this version.
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
     * The version of the FHIR specification on which this StructureDefinition is based - this is the formal version of the specification, without the revision number, e.g. [publication].[major].[minor], which is 4.6.0. for this version.
     *
     * @param \TKusy\Hl7Fhir\R5\FHIRVersionType $fhirVersion
     * @return self
     */
    public function setFhirVersion(?\TKusy\Hl7Fhir\R5\FHIRVersionType $fhirVersion = null)
    {
        $this->fhirVersion = $fhirVersion;
        return $this;
    }

    /**
     * Adds as mapping
     *
     * An external specification that the content is mapped to.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StructureDefinitionMappingType $mapping
     */
    public function addToMapping(\TKusy\Hl7Fhir\R5\StructureDefinitionMappingType $mapping)
    {
        $this->mapping[] = $mapping;
        return $this;
    }

    /**
     * isset mapping
     *
     * An external specification that the content is mapped to.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMapping($index)
    {
        return isset($this->mapping[$index]);
    }

    /**
     * unset mapping
     *
     * An external specification that the content is mapped to.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMapping($index)
    {
        unset($this->mapping[$index]);
    }

    /**
     * Gets as mapping
     *
     * An external specification that the content is mapped to.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureDefinitionMappingType[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Sets a new mapping
     *
     * An external specification that the content is mapped to.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureDefinitionMappingType[] $mapping
     * @return self
     */
    public function setMapping(array $mapping = null)
    {
        $this->mapping = $mapping;
        return $this;
    }

    /**
     * Gets as kind
     *
     * Defines the kind of structure that this definition is describing.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureDefinitionKindType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * Defines the kind of structure that this definition is describing.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureDefinitionKindType $kind
     * @return self
     */
    public function setKind(\TKusy\Hl7Fhir\R5\StructureDefinitionKindType $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Gets as abstract
     *
     * Whether structure this definition describes is abstract or not - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged between systems.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Sets a new abstract
     *
     * Whether structure this definition describes is abstract or not - that is, whether the structure is not intended to be instantiated. For Resources and Data types, abstract types will never be exchanged between systems.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $abstract
     * @return self
     */
    public function setAbstract(\TKusy\Hl7Fhir\R5\BooleanType $abstract)
    {
        $this->abstract = $abstract;
        return $this;
    }

    /**
     * Adds as context
     *
     * Identifies the types of resource or data type elements to which the extension can be applied. For more guidance on using the 'context' element, see the [defining extensions page](defining-extensions.html#context).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StructureDefinitionContextType $context
     */
    public function addToContext(\TKusy\Hl7Fhir\R5\StructureDefinitionContextType $context)
    {
        $this->context[] = $context;
        return $this;
    }

    /**
     * isset context
     *
     * Identifies the types of resource or data type elements to which the extension can be applied. For more guidance on using the 'context' element, see the [defining extensions page](defining-extensions.html#context).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContext($index)
    {
        return isset($this->context[$index]);
    }

    /**
     * unset context
     *
     * Identifies the types of resource or data type elements to which the extension can be applied. For more guidance on using the 'context' element, see the [defining extensions page](defining-extensions.html#context).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContext($index)
    {
        unset($this->context[$index]);
    }

    /**
     * Gets as context
     *
     * Identifies the types of resource or data type elements to which the extension can be applied. For more guidance on using the 'context' element, see the [defining extensions page](defining-extensions.html#context).
     *
     * @return \TKusy\Hl7Fhir\R5\StructureDefinitionContextType[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Identifies the types of resource or data type elements to which the extension can be applied. For more guidance on using the 'context' element, see the [defining extensions page](defining-extensions.html#context).
     *
     * @param \TKusy\Hl7Fhir\R5\StructureDefinitionContextType[] $context
     * @return self
     */
    public function setContext(array $context = null)
    {
        $this->context = $context;
        return $this;
    }

    /**
     * Adds as contextInvariant
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $contextInvariant
     */
    public function addToContextInvariant(\TKusy\Hl7Fhir\R5\StringType $contextInvariant)
    {
        $this->contextInvariant[] = $contextInvariant;
        return $this;
    }

    /**
     * isset contextInvariant
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContextInvariant($index)
    {
        return isset($this->contextInvariant[$index]);
    }

    /**
     * unset contextInvariant
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContextInvariant($index)
    {
        unset($this->contextInvariant[$index]);
    }

    /**
     * Gets as contextInvariant
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
     */
    public function getContextInvariant()
    {
        return $this->contextInvariant;
    }

    /**
     * Sets a new contextInvariant
     *
     * A set of rules as FHIRPath Invariants about when the extension can be used (e.g. co-occurrence variants for the extension). All the rules must be true.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType[] $contextInvariant
     * @return self
     */
    public function setContextInvariant(array $contextInvariant = null)
    {
        $this->contextInvariant = $contextInvariant;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type). References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models, where they are required.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type this structure describes. If the derivation kind is 'specialization' then this is the master definition for a type, and there is always one of these (a data type, an extension, a resource, including abstract ones). Otherwise the structure definition is a constraint on the stated type (and in this case, the type cannot be an abstract type). References are URLs that are relative to http://hl7.org/fhir/StructureDefinition e.g. "string" is a reference to http://hl7.org/fhir/StructureDefinition/string. Absolute URLs are only allowed in logical models, where they are required.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\UriType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as baseDefinition
     *
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getBaseDefinition()
    {
        return $this->baseDefinition;
    }

    /**
     * Sets a new baseDefinition
     *
     * An absolute URI that is the base structure from which this type is derived, either by specialization or constraint.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $baseDefinition
     * @return self
     */
    public function setBaseDefinition(?\TKusy\Hl7Fhir\R5\CanonicalType $baseDefinition = null)
    {
        $this->baseDefinition = $baseDefinition;
        return $this;
    }

    /**
     * Gets as derivation
     *
     * How the type relates to the baseDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\TypeDerivationRuleType
     */
    public function getDerivation()
    {
        return $this->derivation;
    }

    /**
     * Sets a new derivation
     *
     * How the type relates to the baseDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\TypeDerivationRuleType $derivation
     * @return self
     */
    public function setDerivation(?\TKusy\Hl7Fhir\R5\TypeDerivationRuleType $derivation = null)
    {
        $this->derivation = $derivation;
        return $this;
    }

    /**
     * Gets as snapshot
     *
     * A snapshot view is expressed in a standalone form that can be used and interpreted without considering the base StructureDefinition.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureDefinitionSnapshotType
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * Sets a new snapshot
     *
     * A snapshot view is expressed in a standalone form that can be used and interpreted without considering the base StructureDefinition.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureDefinitionSnapshotType $snapshot
     * @return self
     */
    public function setSnapshot(?\TKusy\Hl7Fhir\R5\StructureDefinitionSnapshotType $snapshot = null)
    {
        $this->snapshot = $snapshot;
        return $this;
    }

    /**
     * Gets as differential
     *
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     *
     * @return \TKusy\Hl7Fhir\R5\StructureDefinitionDifferentialType
     */
    public function getDifferential()
    {
        return $this->differential;
    }

    /**
     * Sets a new differential
     *
     * A differential view is expressed relative to the base StructureDefinition - a statement of differences that it applies.
     *
     * @param \TKusy\Hl7Fhir\R5\StructureDefinitionDifferentialType $differential
     * @return self
     */
    public function setDifferential(?\TKusy\Hl7Fhir\R5\StructureDefinitionDifferentialType $differential = null)
    {
        $this->differential = $differential;
        return $this;
    }


}

