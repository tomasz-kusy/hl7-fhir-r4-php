<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResearchStudyType
 *
 * A scientific study of nature that sometimes includes processes involved in health and disease. For example, clinical trials are research studies that involve people. These studies may be related to new ways to screen, prevent, diagnose, and treat disease. They may also study certain outcomes and certain groups of people by looking at data collected in the past or future.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ResearchStudy
 */
class ResearchStudyType extends DomainResourceType
{

    /**
     * Canonical identifier for this study resource, represented as a globally unique URI.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $url
     */
    private $url = null;

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The business version for the study record.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $version
     */
    private $version = null;

    /**
     * Name for this study (computer friendly).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * The human readable name of the research study.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $title
     */
    private $title = null;

    /**
     * Additional names for the study.
     *
     * @var \TKusy\Hl7Fhir\R5\ResearchStudyLabelType[] $label
     */
    private $label = null;

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $protocol
     */
    private $protocol = null;

    /**
     * A larger research study of which this particular study is a component or step.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     */
    private $partOf = null;

    /**
     * Citations, references, URLs and other related documents. When using relatedArtifact to share URLs, the relatedArtifact.type will often be set to one of "documentation" or "supported-with" and the URL value will often be in relatedArtifact.document.url but another possible location is relatedArtifact.resource when it is a canonical URL.
     *
     * @var \TKusy\Hl7Fhir\R5\RelatedArtifactType[] $relatedArtifact
     */
    private $relatedArtifact = null;

    /**
     * The date (and optionally time) when the ResearchStudy Resource was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the ResearchStudy Resource changes.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * The publication state of the resource (not of the study).
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * The type of study based upon the intent of the study activities. A classification of the intent of the study.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $primaryPurposeType
     */
    private $primaryPurposeType = null;

    /**
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $phase
     */
    private $phase = null;

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $studyDesign
     */
    private $studyDesign = null;

    /**
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $focus
     */
    private $focus = null;

    /**
     * The condition that is the focus of the study. For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $condition
     */
    private $condition = null;

    /**
     * Key terms to aid in searching for or filtering the study.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $keyword
     */
    private $keyword = null;

    /**
     * A country, state or other area where the study is taking place rather than its precise geographic location or address.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $region
     */
    private $region = null;

    /**
     * A brief text for explaining the study.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $descriptionSummary
     */
    private $descriptionSummary = null;

    /**
     * A detailed and human-readable narrative of the study. E.g., study abstract.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * A facility in which study activities are conducted.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $site
     */
    private $site = null;

    /**
     * Comments made about the study by the performer, subject or other participants.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Additional grouping mechanism or categorization of a research study. Example: FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal requirement), IRB-exempt, etc. Implementation Note: do not use the classifier element to support existing semantics that are already supported thru explicit elements in the resource.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     */
    private $classifier = null;

    /**
     * Sponsors, collaborators, and other parties.
     *
     * @var \TKusy\Hl7Fhir\R5\ResearchStudyAssociatedPartyType[] $associatedParty
     */
    private $associatedParty = null;

    /**
     * Status of study with time for that status.
     *
     * @var \TKusy\Hl7Fhir\R5\ResearchStudyProgressStatusType[] $progressStatus
     */
    private $progressStatus = null;

    /**
     * A description and/or code explaining the premature termination of the study.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $whyStopped
     */
    private $whyStopped = null;

    /**
     * Target or actual group of participants enrolled in study.
     *
     * @var \TKusy\Hl7Fhir\R5\ResearchStudyRecruitmentType $recruitment
     */
    private $recruitment = null;

    /**
     * Describes an expected event or sequence of events for one of the subjects of a study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @var \TKusy\Hl7Fhir\R5\ResearchStudyComparisonGroupType[] $comparisonGroup
     */
    private $comparisonGroup = null;

    /**
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     *
     * @var \TKusy\Hl7Fhir\R5\ResearchStudyObjectiveType[] $objective
     */
    private $objective = null;

