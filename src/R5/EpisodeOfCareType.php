<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing EpisodeOfCareType
 *
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: EpisodeOfCare
 */
class EpisodeOfCareType extends DomainResourceType
{

    /**
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @var \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusType $status
     */
    private $status = null;

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     *
     * @var \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusHistoryType[] $statusHistory
     */
    private $statusHistory = null;

    /**
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The list of medical reasons that are expected to be addressed during the episode of care.
     *
     * @var \TKusy\Hl7Fhir\R5\EpisodeOfCareReasonType[] $reason
     */
    private $reason = null;

    /**
     * The list of medical conditions that were addressed during the episode of care.
     *
     * @var \TKusy\Hl7Fhir\R5\EpisodeOfCareDiagnosisType[] $diagnosis
     */
    private $diagnosis = null;

    /**
     * The patient who is the focus of this episode of care.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The organization that has assumed the specific responsibilities for care coordination, care delivery, or other services for the specified duration.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $referralRequest
     */
    private $referralRequest = null;

    /**
     * The practitioner that is the care manager/care coordinator for this patient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $careManager
     */
    private $careManager = null;

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $careTeam
     */
    private $careTeam = null;

    /**
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $account
     */
    private $account = null;

    /**
     * Adds as identifier
     *
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
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
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
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
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
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
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
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
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
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
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @return \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\EpisodeOfCareStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as statusHistory
     *
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusHistoryType $statusHistory
     */
    public function addToStatusHistory(\TKusy\Hl7Fhir\R5\EpisodeOfCareStatusHistoryType $statusHistory)
    {
        $this->statusHistory[] = $statusHistory;
        return $this;
    }

    /**
     * isset statusHistory
     *
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusHistory($index)
    {
        return isset($this->statusHistory[$index]);
    }

    /**
     * unset statusHistory
     *
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusHistory($index)
    {
        unset($this->statusHistory[$index]);
    }

    /**
     * Gets as statusHistory
     *
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     *
     * @return \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusHistoryType[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * Sets a new statusHistory
     *
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     *
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCareStatusHistoryType[] $statusHistory
     * @return self
     */
    public function setStatusHistory(array $statusHistory = null)
    {
        $this->statusHistory = $statusHistory;
        return $this;
    }

    /**
     * Adds as type
     *
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as reason
     *
     * The list of medical reasons that are expected to be addressed during the episode of care.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCareReasonType $reason
     */
    public function addToReason(\TKusy\Hl7Fhir\R5\EpisodeOfCareReasonType $reason)
    {
        $this->reason[] = $reason;
        return $this;
    }

    /**
     * isset reason
     *
     * The list of medical reasons that are expected to be addressed during the episode of care.
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
     * The list of medical reasons that are expected to be addressed during the episode of care.
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
     * The list of medical reasons that are expected to be addressed during the episode of care.
     *
     * @return \TKusy\Hl7Fhir\R5\EpisodeOfCareReasonType[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * The list of medical reasons that are expected to be addressed during the episode of care.
     *
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCareReasonType[] $reason
     * @return self
     */
    public function setReason(array $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Adds as diagnosis
     *
     * The list of medical conditions that were addressed during the episode of care.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCareDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7Fhir\R5\EpisodeOfCareDiagnosisType $diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * isset diagnosis
     *
     * The list of medical conditions that were addressed during the episode of care.
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
     * The list of medical conditions that were addressed during the episode of care.
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
     * The list of medical conditions that were addressed during the episode of care.
     *
     * @return \TKusy\Hl7Fhir\R5\EpisodeOfCareDiagnosisType[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Sets a new diagnosis
     *
     * The list of medical conditions that were addressed during the episode of care.
     *
     * @param \TKusy\Hl7Fhir\R5\EpisodeOfCareDiagnosisType[] $diagnosis
     * @return self
     */
    public function setDiagnosis(array $diagnosis = null)
    {
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient who is the focus of this episode of care.
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
     * The patient who is the focus of this episode of care.
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
     * Gets as managingOrganization
     *
     * The organization that has assumed the specific responsibilities for care coordination, care delivery, or other services for the specified duration.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * Sets a new managingOrganization
     *
     * The organization that has assumed the specific responsibilities for care coordination, care delivery, or other services for the specified duration.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization
     * @return self
     */
    public function setManagingOrganization(?\TKusy\Hl7Fhir\R5\ReferenceType $managingOrganization = null)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Gets as period
     *
     * The interval during which the managing organization assumes the defined responsibility.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The interval during which the managing organization assumes the defined responsibility.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as referralRequest
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $referralRequest
     */
    public function addToReferralRequest(\TKusy\Hl7Fhir\R5\ReferenceType $referralRequest)
    {
        $this->referralRequest[] = $referralRequest;
        return $this;
    }

    /**
     * isset referralRequest
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferralRequest($index)
    {
        return isset($this->referralRequest[$index]);
    }

    /**
     * unset referralRequest
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferralRequest($index)
    {
        unset($this->referralRequest[$index]);
    }

    /**
     * Gets as referralRequest
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getReferralRequest()
    {
        return $this->referralRequest;
    }

    /**
     * Sets a new referralRequest
     *
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $referralRequest
     * @return self
     */
    public function setReferralRequest(array $referralRequest = null)
    {
        $this->referralRequest = $referralRequest;
        return $this;
    }

    /**
     * Gets as careManager
     *
     * The practitioner that is the care manager/care coordinator for this patient.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getCareManager()
    {
        return $this->careManager;
    }

    /**
     * Sets a new careManager
     *
     * The practitioner that is the care manager/care coordinator for this patient.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $careManager
     * @return self
     */
    public function setCareManager(?\TKusy\Hl7Fhir\R5\ReferenceType $careManager = null)
    {
        $this->careManager = $careManager;
        return $this;
    }

    /**
     * Adds as careTeam
     *
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $careTeam
     */
    public function addToCareTeam(\TKusy\Hl7Fhir\R5\ReferenceType $careTeam)
    {
        $this->careTeam[] = $careTeam;
        return $this;
    }

    /**
     * isset careTeam
     *
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
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
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
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
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getCareTeam()
    {
        return $this->careTeam;
    }

    /**
     * Sets a new careTeam
     *
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $careTeam
     * @return self
     */
    public function setCareTeam(array $careTeam = null)
    {
        $this->careTeam = $careTeam;
        return $this;
    }

    /**
     * Adds as account
     *
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $account
     */
    public function addToAccount(\TKusy\Hl7Fhir\R5\ReferenceType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $account
     * @return self
     */
    public function setAccount(array $account = null)
    {
        $this->account = $account;
        return $this;
    }


}

