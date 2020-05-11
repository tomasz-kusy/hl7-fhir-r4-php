<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing DetectedIssueType
 *
 * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, Ineffective treatment frequency, Procedure-condition conflict, etc.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DetectedIssue
 */
class DetectedIssueType extends DomainResourceType
{

    /**
     * Business identifier associated with the detected issue record.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * Indicates the status of the detected issue.
     *
     * @var \TKusy\Hl7FhirR4\ObservationStatusType $status
     */
    private $status = null;

    /**
     * Identifies the general type of issue identified.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     *
     * @var \TKusy\Hl7FhirR4\DetectedIssueSeverityType $severity
     */
    private $severity = null;

    /**
     * Indicates the patient whose record the detected issue is associated with.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The date or period when the detected issue was initially identified. (choose any one of identified*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $identifiedDateTime
     */
    private $identifiedDateTime = null;

    /**
     * The date or period when the detected issue was initially identified. (choose any one of identified*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $identifiedPeriod
     */
    private $identifiedPeriod = null;

    /**
     * Individual or device responsible for the issue being raised. For example, a decision support application or a pharmacist conducting a medication review.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $author
     */
    private $author = null;

    /**
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $implicated
     */
    private $implicated = [
        
    ];

    /**
     * Supporting evidence or manifestations that provide the basis for identifying the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @var \TKusy\Hl7FhirR4\DetectedIssueEvidenceType[] $evidence
     */
    private $evidence = [
        
    ];

    /**
     * A textual explanation of the detected issue.
     *
     * @var \TKusy\Hl7FhirR4\StringType $detail
     */
    private $detail = null;

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     *
     * @var \TKusy\Hl7FhirR4\UriType $reference
     */
    private $reference = null;

    /**
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting. Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     *
     * @var \TKusy\Hl7FhirR4\DetectedIssueMitigationType[] $mitigation
     */
    private $mitigation = [
        
    ];

