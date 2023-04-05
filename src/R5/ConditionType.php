<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ConditionType
 *
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or clinical concept that has risen to a level of concern.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Condition
 */
class ConditionType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The clinical status of the condition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $clinicalStatus
     */
    private $clinicalStatus = null;

    /**
     * The verification status to support the clinical status of the condition. The verification status pertains to the condition, itself, not to any specific condition attribute.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $verificationStatus
     */
    private $verificationStatus = null;

    /**
     * A category assigned to the condition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $severity
     */
    private $severity = null;

    /**
     * Identification of the condition, problem or diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The anatomical location where this condition manifests itself.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $bodySite
     */
    private $bodySite = null;

    /**
     * Indicates the patient or group who the condition record is associated with.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which this Condition was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $onsetDateTime
     */
    private $onsetDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $onsetAge
     */
    private $onsetAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod
     */
    private $onsetPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $onsetRange
     */
    private $onsetRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $onsetString
     */
    private $onsetString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $abatementDateTime
     */
    private $abatementDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\AgeType $abatementAge
     */
    private $abatementAge = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $abatementPeriod
     */
    private $abatementPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RangeType $abatementRange
     */
    private $abatementRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $abatementString
     */
    private $abatementString = null;

    /**
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $recordedDate
     */
    private $recordedDate = null;

    /**
     * Indicates who or what participated in the activities related to the condition and how they were involved.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionParticipantType[] $participant
     */
    private $participant = null;

    /**
     * A simple summary of the stage such as "Stage 3" or "Early Onset". The determination of the stage is disease-specific, such as cancer, retinopathy of prematurity, kidney diseases, Alzheimer's, or Parkinson disease.
     *
     * @var \TKusy\Hl7Fhir\R5\ConditionStageType[] $stage
     */
    private $stage = null;

    /**
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $evidence
     */
    private $evidence = null;

    /**
     * Additional information about the Condition. This is a general notes/comments entry for description of the Condition, its diagnosis and prognosis.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Gets as clinicalStatus
     *
     * The clinical status of the condition.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }

    /**
     * Sets a new clinicalStatus
     *
     * The clinical status of the condition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $clinicalStatus
     * @return self
     */
    public function setClinicalStatus(\TKusy\Hl7Fhir\R5\CodeableConceptType $clinicalStatus)
    {
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * Gets as verificationStatus
     *
     * The verification status to support the clinical status of the condition. The verification status pertains to the condition, itself, not to any specific condition attribute.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * Sets a new verificationStatus
     *
     * The verification status to support the clinical status of the condition. The verification status pertains to the condition, itself, not to any specific condition attribute.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $verificationStatus
     * @return self
     */
    public function setVerificationStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $verificationStatus = null)
    {
        $this->verificationStatus = $verificationStatus;
        return $this;
    }

    /**
     * Adds as category
     *
     * A category assigned to the condition.
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
     * A category assigned to the condition.
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
     * A category assigned to the condition.
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
     * A category assigned to the condition.
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
     * A category assigned to the condition.
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
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as bodySite
     *
     * The anatomical location where this condition manifests itself.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7Fhir\R5\CodeableConceptType $bodySite)
    {
        $this->bodySite[] = $bodySite;
        return $this;
    }

    /**
     * isset bodySite
     *
     * The anatomical location where this condition manifests itself.
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
     * The anatomical location where this condition manifests itself.
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
     * The anatomical location where this condition manifests itself.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite = null)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Indicates the patient or group who the condition record is associated with.
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
     * Indicates the patient or group who the condition record is associated with.
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
     * The Encounter during which this Condition was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this Condition was created or to which the creation of this record is tightly associated.
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
     * Gets as onsetDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }

    /**
     * Sets a new onsetDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $onsetDateTime
     * @return self
     */
    public function setOnsetDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $onsetDateTime = null)
    {
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * Gets as onsetAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Sets a new onsetAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $onsetAge
     * @return self
     */
    public function setOnsetAge(?\TKusy\Hl7Fhir\R5\AgeType $onsetAge = null)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Gets as onsetPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Sets a new onsetPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod
     * @return self
     */
    public function setOnsetPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $onsetPeriod = null)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Gets as onsetRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Sets a new onsetRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $onsetRange
     * @return self
     */
    public function setOnsetRange(?\TKusy\Hl7Fhir\R5\RangeType $onsetRange = null)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Gets as onsetString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * Sets a new onsetString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $onsetString
     * @return self
     */
    public function setOnsetString(?\TKusy\Hl7Fhir\R5\StringType $onsetString = null)
    {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * Gets as abatementDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getAbatementDateTime()
    {
        return $this->abatementDateTime;
    }

    /**
     * Sets a new abatementDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $abatementDateTime
     * @return self
     */
    public function setAbatementDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $abatementDateTime = null)
    {
        $this->abatementDateTime = $abatementDateTime;
        return $this;
    }

    /**
     * Gets as abatementAge
     *
     * @return \TKusy\Hl7Fhir\R5\AgeType
     */
    public function getAbatementAge()
    {
        return $this->abatementAge;
    }

    /**
     * Sets a new abatementAge
     *
     * @param \TKusy\Hl7Fhir\R5\AgeType $abatementAge
     * @return self
     */
    public function setAbatementAge(?\TKusy\Hl7Fhir\R5\AgeType $abatementAge = null)
    {
        $this->abatementAge = $abatementAge;
        return $this;
    }

    /**
     * Gets as abatementPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getAbatementPeriod()
    {
        return $this->abatementPeriod;
    }

    /**
     * Sets a new abatementPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $abatementPeriod
     * @return self
     */
    public function setAbatementPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $abatementPeriod = null)
    {
        $this->abatementPeriod = $abatementPeriod;
        return $this;
    }

    /**
     * Gets as abatementRange
     *
     * @return \TKusy\Hl7Fhir\R5\RangeType
     */
    public function getAbatementRange()
    {
        return $this->abatementRange;
    }

    /**
     * Sets a new abatementRange
     *
     * @param \TKusy\Hl7Fhir\R5\RangeType $abatementRange
     * @return self
     */
    public function setAbatementRange(?\TKusy\Hl7Fhir\R5\RangeType $abatementRange = null)
    {
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * Gets as abatementString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAbatementString()
    {
        return $this->abatementString;
    }

    /**
     * Sets a new abatementString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $abatementString
     * @return self
     */
    public function setAbatementString(?\TKusy\Hl7Fhir\R5\StringType $abatementString = null)
    {
        $this->abatementString = $abatementString;
        return $this;
    }

    /**
     * Gets as recordedDate
     *
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
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
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
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
     * Adds as participant
     *
     * Indicates who or what participated in the activities related to the condition and how they were involved.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConditionParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\ConditionParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * Indicates who or what participated in the activities related to the condition and how they were involved.
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
     * Indicates who or what participated in the activities related to the condition and how they were involved.
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
     * Indicates who or what participated in the activities related to the condition and how they were involved.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Indicates who or what participated in the activities related to the condition and how they were involved.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant = null)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Adds as stage
     *
     * A simple summary of the stage such as "Stage 3" or "Early Onset". The determination of the stage is disease-specific, such as cancer, retinopathy of prematurity, kidney diseases, Alzheimer's, or Parkinson disease.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ConditionStageType $stage
     */
    public function addToStage(\TKusy\Hl7Fhir\R5\ConditionStageType $stage)
    {
        $this->stage[] = $stage;
        return $this;
    }

    /**
     * isset stage
     *
     * A simple summary of the stage such as "Stage 3" or "Early Onset". The determination of the stage is disease-specific, such as cancer, retinopathy of prematurity, kidney diseases, Alzheimer's, or Parkinson disease.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStage($index)
    {
        return isset($this->stage[$index]);
    }

    /**
     * unset stage
     *
     * A simple summary of the stage such as "Stage 3" or "Early Onset". The determination of the stage is disease-specific, such as cancer, retinopathy of prematurity, kidney diseases, Alzheimer's, or Parkinson disease.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStage($index)
    {
        unset($this->stage[$index]);
    }

    /**
     * Gets as stage
     *
     * A simple summary of the stage such as "Stage 3" or "Early Onset". The determination of the stage is disease-specific, such as cancer, retinopathy of prematurity, kidney diseases, Alzheimer's, or Parkinson disease.
     *
     * @return \TKusy\Hl7Fhir\R5\ConditionStageType[]
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Sets a new stage
     *
     * A simple summary of the stage such as "Stage 3" or "Early Onset". The determination of the stage is disease-specific, such as cancer, retinopathy of prematurity, kidney diseases, Alzheimer's, or Parkinson disease.
     *
     * @param \TKusy\Hl7Fhir\R5\ConditionStageType[] $stage
     * @return self
     */
    public function setStage(array $stage = null)
    {
        $this->stage = $stage;
        return $this;
    }

    /**
     * Adds as evidence
     *
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $evidence
     */
    public function addToEvidence(\TKusy\Hl7Fhir\R5\CodeableReferenceType $evidence)
    {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * isset evidence
     *
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidence($index)
    {
        return isset($this->evidence[$index]);
    }

    /**
     * unset evidence
     *
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidence($index)
    {
        unset($this->evidence[$index]);
    }

    /**
     * Gets as evidence
     *
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Sets a new evidence
     *
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $evidence
     * @return self
     */
    public function setEvidence(array $evidence = null)
    {
        $this->evidence = $evidence;
        return $this;
    }

    /**
     * Adds as note
     *
     * Additional information about the Condition. This is a general notes/comments entry for description of the Condition, its diagnosis and prognosis.
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
     * Additional information about the Condition. This is a general notes/comments entry for description of the Condition, its diagnosis and prognosis.
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
     * Additional information about the Condition. This is a general notes/comments entry for description of the Condition, its diagnosis and prognosis.
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
     * Additional information about the Condition. This is a general notes/comments entry for description of the Condition, its diagnosis and prognosis.
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
     * Additional information about the Condition. This is a general notes/comments entry for description of the Condition, its diagnosis and prognosis.
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

