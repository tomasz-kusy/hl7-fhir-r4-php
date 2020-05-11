<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing EvidenceVariableType
 *
 * The EvidenceVariable resource describes a "PICO" element that knowledge (evidence, assertion, recommendation) is about.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: EvidenceVariable
 */
class EvidenceVariableType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this evidence variable when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this evidence variable is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the evidence variable is stored on different servers.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this evidence variable when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the evidence variable when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the evidence variable author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * A natural language name identifying the evidence variable. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the evidence variable.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The short title provides an alternate title for use in informal descriptive contexts where the full, formal title is not necessary.
     *
     * @var string $shortTitle
     */
    private $shortTitle = null;

    /**
     * An explanatory or alternate title for the EvidenceVariable giving additional information about its content.
     *
     * @var string $subtitle
     */
    private $subtitle = null;

    /**
     * The status of this evidence variable. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * The date (and optionally time) when the evidence variable was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the evidence variable changes.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the evidence variable.
     *
     * @var string $publisher
     */
    private $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * A free text natural language description of the evidence variable from a consumer's perspective.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence variable instances.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the evidence variable is intended to be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * A copyright statement relating to the evidence variable and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the evidence variable.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $copyright
     */
    private $copyright = null;

    /**
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @var \TKusy\Hl7FhirR4\DateType $approvalDate
     */
    private $approvalDate = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @var \TKusy\Hl7FhirR4\DateType $lastReviewDate
     */
    private $lastReviewDate = null;

    /**
     * The period during which the evidence variable content was or is planned to be in active use.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * Descriptive topics related to the content of the EvidenceVariable. Topics provide a high-level categorization grouping types of EvidenceVariables that can be useful for filtering and searching.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $topic
     */
    private $topic = null;

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $author
     */
    private $author = null;

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $editor
     */
    private $editor = null;

    /**
     * An individual or organization primarily responsible for review of some aspect of the content.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $reviewer
     */
    private $reviewer = null;

    /**
     * An individual or organization responsible for officially endorsing the content for use in some setting.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $endorser
     */
    private $endorser = null;

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     *
     * @var \TKusy\Hl7FhirR4\RelatedArtifactType[] $relatedArtifact
     */
    private $relatedArtifact = null;

    /**
     * The type of evidence element, a population, an exposure, or an outcome.
     *
     * @var \TKusy\Hl7FhirR4\EvidenceVariableTypeType $type
     */
    private $type = null;

    /**
     * A characteristic that defines the members of the evidence element. Multiple characteristics are applied with "and" semantics.
     *
     * @var \TKusy\Hl7FhirR4\EvidenceVariableCharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this evidence variable when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this evidence variable is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the evidence variable is stored on different servers.
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
     * An absolute URI that is used to identify this evidence variable when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this evidence variable is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the evidence variable is stored on different servers.
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
     * A formal identifier that is used to identify this evidence variable when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this evidence variable when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this evidence variable when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this evidence variable when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this evidence variable when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the evidence variable when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the evidence variable author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The identifier that is used to identify this version of the evidence variable when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the evidence variable author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as name
     *
     * A natural language name identifying the evidence variable. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A natural language name identifying the evidence variable. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short, descriptive, user-friendly title for the evidence variable.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * A short, descriptive, user-friendly title for the evidence variable.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as shortTitle
     *
     * The short title provides an alternate title for use in informal descriptive contexts where the full, formal title is not necessary.
     *
     * @return string
     */
    public function getShortTitle()
    {
        return $this->shortTitle;
    }

    /**
     * Sets a new shortTitle
     *
     * The short title provides an alternate title for use in informal descriptive contexts where the full, formal title is not necessary.
     *
     * @param string $shortTitle
     * @return self
     */
    public function setShortTitle($shortTitle)
    {
        $this->shortTitle = $shortTitle;
        return $this;
    }

    /**
     * Gets as subtitle
     *
     * An explanatory or alternate title for the EvidenceVariable giving additional information about its content.
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * An explanatory or alternate title for the EvidenceVariable giving additional information about its content.
     *
     * @param string $subtitle
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this evidence variable. Enables tracking the life-cycle of the content.
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
     * The status of this evidence variable. Enables tracking the life-cycle of the content.
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
     * Gets as date
     *
     * The date (and optionally time) when the evidence variable was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the evidence variable changes.
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
     * The date (and optionally time) when the evidence variable was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the evidence variable changes.
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
     * The name of the organization or individual that published the evidence variable.
     *
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets a new publisher
     *
     * The name of the organization or individual that published the evidence variable.
     *
     * @param string $publisher
     * @return self
     */
    public function setPublisher($publisher)
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
     * A free text natural language description of the evidence variable from a consumer's perspective.
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
     * A free text natural language description of the evidence variable from a consumer's perspective.
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
     * Adds as note
     *
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7FhirR4\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * A human-readable string to clarify or explain concepts about the resource.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as useContext
     *
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence variable instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence variable instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence variable instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence variable instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate evidence variable instances.
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
     * A legal or geographic region in which the evidence variable is intended to be used.
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
     * A legal or geographic region in which the evidence variable is intended to be used.
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
     * A legal or geographic region in which the evidence variable is intended to be used.
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
     * A legal or geographic region in which the evidence variable is intended to be used.
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
     * A legal or geographic region in which the evidence variable is intended to be used.
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
     * Gets as copyright
     *
     * A copyright statement relating to the evidence variable and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the evidence variable.
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
     * A copyright statement relating to the evidence variable and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the evidence variable.
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
     * Gets as approvalDate
     *
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @return \TKusy\Hl7FhirR4\DateType
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
     * @param \TKusy\Hl7FhirR4\DateType $approvalDate
     * @return self
     */
    public function setApprovalDate(\TKusy\Hl7FhirR4\DateType $approvalDate)
    {
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * Gets as lastReviewDate
     *
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @return \TKusy\Hl7FhirR4\DateType
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
     * @param \TKusy\Hl7FhirR4\DateType $lastReviewDate
     * @return self
     */
    public function setLastReviewDate(\TKusy\Hl7FhirR4\DateType $lastReviewDate)
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * The period during which the evidence variable content was or is planned to be in active use.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The period during which the evidence variable content was or is planned to be in active use.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\TKusy\Hl7FhirR4\PeriodType $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Adds as topic
     *
     * Descriptive topics related to the content of the EvidenceVariable. Topics provide a high-level categorization grouping types of EvidenceVariables that can be useful for filtering and searching.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $topic
     */
    public function addToTopic(\TKusy\Hl7FhirR4\CodeableConceptType $topic)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * isset topic
     *
     * Descriptive topics related to the content of the EvidenceVariable. Topics provide a high-level categorization grouping types of EvidenceVariables that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the EvidenceVariable. Topics provide a high-level categorization grouping types of EvidenceVariables that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the EvidenceVariable. Topics provide a high-level categorization grouping types of EvidenceVariables that can be useful for filtering and searching.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * Descriptive topics related to the content of the EvidenceVariable. Topics provide a high-level categorization grouping types of EvidenceVariables that can be useful for filtering and searching.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $topic
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType $author
     */
    public function addToAuthor(\TKusy\Hl7FhirR4\ContactDetailType $author)
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
     * @return \TKusy\Hl7FhirR4\ContactDetailType[]
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType[] $author
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType $editor
     */
    public function addToEditor(\TKusy\Hl7FhirR4\ContactDetailType $editor)
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
     * @return \TKusy\Hl7FhirR4\ContactDetailType[]
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType[] $editor
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType $reviewer
     */
    public function addToReviewer(\TKusy\Hl7FhirR4\ContactDetailType $reviewer)
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
     * @return \TKusy\Hl7FhirR4\ContactDetailType[]
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType[] $reviewer
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType $endorser
     */
    public function addToEndorser(\TKusy\Hl7FhirR4\ContactDetailType $endorser)
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
     * @return \TKusy\Hl7FhirR4\ContactDetailType[]
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
     * @param \TKusy\Hl7FhirR4\ContactDetailType[] $endorser
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
     * @param \TKusy\Hl7FhirR4\RelatedArtifactType $relatedArtifact
     */
    public function addToRelatedArtifact(\TKusy\Hl7FhirR4\RelatedArtifactType $relatedArtifact)
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
     * @return \TKusy\Hl7FhirR4\RelatedArtifactType[]
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
     * @param \TKusy\Hl7FhirR4\RelatedArtifactType[] $relatedArtifact
     * @return self
     */
    public function setRelatedArtifact(array $relatedArtifact)
    {
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of evidence element, a population, an exposure, or an outcome.
     *
     * @return \TKusy\Hl7FhirR4\EvidenceVariableTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of evidence element, a population, an exposure, or an outcome.
     *
     * @param \TKusy\Hl7FhirR4\EvidenceVariableTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\EvidenceVariableTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as characteristic
     *
     * A characteristic that defines the members of the evidence element. Multiple characteristics are applied with "and" semantics.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\EvidenceVariableCharacteristicType $characteristic
     */
    public function addToCharacteristic(\TKusy\Hl7FhirR4\EvidenceVariableCharacteristicType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * A characteristic that defines the members of the evidence element. Multiple characteristics are applied with "and" semantics.
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
     * A characteristic that defines the members of the evidence element. Multiple characteristics are applied with "and" semantics.
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
     * A characteristic that defines the members of the evidence element. Multiple characteristics are applied with "and" semantics.
     *
     * @return \TKusy\Hl7FhirR4\EvidenceVariableCharacteristicType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * A characteristic that defines the members of the evidence element. Multiple characteristics are applied with "and" semantics.
     *
     * @param \TKusy\Hl7FhirR4\EvidenceVariableCharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }


}

