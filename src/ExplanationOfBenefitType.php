<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: ExplanationOfBenefit
 */
class ExplanationOfBenefitType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this explanation of benefit.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitStatusType $status
     */
    private $status = null;

    /**
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $subType
     */
    private $subType = null;

    /**
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     *
     * @var \TKusy\Hl7FhirR4\UseType $use
     */
    private $use = null;

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The period for which charges are being submitted.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $billablePeriod
     */
    private $billablePeriod = null;

    /**
     * The date this resource was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $enterer
     */
    private $enterer = null;

    /**
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $insurer
     */
    private $insurer = null;

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $provider
     */
    private $provider = null;

    /**
     * The provider-required urgency of processing the request. Typical values include: stat, routine deferred.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $fundsReserveRequested
     */
    private $fundsReserveRequested = null;

    /**
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $fundsReserve
     */
    private $fundsReserve = null;

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitRelatedType[] $related
     */
    private $related = [
        
    ];

    /**
     * Prescription to support the dispensing of pharmacy, device or vision products.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $prescription
     */
    private $prescription = null;

    /**
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $originalPrescription
     */
    private $originalPrescription = null;

    /**
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitPayeeType $payee
     */
    private $payee = null;

    /**
     * A reference to a referral resource.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $referral
     */
    private $referral = null;

    /**
     * Facility where the services were provided.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $facility
     */
    private $facility = null;

    /**
     * The business identifier for the instance of the adjudication request: claim predetermination or preauthorization.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $claim
     */
    private $claim = null;

    /**
     * The business identifier for the instance of the adjudication response: claim, predetermination or preauthorization response.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $claimResponse
     */
    private $claimResponse = null;

    /**
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @var \TKusy\Hl7FhirR4\ClaimProcessingCodesType $outcome
     */
    private $outcome = null;

    /**
     * A human readable description of the status of the adjudication.
     *
     * @var \TKusy\Hl7FhirR4\StringType $disposition
     */
    private $disposition = null;

    /**
     * Reference from the Insurer which is used in later communications which refers to this adjudication.
     *
     * @var \TKusy\Hl7FhirR4\StringType[] $preAuthRef
     */
    private $preAuthRef = [
        
    ];

    /**
     * The timeframe during which the supplied preauthorization reference may be quoted on claims to obtain the adjudication as provided.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType[] $preAuthRefPeriod
     */
    private $preAuthRefPeriod = [
        
    ];

    /**
     * The members of the team who provided the products and services.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitCareTeamType[] $careTeam
     */
    private $careTeam = [
        
    ];

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitSupportingInfoType[] $supportingInfo
     */
    private $supportingInfo = [
        
    ];

    /**
     * Information about diagnoses relevant to the claim items.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitDiagnosisType[] $diagnosis
     */
    private $diagnosis = [
        
    ];

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitProcedureType[] $procedure
     */
    private $procedure = [
        
    ];

    /**
     * This indicates the relative order of a series of EOBs related to different coverages for the same suite of services.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $precedence
     */
    private $precedence = null;

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitInsuranceType[] $insurance
     */
    private $insurance = [
        
    ];

    /**
     * Details of a accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitAccidentType $accident
     */
    private $accident = null;

    /**
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitItemType[] $item
     */
    private $item = [
        
    ];

    /**
     * The first-tier service adjudications for payor added product or service lines.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitAddItemType[] $addItem
     */
    private $addItem = [
        
    ];

    /**
     * The adjudication results which are presented at the header level rather than at the line-item or add-item levels.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[] $adjudication
     */
    private $adjudication = [
        
    ];

    /**
     * Categorized monetary totals for the adjudication.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitTotalType[] $total
     */
    private $total = [
        
    ];

    /**
     * Payment details for the adjudication of the claim.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitPaymentType $payment
     */
    private $payment = null;

    /**
     * A code for the form to be used for printing the content.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $formCode
     */
    private $formCode = null;

    /**
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @var \TKusy\Hl7FhirR4\AttachmentType $form
     */
    private $form = null;

    /**
     * A note that describes or explains adjudication results in a human readable form.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitProcessNoteType[] $processNote
     */
    private $processNote = [
        
    ];

    /**
     * The term of the benefits documented in this response.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $benefitPeriod
     */
    private $benefitPeriod = null;

    /**
     * Balance by Benefit Category.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitBenefitBalanceType[] $benefitBalance
     */
    private $benefitBalance = [
        
    ];

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this explanation of benefit.
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
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
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
     * The status of the resource instance.
     *
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitStatusType
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\ExplanationOfBenefitStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as subType
     *
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $subType
     * @return self
     */
    public function setSubType(\TKusy\Hl7FhirR4\CodeableConceptType $subType)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * Gets as use
     *
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     *
     * @return \TKusy\Hl7FhirR4\UseType
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Sets a new use
     *
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     *
     * @param \TKusy\Hl7FhirR4\UseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7FhirR4\UseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual for forecast reimbursement is sought.
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
     * Gets as billablePeriod
     *
     * The period for which charges are being submitted.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
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
     * @param \TKusy\Hl7FhirR4\PeriodType $billablePeriod
     * @return self
     */
    public function setBillablePeriod(\TKusy\Hl7FhirR4\PeriodType $billablePeriod)
    {
        $this->billablePeriod = $billablePeriod;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date this resource was created.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
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
     * @param \TKusy\Hl7FhirR4\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7FhirR4\DateTimeType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as enterer
     *
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $enterer
     * @return self
     */
    public function setEnterer(\TKusy\Hl7FhirR4\ReferenceType $enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Gets as insurer
     *
     * The party responsible for authorization, adjudication and reimbursement.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $insurer
     * @return self
     */
    public function setInsurer(\TKusy\Hl7FhirR4\ReferenceType $insurer)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * Gets as provider
     *
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $provider
     * @return self
     */
    public function setProvider(\TKusy\Hl7FhirR4\ReferenceType $provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as priority
     *
     * The provider-required urgency of processing the request. Typical values include: stat, routine deferred.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * The provider-required urgency of processing the request. Typical values include: stat, routine deferred.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\CodeableConceptType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as fundsReserveRequested
     *
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $fundsReserveRequested
     * @return self
     */
    public function setFundsReserveRequested(\TKusy\Hl7FhirR4\CodeableConceptType $fundsReserveRequested)
    {
        $this->fundsReserveRequested = $fundsReserveRequested;
        return $this;
    }

    /**
     * Gets as fundsReserve
     *
     * A code, used only on a response to a preauthorization, to indicate whether the benefits payable have been reserved and for whom.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $fundsReserve
     * @return self
     */
    public function setFundsReserve(\TKusy\Hl7FhirR4\CodeableConceptType $fundsReserve)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitRelatedType $related
     */
    public function addToRelated(\TKusy\Hl7FhirR4\ExplanationOfBenefitRelatedType $related)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitRelatedType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitRelatedType[] $related
     * @return self
     */
    public function setRelated(array $related)
    {
        $this->related = $related;
        return $this;
    }

    /**
     * Gets as prescription
     *
     * Prescription to support the dispensing of pharmacy, device or vision products.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * Sets a new prescription
     *
     * Prescription to support the dispensing of pharmacy, device or vision products.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $prescription
     * @return self
     */
    public function setPrescription(\TKusy\Hl7FhirR4\ReferenceType $prescription)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Gets as originalPrescription
     *
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $originalPrescription
     * @return self
     */
    public function setOriginalPrescription(\TKusy\Hl7FhirR4\ReferenceType $originalPrescription)
    {
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * Gets as payee
     *
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitPayeeType
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitPayeeType $payee
     * @return self
     */
    public function setPayee(\TKusy\Hl7FhirR4\ExplanationOfBenefitPayeeType $payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Gets as referral
     *
     * A reference to a referral resource.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * Sets a new referral
     *
     * A reference to a referral resource.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $referral
     * @return self
     */
    public function setReferral(\TKusy\Hl7FhirR4\ReferenceType $referral)
    {
        $this->referral = $referral;
        return $this;
    }

    /**
     * Gets as facility
     *
     * Facility where the services were provided.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $facility
     * @return self
     */
    public function setFacility(\TKusy\Hl7FhirR4\ReferenceType $facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Gets as claim
     *
     * The business identifier for the instance of the adjudication request: claim predetermination or preauthorization.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $claim
     * @return self
     */
    public function setClaim(\TKusy\Hl7FhirR4\ReferenceType $claim)
    {
        $this->claim = $claim;
        return $this;
    }

    /**
     * Gets as claimResponse
     *
     * The business identifier for the instance of the adjudication response: claim, predetermination or preauthorization response.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $claimResponse
     * @return self
     */
    public function setClaimResponse(\TKusy\Hl7FhirR4\ReferenceType $claimResponse)
    {
        $this->claimResponse = $claimResponse;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * The outcome of the claim, predetermination, or preauthorization processing.
     *
     * @return \TKusy\Hl7FhirR4\ClaimProcessingCodesType
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
     * @param \TKusy\Hl7FhirR4\ClaimProcessingCodesType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7FhirR4\ClaimProcessingCodesType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as disposition
     *
     * A human readable description of the status of the adjudication.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $disposition
     * @return self
     */
    public function setDisposition(\TKusy\Hl7FhirR4\StringType $disposition)
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
     * @param \TKusy\Hl7FhirR4\StringType $preAuthRef
     */
    public function addToPreAuthRef(\TKusy\Hl7FhirR4\StringType $preAuthRef)
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
     * @return \TKusy\Hl7FhirR4\StringType[]
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
     * @param \TKusy\Hl7FhirR4\StringType[] $preAuthRef
     * @return self
     */
    public function setPreAuthRef(array $preAuthRef)
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
     * @param \TKusy\Hl7FhirR4\PeriodType $preAuthRefPeriod
     */
    public function addToPreAuthRefPeriod(\TKusy\Hl7FhirR4\PeriodType $preAuthRefPeriod)
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
     * @return \TKusy\Hl7FhirR4\PeriodType[]
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
     * @param \TKusy\Hl7FhirR4\PeriodType[] $preAuthRefPeriod
     * @return self
     */
    public function setPreAuthRefPeriod(array $preAuthRefPeriod)
    {
        $this->preAuthRefPeriod = $preAuthRefPeriod;
        return $this;
    }

    /**
     * Adds as careTeam
     *
     * The members of the team who provided the products and services.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitCareTeamType $careTeam
     */
    public function addToCareTeam(\TKusy\Hl7FhirR4\ExplanationOfBenefitCareTeamType $careTeam)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitCareTeamType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitCareTeamType[] $careTeam
     * @return self
     */
    public function setCareTeam(array $careTeam)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitSupportingInfoType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7FhirR4\ExplanationOfBenefitSupportingInfoType $supportingInfo)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitSupportingInfoType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitSupportingInfoType[] $supportingInfo
     * @return self
     */
    public function setSupportingInfo(array $supportingInfo)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7FhirR4\ExplanationOfBenefitDiagnosisType $diagnosis)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitDiagnosisType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitDiagnosisType[] $diagnosis
     * @return self
     */
    public function setDiagnosis(array $diagnosis)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitProcedureType $procedure
     */
    public function addToProcedure(\TKusy\Hl7FhirR4\ExplanationOfBenefitProcedureType $procedure)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitProcedureType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitProcedureType[] $procedure
     * @return self
     */
    public function setProcedure(array $procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Gets as precedence
     *
     * This indicates the relative order of a series of EOBs related to different coverages for the same suite of services.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
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
     * @param \TKusy\Hl7FhirR4\PositiveIntType $precedence
     * @return self
     */
    public function setPrecedence(\TKusy\Hl7FhirR4\PositiveIntType $precedence)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitInsuranceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7FhirR4\ExplanationOfBenefitInsuranceType $insurance)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitInsuranceType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitInsuranceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * Gets as accident
     *
     * Details of a accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitAccidentType
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAccidentType $accident
     * @return self
     */
    public function setAccident(\TKusy\Hl7FhirR4\ExplanationOfBenefitAccidentType $accident)
    {
        $this->accident = $accident;
        return $this;
    }

    /**
     * Adds as item
     *
     * A claim line. Either a simple (a product or service) or a 'group' of details which can also be a simple items or groups of sub-details.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitItemType $item
     */
    public function addToItem(\TKusy\Hl7FhirR4\ExplanationOfBenefitItemType $item)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitItemType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitItemType[] $item
     * @return self
     */
    public function setItem(array $item)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAddItemType $addItem
     */
    public function addToAddItem(\TKusy\Hl7FhirR4\ExplanationOfBenefitAddItemType $addItem)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitAddItemType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAddItemType[] $addItem
     * @return self
     */
    public function setAddItem(array $addItem)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType $adjudication)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[] $adjudication
     * @return self
     */
    public function setAdjudication(array $adjudication)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitTotalType $total
     */
    public function addToTotal(\TKusy\Hl7FhirR4\ExplanationOfBenefitTotalType $total)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitTotalType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitTotalType[] $total
     * @return self
     */
    public function setTotal(array $total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as payment
     *
     * Payment details for the adjudication of the claim.
     *
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitPaymentType
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitPaymentType $payment
     * @return self
     */
    public function setPayment(\TKusy\Hl7FhirR4\ExplanationOfBenefitPaymentType $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as formCode
     *
     * A code for the form to be used for printing the content.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $formCode
     * @return self
     */
    public function setFormCode(\TKusy\Hl7FhirR4\CodeableConceptType $formCode)
    {
        $this->formCode = $formCode;
        return $this;
    }

    /**
     * Gets as form
     *
     * The actual form, by reference or inclusion, for printing the content or an EOB.
     *
     * @return \TKusy\Hl7FhirR4\AttachmentType
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
     * @param \TKusy\Hl7FhirR4\AttachmentType $form
     * @return self
     */
    public function setForm(\TKusy\Hl7FhirR4\AttachmentType $form)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitProcessNoteType $processNote
     */
    public function addToProcessNote(\TKusy\Hl7FhirR4\ExplanationOfBenefitProcessNoteType $processNote)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitProcessNoteType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitProcessNoteType[] $processNote
     * @return self
     */
    public function setProcessNote(array $processNote)
    {
        $this->processNote = $processNote;
        return $this;
    }

    /**
     * Gets as benefitPeriod
     *
     * The term of the benefits documented in this response.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
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
     * @param \TKusy\Hl7FhirR4\PeriodType $benefitPeriod
     * @return self
     */
    public function setBenefitPeriod(\TKusy\Hl7FhirR4\PeriodType $benefitPeriod)
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitBenefitBalanceType $benefitBalance
     */
    public function addToBenefitBalance(\TKusy\Hl7FhirR4\ExplanationOfBenefitBenefitBalanceType $benefitBalance)
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
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitBenefitBalanceType[]
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
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitBenefitBalanceType[] $benefitBalance
     * @return self
     */
    public function setBenefitBalance(array $benefitBalance)
    {
        $this->benefitBalance = $benefitBalance;
        return $this;
    }


}

