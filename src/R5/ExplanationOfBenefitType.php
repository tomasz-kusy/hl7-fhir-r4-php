<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ExplanationOfBenefitType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: ExplanationOfBenefit
 */
class ExplanationOfBenefitType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this explanation of benefit.
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
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitStatusType $status
     */
    private $status = null;

    /**
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The period for which charges are being submitted.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $billablePeriod
     */
    private $billablePeriod = null;

    /**
     * The date this resource was created.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $created
     */
    private $created = null;

    /**
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $enterer
     */
    private $enterer = null;

    /**
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $insurer
     */
    private $insurer = null;

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $provider
     */
    private $provider = null;

    /**
     * The provider-required urgency of processing the request. Typical values include: stat, normal deferred.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $fundsReserveRequested
     */
    private $fundsReserveRequested = null;

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $fundsReserve
     */
    private $fundsReserve = null;

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitRelatedType[] $related
     */
    private $related = null;

    /**
     * Prescription is the document/authorization given to the claim author for them to provide products and services for which consideration (reimbursement) is sought. Could be a RX for medications, an 'order' for oxygen or wheelchair or physiotherapy treatments.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $prescription
     */
    private $prescription = null;

    /**
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $originalPrescription
     */
    private $originalPrescription = null;

    /**
     * Information code for an event with a corresponding date or period.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitEventType[] $event
     */
    private $event = null;

    /**
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitPayeeType $payee
     */
    private $payee = null;

    /**
     * The referral information received by the claim author, it is not to be used when the author generates a referral for a patient. A copy of that referral may be provided as supporting information. Some insurers require proof of referral to pay for services or to pay specialist rates for services.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $referral
     */
    private $referral = null;

    /**
     * Healthcare encounters related to this claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $encounter
     */
    private $encounter = null;

    /**
     * Facility where the services were provided.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $facility
     */
    private $facility = null;

    /**
     * The business identifier for the instance of the adjudication request: claim predetermination or preauthorization.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $claim
     */
    private $claim = null;

    /**
     * The business identifier for the instance of the adjudication response: claim, predetermination or preauthorization response.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $claimResponse
     */
    private $claimResponse = null;

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
     * @var \TKusy\Hl7Fhir\R5\StringType[] $preAuthRef
     */
    private $preAuthRef = null;

    /**
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType[] $preAuthRefPeriod
     */
    private $preAuthRefPeriod = null;

    /**
     * A package billing code or bundle code used to group products and services to a particular health condition (such as heart attack) which is based on a predetermined grouping code system.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisRelatedGroup
     */
    private $diagnosisRelatedGroup = null;

    /**
     * The members of the team who provided the products and services.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitCareTeamType[] $careTeam
     */
    private $careTeam = null;

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitSupportingInfoType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Information about diagnoses relevant to the claim items.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitDiagnosisType[] $diagnosis
     */
    private $diagnosis = null;

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcedureType[] $procedure
     */
    private $procedure = null;

    /**
     * This indicates the relative order of a series of EOBs related to different coverages for the same suite of services.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $precedence
     */
    private $precedence = null;

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitInsuranceType[] $insurance
     */
    private $insurance = null;

    /**
     * Details of a accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAccidentType $accident
     */
    private $accident = null;

    /**
     * The amount paid by the patient, in total at the claim claim level or specifically for the item and detail level, to the provider for goods and services.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $patientPaid
     */
    private $patientPaid = null;

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitItemType[] $item
     */
    private $item = null;

    /**
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAddItemType[] $addItem
     */
    private $addItem = null;

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAdjudicationType[] $adjudication
     */
    private $adjudication = null;

    /**
     * Categorized monetary totals for the adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitTotalType[] $total
     */
    private $total = null;

    /**
     * Payment details for the adjudication of the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitPaymentType $payment
     */
    private $payment = null;

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
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcessNoteType[] $processNote
     */
    private $processNote = null;

    /**
     * The term of the benefits documented in this response.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $benefitPeriod
     */
    private $benefitPeriod = null;

    /**
     * Balance by Benefit Category.
     *
     * @var \TKusy\Hl7Fhir\R5\ExplanationOfBenefitBenefitBalanceType[] $benefitBalance
     */
    private $benefitBalance = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this explanation of benefit.
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
     * A unique identifier assigned to this explanation of benefit.
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
     * A unique identifier assigned to this explanation of benefit.
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
     * A unique identifier assigned to this explanation of benefit.
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
     * A unique identifier assigned to this explanation of benefit.
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitStatusType
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
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
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
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
     * Gets as billablePeriod
     *
     * The period for which charges are being submitted.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getBillablePeriod()
    {
        return $this->billablePeriod;
    }

    /**
     * Sets a new billablePeriod
     *
     * The period for which charges are being submitted.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $billablePeriod
     * @return self
     */
    public function setBillablePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $billablePeriod = null)
    {
        $this->billablePeriod = $billablePeriod;
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
     * Gets as enterer
     *
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * Sets a new enterer
     *
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $enterer
     * @return self
     */
    public function setEnterer(?\TKusy\Hl7Fhir\R5\ReferenceType $enterer = null)
    {
        $this->enterer = $enterer;
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
     * Gets as provider
     *
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $provider
     * @return self
     */
    public function setProvider(?\TKusy\Hl7Fhir\R5\ReferenceType $provider = null)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as priority
     *
     * The provider-required urgency of processing the request. Typical values include: stat, normal deferred.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * The provider-required urgency of processing the request. Typical values include: stat, normal deferred.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(?\TKusy\Hl7Fhir\R5\CodeableConceptType $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as fundsReserveRequested
     *
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getFundsReserveRequested()
    {
        return $this->fundsReserveRequested;
    }

    /**
     * Sets a new fundsReserveRequested
     *
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $fundsReserveRequested
     * @return self
     */
    public function setFundsReserveRequested(?\TKusy\Hl7Fhir\R5\CodeableConceptType $fundsReserveRequested = null)
    {
        $this->fundsReserveRequested = $fundsReserveRequested;
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
     * Adds as related
     *
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitRelatedType $related
     */
    public function addToRelated(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitRelatedType $related)
    {
        $this->related[] = $related;
        return $this;
    }

    /**
     * isset related
     *
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelated($index)
    {
        return isset($this->related[$index]);
    }

    /**
     * unset related
     *
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelated($index)
    {
        unset($this->related[$index]);
    }

    /**
     * Gets as related
     *
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitRelatedType[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Sets a new related
     *
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitRelatedType[] $related
     * @return self
     */
    public function setRelated(array $related = null)
    {
        $this->related = $related;
        return $this;
    }

    /**
     * Gets as prescription
     *
     * Prescription is the document/authorization given to the claim author for them to provide products and services for which consideration (reimbursement) is sought. Could be a RX for medications, an 'order' for oxygen or wheelchair or physiotherapy treatments.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * Sets a new prescription
     *
     * Prescription is the document/authorization given to the claim author for them to provide products and services for which consideration (reimbursement) is sought. Could be a RX for medications, an 'order' for oxygen or wheelchair or physiotherapy treatments.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $prescription
     * @return self
     */
    public function setPrescription(?\TKusy\Hl7Fhir\R5\ReferenceType $prescription = null)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Gets as originalPrescription
     *
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOriginalPrescription()
    {
        return $this->originalPrescription;
    }

    /**
     * Sets a new originalPrescription
     *
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $originalPrescription
     * @return self
     */
    public function setOriginalPrescription(?\TKusy\Hl7Fhir\R5\ReferenceType $originalPrescription = null)
    {
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * Adds as event
     *
     * Information code for an event with a corresponding date or period.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitEventType $event
     */
    public function addToEvent(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitEventType $event)
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitEventType[]
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitEventType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Gets as payee
     *
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitPayeeType
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * Sets a new payee
     *
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitPayeeType $payee
     * @return self
     */
    public function setPayee(?\TKusy\Hl7Fhir\R5\ExplanationOfBenefitPayeeType $payee = null)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Gets as referral
     *
     * The referral information received by the claim author, it is not to be used when the author generates a referral for a patient. A copy of that referral may be provided as supporting information. Some insurers require proof of referral to pay for services or to pay specialist rates for services.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * Sets a new referral
     *
     * The referral information received by the claim author, it is not to be used when the author generates a referral for a patient. A copy of that referral may be provided as supporting information. Some insurers require proof of referral to pay for services or to pay specialist rates for services.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $referral
     * @return self
     */
    public function setReferral(?\TKusy\Hl7Fhir\R5\ReferenceType $referral = null)
    {
        $this->referral = $referral;
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
     * Gets as facility
     *
     * Facility where the services were provided.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Sets a new facility
     *
     * Facility where the services were provided.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $facility
     * @return self
     */
    public function setFacility(?\TKusy\Hl7Fhir\R5\ReferenceType $facility = null)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Gets as claim
     *
     * The business identifier for the instance of the adjudication request: claim predetermination or preauthorization.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getClaim()
    {
        return $this->claim;
    }

    /**
     * Sets a new claim
     *
     * The business identifier for the instance of the adjudication request: claim predetermination or preauthorization.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $claim
     * @return self
     */
    public function setClaim(?\TKusy\Hl7Fhir\R5\ReferenceType $claim = null)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * Gets as claimResponse
     *
     * The business identifier for the instance of the adjudication response: claim, predetermination or preauthorization response.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * Sets a new claimResponse
     *
     * The business identifier for the instance of the adjudication response: claim, predetermination or preauthorization response.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $claimResponse
     * @return self
     */
    public function setClaimResponse(?\TKusy\Hl7Fhir\R5\ReferenceType $claimResponse = null)
    {
        $this->claimResponse = $claimResponse;
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
     * Adds as preAuthRef
     *
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\StringType $preAuthRef
     */
    public function addToPreAuthRef(\TKusy\Hl7Fhir\R5\StringType $preAuthRef)
    {
        $this->preAuthRef[] = $preAuthRef;
        return $this;
    }

    /**
     * isset preAuthRef
     *
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreAuthRef($index)
    {
        return isset($this->preAuthRef[$index]);
    }

    /**
     * unset preAuthRef
     *
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreAuthRef($index)
    {
        unset($this->preAuthRef[$index]);
    }

    /**
     * Gets as preAuthRef
     *
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType[]
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
     * @param \TKusy\Hl7Fhir\R5\StringType[] $preAuthRef
     * @return self
     */
    public function setPreAuthRef(array $preAuthRef = null)
    {
        $this->preAuthRef = $preAuthRef;
        return $this;
    }

    /**
     * Adds as preAuthRefPeriod
     *
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PeriodType $preAuthRefPeriod
     */
    public function addToPreAuthRefPeriod(\TKusy\Hl7Fhir\R5\PeriodType $preAuthRefPeriod)
    {
        $this->preAuthRefPeriod[] = $preAuthRefPeriod;
        return $this;
    }

    /**
     * isset preAuthRefPeriod
     *
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreAuthRefPeriod($index)
    {
        return isset($this->preAuthRefPeriod[$index]);
    }

    /**
     * unset preAuthRefPeriod
     *
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreAuthRefPeriod($index)
    {
        unset($this->preAuthRefPeriod[$index]);
    }

    /**
     * Gets as preAuthRefPeriod
     *
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType[]
     */
    public function getPreAuthRefPeriod()
    {
        return $this->preAuthRefPeriod;
    }

    /**
     * Sets a new preAuthRefPeriod
     *
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType[] $preAuthRefPeriod
     * @return self
     */
    public function setPreAuthRefPeriod(array $preAuthRefPeriod = null)
    {
        $this->preAuthRefPeriod = $preAuthRefPeriod;
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
     * Adds as careTeam
     *
     * The members of the team who provided the products and services.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitCareTeamType $careTeam
     */
    public function addToCareTeam(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitCareTeamType $careTeam)
    {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * isset careTeam
     *
     * The members of the team who provided the products and services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCareTeam($index)
    {
        return isset($this->careTeam[$index]);
    }

    /**
     * unset careTeam
     *
     * The members of the team who provided the products and services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCareTeam($index)
    {
        unset($this->careTeam[$index]);
    }

    /**
     * Gets as careTeam
     *
     * The members of the team who provided the products and services.
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitCareTeamType[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * Sets a new careTeam
     *
     * The members of the team who provided the products and services.
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitCareTeamType[] $careTeam
     * @return self
     */
    public function setCareTeam(array $careTeam = null)
    {
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * Adds as supportingInfo
     *
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitSupportingInfoType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitSupportingInfoType $supportingInfo)
    {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * isset supportingInfo
     *
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
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
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
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
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitSupportingInfoType[]
     */
    public function getSupportingInfo()
    {
        return $this->supportingInfo;
    }

    /**
     * Sets a new supportingInfo
     *
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitSupportingInfoType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo = null)
    {
        $this->supportingInfo = $supportingInfo;
        return $this;
    }

    /**
     * Adds as diagnosis
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitDiagnosisType $diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * isset diagnosis
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiagnosis($index)
    {
        return isset($this->diagnosis[$index]);
    }

    /**
     * unset diagnosis
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiagnosis($index)
    {
        unset($this->diagnosis[$index]);
    }

    /**
     * Gets as diagnosis
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitDiagnosisType[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Sets a new diagnosis
     *
     * Information about diagnoses relevant to the claim items.
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitDiagnosisType[] $diagnosis
     * @return self
     */
    public function setDiagnosis(array $diagnosis = null)
    {
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * Adds as procedure
     *
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcedureType $procedure
     */
    public function addToProcedure(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcedureType $procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * isset procedure
     *
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcedure($index)
    {
        return isset($this->procedure[$index]);
    }

    /**
     * unset procedure
     *
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcedure($index)
    {
        unset($this->procedure[$index]);
    }

    /**
     * Gets as procedure
     *
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcedureType[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcedureType[] $procedure
     * @return self
     */
    public function setProcedure(array $procedure = null)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Gets as precedence
     *
     * This indicates the relative order of a series of EOBs related to different coverages for the same suite of services.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getPrecedence()
    {
        return $this->precedence;
    }

    /**
     * Sets a new precedence
     *
     * This indicates the relative order of a series of EOBs related to different coverages for the same suite of services.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $precedence
     * @return self
     */
    public function setPrecedence(?\TKusy\Hl7Fhir\R5\PositiveIntType $precedence = null)
    {
        $this->precedence = $precedence;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitInsuranceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitInsuranceType $insurance)
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitInsuranceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitInsuranceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance = null)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Gets as accident
     *
     * Details of a accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAccidentType
     */
    public function getAccident()
    {
        return $this->accident;
    }

    /**
     * Sets a new accident
     *
     * Details of a accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAccidentType $accident
     * @return self
     */
    public function setAccident(?\TKusy\Hl7Fhir\R5\ExplanationOfBenefitAccidentType $accident = null)
    {
        $this->accident = $accident;
        return $this;
    }

    /**
     * Gets as patientPaid
     *
     * The amount paid by the patient, in total at the claim claim level or specifically for the item and detail level, to the provider for goods and services.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getPatientPaid()
    {
        return $this->patientPaid;
    }

    /**
     * Sets a new patientPaid
     *
     * The amount paid by the patient, in total at the claim claim level or specifically for the item and detail level, to the provider for goods and services.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $patientPaid
     * @return self
     */
    public function setPatientPaid(?\TKusy\Hl7Fhir\R5\MoneyType $patientPaid = null)
    {
        $this->patientPaid = $patientPaid;
        return $this;
    }

    /**
     * Adds as item
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitItemType $item)
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitItemType[]
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitItemType[] $item
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAddItemType $addItem
     */
    public function addToAddItem(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitAddItemType $addItem)
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAddItemType[]
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAddItemType[] $addItem
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitAdjudicationType $adjudication)
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAdjudicationType[]
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitAdjudicationType[] $adjudication
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitTotalType $total
     */
    public function addToTotal(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitTotalType $total)
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitTotalType[]
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitTotalType[] $total
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitPaymentType
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitPaymentType $payment
     * @return self
     */
    public function setPayment(?\TKusy\Hl7Fhir\R5\ExplanationOfBenefitPaymentType $payment = null)
    {
        $this->payment = $payment;
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcessNoteType $processNote
     */
    public function addToProcessNote(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcessNoteType $processNote)
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
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcessNoteType[]
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
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitProcessNoteType[] $processNote
     * @return self
     */
    public function setProcessNote(array $processNote = null)
    {
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * Gets as benefitPeriod
     *
     * The term of the benefits documented in this response.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getBenefitPeriod()
    {
        return $this->benefitPeriod;
    }

    /**
     * Sets a new benefitPeriod
     *
     * The term of the benefits documented in this response.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $benefitPeriod
     * @return self
     */
    public function setBenefitPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $benefitPeriod = null)
    {
        $this->benefitPeriod = $benefitPeriod;
        return $this;
    }

    /**
     * Adds as benefitBalance
     *
     * Balance by Benefit Category.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitBenefitBalanceType $benefitBalance
     */
    public function addToBenefitBalance(\TKusy\Hl7Fhir\R5\ExplanationOfBenefitBenefitBalanceType $benefitBalance)
    {
        $this->benefitBalance[] = $benefitBalance;
        return $this;
    }

    /**
     * isset benefitBalance
     *
     * Balance by Benefit Category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBenefitBalance($index)
    {
        return isset($this->benefitBalance[$index]);
    }

    /**
     * unset benefitBalance
     *
     * Balance by Benefit Category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBenefitBalance($index)
    {
        unset($this->benefitBalance[$index]);
    }

    /**
     * Gets as benefitBalance
     *
     * Balance by Benefit Category.
     *
     * @return \TKusy\Hl7Fhir\R5\ExplanationOfBenefitBenefitBalanceType[]
     */
    public function getBenefitBalance()
    {
        return $this->benefitBalance;
    }

    /**
     * Sets a new benefitBalance
     *
     * Balance by Benefit Category.
     *
     * @param \TKusy\Hl7Fhir\R5\ExplanationOfBenefitBenefitBalanceType[] $benefitBalance
     * @return self
     */
    public function setBenefitBalance(array $benefitBalance = null)
    {
        $this->benefitBalance = $benefitBalance;
        return $this;
    }


}

