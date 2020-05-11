<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing RiskAssessmentType
 *
 * An assessment of the likely outcome(s) for a patient or other subject as well as the likelihood of each outcome.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: RiskAssessment
 */
class RiskAssessmentType extends DomainResourceType
{

    /**
     * Business identifier assigned to the risk assessment.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A reference to the request that is fulfilled by this risk assessment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $basedOn
     */
    private $basedOn = null;

    /**
     * A reference to a resource that this risk assessment is part of, such as a Procedure.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $parent
     */
    private $parent = null;

    /**
     * The status of the RiskAssessment, using the same statuses as an Observation.
     *
     * @var \TKusy\Hl7FhirR4\ObservationStatusType $status
     */
    private $status = null;

    /**
     * The algorithm, process or mechanism used to evaluate the risk.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $method
     */
    private $method = null;

    /**
     * The type of the risk assessment performed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The patient or group the risk assessment applies to.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter where the assessment was performed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The date (and possibly time) the risk assessment was performed. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     */
    private $occurrenceDateTime = null;

    /**
     * The date (and possibly time) the risk assessment was performed. (choose any one of occurrence*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     */
    private $occurrencePeriod = null;

    /**
     * For assessments or prognosis specific to a particular condition, indicates the condition being assessed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $condition
     */
    private $condition = null;

    /**
     * The provider or software application that performed the assessment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    private $performer = null;

    /**
     * The reason the risk assessment was performed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = null;

    /**
     * Resources supporting the reason the risk assessment was performed.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = null;

    /**
     * Indicates the source data considered as part of the assessment (for example, FamilyHistory, Observations, Procedures, Conditions, etc.).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basis
     */
    private $basis = null;

    /**
     * Describes the expected outcome for the subject.
     *
     * @var \TKusy\Hl7FhirR4\RiskAssessmentPredictionType[] $prediction
     */
    private $prediction = null;

    /**
     * A description of the steps that might be taken to reduce the identified risk(s).
     *
     * @var \TKusy\Hl7FhirR4\StringType $mitigation
     */
    private $mitigation = null;

