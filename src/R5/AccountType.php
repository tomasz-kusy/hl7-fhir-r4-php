<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AccountType
 *
 * A financial tool for tracking value accrued for a particular purpose. In the healthcare field, used to track charges for a patient, cost centers, etc.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Account
 */
class AccountType extends DomainResourceType
{

    /**
     * Unique identifier used to reference the account. Might or might not be intended for human use (e.g. credit card number).
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates whether the account is presently used/usable or not.
     *
     * @var \TKusy\Hl7Fhir\R5\AccountStatusType $status
     */
    private $status = null;

    /**
     * The BillingStatus tracks the lifecycle of the account through the billing process. It indicates how transactions are treated when they are allocated to the account.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $billingStatus
     */
    private $billingStatus = null;

    /**
     * Categorizes the account for reporting and searching purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $name
     */
    private $name = null;

    /**
     * Identifies the entity which incurs the expenses. While the immediate recipients of services or goods might be entities related to the subject, the expenses were ultimately incurred by the subject of the Account.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     */
    private $subject = null;

    /**
     * The date range of services associated with this account.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $servicePeriod
     */
    private $servicePeriod = null;

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     *
     * @var \TKusy\Hl7Fhir\R5\AccountCoverageType[] $coverage
     */
    private $coverage = null;

    /**
     * Indicates the service area, hospital, department, etc. with responsibility for managing the Account.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $owner
     */
    private $owner = null;

    /**
     * Provides additional information about what the account tracks and how it is used.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $description
     */
    private $description = null;

    /**
     * The parties responsible for balancing the account if other payment options fall short.
     *
     * @var \TKusy\Hl7Fhir\R5\AccountGuarantorType[] $guarantor
     */
    private $guarantor = null;

    /**
     * When using an account for billing a specific Encounter the set of diagnoses that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
     *
     * @var \TKusy\Hl7Fhir\R5\AccountDiagnosisType[] $diagnosis
     */
    private $diagnosis = null;

    /**
     * When using an account for billing a specific Encounter the set of procedures that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
     *
     * @var \TKusy\Hl7Fhir\R5\AccountProcedureType[] $procedure
     */
    private $procedure = null;

    /**
     * Other associated accounts related to this account.
     *
     * @var \TKusy\Hl7Fhir\R5\AccountRelatedAccountType[] $relatedAccount
     */
    private $relatedAccount = null;

    /**
     * The default currency for the account.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $currency
     */
    private $currency = null;

    /**
     * The calculated account balances - these are calculated and processed by the finance system.
     *
     * The balances with a `term` that is not current are usually generated/updated by an invoicing or similar process.
     *
     * @var \TKusy\Hl7Fhir\R5\AccountBalanceType[] $balance
     */
    private $balance = null;

    /**
     * Time the balance amount was calculated.
     *
     * @var \TKusy\Hl7Fhir\R5\InstantType $calculatedAt
     */
    private $calculatedAt = null;

    /**
     * Adds as identifier
     *
     * Unique identifier used to reference the account. Might or might not be intended for human use (e.g. credit card number).
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
     * Unique identifier used to reference the account. Might or might not be intended for human use (e.g. credit card number).
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
     * Unique identifier used to reference the account. Might or might not be intended for human use (e.g. credit card number).
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
     * Unique identifier used to reference the account. Might or might not be intended for human use (e.g. credit card number).
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
     * Unique identifier used to reference the account. Might or might not be intended for human use (e.g. credit card number).
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
     * Indicates whether the account is presently used/usable or not.
     *
     * @return \TKusy\Hl7Fhir\R5\AccountStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates whether the account is presently used/usable or not.
     *
     * @param \TKusy\Hl7Fhir\R5\AccountStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\AccountStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as billingStatus
     *
     * The BillingStatus tracks the lifecycle of the account through the billing process. It indicates how transactions are treated when they are allocated to the account.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getBillingStatus()
    {
        return $this->billingStatus;
    }

    /**
     * Sets a new billingStatus
     *
     * The BillingStatus tracks the lifecycle of the account through the billing process. It indicates how transactions are treated when they are allocated to the account.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $billingStatus
     * @return self
     */
    public function setBillingStatus(?\TKusy\Hl7Fhir\R5\CodeableConceptType $billingStatus = null)
    {
        $this->billingStatus = $billingStatus;
        return $this;
    }

