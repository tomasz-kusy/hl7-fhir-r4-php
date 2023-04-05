<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MessageDefinitionType
 *
 * Defines the characteristics of a message that can be shared between systems, including the type of event that initiates the message, the content to be transmitted and what response(s), if any, are permitted.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MessageDefinition
 */
class MessageDefinitionType extends CanonicalResourceType
{

    /**
     * The business identifier that is used to reference the MessageDefinition and *is* expected to be consistent from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this message definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the message definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the message definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the message definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the message definition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * A MessageDefinition that is superseded by this definition.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $replaces
     */
    private $replaces = null;

    /**
     * The status of this message definition. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this message definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the message definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the message definition changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual responsible for the release and ongoing maintenance of the message definition.
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
     * A free text natural language description of the message definition from a consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate message definition instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the message definition is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this message definition is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the message definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the message definition.
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
     * The MessageDefinition that is the basis for the contents of this resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $base
     */
    private $base = null;

    /**
     * Identifies a protocol or workflow that this MessageDefinition represents a step in.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $parent
     */
    private $parent = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodingType $eventCoding
     */
    private $eventCoding = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\UriType $eventUri
     */
    private $eventUri = null;

    /**
     * The impact of the content of the message.
     *
     * @var \TKusy\Hl7Fhir\R5\MessageSignificanceCategoryType $category
     */
    private $category = null;

    /**
     * Identifies the resource (or resources) that are being addressed by the event. For example, the Encounter for an admit message or two Account records for a merge.
     *
     * @var \TKusy\Hl7Fhir\R5\MessageDefinitionFocusType[] $focus
     */
    private $focus = null;

    /**
     * Declare at a message definition level whether a response is required or only upon error or success, or never.
     *
     * @var \TKusy\Hl7Fhir\R5\MessageheaderResponseRequestType $responseRequired
     */
    private $responseRequired = null;

    /**
     * Indicates what types of messages may be sent as an application-level response to this message.
     *
     * @var \TKusy\Hl7Fhir\R5\MessageDefinitionAllowedResponseType[] $allowedResponse
     */
    private $allowedResponse = null;

    /**
     * Graph is Canonical reference to a GraphDefinition. If a URL is provided, it is the canonical reference to a GraphDefinition that it controls what additional resources are to be added to the Bundle when building the message. The GraphDefinition can also specify profiles that apply to the various resources.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType $graph
     */
    private $graph = null;

