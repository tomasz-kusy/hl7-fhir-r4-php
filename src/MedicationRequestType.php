<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicationRequestType
 *
 * An order or request for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to generalize the use across inpatient and outpatient settings, including care plans, etc., and to harmonize with workflow patterns.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: MedicationRequest
 */
class MedicationRequestType extends DomainResourceType
{

    /**
     * Identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * A code specifying the current state of the order. Generally, this will be active or completed state.
     *
     * @var \TKusy\Hl7FhirR4\MedicationrequestStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the MedicationRequest.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * Whether the request is a proposal, plan, or an original order.
     *
     * @var \TKusy\Hl7FhirR4\MedicationRequestIntentType $intent
     */
    private $intent = null;

    /**
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     */
    private $category = [
        
    ];

    /**
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7FhirR4\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * If true indicates that the provider is asking for the medication request not to occur.
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report. (choose any one of reported*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\BooleanType $reportedBoolean
     */
    private $reportedBoolean = null;

    /**
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report. (choose any one of reported*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $reportedReference
     */
    private $reportedReference = null;

    /**
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $medicationCodeableConcept
     */
    private $medicationCodeableConcept = null;

    /**
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $medicationReference
     */
    private $medicationReference = null;

    /**
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The Encounter during which this [x] was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = [
        
    ];

    /**
     * The date (and perhaps time) when the prescription was initially written or authored on.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The individual, organization, or device that initiated the request and has responsibility for its activation.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $requester
     */
    private $requester = null;

    /**
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $performer
     */
    private $performer = null;

    /**
     * Indicates the type of performer of the administration of the medication.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $performerType
     */
    private $performerType = null;

    /**
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $recorder
     */
    private $recorder = null;

    /**
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $reasonCode
     */
    private $reasonCode = [
        
    ];

    /**
     * Condition or observation that supports why the medication was ordered.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $reasonReference
     */
    private $reasonReference = [
        
    ];

    /**
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @var \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     */
    private $instantiatesCanonical = [
        
    ];

    /**
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @var \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     */
    private $instantiatesUri = [
        
    ];

    /**
     * A plan or request that is fulfilled in whole or in part by this medication request.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     */
    private $basedOn = [
        
    ];

    /**
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * The description of the overall patte3rn of the administration of the medication to the patient.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $courseOfTherapyType
     */
    private $courseOfTherapyType = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $insurance
     */
    private $insurance = [
        
    ];

    /**
     * Extra information about the prescription that could not be conveyed by the other attributes.
     *
     * @var \TKusy\Hl7FhirR4\AnnotationType[] $note
     */
    private $note = [
        
    ];

    /**
     * Indicates how the medication is to be used by the patient.
     *
     * @var \TKusy\Hl7FhirR4\DosageType[] $dosageInstruction
     */
    private $dosageInstruction = [
        
    ];

    /**
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order). Note that this information is not always sent with the order. There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     *
     * @var \TKusy\Hl7FhirR4\MedicationRequestDispenseRequestType $dispenseRequest
     */
    private $dispenseRequest = null;

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases, substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     *
     * @var \TKusy\Hl7FhirR4\MedicationRequestSubstitutionType $substitution
     */
    private $substitution = null;

    /**
     * A link to a resource representing an earlier order related order or prescription.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $priorPrescription
     */
    private $priorPrescription = null;

    /**
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $detectedIssue
     */
    private $detectedIssue = [
        
    ];

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $eventHistory
     */
    private $eventHistory = [
        
    ];