    /**
     * Gets as type
     *
     * Categorizes the account for reporting and searching purposes.
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
     * Categorizes the account for reporting and searching purposes.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name used for the account when displaying it to humans in reports, etc.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name used for the account when displaying it to humans in reports, etc.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $name
     * @return self
     */
    public function setName(?\TKusy\Hl7Fhir\R5\StringType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as subject
     *
     * Identifies the entity which incurs the expenses. While the immediate recipients of services or goods might be entities related to the subject, the expenses were ultimately incurred by the subject of the Account.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7Fhir\R5\ReferenceType $subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * Identifies the entity which incurs the expenses. While the immediate recipients of services or goods might be entities related to the subject, the expenses were ultimately incurred by the subject of the Account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * Identifies the entity which incurs the expenses. While the immediate recipients of services or goods might be entities related to the subject, the expenses were ultimately incurred by the subject of the Account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * Identifies the entity which incurs the expenses. While the immediate recipients of services or goods might be entities related to the subject, the expenses were ultimately incurred by the subject of the Account.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Identifies the entity which incurs the expenses. While the immediate recipients of services or goods might be entities related to the subject, the expenses were ultimately incurred by the subject of the Account.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as servicePeriod
     *
     * The date range of services associated with this account.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getServicePeriod()
    {
        return $this->servicePeriod;
    }

    /**
     * Sets a new servicePeriod
     *
     * The date range of services associated with this account.
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $servicePeriod
     * @return self
     */
    public function setServicePeriod(?\TKusy\Hl7Fhir\R5\PeriodType $servicePeriod = null)
    {
        $this->servicePeriod = $servicePeriod;
        return $this;
    }

    /**
     * Adds as coverage
     *
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AccountCoverageType $coverage
     */
    public function addToCoverage(\TKusy\Hl7Fhir\R5\AccountCoverageType $coverage)
    {
        $this->coverage[] = $coverage;
        return $this;
    }

    /**
     * isset coverage
     *
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverage($index)
    {
        return isset($this->coverage[$index]);
    }

    /**
     * unset coverage
     *
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverage($index)
    {
        unset($this->coverage[$index]);
    }

    /**
     * Gets as coverage
     *
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     *
     * @return \TKusy\Hl7Fhir\R5\AccountCoverageType[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     *
     * @param \TKusy\Hl7Fhir\R5\AccountCoverageType[] $coverage
     * @return self
     */
    public function setCoverage(array $coverage = null)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as owner
     *
     * Indicates the service area, hospital, department, etc. with responsibility for managing the Account.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * Indicates the service area, hospital, department, etc. with responsibility for managing the Account.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $owner
     * @return self
     */
    public function setOwner(?\TKusy\Hl7Fhir\R5\ReferenceType $owner = null)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as description
     *
     * Provides additional information about what the account tracks and how it is used.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Provides additional information about what the account tracks and how it is used.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $description
     * @return self
     */
    public function setDescription(?\TKusy\Hl7Fhir\R5\MarkdownType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as guarantor
     *
     * The parties responsible for balancing the account if other payment options fall short.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AccountGuarantorType $guarantor
     */
    public function addToGuarantor(\TKusy\Hl7Fhir\R5\AccountGuarantorType $guarantor)
    {
        $this->guarantor[] = $guarantor;
        return $this;
    }

    /**
     * isset guarantor
     *
     * The parties responsible for balancing the account if other payment options fall short.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuarantor($index)
    {
        return isset($this->guarantor[$index]);
    }

    /**
     * unset guarantor
     *
     * The parties responsible for balancing the account if other payment options fall short.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuarantor($index)
    {
        unset($this->guarantor[$index]);
    }

    /**
     * Gets as guarantor
     *
     * The parties responsible for balancing the account if other payment options fall short.
     *
     * @return \TKusy\Hl7Fhir\R5\AccountGuarantorType[]
     */
    public function getGuarantor()
    {
        return $this->guarantor;
    }

    /**
     * Sets a new guarantor
     *
     * The parties responsible for balancing the account if other payment options fall short.
     *
     * @param \TKusy\Hl7Fhir\R5\AccountGuarantorType[] $guarantor
     * @return self
     */
    public function setGuarantor(array $guarantor = null)
    {
        $this->guarantor = $guarantor;
        return $this;
    }

    /**
     * Adds as diagnosis
     *
     * When using an account for billing a specific Encounter the set of diagnoses that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AccountDiagnosisType $diagnosis
     */
    public function addToDiagnosis(\TKusy\Hl7Fhir\R5\AccountDiagnosisType $diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
        return $this;
    }

    /**
     * isset diagnosis
     *
     * When using an account for billing a specific Encounter the set of diagnoses that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
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
     * When using an account for billing a specific Encounter the set of diagnoses that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
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
     * When using an account for billing a specific Encounter the set of diagnoses that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
     *
     * @return \TKusy\Hl7Fhir\R5\AccountDiagnosisType[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Sets a new diagnosis
     *
     * When using an account for billing a specific Encounter the set of diagnoses that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
     *
     * @param \TKusy\Hl7Fhir\R5\AccountDiagnosisType[] $diagnosis
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
     * When using an account for billing a specific Encounter the set of procedures that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AccountProcedureType $procedure
     */
    public function addToProcedure(\TKusy\Hl7Fhir\R5\AccountProcedureType $procedure)
    {
        $this->procedure[] = $procedure;
        return $this;
    }

    /**
     * isset procedure
     *
     * When using an account for billing a specific Encounter the set of procedures that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
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
     * When using an account for billing a specific Encounter the set of procedures that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
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
     * When using an account for billing a specific Encounter the set of procedures that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
     *
     * @return \TKusy\Hl7Fhir\R5\AccountProcedureType[]
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * Sets a new procedure
     *
     * When using an account for billing a specific Encounter the set of procedures that are relevant for billing are stored here on the account where they are able to be sequenced appropriately prior to processing to produce claim(s).
     *
     * @param \TKusy\Hl7Fhir\R5\AccountProcedureType[] $procedure
     * @return self
     */
    public function setProcedure(array $procedure = null)
    {
        $this->procedure = $procedure;
        return $this;
    }

    /**
     * Adds as relatedAccount
     *
     * Other associated accounts related to this account.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AccountRelatedAccountType $relatedAccount
     */
    public function addToRelatedAccount(\TKusy\Hl7Fhir\R5\AccountRelatedAccountType $relatedAccount)
    {
        $this->relatedAccount[] = $relatedAccount;
        return $this;
    }

    /**
     * isset relatedAccount
     *
     * Other associated accounts related to this account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedAccount($index)
    {
        return isset($this->relatedAccount[$index]);
    }

    /**
     * unset relatedAccount
     *
     * Other associated accounts related to this account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedAccount($index)
    {
        unset($this->relatedAccount[$index]);
    }

    /**
     * Gets as relatedAccount
     *
     * Other associated accounts related to this account.
     *
     * @return \TKusy\Hl7Fhir\R5\AccountRelatedAccountType[]
     */
    public function getRelatedAccount()
    {
        return $this->relatedAccount;
    }

    /**
     * Sets a new relatedAccount
     *
     * Other associated accounts related to this account.
     *
     * @param \TKusy\Hl7Fhir\R5\AccountRelatedAccountType[] $relatedAccount
     * @return self
     */
    public function setRelatedAccount(array $relatedAccount = null)
    {
        $this->relatedAccount = $relatedAccount;
        return $this;
    }

    /**
     * Gets as currency
     *
     * The default currency for the account.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * The default currency for the account.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $currency
     * @return self
     */
    public function setCurrency(?\TKusy\Hl7Fhir\R5\CodeableConceptType $currency = null)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * Adds as balance
     *
     * The calculated account balances - these are calculated and processed by the finance system.
     *
     * The balances with a `term` that is not current are usually generated/updated by an invoicing or similar process.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AccountBalanceType $balance
     */
    public function addToBalance(\TKusy\Hl7Fhir\R5\AccountBalanceType $balance)
    {
        $this->balance[] = $balance;
        return $this;
    }

    /**
     * isset balance
     *
     * The calculated account balances - these are calculated and processed by the finance system.
     *
     * The balances with a `term` that is not current are usually generated/updated by an invoicing or similar process.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBalance($index)
    {
        return isset($this->balance[$index]);
    }

    /**
     * unset balance
     *
     * The calculated account balances - these are calculated and processed by the finance system.
     *
     * The balances with a `term` that is not current are usually generated/updated by an invoicing or similar process.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBalance($index)
    {
        unset($this->balance[$index]);
    }

    /**
     * Gets as balance
     *
     * The calculated account balances - these are calculated and processed by the finance system.
     *
     * The balances with a `term` that is not current are usually generated/updated by an invoicing or similar process.
     *
     * @return \TKusy\Hl7Fhir\R5\AccountBalanceType[]
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Sets a new balance
     *
     * The calculated account balances - these are calculated and processed by the finance system.
     *
     * The balances with a `term` that is not current are usually generated/updated by an invoicing or similar process.
     *
     * @param \TKusy\Hl7Fhir\R5\AccountBalanceType[] $balance
     * @return self
     */
    public function setBalance(array $balance = null)
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * Gets as calculatedAt
     *
     * Time the balance amount was calculated.
     *
     * @return \TKusy\Hl7Fhir\R5\InstantType
     */
    public function getCalculatedAt()
    {
        return $this->calculatedAt;
    }

    /**
     * Sets a new calculatedAt
     *
     * Time the balance amount was calculated.
     *
     * @param \TKusy\Hl7Fhir\R5\InstantType $calculatedAt
     * @return self
     */
    public function setCalculatedAt(?\TKusy\Hl7Fhir\R5\InstantType $calculatedAt = null)
    {
        $this->calculatedAt = $calculatedAt;
        return $this;
    }


}

