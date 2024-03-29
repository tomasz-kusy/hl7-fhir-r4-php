<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MeasureType
 *
 * The Measure resource provides the definition of a quality measure.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Measure
 */
class MeasureType extends MetadataResourceType
{

    /**
     * An absolute URI that is used to identify this measure when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this measure is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the measure is stored on different servers.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The identifier that is used to identify this version of the measure when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the measure author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
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
     * A natural language name identifying the measure. This name should be usable as an identifier for the module by machine processing applications such as code generation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * A short, descriptive, user-friendly title for the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * An explanatory or alternate title for the measure giving additional information about its content.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $subtitle
     */
    private $subtitle = null;

    /**
     * The status of this measure. Enables tracking the life-cycle of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * A Boolean value to indicate that this measure is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $experimental
     */
    private $experimental = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept
     */
    private $subjectCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subjectReference
     */
    private $subjectReference = null;

    /**
     * The population basis specifies the type of elements in the population. For a subject-based measure, this is boolean (because the subject and the population basis are the same, and the population criteria define yes/no values for each individual in the population). For measures that have a population basis that is different than the subject, this element specifies the type of the population basis. For example, an encounter-based measure has a subject of Patient and a population basis of Encounter, and the population criteria all return lists of Encounters.
     *
     * @var \TKusy\Hl7Fhir\R5\FHIRTypesType $basis
     */
    private $basis = null;

    /**
     * The date (and optionally time) when the measure was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the measure changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The name of the organization or individual responsible for the release and ongoing maintenance of the measure.
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
     * A free text natural language description of the measure from a consumer's perspective.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate measure instances.
     *
     * @var \TKusy\Hl7Fhir\R5\UsageContextType[] $useContext
     */
    private $useContext = null;

    /**
     * A legal or geographic region in which the measure is intended to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $jurisdiction
     */
    private $jurisdiction = null;

    /**
     * Explanation of why this measure is needed and why it has been designed as it has.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $purpose
     */
    private $purpose = null;

    /**
     * A detailed description, from a clinical perspective, of how the measure is used.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $usage
     */
    private $usage = null;

    /**
     * A copyright statement relating to the measure and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the measure.
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
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $approvalDate
     */
    private $approvalDate = null;

    /**
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $lastReviewDate
     */
    private $lastReviewDate = null;

    /**
     * The period during which the measure content was or is planned to be in active use.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $topic
     */
    private $topic = null;

    /**
     * An individiual or organization primarily involved in the creation and maintenance of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $author
     */
    private $author = null;

    /**
     * An individual or organization primarily responsible for internal coherence of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $editor
     */
    private $editor = null;

    /**
     * An individual or organization asserted by the publisher to be primarily responsible for review of some aspect of the content.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $reviewer
     */
    private $reviewer = null;

    /**
     * An individual or organization asserted by the publisher to be responsible for officially endorsing the content for use in some setting.
     *
     * @var \TKusy\Hl7Fhir\R5\ContactDetailType[] $endorser
     */
    private $endorser = null;

    /**
     * Related artifacts such as additional documentation, justification, or bibliographic references.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatedArtifact
     */
    private $relatedArtifact = null;

    /**
     * A reference to a Library resource containing the formal logic used by the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\CanonicalType[] $library
     */
    private $library = null;

    /**
     * Notices and disclaimers regarding the use of the measure or related to intellectual property (such as code systems) referenced by the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $disclaimer
     */
    private $disclaimer = null;

    /**
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $scoring
     */
    private $scoring = null;

    /**
     * Defines the expected units of measure for the measure score. This element SHOULD be specified as a UCUM unit.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $scoringUnit
     */
    private $scoringUnit = null;

    /**
     * If this is a composite measure, the scoring method used to combine the component measures to determine the composite score.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $compositeScoring
     */
    private $compositeScoring = null;

    /**
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * A description of the risk adjustment factors that may impact the resulting score for the measure and how they may be accounted for when computing and reporting measure results.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $riskAdjustment
     */
    private $riskAdjustment = null;