    /**
     * Adds as identifier
     *
     * Identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * Identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * A code specifying the current state of the order. Generally, this will be active or completed state.
     *
     * @return \TKusy\Hl7FhirR4\MedicationrequestStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * A code specifying the current state of the order. Generally, this will be active or completed state.
     *
     * @param \TKusy\Hl7FhirR4\MedicationrequestStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\MedicationrequestStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current state of the MedicationRequest.
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
     * Captures the reason for the current state of the MedicationRequest.
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
     * Gets as intent
     *
     * Whether the request is a proposal, plan, or an original order.
     *
     * @return \TKusy\Hl7FhirR4\MedicationRequestIntentType
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * Sets a new intent
     *
     * Whether the request is a proposal, plan, or an original order.
     *
     * @param \TKusy\Hl7FhirR4\MedicationRequestIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7FhirR4\MedicationRequestIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Adds as category
     *
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    public function addToCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
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
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
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
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Indicates the type of medication request (for example, where the medication is expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as priority
     *
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     *
     * @return \TKusy\Hl7FhirR4\RequestPriorityType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     *
     * @param \TKusy\Hl7FhirR4\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\RequestPriorityType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as doNotPerform
     *
     * If true indicates that the provider is asking for the medication request not to occur.
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Sets a new doNotPerform
     *
     * If true indicates that the provider is asking for the medication request not to occur.
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $doNotPerform
     * @return self
     */
    public function setDoNotPerform(\TKusy\Hl7FhirR4\BooleanType $doNotPerform)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Gets as reportedBoolean
     *
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report. (choose any one of reported*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\BooleanType
     */
    public function getReportedBoolean()
    {
        return $this->reportedBoolean;
    }

    /**
     * Sets a new reportedBoolean
     *
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report. (choose any one of reported*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\BooleanType $reportedBoolean
     * @return self
     */
    public function setReportedBoolean(\TKusy\Hl7FhirR4\BooleanType $reportedBoolean)
    {
        $this->reportedBoolean = $reportedBoolean;
        return $this;
    }

    /**
     * Gets as reportedReference
     *
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report. (choose any one of reported*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReportedReference()
    {
        return $this->reportedReference;
    }

    /**
     * Sets a new reportedReference
     *
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report. (choose any one of reported*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $reportedReference
     * @return self
     */
    public function setReportedReference(\TKusy\Hl7FhirR4\ReferenceType $reportedReference)
    {
        $this->reportedReference = $reportedReference;
        return $this;
    }

    /**
     * Gets as medicationCodeableConcept
     *
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * Sets a new medicationCodeableConcept
     *
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $medicationCodeableConcept
     * @return self
     */
    public function setMedicationCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $medicationCodeableConcept)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * Gets as medicationReference
     *
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * Sets a new medicationReference
     *
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications. (choose any one of medication*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $medicationReference
     * @return self
     */
    public function setMedicationReference(\TKusy\Hl7FhirR4\ReferenceType $medicationReference)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * Gets as subject
     *
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
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
     * A link to a resource representing the person or set of individuals to whom the medication will be given.
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
     * The Encounter during which this [x] was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this [x] was created or to which the creation of this record is tightly associated.
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
     * Adds as supportingInformation
     *
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7FhirR4\ReferenceType $supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * isset supportingInformation
     *
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportingInformation($index)
    {
        return isset($this->supportingInformation[$index]);
    }

    /**
     * unset supportingInformation
     *
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportingInformation($index)
    {
        unset($this->supportingInformation[$index]);
    }

    /**
     * Gets as supportingInformation
     *
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Include additional information (for example, patient height and weight) that supports the ordering of the medication.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Gets as authoredOn
     *
     * The date (and perhaps time) when the prescription was initially written or authored on.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

    /**
     * Sets a new authoredOn
     *
     * The date (and perhaps time) when the prescription was initially written or authored on.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $authoredOn
     * @return self
     */
    public function setAuthoredOn(\TKusy\Hl7FhirR4\DateTimeType $authoredOn)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * Gets as requester
     *
     * The individual, organization, or device that initiated the request and has responsibility for its activation.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * Sets a new requester
     *
     * The individual, organization, or device that initiated the request and has responsibility for its activation.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $requester
     * @return self
     */
    public function setRequester(\TKusy\Hl7FhirR4\ReferenceType $requester)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Gets as performer
     *
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
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
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration).
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
     * Gets as performerType
     *
     * Indicates the type of performer of the administration of the medication.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * Sets a new performerType
     *
     * Indicates the type of performer of the administration of the medication.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $performerType
     * @return self
     */
    public function setPerformerType(\TKusy\Hl7FhirR4\CodeableConceptType $performerType)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Gets as recorder
     *
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * Sets a new recorder
     *
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $recorder
     * @return self
     */
    public function setRecorder(\TKusy\Hl7FhirR4\ReferenceType $recorder)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Adds as reasonCode
     *
     * The reason or the indication for ordering or not ordering the medication.
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
     * The reason or the indication for ordering or not ordering the medication.
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
     * The reason or the indication for ordering or not ordering the medication.
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
     * The reason or the indication for ordering or not ordering the medication.
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
     * The reason or the indication for ordering or not ordering the medication.
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
     * Condition or observation that supports why the medication was ordered.
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
     * Condition or observation that supports why the medication was ordered.
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
     * Condition or observation that supports why the medication was ordered.
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
     * Condition or observation that supports why the medication was ordered.
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
     * Condition or observation that supports why the medication was ordered.
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
     * Adds as instantiatesCanonical
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical
     */
    public function addToInstantiatesCanonical(\TKusy\Hl7FhirR4\CanonicalType $instantiatesCanonical)
    {
        $this->instantiatesCanonical[] = $instantiatesCanonical;
        return $this;
    }

