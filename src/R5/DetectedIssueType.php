<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing DetectedIssueType
 *
 * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, Ineffective treatment frequency, Procedure-condition conflict, gaps in care, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: DetectedIssue
 */
class DetectedIssueType extends DomainResourceType
{

    /**
     * Business identifier associated with the detected issue record.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates the status of the detected issue.
     *
     * @var \TKusy\Hl7Fhir\R5\DetectedIssueStatusType $status
     */
    private $status = null;

    /**
     * A code that classifies the general type of detected issue.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Identifies the specific type of issue identified.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\DetectedIssueSeverityType $severity
     */
    private $severity = null;

    /**
     * Indicates the subject whose record the detected issue is associated with.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The encounter during which this issue was detected.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $identifiedDateTime
     */
    private $identifiedDateTime = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $identifiedPeriod
     */
    private $identifiedPeriod = null;

    /**
     * Individual or device responsible for the issue being raised. For example, a decision support application or a pharmacist conducting a medication review.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $author
     */
    private $author = null;

    /**
     * Indicates the resource representing the current activity or proposed activity that is potentially problematic.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $implicated
     */
    private $implicated = null;

    /**
     * Supporting evidence or manifestations that provide the basis for identifying the detected issue such as a GuidanceResponse or MeasureReport.
     *
     * @var \TKusy\Hl7Fhir\R5\DetectedIssueEvidenceType[] $evidence
     */
    private $evidence = null;

    /**
     * A textual explanation of the detected issue.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $detail
     */
    private $detail = null;

    /**
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     *
     * @var \TKusy\Hl7Fhir\R5\UriType $reference
     */
    private $reference = null;

    /**
     * Indicates an action that has been taken or is committed to reduce or eliminate the likelihood of the risk identified by the detected issue from manifesting. Can also reflect an observation of known mitigating factors that may reduce/eliminate the need for any action.
     *
     * @var \TKusy\Hl7Fhir\R5\DetectedIssueMitigationType[] $mitigation
     */
    private $mitigation = null;

    /**
     * Adds as identifier
     *
     * Business identifier associated with the detected issue record.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * Indicates the status of the detected issue.
     *
     * @return \TKusy\Hl7Fhir\R5\DetectedIssueStatusType
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
     * @param \TKusy\Hl7Fhir\R5\DetectedIssueStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\DetectedIssueStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as category
     *
     * A code that classifies the general type of detected issue.
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
     * A code that classifies the general type of detected issue.
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
     * A code that classifies the general type of detected issue.
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
     * A code that classifies the general type of detected issue.
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
     * A code that classifies the general type of detected issue.
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
     * Identifies the specific type of issue identified.
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
     * Identifies the specific type of issue identified.
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
     * Gets as severity
     *
     * Indicates the degree of importance associated with the identified issue based on the potential impact on the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\DetectedIssueSeverityType
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
     * @param \TKusy\Hl7Fhir\R5\DetectedIssueSeverityType $severity
     * @return self
     */
    public function setSeverity(?\TKusy\Hl7Fhir\R5\DetectedIssueSeverityType $severity = null)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as subject
     *
     * Indicates the subject whose record the detected issue is associated with.
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
     * Indicates the subject whose record the detected issue is associated with.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The encounter during which this issue was detected.
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
     * The encounter during which this issue was detected.
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
     * Gets as identifiedDateTime
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getIdentifiedDateTime()
    {
        return $this->identifiedDateTime;
    }

    /**
     * Sets a new identifiedDateTime
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $identifiedDateTime
     * @return self
     */
    public function setIdentifiedDateTime(?\TKusy\Hl7Fhir\R5\DateTimeType $identifiedDateTime = null)
    {
        $this->identifiedDateTime = $identifiedDateTime;
        return $this;
    }

    /**
     * Gets as identifiedPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getIdentifiedPeriod()
    {
        return $this->identifiedPeriod;
    }

    /**
     * Sets a new identifiedPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $identifiedPeriod
     * @return self
     */
    public function setIdentifiedPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $identifiedPeriod = null)
    {
        $this->identifiedPeriod = $identifiedPeriod;
        return $this;
    }

    /**
     * Gets as author
     *
     * Individual or device responsible for the issue being raised. For example, a decision support application or a pharmacist conducting a medication review.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $author
     * @return self
     */
    public function setAuthor(?\TKusy\Hl7Fhir\R5\ReferenceType $author = null)
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $implicated
     */
    public function addToImplicated(\TKusy\Hl7Fhir\R5\ReferenceType $implicated)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $implicated
     * @return self
     */
    public function setImplicated(array $implicated = null)
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
     * @param \TKusy\Hl7Fhir\R5\DetectedIssueEvidenceType $evidence
     */
    public function addToEvidence(\TKusy\Hl7Fhir\R5\DetectedIssueEvidenceType $evidence)
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
     * @return \TKusy\Hl7Fhir\R5\DetectedIssueEvidenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\DetectedIssueEvidenceType[] $evidence
     * @return self
     */
    public function setEvidence(array $evidence = null)
    {
        $this->evidence = $evidence;
        return $this;
    }

    /**
     * Gets as detail
     *
     * A textual explanation of the detected issue.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
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
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $detail
     * @return self
     */
    public function setDetail(?\TKusy\Hl7Fhir\R5\MarkdownType $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Gets as reference
     *
     * The literature, knowledge-base or similar reference that describes the propensity for the detected issue identified.
     *
     * @return \TKusy\Hl7Fhir\R5\UriType
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
     * @param \TKusy\Hl7Fhir\R5\UriType $reference
     * @return self
     */
    public function setReference(?\TKusy\Hl7Fhir\R5\UriType $reference = null)
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
     * @param \TKusy\Hl7Fhir\R5\DetectedIssueMitigationType $mitigation
     */
    public function addToMitigation(\TKusy\Hl7Fhir\R5\DetectedIssueMitigationType $mitigation)
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
     * @return \TKusy\Hl7Fhir\R5\DetectedIssueMitigationType[]
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
     * @param \TKusy\Hl7Fhir\R5\DetectedIssueMitigationType[] $mitigation
     * @return self
     */
    public function setMitigation(array $mitigation = null)
    {
        $this->mitigation = $mitigation;
        return $this;
    }


}

