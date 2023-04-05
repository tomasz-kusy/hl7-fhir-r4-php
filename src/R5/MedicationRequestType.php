<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationRequestType
 *
 * An order or request for both supply of the medication and the instructions for administration of the medication to a patient. The resource is called "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to generalize the use across inpatient and outpatient settings, including care plans, etc., and to harmonize with workflow patterns.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: MedicationRequest
 */
class MedicationRequestType extends DomainResourceType
{

    /**
     * Identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * A plan or request that is fulfilled in whole or in part by this medication request.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     */
    private $basedOn = null;

    /**
     * Reference to an order/prescription that is being replaced by this MedicationRequest.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $priorPrescription
     */
    private $priorPrescription = null;

    /**
     * A shared identifier common to multiple independent Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier
     */
    private $groupIdentifier = null;

    /**
     * A code specifying the current state of the order. Generally, this will be active or completed state.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationrequestStatusType $status
     */
    private $status = null;

    /**
     * Captures the reason for the current state of the MedicationRequest.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     */
    private $statusReason = null;

    /**
     * The date (and perhaps time) when the status was changed.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $statusChanged
     */
    private $statusChanged = null;

    /**
     * Whether the request is a proposal, plan, or an original order.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationRequestIntentType $intent
     */
    private $intent = null;

    /**
     * An arbitrary categorization or grouping of the medication request. It could be used for indicating where meds are intended to be administered, eg. in an inpatient setting or in a patient's home, or a legal category of the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $category
     */
    private $category = null;

    /**
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     *
     * @var \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     */
    private $priority = null;

    /**
     * If true, indicates that the provider is asking for the patient to either stop taking or to not start taking the specified medication. For example, the patient is taking an existing medication and the provider is changing their medication. They want to create two seperate requests: one to stop using the current medication and another to start the new medication.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     */
    private $doNotPerform = null;

    /**
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $medication
     */
    private $medication = null;

    /**
     * The individual or group for whom the medication has been requested.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The person or organization who provided the information about this request, if the source is someone other than the requestor. This is often used when the MedicationRequest is reported by another person.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $informationSource
     */
    private $informationSource = null;

    /**
     * The Encounter during which this [x] was created or to which the creation of this record is tightly associated.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * Information to support fulfilling (i.e. dispensing or administering) of the medication, for example, patient height and weight, a MedicationStatement for the patient).
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     */
    private $supportingInformation = null;

    /**
     * The date (and perhaps time) when the prescription was initially written or authored on.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     */
    private $authoredOn = null;

    /**
     * The individual, organization, or device that initiated the request and has responsibility for its activation.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requester
     */
    private $requester = null;

    /**
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $reported
     */
    private $reported = null;

    /**
     * Indicates the type of performer of the administration of the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $performerType
     */
    private $performerType = null;

    /**
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration). For devices, this is the device that is intended to perform the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $performer
     */
    private $performer = null;

    /**
     * The intended type of device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $device
     */
    private $device = null;

    /**
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $recorder
     */
    private $recorder = null;

    /**
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     */
    private $reason = null;

    /**
     * The description of the overall pattern of the administration of the medication to the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $courseOfTherapyType
     */
    private $courseOfTherapyType = null;

    /**
     * Insurance plans, coverage extensions, pre-authorizations and/or pre-determinations that may be required for delivering the requested service.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $insurance
     */
    private $insurance = null;

    /**
     * Extra information about the prescription that could not be conveyed by the other attributes.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * The full representation of the dose of the medication included in all dosage instructions. To be used when multiple dosage instructions are included to represent complex dosing such as increasing or tapering doses.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $renderedDosageInstruction
     */
    private $renderedDosageInstruction = null;

    /**
     * The period over which the medication is to be taken. Where there are multiple dosageInstruction lines (for example, tapering doses), this is the earliest date and the latest end date of the dosageInstructions.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $effectiveDosePeriod
     */
    private $effectiveDosePeriod = null;

    /**
     * Specific instructions for how the medication is to be used by the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\DosageType[] $dosageInstruction
     */
    private $dosageInstruction = null;