    /**
     * Adds as identifier
     *
     * Business identifier associated with the detected issue record.
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
     * Business identifier associated with the detected issue record.
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
     * Business identifier associated with the detected issue record.
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
     * Business identifier associated with the detected issue record.
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
     * Business identifier associated with the detected issue record.
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
     * Indicates the status of the detected issue.
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
     * Indicates the status of the detected issue.
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
     * Gets as code
     *
     * Identifies the general type of issue identified.
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
     * Identifies the general type of issue identified.
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
     * Gets as severity
     *
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     *
     * @return \TKusy\Hl7FhirR4\DetectedIssueSeverityType
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     *
     * @param \TKusy\Hl7FhirR4\DetectedIssueSeverityType $severity
     * @return self
     */
    public function setSeverity(\TKusy\Hl7FhirR4\DetectedIssueSeverityType $severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as patient
     *
     * Indicates the patient whose record the detected issue is associated with.
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
     * Indicates the patient whose record the detected issue is associated with.
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
     * Gets as identifiedDateTime
     *
     * The date or period when the detected issue was initially identified. (choose any one of identified*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getIdentifiedDateTime()
    {
        return $this->identifiedDateTime;
    }

    /**
     * Sets a new identifiedDateTime
     *
     * The date or period when the detected issue was initially identified. (choose any one of identified*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $identifiedDateTime
     * @return self
     */
    public function setIdentifiedDateTime(\TKusy\Hl7FhirR4\DateTimeType $identifiedDateTime)
    {
        $this->identifiedDateTime = $identifiedDateTime;
        return $this;
    }

    /**
     * Gets as identifiedPeriod
     *
     * The date or period when the detected issue was initially identified. (choose any one of identified*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getIdentifiedPeriod()
    {
        return $this->identifiedPeriod;
    }

    /**
     * Sets a new identifiedPeriod
     *
     * The date or period when the detected issue was initially identified. (choose any one of identified*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $identifiedPeriod
     * @return self
     */
    public function setIdentifiedPeriod(\TKusy\Hl7FhirR4\PeriodType $identifiedPeriod)
    {
        $this->identifiedPeriod = $identifiedPeriod;
        return $this;
    }

    /**
     * Gets as author
     *
     * Individual or device responsible for the issue being raised. For example, a decision support application or a pharmacist conducting a medication review.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * Individual or device responsible for the issue being raised. For example, a decision support application or a pharmacist conducting a medication review.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $author
     * @return self
     */
    public function setAuthor(\TKusy\Hl7FhirR4\ReferenceType $author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Adds as implicated
     *
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $implicated
     */
    public function addToImplicated(\TKusy\Hl7FhirR4\ReferenceType $implicated)
    {
        $this->implicated[] = $implicated;
        return $this;
    }

    /**
     * isset implicated
     *
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImplicated($index)
    {
        return isset($this->implicated[$index]);
    }

    /**
     * unset implicated
     *
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImplicated($index)
    {
        unset($this->implicated[$index]);
    }

    /**
     * Gets as implicated
     *
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getImplicated()
    {
        return $this->implicated;
    }

    /**
     * Sets a new implicated
     *
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $implicated
     * @return self
     */
    public function setImplicated(array $implicated)
    {
        $this->implicated = $implicated;
        return $this;
    }

    /**
     * Adds as evidence
     *
     * Supporting evidence or manifestations that provide the basis for identifying the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DetectedIssueEvidenceType $evidence
     */
    public function addToEvidence(\TKusy\Hl7FhirR4\DetectedIssueEvidenceType $evidence)
    {
        $this->evidence[] = $evidence;
        return $this;
    }

    /**
     * isset evidence
     *
     * Supporting evidence or manifestations that provide the basis for identifying the detected issue such as a GuidanceResponse or MeasureReport.
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
     * Supporting evidence or manifestations that provide the basis for identifying the detected issue such as a GuidanceResponse or MeasureReport.
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
     * Supporting evidence or manifestations that provide the basis for identifying the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @return \TKusy\Hl7FhirR4\DetectedIssueEvidenceType[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Sets a new evidence
     *
     * Supporting evidence or manifestations that provide the basis for identifying the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @param \TKusy\Hl7FhirR4\DetectedIssueEvidenceType[] $evidence
     * @return self
     */
    public function setEvidence(array $evidence)
    {
        $this->evidence = $evidence;
        return $this;
    }

    /**
     * Gets as detail
     *
     * A textual explanation of the detected issue.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * A textual explanation of the detected issue.
     *
     * @param \TKusy\Hl7FhirR4\StringType $detail
     * @return self
     */
    public function setDetail(\TKusy\Hl7FhirR4\StringType $detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Gets as reference
     *
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     *
     * @return \TKusy\Hl7FhirR4\UriType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     *
     * @param \TKusy\Hl7FhirR4\UriType $reference
     * @return self
     */
    public function setReference(\TKusy\Hl7FhirR4\UriType $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Adds as mitigation
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting. Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DetectedIssueMitigationType $mitigation
     */
    public function addToMitigation(\TKusy\Hl7FhirR4\DetectedIssueMitigationType $mitigation)
    {
        $this->mitigation[] = $mitigation;
        return $this;
    }

    /**
     * isset mitigation
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting. Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMitigation($index)
    {
        return isset($this->mitigation[$index]);
    }

    /**
     * unset mitigation
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting. Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMitigation($index)
    {
        unset($this->mitigation[$index]);
    }

    /**
     * Gets as mitigation
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting. Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     *
     * @return \TKusy\Hl7FhirR4\DetectedIssueMitigationType[]
     */
    public function getMitigation()
    {
        return $this->mitigation;
    }

    /**
     * Sets a new mitigation
     *
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting. Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     *
     * @param \TKusy\Hl7FhirR4\DetectedIssueMitigationType[] $mitigation
     * @return self
     */
    public function setMitigation(array $mitigation)
    {
        $this->mitigation = $mitigation;
        return $this;
    }


}

