<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ResearchStudyType
 *
 * A process where a researcher or organization plans and then executes a series of steps intended to increase the field of healthcare-related knowledge. This includes studies of safety, efficacy, comparative effectiveness and other information about medications, devices, therapies and other interventional and investigative techniques. A ResearchStudy involves the gathering of information about human or animal subjects.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ResearchStudy
 */
class ResearchStudyType extends DomainResourceType
{

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * A short, descriptive user-friendly label for the study.
     *
     * @var \TKusy\Hl7FhirR4\StringType $title
     */
    private $title = null;

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $protocol
     */
    private $protocol = [
        
    ];

    /**
     * A larger research study of which this particular study is a component or step.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     */
    private $partOf = [
        
    ];

    /**
     * The current state of the study.
     *
     * @var \TKusy\Hl7FhirR4\ResearchStudyStatusType $status
     */
    private $status = null;

    /**
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $primaryPurposeType
     */
    private $primaryPurposeType = null;

    /**
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $phase
     */
    private $phase = null;

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $focus
     */
    private $focus = [
        
    ];

    /**
     * The condition that is the focus of the study. For example, In a study to examine risk factors for Lupus, might have as an inclusion criterion "healthy volunteer", but the target condition code would be a Lupus SNOMED code.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $condition
     */
    private $condition = [
        
    ];

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     *
     * @var \TKusy\Hl7FhirR4\ContactDetailType[] $contact
     */
    private $contact = [
        
    ];

    /**
     * Citations, references and other related documents.
     *
     * @var \TKusy\Hl7FhirR4\RelatedArtifactType[] $relatedArtifact
     */
    private $relatedArtifact = [
        
    ];

    /**
     * Key terms to aid in searching for or filtering the study.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $keyword
     */
    private $keyword = [
        
    ];

    /**
     * Indicates a country, state or other region where the study is taking place.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $location
     */
    private $location = [
        
    ];

    /**
     * A full description of how the study is being conducted.
     *
     * @var \TKusy\Hl7FhirR4\MarkdownType $description
     */
    private $description = null;

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study. E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $enrollment
     */
    private $enrollment = [
        
    ];

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * An organization that initiates the investigation and is legally responsible for the study.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $sponsor
     */
    private $sponsor = null;

    /**
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $principalInvestigator
     */
    private $principalInvestigator = null;

    /**
     * A facility in which study activities are conducted.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $site
     */
    private $site = [
        
    ];

    /**
     * A description and/or code explaining the premature termination of the study.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $reasonStopped
     */
    private $reasonStopped = null;

    /**
     * Comments made about the study by the performer, subject or other participants.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * Describes an expected sequence of events for one of the participants of a study. E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @var \TKusy\Hl7FhirR4\ResearchStudyArmType[] $arm
     */
    private $arm = [
        
    ];

