<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing EpisodeOfCareType
 *
 * An association between a patient and an organization / healthcare provider(s) during which time encounters may occur. The managing organization assumes a level of responsibility for the patient during this time.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: EpisodeOfCare
 */
class EpisodeOfCareType extends DomainResourceType
{

    /**
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @var \TKusy\Hl7Fhir\R4\EpisodeOfCareStatusType $status
     */
    private $status = null;

    /**
     * The history of statuses that the EpisodeOfCare has been through (without requiring processing the history of the resource).
     *
     * @var \TKusy\Hl7Fhir\R4\EpisodeOfCareStatusHistoryType[] $statusHistory
     */
    private $statusHistory = null;

    /**
     * A classification of the type of episode of care; e.g. specialist referral, disease management, type of funded care.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The list of diagnosis relevant to this episode of care.
     *
     * @var \TKusy\Hl7Fhir\R4\EpisodeOfCareDiagnosisType[] $diagnosis
     */
    private $diagnosis = null;

    /**
     * The patient who is the focus of this episode of care.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $patient
     */
    private $patient = null;

    /**
     * The organization that has assumed the specific responsibilities for the specified duration.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $managingOrganization
     */
    private $managingOrganization = null;

    /**
     * The interval during which the managing organization assumes the defined responsibility.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * Referral Request(s) that are fulfilled by this EpisodeOfCare, incoming referrals.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $referralRequest
     */
    private $referralRequest = null;

    /**
     * The practitioner that is the care manager/care coordinator for this patient.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $careManager
     */
    private $careManager = null;

    /**
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $team
     */
    private $team = null;

    /**
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $account
     */
    private $account = null;

    /**
     * Adds as identifier
     *
     * The EpisodeOfCare may be known by different identifiers for different contexts of use, such as when an external agency is tracking the Episode for funding purposes.
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
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * planned | waitlist | active | onhold | finished | cancelled.
     *
     * @return \TKusy\Hl7Fhir\R4\EpisodeOfCareStatusType
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
     * @param \TKusy\Hl7Fhir\R4\EpisodeOfCareStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\EpisodeOfCareStatusType $status)
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
     * @param \TKusy\Hl7Fhir\R4\EpisodeOfCareStatusHistoryType $statusHistory
     */
    public function addToStatusHistory(\TKusy\Hl7Fhir\R4\EpisodeOfCareStatusHistoryType $statusHistory)
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
     * @return \TKusy\Hl7Fhir\R4\EpisodeOfCareStatusHistoryType[]
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
     * @param \TKusy\Hl7Fhir\R4\EpisodeOfCareStatusHistoryType[] $statusHistory
     * @return self
     */
    public function setStatusHistory(array $statusHistory)
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as diagnosis
     *
     * The list of diagnosis relevant to this episode of care.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\EpisodeOfCareDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7Fhir\R4\EpisodeOfCareDiagnosisType $diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * isset diagnosis
     *
     * The list of diagnosis relevant to this episode of care.
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
     * The list of diagnosis relevant to this episode of care.
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
     * The list of diagnosis relevant to this episode of care.
     *
     * @return \TKusy\Hl7Fhir\R4\EpisodeOfCareDiagnosisType[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Sets a new diagnosis
     *
     * The list of diagnosis relevant to this episode of care.
     *
     * @param \TKusy\Hl7Fhir\R4\EpisodeOfCareDiagnosisType[] $diagnosis
     * @return self
     */
    public function setDiagnosis(array $diagnosis)
    {
        $this->diagnosis = $diagnosis;
        return $this;
    }

    /**
     * Gets as patient
     *
     * The patient who is the focus of this episode of care.
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
     * The patient who is the focus of this episode of care.
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
     * Gets as managingOrganization
     *
     * The organization that has assumed the specific responsibilities for the specified duration.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * Sets a new managingOrganization
     *
     * The organization that has assumed the specific responsibilities for the specified duration.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $managingOrganization
     * @return self
     */
    public function setManagingOrganization(\TKusy\Hl7Fhir\R4\ReferenceType $managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Gets as period
     *
     * The interval during which the managing organization assumes the defined responsibility.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
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
     * @param \TKusy\Hl7Fhir\R4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7Fhir\R4\PeriodType $period)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $referralRequest
     */
    public function addToReferralRequest(\TKusy\Hl7Fhir\R4\ReferenceType $referralRequest)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $referralRequest
     * @return self
     */
    public function setReferralRequest(array $referralRequest)
    {
        $this->referralRequest = $referralRequest;
        return $this;
    }

    /**
     * Gets as careManager
     *
     * The practitioner that is the care manager/care coordinator for this patient.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $careManager
     * @return self
     */
    public function setCareManager(\TKusy\Hl7Fhir\R4\ReferenceType $careManager)
    {
        $this->careManager = $careManager;
        return $this;
    }

    /**
     * Adds as team
     *
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $team
     */
    public function addToTeam(\TKusy\Hl7Fhir\R4\ReferenceType $team)
    {
        $this->team[] = $team;
        return $this;
    }

    /**
     * isset team
     *
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTeam($index)
    {
        return isset($this->team[$index]);
    }

    /**
     * unset team
     *
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTeam($index)
    {
        unset($this->team[$index]);
    }

    /**
     * Gets as team
     *
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Sets a new team
     *
     * The list of practitioners that may be facilitating this episode of care for specific purposes.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $team
     * @return self
     */
    public function setTeam(array $team)
    {
        $this->team = $team;
        return $this;
    }

    /**
     * Adds as account
     *
     * The set of accounts that may be used for billing for this EpisodeOfCare.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $account
     */
    public function addToAccount(\TKusy\Hl7Fhir\R4\ReferenceType $account)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $account
     * @return self
     */
    public function setAccount(array $account)
    {
        $this->account = $account;
        return $this;
    }


}

