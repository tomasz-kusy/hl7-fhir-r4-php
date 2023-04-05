<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ResearchSubjectType
 *
 * A ResearchSubject is a participant or object which is the recipient of investigative activities in a research study.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ResearchSubject
 */
class ResearchSubjectType extends DomainResourceType
{

    /**
     * Identifiers assigned to this research subject for a study.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The publication state of the resource (not of the subject).
     *
     * @var \TKusy\Hl7Fhir\R5\PublicationStatusType $status
     */
    private $status = null;

    /**
     * The current state (status) of the subject and resons for status change where appropriate.
     *
     * @var \TKusy\Hl7Fhir\R5\ResearchSubjectProgressType[] $progress
     */
    private $progress = null;

    /**
     * The dates the subject began and ended their participation in the study.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Reference to the study the subject is participating in.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $study
     */
    private $study = null;

    /**
     * The record of the person, animal or other entity involved in the study.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The name of the arm in the study the subject is expected to follow as part of this study.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $assignedComparisonGroup
     */
    private $assignedComparisonGroup = null;

    /**
     * The name of the arm in the study the subject actually followed as part of this study.
     *
     * @var \TKusy\Hl7Fhir\R5\IdType $actualComparisonGroup
     */
    private $actualComparisonGroup = null;

    /**
     * A record of the patient's informed agreement to participate in the study.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $consent
     */
    private $consent = null;

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this research subject for a study.
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
     * Identifiers assigned to this research subject for a study.
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
     * Identifiers assigned to this research subject for a study.
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
     * Identifiers assigned to this research subject for a study.
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
     * Identifiers assigned to this research subject for a study.
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
     * The publication state of the resource (not of the subject).
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
     * The publication state of the resource (not of the subject).
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
     * Adds as progress
     *
     * The current state (status) of the subject and resons for status change where appropriate.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ResearchSubjectProgressType $progress
     */
    public function addToProgress(\TKusy\Hl7Fhir\R5\ResearchSubjectProgressType $progress)
    {
        $this->progress[] = $progress;
        return $this;
    }

    /**
     * isset progress
     *
     * The current state (status) of the subject and resons for status change where appropriate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgress($index)
    {
        return isset($this->progress[$index]);
    }

    /**
     * unset progress
     *
     * The current state (status) of the subject and resons for status change where appropriate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgress($index)
    {
        unset($this->progress[$index]);
    }

    /**
     * Gets as progress
     *
     * The current state (status) of the subject and resons for status change where appropriate.
     *
     * @return \TKusy\Hl7Fhir\R5\ResearchSubjectProgressType[]
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Sets a new progress
     *
     * The current state (status) of the subject and resons for status change where appropriate.
     *
     * @param \TKusy\Hl7Fhir\R5\ResearchSubjectProgressType[] $progress
     * @return self
     */
    public function setProgress(array $progress = null)
    {
        $this->progress = $progress;
        return $this;
    }

    /**
     * Gets as period
     *
     * The dates the subject began and ended their participation in the study.
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
     * The dates the subject began and ended their participation in the study.
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
     * Gets as study
     *
     * Reference to the study the subject is participating in.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * Sets a new study
     *
     * Reference to the study the subject is participating in.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $study
     * @return self
     */
    public function setStudy(\TKusy\Hl7Fhir\R5\ReferenceType $study)
    {
        $this->study = $study;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The record of the person, animal or other entity involved in the study.
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
     * The record of the person, animal or other entity involved in the study.
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
     * Gets as assignedComparisonGroup
     *
     * The name of the arm in the study the subject is expected to follow as part of this study.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getAssignedComparisonGroup()
    {
        return $this->assignedComparisonGroup;
    }

    /**
     * Sets a new assignedComparisonGroup
     *
     * The name of the arm in the study the subject is expected to follow as part of this study.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $assignedComparisonGroup
     * @return self
     */
    public function setAssignedComparisonGroup(?\TKusy\Hl7Fhir\R5\IdType $assignedComparisonGroup = null)
    {
        $this->assignedComparisonGroup = $assignedComparisonGroup;
        return $this;
    }

    /**
     * Gets as actualComparisonGroup
     *
     * The name of the arm in the study the subject actually followed as part of this study.
     *
     * @return \TKusy\Hl7Fhir\R5\IdType
     */
    public function getActualComparisonGroup()
    {
        return $this->actualComparisonGroup;
    }

    /**
     * Sets a new actualComparisonGroup
     *
     * The name of the arm in the study the subject actually followed as part of this study.
     *
     * @param \TKusy\Hl7Fhir\R5\IdType $actualComparisonGroup
     * @return self
     */
    public function setActualComparisonGroup(?\TKusy\Hl7Fhir\R5\IdType $actualComparisonGroup = null)
    {
        $this->actualComparisonGroup = $actualComparisonGroup;
        return $this;
    }

    /**
     * Adds as consent
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $consent
     */
    public function addToConsent(\TKusy\Hl7Fhir\R5\ReferenceType $consent)
    {
        $this->consent[] = $consent;
        return $this;
    }

    /**
     * isset consent
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsent($index)
    {
        return isset($this->consent[$index]);
    }

    /**
     * unset consent
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsent($index)
    {
        unset($this->consent[$index]);
    }

    /**
     * Gets as consent
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getConsent()
    {
        return $this->consent;
    }

    /**
     * Sets a new consent
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $consent
     * @return self
     */
    public function setConsent(array $consent = null)
    {
        $this->consent = $consent;
        return $this;
    }


}

