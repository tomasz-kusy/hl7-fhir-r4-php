<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponseType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ClaimResponse
 */
class ClaimResponseType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this claim response.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $traceNumber
     */
    private $traceNumber = null;

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $subType
     */
    private $subType = null;

    /**
     * A code to indicate whether the nature of the request is: Claim - A request to an Insurer to adjudicate the supplied charges for health care goods and services under the identified policy and to pay the determined Benefit amount, if any; Preauthorization - A request to an Insurer to adjudicate the supplied proposed future charges for health care goods and services under the identified policy and to approve the services and provide the expected benefit amounts and potentially to reserve funds to pay the benefits when Claims for the indicated services are later submitted; or, Pre-determination - A request to an Insurer to adjudicate the supplied 'what if' charges for health care goods and services under the identified policy and report back what the Benefit payable would be had the services actually been provided.
     *
     * @var \TKusy\Hl7Fhir\R5\UseType $use
     */
    private $use = null;

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for facast reimbursement is sought.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The date this resource was created.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $created
     */
    private $created = null;

    /**
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $insurer
     */
    private $insurer = null;

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requestor
     */
    private $requestor = null;

    /**
     * Original request resource reference.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $request
     */
    private $request = null;

    /**
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimProcessingCodesType $outcome
     */
    private $outcome = null;

    /**
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $decision
     */
    private $decision = null;

    /**
     * A human readable description of the status of the adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $disposition
     */
    private $disposition = null;

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $preAuthRef
     */
    private $preAuthRef = null;

    /**
     * The time frame during which this authorization is effective.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $preAuthPeriod
     */
    private $preAuthPeriod = null;

    /**
     * Information code for an event with a corresponding date or period.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseEventType[] $event
     */
    private $event = null;

    /**
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $payeeType
     */
    private $payeeType = null;

    /**
     * Healthcare encounters related to this claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $encounter
     */
    private $encounter = null;

    /**
     * A package billing code or bundle code used to group products and services to a particular health condition (such as heart attack) which is based on a predetermined grouping code system.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisRelatedGroup
     */
    private $diagnosisRelatedGroup = null;

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseItemType[] $item
     */
    private $item = null;

    /**
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseAddItemType[] $addItem
     */
    private $addItem = null;

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[] $adjudication
     */
    private $adjudication = null;

    /**
     * Categorized monetary totals for the adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseTotalType[] $total
     */
    private $total = null;

    /**
     * Payment details for the adjudication of the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponsePaymentType $payment
     */
    private $payment = null;

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $fundsReserve
     */
    private $fundsReserve = null;

    /**
     * A code for the form to be used for printing the content.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $formCode
     */
    private $formCode = null;

    /**
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @var \TKusy\Hl7Fhir\R5\AttachmentType $form
     */
    private $form = null;

    /**
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseProcessNoteType[] $processNote
     */
    private $processNote = null;

    /**
     * Request for additional supporting or authorizing information.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $communicationRequest
     */
    private $communicationRequest = null;

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseInsuranceType[] $insurance
     */
    private $insurance = null;

    /**
     * Errors encountered during the processing of the adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimResponseErrorType[] $error
     */
    private $error = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this claim response.
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
     * A unique identifier assigned to this claim response.
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
     * A unique identifier assigned to this claim response.
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
     * A unique identifier assigned to this claim response.
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
     * A unique identifier assigned to this claim response.
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
     * Adds as traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $traceNumber
     */
    public function addToTraceNumber(\TKusy\Hl7Fhir\R5\IdentifierType $traceNumber)
    {
        $this->traceNumber[] = $traceNumber;
        return $this;
    }

    /**
     * isset traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTraceNumber($index)
    {
        return isset($this->traceNumber[$index]);
    }

    /**
     * unset traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTraceNumber($index)
    {
        unset($this->traceNumber[$index]);
    }

    /**
     * Gets as traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
     */
    public function getTraceNumber()
    {
        return $this->traceNumber;
    }

    /**
     * Sets a new traceNumber
     *
     * Trace number for tracking purposes. May be defined at the jurisdiction level or between trading partners.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $traceNumber
     * @return self
     */
    public function setTraceNumber(array $traceNumber = null)
    {
        $this->traceNumber = $traceNumber;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the resource instance.
     *
     * @return \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the resource instance.
     *
     * @param \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as subType
     *
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Sets a new subType
     *
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $subType
     * @return self
     */
    public function setSubType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $subType = null)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * Gets as use
     *
     * A code to indicate whether the nature of the request is: Claim - A request to an Insurer to adjudicate the supplied charges for health care goods and services under the identified policy and to pay the determined Benefit amount, if any; Preauthorization - A request to an Insurer to adjudicate the supplied proposed future charges for health care goods and services under the identified policy and to approve the services and provide the expected benefit amounts and potentially to reserve funds to pay the benefits when Claims for the indicated services are later submitted; or, Pre-determination - A request to an Insurer to adjudicate the supplied 'what if' charges for health care goods and services under the identified policy and report back what the Benefit payable would be had the services actually been provided.
     *
     * @return \TKusy\Hl7Fhir\R5\UseType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * A code to indicate whether the nature of the request is: Claim - A request to an Insurer to adjudicate the supplied charges for health care goods and services under the identified policy and to pay the determined Benefit amount, if any; Preauthorization - A request to an Insurer to adjudicate the supplied proposed future charges for health care goods and services under the identified policy and to approve the services and provide the expected benefit amounts and potentially to reserve funds to pay the benefits when Claims for the indicated services are later submitted; or, Pre-determination - A request to an Insurer to adjudicate the supplied 'what if' charges for health care goods and services under the identified policy and report back what the Benefit payable would be had the services actually been provided.
     *
     * @param \TKusy\Hl7Fhir\R5\UseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7Fhir\R5\UseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for facast reimbursement is sought.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for facast reimbursement is sought.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7Fhir\R5\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date this resource was created.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * The date this resource was created.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7Fhir\R5\DateTimeType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as insurer
     *
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * Sets a new insurer
     *
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $insurer
     * @return self
     */
    public function setInsurer(?\TKusy\Hl7Fhir\R5\ReferenceType $insurer = null)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * Gets as requestor
     *
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Sets a new requestor
     *
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $requestor
     * @return self
     */
    public function setRequestor(?\TKusy\Hl7Fhir\R5\ReferenceType $requestor = null)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Gets as request
     *
     * Original request resource reference.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * Original request resource reference.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $request
     * @return self
     */
    public function setRequest(?\TKusy\Hl7Fhir\R5\ReferenceType $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimProcessingCodesType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimProcessingCodesType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7Fhir\R5\ClaimProcessingCodesType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as decision
     *
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Sets a new decision
     *
     * The result of the claim, predetermination, or preauthorization adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $decision
     * @return self
     */
    public function setDecision(?\TKusy\Hl7Fhir\R5\CodeableConceptType $decision = null)
    {
        $this->decision = $decision;
        return $this;
    }

    /**
     * Gets as disposition
     *
     * A human readable description of the status of the adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Sets a new disposition
     *
     * A human readable description of the status of the adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $disposition
     * @return self
     */
    public function setDisposition(?\TKusy\Hl7Fhir\R5\StringType $disposition = null)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Gets as preAuthRef
     *
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * Sets a new preAuthRef
     *
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $preAuthRef
     * @return self
     */
    public function setPreAuthRef(?\TKusy\Hl7Fhir\R5\StringType $preAuthRef = null)
    {
        $this->preAuthRef = $preAuthRef;
        return $this;
    }

    /**
     * Gets as preAuthPeriod
     *
     * The time frame during which this authorization is effective.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPreAuthPeriod()
    {
        return $this->preAuthPeriod;
    }

    /**
     * Sets a new preAuthPeriod
     *
     * The time frame during which this authorization is effective.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $preAuthPeriod
     * @return self
     */
    public function setPreAuthPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $preAuthPeriod = null)
    {
        $this->preAuthPeriod = $preAuthPeriod;
        return $this;
    }

    /**
     * Adds as event
     *
     * Information code for an event with a corresponding date or period.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseEventType $event
     */
    public function addToEvent(\TKusy\Hl7Fhir\R5\ClaimResponseEventType $event)
    {
        $this->event[] = $event;
        return $this;
    }

    /**
     * isset event
     *
     * Information code for an event with a corresponding date or period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvent($index)
    {
        return isset($this->event[$index]);
    }

    /**
     * unset event
     *
     * Information code for an event with a corresponding date or period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvent($index)
    {
        unset($this->event[$index]);
    }

    /**
     * Gets as event
     *
     * Information code for an event with a corresponding date or period.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseEventType[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * Information code for an event with a corresponding date or period.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseEventType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Gets as payeeType
     *
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPayeeType()
    {
        return $this->payeeType;
    }

    /**
     * Sets a new payeeType
     *
     * Type of Party to be reimbursed: subscriber, provider, other.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $payeeType
     * @return self
     */
    public function setPayeeType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $payeeType = null)
    {
        $this->payeeType = $payeeType;
        return $this;
    }

    /**
     * Adds as encounter
     *
     * Healthcare encounters related to this claim.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    public function addToEncounter(\TKusy\Hl7Fhir\R5\ReferenceType $encounter)
    {
        $this->encounter[] = $encounter;
        return $this;
    }

    /**
     * isset encounter
     *
     * Healthcare encounters related to this claim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncounter($index)
    {
        return isset($this->encounter[$index]);
    }

    /**
     * unset encounter
     *
     * Healthcare encounters related to this claim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncounter($index)
    {
        unset($this->encounter[$index]);
    }

    /**
     * Gets as encounter
     *
     * Healthcare encounters related to this claim.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * Healthcare encounters related to this claim.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $encounter
     * @return self
     */
    public function setEncounter(array $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as diagnosisRelatedGroup
     *
     * A package billing code or bundle code used to group products and services to a particular health condition (such as heart attack) which is based on a predetermined grouping code system.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getDiagnosisRelatedGroup()
    {
        return $this->diagnosisRelatedGroup;
    }

    /**
     * Sets a new diagnosisRelatedGroup
     *
     * A package billing code or bundle code used to group products and services to a particular health condition (such as heart attack) which is based on a predetermined grouping code system.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisRelatedGroup
     * @return self
     */
    public function setDiagnosisRelatedGroup(?\TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisRelatedGroup = null)
    {
        $this->diagnosisRelatedGroup = $diagnosisRelatedGroup;
        return $this;
    }

    /**
     * Adds as item
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\ClaimResponseItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseItemType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as addItem
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseAddItemType $addItem
     */
    public function addToAddItem(\TKusy\Hl7Fhir\R5\ClaimResponseAddItemType $addItem)
    {
        $this->addItem[] = $addItem;
        return $this;
    }

    /**
     * isset addItem
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddItem($index)
    {
        return isset($this->addItem[$index]);
    }

    /**
     * unset addItem
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddItem($index)
    {
        unset($this->addItem[$index]);
    }

    /**
     * Gets as addItem
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseAddItemType[]
     */
    public function getAddItem()
    {
        return $this->addItem;
    }

    /**
     * Sets a new addItem
     *
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseAddItemType[] $addItem
     * @return self
     */
    public function setAddItem(array $addItem = null)
    {
        $this->addItem = $addItem;
        return $this;
    }

    /**
     * Adds as adjudication
     *
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType $adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * isset adjudication
     *
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdjudication($index)
    {
        return isset($this->adjudication[$index]);
    }

    /**
     * unset adjudication
     *
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdjudication($index)
    {
        unset($this->adjudication[$index]);
    }

    /**
     * Gets as adjudication
     *
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * Sets a new adjudication
     *
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseAdjudicationType[] $adjudication
     * @return self
     */
    public function setAdjudication(array $adjudication = null)
    {
        $this->adjudication = $adjudication;
        return $this;
    }

    /**
     * Adds as total
     *
     * Categorized monetary totals for the adjudication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseTotalType $total
     */
    public function addToTotal(\TKusy\Hl7Fhir\R5\ClaimResponseTotalType $total)
    {
        $this->total[] = $total;
        return $this;
    }

    /**
     * isset total
     *
     * Categorized monetary totals for the adjudication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotal($index)
    {
        return isset($this->total[$index]);
    }

    /**
     * unset total
     *
     * Categorized monetary totals for the adjudication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotal($index)
    {
        unset($this->total[$index]);
    }

    /**
     * Gets as total
     *
     * Categorized monetary totals for the adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseTotalType[]
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * Categorized monetary totals for the adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseTotalType[] $total
     * @return self
     */
    public function setTotal(array $total = null)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as payment
     *
     * Payment details for the adjudication of the claim.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponsePaymentType
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * Payment details for the adjudication of the claim.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponsePaymentType $payment
     * @return self
     */
    public function setPayment(?\TKusy\Hl7Fhir\R5\ClaimResponsePaymentType $payment = null)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as fundsReserve
     *
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFundsReserve()
    {
        return $this->fundsReserve;
    }

    /**
     * Sets a new fundsReserve
     *
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $fundsReserve
     * @return self
     */
    public function setFundsReserve(?\TKusy\Hl7Fhir\R5\CodeableConceptType $fundsReserve = null)
    {
        $this->fundsReserve = $fundsReserve;
        return $this;
    }

    /**
     * Gets as formCode
     *
     * A code for the form to be used for printing the content.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFormCode()
    {
        return $this->formCode;
    }

    /**
     * Sets a new formCode
     *
     * A code for the form to be used for printing the content.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $formCode
     * @return self
     */
    public function setFormCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $formCode = null)
    {
        $this->formCode = $formCode;
        return $this;
    }

    /**
     * Gets as form
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @return \TKusy\Hl7Fhir\R5\AttachmentType
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Sets a new form
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @param \TKusy\Hl7Fhir\R5\AttachmentType $form
     * @return self
     */
    public function setForm(?\TKusy\Hl7Fhir\R5\AttachmentType $form = null)
    {
        $this->form = $form;
        return $this;
    }

    /**
     * Adds as processNote
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseProcessNoteType $processNote
     */
    public function addToProcessNote(\TKusy\Hl7Fhir\R5\ClaimResponseProcessNoteType $processNote)
    {
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * isset processNote
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessNote($index)
    {
        return isset($this->processNote[$index]);
    }

    /**
     * unset processNote
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessNote($index)
    {
        unset($this->processNote[$index]);
    }

    /**
     * Gets as processNote
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseProcessNoteType[]
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }

    /**
     * Sets a new processNote
     *
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseProcessNoteType[] $processNote
     * @return self
     */
    public function setProcessNote(array $processNote = null)
    {
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * Adds as communicationRequest
     *
     * Request for additional supporting or authorizing information.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $communicationRequest
     */
    public function addToCommunicationRequest(\TKusy\Hl7Fhir\R5\ReferenceType $communicationRequest)
    {
        $this->communicationRequest[] = $communicationRequest;
        return $this;
    }

    /**
     * isset communicationRequest
     *
     * Request for additional supporting or authorizing information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommunicationRequest($index)
    {
        return isset($this->communicationRequest[$index]);
    }

    /**
     * unset communicationRequest
     *
     * Request for additional supporting or authorizing information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommunicationRequest($index)
    {
        unset($this->communicationRequest[$index]);
    }

    /**
     * Gets as communicationRequest
     *
     * Request for additional supporting or authorizing information.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getCommunicationRequest()
    {
        return $this->communicationRequest;
    }

    /**
     * Sets a new communicationRequest
     *
     * Request for additional supporting or authorizing information.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $communicationRequest
     * @return self
     */
    public function setCommunicationRequest(array $communicationRequest = null)
    {
        $this->communicationRequest = $communicationRequest;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseInsuranceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7Fhir\R5\ClaimResponseInsuranceType $insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * isset insurance
     *
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
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
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
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
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseInsuranceType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseInsuranceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance = null)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Adds as error
     *
     * Errors encountered during the processing of the adjudication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseErrorType $error
     */
    public function addToError(\TKusy\Hl7Fhir\R5\ClaimResponseErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * Errors encountered during the processing of the adjudication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * Errors encountered during the processing of the adjudication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * Errors encountered during the processing of the adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimResponseErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * Errors encountered during the processing of the adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\ClaimResponseErrorType[] $error
     * @return self
     */
    public function setError(array $error = null)
    {
        $this->error = $error;
        return $this;
    }


}