    /**
     * isset instantiatesCanonical
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesCanonical($index)
    {
        return isset($this->instantiatesCanonical[$index]);
    }

    /**
     * unset instantiatesCanonical
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesCanonical($index)
    {
        unset($this->instantiatesCanonical[$index]);
    }

    /**
     * Gets as instantiatesCanonical
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @return \TKusy\Hl7FhirR4\CanonicalType[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * Sets a new instantiatesCanonical
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @param \TKusy\Hl7FhirR4\CanonicalType[] $instantiatesCanonical
     * @return self
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical)
    {
        $this->instantiatesCanonical = $instantiatesCanonical;
        return $this;
    }

    /**
     * Adds as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\UriType $instantiatesUri
     */
    public function addToInstantiatesUri(\TKusy\Hl7FhirR4\UriType $instantiatesUri)
    {
        $this->instantiatesUri[] = $instantiatesUri;
        return $this;
    }

    /**
     * isset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstantiatesUri($index)
    {
        return isset($this->instantiatesUri[$index]);
    }

    /**
     * unset instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstantiatesUri($index)
    {
        unset($this->instantiatesUri[$index]);
    }

    /**
     * Gets as instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @return \TKusy\Hl7FhirR4\UriType[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * Sets a new instantiatesUri
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or other definition that is adhered to in whole or in part by this MedicationRequest.
     *
     * @param \TKusy\Hl7FhirR4\UriType[] $instantiatesUri
     * @return self
     */
    public function setInstantiatesUri(array $instantiatesUri)
    {
        $this->instantiatesUri = $instantiatesUri;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this medication request.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7FhirR4\ReferenceType $basedOn)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * isset basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this medication request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBasedOn($index)
    {
        return isset($this->basedOn[$index]);
    }

    /**
     * unset basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this medication request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBasedOn($index)
    {
        unset($this->basedOn[$index]);
    }

    /**
     * Gets as basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this medication request.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * Sets a new basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this medication request.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as groupIdentifier
     *
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

    /**
     * Sets a new groupIdentifier
     *
     * A shared identifier common to all requests that were authorized more or less simultaneously by a single author, representing the identifier of the requisition or prescription.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $groupIdentifier
     * @return self
     */
    public function setGroupIdentifier(\TKusy\Hl7FhirR4\IdentifierType $groupIdentifier)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * Gets as courseOfTherapyType
     *
     * The description of the overall patte3rn of the administration of the medication to the patient.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCourseOfTherapyType()
    {
        return $this->courseOfTherapyType;
    }