    /**
     * Gets as url
     *
     * The business identifier that is used to reference the MessageDefinition and *is* expected to be consistent from server to server.
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
     * The business identifier that is used to reference the MessageDefinition and *is* expected to be consistent from server to server.
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
     * A formal identifier that is used to identify this message definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this message definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this message definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this message definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this message definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the message definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the message definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the message definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the message definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the message definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the message definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the message definition.
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
     * A short, descriptive, user-friendly title for the message definition.
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
     * Adds as replaces
     *
     * A MessageDefinition that is superseded by this definition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $replaces
     */
    public function addToReplaces(\TKusy\Hl7Fhir\R5\CanonicalType $replaces)
    {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * isset replaces
     *
     * A MessageDefinition that is superseded by this definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplaces($index)
    {
        return isset($this->replaces[$index]);
    }

    /**
     * unset replaces
     *
     * A MessageDefinition that is superseded by this definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplaces($index)
    {
        unset($this->replaces[$index]);
    }

    /**
     * Gets as replaces
     *
     * A MessageDefinition that is superseded by this definition.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getReplaces()
    {
        return $this->replaces;
    }

    /**
     * Sets a new replaces
     *
     * A MessageDefinition that is superseded by this definition.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $replaces
     * @return self
     */
    public function setReplaces(array $replaces = null)
    {
        $this->replaces = $replaces;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this message definition. Enables tracking the life-cycle of the content.
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
     * The status of this message definition. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this message definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this message definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the message definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the message definition changes.
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
     * The date (and optionally time) when the message definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the message definition changes.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the message definition.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the message definition.
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
     * A free text natural language description of the message definition from a consumer's perspective.
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
     * A free text natural language description of the message definition from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate message definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate message definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate message definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate message definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate message definition instances.
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
     * A legal or geographic region in which the message definition is intended to be used.
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
     * A legal or geographic region in which the message definition is intended to be used.
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
     * A legal or geographic region in which the message definition is intended to be used.
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
     * A legal or geographic region in which the message definition is intended to be used.
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
     * A legal or geographic region in which the message definition is intended to be used.
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
     * Explanation of why this message definition is needed and why it has been designed as it has.
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
     * Explanation of why this message definition is needed and why it has been designed as it has.
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
     * A copyright statement relating to the message definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the message definition.
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
     * A copyright statement relating to the message definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the message definition.
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
     * Gets as base
     *
     * The MessageDefinition that is the basis for the contents of this resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Sets a new base
     *
     * The MessageDefinition that is the basis for the contents of this resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $base
     * @return self
     */
    public function setBase(?\TKusy\Hl7Fhir\R5\CanonicalType $base = null)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Adds as parent
     *
     * Identifies a protocol or workflow that this MessageDefinition represents a step in.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $parent
     */
    public function addToParent(\TKusy\Hl7Fhir\R5\CanonicalType $parent)
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * isset parent
     *
     * Identifies a protocol or workflow that this MessageDefinition represents a step in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParent($index)
    {
        return isset($this->parent[$index]);
    }

    /**
     * unset parent
     *
     * Identifies a protocol or workflow that this MessageDefinition represents a step in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParent($index)
    {
        unset($this->parent[$index]);
    }

    /**
     * Gets as parent
     *
     * Identifies a protocol or workflow that this MessageDefinition represents a step in.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * Identifies a protocol or workflow that this MessageDefinition represents a step in.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $parent
     * @return self
     */
    public function setParent(array $parent = null)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as eventCoding
     *
     * @return \TKusy\Hl7Fhir\R5\CodingType
     */
    public function getEventCoding()
    {
        return $this->eventCoding;
    }

    /**
     * Sets a new eventCoding
     *
     * @param \TKusy\Hl7Fhir\R5\CodingType $eventCoding
     * @return self
     */
    public function setEventCoding(?\TKusy\Hl7Fhir\R5\CodingType $eventCoding = null)
    {
        $this->eventCoding = $eventCoding;
        return $this;
    }

    /**
     * Gets as eventUri
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
     */
    public function getEventUri()
    {
        return $this->eventUri;
    }

    /**
     * Sets a new eventUri
     *
     * @param \TKusy\Hl7Fhir\R5\UriType $eventUri
     * @return self
     */
    public function setEventUri(?\TKusy\Hl7Fhir\R5\UriType $eventUri = null)
    {
        $this->eventUri = $eventUri;
        return $this;
    }

    /**
     * Gets as category
     *
     * The impact of the content of the message.
     *
     * @return \TKusy\Hl7Fhir\R5\MessageSignificanceCategoryType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * The impact of the content of the message.
     *
     * @param \TKusy\Hl7Fhir\R5\MessageSignificanceCategoryType $category
     * @return self
     */
    public function setCategory(?\TKusy\Hl7Fhir\R5\MessageSignificanceCategoryType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as focus
     *
     * Identifies the resource (or resources) that are being addressed by the event. For example, the Encounter for an admit message or two Account records for a merge.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MessageDefinitionFocusType $focus
     */
    public function addToFocus(\TKusy\Hl7Fhir\R5\MessageDefinitionFocusType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * Identifies the resource (or resources) that are being addressed by the event. For example, the Encounter for an admit message or two Account records for a merge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFocus($index)
    {
        return isset($this->focus[$index]);
    }

    /**
     * unset focus
     *
     * Identifies the resource (or resources) that are being addressed by the event. For example, the Encounter for an admit message or two Account records for a merge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFocus($index)
    {
        unset($this->focus[$index]);
    }

    /**
     * Gets as focus
     *
     * Identifies the resource (or resources) that are being addressed by the event. For example, the Encounter for an admit message or two Account records for a merge.
     *
     * @return \TKusy\Hl7Fhir\R5\MessageDefinitionFocusType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * Identifies the resource (or resources) that are being addressed by the event. For example, the Encounter for an admit message or two Account records for a merge.
     *
     * @param \TKusy\Hl7Fhir\R5\MessageDefinitionFocusType[] $focus
     * @return self
     */
    public function setFocus(array $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Gets as responseRequired
     *
     * Declare at a message definition level whether a response is required or only upon error or success, or never.
     *
     * @return \TKusy\Hl7Fhir\R5\MessageheaderResponseRequestType
     */
    public function getResponseRequired()
    {
        return $this->responseRequired;
    }

    /**
     * Sets a new responseRequired
     *
     * Declare at a message definition level whether a response is required or only upon error or success, or never.
     *
     * @param \TKusy\Hl7Fhir\R5\MessageheaderResponseRequestType $responseRequired
     * @return self
     */
    public function setResponseRequired(?\TKusy\Hl7Fhir\R5\MessageheaderResponseRequestType $responseRequired = null)
    {
        $this->responseRequired = $responseRequired;
        return $this;
    }

    /**
     * Adds as allowedResponse
     *
     * Indicates what types of messages may be sent as an application-level response to this message.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MessageDefinitionAllowedResponseType $allowedResponse
     */
    public function addToAllowedResponse(\TKusy\Hl7Fhir\R5\MessageDefinitionAllowedResponseType $allowedResponse)
    {
        $this->allowedResponse[] = $allowedResponse;
        return $this;
    }

    /**
     * isset allowedResponse
     *
     * Indicates what types of messages may be sent as an application-level response to this message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowedResponse($index)
    {
        return isset($this->allowedResponse[$index]);
    }

    /**
     * unset allowedResponse
     *
     * Indicates what types of messages may be sent as an application-level response to this message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowedResponse($index)
    {
        unset($this->allowedResponse[$index]);
    }

    /**
     * Gets as allowedResponse
     *
     * Indicates what types of messages may be sent as an application-level response to this message.
     *
     * @return \TKusy\Hl7Fhir\R5\MessageDefinitionAllowedResponseType[]
     */
    public function getAllowedResponse()
    {
        return $this->allowedResponse;
    }

    /**
     * Sets a new allowedResponse
     *
     * Indicates what types of messages may be sent as an application-level response to this message.
     *
     * @param \TKusy\Hl7Fhir\R5\MessageDefinitionAllowedResponseType[] $allowedResponse
     * @return self
     */
    public function setAllowedResponse(array $allowedResponse = null)
    {
        $this->allowedResponse = $allowedResponse;
        return $this;
    }

    /**
     * Gets as graph
     *
     * Graph is Canonical reference to a GraphDefinition. If a URL is provided, it is the canonical reference to a GraphDefinition that it controls what additional resources are to be added to the Bundle when building the message. The GraphDefinition can also specify profiles that apply to the various resources.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType
     */
    public function getGraph()
    {
        return $this->graph;
    }

    /**
     * Sets a new graph
     *
     * Graph is Canonical reference to a GraphDefinition. If a URL is provided, it is the canonical reference to a GraphDefinition that it controls what additional resources are to be added to the Bundle when building the message. The GraphDefinition can also specify profiles that apply to the various resources.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $graph
     * @return self
     */
    public function setGraph(?\TKusy\Hl7Fhir\R5\CanonicalType $graph = null)
    {
        $this->graph = $graph;
        return $this;
    }


}

