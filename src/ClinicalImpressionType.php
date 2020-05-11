<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ClinicalImpressionType
 *
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter, but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ClinicalImpression
 */
class ClinicalImpressionType extends DomainResourceType
{

    /**
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Identifies the workflow status of the assessment.
     *
     * @var \TKusy\Hl7FhirR4\ClinicalImpressionStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the ClinicalImpression.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * Categorizes the type of clinical assessment performed.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * A summary of the context and/or cause of the assessment - why / where it was performed, and what patient events/status prompted it.
     *
     * @var \TKusy\Hl7FhirR4\StringType $description
     */
    private $description = null;

    /**
     * The patient or group of individuals assessed as part of this record.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which this ClinicalImpression was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The point in time or period over which the subject was assessed. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime
     */
    private $effectiveDateTime = null;

    /**
     * The point in time or period over which the subject was assessed. (choose any one of effective*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * Indicates when the documentation of the assessment was complete.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $date
     */
    private $date = null;

    /**
     * The clinician performing the assessment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $assessor
     */
    private $assessor = null;

    /**
     * A reference to the last assessment that was conducted on this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $previous
     */
    private $previous = null;

    /**
     * A list of the relevant problems/conditions for a patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $problem
     */
    private $problem = [
        
    ];

    /**
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     *
     * @var \TKusy\Hl7FhirR4\ClinicalImpressionInvestigationType[] $investigation
     */
    private $investigation = [
        
    ];

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $protocol
     */
    private $protocol = [
        
    ];

    /**
     * A text summary of the investigations and the diagnosis.
     *
     * @var \TKusy\Hl7FhirR4\StringType $summary
     */
    private $summary = null;

    /**
     * Specific findings or diagnoses that were considered likely or relevant to ongoing treatment.
     *
     * @var \TKusy\Hl7FhirR4\ClinicalImpressionFindingType[] $finding
     */
    private $finding = [
        
    ];

    /**
     * Estimate of likely outcome.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $prognosisCodeableConcept
     */
    private $prognosisCodeableConcept = [
        
    ];

    /**
     * RiskAssessment expressing likely outcome.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $prognosisReference
     */
    private $prognosisReference = [
        
    ];

    /**
     * Information supporting the clinical impression.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $supportingInfo
     */
    private $supportingInfo = [
        
    ];

