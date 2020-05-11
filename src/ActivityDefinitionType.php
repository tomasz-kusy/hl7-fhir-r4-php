<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ActivityDefinitionType
 *
 * This resource allows for the definition of some activity to be performed, independent of a particular patient, practitioner, or other performance context.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ActivityDefinition
 */
class ActivityDefinitionType extends DomainResourceType
{

    /**
     * An absolute URI that is used to identify this activity definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this activity definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the activity definition is stored on different servers.
     *
     * @var \TKusy\Hl7FhirR4\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the activity definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the activity definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
     *
     * @var \TKusy\Hl7FhirR4\StringType $version
     */
    private $version = null;

    /**
     * A natural language name identifying the activity definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the activity definition.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * An explanatory or alternate title for the activity definition giving additional information about its content.
     *
     * @var \TKusy\Hl7FhirR4\StringType $subtitle
     */
    private $subtitle = null;

    /**
     * The status of this activity definition. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7FhirR4\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this activity definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * A code or group definition that describes the intended subject of the activity being defined. (choose any one of subject*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * A code or group definition that describes the intended subject of the activity being defined. (choose any one of subject*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subjectReference
     */
    private $subjectReference = null;

    /**
     * The date (and optionally time) when the activity definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the activity definition changes.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual that published the activity definition.
     *
     * @var \TKusy\Hl7FhirR4\StringType $publisher
     */
    private $publisher = null;

    /**
     * Contact details to assist a user in finding and communicating with the publisher.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     */
    private $contact = null;

    /**
     * A free text natural language description of the activity definition from a consumer's perspective.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate activity definition instances.
     *
     * @var \TKusy\Hl7FhirR4\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the activity definition is intended to be used.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this activity definition is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A detailed description of how the activity definition is used from a clinical perspective.
     *
     * @var \TKusy\Hl7FhirR4\StringType $usage
     */
    private $usage = null;

    /**
     * A copyright statement relating to the activity definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the activity definition.
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
     * The period during which the activity definition content was or is planned to be in active use.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
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
     * A reference to a Library resource containing any formal logic used by the activity definition.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $library
     */
    private $library = null;

    /**
     * A description of the kind of resource the activity definition is representing. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest. Typically, but not always, this is a Request resource.
     *
     * @var \TKusy\Hl7FhirR4\RequestResourceTypeType $kind
     */
    private $kind = null;

    /**
     * A profile to which the target of the activity definition is expected to conform.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $profile
     */
    private $profile = null;

    /**
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Indicates the level of authority/intentionality associated with the activity and where the request should fit into the workflow chain.
     *
     * @var \TKusy\Hl7FhirR4\RequestIntentType $intent
     */
    private $intent = null;

    /**
     * Indicates how quickly the activity should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7FhirR4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * Set this to true if the definition is to indicate that a particular activity should NOT be performed. If true, this element should be interpreted to reinforce a negative coding. For example NPO as a code with a doNotPerform of true would still indicate to NOT perform the action.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\TimingType $timingTiming
     */
    private $timingTiming = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $timingDateTime
     */
    private $timingDateTime = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\AgeType $timingAge
     */
    private $timingAge = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $timingPeriod
     */
    private $timingPeriod = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\RangeType $timingRange
     */
    private $timingRange = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DurationType $timingDuration
     */
    private $timingDuration = null;

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $location
     */
    private $location = null;

    /**
     * Indicates who should participate in performing the action described.
     *
     * @var \TKusy\Hl7FhirR4\ActivityDefinitionParticipantType[] $participant
     */
    private $participant = null;

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $productReference
     */
    private $productReference = null;

    /**
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $productCodeableConcept
     */
    private $productCodeableConcept = null;

    /**
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     *
     * @var \TKusy\Hl7FhirR4\DosageType[] $dosage
     */
    private $dosage = null;

    /**
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $bodySite
     */
    private $bodySite = null;

    /**
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $specimenRequirement
     */
    private $specimenRequirement = null;

    /**
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $observationRequirement
     */
    private $observationRequirement = null;

