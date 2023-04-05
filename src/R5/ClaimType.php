<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Claim
 */
class ClaimType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this claim.
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
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
     * The Insurer who is target of the request.
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
     * The provider-required urgency of processing the request. Typical values include: stat, normal, deferred.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $priority
     */
    private $priority = null;

    /**
     * A code to indicate whether and for whom funds are to be reserved for future claims.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $fundsReserve
     */
    private $fundsReserve = null;

    /**
     * Other claims which are related to this claim such as prior submissions or claims for related services or for the same event.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimRelatedType[] $related
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
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimPayeeType $payee
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
     * A package billing code or bundle code used to group products and services to a particular health condition (such as heart attack) which is based on a predetermined grouping code system.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $diagnosisRelatedGroup
     */
    private $diagnosisRelatedGroup = null;

    /**
     * Information code for an event with a corresponding date or period.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimEventType[] $event
     */
    private $event = null;

    /**
     * The members of the team who provided the products and services.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimCareTeamType[] $careTeam
     */
    private $careTeam = null;

    /**
     * Additional information codes regarding exceptions, special considerations, the condition, situation, prior or concurrent issues.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimSupportingInfoType[] $supportingInfo
     */
    private $supportingInfo = null;

    /**
     * Information about diagnoses relevant to the claim items.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimDiagnosisType[] $diagnosis
     */
    private $diagnosis = null;

    /**
     * Procedures performed on the patient relevant to the billing items with the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimProcedureType[] $procedure
     */
    private $procedure = null;

    /**
     * Financial instruments for reimbursement for the health care products and services specified on the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimInsuranceType[] $insurance
     */
    private $insurance = null;

    /**
     * Details of an accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimAccidentType $accident
     */
    private $accident = null;

    /**
     * The amount paid by the patient, in total at the claim claim level or specifically for the item and detail level, to the provider for goods and services.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $patientPaid
     */
    private $patientPaid = null;

    /**
     * A claim line. Either a simple product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     *
     * @var \TKusy\Hl7Fhir\R5\ClaimItemType[] $item
     */
    private $item = null;

    /**
     * The total value of the all the items in the claim.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $total
     */
    private $total = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this claim.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
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
     * The party to whom the professional services and/or products have been supplied or are being considered and for whom actual or forecast reimbursement is sought.
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
     * The Insurer who is target of the request.
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
     * The Insurer who is target of the request.
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
     * The provider-required urgency of processing the request. Typical values include: stat, normal, deferred.
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
     * The provider-required urgency of processing the request. Typical values include: stat, normal, deferred.
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
     * Gets as fundsReserve
     *
     * A code to indicate whether and for whom funds are to be reserved for future claims.
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
     * A code to indicate whether and for whom funds are to be reserved for future claims.
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
     * @param \TKusy\Hl7Fhir\R5\ClaimRelatedType $related
     */
    public function addToRelated(\TKusy\Hl7Fhir\R5\ClaimRelatedType $related)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimRelatedType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimRelatedType[] $related
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
     * Gets as payee
     *
     * The party to be reimbursed for cost of the products and services according to the terms of the policy.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimPayeeType
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
     * @param \TKusy\Hl7Fhir\R5\ClaimPayeeType $payee
     * @return self
     */
    public function setPayee(?\TKusy\Hl7Fhir\R5\ClaimPayeeType $payee = null)
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
     * Adds as event
     *
     * Information code for an event with a corresponding date or period.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimEventType $event
     */
    public function addToEvent(\TKusy\Hl7Fhir\R5\ClaimEventType $event)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimEventType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimEventType[] $event
     * @return self
     */
    public function setEvent(array $event = null)
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Adds as careTeam
     *
     * The members of the team who provided the products and services.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimCareTeamType $careTeam
     */
    public function addToCareTeam(\TKusy\Hl7Fhir\R5\ClaimCareTeamType $careTeam)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimCareTeamType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimCareTeamType[] $careTeam
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
     * @param \TKusy\Hl7Fhir\R5\ClaimSupportingInfoType $supportingInfo
     */
    public function addToSupportingInfo(\TKusy\Hl7Fhir\R5\ClaimSupportingInfoType $supportingInfo)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimSupportingInfoType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimSupportingInfoType[] $supportingInfo
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
     * @param \TKusy\Hl7Fhir\R5\ClaimDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7Fhir\R5\ClaimDiagnosisType $diagnosis)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimDiagnosisType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimDiagnosisType[] $diagnosis
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
     * @param \TKusy\Hl7Fhir\R5\ClaimProcedureType $procedure
     */
    public function addToProcedure(\TKusy\Hl7Fhir\R5\ClaimProcedureType $procedure)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimProcedureType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimProcedureType[] $procedure
     * @return self
     */
    public function setProcedure(array $procedure = null)
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
     * @param \TKusy\Hl7Fhir\R5\ClaimInsuranceType $insurance
     */
    public function addToInsurance(\TKusy\Hl7Fhir\R5\ClaimInsuranceType $insurance)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimInsuranceType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimInsuranceType[] $insurance
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
     * Details of an accident which resulted in injuries which required the products and services listed in the claim.
     *
     * @return \TKusy\Hl7Fhir\R5\ClaimAccidentType
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
     * @param \TKusy\Hl7Fhir\R5\ClaimAccidentType $accident
     * @return self
     */
    public function setAccident(?\TKusy\Hl7Fhir\R5\ClaimAccidentType $accident = null)
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
     * A claim line. Either a simple product or service or a 'group' of details which can each be a simple items or groups of sub-details.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ClaimItemType $item
     */
    public function addToItem(\TKusy\Hl7Fhir\R5\ClaimItemType $item)
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
     * @return \TKusy\Hl7Fhir\R5\ClaimItemType[]
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
     * @param \TKusy\Hl7Fhir\R5\ClaimItemType[] $item
     * @return self
     */
    public function setItem(array $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total value of the all the items in the claim.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
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
     * @param \TKusy\Hl7Fhir\R5\MoneyType $total
     * @return self
     */
    public function setTotal(?\TKusy\Hl7Fhir\R5\MoneyType $total = null)
    {
        $this->total = $total;
        return $this;
    }


}