    /**
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order). Note that this information is not always sent with the order. There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationRequestDispenseRequestType $dispenseRequest
     */
    private $dispenseRequest = null;

    /**
     * Indicates whether or not substitution can or should be part of the dispense. In some cases, substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     *
     * @var \TKusy\Hl7Fhir\R5\MedicationRequestSubstitutionType $substitution
     */
    private $substitution = null;

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $eventHistory
     */
    private $eventHistory = null;

    /**
     * Adds as identifier
     *
     * Identifiers associated with this medication request that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate. They are business identifiers assigned to this resource by the performer or other systems and remain constant as the resource is updated and propagates from server to server.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Adds as basedOn
     *
     * A plan or request that is fulfilled in whole or in part by this medication request.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $basedOn
     */
    public function addToBasedOn(\TKusy\Hl7Fhir\R5\ReferenceType $basedOn)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $basedOn
     * @return self
     */
    public function setBasedOn(array $basedOn = null)
    {
        $this->basedOn = $basedOn;
        return $this;
    }

    /**
     * Gets as priorPrescription
     *
     * Reference to an order/prescription that is being replaced by this MedicationRequest.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPriorPrescription()
    {
        return $this->priorPrescription;
    }

    /**
     * Sets a new priorPrescription
     *
     * Reference to an order/prescription that is being replaced by this MedicationRequest.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $priorPrescription
     * @return self
     */
    public function setPriorPrescription(?\TKusy\Hl7Fhir\R5\ReferenceType $priorPrescription = null)
    {
        $this->priorPrescription = $priorPrescription;
        return $this;
    }

