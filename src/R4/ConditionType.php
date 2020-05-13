<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ConditionType
 *
 * A clinical condition, problem, diagnosis, or other event, situation, issue, or clinical concept that has risen to a level of concern.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Condition
 */
class ConditionType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The clinical status of the condition.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $clinicalStatus
     */
    private $clinicalStatus = null;

    /**
     * The verification status to support the clinical status of the condition.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $verificationStatus
     */
    private $verificationStatus = null;

    /**
     * A category assigned to the condition.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $severity
     */
    private $severity = null;

    /**
     * Identification of the condition, problem or diagnosis.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The anatomical location where this condition manifests itself.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $bodySite
     */
    private $bodySite = null;

    /**
     * Indicates the patient or group who the condition record is associated with.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which this Condition was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $onsetDateTime
     */
    private $onsetDateTime = null;

    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AgeType $onsetAge
     */
    private $onsetAge = null;

    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $onsetPeriod
     */
    private $onsetPeriod = null;

    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RangeType $onsetRange
     */
    private $onsetRange = null;

    /**
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $onsetString
     */
    private $onsetString = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $abatementDateTime
     */
    private $abatementDateTime = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\AgeType $abatementAge
     */
    private $abatementAge = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $abatementPeriod
     */
    private $abatementPeriod = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\RangeType $abatementRange
     */
    private $abatementRange = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $abatementString
     */
    private $abatementString = null;

    /**
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $recordedDate
     */
    private $recordedDate = null;

    /**
     * Individual who recorded the record and takes responsibility for its content.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $recorder
     */
    private $recorder = null;

    /**
     * Individual who is making the condition statement.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $asserter
     */
    private $asserter = null;

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @var \TKusy\Hl7Fhir\R4\ConditionStageType[] $stage
     */
    private $stage = null;

    /**
     * Supporting evidence / manifestations that are the basis of the Condition's verification status, such as evidence that confirmed or refuted the condition.
     *
     * @var \TKusy\Hl7Fhir\R4\ConditionEvidenceType[] $evidence
     */
    private $evidence = null;

    /**
     * Additional information about the Condition. This is a general notes/comments entry for description of the Condition, its diagnosis and prognosis.
     *
     * @var \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this condition by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as clinicalStatus
     *
     * The clinical status of the condition.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $clinicalStatus
     * @return self
     */
    public function setClinicalStatus(\TKusy\Hl7Fhir\R4\CodeableConceptType $clinicalStatus)
    {
        $this->clinicalStatus = $clinicalStatus;
        return $this;
    }

    /**
     * Gets as verificationStatus
     *
     * The verification status to support the clinical status of the condition.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * Sets a new verificationStatus
     *
     * The verification status to support the clinical status of the condition.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $verificationStatus
     * @return self
     */
    public function setVerificationStatus(\TKusy\Hl7Fhir\R4\CodeableConceptType $verificationStatus)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as severity
     *
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
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
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
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
     * Gets as code
     *
     * Identification of the condition, problem or diagnosis.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $code)
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $bodySite
     */
    public function addToBodySite(\TKusy\Hl7Fhir\R4\CodeableConceptType $bodySite)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $bodySite
     * @return self
     */
    public function setBodySite(array $bodySite)
    {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Indicates the patient or group who the condition record is associated with.
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
     * Indicates the patient or group who the condition record is associated with.
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
     * The Encounter during which this Condition was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this Condition was created or to which the creation of this record is tightly associated.
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
     * Gets as onsetDateTime
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }

    /**
     * Sets a new onsetDateTime
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $onsetDateTime
     * @return self
     */
    public function setOnsetDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $onsetDateTime)
    {
        $this->onsetDateTime = $onsetDateTime;
        return $this;
    }

    /**
     * Gets as onsetAge
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AgeType
     */
    public function getOnsetAge()
    {
        return $this->onsetAge;
    }

    /**
     * Sets a new onsetAge
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AgeType $onsetAge
     * @return self
     */
    public function setOnsetAge(\TKusy\Hl7Fhir\R4\AgeType $onsetAge)
    {
        $this->onsetAge = $onsetAge;
        return $this;
    }

    /**
     * Gets as onsetPeriod
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Sets a new onsetPeriod
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $onsetPeriod
     * @return self
     */
    public function setOnsetPeriod(\TKusy\Hl7Fhir\R4\PeriodType $onsetPeriod)
    {
        $this->onsetPeriod = $onsetPeriod;
        return $this;
    }

    /**
     * Gets as onsetRange
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RangeType
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Sets a new onsetRange
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RangeType $onsetRange
     * @return self
     */
    public function setOnsetRange(\TKusy\Hl7Fhir\R4\RangeType $onsetRange)
    {
        $this->onsetRange = $onsetRange;
        return $this;
    }

    /**
     * Gets as onsetString
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * Sets a new onsetString
     *
     * Estimated or actual date or date-time the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $onsetString
     * @return self
     */
    public function setOnsetString(\TKusy\Hl7Fhir\R4\StringType $onsetString)
    {
        $this->onsetString = $onsetString;
        return $this;
    }

    /**
     * Gets as abatementDateTime
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getAbatementDateTime()
    {
        return $this->abatementDateTime;
    }

    /**
     * Sets a new abatementDateTime
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $abatementDateTime
     * @return self
     */
    public function setAbatementDateTime(\TKusy\Hl7Fhir\R4\DateTimeType $abatementDateTime)
    {
        $this->abatementDateTime = $abatementDateTime;
        return $this;
    }

    /**
     * Gets as abatementAge
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\AgeType
     */
    public function getAbatementAge()
    {
        return $this->abatementAge;
    }

    /**
     * Sets a new abatementAge
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\AgeType $abatementAge
     * @return self
     */
    public function setAbatementAge(\TKusy\Hl7Fhir\R4\AgeType $abatementAge)
    {
        $this->abatementAge = $abatementAge;
        return $this;
    }

    /**
     * Gets as abatementPeriod
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
     */
    public function getAbatementPeriod()
    {
        return $this->abatementPeriod;
    }

    /**
     * Sets a new abatementPeriod
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\PeriodType $abatementPeriod
     * @return self
     */
    public function setAbatementPeriod(\TKusy\Hl7Fhir\R4\PeriodType $abatementPeriod)
    {
        $this->abatementPeriod = $abatementPeriod;
        return $this;
    }

    /**
     * Gets as abatementRange
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\RangeType
     */
    public function getAbatementRange()
    {
        return $this->abatementRange;
    }

    /**
     * Sets a new abatementRange
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\RangeType $abatementRange
     * @return self
     */
    public function setAbatementRange(\TKusy\Hl7Fhir\R4\RangeType $abatementRange)
    {
        $this->abatementRange = $abatementRange;
        return $this;
    }

    /**
     * Gets as abatementString
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getAbatementString()
    {
        return $this->abatementString;
    }

    /**
     * Sets a new abatementString
     *
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $abatementString
     * @return self
     */
    public function setAbatementString(\TKusy\Hl7Fhir\R4\StringType $abatementString)
    {
        $this->abatementString = $abatementString;
        return $this;
    }

    /**
     * Gets as recordedDate
     *
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
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
     * The recordedDate represents when this particular Condition record was created in the system, which is often a system-generated date.
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
     * Gets as recorder
     *
     * Individual who recorded the record and takes responsibility for its content.
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
     * Individual who recorded the record and takes responsibility for its content.
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
     * Gets as asserter
     *
     * Individual who is making the condition statement.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * Sets a new asserter
     *
     * Individual who is making the condition statement.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $asserter
     * @return self
     */
    public function setAsserter(\TKusy\Hl7Fhir\R4\ReferenceType $asserter)
    {
        $this->asserter = $asserter;
        return $this;
    }

    /**
     * Adds as stage
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ConditionStageType $stage
     */
    public function addToStage(\TKusy\Hl7Fhir\R4\ConditionStageType $stage)
    {
        $this->stage[] = $stage;
        return $this;
    }

    /**
     * isset stage
     *
     * Clinical stage or grade of a condition. May include formal severity assessments.
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
     * Clinical stage or grade of a condition. May include formal severity assessments.
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
     * Clinical stage or grade of a condition. May include formal severity assessments.
     *
     * @return \TKusy\Hl7Fhir\R4\ConditionStageType[]
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
     * @param \TKusy\Hl7Fhir\R4\ConditionStageType[] $stage
     * @return self
     */
    public function setStage(array $stage)
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
     * @param \TKusy\Hl7Fhir\R4\ConditionEvidenceType $evidence
     */
    public function addToEvidence(\TKusy\Hl7Fhir\R4\ConditionEvidenceType $evidence)
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
     * @return \TKusy\Hl7Fhir\R4\ConditionEvidenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ConditionEvidenceType[] $evidence
     * @return self
     */
    public function setEvidence(array $evidence)
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R4\AnnotationType $note)
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
     * @return \TKusy\Hl7Fhir\R4\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