    /**
     * Additional comments about the risk assessment.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Business identifier assigned to the risk assessment.
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
     * Business identifier assigned to the risk assessment.
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
     * Business identifier assigned to the risk assessment.
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
     * Business identifier assigned to the risk assessment.
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
     * Business identifier assigned to the risk assessment.
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
     * Gets as basedOn
     *
     * A reference to the request that is fulfilled by this risk assessment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A reference to the request that is fulfilled by this risk assessment.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $basedOn
     * @return self
     */
    public function setBasedOn(\TKusy\Hl7FhirR4\ReferenceType $basedOn)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as parent
     *
     * A reference to a resource that this risk assessment is part of, such as a Procedure.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets a new parent
     *
     * A reference to a resource that this risk assessment is part of, such as a Procedure.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $parent
     * @return self
     */
    public function setParent(\TKusy\Hl7FhirR4\ReferenceType $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the RiskAssessment, using the same statuses as an Observation.
     *
     * @return \TKusy\Hl7FhirR4\ObservationStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the RiskAssessment, using the same statuses as an Observation.
     *
     * @param \TKusy\Hl7FhirR4\ObservationStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ObservationStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as method
     *
     * The algorithm, process or mechanism used to evaluate the risk.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * The algorithm, process or mechanism used to evaluate the risk.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $method
     * @return self
     */
    public function setMethod(\TKusy\Hl7FhirR4\CodeableConceptType $method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as code
     *
     * The type of the risk assessment performed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The type of the risk assessment performed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The patient or group the risk assessment applies to.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The patient or group the risk assessment applies to.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $subject
     * @return self
     */
    public function setSubject(\TKusy\Hl7FhirR4\ReferenceType $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The encounter where the assessment was performed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The encounter where the assessment was performed.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(\TKusy\Hl7FhirR4\ReferenceType $encounter)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as occurrenceDateTime
     *
     * The date (and possibly time) the risk assessment was performed. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getOccurrenceDateTime()
    {
        return $this->occurrenceDateTime;
    }

    /**
     * Sets a new occurrenceDateTime
     *
     * The date (and possibly time) the risk assessment was performed. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime
     * @return self
     */
    public function setOccurrenceDateTime(\TKusy\Hl7FhirR4\DateTimeType $occurrenceDateTime)
    {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * Gets as occurrencePeriod
     *
     * The date (and possibly time) the risk assessment was performed. (choose any one of occurrence*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getOccurrencePeriod()
    {
        return $this->occurrencePeriod;
    }

    /**
     * Sets a new occurrencePeriod
     *
     * The date (and possibly time) the risk assessment was performed. (choose any one of occurrence*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $occurrencePeriod
     * @return self
     */
    public function setOccurrencePeriod(\TKusy\Hl7FhirR4\PeriodType $occurrencePeriod)
    {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Gets as condition
     *
     * For assessments or prognosis specific to a particular condition, indicates the condition being assessed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * For assessments or prognosis specific to a particular condition, indicates the condition being assessed.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $condition
     * @return self
     */
    public function setCondition(\TKusy\Hl7FhirR4\ReferenceType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as performer
     *
     * The provider or software application that performed the assessment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The provider or software application that performed the assessment.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $performer
     * @return self
     */
    public function setPerformer(\TKusy\Hl7FhirR4\ReferenceType $performer)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * The reason the risk assessment was performed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reasonCode
     */
    public function addToReasonCode(\TKusy\Hl7FhirR4\CodeableConceptType $reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * isset reasonCode
     *
     * The reason the risk assessment was performed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonCode($index)
    {
        return isset($this->reasonCode[$index]);
    }

    /**
     * unset reasonCode
     *
     * The reason the risk assessment was performed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonCode($index)
    {
        unset($this->reasonCode[$index]);
    }

    /**
     * Gets as reasonCode
     *
     * The reason the risk assessment was performed.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * The reason the risk assessment was performed.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     * @return self
     */
    public function setReasonCode(array $reasonCode)
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * Adds as reasonReference
     *
     * Resources supporting the reason the risk assessment was performed.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $reasonReference
     */
    public function addToReasonReference(\TKusy\Hl7FhirR4\ReferenceType $reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * isset reasonReference
     *
     * Resources supporting the reason the risk assessment was performed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonReference($index)
    {
        return isset($this->reasonReference[$index]);
    }

    /**
     * unset reasonReference
     *
     * Resources supporting the reason the risk assessment was performed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonReference($index)
    {
        unset($this->reasonReference[$index]);
    }

    /**
     * Gets as reasonReference
     *
     * Resources supporting the reason the risk assessment was performed.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Sets a new reasonReference
     *
     * Resources supporting the reason the risk assessment was performed.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     * @return self
     */
    public function setReasonReference(array $reasonReference)
    {
        $this->reasonReference = $reasonReference;
        return $this;
    }

    /**
     * Adds as basis
     *
     * Indicates the source data considered as part of the assessment (for example, FamilyHistory, Observations, Procedures, Conditions, etc.).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $basis
     */
    public function addToBasis(\TKusy\Hl7FhirR4\ReferenceType $basis)
    {
        $this->basis[] = $basis;
        return $this;
    }

    /**
     * isset basis
     *
     * Indicates the source data considered as part of the assessment (for example, FamilyHistory, Observations, Procedures, Conditions, etc.).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasis($index)
    {
        return isset($this->basis[$index]);
    }

    /**
     * unset basis
     *
     * Indicates the source data considered as part of the assessment (for example, FamilyHistory, Observations, Procedures, Conditions, etc.).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasis($index)
    {
        unset($this->basis[$index]);
    }

    /**
     * Gets as basis
     *
     * Indicates the source data considered as part of the assessment (for example, FamilyHistory, Observations, Procedures, Conditions, etc.).
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Sets a new basis
     *
     * Indicates the source data considered as part of the assessment (for example, FamilyHistory, Observations, Procedures, Conditions, etc.).
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $basis
     * @return self
     */
    public function setBasis(array $basis)
    {
        $this->basis = $basis;
        return $this;
    }

    /**
     * Adds as prediction
     *
     * Describes the expected outcome for the subject.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\RiskAssessmentPredictionType $prediction
     */
    public function addToPrediction(\TKusy\Hl7FhirR4\RiskAssessmentPredictionType $prediction)
    {
        $this->prediction[] = $prediction;
        return $this;
    }

    /**
     * isset prediction
     *
     * Describes the expected outcome for the subject.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrediction($index)
    {
        return isset($this->prediction[$index]);
    }

    /**
     * unset prediction
     *
     * Describes the expected outcome for the subject.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrediction($index)
    {
        unset($this->prediction[$index]);
    }

    /**
     * Gets as prediction
     *
     * Describes the expected outcome for the subject.
     *
     * @return \TKusy\Hl7FhirR4\RiskAssessmentPredictionType[]
     */
    public function getPrediction()
    {
        return $this->prediction;
    }

    /**
     * Sets a new prediction
     *
     * Describes the expected outcome for the subject.
     *
     * @param \TKusy\Hl7FhirR4\RiskAssessmentPredictionType[] $prediction
     * @return self
     */
    public function setPrediction(array $prediction)
    {
        $this->prediction = $prediction;
        return $this;
    }

    /**
     * Gets as mitigation
     *
     * A description of the steps that might be taken to reduce the identified risk(s).
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getMitigation()
    {
        return $this->mitigation;
    }

    /**
     * Sets a new mitigation
     *
     * A description of the steps that might be taken to reduce the identified risk(s).
     *
     * @param \TKusy\Hl7FhirR4\StringType $mitigation
     * @return self
     */
    public function setMitigation(\TKusy\Hl7FhirR4\StringType $mitigation)
    {
        $this->mitigation = $mitigation;
        return $this;
    }

    /**
     * Adds as note
     *
     * Additional comments about the risk assessment.
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
     * Additional comments about the risk assessment.
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
     * Additional comments about the risk assessment.
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
     * Additional comments about the risk assessment.
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
     * Additional comments about the risk assessment.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }


}