    /**
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a specific measurement or observation used to quantify the effect of experimental variables on the participants in a study, or for observational studies, to describe patterns of diseases or traits or associations with exposures, risk factors or treatment.
     *
     * @var \TKusy\Hl7Fhir\R5\ResearchStudyOutcomeMeasureType[] $outcomeMeasure
     */
    private $outcomeMeasure = null;

    /**
     * Link to one or more sets of results generated by the study. Could also link to a research registry holding the results such as ClinicalTrials.gov.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $result
     */
    private $result = null;

    /**
     * Gets as url
     *
     * Canonical identifier for this study resource, represented as a globally unique URI.
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
     * Canonical identifier for this study resource, represented as a globally unique URI.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * The business version for the study record.
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
     * The business version for the study record.
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
     * Gets as name
     *
     * Name for this study (computer friendly).
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
     * Name for this study (computer friendly).
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
     * The human readable name of the research study.
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
     * The human readable name of the research study.
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
     * Adds as label
     *
     * Additional names for the study.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyLabelType $label
     */
    public function addToLabel(\TKusy\Hl7Fhir\R5\ResearchStudyLabelType $label)
    {
        $this->label[] = $label;
        return $this;
    }

    /**
     * isset label
     *
     * Additional names for the study.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLabel($index)
    {
        return isset($this->label[$index]);
    }

    /**
     * unset label
     *
     * Additional names for the study.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLabel($index)
    {
        unset($this->label[$index]);
    }

    /**
     * Gets as label
     *
     * Additional names for the study.
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchStudyLabelType[]
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Sets a new label
     *
     * Additional names for the study.
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyLabelType[] $label
     * @return self
     */
    public function setLabel(array $label = null)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Adds as protocol
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $protocol
     */
    public function addToProtocol(\TKusy\Hl7Fhir\R5\ReferenceType $protocol)
    {
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * isset protocol
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProtocol($index)
    {
        return isset($this->protocol[$index]);
    }

    /**
     * unset protocol
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProtocol($index)
    {
        unset($this->protocol[$index]);
    }

    /**
     * Gets as protocol
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Sets a new protocol
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $protocol
     * @return self
     */
    public function setProtocol(array $protocol = null)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Adds as partOf
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7Fhir\R5\ReferenceType $partOf)
    {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * isset partOf
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartOf($index)
    {
        return isset($this->partOf[$index]);
    }

    /**
     * unset partOf
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartOf($index)
    {
        unset($this->partOf[$index]);
    }

    /**
     * Gets as partOf
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * A larger research study of which this particular study is a component or step.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf = null)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Adds as relatedArtifact
     *
     * Citations, references, URLs and other related documents. When using relatedArtifact to share URLs, the relatedArtifact.type will often be set to one of "documentation" or "supported-with" and the URL value will often be in relatedArtifact.document.url but another possible location is relatedArtifact.resource when it is a canonical URL.
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
     * Citations, references, URLs and other related documents. When using relatedArtifact to share URLs, the relatedArtifact.type will often be set to one of "documentation" or "supported-with" and the URL value will often be in relatedArtifact.document.url but another possible location is relatedArtifact.resource when it is a canonical URL.
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
     * Citations, references, URLs and other related documents. When using relatedArtifact to share URLs, the relatedArtifact.type will often be set to one of "documentation" or "supported-with" and the URL value will often be in relatedArtifact.document.url but another possible location is relatedArtifact.resource when it is a canonical URL.
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
     * Citations, references, URLs and other related documents. When using relatedArtifact to share URLs, the relatedArtifact.type will often be set to one of "documentation" or "supported-with" and the URL value will often be in relatedArtifact.document.url but another possible location is relatedArtifact.resource when it is a canonical URL.
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
     * Citations, references, URLs and other related documents. When using relatedArtifact to share URLs, the relatedArtifact.type will often be set to one of "documentation" or "supported-with" and the URL value will often be in relatedArtifact.document.url but another possible location is relatedArtifact.resource when it is a canonical URL.
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
     * Gets as date
     *
     * The date (and optionally time) when the ResearchStudy Resource was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the ResearchStudy Resource changes.
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
     * The date (and optionally time) when the ResearchStudy Resource was last significantly changed. The date must change when the business version changes and it must change if the status code changes. In addition, it should change when the substantive content of the ResearchStudy Resource changes.
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
     * Gets as status
     *
     * The publication state of the resource (not of the study).
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
     * The publication state of the resource (not of the study).
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
     * Gets as primaryPurposeType
     *
     * The type of study based upon the intent of the study activities. A classification of the intent of the study.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPrimaryPurposeType()
    {
        return $this->primaryPurposeType;
    }

    /**
     * Sets a new primaryPurposeType
     *
     * The type of study based upon the intent of the study activities. A classification of the intent of the study.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $primaryPurposeType
     * @return self
     */
    public function setPrimaryPurposeType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $primaryPurposeType = null)
    {
        $this->primaryPurposeType = $primaryPurposeType;
        return $this;
    }