    /**
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $rateAggregation
     */
    private $rateAggregation = null;

    /**
     * Provides a succinct statement of the need for the measure. Usually includes statements pertaining to importance criterion: impact, gap in care, and evidence.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $rationale
     */
    private $rationale = null;

    /**
     * Provides a summary of relevant clinical guidelines or other clinical recommendations supporting the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $clinicalRecommendationStatement
     */
    private $clinicalRecommendationStatement = null;

    /**
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation
     */
    private $improvementNotation = null;

    /**
     * Provides a description of an individual term used within the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureTermType[] $term
     */
    private $term = null;

    /**
     * Additional guidance for the measure including how it can be used in a clinical context, and the intent of the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $guidance
     */
    private $guidance = null;

    /**
     * A group of population criteria for the measure.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureGroupType[] $group
     */
    private $group = null;

    /**
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     *
     * @var \TKusy\Hl7Fhir\R5\MeasureSupplementalDataType[] $supplementalData
     */
    private $supplementalData = null;

    /**
     * Gets as url
     *
     * An absolute URI that is used to identify this measure when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this measure is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the measure is stored on different servers.
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
     * An absolute URI that is used to identify this measure when it is referenced in a specification, model, design or an instance; also called its canonical identifier. This SHOULD be globally unique and SHOULD be a literal address at which an authoritative instance of this measure is (or will be) published. This URL can be the target of a canonical reference. It SHALL remain the same when the measure is stored on different servers.
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
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * A formal identifier that is used to identify this measure when it is represented in other formats, or referenced in a specification, model, design or an instance.
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
     * The identifier that is used to identify this version of the measure when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the measure author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
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
     * The identifier that is used to identify this version of the measure when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the measure author and is not expected to be globally unique. For example, it might be a timestamp (e.g. yyyymmdd) if a managed version is not available. There is also no expectation that versions can be placed in a lexicographical sequence. To provide a version consistent with the Decision Support Service specification, use the format Major.Minor.Revision (e.g. 1.0.0). For more information on versioning knowledge assets, refer to the Decision Support Service specification. Note that a version is required for non-experimental active artifacts.
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
     * A natural language name identifying the measure. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A natural language name identifying the measure. This name should be usable as an identifier for the module by machine processing applications such as code generation.
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
     * A short, descriptive, user-friendly title for the measure.
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
     * A short, descriptive, user-friendly title for the measure.
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
     * An explanatory or alternate title for the measure giving additional information about its content.
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
     * An explanatory or alternate title for the measure giving additional information about its content.
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
     * The status of this measure. Enables tracking the life-cycle of the content.
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
     * The status of this measure. Enables tracking the life-cycle of the content.
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
     * A Boolean value to indicate that this measure is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * A Boolean value to indicate that this measure is authored for testing purposes (or education/evaluation/marketing) and is not intended to be used for genuine usage.
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
     * Gets as subjectCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubjectCodeableConcept()
    {
        return $this->subjectCodeableConcept;
    }

    /**
     * Sets a new subjectCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept
     * @return self
     */
    public function setSubjectCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subjectCodeableConcept = null)
    {
        $this->subjectCodeableConcept = $subjectCodeableConcept;
        return $this;
    }

    /**
     * Gets as subjectReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubjectReference()
    {
        return $this->subjectReference;
    }

    /**
     * Sets a new subjectReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subjectReference
     * @return self
     */
    public function setSubjectReference(?\TKusy\Hl7Fhir\R5\ReferenceType $subjectReference = null)
    {
        $this->subjectReference = $subjectReference;
        return $this;
    }

    /**
     * Gets as basis
     *
     * The population basis specifies the type of elements in the population. For a subject-based measure, this is boolean (because the subject and the population basis are the same, and the population criteria define yes/no values for each individual in the population). For measures that have a population basis that is different than the subject, this element specifies the type of the population basis. For example, an encounter-based measure has a subject of Patient and a population basis of Encounter, and the population criteria all return lists of Encounters.
     *
     * @return \TKusy\Hl7Fhir\R5\FHIRTypesType
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Sets a new basis
     *
     * The population basis specifies the type of elements in the population. For a subject-based measure, this is boolean (because the subject and the population basis are the same, and the population criteria define yes/no values for each individual in the population). For measures that have a population basis that is different than the subject, this element specifies the type of the population basis. For example, an encounter-based measure has a subject of Patient and a population basis of Encounter, and the population criteria all return lists of Encounters.
     *
     * @param \TKusy\Hl7Fhir\R5\FHIRTypesType $basis
     * @return self
     */
    public function setBasis(?\TKusy\Hl7Fhir\R5\FHIRTypesType $basis = null)
    {
        $this->basis = $basis;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and optionally time) when the measure was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the measure changes.
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
     * The date (and optionally time) when the measure was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the measure changes.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the measure.
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
     * The name of the organization or individual responsible for the release and ongoing maintenance of the measure.
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
     * A free text natural language description of the measure from a consumer's perspective.
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
     * A free text natural language description of the measure from a consumer's perspective.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate measure instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate measure instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate measure instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate measure instances.
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
     * The content was developed with a focus and intent of supporting the contexts that are listed. These contexts may be general categories (gender, age, ...) or may be references to specific programs (insurance plans, studies, ...) and may be used to assist with indexing and searching for appropriate measure instances.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * A legal or geographic region in which the measure is intended to be used.
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
     * Explanation of why this measure is needed and why it has been designed as it has.
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
     * Explanation of why this measure is needed and why it has been designed as it has.
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
     * Gets as usage
     *
     * A detailed description, from a clinical perspective, of how the measure is used.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * A detailed description, from a clinical perspective, of how the measure is used.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $usage
     * @return self
     */
    public function setUsage(?\TKusy\Hl7Fhir\R5\MarkdownType $usage = null)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as copyright
     *
     * A copyright statement relating to the measure and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the measure.
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
     * A copyright statement relating to the measure and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the measure.
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
     * Gets as approvalDate
     *
     * The date on which the resource content was approved by the publisher. Approval happens once when the content is officially approved for usage.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
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
     * @param \TKusy\Hl7Fhir\R5\DateType $approvalDate
     * @return self
     */
    public function setApprovalDate(?\TKusy\Hl7Fhir\R5\DateType $approvalDate = null)
    {
        $this->approvalDate = $approvalDate;
        return $this;
    }

    /**
     * Gets as lastReviewDate
     *
     * The date on which the resource content was last reviewed. Review happens periodically after approval but does not change the original approval date.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
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
     * @param \TKusy\Hl7Fhir\R5\DateType $lastReviewDate
     * @return self
     */
    public function setLastReviewDate(?\TKusy\Hl7Fhir\R5\DateType $lastReviewDate = null)
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * The period during which the measure content was or is planned to be in active use.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The period during which the measure content was or is planned to be in active use.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $effectivePeriod = null)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Adds as topic
     *
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $topic
     */
    public function addToTopic(\TKusy\Hl7Fhir\R5\CodeableConceptType $topic)
    {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * isset topic
     *
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
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
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Sets a new topic
     *
     * Descriptive topics related to the content of the measure. Topics provide a high-level categorization grouping types of measures that can be useful for filtering and searching.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $topic
     * @return self
     */
    public function setTopic(array $topic = null)
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
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $author
     */
    public function addToAuthor(\TKusy\Hl7Fhir\R5\ContactDetailType $author)
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
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
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
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $author
     * @return self
     */
    public function setAuthor(array $author = null)
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
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $editor
     */
    public function addToEditor(\TKusy\Hl7Fhir\R5\ContactDetailType $editor)
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
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
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
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $editor
     * @return self
     */
    public function setEditor(array $editor = null)
    {
        $this->editor = $editor;
        return $this;
    }

    /**
     * Adds as reviewer
     *
     * An individual or organization asserted by the publisher to be primarily responsible for review of some aspect of the content.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $reviewer
     */
    public function addToReviewer(\TKusy\Hl7Fhir\R5\ContactDetailType $reviewer)
    {
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * isset reviewer
     *
     * An individual or organization asserted by the publisher to be primarily responsible for review of some aspect of the content.
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
     * An individual or organization asserted by the publisher to be primarily responsible for review of some aspect of the content.
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
     * An individual or organization asserted by the publisher to be primarily responsible for review of some aspect of the content.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
     */
    public function getReviewer()
    {
        return $this->reviewer;
    }

    /**
     * Sets a new reviewer
     *
     * An individual or organization asserted by the publisher to be primarily responsible for review of some aspect of the content.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $reviewer
     * @return self
     */
    public function setReviewer(array $reviewer = null)
    {
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * Adds as endorser
     *
     * An individual or organization asserted by the publisher to be responsible for officially endorsing the content for use in some setting.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType $endorser
     */
    public function addToEndorser(\TKusy\Hl7Fhir\R5\ContactDetailType $endorser)
    {
        $this->endorser[] = $endorser;
        return $this;
    }

    /**
     * isset endorser
     *
     * An individual or organization asserted by the publisher to be responsible for officially endorsing the content for use in some setting.
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
     * An individual or organization asserted by the publisher to be responsible for officially endorsing the content for use in some setting.
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
     * An individual or organization asserted by the publisher to be responsible for officially endorsing the content for use in some setting.
     *
     * @return \TKusy\Hl7Fhir\R5\ContactDetailType[]
     */
    public function getEndorser()
    {
        return $this->endorser;
    }

    /**
     * Sets a new endorser
     *
     * An individual or organization asserted by the publisher to be responsible for officially endorsing the content for use in some setting.
     *
     * @param \TKusy\Hl7Fhir\R5\ContactDetailType[] $endorser
     * @return self
     */
    public function setEndorser(array $endorser = null)
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
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact
     */
    public function addToRelatedArtifact(\TKusy\Hl7Fhir\R5\RelatedArtifactType $relatedArtifact)
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
     * @return \TKusy\Hl7Fhir\R5\RelatedArtifactType[]
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
     * @param \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatedArtifact
     * @return self
     */
    public function setRelatedArtifact(array $relatedArtifact = null)
    {
        $this->relatedArtifact = $relatedArtifact;
        return $this;
    }

    /**
     * Adds as library
     *
     * A reference to a Library resource containing the formal logic used by the measure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CanonicalType $library
     */
    public function addToLibrary(\TKusy\Hl7Fhir\R5\CanonicalType $library)
    {
        $this->library[] = $library;
        return $this;
    }

    /**
     * isset library
     *
     * A reference to a Library resource containing the formal logic used by the measure.
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
     * A reference to a Library resource containing the formal logic used by the measure.
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
     * A reference to a Library resource containing the formal logic used by the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\CanonicalType[]
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * Sets a new library
     *
     * A reference to a Library resource containing the formal logic used by the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\CanonicalType[] $library
     * @return self
     */
    public function setLibrary(array $library = null)
    {
        $this->library = $library;
        return $this;
    }

    /**
     * Gets as disclaimer
     *
     * Notices and disclaimers regarding the use of the measure or related to intellectual property (such as code systems) referenced by the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
    }

    /**
     * Sets a new disclaimer
     *
     * Notices and disclaimers regarding the use of the measure or related to intellectual property (such as code systems) referenced by the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $disclaimer
     * @return self
     */
    public function setDisclaimer(?\TKusy\Hl7Fhir\R5\MarkdownType $disclaimer = null)
    {
        $this->disclaimer = $disclaimer;
        return $this;
    }

    /**
     * Gets as scoring
     *
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getScoring()
    {
        return $this->scoring;
    }

    /**
     * Sets a new scoring
     *
     * Indicates how the calculation is performed for the measure, including proportion, ratio, continuous-variable, and cohort. The value set is extensible, allowing additional measure scoring types to be represented.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $scoring
     * @return self
     */
    public function setScoring(?\TKusy\Hl7Fhir\R5\CodeableConceptType $scoring = null)
    {
        $this->scoring = $scoring;
        return $this;
    }

    /**
     * Gets as scoringUnit
     *
     * Defines the expected units of measure for the measure score. This element SHOULD be specified as a UCUM unit.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getScoringUnit()
    {
        return $this->scoringUnit;
    }

    /**
     * Sets a new scoringUnit
     *
     * Defines the expected units of measure for the measure score. This element SHOULD be specified as a UCUM unit.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $scoringUnit
     * @return self
     */
    public function setScoringUnit(?\TKusy\Hl7Fhir\R5\CodeableConceptType $scoringUnit = null)
    {
        $this->scoringUnit = $scoringUnit;
        return $this;
    }

    /**
     * Gets as compositeScoring
     *
     * If this is a composite measure, the scoring method used to combine the component measures to determine the composite score.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCompositeScoring()
    {
        return $this->compositeScoring;
    }

    /**
     * Sets a new compositeScoring
     *
     * If this is a composite measure, the scoring method used to combine the component measures to determine the composite score.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $compositeScoring
     * @return self
     */
    public function setCompositeScoring(?\TKusy\Hl7Fhir\R5\CodeableConceptType $compositeScoring = null)
    {
        $this->compositeScoring = $compositeScoring;
        return $this;
    }

    /**
     * Adds as type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates whether the measure is used to examine a process, an outcome over time, a patient-reported outcome, or a structure measure such as utilization.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as riskAdjustment
     *
     * A description of the risk adjustment factors that may impact the resulting score for the measure and how they may be accounted for when computing and reporting measure results.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getRiskAdjustment()
    {
        return $this->riskAdjustment;
    }

    /**
     * Sets a new riskAdjustment
     *
     * A description of the risk adjustment factors that may impact the resulting score for the measure and how they may be accounted for when computing and reporting measure results.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $riskAdjustment
     * @return self
     */
    public function setRiskAdjustment(?\TKusy\Hl7Fhir\R5\MarkdownType $riskAdjustment = null)
    {
        $this->riskAdjustment = $riskAdjustment;
        return $this;
    }

    /**
     * Gets as rateAggregation
     *
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getRateAggregation()
    {
        return $this->rateAggregation;
    }

    /**
     * Sets a new rateAggregation
     *
     * Describes how to combine the information calculated, based on logic in each of several populations, into one summarized result.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $rateAggregation
     * @return self
     */
    public function setRateAggregation(?\TKusy\Hl7Fhir\R5\MarkdownType $rateAggregation = null)
    {
        $this->rateAggregation = $rateAggregation;
        return $this;
    }

    /**
     * Gets as rationale
     *
     * Provides a succinct statement of the need for the measure. Usually includes statements pertaining to importance criterion: impact, gap in care, and evidence.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getRationale()
    {
        return $this->rationale;
    }

    /**
     * Sets a new rationale
     *
     * Provides a succinct statement of the need for the measure. Usually includes statements pertaining to importance criterion: impact, gap in care, and evidence.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $rationale
     * @return self
     */
    public function setRationale(?\TKusy\Hl7Fhir\R5\MarkdownType $rationale = null)
    {
        $this->rationale = $rationale;
        return $this;
    }

    /**
     * Gets as clinicalRecommendationStatement
     *
     * Provides a summary of relevant clinical guidelines or other clinical recommendations supporting the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getClinicalRecommendationStatement()
    {
        return $this->clinicalRecommendationStatement;
    }

    /**
     * Sets a new clinicalRecommendationStatement
     *
     * Provides a summary of relevant clinical guidelines or other clinical recommendations supporting the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $clinicalRecommendationStatement
     * @return self
     */
    public function setClinicalRecommendationStatement(?\TKusy\Hl7Fhir\R5\MarkdownType $clinicalRecommendationStatement = null)
    {
        $this->clinicalRecommendationStatement = $clinicalRecommendationStatement;
        return $this;
    }

    /**
     * Gets as improvementNotation
     *
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getImprovementNotation()
    {
        return $this->improvementNotation;
    }

    /**
     * Sets a new improvementNotation
     *
     * Information on whether an increase or decrease in score is the preferred result (e.g., a higher score indicates better quality OR a lower score indicates better quality OR quality is within a range).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation
     * @return self
     */
    public function setImprovementNotation(?\TKusy\Hl7Fhir\R5\CodeableConceptType $improvementNotation = null)
    {
        $this->improvementNotation = $improvementNotation;
        return $this;
    }

    /**
     * Adds as term
     *
     * Provides a description of an individual term used within the measure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MeasureTermType $term
     */
    public function addToTerm(\TKusy\Hl7Fhir\R5\MeasureTermType $term)
    {
        $this->term[] = $term;
        return $this;
    }

    /**
     * isset term
     *
     * Provides a description of an individual term used within the measure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerm($index)
    {
        return isset($this->term[$index]);
    }

    /**
     * unset term
     *
     * Provides a description of an individual term used within the measure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerm($index)
    {
        unset($this->term[$index]);
    }

    /**
     * Gets as term
     *
     * Provides a description of an individual term used within the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureTermType[]
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * Provides a description of an individual term used within the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\MeasureTermType[] $term
     * @return self
     */
    public function setTerm(array $term = null)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Gets as guidance
     *
     * Additional guidance for the measure including how it can be used in a clinical context, and the intent of the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getGuidance()
    {
        return $this->guidance;
    }

    /**
     * Sets a new guidance
     *
     * Additional guidance for the measure including how it can be used in a clinical context, and the intent of the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $guidance
     * @return self
     */
    public function setGuidance(?\TKusy\Hl7Fhir\R5\MarkdownType $guidance = null)
    {
        $this->guidance = $guidance;
        return $this;
    }

    /**
     * Adds as group
     *
     * A group of population criteria for the measure.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MeasureGroupType $group
     */
    public function addToGroup(\TKusy\Hl7Fhir\R5\MeasureGroupType $group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * isset group
     *
     * A group of population criteria for the measure.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group
     *
     * A group of population criteria for the measure.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGroup($index)
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group
     *
     * A group of population criteria for the measure.
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureGroupType[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * A group of population criteria for the measure.
     *
     * @param \TKusy\Hl7Fhir\R5\MeasureGroupType[] $group
     * @return self
     */
    public function setGroup(array $group = null)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Adds as supplementalData
     *
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MeasureSupplementalDataType $supplementalData
     */
    public function addToSupplementalData(\TKusy\Hl7Fhir\R5\MeasureSupplementalDataType $supplementalData)
    {
        $this->supplementalData[] = $supplementalData;
        return $this;
    }

    /**
     * isset supplementalData
     *
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplementalData($index)
    {
        return isset($this->supplementalData[$index]);
    }

    /**
     * unset supplementalData
     *
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplementalData($index)
    {
        unset($this->supplementalData[$index]);
    }

    /**
     * Gets as supplementalData
     *
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     *
     * @return \TKusy\Hl7Fhir\R5\MeasureSupplementalDataType[]
     */
    public function getSupplementalData()
    {
        return $this->supplementalData;
    }

    /**
     * Sets a new supplementalData
     *
     * The supplemental data criteria for the measure report, specified as either the name of a valid CQL expression within a referenced library, or a valid FHIR Resource Path.
     *
     * @param \TKusy\Hl7Fhir\R5\MeasureSupplementalDataType[] $supplementalData
     * @return self
     */
    public function setSupplementalData(array $supplementalData = null)
    {
        $this->supplementalData = $supplementalData;
        return $this;
    }


}

