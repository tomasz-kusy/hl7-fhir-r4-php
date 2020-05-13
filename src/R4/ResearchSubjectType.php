<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ResearchSubjectType
 *
 * A physical entity which is the primary unit of operational and/or administrative interest in a study.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ResearchSubject
 */
class ResearchSubjectType extends DomainResourceType
{

    /**
     * Identifiers assigned to this research subject for a study.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The current state of the subject.
     *
     * @var \TKusy\Hl7Fhir\R4\ResearchSubjectStatusType $status
     */
    private $status = null;

    /**
     * The dates the subject began and ended their participation in the study.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Reference to the study the subject is participating in.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $study
     */
    private $study = null;

    /**
     * The record of the person or animal who is involved in the study.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $individual
     */
    private $individual = null;

    /**
     * The name of the arm in the study the subject is expected to follow as part of this study.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $assignedArm
     */
    private $assignedArm = null;

    /**
     * The name of the arm in the study the subject actually followed as part of this study.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $actualArm
     */
    private $actualArm = null;

    /**
     * A record of the patient's informed agreement to participate in the study.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $consent
     */
    private $consent = null;

    /**
     * Adds as identifier
     *
     * Identifiers assigned to this research subject for a study.
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
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * The current state of the subject.
     *
     * @return \TKusy\Hl7Fhir\R4\ResearchSubjectStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the subject.
     *
     * @param \TKusy\Hl7Fhir\R4\ResearchSubjectStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\ResearchSubjectStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as period
     *
     * The dates the subject began and ended their participation in the study.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
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
     * @param \TKusy\Hl7Fhir\R4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as study
     *
     * Reference to the study the subject is participating in.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $study
     * @return self
     */
    public function setStudy(\TKusy\Hl7Fhir\R4\ReferenceType $study)
    {
        $this->study = $study;
        return $this;
    }

    /**
     * Gets as individual
     *
     * The record of the person or animal who is involved in the study.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * Sets a new individual
     *
     * The record of the person or animal who is involved in the study.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $individual
     * @return self
     */
    public function setIndividual(\TKusy\Hl7Fhir\R4\ReferenceType $individual)
    {
        $this->individual = $individual;
        return $this;
    }

    /**
     * Gets as assignedArm
     *
     * The name of the arm in the study the subject is expected to follow as part of this study.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getAssignedArm()
    {
        return $this->assignedArm;
    }

    /**
     * Sets a new assignedArm
     *
     * The name of the arm in the study the subject is expected to follow as part of this study.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $assignedArm
     * @return self
     */
    public function setAssignedArm(\TKusy\Hl7Fhir\R4\StringType $assignedArm)
    {
        $this->assignedArm = $assignedArm;
        return $this;
    }

    /**
     * Gets as actualArm
     *
     * The name of the arm in the study the subject actually followed as part of this study.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getActualArm()
    {
        return $this->actualArm;
    }

    /**
     * Sets a new actualArm
     *
     * The name of the arm in the study the subject actually followed as part of this study.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $actualArm
     * @return self
     */
    public function setActualArm(\TKusy\Hl7Fhir\R4\StringType $actualArm)
    {
        $this->actualArm = $actualArm;
        return $this;
    }

    /**
     * Gets as consent
     *
     * A record of the patient's informed agreement to participate in the study.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $consent
     * @return self
     */
    public function setConsent(\TKusy\Hl7Fhir\R4\ReferenceType $consent)
    {
        $this->consent = $consent;
        return $this;
    }


}