    /**
     * Defines the observations that are expected to be produced by the action.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $observationResultRequirement
     */
    private $observationResultRequirement = null;

    /**
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType $transform
     */
    private $transform = null;

    /**
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     *
     * @var \TKusy\Hl7FhirR4\ActivityDefinitionDynamicValueType[] $dynamicValue
     */
    private $dynamicValue = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this activity definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this activity definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the activity definition is stored on different servers.
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
     * An absolute URI that is used to identify this activity definition when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which at which an authoritative instance of this activity definition is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the activity definition is stored on different servers.
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
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this activity definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the activity definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the activity definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
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
     * The identifier that is used to identify this version of the activity definition when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the activity definition author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active assets.
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
     * A natural language name identifying the activity definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the activity definition. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the activity definition.
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
     * A short, descriptive, user-friendly title for the activity definition.
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
     * Gets as subtitle
     *
     * An explanatory or alternate title for the activity definition giving additional information about its content.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * Sets a new subtitle
     *
     * An explanatory or alternate title for the activity definition giving additional information about its content.
     *
     * @param \TKusy\Hl7FhirR4\StringType $subtitle
     * @return self
     */
    public function setSubtitle(\TKusy\Hl7FhirR4\StringType $subtitle)
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of this activity definition. Enables tracking the life-cycle of the content.
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
     * The status of this activity definition. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this activity definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this activity definition is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * Gets as subjectCodeableConcept
     *
     * A code or group definition that describes the intended subject of the activity being defined. (choose any one of subject*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * Sets a new subjectCodeableConcept
     *
     * A code or group definition that describes the intended subject of the activity being defined. (choose any one of subject*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept
     * @return self
     */
    public function setSubjectCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $subjectCodeableConcept)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * Gets as subjectReference
     *
     * A code or group definition that describes the intended subject of the activity being defined. (choose any one of subject*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * Sets a new subjectReference
     *
     * A code or group definition that describes the intended subject of the activity being defined. (choose any one of subject*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subjectReference
     * @return self
     */
    public function setSubjectReference(\TKusy\Hl7FhirR4\ReferenceType $subjectReference)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the activity definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the activity definition changes.
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
     * The date (and optionally time) when the activity definition was published. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the activity definition changes.
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
     * The name of the organization or individual that published the activity definition.
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
     * The name of the organization or individual that published the activity definition.
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
     * A free text natural language description of the activity definition from a consumer's perspective.
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
     * A free text natural language description of the activity definition from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate activity definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate activity definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate activity definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate activity definition instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate activity definition instances.
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
     * A legal or geographic region in which the activity definition is intended to be used.
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
     * A legal or geographic region in which the activity definition is intended to be used.
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
     * A legal or geographic region in which the activity definition is intended to be used.
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
     * A legal or geographic region in which the activity definition is intended to be used.
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
     * A legal or geographic region in which the activity definition is intended to be used.
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
     * Explanation of why this activity definition is needed and why it has been designed as it has.
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
     * Explanation of why this activity definition is needed and why it has been designed as it has.
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
     * Gets as usage
     *
     * A detailed description of how the activity definition is used from a clinical perspective.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A detailed description of how the activity definition is used from a clinical perspective.
     *
     * @param \TKusy\Hl7FhirR4\StringType $usage
     * @return self
     */
    public function setUsage(\TKusy\Hl7FhirR4\StringType $usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * A copyright statement relating to the activity definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the activity definition.
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
     * A copyright statement relating to the activity definition and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the activity definition.
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
     * The period during which the activity definition content was or is planned to be in active use.
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
     * The period during which the activity definition content was or is planned to be in active use.
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
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the activity. Topics provide a high-level categorization of the activity that can be useful for filtering and searching.
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
     * Adds as library
     *
     * A reference to a Library resource containing any formal logic used by the activity definition.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CanonicalType $library
     */
    public function addToLibrary(\TKusy\Hl7FhirR4\CanonicalType $library)
    {
        $this->library[] = $library;
        return $this;
    }

    /**
     * isset library
     *
     * A reference to a Library resource containing any formal logic used by the activity definition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLibrary($index)
    {
        return isset($this->library[$index]);
    }

    /**
     * unset library
     *
     * A reference to a Library resource containing any formal logic used by the activity definition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLibrary($index)
    {
        unset($this->library[$index]);
    }

    /**
     * Gets as library
     *
     * A reference to a Library resource containing any formal logic used by the activity definition.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * Sets a new library
     *
     * A reference to a Library resource containing any formal logic used by the activity definition.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType[] $library
     * @return self
     */
    public function setLibrary(array $library)
    {
        $this->library = $library;
        return $this;
    }

    /**
     * Gets as kind
     *
     * A description of the kind of resource the activity definition is representing. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest. Typically, but not always, this is a Request resource.
     *
     * @return \TKusy\Hl7FhirR4\RequestResourceTypeType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * A description of the kind of resource the activity definition is representing. For example, a MedicationRequest, a ServiceRequest, or a CommunicationRequest. Typically, but not always, this is a Request resource.
     *
     * @param \TKusy\Hl7FhirR4\RequestResourceTypeType $kind
     * @return self
     */
    public function setKind(\TKusy\Hl7FhirR4\RequestResourceTypeType $kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Gets as profile
     *
     * A profile to which the target of the activity definition is expected to conform.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * A profile to which the target of the activity definition is expected to conform.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $profile
     * @return self
     */
    public function setProfile(\TKusy\Hl7FhirR4\CanonicalType $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Gets as code
     *
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Detailed description of the type of activity; e.g. What lab test, what procedure, what kind of encounter.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Indicates the level of authority/intentionality associated with the activity and where the request should fit into the workflow chain.
     *
     * @return \TKusy\Hl7FhirR4\RequestIntentType
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Sets a new intent
     *
     * Indicates the level of authority/intentionality associated with the activity and where the request should fit into the workflow chain.
     *
     * @param \TKusy\Hl7FhirR4\RequestIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7FhirR4\RequestIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the activity should be addressed with respect to other requests.
     *
     * @return \TKusy\Hl7FhirR4\RequestPriorityType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Indicates how quickly the activity should be addressed with respect to other requests.
     *
     * @param \TKusy\Hl7FhirR4\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\RequestPriorityType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as doNotPerform
     *
     * Set this to true if the definition is to indicate that a particular activity should NOT be performed. If true, this element should be interpreted to reinforce a negative coding. For example NPO as a code with a doNotPerform of true would still indicate to NOT perform the action.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Sets a new doNotPerform
     *
     * Set this to true if the definition is to indicate that a particular activity should NOT be performed. If true, this element should be interpreted to reinforce a negative coding. For example NPO as a code with a doNotPerform of true would still indicate to NOT perform the action.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     * @return self
     */
    public function setDoNotPerform(\TKusy\Hl7FhirR4\BooleanType $doNotPerform)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Gets as timingTiming
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\TimingType
     */
    public function getTimingTiming()
    {
        return $this->timingTiming;
    }

    /**
     * Sets a new timingTiming
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\TimingType $timingTiming
     * @return self
     */
    public function setTimingTiming(\TKusy\Hl7FhirR4\TimingType $timingTiming)
    {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * Gets as timingDateTime
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getTimingDateTime()
    {
        return $this->timingDateTime;
    }

    /**
     * Sets a new timingDateTime
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $timingDateTime
     * @return self
     */
    public function setTimingDateTime(\TKusy\Hl7FhirR4\DateTimeType $timingDateTime)
    {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * Gets as timingAge
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\AgeType
     */
    public function getTimingAge()
    {
        return $this->timingAge;
    }

    /**
     * Sets a new timingAge
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\AgeType $timingAge
     * @return self
     */
    public function setTimingAge(\TKusy\Hl7FhirR4\AgeType $timingAge)
    {
        $this->timingAge = $timingAge;
        return $this;
    }

    /**
     * Gets as timingPeriod
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getTimingPeriod()
    {
        return $this->timingPeriod;
    }

    /**
     * Sets a new timingPeriod
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $timingPeriod
     * @return self
     */
    public function setTimingPeriod(\TKusy\Hl7FhirR4\PeriodType $timingPeriod)
    {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * Gets as timingRange
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\RangeType
     */
    public function getTimingRange()
    {
        return $this->timingRange;
    }

    /**
     * Sets a new timingRange
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\RangeType $timingRange
     * @return self
     */
    public function setTimingRange(\TKusy\Hl7FhirR4\RangeType $timingRange)
    {
        $this->timingRange = $timingRange;
        return $this;
    }

    /**
     * Gets as timingDuration
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DurationType
     */
    public function getTimingDuration()
    {
        return $this->timingDuration;
    }

    /**
     * Sets a new timingDuration
     *
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of timing*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DurationType $timingDuration
     * @return self
     */
    public function setTimingDuration(\TKusy\Hl7FhirR4\DurationType $timingDuration)
    {
        $this->timingDuration = $timingDuration;
        return $this;
    }

    /**
     * Gets as location
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7FhirR4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as participant
     *
     * Indicates who should participate in performing the action described.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ActivityDefinitionParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7FhirR4\ActivityDefinitionParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * Indicates who should participate in performing the action described.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParticipant($index)
    {
        return isset($this->participant[$index]);
    }

    /**
     * unset participant
     *
     * Indicates who should participate in performing the action described.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParticipant($index)
    {
        unset($this->participant[$index]);
    }

    /**
     * Gets as participant
     *
     * Indicates who should participate in performing the action described.
     *
     * @return \TKusy\Hl7FhirR4\ActivityDefinitionParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Indicates who should participate in performing the action described.
     *
     * @param \TKusy\Hl7FhirR4\ActivityDefinitionParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Gets as productReference
     *
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Sets a new productReference
     *
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $productReference
     * @return self
     */
    public function setProductReference(\TKusy\Hl7FhirR4\ReferenceType $productReference)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Gets as productCodeableConcept
     *
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * Sets a new productCodeableConcept
     *
     * Identifies the food, drug or other product being consumed or supplied in the activity. (choose any one of product*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $productCodeableConcept
     * @return self
     */
    public function setProductCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $productCodeableConcept)
    {
        $this->productCodeableConcept = $productCodeableConcept;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Identifies the quantity expected to be consumed at once (per dose, per meal, etc.).
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as dosage
     *
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DosageType $dosage
     */
    public function addToDosage(\TKusy\Hl7FhirR4\DosageType $dosage)
    {
        $this->dosage[] = $dosage;
        return $this;
    }

    /**
     * isset dosage
     *
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDosage($index)
    {
        return isset($this->dosage[$index]);
    }

    /**
     * unset dosage
     *
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDosage($index)
    {
        unset($this->dosage[$index]);
    }

    /**
     * Gets as dosage
     *
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     *
     * @return \TKusy\Hl7FhirR4\DosageType[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * Sets a new dosage
     *
     * Provides detailed dosage instructions in the same way that they are described for MedicationRequest resources.
     *
     * @param \TKusy\Hl7FhirR4\DosageType[] $dosage
     * @return self
     */
    public function setDosage(array $dosage)
    {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * Adds as bodySite
     *
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7FhirR4\CodeableConceptType $bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * isset bodySite
     *
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBodySite($index)
    {
        return isset($this->bodySite[$index]);
    }

    /**
     * unset bodySite
     *
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBodySite($index)
    {
        unset($this->bodySite[$index]);
    }

    /**
     * Gets as bodySite
     *
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Sets a new bodySite
     *
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Adds as specimenRequirement
     *
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $specimenRequirement
     */
    public function addToSpecimenRequirement(\TKusy\Hl7FhirR4\ReferenceType $specimenRequirement)
    {
        $this->specimenRequirement[] = $specimenRequirement;
        return $this;
    }

    /**
     * isset specimenRequirement
     *
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecimenRequirement($index)
    {
        return isset($this->specimenRequirement[$index]);
    }

    /**
     * unset specimenRequirement
     *
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecimenRequirement($index)
    {
        unset($this->specimenRequirement[$index]);
    }

    /**
     * Gets as specimenRequirement
     *
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSpecimenRequirement()
    {
        return $this->specimenRequirement;
    }

    /**
     * Sets a new specimenRequirement
     *
     * Defines specimen requirements for the action to be performed, such as required specimens for a lab test.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $specimenRequirement
     * @return self
     */
    public function setSpecimenRequirement(array $specimenRequirement)
    {
        $this->specimenRequirement = $specimenRequirement;
        return $this;
    }

    /**
     * Adds as observationRequirement
     *
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $observationRequirement
     */
    public function addToObservationRequirement(\TKusy\Hl7FhirR4\ReferenceType $observationRequirement)
    {
        $this->observationRequirement[] = $observationRequirement;
        return $this;
    }

    /**
     * isset observationRequirement
     *
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObservationRequirement($index)
    {
        return isset($this->observationRequirement[$index]);
    }

    /**
     * unset observationRequirement
     *
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObservationRequirement($index)
    {
        unset($this->observationRequirement[$index]);
    }

    /**
     * Gets as observationRequirement
     *
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getObservationRequirement()
    {
        return $this->observationRequirement;
    }

    /**
     * Sets a new observationRequirement
     *
     * Defines observation requirements for the action to be performed, such as body weight or surface area.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $observationRequirement
     * @return self
     */
    public function setObservationRequirement(array $observationRequirement)
    {
        $this->observationRequirement = $observationRequirement;
        return $this;
    }

    /**
     * Adds as observationResultRequirement
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $observationResultRequirement
     */
    public function addToObservationResultRequirement(\TKusy\Hl7FhirR4\ReferenceType $observationResultRequirement)
    {
        $this->observationResultRequirement[] = $observationResultRequirement;
        return $this;
    }

    /**
     * isset observationResultRequirement
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObservationResultRequirement($index)
    {
        return isset($this->observationResultRequirement[$index]);
    }

    /**
     * unset observationResultRequirement
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObservationResultRequirement($index)
    {
        unset($this->observationResultRequirement[$index]);
    }

    /**
     * Gets as observationResultRequirement
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getObservationResultRequirement()
    {
        return $this->observationResultRequirement;
    }

    /**
     * Sets a new observationResultRequirement
     *
     * Defines the observations that are expected to be produced by the action.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $observationResultRequirement
     * @return self
     */
    public function setObservationResultRequirement(array $observationResultRequirement)
    {
        $this->observationResultRequirement = $observationResultRequirement;
        return $this;
    }

    /**
     * Gets as transform
     *
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * A reference to a StructureMap resource that defines a transform that can be executed to produce the intent resource using the ActivityDefinition instance as the input.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType $transform
     * @return self
     */
    public function setTransform(\TKusy\Hl7FhirR4\CanonicalType $transform)
    {
        $this->transform = $transform;
        return $this;
    }

    /**
     * Adds as dynamicValue
     *
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ActivityDefinitionDynamicValueType $dynamicValue
     */
    public function addToDynamicValue(\TKusy\Hl7FhirR4\ActivityDefinitionDynamicValueType $dynamicValue)
    {
        $this->dynamicValue[] = $dynamicValue;
        return $this;
    }

    /**
     * isset dynamicValue
     *
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDynamicValue($index)
    {
        return isset($this->dynamicValue[$index]);
    }

    /**
     * unset dynamicValue
     *
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDynamicValue($index)
    {
        unset($this->dynamicValue[$index]);
    }

    /**
     * Gets as dynamicValue
     *
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     *
     * @return \TKusy\Hl7FhirR4\ActivityDefinitionDynamicValueType[]
     */
    public function getDynamicValue()
    {
        return $this->dynamicValue;
    }

    /**
     * Sets a new dynamicValue
     *
     * Dynamic values that will be evaluated to produce values for elements of the resulting resource. For example, if the dosage of a medication must be computed based on the patient's weight, a dynamic value would be used to specify an expression that calculated the weight, and the path on the request resource that would contain the result.
     *
     * @param \TKusy\Hl7FhirR4\ActivityDefinitionDynamicValueType[] $dynamicValue
     * @return self
     */
    public function setDynamicValue(array $dynamicValue)
    {
        $this->dynamicValue = $dynamicValue;
        return $this;
    }


}