    /**
     * Gets as phase
     *
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Sets a new phase
     *
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $phase
     * @return self
     */
    public function setPhase(?\TKusy\Hl7Fhir\R5\CodeableConceptType $phase = null)
    {
        $this->phase = $phase;
        return $this;
    }

    /**
     * Adds as studyDesign
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $studyDesign
     */
    public function addToStudyDesign(\TKusy\Hl7Fhir\R5\CodeableConceptType $studyDesign)
    {
        $this->studyDesign[] = $studyDesign;
        return $this;
    }

    /**
     * isset studyDesign
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStudyDesign($index)
    {
        return isset($this->studyDesign[$index]);
    }

    /**
     * unset studyDesign
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStudyDesign($index)
    {
        unset($this->studyDesign[$index]);
    }

    /**
     * Gets as studyDesign
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getStudyDesign()
    {
        return $this->studyDesign;
    }

    /**
     * Sets a new studyDesign
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $studyDesign
     * @return self
     */
    public function setStudyDesign(array $studyDesign = null)
    {
        $this->studyDesign = $studyDesign;
        return $this;
    }

    /**
     * Adds as focus
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $focus
     */
    public function addToFocus(\TKusy\Hl7Fhir\R5\CodeableReferenceType $focus)
    {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * isset focus
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
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
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
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
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * Sets a new focus
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $focus
     * @return self
     */
    public function setFocus(array $focus = null)
    {
        $this->focus = $focus;
        return $this;
    }

    /**
     * Adds as condition
     *
     * The condition that is the focus of the study. For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $condition
     */
    public function addToCondition(\TKusy\Hl7Fhir\R5\CodeableConceptType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * The condition that is the focus of the study. For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * The condition that is the focus of the study. For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * The condition that is the focus of the study. For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * The condition that is the focus of the study. For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $condition
     * @return self
     */
    public function setCondition(array $condition = null)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as keyword
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $keyword
     */
    public function addToKeyword(\TKusy\Hl7Fhir\R5\CodeableConceptType $keyword)
    {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * isset keyword
     *
     * Key terms to aid in searching for or filtering the study.
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
     * Key terms to aid in searching for or filtering the study.
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
     * Key terms to aid in searching for or filtering the study.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Sets a new keyword
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $keyword
     * @return self
     */
    public function setKeyword(array $keyword = null)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Adds as region
     *
     * A country, state or other area where the study is taking place rather than its precise geographic location or address.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $region
     */
    public function addToRegion(\TKusy\Hl7Fhir\R5\CodeableConceptType $region)
    {
        $this->region[] = $region;
        return $this;
    }

    /**
     * isset region
     *
     * A country, state or other area where the study is taking place rather than its precise geographic location or address.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegion($index)
    {
        return isset($this->region[$index]);
    }

    /**
     * unset region
     *
     * A country, state or other area where the study is taking place rather than its precise geographic location or address.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegion($index)
    {
        unset($this->region[$index]);
    }

    /**
     * Gets as region
     *
     * A country, state or other area where the study is taking place rather than its precise geographic location or address.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * A country, state or other area where the study is taking place rather than its precise geographic location or address.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $region
     * @return self
     */
    public function setRegion(array $region = null)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as descriptionSummary
     *
     * A brief text for explaining the study.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescriptionSummary()
    {
        return $this->descriptionSummary;
    }

    /**
     * Sets a new descriptionSummary
     *
     * A brief text for explaining the study.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $descriptionSummary
     * @return self
     */
    public function setDescriptionSummary(?\TKusy\Hl7Fhir\R5\MarkdownType $descriptionSummary = null)
    {
        $this->descriptionSummary = $descriptionSummary;
        return $this;
    }

    /**
     * Gets as description
     *
     * A detailed and human-readable narrative of the study. E.g., study abstract.
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
     * A detailed and human-readable narrative of the study. E.g., study abstract.
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
     * Gets as period
     *
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as site
     *
     * A facility in which study activities are conducted.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $site
     */
    public function addToSite(\TKusy\Hl7Fhir\R5\ReferenceType $site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * isset site
     *
     * A facility in which study activities are conducted.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSite($index)
    {
        return isset($this->site[$index]);
    }

    /**
     * unset site
     *
     * A facility in which study activities are conducted.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSite($index)
    {
        unset($this->site[$index]);
    }

    /**
     * Gets as site
     *
     * A facility in which study activities are conducted.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * A facility in which study activities are conducted.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $site
     * @return self
     */
    public function setSite(array $site = null)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the study by the performer, subject or other participants.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Comments made about the study by the performer, subject or other participants.
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
     * Comments made about the study by the performer, subject or other participants.
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
     * Comments made about the study by the performer, subject or other participants.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Comments made about the study by the performer, subject or other participants.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as classifier
     *
     * Additional grouping mechanism or categorization of a research study. Example: FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal requirement), IRB-exempt, etc. Implementation Note: do not use the classifier element to support existing semantics that are already supported thru explicit elements in the resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $classifier
     */
    public function addToClassifier(\TKusy\Hl7Fhir\R5\CodeableConceptType $classifier)
    {
        $this->classifier[] = $classifier;
        return $this;
    }

    /**
     * isset classifier
     *
     * Additional grouping mechanism or categorization of a research study. Example: FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal requirement), IRB-exempt, etc. Implementation Note: do not use the classifier element to support existing semantics that are already supported thru explicit elements in the resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassifier($index)
    {
        return isset($this->classifier[$index]);
    }

    /**
     * unset classifier
     *
     * Additional grouping mechanism or categorization of a research study. Example: FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal requirement), IRB-exempt, etc. Implementation Note: do not use the classifier element to support existing semantics that are already supported thru explicit elements in the resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassifier($index)
    {
        unset($this->classifier[$index]);
    }

    /**
     * Gets as classifier
     *
     * Additional grouping mechanism or categorization of a research study. Example: FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal requirement), IRB-exempt, etc. Implementation Note: do not use the classifier element to support existing semantics that are already supported thru explicit elements in the resource.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getClassifier()
    {
        return $this->classifier;
    }

    /**
     * Sets a new classifier
     *
     * Additional grouping mechanism or categorization of a research study. Example: FDA regulated device, FDA regulated drug, MPG Paragraph 23b (a German legal requirement), IRB-exempt, etc. Implementation Note: do not use the classifier element to support existing semantics that are already supported thru explicit elements in the resource.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $classifier
     * @return self
     */
    public function setClassifier(array $classifier = null)
    {
        $this->classifier = $classifier;
        return $this;
    }

    /**
     * Adds as associatedParty
     *
     * Sponsors, collaborators, and other parties.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyAssociatedPartyType $associatedParty
     */
    public function addToAssociatedParty(\TKusy\Hl7Fhir\R5\ResearchStudyAssociatedPartyType $associatedParty)
    {
        $this->associatedParty[] = $associatedParty;
        return $this;
    }

    /**
     * isset associatedParty
     *
     * Sponsors, collaborators, and other parties.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssociatedParty($index)
    {
        return isset($this->associatedParty[$index]);
    }

    /**
     * unset associatedParty
     *
     * Sponsors, collaborators, and other parties.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssociatedParty($index)
    {
        unset($this->associatedParty[$index]);
    }

    /**
     * Gets as associatedParty
     *
     * Sponsors, collaborators, and other parties.
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchStudyAssociatedPartyType[]
     */
    public function getAssociatedParty()
    {
        return $this->associatedParty;
    }

    /**
     * Sets a new associatedParty
     *
     * Sponsors, collaborators, and other parties.
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyAssociatedPartyType[] $associatedParty
     * @return self
     */
    public function setAssociatedParty(array $associatedParty = null)
    {
        $this->associatedParty = $associatedParty;
        return $this;
    }

    /**
     * Adds as progressStatus
     *
     * Status of study with time for that status.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyProgressStatusType $progressStatus
     */
    public function addToProgressStatus(\TKusy\Hl7Fhir\R5\ResearchStudyProgressStatusType $progressStatus)
    {
        $this->progressStatus[] = $progressStatus;
        return $this;
    }

    /**
     * isset progressStatus
     *
     * Status of study with time for that status.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgressStatus($index)
    {
        return isset($this->progressStatus[$index]);
    }

    /**
     * unset progressStatus
     *
     * Status of study with time for that status.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgressStatus($index)
    {
        unset($this->progressStatus[$index]);
    }

    /**
     * Gets as progressStatus
     *
     * Status of study with time for that status.
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchStudyProgressStatusType[]
     */
    public function getProgressStatus()
    {
        return $this->progressStatus;
    }

    /**
     * Sets a new progressStatus
     *
     * Status of study with time for that status.
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyProgressStatusType[] $progressStatus
     * @return self
     */
    public function setProgressStatus(array $progressStatus = null)
    {
        $this->progressStatus = $progressStatus;
        return $this;
    }

    /**
     * Gets as whyStopped
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getWhyStopped()
    {
        return $this->whyStopped;
    }

    /**
     * Sets a new whyStopped
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $whyStopped
     * @return self
     */
    public function setWhyStopped(?\TKusy\Hl7Fhir\R5\CodeableConceptType $whyStopped = null)
    {
        $this->whyStopped = $whyStopped;
        return $this;
    }

    /**
     * Gets as recruitment
     *
     * Target or actual group of participants enrolled in study.
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchStudyRecruitmentType
     */
    public function getRecruitment()
    {
        return $this->recruitment;
    }

    /**
     * Sets a new recruitment
     *
     * Target or actual group of participants enrolled in study.
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyRecruitmentType $recruitment
     * @return self
     */
    public function setRecruitment(?\TKusy\Hl7Fhir\R5\ResearchStudyRecruitmentType $recruitment = null)
    {
        $this->recruitment = $recruitment;
        return $this;
    }

    /**
     * Adds as comparisonGroup
     *
     * Describes an expected event or sequence of events for one of the subjects of a study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyComparisonGroupType $comparisonGroup
     */
    public function addToComparisonGroup(\TKusy\Hl7Fhir\R5\ResearchStudyComparisonGroupType $comparisonGroup)
    {
        $this->comparisonGroup[] = $comparisonGroup;
        return $this;
    }

    /**
     * isset comparisonGroup
     *
     * Describes an expected event or sequence of events for one of the subjects of a study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComparisonGroup($index)
    {
        return isset($this->comparisonGroup[$index]);
    }

    /**
     * unset comparisonGroup
     *
     * Describes an expected event or sequence of events for one of the subjects of a study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComparisonGroup($index)
    {
        unset($this->comparisonGroup[$index]);
    }

    /**
     * Gets as comparisonGroup
     *
     * Describes an expected event or sequence of events for one of the subjects of a study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchStudyComparisonGroupType[]
     */
    public function getComparisonGroup()
    {
        return $this->comparisonGroup;
    }

    /**
     * Sets a new comparisonGroup
     *
     * Describes an expected event or sequence of events for one of the subjects of a study. E.g. for a living subject: exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up. E.g. for a stability study: {store sample from lot A at 25 degrees for 1 month}, {store sample from lot A at 40 degrees for 1 month}.
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyComparisonGroupType[] $comparisonGroup
     * @return self
     */
    public function setComparisonGroup(array $comparisonGroup = null)
    {
        $this->comparisonGroup = $comparisonGroup;
        return $this;
    }

    /**
     * Adds as objective
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyObjectiveType $objective
     */
    public function addToObjective(\TKusy\Hl7Fhir\R5\ResearchStudyObjectiveType $objective)
    {
        $this->objective[] = $objective;
        return $this;
    }

    /**
     * isset objective
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObjective($index)
    {
        return isset($this->objective[$index]);
    }

    /**
     * unset objective
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObjective($index)
    {
        unset($this->objective[$index]);
    }

    /**
     * Gets as objective
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchStudyObjectiveType[]
     */
    public function getObjective()
    {
        return $this->objective;
    }

    /**
     * Sets a new objective
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyObjectiveType[] $objective
     * @return self
     */
    public function setObjective(array $objective = null)
    {
        $this->objective = $objective;
        return $this;
    }

    /**
     * Adds as outcomeMeasure
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a specific measurement or observation used to quantify the effect of experimental variables on the participants in a study, or for observational studies, to describe patterns of diseases or traits or associations with exposures, risk factors or treatment.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyOutcomeMeasureType $outcomeMeasure
     */
    public function addToOutcomeMeasure(\TKusy\Hl7Fhir\R5\ResearchStudyOutcomeMeasureType $outcomeMeasure)
    {
        $this->outcomeMeasure[] = $outcomeMeasure;
        return $this;
    }

    /**
     * isset outcomeMeasure
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a specific measurement or observation used to quantify the effect of experimental variables on the participants in a study, or for observational studies, to describe patterns of diseases or traits or associations with exposures, risk factors or treatment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutcomeMeasure($index)
    {
        return isset($this->outcomeMeasure[$index]);
    }

    /**
     * unset outcomeMeasure
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a specific measurement or observation used to quantify the effect of experimental variables on the participants in a study, or for observational studies, to describe patterns of diseases or traits or associations with exposures, risk factors or treatment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutcomeMeasure($index)
    {
        unset($this->outcomeMeasure[$index]);
    }

    /**
     * Gets as outcomeMeasure
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a specific measurement or observation used to quantify the effect of experimental variables on the participants in a study, or for observational studies, to describe patterns of diseases or traits or associations with exposures, risk factors or treatment.
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchStudyOutcomeMeasureType[]
     */
    public function getOutcomeMeasure()
    {
        return $this->outcomeMeasure;
    }

    /**
     * Sets a new outcomeMeasure
     *
     * An "outcome measure", "endpoint", "effect measure" or "measure of effect" is a specific measurement or observation used to quantify the effect of experimental variables on the participants in a study, or for observational studies, to describe patterns of diseases or traits or associations with exposures, risk factors or treatment.
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchStudyOutcomeMeasureType[] $outcomeMeasure
     * @return self
     */
    public function setOutcomeMeasure(array $outcomeMeasure = null)
    {
        $this->outcomeMeasure = $outcomeMeasure;
        return $this;
    }

    /**
     * Adds as result
     *
     * Link to one or more sets of results generated by the study. Could also link to a research registry holding the results such as ClinicalTrials.gov.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $result
     */
    public function addToResult(\TKusy\Hl7Fhir\R5\ReferenceType $result)
    {
        $this->result[] = $result;
        return $this;
    }

    /**
     * isset result
     *
     * Link to one or more sets of results generated by the study. Could also link to a research registry holding the results such as ClinicalTrials.gov.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResult($index)
    {
        return isset($this->result[$index]);
    }

    /**
     * unset result
     *
     * Link to one or more sets of results generated by the study. Could also link to a research registry holding the results such as ClinicalTrials.gov.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResult($index)
    {
        unset($this->result[$index]);
    }

    /**
     * Gets as result
     *
     * Link to one or more sets of results generated by the study. Could also link to a research registry holding the results such as ClinicalTrials.gov.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * Link to one or more sets of results generated by the study. Could also link to a research registry holding the results such as ClinicalTrials.gov.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $result
     * @return self
     */
    public function setResult(array $result = null)
    {
        $this->result = $result;
        return $this;
    }


}

