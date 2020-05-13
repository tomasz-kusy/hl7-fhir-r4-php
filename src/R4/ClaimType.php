<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ClaimType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Claim
 */
class ClaimType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this claim.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7Fhir\R4\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $subType
     */
    private $subType = null;

    /**
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     *
     * @var \TKusy\Hl7Fhir\R4\UseType $use
     */
    private $use = null;

    /**
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The period for which charges are being submitted.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $billablePeriod
     */
    private $billablePeriod = null;

    /**
     * The date this resource was created.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $created
     */
    private $created = null;

    /**
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $enterer
     */
    private $enterer = null;

    /**
     * The Insurer who is target of the request.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $insurer
     */
    private $insurer = null;

    /**
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $provider
     */
    private $provider = null;

    /**
     * The provider-required urgency of processing the request. Typical values include: stat, routine deferred.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $fundsReserve
     */
    private $fundsReserve = null;

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimRelatedType[] $related
     */
    private $related = null;

    /**
     * Prescription to support the dispensing of pharmacy, device or vision products.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $prescription
     */
    private $prescription = null;

    /**
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $originalPrescription
     */
    private $originalPrescription = null;

    /**
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimPayeeType $payee
     */
    private $payee = null;

    /**
     * A reference to a referral resource.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $referral
     */
    private $referral = null;

    /**
     * Facility where the services were provided.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $facility
     */
    private $facility = null;

    /**
     * The members of the team who provided the products and services.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimCareTeamType[] $careTeam
     */
    private $careTeam = null;

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimSupportingInfoType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Information about diagnoses relevant to the claim items.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimDiagnosisType[] $diagnosis
     */
    private $diagnosis = null;

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimProcedureType[] $procedure
     */
    private $procedure = null;

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimInsuranceType[] $insurance
     */
    private $insurance = null;

    /**
     * Details of an accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimAccidentType $accident
     */
    private $accident = null;

    /**
     * A claim line. Either a simple product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     *
     * @var \TKusy\Hl7Fhir\R4\ClaimItemType[] $item
     */
    private $item = null;

    /**
     * The total value of the all the items in the claim.
     *
     * @var \TKusy\Hl7Fhir\R4\MoneyType $total
     */
    private $total = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this claim.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A unique identifier assigned to this claim.
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
     * A unique identifier assigned to this claim.
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
     * A unique identifier assigned to this claim.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A unique identifier assigned to this claim.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
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
     * @return \TKusy\Hl7Fhir\R4\FinancialResourceStatusCodesType
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
     * @param \TKusy\Hl7Fhir\R4\FinancialResourceStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\FinancialResourceStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * The category of claim, e.g. oral, pharmacy, vision, institutional, professional.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as subType
     *
     * A finer grained suite of claim type codes which may convey additional information such as Inpatient vs Outpatient and/or a specialty service.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $subType
     * @return self
     */
    public function setSubType(\TKusy\Hl7Fhir\R4\CodeableConceptType $subType)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * Gets as use
     *
     * A code to indicate whether the nature of the request is: to request adjudication of products and services previously rendered; or requesting authorization and adjudication for provision in the future; or requesting the non-binding adjudication of the listed products and services which could be provided in the future.
     *
     * @return \TKusy\Hl7Fhir\R4\UseType
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
     * @param \TKusy\Hl7Fhir\R4\UseType $use
     * @return self
     */
    public function setUse(\TKusy\Hl7Fhir\R4\UseType $use)
    {
        $this->use = $use;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Sets a new patient
     *
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $patient
     * @return self
     */
    public function setPatient(\TKusy\Hl7Fhir\R4\ReferenceType $patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * Gets as billablePeriod
     *
     * The period for which charges are being submitted.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
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
     * @param \TKusy\Hl7Fhir\R4\PeriodType $billablePeriod
     * @return self
     */
    public function setBillablePeriod(\TKusy\Hl7Fhir\R4\PeriodType $billablePeriod)
    {
        $this->billablePeriod = $billablePeriod;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date this resource was created.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7Fhir\R4\DateTimeType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as enterer
     *
     * Individual who created the claim, predetermination or preauthorization.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $enterer
     * @return self
     */
    public function setEnterer(\TKusy\Hl7Fhir\R4\ReferenceType $enterer)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Gets as insurer
     *
     * The Insurer who is target of the request.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * Sets a new insurer
     *
     * The Insurer who is target of the request.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $insurer
     * @return self
     */
    public function setInsurer(\TKusy\Hl7Fhir\R4\ReferenceType $insurer)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * Gets as provider
     *
     * The provider which is responsible for the claim, predetermination or preauthorization.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $provider
     * @return self
     */
    public function setProvider(\TKusy\Hl7Fhir\R4\ReferenceType $provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as priority
     *
     * The provider-required urgency of processing the request. Typical values include: stat, routine deferred.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7Fhir\R4\CodeableConceptType $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as fundsReserve
     *
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getFundsReserve()
    {
        return $this->fundsReserve;
    }

    /**
     * Sets a new fundsReserve
     *
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $fundsReserve
     * @return self
     */
    public function setFundsReserve(\TKusy\Hl7Fhir\R4\CodeableConceptType $fundsReserve)
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
     * @param \TKusy\Hl7Fhir\R4\ClaimRelatedType $related
     */
    public function addToRelated(\TKusy\Hl7Fhir\R4\ClaimRelatedType $related)
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
     * @return \TKusy\Hl7Fhir\R4\ClaimRelatedType[]
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
     * @param \TKusy\Hl7Fhir\R4\ClaimRelatedType[] $related
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $prescription
     * @return self
     */
    public function setPrescription(\TKusy\Hl7Fhir\R4\ReferenceType $prescription)
    {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * Gets as originalPrescription
     *
     * Original prescription which has been superseded by this prescription to support the dispensing of pharmacy services, medications or products.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $originalPrescription
     * @return self
     */
    public function setOriginalPrescription(\TKusy\Hl7Fhir\R4\ReferenceType $originalPrescription)
    {
        $this->originalPrescription = $originalPrescription;
        return $this;
    }

    /**
     * Gets as payee
     *
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @return \TKusy\Hl7Fhir\R4\ClaimPayeeType
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
     * @param \TKusy\Hl7Fhir\R4\ClaimPayeeType $payee
     * @return self
     */
    public function setPayee(\TKusy\Hl7Fhir\R4\ClaimPayeeType $payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Gets as referral
     *
     * A reference to a referral resource.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $referral
     * @return self
     */
    public function setReferral(\TKusy\Hl7Fhir\R4\ReferenceType $referral)
    {
        $this->referral = $referral;
        return $this;
    }

    /**
     * Gets as facility
     *
     * Facility where the services were provided.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $facility
     * @return self
     */
    public function setFacility(\TKusy\Hl7Fhir\R4\ReferenceType $facility)
    {
        $this->facility = $facility;
        return $this;
    }

    /**
     * Adds as careTeam
     *
     * The members of the team who provided the products and services.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ClaimCareTeamType $careTeam
     */
    public function addToCareTeam(\TKusy\Hl7Fhir\R4\ClaimCareTeamType $careTeam)
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
     * @return \TKusy\Hl7Fhir\R4\ClaimCareTeamType[]
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
     * @param \TKusy\Hl7Fhir\R4\ClaimCareTeamType[] $careTeam
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
     * @param \TKusy\Hl7Fhir\R4\ClaimSupportingInfoType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R4\ClaimSupportingInfoType $supportingInfo)
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
     * @return \TKusy\Hl7Fhir\R4\ClaimSupportingInfoType[]
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
     * @param \TKusy\Hl7Fhir\R4\ClaimSupportingInfoType[] $supportingInfo
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
     * @param \TKusy\Hl7Fhir\R4\ClaimDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7Fhir\R4\ClaimDiagnosisType $diagnosis)
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
     * @return \TKusy\Hl7Fhir\R4\ClaimDiagnosisType[]
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
     * @param \TKusy\Hl7Fhir\R4\ClaimDiagnosisType[] $diagnosis
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
     * @param \TKusy\Hl7Fhir\R4\ClaimProcedureType $procedure
     */
    public function addToProcedure(\TKusy\Hl7Fhir\R4\ClaimProcedureType $procedure)
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
     * @return \TKusy\Hl7Fhir\R4\ClaimProcedureType[]
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
     * @param \TKusy\Hl7Fhir\R4\ClaimProcedureType[] $procedure
     * @return self
     */
    public function setProcedure(array $procedure)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ClaimInsuranceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7Fhir\R4\ClaimInsuranceType $insurance)
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
     * @return \TKusy\Hl7Fhir\R4\ClaimInsuranceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ClaimInsuranceType[] $insurance
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
     * Details of an accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @return \TKusy\Hl7Fhir\R4\ClaimAccidentType
     */
    public function getAccident()
    {
        return $this->accident;
    }

    /**
     * Sets a new accident
     *
     * Details of an accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @param \TKusy\Hl7Fhir\R4\ClaimAccidentType $accident
     * @return self
     */
    public function setAccident(\TKusy\Hl7Fhir\R4\ClaimAccidentType $accident)
    {
        $this->accident = $accident;
        return $this;
    }

    /**
     * Adds as item
     *
     * A claim line. Either a simple product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ClaimItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R4\ClaimItemType $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * A claim line. Either a simple product or service or a 'group' of details which can each be a simple items or groups of sub-details.
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
     * A claim line. Either a simple product or service or a 'group' of details which can each be a simple items or groups of sub-details.
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
     * A claim line. Either a simple product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     *
     * @return \TKusy\Hl7Fhir\R4\ClaimItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * A claim line. Either a simple product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     *
     * @param \TKusy\Hl7Fhir\R4\ClaimItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total value of the all the items in the claim.
     *
     * @return \TKusy\Hl7Fhir\R4\MoneyType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total value of the all the items in the claim.
     *
     * @param \TKusy\Hl7Fhir\R4\MoneyType $total
     * @return self
     */
    public function setTotal(\TKusy\Hl7Fhir\R4\MoneyType $total)
    {
        $this->total = $total;
        return $this;
    }


}