    /**
     * Sets a new courseOfTherapyType
     *
     * The description of the overall patte3rn of the administration of the medication to the patient.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $courseOfTherapyType
     * @return self
     */
    public function setCourseOfTherapyType(\TKusy\Hl7FhirR4\CodeableConceptType $courseOfTherapyType)
    {
        $this->courseOfTherapyType = $courseOfTherapyType;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7FhirR4\ReferenceType $insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * isset insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsurance($index)
    {
        return isset($this->insurance[$index]);
    }

    /**
     * unset insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsurance($index)
    {
        unset($this->insurance[$index]);
    }

    /**
     * Gets as insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Adds as note
     *
     * Extra information about the prescription that could not be conveyed by the other attributes.
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
     * Extra information about the prescription that could not be conveyed by the other attributes.
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
     * Extra information about the prescription that could not be conveyed by the other attributes.
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
     * Extra information about the prescription that could not be conveyed by the other attributes.
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
     * Extra information about the prescription that could not be conveyed by the other attributes.
     *
     * @param \TKusy\Hl7FhirR4\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\DosageType $dosageInstruction
     */
    public function addToDosageInstruction(\TKusy\Hl7FhirR4\DosageType $dosageInstruction)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * isset dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDosageInstruction($index)
    {
        return isset($this->dosageInstruction[$index]);
    }

    /**
     * unset dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDosageInstruction($index)
    {
        unset($this->dosageInstruction[$index]);
    }

    /**
     * Gets as dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return \TKusy\Hl7FhirR4\DosageType[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * Sets a new dosageInstruction
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \TKusy\Hl7FhirR4\DosageType[] $dosageInstruction
     * @return self
     */
    public function setDosageInstruction(array $dosageInstruction)
    {
        $this->dosageInstruction = $dosageInstruction;
        return $this;
    }

    /**
     * Gets as dispenseRequest
     *
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order). Note that this information is not always sent with the order. There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     *
     * @return \TKusy\Hl7FhirR4\MedicationRequestDispenseRequestType
     */
    public function getDispenseRequest()
    {
        return $this->dispenseRequest;
    }

    /**
     * Sets a new dispenseRequest
     *
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order). Note that this information is not always sent with the order. There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     *
     * @param \TKusy\Hl7FhirR4\MedicationRequestDispenseRequestType $dispenseRequest
     * @return self
     */
    public function setDispenseRequest(\TKusy\Hl7FhirR4\MedicationRequestDispenseRequestType $dispenseRequest)
    {
        $this->dispenseRequest = $dispenseRequest;
        return $this;
    }

    /**
     * Gets as substitution
     *
     * Indicates whether or not substitution can or should be part of the dispense. In some cases, substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     *
     * @return \TKusy\Hl7FhirR4\MedicationRequestSubstitutionType
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * Sets a new substitution
     *
     * Indicates whether or not substitution can or should be part of the dispense. In some cases, substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     *
     * @param \TKusy\Hl7FhirR4\MedicationRequestSubstitutionType $substitution
     * @return self
     */
    public function setSubstitution(\TKusy\Hl7FhirR4\MedicationRequestSubstitutionType $substitution)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Gets as priorPrescription
     *
     * A link to a resource representing an earlier order related order or prescription.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPriorPrescription()
    {
        return $this->priorPrescription;
    }

    /**
     * Sets a new priorPrescription
     *
     * A link to a resource representing an earlier order related order or prescription.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $priorPrescription
     * @return self
     */
    public function setPriorPrescription(\TKusy\Hl7FhirR4\ReferenceType $priorPrescription)
    {
        $this->priorPrescription = $priorPrescription;
        return $this;
    }

    /**
     * Adds as detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $detectedIssue
     */
    public function addToDetectedIssue(\TKusy\Hl7FhirR4\ReferenceType $detectedIssue)
    {
        $this->detectedIssue[] = $detectedIssue;
        return $this;
    }

    /**
     * isset detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetectedIssue($index)
    {
        return isset($this->detectedIssue[$index]);
    }

    /**
     * unset detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetectedIssue($index)
    {
        unset($this->detectedIssue[$index]);
    }

    /**
     * Gets as detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }

    /**
     * Sets a new detectedIssue
     *
     * Indicates an actual or potential clinical issue with or between one or more active or proposed clinical actions for a patient; e.g. Drug-drug interaction, duplicate therapy, dosage alert etc.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $detectedIssue
     * @return self
     */
    public function setDetectedIssue(array $detectedIssue)
    {
        $this->detectedIssue = $detectedIssue;
        return $this;
    }

    /**
     * Adds as eventHistory
     *
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $eventHistory
     */
    public function addToEventHistory(\TKusy\Hl7FhirR4\ReferenceType $eventHistory)
    {
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * isset eventHistory
     *
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventHistory($index)
    {
        return isset($this->eventHistory[$index]);
    }

    /**
     * unset eventHistory
     *
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventHistory($index)
    {
        unset($this->eventHistory[$index]);
    }

    /**
     * Gets as eventHistory
     *
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * Sets a new eventHistory
     *
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $eventHistory
     * @return self
     */
    public function setEventHistory(array $eventHistory)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }


}

