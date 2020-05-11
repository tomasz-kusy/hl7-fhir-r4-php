<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ImmunizationEvaluationType
 *
 * Describes a comparison of an immunization event against published recommendations to determine if the administration is "valid" in relation to those recommendations.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ImmunizationEvaluation
 */
class ImmunizationEvaluationType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this immunization evaluation record.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates the current status of the evaluation of the vaccination administration event.
     *
     * @var \TKusy\Hl7FhirR4\ImmunizationEvaluationStatusCodesType $status
     */
    private $status = null;

    /**
     * The individual for whom the evaluation is being done.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The date the evaluation of the vaccine administration event was performed.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * Indicates the authority who published the protocol (e.g. ACIP).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $authority
     */
    private $authority = null;

    /**
     * The vaccine preventable disease the dose is being evaluated against.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $targetDisease
     */
    private $targetDisease = null;

    /**
     * The vaccine administration event being evaluated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $immunizationEvent
     */
    private $immunizationEvent = null;

    /**
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $doseStatus
     */
    private $doseStatus = null;

    /**
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $doseStatusReason
     */
    private $doseStatusReason = null;

    /**
     * Additional information about the evaluation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     *
     * @var \TKusy\Hl7FhirR4\StringType $series
     */
    private $series = null;

    /**
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $doseNumberPositiveInt
     */
    private $doseNumberPositiveInt = null;

    /**
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $doseNumberString
     */
    private $doseNumberString = null;

    /**
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $seriesDosesPositiveInt
     */
    private $seriesDosesPositiveInt = null;

    /**
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\StringType $seriesDosesString
     */
    private $seriesDosesString = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this immunization evaluation record.
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
     * A unique identifier assigned to this immunization evaluation record.
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
     * A unique identifier assigned to this immunization evaluation record.
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
     * A unique identifier assigned to this immunization evaluation record.
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
     * A unique identifier assigned to this immunization evaluation record.
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
     * Gets as status
     *
     * Indicates the current status of the evaluation of the vaccination administration event.
     *
     * @return \TKusy\Hl7FhirR4\ImmunizationEvaluationStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the current status of the evaluation of the vaccination administration event.
     *
     * @param \TKusy\Hl7FhirR4\ImmunizationEvaluationStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ImmunizationEvaluationStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The individual for whom the evaluation is being done.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The individual for whom the evaluation is being done.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7FhirR4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date the evaluation of the vaccine administration event was performed.
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
     * The date the evaluation of the vaccine administration event was performed.
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
     * Gets as authority
     *
     * Indicates the authority who published the protocol (e.g. ACIP).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Sets a new authority
     *
     * Indicates the authority who published the protocol (e.g. ACIP).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $authority
     * @return self
     */
    public function setAuthority(\TKusy\Hl7FhirR4\ReferenceType $authority)
    {
        $this->authority = $authority;
        return $this;
    }

    /**
     * Gets as targetDisease
     *
     * The vaccine preventable disease the dose is being evaluated against.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getTargetDisease()
    {
        return $this->targetDisease;
    }

    /**
     * Sets a new targetDisease
     *
     * The vaccine preventable disease the dose is being evaluated against.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $targetDisease
     * @return self
     */
    public function setTargetDisease(\TKusy\Hl7FhirR4\CodeableConceptType $targetDisease)
    {
        $this->targetDisease = $targetDisease;
        return $this;
    }

    /**
     * Gets as immunizationEvent
     *
     * The vaccine administration event being evaluated.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getImmunizationEvent()
    {
        return $this->immunizationEvent;
    }

    /**
     * Sets a new immunizationEvent
     *
     * The vaccine administration event being evaluated.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $immunizationEvent
     * @return self
     */
    public function setImmunizationEvent(\TKusy\Hl7FhirR4\ReferenceType $immunizationEvent)
    {
        $this->immunizationEvent = $immunizationEvent;
        return $this;
    }

    /**
     * Gets as doseStatus
     *
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getDoseStatus()
    {
        return $this->doseStatus;
    }

    /**
     * Sets a new doseStatus
     *
     * Indicates if the dose is valid or not valid with respect to the published recommendations.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $doseStatus
     * @return self
     */
    public function setDoseStatus(\TKusy\Hl7FhirR4\CodeableConceptType $doseStatus)
    {
        $this->doseStatus = $doseStatus;
        return $this;
    }

    /**
     * Adds as doseStatusReason
     *
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $doseStatusReason
     */
    public function addToDoseStatusReason(\TKusy\Hl7FhirR4\CodeableConceptType $doseStatusReason)
    {
        $this->doseStatusReason[] = $doseStatusReason;
        return $this;
    }

    /**
     * isset doseStatusReason
     *
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDoseStatusReason($index)
    {
        return isset($this->doseStatusReason[$index]);
    }

    /**
     * unset doseStatusReason
     *
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDoseStatusReason($index)
    {
        unset($this->doseStatusReason[$index]);
    }

    /**
     * Gets as doseStatusReason
     *
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getDoseStatusReason()
    {
        return $this->doseStatusReason;
    }

    /**
     * Sets a new doseStatusReason
     *
     * Provides an explanation as to why the vaccine administration event is valid or not relative to the published recommendations.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $doseStatusReason
     * @return self
     */
    public function setDoseStatusReason(array $doseStatusReason)
    {
        $this->doseStatusReason = $doseStatusReason;
        return $this;
    }

    /**
     * Gets as description
     *
     * Additional information about the evaluation.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Additional information about the evaluation.
     *
     * @param \TKusy\Hl7FhirR4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7FhirR4\StringType $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as series
     *
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Sets a new series
     *
     * One possible path to achieve presumed immunity against a disease - within the context of an authority.
     *
     * @param \TKusy\Hl7FhirR4\StringType $series
     * @return self
     */
    public function setSeries(\TKusy\Hl7FhirR4\StringType $series)
    {
        $this->series = $series;
        return $this;
    }

    /**
     * Gets as doseNumberPositiveInt
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getDoseNumberPositiveInt()
    {
        return $this->doseNumberPositiveInt;
    }

    /**
     * Sets a new doseNumberPositiveInt
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $doseNumberPositiveInt
     * @return self
     */
    public function setDoseNumberPositiveInt(\TKusy\Hl7FhirR4\PositiveIntType $doseNumberPositiveInt)
    {
        $this->doseNumberPositiveInt = $doseNumberPositiveInt;
        return $this;
    }

    /**
     * Gets as doseNumberString
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDoseNumberString()
    {
        return $this->doseNumberString;
    }

    /**
     * Sets a new doseNumberString
     *
     * Nominal position in a series. (choose any one of doseNumber*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $doseNumberString
     * @return self
     */
    public function setDoseNumberString(\TKusy\Hl7FhirR4\StringType $doseNumberString)
    {
        $this->doseNumberString = $doseNumberString;
        return $this;
    }

    /**
     * Gets as seriesDosesPositiveInt
     *
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getSeriesDosesPositiveInt()
    {
        return $this->seriesDosesPositiveInt;
    }

    /**
     * Sets a new seriesDosesPositiveInt
     *
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $seriesDosesPositiveInt
     * @return self
     */
    public function setSeriesDosesPositiveInt(\TKusy\Hl7FhirR4\PositiveIntType $seriesDosesPositiveInt)
    {
        $this->seriesDosesPositiveInt = $seriesDosesPositiveInt;
        return $this;
    }

    /**
     * Gets as seriesDosesString
     *
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getSeriesDosesString()
    {
        return $this->seriesDosesString;
    }

    /**
     * Sets a new seriesDosesString
     *
     * The recommended number of doses to achieve immunity. (choose any one of seriesDoses*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\StringType $seriesDosesString
     * @return self
     */
    public function setSeriesDosesString(\TKusy\Hl7FhirR4\StringType $seriesDosesString)
    {
        $this->seriesDosesString = $seriesDosesString;
        return $this;
    }


}

