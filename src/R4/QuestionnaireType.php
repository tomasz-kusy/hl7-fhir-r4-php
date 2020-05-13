<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing QuestionnaireType
 *
 * A structured set of questions intended to guide the collection of answers from end-users. Questionnaires provide detailed control over order, presentation, phraseology and grouping to allow coherent, consistent data collection.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Questionnaire
 */
class QuestionnaireType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this questionnaire when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this questionnaire is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the questionnaire is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R4\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this questionnaire when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the questionnaire when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the questionnaire author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $version
     */
    private $version = null;

    /**
     * A natural language name identifying the questionnaire. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the questionnaire.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $title
     */
    private $title = null;

    /**
     * The URL of a Questionnaire that this Questionnaire is based on.
     *
     * @var \TKusy\Hl7Fhir\R4\CanonicalType[] $derivedFrom
     */
    private $derivedFrom = null;

    /**
     * The status of this questionnaire. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this questionnaire is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The types of subjects that can be the subject of responses created for the questionnaire.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeType[] $subjectType
     */
    private $subjectType = null;

    /**
     * The date (and optionally time) when the questionnaire was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the questionnaire changes.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the questionnaire.
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
     * A free text natural language description of the questionnaire from a consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate questionnaire instances.
     *
     * @var \TKusy\Hl7Fhir\R4\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the questionnaire is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this questionnaire is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R4\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A copyright statement relating to the questionnaire and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the questionnaire.
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
     * The period during which the questionnaire content was or is planned to be in active use.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * An identifier for this question or group of questions in a particular terminology such as LOINC.
     *
     * @var \TKusy\Hl7Fhir\R4\CodingType[] $code
     */
    private $code = null;

    /**
     * A particular question, question grouping or display text that is part of the questionnaire.
     *
     * @var \TKusy\Hl7Fhir\R4\QuestionnaireItemType[] $item
     */
    private $item = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this questionnaire when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this questionnaire is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the questionnaire is stored on different servers.
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
     * An absolute URI that is used to identify this questionnaire when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this questionnaire is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the questionnaire is stored on different servers.
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
     * A formal identifier that is used to identify this questionnaire when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this questionnaire when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this questionnaire when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this questionnaire when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this questionnaire when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the questionnaire when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the questionnaire author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the questionnaire when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the questionnaire author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the questionnaire. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the questionnaire. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the questionnaire.
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
     * A short, descriptive, user-friendly title for the questionnaire.
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
     * Adds as derivedFrom
     *
     * The URL of a Questionnaire that this Questionnaire is based on.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CanonicalType $derivedFrom
     */
    public function addToDerivedFrom(\TKusy\Hl7Fhir\R4\CanonicalType $derivedFrom)
    {
        $this->derivedFrom[] = $derivedFrom;
        return $this;
    }

    /**
     * isset derivedFrom
     *
     * The URL of a Questionnaire that this Questionnaire is based on.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDerivedFrom($index)
    {
        return isset($this->derivedFrom[$index]);
    }

    /**
     * unset derivedFrom
     *
     * The URL of a Questionnaire that this Questionnaire is based on.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDerivedFrom($index)
    {
        unset($this->derivedFrom[$index]);
    }

    /**
     * Gets as derivedFrom
     *
     * The URL of a Questionnaire that this Questionnaire is based on.
     *
     * @return \TKusy\Hl7Fhir\R4\CanonicalType[]
     */
    public function getDerivedFrom()
    {
        return $this->derivedFrom;
    }

    /**
     * Sets a new derivedFrom
     *
     * The URL of a Questionnaire that this Questionnaire is based on.
     *
     * @param \TKusy\Hl7Fhir\R4\CanonicalType[] $derivedFrom
     * @return self
     */
    public function setDerivedFrom(array $derivedFrom)
    {
        $this->derivedFrom = $derivedFrom;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this questionnaire. Enables tracking the life-cycle of the content.
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
     * The status of this questionnaire. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this questionnaire is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this questionnaire is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * Adds as subjectType
     *
     * The types of subjects that can be the subject of responses created for the questionnaire.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeType $subjectType
     */
    public function addToSubjectType(\TKusy\Hl7Fhir\R4\CodeType $subjectType)
    {
        $this->subjectType[] = $subjectType;
        return $this;
    }

    /**
     * isset subjectType
     *
     * The types of subjects that can be the subject of responses created for the questionnaire.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubjectType($index)
    {
        return isset($this->subjectType[$index]);
    }

    /**
     * unset subjectType
     *
     * The types of subjects that can be the subject of responses created for the questionnaire.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubjectType($index)
    {
        unset($this->subjectType[$index]);
    }

    /**
     * Gets as subjectType
     *
     * The types of subjects that can be the subject of responses created for the questionnaire.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeType[]
     */
    public function getSubjectType()
    {
        return $this->subjectType;
    }

    /**
     * Sets a new subjectType
     *
     * The types of subjects that can be the subject of responses created for the questionnaire.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeType[] $subjectType
     * @return self
     */
    public function setSubjectType(array $subjectType)
    {
        $this->subjectType = $subjectType;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the questionnaire was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the questionnaire changes.
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
     * The date (and optionally time) when the questionnaire was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the questionnaire changes.
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
     * The name of the organization or individual that published the questionnaire.
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
     * The name of the organization or individual that published the questionnaire.
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
     * A free text natural language description of the questionnaire from a consumer's perspective.
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
     * A free text natural language description of the questionnaire from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate questionnaire instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate questionnaire instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate questionnaire instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate questionnaire instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate questionnaire instances.
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
     * A legal or geographic region in which the questionnaire is intended to be used.
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
     * A legal or geographic region in which the questionnaire is intended to be used.
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
     * A legal or geographic region in which the questionnaire is intended to be used.
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
     * A legal or geographic region in which the questionnaire is intended to be used.
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
     * A legal or geographic region in which the questionnaire is intended to be used.
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
     * Explanation of why this questionnaire is needed and why it has been designed as it has.
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
     * Explanation of why this questionnaire is needed and why it has been designed as it has.
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
     * Gets as copyright
     *
     * A copyright statement relating to the questionnaire and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the questionnaire.
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
     * A copyright statement relating to the questionnaire and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the questionnaire.
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
     * The period during which the questionnaire content was or is planned to be in active use.
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
     * The period during which the questionnaire content was or is planned to be in active use.
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
     * Adds as code
     *
     * An identifier for this question or group of questions in a particular terminology such as LOINC.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodingType $code
     */
    public function addToCode(\TKusy\Hl7Fhir\R4\CodingType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * An identifier for this question or group of questions in a particular terminology such as LOINC.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * An identifier for this question or group of questions in a particular terminology such as LOINC.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * An identifier for this question or group of questions in a particular terminology such as LOINC.
     *
     * @return \TKusy\Hl7Fhir\R4\CodingType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * An identifier for this question or group of questions in a particular terminology such as LOINC.
     *
     * @param \TKusy\Hl7Fhir\R4\CodingType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as item
     *
     * A particular question, question grouping or display text that is part of the questionnaire.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\QuestionnaireItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R4\QuestionnaireItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * A particular question, question grouping or display text that is part of the questionnaire.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * A particular question, question grouping or display text that is part of the questionnaire.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * A particular question, question grouping or display text that is part of the questionnaire.
     *
     * @return \TKusy\Hl7Fhir\R4\QuestionnaireItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * A particular question, question grouping or display text that is part of the questionnaire.
     *
     * @param \TKusy\Hl7Fhir\R4\QuestionnaireItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }


}