    /**
     * Gets as groupIdentifier
     *
     * A shared identifier common to multiple independent Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

    /**
     * Sets a new groupIdentifier
     *
     * A shared identifier common to multiple independent Request instances that were activated/authorized more or less simultaneously by a single author. The presence of the same identifier on each request ties those requests together and may have business ramifications in terms of reporting of results, billing, etc. E.g. a requisition number shared by a set of lab tests ordered together, or a prescription number shared by all meds ordered at one time.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier
     * @return self
     */
    public function setGroupIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $groupIdentifier = null)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * Gets as status
     *
     * A code specifying the current state of the order. Generally, this will be active or completed state.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationrequestStatusType
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
     * @param \TKusy\Hl7Fhir\R5\MedicationrequestStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\MedicationrequestStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as statusReason
     *
     * Captures the reason for the current state of the MedicationRequest.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason
     * @return self
     */
    public function setStatusReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * Gets as statusChanged
     *
     * The date (and perhaps time) when the status was changed.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getStatusChanged()
    {
        return $this->statusChanged;
    }

    /**
     * Sets a new statusChanged
     *
     * The date (and perhaps time) when the status was changed.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $statusChanged
     * @return self
     */
    public function setStatusChanged(?\TKusy\Hl7Fhir\R5\DateTimeType $statusChanged = null)
    {
        $this->statusChanged = $statusChanged;
        return $this;
    }

    /**
     * Gets as intent
     *
     * Whether the request is a proposal, plan, or an original order.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationRequestIntentType
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
     * @param \TKusy\Hl7Fhir\R5\MedicationRequestIntentType $intent
     * @return self
     */
    public function setIntent(\TKusy\Hl7Fhir\R5\MedicationRequestIntentType $intent)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * Adds as category
     *
     * An arbitrary categorization or grouping of the medication request. It could be used for indicating where meds are intended to be administered, eg. in an inpatient setting or in a patient's home, or a legal category of the medication.
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
     * An arbitrary categorization or grouping of the medication request. It could be used for indicating where meds are intended to be administered, eg. in an inpatient setting or in a patient's home, or a legal category of the medication.
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
     * An arbitrary categorization or grouping of the medication request. It could be used for indicating where meds are intended to be administered, eg. in an inpatient setting or in a patient's home, or a legal category of the medication.
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
     * An arbitrary categorization or grouping of the medication request. It could be used for indicating where meds are intended to be administered, eg. in an inpatient setting or in a patient's home, or a legal category of the medication.
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
     * An arbitrary categorization or grouping of the medication request. It could be used for indicating where meds are intended to be administered, eg. in an inpatient setting or in a patient's home, or a legal category of the medication.
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
     * Gets as priority
     *
     * Indicates how quickly the Medication Request should be addressed with respect to other requests.
     *
     * @return \TKusy\Hl7Fhir\R5\RequestPriorityType
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
     * @param \TKusy\Hl7Fhir\R5\RequestPriorityType $priority
     * @return self
     */
    public function setPriority(?\TKusy\Hl7Fhir\R5\RequestPriorityType $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as doNotPerform
     *
     * If true, indicates that the provider is asking for the patient to either stop taking or to not start taking the specified medication. For example, the patient is taking an existing medication and the provider is changing their medication. They want to create two seperate requests: one to stop using the current medication and another to start the new medication.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Sets a new doNotPerform
     *
     * If true, indicates that the provider is asking for the patient to either stop taking or to not start taking the specified medication. For example, the patient is taking an existing medication and the provider is changing their medication. They want to create two seperate requests: one to stop using the current medication and another to start the new medication.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $doNotPerform
     * @return self
     */
    public function setDoNotPerform(?\TKusy\Hl7Fhir\R5\BooleanType $doNotPerform = null)
    {
        $this->doNotPerform = $doNotPerform;
        return $this;
    }

    /**
     * Gets as medication
     *
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Sets a new medication
     *
     * Identifies the medication being requested. This is a link to a resource that represents the medication which may be the details of the medication or simply an attribute carrying a code that identifies the medication from a known list of medications.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $medication
     * @return self
     */
    public function setMedication(\TKusy\Hl7Fhir\R5\CodeableReferenceType $medication)
    {
        $this->medication = $medication;
        return $this;
    }

    /**
     * Gets as subject
     *
     * The individual or group for whom the medication has been requested.
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
     * The individual or group for whom the medication has been requested.
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
     * Adds as informationSource
     *
     * The person or organization who provided the information about this request, if the source is someone other than the requestor. This is often used when the MedicationRequest is reported by another person.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $informationSource
     */
    public function addToInformationSource(\TKusy\Hl7Fhir\R5\ReferenceType $informationSource)
    {
        $this->informationSource[] = $informationSource;
        return $this;
    }

    /**
     * isset informationSource
     *
     * The person or organization who provided the information about this request, if the source is someone other than the requestor. This is often used when the MedicationRequest is reported by another person.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformationSource($index)
    {
        return isset($this->informationSource[$index]);
    }

    /**
     * unset informationSource
     *
     * The person or organization who provided the information about this request, if the source is someone other than the requestor. This is often used when the MedicationRequest is reported by another person.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformationSource($index)
    {
        unset($this->informationSource[$index]);
    }

    /**
     * Gets as informationSource
     *
     * The person or organization who provided the information about this request, if the source is someone other than the requestor. This is often used when the MedicationRequest is reported by another person.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getInformationSource()
    {
        return $this->informationSource;
    }

    /**
     * Sets a new informationSource
     *
     * The person or organization who provided the information about this request, if the source is someone other than the requestor. This is often used when the MedicationRequest is reported by another person.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $informationSource
     * @return self
     */
    public function setInformationSource(array $informationSource = null)
    {
        $this->informationSource = $informationSource;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter during which this [x] was created or to which the creation of this record is tightly associated.
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
     * The Encounter during which this [x] was created or to which the creation of this record is tightly associated.
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
     * Adds as supportingInformation
     *
     * Information to support fulfilling (i.e. dispensing or administering) of the medication, for example, patient height and weight, a MedicationStatement for the patient).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation
     */
    public function addToSupportingInformation(\TKusy\Hl7Fhir\R5\ReferenceType $supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * isset supportingInformation
     *
     * Information to support fulfilling (i.e. dispensing or administering) of the medication, for example, patient height and weight, a MedicationStatement for the patient).
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
     * Information to support fulfilling (i.e. dispensing or administering) of the medication, for example, patient height and weight, a MedicationStatement for the patient).
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
     * Information to support fulfilling (i.e. dispensing or administering) of the medication, for example, patient height and weight, a MedicationStatement for the patient).
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Sets a new supportingInformation
     *
     * Information to support fulfilling (i.e. dispensing or administering) of the medication, for example, patient height and weight, a MedicationStatement for the patient).
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $supportingInformation
     * @return self
     */
    public function setSupportingInformation(array $supportingInformation = null)
    {
        $this->supportingInformation = $supportingInformation;
        return $this;
    }

    /**
     * Gets as authoredOn
     *
     * The date (and perhaps time) when the prescription was initially written or authored on.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $authoredOn
     * @return self
     */
    public function setAuthoredOn(?\TKusy\Hl7Fhir\R5\DateTimeType $authoredOn = null)
    {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * Gets as requester
     *
     * The individual, organization, or device that initiated the request and has responsibility for its activation.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $requester
     * @return self
     */
    public function setRequester(?\TKusy\Hl7Fhir\R5\ReferenceType $requester = null)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Gets as reported
     *
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getReported()
    {
        return $this->reported;
    }

    /**
     * Sets a new reported
     *
     * Indicates if this record was captured as a secondary 'reported' record rather than as an original primary source-of-truth record. It may also indicate the source of the report.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $reported
     * @return self
     */
    public function setReported(?\TKusy\Hl7Fhir\R5\BooleanType $reported = null)
    {
        $this->reported = $reported;
        return $this;
    }

    /**
     * Gets as performerType
     *
     * Indicates the type of performer of the administration of the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $performerType
     * @return self
     */
    public function setPerformerType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $performerType = null)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * Adds as performer
     *
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration). For devices, this is the device that is intended to perform the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $performer
     */
    public function addToPerformer(\TKusy\Hl7Fhir\R5\ReferenceType $performer)
    {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * isset performer
     *
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration). For devices, this is the device that is intended to perform the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformer($index)
    {
        return isset($this->performer[$index]);
    }

    /**
     * unset performer
     *
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration). For devices, this is the device that is intended to perform the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformer($index)
    {
        unset($this->performer[$index]);
    }

    /**
     * Gets as performer
     *
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration). For devices, this is the device that is intended to perform the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Sets a new performer
     *
     * The specified desired performer of the medication treatment (e.g. the performer of the medication administration). For devices, this is the device that is intended to perform the administration of the medication. An IV Pump would be an example of a device that is performing the administration. Both the IV Pump and the practitioner that set the rate or bolus on the pump can be listed as performers.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $performer
     * @return self
     */
    public function setPerformer(array $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * Adds as device
     *
     * The intended type of device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $device
     */
    public function addToDevice(\TKusy\Hl7Fhir\R5\CodeableReferenceType $device)
    {
        $this->device[] = $device;
        return $this;
    }

    /**
     * isset device
     *
     * The intended type of device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDevice($index)
    {
        return isset($this->device[$index]);
    }

    /**
     * unset device
     *
     * The intended type of device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDevice($index)
    {
        unset($this->device[$index]);
    }

    /**
     * Gets as device
     *
     * The intended type of device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Sets a new device
     *
     * The intended type of device that is to be used for the administration of the medication (for example, PCA Pump).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $device
     * @return self
     */
    public function setDevice(array $device = null)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * Gets as recorder
     *
     * The person who entered the order on behalf of another individual for example in the case of a verbal or a telephone order.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $recorder
     * @return self
     */
    public function setRecorder(?\TKusy\Hl7Fhir\R5\ReferenceType $recorder = null)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\CodeableReferenceType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReason($index)
    {
        return isset($this->reason[$index]);
    }

    /**
     * unset reason
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReason($index)
    {
        unset($this->reason[$index]);
    }

    /**
     * Gets as reason
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as courseOfTherapyType
     *
     * The description of the overall pattern of the administration of the medication to the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCourseOfTherapyType()
    {
        return $this->courseOfTherapyType;
    }

    /**
     * Sets a new courseOfTherapyType
     *
     * The description of the overall pattern of the administration of the medication to the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $courseOfTherapyType
     * @return self
     */
    public function setCourseOfTherapyType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $courseOfTherapyType = null)
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7Fhir\R5\ReferenceType $insurance)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance = null)
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
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
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
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as renderedDosageInstruction
     *
     * The full representation of the dose of the medication included in all dosage instructions. To be used when multiple dosage instructions are included to represent complex dosing such as increasing or tapering doses.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getRenderedDosageInstruction()
    {
        return $this->renderedDosageInstruction;
    }

    /**
     * Sets a new renderedDosageInstruction
     *
     * The full representation of the dose of the medication included in all dosage instructions. To be used when multiple dosage instructions are included to represent complex dosing such as increasing or tapering doses.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $renderedDosageInstruction
     * @return self
     */
    public function setRenderedDosageInstruction(?\TKusy\Hl7Fhir\R5\MarkdownType $renderedDosageInstruction = null)
    {
        $this->renderedDosageInstruction = $renderedDosageInstruction;
        return $this;
    }

    /**
     * Gets as effectiveDosePeriod
     *
     * The period over which the medication is to be taken. Where there are multiple dosageInstruction lines (for example, tapering doses), this is the earliest date and the latest end date of the dosageInstructions.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getEffectiveDosePeriod()
    {
        return $this->effectiveDosePeriod;
    }

    /**
     * Sets a new effectiveDosePeriod
     *
     * The period over which the medication is to be taken. Where there are multiple dosageInstruction lines (for example, tapering doses), this is the earliest date and the latest end date of the dosageInstructions.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $effectiveDosePeriod
     * @return self
     */
    public function setEffectiveDosePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $effectiveDosePeriod = null)
    {
        $this->effectiveDosePeriod = $effectiveDosePeriod;
        return $this;
    }

    /**
     * Adds as dosageInstruction
     *
     * Specific instructions for how the medication is to be used by the patient.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\DosageType $dosageInstruction
     */
    public function addToDosageInstruction(\TKusy\Hl7Fhir\R5\DosageType $dosageInstruction)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * isset dosageInstruction
     *
     * Specific instructions for how the medication is to be used by the patient.
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
     * Specific instructions for how the medication is to be used by the patient.
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
     * Specific instructions for how the medication is to be used by the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\DosageType[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * Sets a new dosageInstruction
     *
     * Specific instructions for how the medication is to be used by the patient.
     *
     * @param \TKusy\Hl7Fhir\R5\DosageType[] $dosageInstruction
     * @return self
     */
    public function setDosageInstruction(array $dosageInstruction = null)
    {
        $this->dosageInstruction = $dosageInstruction;
        return $this;
    }

    /**
     * Gets as dispenseRequest
     *
     * Indicates the specific details for the dispense or medication supply part of a medication request (also known as a Medication Prescription or Medication Order). Note that this information is not always sent with the order. There may be in some settings (e.g. hospitals) institutional or system support for completing the dispense details in the pharmacy department.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationRequestDispenseRequestType
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
     * @param \TKusy\Hl7Fhir\R5\MedicationRequestDispenseRequestType $dispenseRequest
     * @return self
     */
    public function setDispenseRequest(?\TKusy\Hl7Fhir\R5\MedicationRequestDispenseRequestType $dispenseRequest = null)
    {
        $this->dispenseRequest = $dispenseRequest;
        return $this;
    }

    /**
     * Gets as substitution
     *
     * Indicates whether or not substitution can or should be part of the dispense. In some cases, substitution must happen, in other cases substitution must not happen. This block explains the prescriber's intent. If nothing is specified substitution may be done.
     *
     * @return \TKusy\Hl7Fhir\R5\MedicationRequestSubstitutionType
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
     * @param \TKusy\Hl7Fhir\R5\MedicationRequestSubstitutionType $substitution
     * @return self
     */
    public function setSubstitution(?\TKusy\Hl7Fhir\R5\MedicationRequestSubstitutionType $substitution = null)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * Adds as eventHistory
     *
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $eventHistory
     */
    public function addToEventHistory(\TKusy\Hl7Fhir\R5\ReferenceType $eventHistory)
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
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $eventHistory
     * @return self
     */
    public function setEventHistory(array $eventHistory = null)
    {
        $this->eventHistory = $eventHistory;
        return $this;
    }


}