    /**
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * Adds as identifier
     *
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Business identifiers assigned to this clinical impression by the performer or other systems which remain constant as the resource is updated and propagates from server to server.
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
     * Identifies the workflow status of the assessment.
     *
     * @return \TKusy\Hl7FhirR4\ClinicalImpressionStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Identifies the workflow status of the assessment.
     *
     * @param \TKusy\Hl7FhirR4\ClinicalImpressionStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ClinicalImpressionStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current state of the ClinicalImpression.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Sets a new statusReason
     *
     * Captures the reason for the current state of the ClinicalImpression.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     * @return self
     */
    public function setStatusReason(\TKusy\Hl7FhirR4\CodeableConceptType $statusReason)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as code
     *
     * Categorizes the type of clinical assessment performed.
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
     * Categorizes the type of clinical assessment performed.
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
     * Gets as description
     *
     * A summary of the context and/or cause of the assessment - why / where it was performed, and what patient events/status prompted it.
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
     * A summary of the context and/or cause of the assessment - why / where it was performed, and what patient events/status prompted it.
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
     * Gets as subject
     *
     * The patient or group of individuals assessed as part of this record.
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
     * The patient or group of individuals assessed as part of this record.
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
     * The Encounter during which this ClinicalImpression was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this ClinicalImpression was created or to which the creation of this record is tightly associated.
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
     * Gets as effectiveDateTime
     *
     * The point in time or period over which the subject was assessed. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * Sets a new effectiveDateTime
     *
     * The point in time or period over which the subject was assessed. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime
     * @return self
     */
    public function setEffectiveDateTime(\TKusy\Hl7FhirR4\DateTimeType $effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * The point in time or period over which the subject was assessed. (choose any one of effective*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The point in time or period over which the subject was assessed. (choose any one of effective*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\TKusy\Hl7FhirR4\PeriodType $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as date
     *
     * Indicates when the documentation of the assessment was complete.
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
     * Indicates when the documentation of the assessment was complete.
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
     * Gets as assessor
     *
     * The clinician performing the assessment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAssessor()
    {
        return $this->assessor;
    }

    /**
     * Sets a new assessor
     *
     * The clinician performing the assessment.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $assessor
     * @return self
     */
    public function setAssessor(\TKusy\Hl7FhirR4\ReferenceType $assessor)
    {
        $this->assessor = $assessor;
        return $this;
    }

    /**
     * Gets as previous
     *
     * A reference to the last assessment that was conducted on this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * Sets a new previous
     *
     * A reference to the last assessment that was conducted on this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $previous
     * @return self
     */
    public function setPrevious(\TKusy\Hl7FhirR4\ReferenceType $previous)
    {
        $this->previous = $previous;
        return $this;
    }

    /**
     * Adds as problem
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $problem
     */
    public function addToProblem(\TKusy\Hl7FhirR4\ReferenceType $problem)
    {
        $this->problem[] = $problem;
        return $this;
    }

    /**
     * isset problem
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProblem($index)
    {
        return isset($this->problem[$index]);
    }

    /**
     * unset problem
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProblem($index)
    {
        unset($this->problem[$index]);
    }

    /**
     * Gets as problem
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * Sets a new problem
     *
     * A list of the relevant problems/conditions for a patient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $problem
     * @return self
     */
    public function setProblem(array $problem)
    {
        $this->problem = $problem;
        return $this;
    }

    /**
     * Adds as investigation
     *
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ClinicalImpressionInvestigationType $investigation
     */
    public function addToInvestigation(\TKusy\Hl7FhirR4\ClinicalImpressionInvestigationType $investigation)
    {
        $this->investigation[] = $investigation;
        return $this;
    }

    /**
     * isset investigation
     *
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvestigation($index)
    {
        return isset($this->investigation[$index]);
    }

    /**
     * unset investigation
     *
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvestigation($index)
    {
        unset($this->investigation[$index]);
    }

    /**
     * Gets as investigation
     *
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     *
     * @return \TKusy\Hl7FhirR4\ClinicalImpressionInvestigationType[]
     */
    public function getInvestigation()
    {
        return $this->investigation;
    }

    /**
     * Sets a new investigation
     *
     * One or more sets of investigations (signs, symptoms, etc.). The actual grouping of investigations varies greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     *
     * @param \TKusy\Hl7FhirR4\ClinicalImpressionInvestigationType[] $investigation
     * @return self
     */
    public function setInvestigation(array $investigation)
    {
        $this->investigation = $investigation;
        return $this;
    }

    /**
     * Adds as protocol
     *
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UriType $protocol
     */
    public function addToProtocol(\TKusy\Hl7FhirR4\UriType $protocol)
    {
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * isset protocol
     *
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
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
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
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
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @return \TKusy\Hl7FhirR4\UriType[]
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Sets a new protocol
     *
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     *
     * @param \TKusy\Hl7FhirR4\UriType[] $protocol
     * @return self
     */
    public function setProtocol(array $protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Gets as summary
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * A text summary of the investigations and the diagnosis.
     *
     * @param \TKusy\Hl7FhirR4\StringType $summary
     * @return self
     */
    public function setSummary(\TKusy\Hl7FhirR4\StringType $summary)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Adds as finding
     *
     * Specific findings or diagnoses that were considered likely or relevant to ongoing treatment.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ClinicalImpressionFindingType $finding
     */
    public function addToFinding(\TKusy\Hl7FhirR4\ClinicalImpressionFindingType $finding)
    {
        $this->finding[] = $finding;
        return $this;
    }

    /**
     * isset finding
     *
     * Specific findings or diagnoses that were considered likely or relevant to ongoing treatment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinding($index)
    {
        return isset($this->finding[$index]);
    }

    /**
     * unset finding
     *
     * Specific findings or diagnoses that were considered likely or relevant to ongoing treatment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinding($index)
    {
        unset($this->finding[$index]);
    }

    /**
     * Gets as finding
     *
     * Specific findings or diagnoses that were considered likely or relevant to ongoing treatment.
     *
     * @return \TKusy\Hl7FhirR4\ClinicalImpressionFindingType[]
     */
    public function getFinding()
    {
        return $this->finding;
    }

    /**
     * Sets a new finding
     *
     * Specific findings or diagnoses that were considered likely or relevant to ongoing treatment.
     *
     * @param \TKusy\Hl7FhirR4\ClinicalImpressionFindingType[] $finding
     * @return self
     */
    public function setFinding(array $finding)
    {
        $this->finding = $finding;
        return $this;
    }

    /**
     * Adds as prognosisCodeableConcept
     *
     * Estimate of likely outcome.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $prognosisCodeableConcept
     */
    public function addToPrognosisCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $prognosisCodeableConcept)
    {
        $this->prognosisCodeableConcept[] = $prognosisCodeableConcept;
        return $this;
    }

    /**
     * isset prognosisCodeableConcept
     *
     * Estimate of likely outcome.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrognosisCodeableConcept($index)
    {
        return isset($this->prognosisCodeableConcept[$index]);
    }

    /**
     * unset prognosisCodeableConcept
     *
     * Estimate of likely outcome.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrognosisCodeableConcept($index)
    {
        unset($this->prognosisCodeableConcept[$index]);
    }

    /**
     * Gets as prognosisCodeableConcept
     *
     * Estimate of likely outcome.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getPrognosisCodeableConcept()
    {
        return $this->prognosisCodeableConcept;
    }

    /**
     * Sets a new prognosisCodeableConcept
     *
     * Estimate of likely outcome.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $prognosisCodeableConcept
     * @return self
     */
    public function setPrognosisCodeableConcept(array $prognosisCodeableConcept)
    {
        $this->prognosisCodeableConcept = $prognosisCodeableConcept;
        return $this;
    }

    /**
     * Adds as prognosisReference
     *
     * RiskAssessment expressing likely outcome.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $prognosisReference
     */
    public function addToPrognosisReference(\TKusy\Hl7FhirR4\ReferenceType $prognosisReference)
    {
        $this->prognosisReference[] = $prognosisReference;
        return $this;
    }

    /**
     * isset prognosisReference
     *
     * RiskAssessment expressing likely outcome.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrognosisReference($index)
    {
        return isset($this->prognosisReference[$index]);
    }

    /**
     * unset prognosisReference
     *
     * RiskAssessment expressing likely outcome.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrognosisReference($index)
    {
        unset($this->prognosisReference[$index]);
    }

    /**
     * Gets as prognosisReference
     *
     * RiskAssessment expressing likely outcome.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getPrognosisReference()
    {
        return $this->prognosisReference;
    }

    /**
     * Sets a new prognosisReference
     *
     * RiskAssessment expressing likely outcome.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $prognosisReference
     * @return self
     */
    public function setPrognosisReference(array $prognosisReference)
    {
        $this->prognosisReference = $prognosisReference;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Information supporting the clinical impression.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7FhirR4\ReferenceType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Information supporting the clinical impression.
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
     * Information supporting the clinical impression.
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
     * Information supporting the clinical impression.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Information supporting the clinical impression.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Adds as note
     *
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
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
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
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
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
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
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
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
     * Commentary about the impression, typically recorded after the impression itself was made, though supplemental notes by the original author could also appear.
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

