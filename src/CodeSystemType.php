<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing CodeSystemType
 *
 * The CodeSystem resource is used to declare the existence of and describe a code system or code system supplement and its key properties, and optionally define a part or all of its content.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: CodeSystem
 */
class CodeSystemType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this code system when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this code system is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the code system is stored on different servers. This is used in [Coding](datatypes.html#Coding).system.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The identifier that is used to identify this version of the code system when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the code system author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. This is used in [Coding](datatypes.html#Coding).version.
     *
     * @var \TKusy\Hl7FhirR4\StringType $version
     */
    private $version = null;

    /**
     * A natural language name identifying the code system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the code system.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * The date (and optionally time) when the code system resource was created or revised.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this code system is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the code system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the code system changes.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the code system.
     *
     * @var \TKusy\Hl7FhirR4\StringType $publisher
     */
    private $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * A free text natural language description of the code system from a consumer's perspective.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate code system instances.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     */
    private $useContext = [
        
    ];

    /**
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = [
        
    ];

    /**
     * Explanation of why this code system is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the code system and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the code system.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * If code comparison is case sensitive when codes within this system are compared to each other.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $caseSensitive
     */
    private $caseSensitive = null;

    /**
     * Canonical reference to the value set that contains the entire code system.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $valueSet
     */
    private $valueSet = null;

    /**
     * The meaning of the hierarchy of concepts as represented in this resource.
     *
     * @var \TKusy\Hl7FhirR4\CodeSystemHierarchyMeaningType $hierarchyMeaning
     */
    private $hierarchyMeaning = null;

    /**
     * The code system defines a compositional (post-coordination) grammar.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $compositional
     */
    private $compositional = null;

    /**
     * This flag is used to signify that the code system does not commit to concept permanence across versions. If true, a version must be specified when referencing this code system.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $versionNeeded
     */
    private $versionNeeded = null;

    /**
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     *
     * @var \TKusy\Hl7FhirR4\CodeSystemContentModeType $content
     */
    private $content = null;

    /**
     * The canonical URL of the code system that this code system supplement is adding designations and properties to.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $supplements
     */
    private $supplements = null;

    /**
     * The total number of concepts defined by the code system. Where the code system has a compositional grammar, the basis of this count is defined by the system steward.
     *
     * @var \TKusy\Hl7FhirR4\UnsignedIntType $count
     */
    private $count = null;

    /**
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     *
     * @var \TKusy\Hl7FhirR4\CodeSystemFilterType[] $filter
     */
    private $filter = [
        
    ];

    /**
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @var \TKusy\Hl7FhirR4\CodeSystemPropertyType[] $property
     */
    private $property = [
        
    ];

    /**
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meanings of the hierarchical relationships are.
     *
     * @var \TKusy\Hl7FhirR4\CodeSystemConceptType[] $concept
     */
    private $concept = [
        
    ];

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this code system when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this code system is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the code system is stored on different servers. This is used in [Coding](datatypes.html#Coding).system.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets a new url
     *
     * An absolute URI that is used to identify this code system when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this code system is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the code system is stored on different servers. This is used in [Coding](datatypes.html#Coding).system.
     *
     * @param \TKusy\Hl7FhirR4\UriType $url
     * @return self
     */
    public function setUrl(\TKusy\Hl7FhirR4\UriType $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Adds as identifier
     *
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this code system when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * Gets as version
     *
     * The identifier that is used to identify this version of the code system when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the code system author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. This is used in [Coding](datatypes.html#Coding).version.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The identifier that is used to identify this version of the code system when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the code system author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. This is used in [Coding](datatypes.html#Coding).version.
     *
     * @param \TKusy\Hl7FhirR4\StringType $version
     * @return self
     */
    public function setVersion(\TKusy\Hl7FhirR4\StringType $version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as name
     *
     * A natural language name identifying the code system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the code system. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * Gets as title
     *
     * A short, descriptive, user-friendly title for the code system.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short, descriptive, user-friendly title for the code system.
     *
     * @param \TKusy\Hl7FhirR4\StringType $title
     * @return self
     */
    public function setTitle(\TKusy\Hl7FhirR4\StringType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as status
     *
     * The date (and optionally time) when the code system resource was created or revised.
     *
     * @return \TKusy\Hl7FhirR4\PublicationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The date (and optionally time) when the code system resource was created or revised.
     *
     * @param \TKusy\Hl7FhirR4\PublicationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\PublicationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as experimental
     *
     * A Boolean value to indicate that this code system is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * Sets a new experimental
     *
     * A Boolean value to indicate that this code system is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $experimental
     * @return self
     */
    public function setExperimental(\TKusy\Hl7FhirR4\BooleanType $experimental)
    {
        $this->experimental = $experimental;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the code system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the code system changes.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date (and optionally time) when the code system was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the code system changes.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateTimeType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as publisher
     *
     * The name of the organization or individual that published the code system.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * The name of the organization or individual that published the code system.
     *
     * @param \TKusy\Hl7FhirR4\StringType $publisher
     * @return self
     */
    public function setPublisher(\TKusy\Hl7FhirR4\StringType $publisher)
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType $contact
     */
    public function addToContact(\TKusy\Hl7FhirR4\ContactDetailType $contact)
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
     * @return \TKusy\Hl7FhirR4\ContactDetailType[]
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType[] $contact
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
     * A free text natural language description of the code system from a consumer's perspective.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A free text natural language description of the code system from a consumer's perspective.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\MarkdownType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate code system instances.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UsageContextType $useContext
     */
    public function addToUseContext(\TKusy\Hl7FhirR4\UsageContextType $useContext)
    {
        $this->useContext[] = $useContext;
        return $this;
    }

    /**
     * isset useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate code system instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate code system instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate code system instances.
     *
     * @return \TKusy\Hl7FhirR4\UsageContextType[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * Sets a new useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate code system instances.
     *
     * @param \TKusy\Hl7FhirR4\UsageContextType[] $useContext
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
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction
     */
    public function addToJurisdiction(\TKusy\Hl7FhirR4\CodeableConceptType $jurisdiction)
    {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * isset jurisdiction
     *
     * A legal or geographic region in which the code system is intended to be used.
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
     * A legal or geographic region in which the code system is intended to be used.
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
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getJurisdiction()
    {
        return $this->jurisdiction;
    }

    /**
     * Sets a new jurisdiction
     *
     * A legal or geographic region in which the code system is intended to be used.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
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
     * Explanation of why this code system is needed and why it has been designed as it has.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * Explanation of why this code system is needed and why it has been designed as it has.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $purpose
     * @return self
     */
    public function setPurpose(\TKusy\Hl7FhirR4\MarkdownType $purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * A copyright statement relating to the code system and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the code system.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Sets a new copyright
     *
     * A copyright statement relating to the code system and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the code system.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $copyright
     * @return self
     */
    public function setCopyright(\TKusy\Hl7FhirR4\MarkdownType $copyright)
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * Gets as caseSensitive
     *
     * If code comparison is case sensitive when codes within this system are compared to each other.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    /**
     * Sets a new caseSensitive
     *
     * If code comparison is case sensitive when codes within this system are compared to each other.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $caseSensitive
     * @return self
     */
    public function setCaseSensitive(\TKusy\Hl7FhirR4\BooleanType $caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
        return $this;
    }

    /**
     * Gets as valueSet
     *
     * Canonical reference to the value set that contains the entire code system.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getValueSet()
    {
        return $this->valueSet;
    }

    /**
     * Sets a new valueSet
     *
     * Canonical reference to the value set that contains the entire code system.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $valueSet
     * @return self
     */
    public function setValueSet(\TKusy\Hl7FhirR4\CanonicalType $valueSet)
    {
        $this->valueSet = $valueSet;
        return $this;
    }

    /**
     * Gets as hierarchyMeaning
     *
     * The meaning of the hierarchy of concepts as represented in this resource.
     *
     * @return \TKusy\Hl7FhirR4\CodeSystemHierarchyMeaningType
     */
    public function getHierarchyMeaning()
    {
        return $this->hierarchyMeaning;
    }

    /**
     * Sets a new hierarchyMeaning
     *
     * The meaning of the hierarchy of concepts as represented in this resource.
     *
     * @param \TKusy\Hl7FhirR4\CodeSystemHierarchyMeaningType $hierarchyMeaning
     * @return self
     */
    public function setHierarchyMeaning(\TKusy\Hl7FhirR4\CodeSystemHierarchyMeaningType $hierarchyMeaning)
    {
        $this->hierarchyMeaning = $hierarchyMeaning;
        return $this;
    }

    /**
     * Gets as compositional
     *
     * The code system defines a compositional (post-coordination) grammar.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getCompositional()
    {
        return $this->compositional;
    }

    /**
     * Sets a new compositional
     *
     * The code system defines a compositional (post-coordination) grammar.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $compositional
     * @return self
     */
    public function setCompositional(\TKusy\Hl7FhirR4\BooleanType $compositional)
    {
        $this->compositional = $compositional;
        return $this;
    }

    /**
     * Gets as versionNeeded
     *
     * This flag is used to signify that the code system does not commit to concept permanence across versions. If true, a version must be specified when referencing this code system.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getVersionNeeded()
    {
        return $this->versionNeeded;
    }

    /**
     * Sets a new versionNeeded
     *
     * This flag is used to signify that the code system does not commit to concept permanence across versions. If true, a version must be specified when referencing this code system.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $versionNeeded
     * @return self
     */
    public function setVersionNeeded(\TKusy\Hl7FhirR4\BooleanType $versionNeeded)
    {
        $this->versionNeeded = $versionNeeded;
        return $this;
    }

    /**
     * Gets as content
     *
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     *
     * @return \TKusy\Hl7FhirR4\CodeSystemContentModeType
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The extent of the content of the code system (the concepts and codes it defines) are represented in this resource instance.
     *
     * @param \TKusy\Hl7FhirR4\CodeSystemContentModeType $content
     * @return self
     */
    public function setContent(\TKusy\Hl7FhirR4\CodeSystemContentModeType $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as supplements
     *
     * The canonical URL of the code system that this code system supplement is adding designations and properties to.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getSupplements()
    {
        return $this->supplements;
    }

    /**
     * Sets a new supplements
     *
     * The canonical URL of the code system that this code system supplement is adding designations and properties to.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $supplements
     * @return self
     */
    public function setSupplements(\TKusy\Hl7FhirR4\CanonicalType $supplements)
    {
        $this->supplements = $supplements;
        return $this;
    }

    /**
     * Gets as count
     *
     * The total number of concepts defined by the code system. Where the code system has a compositional grammar, the basis of this count is defined by the system steward.
     *
     * @return \TKusy\Hl7FhirR4\UnsignedIntType
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The total number of concepts defined by the code system. Where the code system has a compositional grammar, the basis of this count is defined by the system steward.
     *
     * @param \TKusy\Hl7FhirR4\UnsignedIntType $count
     * @return self
     */
    public function setCount(\TKusy\Hl7FhirR4\UnsignedIntType $count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Adds as filter
     *
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeSystemFilterType $filter
     */
    public function addToFilter(\TKusy\Hl7FhirR4\CodeSystemFilterType $filter)
    {
        $this->filter[] = $filter;
        return $this;
    }

    /**
     * isset filter
     *
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFilter($index)
    {
        return isset($this->filter[$index]);
    }

    /**
     * unset filter
     *
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFilter($index)
    {
        unset($this->filter[$index]);
    }

    /**
     * Gets as filter
     *
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     *
     * @return \TKusy\Hl7FhirR4\CodeSystemFilterType[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * A filter that can be used in a value set compose statement when selecting concepts using a filter.
     *
     * @param \TKusy\Hl7FhirR4\CodeSystemFilterType[] $filter
     * @return self
     */
    public function setFilter(array $filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Adds as property
     *
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeSystemPropertyType $property
     */
    public function addToProperty(\TKusy\Hl7FhirR4\CodeSystemPropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @return \TKusy\Hl7FhirR4\CodeSystemPropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * A property defines an additional slot through which additional information can be provided about a concept.
     *
     * @param \TKusy\Hl7FhirR4\CodeSystemPropertyType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }

    /**
     * Adds as concept
     *
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meanings of the hierarchical relationships are.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeSystemConceptType $concept
     */
    public function addToConcept(\TKusy\Hl7FhirR4\CodeSystemConceptType $concept)
    {
        $this->concept[] = $concept;
        return $this;
    }

    /**
     * isset concept
     *
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meanings of the hierarchical relationships are.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConcept($index)
    {
        return isset($this->concept[$index]);
    }

    /**
     * unset concept
     *
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meanings of the hierarchical relationships are.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConcept($index)
    {
        unset($this->concept[$index]);
    }

    /**
     * Gets as concept
     *
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meanings of the hierarchical relationships are.
     *
     * @return \TKusy\Hl7FhirR4\CodeSystemConceptType[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * Sets a new concept
     *
     * Concepts that are in the code system. The concept definitions are inherently hierarchical, but the definitions must be consulted to determine what the meanings of the hierarchical relationships are.
     *
     * @param \TKusy\Hl7FhirR4\CodeSystemConceptType[] $concept
     * @return self
     */
    public function setConcept(array $concept)
    {
        $this->concept = $concept;
        return $this;
    }


}

