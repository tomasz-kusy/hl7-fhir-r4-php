<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AdverseEventType
 *
 * An event (i.e. any change to current patient status) that may be related to unintended effects on a patient or research participant. The unintended effects may require additional monitoring, treatment, hospitalization, or may result in death. The AdverseEvent resource also extends to potential or avoided events that could have had such effects. There are two major domains where the AdverseEvent resource is expected to be used. One is in clinical care reported adverse events and the other is in reporting adverse events in clinical research trial management. Adverse events can be reported by healthcare providers, patients, caregivers or by medical products manufacturers. Given the differences between these two concepts, we recommend consulting the domain specific implementation guides when implementing the AdverseEvent Resource. The implementation guides include specific extensions, value sets and constraints.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: AdverseEvent
 */
class AdverseEventType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The current state of the adverse event or potential adverse event.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventStatusType $status
     */
    private $status = null;

    /**
     * Whether the event actually happened or was a near miss. Note that this is independent of whether anyone was affected or harmed or how severely.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventActualityType $actuality
     */
    private $actuality = null;

    /**
     * The overall type of event, intended for search and filtering purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Specific event that occurred or that was averted, such as patient fall, wrong organ removed, or wrong blood transfused.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * This subject or group impacted by the event.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter associated with the start of the AdverseEvent.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming
     */
    private $occurrenceTiming = null;

    /**
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $detected
     */
    private $detected = null;

    /**
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $recordedDate
     */
    private $recordedDate = null;

    /**
     * Information about the condition that occurred as a result of the adverse event, such as hives due to the exposure to a substance (for example, a drug or a chemical) or a broken leg as a result of the fall.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $resultingEffect
     */
    private $resultingEffect = null;

    /**
     * The information about where the adverse event occurred.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * Assessment whether this event, or averted event, was of clinical importance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $seriousness
     */
    private $seriousness = null;

    /**
     * Describes the type of outcome from the adverse event, such as resolved, recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $outcome
     */
    private $outcome = null;

    /**
     * Information on who recorded the adverse event. May be the patient or a practitioner.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $recorder
     */
    private $recorder = null;

    /**
     * Indicates who or what participated in the adverse event and how they were involved.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventParticipantType[] $participant
     */
    private $participant = null;

    /**
     * The research study that the subject is enrolled in.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $study
     */
    private $study = null;

    /**
     * Considered likely or probable or anticipated in the research study. Whether the reported event matches any of the outcomes for the patient that are considered by the study as known or likely.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $expectedInResearchStudy
     */
    private $expectedInResearchStudy = null;

    /**
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventSuspectEntityType[] $suspectEntity
     */
    private $suspectEntity = null;

    /**
     * The contributing factors suspected to have increased the probability or severity of the adverse event.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventContributingFactorType[] $contributingFactor
     */
    private $contributingFactor = null;

    /**
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventPreventiveActionType[] $preventiveAction
     */
    private $preventiveAction = null;

    /**
     * The ameliorating action taken after the adverse event occured in order to reduce the extent of harm.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventMitigatingActionType[] $mitigatingAction
     */
    private $mitigatingAction = null;

    /**
     * Supporting information relevant to the event.
     *
     * @var \TKusy\Hl7Fhir\R5\AdverseEventSupportingInfoType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Comments made about the adverse event by the performer, subject or other participants.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this adverse event by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Gets as status
     *
     * The current state of the adverse event or potential adverse event.
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEventStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the adverse event or potential adverse event.
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEventStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\AdverseEventStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as actuality
     *
     * Whether the event actually happened or was a near miss. Note that this is independent of whether anyone was affected or harmed or how severely.
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEventActualityType
     */
    public function getActuality()
    {
        return $this->actuality;
    }

    /**
     * Sets a new actuality
     *
     * Whether the event actually happened or was a near miss. Note that this is independent of whether anyone was affected or harmed or how severely.
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEventActualityType $actuality
     * @return self
     */
    public function setActuality(\TKusy\Hl7Fhir\R5\AdverseEventActualityType $actuality)
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
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
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * Specific event that occurred or that was averted, such as patient fall, wrong organ removed, or wrong blood transfused.
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
     * Specific event that occurred or that was averted, such as patient fall, wrong organ removed, or wrong blood transfused.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * This subject or group impacted by the event.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter associated with the start of the AdverseEvent.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The Encounter associated with the start of the AdverseEvent.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $occurrenceDateTime = null)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrencePeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Sets a new occurrencePeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod
     * @return self
     */
    public function setOccurrencePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $occurrencePeriod = null)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Gets as occurrenceTiming
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType
     */
    public function getOccurrenceTiming()
    {
        return $this->occurrenceTiming;
    }

    /**
     * Sets a new occurrenceTiming
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming
     * @return self
     */
    public function setOccurrenceTiming(?\TKusy\Hl7Fhir\R5\TimingType $occurrenceTiming = null)
    {
        $this->occurrenceTiming = $occurrenceTiming;
        return $this;
    }

    /**
     * Gets as detected
     *
     * Estimated or actual date the AdverseEvent began, in the opinion of the reporter.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $detected
     * @return self
     */
    public function setDetected(?\TKusy\Hl7Fhir\R5\DateTimeType $detected = null)
    {
        $this->detected = $detected;
        return $this;
    }

    /**
     * Gets as recordedDate
     *
     * The date on which the existence of the AdverseEvent was first recorded.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $recordedDate
     * @return self
     */
    public function setRecordedDate(?\TKusy\Hl7Fhir\R5\DateTimeType $recordedDate = null)
    {
        $this->recordedDate = $recordedDate;
        return $this;
    }

    /**
     * Adds as resultingEffect
     *
     * Information about the condition that occurred as a result of the adverse event, such as hives due to the exposure to a substance (for example, a drug or a chemical) or a broken leg as a result of the fall.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $resultingEffect
     */
    public function addToResultingEffect(\TKusy\Hl7Fhir\R5\ReferenceType $resultingEffect)
    {
        $this->resultingEffect[] = $resultingEffect;
        return $this;
    }

    /**
     * isset resultingEffect
     *
     * Information about the condition that occurred as a result of the adverse event, such as hives due to the exposure to a substance (for example, a drug or a chemical) or a broken leg as a result of the fall.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResultingEffect($index)
    {
        return isset($this->resultingEffect[$index]);
    }

    /**
     * unset resultingEffect
     *
     * Information about the condition that occurred as a result of the adverse event, such as hives due to the exposure to a substance (for example, a drug or a chemical) or a broken leg as a result of the fall.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResultingEffect($index)
    {
        unset($this->resultingEffect[$index]);
    }

    /**
     * Gets as resultingEffect
     *
     * Information about the condition that occurred as a result of the adverse event, such as hives due to the exposure to a substance (for example, a drug or a chemical) or a broken leg as a result of the fall.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getResultingEffect()
    {
        return $this->resultingEffect;
    }

    /**
     * Sets a new resultingEffect
     *
     * Information about the condition that occurred as a result of the adverse event, such as hives due to the exposure to a substance (for example, a drug or a chemical) or a broken leg as a result of the fall.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $resultingEffect
     * @return self
     */
    public function setResultingEffect(array $resultingEffect = null)
    {
        $this->resultingEffect = $resultingEffect;
        return $this;
    }

    /**
     * Gets as location
     *
     * The information about where the adverse event occurred.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as seriousness
     *
     * Assessment whether this event, or averted event, was of clinical importance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSeriousness()
    {
        return $this->seriousness;
    }

    /**
     * Sets a new seriousness
     *
     * Assessment whether this event, or averted event, was of clinical importance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $seriousness
     * @return self
     */
    public function setSeriousness(?\TKusy\Hl7Fhir\R5\CodeableConceptType $seriousness = null)
    {
        $this->seriousness = $seriousness;
        return $this;
    }

    /**
     * Adds as outcome
     *
     * Describes the type of outcome from the adverse event, such as resolved, recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $outcome
     */
    public function addToOutcome(\TKusy\Hl7Fhir\R5\CodeableConceptType $outcome)
    {
        $this->outcome[] = $outcome;
        return $this;
    }

    /**
     * isset outcome
     *
     * Describes the type of outcome from the adverse event, such as resolved, recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutcome($index)
    {
        return isset($this->outcome[$index]);
    }

    /**
     * unset outcome
     *
     * Describes the type of outcome from the adverse event, such as resolved, recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutcome($index)
    {
        unset($this->outcome[$index]);
    }

    /**
     * Gets as outcome
     *
     * Describes the type of outcome from the adverse event, such as resolved, recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * Describes the type of outcome from the adverse event, such as resolved, recovering, ongoing, resolved-with-sequelae, or fatal.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $outcome
     * @return self
     */
    public function setOutcome(array $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as recorder
     *
     * Information on who recorded the adverse event. May be the patient or a practitioner.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $recorder
     * @return self
     */
    public function setRecorder(?\TKusy\Hl7Fhir\R5\ReferenceType $recorder = null)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Adds as participant
     *
     * Indicates who or what participated in the adverse event and how they were involved.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AdverseEventParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\AdverseEventParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * Indicates who or what participated in the adverse event and how they were involved.
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
     * Indicates who or what participated in the adverse event and how they were involved.
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
     * Indicates who or what participated in the adverse event and how they were involved.
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEventParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Indicates who or what participated in the adverse event and how they were involved.
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEventParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant = null)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Adds as study
     *
     * The research study that the subject is enrolled in.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $study
     */
    public function addToStudy(\TKusy\Hl7Fhir\R5\ReferenceType $study)
    {
        $this->study[] = $study;
        return $this;
    }

    /**
     * isset study
     *
     * The research study that the subject is enrolled in.
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
     * The research study that the subject is enrolled in.
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
     * The research study that the subject is enrolled in.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * Sets a new study
     *
     * The research study that the subject is enrolled in.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $study
     * @return self
     */
    public function setStudy(array $study = null)
    {
        $this->study = $study;
        return $this;
    }

    /**
     * Gets as expectedInResearchStudy
     *
     * Considered likely or probable or anticipated in the research study. Whether the reported event matches any of the outcomes for the patient that are considered by the study as known or likely.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getExpectedInResearchStudy()
    {
        return $this->expectedInResearchStudy;
    }

    /**
     * Sets a new expectedInResearchStudy
     *
     * Considered likely or probable or anticipated in the research study. Whether the reported event matches any of the outcomes for the patient that are considered by the study as known or likely.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $expectedInResearchStudy
     * @return self
     */
    public function setExpectedInResearchStudy(?\TKusy\Hl7Fhir\R5\BooleanType $expectedInResearchStudy = null)
    {
        $this->expectedInResearchStudy = $expectedInResearchStudy;
        return $this;
    }

    /**
     * Adds as suspectEntity
     *
     * Describes the entity that is suspected to have caused the adverse event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AdverseEventSuspectEntityType $suspectEntity
     */
    public function addToSuspectEntity(\TKusy\Hl7Fhir\R5\AdverseEventSuspectEntityType $suspectEntity)
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
     * @return \TKusy\Hl7Fhir\R5\AdverseEventSuspectEntityType[]
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
     * @param \TKusy\Hl7Fhir\R5\AdverseEventSuspectEntityType[] $suspectEntity
     * @return self
     */
    public function setSuspectEntity(array $suspectEntity = null)
    {
        $this->suspectEntity = $suspectEntity;
        return $this;
    }

    /**
     * Adds as contributingFactor
     *
     * The contributing factors suspected to have increased the probability or severity of the adverse event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AdverseEventContributingFactorType $contributingFactor
     */
    public function addToContributingFactor(\TKusy\Hl7Fhir\R5\AdverseEventContributingFactorType $contributingFactor)
    {
        $this->contributingFactor[] = $contributingFactor;
        return $this;
    }

    /**
     * isset contributingFactor
     *
     * The contributing factors suspected to have increased the probability or severity of the adverse event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContributingFactor($index)
    {
        return isset($this->contributingFactor[$index]);
    }

    /**
     * unset contributingFactor
     *
     * The contributing factors suspected to have increased the probability or severity of the adverse event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContributingFactor($index)
    {
        unset($this->contributingFactor[$index]);
    }

    /**
     * Gets as contributingFactor
     *
     * The contributing factors suspected to have increased the probability or severity of the adverse event.
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEventContributingFactorType[]
     */
    public function getContributingFactor()
    {
        return $this->contributingFactor;
    }

    /**
     * Sets a new contributingFactor
     *
     * The contributing factors suspected to have increased the probability or severity of the adverse event.
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEventContributingFactorType[] $contributingFactor
     * @return self
     */
    public function setContributingFactor(array $contributingFactor = null)
    {
        $this->contributingFactor = $contributingFactor;
        return $this;
    }

    /**
     * Adds as preventiveAction
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AdverseEventPreventiveActionType $preventiveAction
     */
    public function addToPreventiveAction(\TKusy\Hl7Fhir\R5\AdverseEventPreventiveActionType $preventiveAction)
    {
        $this->preventiveAction[] = $preventiveAction;
        return $this;
    }

    /**
     * isset preventiveAction
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreventiveAction($index)
    {
        return isset($this->preventiveAction[$index]);
    }

    /**
     * unset preventiveAction
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreventiveAction($index)
    {
        unset($this->preventiveAction[$index]);
    }

    /**
     * Gets as preventiveAction
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEventPreventiveActionType[]
     */
    public function getPreventiveAction()
    {
        return $this->preventiveAction;
    }

    /**
     * Sets a new preventiveAction
     *
     * Preventive actions that contributed to avoiding the adverse event.
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEventPreventiveActionType[] $preventiveAction
     * @return self
     */
    public function setPreventiveAction(array $preventiveAction = null)
    {
        $this->preventiveAction = $preventiveAction;
        return $this;
    }

    /**
     * Adds as mitigatingAction
     *
     * The ameliorating action taken after the adverse event occured in order to reduce the extent of harm.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AdverseEventMitigatingActionType $mitigatingAction
     */
    public function addToMitigatingAction(\TKusy\Hl7Fhir\R5\AdverseEventMitigatingActionType $mitigatingAction)
    {
        $this->mitigatingAction[] = $mitigatingAction;
        return $this;
    }

    /**
     * isset mitigatingAction
     *
     * The ameliorating action taken after the adverse event occured in order to reduce the extent of harm.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMitigatingAction($index)
    {
        return isset($this->mitigatingAction[$index]);
    }

    /**
     * unset mitigatingAction
     *
     * The ameliorating action taken after the adverse event occured in order to reduce the extent of harm.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMitigatingAction($index)
    {
        unset($this->mitigatingAction[$index]);
    }

    /**
     * Gets as mitigatingAction
     *
     * The ameliorating action taken after the adverse event occured in order to reduce the extent of harm.
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEventMitigatingActionType[]
     */
    public function getMitigatingAction()
    {
        return $this->mitigatingAction;
    }

    /**
     * Sets a new mitigatingAction
     *
     * The ameliorating action taken after the adverse event occured in order to reduce the extent of harm.
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEventMitigatingActionType[] $mitigatingAction
     * @return self
     */
    public function setMitigatingAction(array $mitigatingAction = null)
    {
        $this->mitigatingAction = $mitigatingAction;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Supporting information relevant to the event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AdverseEventSupportingInfoType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R5\AdverseEventSupportingInfoType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Supporting information relevant to the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInfo($index)
    {
        return isset($this->supportingInfo[$index]);
    }

    /**
     * unset supportingInfo
     *
     * Supporting information relevant to the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInfo($index)
    {
        unset($this->supportingInfo[$index]);
    }

    /**
     * Gets as supportingInfo
     *
     * Supporting information relevant to the event.
     *
     * @return \TKusy\Hl7Fhir\R5\AdverseEventSupportingInfoType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Supporting information relevant to the event.
     *
     * @param \TKusy\Hl7Fhir\R5\AdverseEventSupportingInfoType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo = null)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the adverse event by the performer, subject or other participants.
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
     * Comments made about the adverse event by the performer, subject or other participants.
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
     * Comments made about the adverse event by the performer, subject or other participants.
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
     * Comments made about the adverse event by the performer, subject or other participants.
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
     * Comments made about the adverse event by the performer, subject or other participants.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

