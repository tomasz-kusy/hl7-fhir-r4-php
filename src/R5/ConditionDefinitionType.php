<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConditionDefinitionType
 *
 * A definition of a condition and information relevant to managing it.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ConditionDefinition
 */
class ConditionDefinitionType extends MetadataResourceType
{

    /**
     * An absolute URI that is used to identify this condition definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this condition definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the condition definition is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the condition definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the condition definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the condition definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the condition definition.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * An explanatory or alternate title for the event definition giving additional information about its content.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $subtitle
     */
    private $subtitle = null;

    /**
     * The status of this condition definition. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this condition definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * The date (and optionally time) when the condition definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the condition definition changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual responsible for the release and ongoing maintenance of the condition definition.
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
     * A free text natural language description of the condition definition from a consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate condition definition instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the condition definition is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Identification of the condition, problem or diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $severity
     */
    private $severity = null;

    /**
     * The anatomical location where this condition manifests itself.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite
     */
    private $bodySite = null;

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $stage
     */
    private $stage = null;

    /**
     * Whether Severity is appropriate to collect for this condition.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $hasSeverity
     */
    private $hasSeverity = null;

    /**
     * Whether bodySite is appropriate to collect for this condition.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $hasBodySite
     */
    private $hasBodySite = null;

    /**
     * Whether stage is appropriate to collect for this condition.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $hasStage
     */
    private $hasStage = null;

    /**
     * Formal definitions of the condition. These may be references to ontologies, published clinical protocols or research papers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType[] $definition
     */
    private $definition = null;

    /**
     * Observations particularly relevant to this condition.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionDefinitionObservationType[] $observation
     */
    private $observation = null;

    /**
     * Medications particularly relevant for this condition.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionDefinitionMedicationType[] $medication
     */
    private $medication = null;

    /**
     * An observation that suggests that this condition applies.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionDefinitionPreconditionType[] $precondition
     */
    private $precondition = null;

    /**
     * Appropriate team for this condition.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $team
     */
    private $team = null;

    /**
     * Questionnaire for this condition.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionDefinitionQuestionnaireType[] $questionnaire
     */
    private $questionnaire = null;