    /**
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     *
     * @var \TKusy\Hl7FhirR4\ResearchStudyObjectiveType[] $objective
     */
    private $objective = [
        
    ];

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this research study by the sponsor or other systems.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as title
     *
     * A short, descriptive user-friendly label for the study.
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
     * A short, descriptive user-friendly label for the study.
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
     * Adds as protocol
     *
     * The set of steps expected to be performed as part of the execution of the study.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $protocol
     */
    public function addToProtocol(\TKusy\Hl7FhirR4\ReferenceType $protocol)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $protocol
     * @return self
     */
    public function setProtocol(array $protocol)
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $partOf
     */
    public function addToPartOf(\TKusy\Hl7FhirR4\ReferenceType $partOf)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $partOf
     * @return self
     */
    public function setPartOf(array $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of the study.
     *
     * @return \TKusy\Hl7FhirR4\ResearchStudyStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the study.
     *
     * @param \TKusy\Hl7FhirR4\ResearchStudyStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ResearchStudyStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as primaryPurposeType
     *
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPrimaryPurposeType()
    {
        return $this->primaryPurposeType;
    }

    /**
     * Sets a new primaryPurposeType
     *
     * The type of study based upon the intent of the study's activities. A classification of the intent of the study.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $primaryPurposeType
     * @return self
     */
    public function setPrimaryPurposeType(\TKusy\Hl7FhirR4\CodeableConceptType $primaryPurposeType)
    {
        $this->primaryPurposeType = $primaryPurposeType;
        return $this;
    }

    /**
     * Gets as phase
     *
     * The stage in the progression of a therapy from initial experimental use in humans in clinical trials to post-market evaluation.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $phase
     * @return self
     */
    public function setPhase(\TKusy\Hl7FhirR4\CodeableConceptType $phase)
    {
        $this->phase = $phase;
        return $this;
    }

    /**
     * Adds as category
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as focus
     *
     * The medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $focus
     */
    public function addToFocus(\TKusy\Hl7FhirR4\CodeableConceptType $focus)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $focus
     * @return self
     */
    public function setFocus(array $focus)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $condition
     */
    public function addToCondition(\TKusy\Hl7FhirR4\CodeableConceptType $condition)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Adds as contact
     *
     * Contact details to assist a user in learning more about or engaging with the study.
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
     * Contact details to assist a user in learning more about or engaging with the study.
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
     * Contact details to assist a user in learning more about or engaging with the study.
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
     * Contact details to assist a user in learning more about or engaging with the study.
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
     * Contact details to assist a user in learning more about or engaging with the study.
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
     * Adds as relatedArtifact
     *
     * Citations, references and other related documents.
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
     * Citations, references and other related documents.
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
     * Citations, references and other related documents.
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
     * Citations, references and other related documents.
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
     * Citations, references and other related documents.
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
     * Adds as keyword
     *
     * Key terms to aid in searching for or filtering the study.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $keyword
     */
    public function addToKeyword(\TKusy\Hl7FhirR4\CodeableConceptType $keyword)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $keyword
     * @return self
     */
    public function setKeyword(array $keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * Adds as location
     *
     * Indicates a country, state or other region where the study is taking place.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $location
     */
    public function addToLocation(\TKusy\Hl7FhirR4\CodeableConceptType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * Indicates a country, state or other region where the study is taking place.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * Indicates a country, state or other region where the study is taking place.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * Indicates a country, state or other region where the study is taking place.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Indicates a country, state or other region where the study is taking place.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as description
     *
     * A full description of how the study is being conducted.
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
     * A full description of how the study is being conducted.
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
     * Adds as enrollment
     *
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study. E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $enrollment
     */
    public function addToEnrollment(\TKusy\Hl7FhirR4\ReferenceType $enrollment)
    {
        $this->enrollment[] = $enrollment;
        return $this;
    }

    /**
     * isset enrollment
     *
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study. E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnrollment($index)
    {
        return isset($this->enrollment[$index]);
    }

    /**
     * unset enrollment
     *
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study. E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnrollment($index)
    {
        unset($this->enrollment[$index]);
    }

    /**
     * Gets as enrollment
     *
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study. E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getEnrollment()
    {
        return $this->enrollment;
    }

    /**
     * Sets a new enrollment
     *
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study. E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $enrollment
     * @return self
     */
    public function setEnrollment(array $enrollment)
    {
        $this->enrollment = $enrollment;
        return $this;
    }

    /**
     * Gets as period
     *
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
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
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as sponsor
     *
     * An organization that initiates the investigation and is legally responsible for the study.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Sets a new sponsor
     *
     * An organization that initiates the investigation and is legally responsible for the study.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $sponsor
     * @return self
     */
    public function setSponsor(\TKusy\Hl7FhirR4\ReferenceType $sponsor)
    {
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * Gets as principalInvestigator
     *
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPrincipalInvestigator()
    {
        return $this->principalInvestigator;
    }

    /**
     * Sets a new principalInvestigator
     *
     * A researcher in a study who oversees multiple aspects of the study, such as concept development, protocol writing, protocol submission for IRB approval, participant recruitment, informed consent, data collection, analysis, interpretation and presentation.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $principalInvestigator
     * @return self
     */
    public function setPrincipalInvestigator(\TKusy\Hl7FhirR4\ReferenceType $principalInvestigator)
    {
        $this->principalInvestigator = $principalInvestigator;
        return $this;
    }

    /**
     * Adds as site
     *
     * A facility in which study activities are conducted.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $site
     */
    public function addToSite(\TKusy\Hl7FhirR4\ReferenceType $site)
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
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
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
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as reasonStopped
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getReasonStopped()
    {
        return $this->reasonStopped;
    }

    /**
     * Sets a new reasonStopped
     *
     * A description and/or code explaining the premature termination of the study.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reasonStopped
     * @return self
     */
    public function setReasonStopped(\TKusy\Hl7FhirR4\CodeableConceptType $reasonStopped)
    {
        $this->reasonStopped = $reasonStopped;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the study by the performer, subject or other participants.
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
     * @return \TKusy\Hl7FhirR4\AnnotationType[]
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
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as arm
     *
     * Describes an expected sequence of events for one of the participants of a study. E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ResearchStudyArmType $arm
     */
    public function addToArm(\TKusy\Hl7FhirR4\ResearchStudyArmType $arm)
    {
        $this->arm[] = $arm;
        return $this;
    }

    /**
     * isset arm
     *
     * Describes an expected sequence of events for one of the participants of a study. E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArm($index)
    {
        return isset($this->arm[$index]);
    }

    /**
     * unset arm
     *
     * Describes an expected sequence of events for one of the participants of a study. E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArm($index)
    {
        unset($this->arm[$index]);
    }

    /**
     * Gets as arm
     *
     * Describes an expected sequence of events for one of the participants of a study. E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @return \TKusy\Hl7FhirR4\ResearchStudyArmType[]
     */
    public function getArm()
    {
        return $this->arm;
    }

    /**
     * Sets a new arm
     *
     * Describes an expected sequence of events for one of the participants of a study. E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     *
     * @param \TKusy\Hl7FhirR4\ResearchStudyArmType[] $arm
     * @return self
     */
    public function setArm(array $arm)
    {
        $this->arm = $arm;
        return $this;
    }

    /**
     * Adds as objective
     *
     * A goal that the study is aiming to achieve in terms of a scientific question to be answered by the analysis of data collected during the study.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ResearchStudyObjectiveType $objective
     */
    public function addToObjective(\TKusy\Hl7FhirR4\ResearchStudyObjectiveType $objective)
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
     * @return \TKusy\Hl7FhirR4\ResearchStudyObjectiveType[]
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
     * @param \TKusy\Hl7FhirR4\ResearchStudyObjectiveType[] $objective
     * @return self
     */
    public function setObjective(array $objective)
    {
        $this->objective = $objective;
        return $this;
    }


}

