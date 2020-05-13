<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing AdverseEventType
 *
 * Actual or potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: AdverseEvent
 */
class AdverseEventType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     *
     * @var \TKusy\Hl7Fhir\R4\AdverseEventActualityType $actuality
     */
    private $actuality = null;

    /**
     * The overall type of event, intended for search and filtering purposes.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $event
     */
    private $event = null;

    /**
     * This subject or group impacted by the event.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which AdverseEvent was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The date (and perhaps time) when the adverse event occurred.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $date
     */
    private $date = null;

    /**
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $detected
     */
    private $detected = null;

    /**
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $recordedDate
     */
    private $recordedDate = null;

    /**
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $resultingCondition
     */
    private $resultingCondition = null;

    /**
     * The information about where the adverse event occurred.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $location
     */
    private $location = null;

    /**
     * Assessment whether this event was of real importance.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $seriousness
     */
    private $seriousness = null;

    /**
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a mild heart problem is.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $severity
     */
    private $severity = null;

    /**
     * Describes the type of outcome from the adverse event.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $outcome
     */
    private $outcome = null;

    /**
     * Information on who recorded the adverse event. May be the patient or a practitioner.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $recorder
     */
    private $recorder = null;

    /**
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities. Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $contributor
     */
    private $contributor = null;

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @var \TKusy\Hl7Fhir\R4\AdverseEventSuspectEntityType[] $suspectEntity
     */
    private $suspectEntity = null;

    /**
     * AdverseEvent.subjectMedicalHistory.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $subjectMedicalHistory
     */
    private $subjectMedicalHistory = null;

    /**
     * AdverseEvent.referenceDocument.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $referenceDocument
     */
    private $referenceDocument = null;

    /**
     * AdverseEvent.study.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $study
     */
    private $study = null;

    /**
     * Gets as identifier
     *
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as actuality
     *
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     *
     * @return \TKusy\Hl7Fhir\R4\AdverseEventActualityType
     */
    public function getActuality()
    {
        return $this->actuality;
    }

    /**
     * Sets a new actuality
     *
     * Whether the event actually happened, or just had the potential to. Note that this is independent of whether anyone was affected or harmed or how severely.
     *
     * @param \TKusy\Hl7Fhir\R4\AdverseEventActualityType $actuality
     * @return self
     */
    public function setActuality(\TKusy\Hl7Fhir\R4\AdverseEventActualityType $actuality)
    {
        $this->actuality = $actuality;
        return $this;
    }

    /**
     * Adds as category
     *
     * The overall type of event, intended for search and filtering purposes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * The overall type of event, intended for search and filtering purposes.
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
     * The overall type of event, intended for search and filtering purposes.
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
     * The overall type of event, intended for search and filtering purposes.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * The overall type of event, intended for search and filtering purposes.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as event
     *
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * This element defines the specific type of event that occurred or that was prevented from occurring.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $event
     * @return self
     */
    public function setEvent(\TKusy\Hl7Fhir\R4\CodeableConceptType $event)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Gets as subject
     *
     * This subject or group impacted by the event.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * This subject or group impacted by the event.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter during which AdverseEvent was created or to which the creation of this record is tightly associated.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The Encounter during which AdverseEvent was created or to which the creation of this record is tightly associated.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7Fhir\R4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date (and perhaps time) when the adverse event occurred.
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
     * The date (and perhaps time) when the adverse event occurred.
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
     * Gets as detected
     *
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getDetected()
    {
        return $this->detected;
    }

    /**
     * Sets a new detected
     *
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $detected
     * @return self
     */
    public function setDetected(\TKusy\Hl7Fhir\R4\DateTimeType $detected)
    {
        $this->detected = $detected;
        return $this;
    }

    /**
     * Gets as recordedDate
     *
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * Sets a new recordedDate
     *
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $recordedDate
     * @return self
     */
    public function setRecordedDate(\TKusy\Hl7Fhir\R4\DateTimeType $recordedDate)
    {
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * Adds as resultingCondition
     *
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $resultingCondition
     */
    public function addToResultingCondition(\TKusy\Hl7Fhir\R4\ReferenceType $resultingCondition)
    {
        $this->resultingCondition[] = $resultingCondition;
        return $this;
    }

    /**
     * isset resultingCondition
     *
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResultingCondition($index)
    {
        return isset($this->resultingCondition[$index]);
    }

    /**
     * unset resultingCondition
     *
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResultingCondition($index)
    {
        unset($this->resultingCondition[$index]);
    }

    /**
     * Gets as resultingCondition
     *
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getResultingCondition()
    {
        return $this->resultingCondition;
    }

    /**
     * Sets a new resultingCondition
     *
     * Includes information about the reaction that occurred as a result of exposure to a substance (for example, a drug or a chemical).
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $resultingCondition
     * @return self
     */
    public function setResultingCondition(array $resultingCondition)
    {
        $this->resultingCondition = $resultingCondition;
        return $this;
    }

    /**
     * Gets as location
     *
     * The information about where the adverse event occurred.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The information about where the adverse event occurred.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $location
     * @return self
     */
    public function setLocation(\TKusy\Hl7Fhir\R4\ReferenceType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as seriousness
     *
     * Assessment whether this event was of real importance.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getSeriousness()
    {
        return $this->seriousness;
    }

    /**
     * Sets a new seriousness
     *
     * Assessment whether this event was of real importance.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $seriousness
     * @return self
     */
    public function setSeriousness(\TKusy\Hl7Fhir\R4\CodeableConceptType $seriousness)
    {
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * Gets as severity
     *
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a mild heart problem is.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Describes the severity of the adverse event, in relation to the subject. Contrast to AdverseEvent.seriousness - a severe rash might not be serious, but a mild heart problem is.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $severity
     * @return self
     */
    public function setSeverity(\TKusy\Hl7Fhir\R4\CodeableConceptType $severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * Describes the type of outcome from the adverse event.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * Describes the type of outcome from the adverse event.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7Fhir\R4\CodeableConceptType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as recorder
     *
     * Information on who recorded the adverse event. May be the patient or a practitioner.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Sets a new recorder
     *
     * Information on who recorded the adverse event. May be the patient or a practitioner.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $recorder
     * @return self
     */
    public function setRecorder(\TKusy\Hl7Fhir\R4\ReferenceType $recorder)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Adds as contributor
     *
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities. Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $contributor
     */
    public function addToContributor(\TKusy\Hl7Fhir\R4\ReferenceType $contributor)
    {
        $this->contributor[] = $contributor;
        return $this;
    }

    /**
     * isset contributor
     *
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities. Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributor($index)
    {
        return isset($this->contributor[$index]);
    }

    /**
     * unset contributor
     *
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities. Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributor($index)
    {
        unset($this->contributor[$index]);
    }

    /**
     * Gets as contributor
     *
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities. Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Sets a new contributor
     *
     * Parties that may or should contribute or have contributed information to the adverse event, which can consist of one or more activities. Such information includes information leading to the decision to perform the activity and how to perform the activity (e.g. consultant), information that the activity itself seeks to reveal (e.g. informant of clinical history), or information about what activity was performed (e.g. informant witness).
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $contributor
     * @return self
     */
    public function setContributor(array $contributor)
    {
        $this->contributor = $contributor;
        return $this;
    }

    /**
     * Adds as suspectEntity
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\AdverseEventSuspectEntityType $suspectEntity
     */
    public function addToSuspectEntity(\TKusy\Hl7Fhir\R4\AdverseEventSuspectEntityType $suspectEntity)
    {
        $this->suspectEntity[] = $suspectEntity;
        return $this;
    }

    /**
     * isset suspectEntity
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuspectEntity($index)
    {
        return isset($this->suspectEntity[$index]);
    }

    /**
     * unset suspectEntity
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuspectEntity($index)
    {
        unset($this->suspectEntity[$index]);
    }

    /**
     * Gets as suspectEntity
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @return \TKusy\Hl7Fhir\R4\AdverseEventSuspectEntityType[]
     */
    public function getSuspectEntity()
    {
        return $this->suspectEntity;
    }

    /**
     * Sets a new suspectEntity
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @param \TKusy\Hl7Fhir\R4\AdverseEventSuspectEntityType[] $suspectEntity
     * @return self
     */
    public function setSuspectEntity(array $suspectEntity)
    {
        $this->suspectEntity = $suspectEntity;
        return $this;
    }

    /**
     * Adds as subjectMedicalHistory
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subjectMedicalHistory
     */
    public function addToSubjectMedicalHistory(\TKusy\Hl7Fhir\R4\ReferenceType $subjectMedicalHistory)
    {
        $this->subjectMedicalHistory[] = $subjectMedicalHistory;
        return $this;
    }

    /**
     * isset subjectMedicalHistory
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubjectMedicalHistory($index)
    {
        return isset($this->subjectMedicalHistory[$index]);
    }

    /**
     * unset subjectMedicalHistory
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubjectMedicalHistory($index)
    {
        unset($this->subjectMedicalHistory[$index]);
    }

    /**
     * Gets as subjectMedicalHistory
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getSubjectMedicalHistory()
    {
        return $this->subjectMedicalHistory;
    }

    /**
     * Sets a new subjectMedicalHistory
     *
     * AdverseEvent.subjectMedicalHistory.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $subjectMedicalHistory
     * @return self
     */
    public function setSubjectMedicalHistory(array $subjectMedicalHistory)
    {
        $this->subjectMedicalHistory = $subjectMedicalHistory;
        return $this;
    }

    /**
     * Adds as referenceDocument
     *
     * AdverseEvent.referenceDocument.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $referenceDocument
     */
    public function addToReferenceDocument(\TKusy\Hl7Fhir\R4\ReferenceType $referenceDocument)
    {
        $this->referenceDocument[] = $referenceDocument;
        return $this;
    }

    /**
     * isset referenceDocument
     *
     * AdverseEvent.referenceDocument.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceDocument($index)
    {
        return isset($this->referenceDocument[$index]);
    }

    /**
     * unset referenceDocument
     *
     * AdverseEvent.referenceDocument.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceDocument($index)
    {
        unset($this->referenceDocument[$index]);
    }

    /**
     * Gets as referenceDocument
     *
     * AdverseEvent.referenceDocument.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getReferenceDocument()
    {
        return $this->referenceDocument;
    }

    /**
     * Sets a new referenceDocument
     *
     * AdverseEvent.referenceDocument.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $referenceDocument
     * @return self
     */
    public function setReferenceDocument(array $referenceDocument)
    {
        $this->referenceDocument = $referenceDocument;
        return $this;
    }

    /**
     * Adds as study
     *
     * AdverseEvent.study.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $study
     */
    public function addToStudy(\TKusy\Hl7Fhir\R4\ReferenceType $study)
    {
        $this->study[] = $study;
        return $this;
    }

    /**
     * isset study
     *
     * AdverseEvent.study.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStudy($index)
    {
        return isset($this->study[$index]);
    }

    /**
     * unset study
     *
     * AdverseEvent.study.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStudy($index)
    {
        unset($this->study[$index]);
    }

    /**
     * Gets as study
     *
     * AdverseEvent.study.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * Sets a new study
     *
     * AdverseEvent.study.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $study
     * @return self
     */
    public function setStudy(array $study)
    {
        $this->study = $study;
        return $this;
    }


}