    /**
     * Plan that is appropriate.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionDefinitionPlanType[] $plan
     */
    private $plan = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this condition definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this condition definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the condition definition is stored on different servers.
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
     * An absolute URI that is used to identify this condition definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this condition definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the condition definition is stored on different servers.
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
     * A formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the condition definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the condition definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * The identifier that is used to identify this version of the condition definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the condition definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence.
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
     * A natural language name identifying the condition definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the condition definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the condition definition.
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
     * A short, descriptive, user-friendly title for the condition definition.
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
     * Gets as subtitle
     *
     * An explanatory or alternate title for the event definition giving additional information about its content.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * An explanatory or alternate title for the event definition giving additional information about its content.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $subtitle
     * @return self
     */
    public function setSubtitle(?\TKusy\Hl7Fhir\R5\StringType $subtitle = null)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this condition definition. Enables tracking the life-cycle of the content.
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
     * The status of this condition definition. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this condition definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this condition definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * The date (and optionally time) when the condition definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the condition definition changes.
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
     * The date (and optionally time) when the condition definition was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the condition definition changes.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the condition definition.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the condition definition.
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
     * A free text natural language description of the condition definition from a consumer's perspective.
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
     * A free text natural language description of the condition definition from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate condition definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate condition definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate condition definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate condition definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate condition definition instances.
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
     * A legal or geographic region in which the condition definition is intended to be used.
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
     * A legal or geographic region in which the condition definition is intended to be used.
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
     * A legal or geographic region in which the condition definition is intended to be used.
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
     * A legal or geographic region in which the condition definition is intended to be used.
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
     * A legal or geographic region in which the condition definition is intended to be used.
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
     * Gets as code
     *
     * Identification of the condition, problem or diagnosis.
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
     * Identification of the condition, problem or diagnosis.
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
     * Gets as severity
     *
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $severity
     * @return self
     */
    public function setSeverity(?\TKusy\Hl7Fhir\R5\CodeableConceptType $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as bodySite
     *
     * The anatomical location where this condition manifests itself.
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
     * The anatomical location where this condition manifests itself.
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
     * Gets as stage
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Sets a new stage
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $stage
     * @return self
     */
    public function setStage(?\TKusy\Hl7Fhir\R5\CodeableConceptType $stage = null)
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Gets as hasSeverity
     *
     * Whether Severity is appropriate to collect for this condition.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getHasSeverity()
    {
        return $this->hasSeverity;
    }

    /**
     * Sets a new hasSeverity
     *
     * Whether Severity is appropriate to collect for this condition.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $hasSeverity
     * @return self
     */
    public function setHasSeverity(?\TKusy\Hl7Fhir\R5\BooleanType $hasSeverity = null)
    {
        $this->hasSeverity = $hasSeverity;
        return $this;
    }

    /**
     * Gets as hasBodySite
     *
     * Whether bodySite is appropriate to collect for this condition.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getHasBodySite()
    {
        return $this->hasBodySite;
    }

    /**
     * Sets a new hasBodySite
     *
     * Whether bodySite is appropriate to collect for this condition.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $hasBodySite
     * @return self
     */
    public function setHasBodySite(?\TKusy\Hl7Fhir\R5\BooleanType $hasBodySite = null)
    {
        $this->hasBodySite = $hasBodySite;
        return $this;
    }

    /**
     * Gets as hasStage
     *
     * Whether stage is appropriate to collect for this condition.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getHasStage()
    {
        return $this->hasStage;
    }

    /**
     * Sets a new hasStage
     *
     * Whether stage is appropriate to collect for this condition.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $hasStage
     * @return self
     */
    public function setHasStage(?\TKusy\Hl7Fhir\R5\BooleanType $hasStage = null)
    {
        $this->hasStage = $hasStage;
        return $this;
    }

    /**
     * Adds as definition
     *
     * Formal definitions of the condition. These may be references to ontologies, published clinical protocols or research papers.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\UriType $definition
     */
    public function addToDefinition(\TKusy\Hl7Fhir\R5\UriType $definition)
    {
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * isset definition
     *
     * Formal definitions of the condition. These may be references to ontologies, published clinical protocols or research papers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDefinition($index)
    {
        return isset($this->definition[$index]);
    }

    /**
     * unset definition
     *
     * Formal definitions of the condition. These may be references to ontologies, published clinical protocols or research papers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDefinition($index)
    {
        unset($this->definition[$index]);
    }

    /**
     * Gets as definition
     *
     * Formal definitions of the condition. These may be references to ontologies, published clinical protocols or research papers.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType[]
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Sets a new definition
     *
     * Formal definitions of the condition. These may be references to ontologies, published clinical protocols or research papers.
     *
     * @param \TKusy\Hl7Fhir\R5\UriType[] $definition
     * @return self
     */
    public function setDefinition(array $definition = null)
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Adds as observation
     *
     * Observations particularly relevant to this condition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionObservationType $observation
     */
    public function addToObservation(\TKusy\Hl7Fhir\R5\ConditionDefinitionObservationType $observation)
    {
        $this->observation[] = $observation;
        return $this;
    }

    /**
     * isset observation
     *
     * Observations particularly relevant to this condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObservation($index)
    {
        return isset($this->observation[$index]);
    }

    /**
     * unset observation
     *
     * Observations particularly relevant to this condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObservation($index)
    {
        unset($this->observation[$index]);
    }

    /**
     * Gets as observation
     *
     * Observations particularly relevant to this condition.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionDefinitionObservationType[]
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Sets a new observation
     *
     * Observations particularly relevant to this condition.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionObservationType[] $observation
     * @return self
     */
    public function setObservation(array $observation = null)
    {
        $this->observation = $observation;
        return $this;
    }

    /**
     * Adds as medication
     *
     * Medications particularly relevant for this condition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionMedicationType $medication
     */
    public function addToMedication(\TKusy\Hl7Fhir\R5\ConditionDefinitionMedicationType $medication)
    {
        $this->medication[] = $medication;
        return $this;
    }

    /**
     * isset medication
     *
     * Medications particularly relevant for this condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMedication($index)
    {
        return isset($this->medication[$index]);
    }

    /**
     * unset medication
     *
     * Medications particularly relevant for this condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMedication($index)
    {
        unset($this->medication[$index]);
    }

    /**
     * Gets as medication
     *
     * Medications particularly relevant for this condition.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionDefinitionMedicationType[]
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Sets a new medication
     *
     * Medications particularly relevant for this condition.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionMedicationType[] $medication
     * @return self
     */
    public function setMedication(array $medication = null)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * Adds as precondition
     *
     * An observation that suggests that this condition applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionPreconditionType $precondition
     */
    public function addToPrecondition(\TKusy\Hl7Fhir\R5\ConditionDefinitionPreconditionType $precondition)
    {
        $this->precondition[] = $precondition;
        return $this;
    }

    /**
     * isset precondition
     *
     * An observation that suggests that this condition applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrecondition($index)
    {
        return isset($this->precondition[$index]);
    }

    /**
     * unset precondition
     *
     * An observation that suggests that this condition applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrecondition($index)
    {
        unset($this->precondition[$index]);
    }

    /**
     * Gets as precondition
     *
     * An observation that suggests that this condition applies.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionDefinitionPreconditionType[]
     */
    public function getPrecondition()
    {
        return $this->precondition;
    }

    /**
     * Sets a new precondition
     *
     * An observation that suggests that this condition applies.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionPreconditionType[] $precondition
     * @return self
     */
    public function setPrecondition(array $precondition = null)
    {
        $this->precondition = $precondition;
        return $this;
    }

    /**
     * Adds as team
     *
     * Appropriate team for this condition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $team
     */
    public function addToTeam(\TKusy\Hl7Fhir\R5\ReferenceType $team)
    {
        $this->team[] = $team;
        return $this;
    }

    /**
     * isset team
     *
     * Appropriate team for this condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeam($index)
    {
        return isset($this->team[$index]);
    }

    /**
     * unset team
     *
     * Appropriate team for this condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeam($index)
    {
        unset($this->team[$index]);
    }

    /**
     * Gets as team
     *
     * Appropriate team for this condition.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Sets a new team
     *
     * Appropriate team for this condition.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $team
     * @return self
     */
    public function setTeam(array $team = null)
    {
        $this->team = $team;
        return $this;
    }

    /**
     * Adds as questionnaire
     *
     * Questionnaire for this condition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionQuestionnaireType $questionnaire
     */
    public function addToQuestionnaire(\TKusy\Hl7Fhir\R5\ConditionDefinitionQuestionnaireType $questionnaire)
    {
        $this->questionnaire[] = $questionnaire;
        return $this;
    }

    /**
     * isset questionnaire
     *
     * Questionnaire for this condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuestionnaire($index)
    {
        return isset($this->questionnaire[$index]);
    }

    /**
     * unset questionnaire
     *
     * Questionnaire for this condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuestionnaire($index)
    {
        unset($this->questionnaire[$index]);
    }

    /**
     * Gets as questionnaire
     *
     * Questionnaire for this condition.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionDefinitionQuestionnaireType[]
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Sets a new questionnaire
     *
     * Questionnaire for this condition.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionQuestionnaireType[] $questionnaire
     * @return self
     */
    public function setQuestionnaire(array $questionnaire = null)
    {
        $this->questionnaire = $questionnaire;
        return $this;
    }

    /**
     * Adds as plan
     *
     * Plan that is appropriate.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionPlanType $plan
     */
    public function addToPlan(\TKusy\Hl7Fhir\R5\ConditionDefinitionPlanType $plan)
    {
        $this->plan[] = $plan;
        return $this;
    }

    /**
     * isset plan
     *
     * Plan that is appropriate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlan($index)
    {
        return isset($this->plan[$index]);
    }

    /**
     * unset plan
     *
     * Plan that is appropriate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlan($index)
    {
        unset($this->plan[$index]);
    }

    /**
     * Gets as plan
     *
     * Plan that is appropriate.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionDefinitionPlanType[]
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets a new plan
     *
     * Plan that is appropriate.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionDefinitionPlanType[] $plan
     * @return self
     */
    public function setPlan(array $plan = null)
    {
        $this->plan = $plan;
        return $this;
    }


}

