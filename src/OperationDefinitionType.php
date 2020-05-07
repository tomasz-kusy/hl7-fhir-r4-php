<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing OperationDefinitionType
 *
 * A formal computable definition of an operation (on the RESTful interface) or a named query (using the search interaction).If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: OperationDefinition
 */
class OperationDefinitionType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this operation definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the operation definition is stored on different servers.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     *
     * @var \TKusy\Hl7FhirR4\StringType $version
     */
    private $version = null;

    /**
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the operation definition.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * The status of this operation definition. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * Whether this is an operation or a named query.
     *
     * @var \TKusy\Hl7FhirR4\OperationKindType $kind
     */
    private $kind = null;

    /**
     * A Boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the operation definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the operation definition.
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
     * A free text natural language description of the operation definition from a consumer's perspective.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate operation definition instances.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     */
    private $useContext = [
        
    ];

    /**
     * A legal or geographic region in which the operation definition is intended to be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = [
        
    ];

    /**
     * Explanation of why this operation definition is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * Whether the operation affects state. Side effects such as producing audit trail entries do not count as 'affecting state'.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $affectsState
     */
    private $affectsState = null;

    /**
     * The name used to invoke the operation.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $code
     */
    private $code = null;

    /**
     * Additional information about how to use this operation or named query.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $comment
     */
    private $comment = null;

    /**
     * Indicates that this operation definition is a constraining profile on the base.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $base
     */
    private $base = null;

    /**
     * The types on which this operation can be executed.
     *
     * @var \TKusy\Hl7FhirR4\CodeType[] $resource
     */
    private $resource = [
        
    ];

    /**
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $system
     */
    private $system = null;

    /**
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $type
     */
    private $type = null;

    /**
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $instance
     */
    private $instance = null;

    /**
     * Additional validation information for the in parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource as a whole.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $inputProfile
     */
    private $inputProfile = null;

    /**
     * Additional validation information for the out parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $outputProfile
     */
    private $outputProfile = null;

    /**
     * The parameters for the operation/query.
     *
     * @var \TKusy\Hl7FhirR4\OperationDefinitionParameterType[] $parameter
     */
    private $parameter = [
        
    ];

    /**
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     *
     * @var \TKusy\Hl7FhirR4\OperationDefinitionOverloadType[] $overload
     */
    private $overload = [
        
    ];

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this operation definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the operation definition is stored on different servers.
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
     * An absolute URI that is used to identify this operation definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this operation definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the operation definition is stored on different servers.
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
     * Gets as version
     *
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the operation definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the operation definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the operation definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the operation definition.
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
     * A short, descriptive, user-friendly title for the operation definition.
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
     * The status of this operation definition. Enables tracking the life-cycle of the content.
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
     * The status of this operation definition. Enables tracking the life-cycle of the content.
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
     * Gets as kind
     *
     * Whether this is an operation or a named query.
     *
     * @return \TKusy\Hl7FhirR4\OperationKindType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * Whether this is an operation or a named query.
     *
     * @param \TKusy\Hl7FhirR4\OperationKindType $kind
     * @return self
     */
    public function setKind(\TKusy\Hl7FhirR4\OperationKindType $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Gets as experimental
     *
     * A Boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this operation definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the operation definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
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
     * The date (and optionally time) when the operation definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the operation definition changes.
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
     * The name of the organization or individual that published the operation definition.
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
     * The name of the organization or individual that published the operation definition.
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
     * A free text natural language description of the operation definition from a consumer's perspective.
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
     * A free text natural language description of the operation definition from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate operation definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate operation definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate operation definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate operation definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate operation definition instances.
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
     * A legal or geographic region in which the operation definition is intended to be used.
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
     * A legal or geographic region in which the operation definition is intended to be used.
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
     * A legal or geographic region in which the operation definition is intended to be used.
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
     * A legal or geographic region in which the operation definition is intended to be used.
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
     * A legal or geographic region in which the operation definition is intended to be used.
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
     * Explanation of why this operation definition is needed and why it has been designed as it has.
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
     * Explanation of why this operation definition is needed and why it has been designed as it has.
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
     * Gets as affectsState
     *
     * Whether the operation affects state. Side effects such as producing audit trail entries do not count as 'affecting state'.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getAffectsState()
    {
        return $this->affectsState;
    }

    /**
     * Sets a new affectsState
     *
     * Whether the operation affects state. Side effects such as producing audit trail entries do not count as 'affecting state'.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $affectsState
     * @return self
     */
    public function setAffectsState(\TKusy\Hl7FhirR4\BooleanType $affectsState)
    {
        $this->affectsState = $affectsState;
        return $this;
    }

    /**
     * Gets as code
     *
     * The name used to invoke the operation.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The name used to invoke the operation.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Additional information about how to use this operation or named query.
     *
     * @return \TKusy\Hl7FhirR4\MarkdownType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Additional information about how to use this operation or named query.
     *
     * @param \TKusy\Hl7FhirR4\MarkdownType $comment
     * @return self
     */
    public function setComment(\TKusy\Hl7FhirR4\MarkdownType $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as base
     *
     * Indicates that this operation definition is a constraining profile on the base.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Sets a new base
     *
     * Indicates that this operation definition is a constraining profile on the base.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $base
     * @return self
     */
    public function setBase(\TKusy\Hl7FhirR4\CanonicalType $base)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Adds as resource
     *
     * The types on which this operation can be executed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeType $resource
     */
    public function addToResource(\TKusy\Hl7FhirR4\CodeType $resource)
    {
        $this->resource[] = $resource;
        return $this;
    }

    /**
     * isset resource
     *
     * The types on which this operation can be executed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResource($index)
    {
        return isset($this->resource[$index]);
    }

    /**
     * unset resource
     *
     * The types on which this operation can be executed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResource($index)
    {
        unset($this->resource[$index]);
    }

    /**
     * Gets as resource
     *
     * The types on which this operation can be executed.
     *
     * @return \TKusy\Hl7FhirR4\CodeType[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Sets a new resource
     *
     * The types on which this operation can be executed.
     *
     * @param \TKusy\Hl7FhirR4\CodeType[] $resource
     * @return self
     */
    public function setResource(array $resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * Gets as system
     *
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Sets a new system
     *
     * Indicates whether this operation or named query can be invoked at the system level (e.g. without needing to choose a resource type for the context).
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $system
     * @return self
     */
    public function setSystem(\TKusy\Hl7FhirR4\BooleanType $system)
    {
        $this->system = $system;
        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates whether this operation or named query can be invoked at the resource type level for any given resource type level (e.g. without needing to choose a specific resource id for the context).
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\BooleanType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as instance
     *
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * Indicates whether this operation can be invoked on a particular instance of one of the given types.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $instance
     * @return self
     */
    public function setInstance(\TKusy\Hl7FhirR4\BooleanType $instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Gets as inputProfile
     *
     * Additional validation information for the in parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource as a whole.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getInputProfile()
    {
        return $this->inputProfile;
    }

    /**
     * Sets a new inputProfile
     *
     * Additional validation information for the in parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource as a whole.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $inputProfile
     * @return self
     */
    public function setInputProfile(\TKusy\Hl7FhirR4\CanonicalType $inputProfile)
    {
        $this->inputProfile = $inputProfile;
        return $this;
    }

    /**
     * Gets as outputProfile
     *
     * Additional validation information for the out parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getOutputProfile()
    {
        return $this->outputProfile;
    }

    /**
     * Sets a new outputProfile
     *
     * Additional validation information for the out parameters - a single profile that covers all the parameters. The profile is a constraint on the parameters resource.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $outputProfile
     * @return self
     */
    public function setOutputProfile(\TKusy\Hl7FhirR4\CanonicalType $outputProfile)
    {
        $this->outputProfile = $outputProfile;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * The parameters for the operation/query.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\OperationDefinitionParameterType $parameter
     */
    public function addToParameter(\TKusy\Hl7FhirR4\OperationDefinitionParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * The parameters for the operation/query.
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
     * The parameters for the operation/query.
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
     * The parameters for the operation/query.
     *
     * @return \TKusy\Hl7FhirR4\OperationDefinitionParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * The parameters for the operation/query.
     *
     * @param \TKusy\Hl7FhirR4\OperationDefinitionParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Adds as overload
     *
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\OperationDefinitionOverloadType $overload
     */
    public function addToOverload(\TKusy\Hl7FhirR4\OperationDefinitionOverloadType $overload)
    {
        $this->overload[] = $overload;
        return $this;
    }

    /**
     * isset overload
     *
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOverload($index)
    {
        return isset($this->overload[$index]);
    }

    /**
     * unset overload
     *
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOverload($index)
    {
        unset($this->overload[$index]);
    }

    /**
     * Gets as overload
     *
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     *
     * @return \TKusy\Hl7FhirR4\OperationDefinitionOverloadType[]
     */
    public function getOverload()
    {
        return $this->overload;
    }

    /**
     * Sets a new overload
     *
     * Defines an appropriate combination of parameters to use when invoking this operation, to help code generators when generating overloaded parameter sets for this operation.
     *
     * @param \TKusy\Hl7FhirR4\OperationDefinitionOverloadType[] $overload
     * @return self
     */
    public function setOverload(array $overload)
    {
        $this->overload = $overload;
        return $this;
    }


}

