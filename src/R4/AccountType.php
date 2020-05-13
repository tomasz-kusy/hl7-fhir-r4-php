<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing AccountType
 *
 * A financial tool for tracking value accrued for a particular purpose. In the healthcare field, used to track charges for a patient, cost centers, etc.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Account
 */
class AccountType extends DomainResourceType
{

    /**
     * Unique identifier used to reference the account. Might or might not be intended for human use (e.g. credit card number).
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Indicates whether the account is presently used/usable or not.
     *
     * @var \TKusy\Hl7Fhir\R4\AccountStatusType $status
     */
    private $status = null;

    /**
     * Categorizes the account for reporting and searching purposes.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $name
     */
    private $name = null;

    /**
     * Identifies the entity which incurs the expenses. While the immediate recipients of services or goods might be entities related to the subject, the expenses were ultimately incurred by the subject of the Account.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $subject
     */
    private $subject = null;

    /**
     * The date range of services associated with this account.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $servicePeriod
     */
    private $servicePeriod = null;

    /**
     * The party(s) that are responsible for covering the payment of this account, and what order should they be applied to the account.
     *
     * @var \TKusy\Hl7Fhir\R4\AccountCoverageType[] $coverage
     */
    private $coverage = null;

    /**
     * Indicates the service area, hospital, department, etc. with responsibility for managing the Account.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $owner
     */
    private $owner = null;

    /**
     * Provides additional information about what the account tracks and how it is used.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $description
     */
    private $description = null;

    /**
     * The parties responsible for balancing the account if other payment options fall short.
     *
     * @var \TKusy\Hl7Fhir\R4\AccountGuarantorType[] $guarantor
     */
    private $guarantor = null;

    /**
     * Reference to a parent Account.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $partOf
     */
    private $partOf = null;

    /**
     * Adds as identifier
     *
     * Unique identifier used to reference the account. Might or might not be intended for human use (e.g. credit card number).
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
     * @return \TKusy\Hl7Fhir\R4\IdentifierType[]
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
     * Indicates whether the account is presently used/usable or not.
     *
     * @return \TKusy\Hl7Fhir\R4\AccountStatusType
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
     * @param \TKusy\Hl7Fhir\R4\AccountStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R4\AccountStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as type
     *
     * Categorizes the account for reporting and searching purposes.
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
     * Categorizes the account for reporting and searching purposes.
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
     * Gets as name
     *
     * Name used for the account when displaying it to humans in reports, etc.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $name
     * @return self
     */
    public function setName(\TKusy\Hl7Fhir\R4\StringType $name)
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subject
     */
    public function addToSubject(\TKusy\Hl7Fhir\R4\ReferenceType $subject)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $subject
     * @return self
     */
    public function setSubject(array $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as servicePeriod
     *
     * The date range of services associated with this account.
     *
     * @return \TKusy\Hl7Fhir\R4\PeriodType
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
     * @param \TKusy\Hl7Fhir\R4\PeriodType $servicePeriod
     * @return self
     */
    public function setServicePeriod(\TKusy\Hl7Fhir\R4\PeriodType $servicePeriod)
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
     * @param \TKusy\Hl7Fhir\R4\AccountCoverageType $coverage
     */
    public function addToCoverage(\TKusy\Hl7Fhir\R4\AccountCoverageType $coverage)
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
     * @return \TKusy\Hl7Fhir\R4\AccountCoverageType[]
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
     * @param \TKusy\Hl7Fhir\R4\AccountCoverageType[] $coverage
     * @return self
     */
    public function setCoverage(array $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as owner
     *
     * Indicates the service area, hospital, department, etc. with responsibility for managing the Account.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $owner
     * @return self
     */
    public function setOwner(\TKusy\Hl7Fhir\R4\ReferenceType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as description
     *
     * Provides additional information about what the account tracks and how it is used.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $description
     * @return self
     */
    public function setDescription(\TKusy\Hl7Fhir\R4\StringType $description)
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
     * @param \TKusy\Hl7Fhir\R4\AccountGuarantorType $guarantor
     */
    public function addToGuarantor(\TKusy\Hl7Fhir\R4\AccountGuarantorType $guarantor)
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
     * @return \TKusy\Hl7Fhir\R4\AccountGuarantorType[]
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
     * @param \TKusy\Hl7Fhir\R4\AccountGuarantorType[] $guarantor
     * @return self
     */
    public function setGuarantor(array $guarantor)
    {
        $this->guarantor = $guarantor;
        return $this;
    }

    /**
     * Gets as partOf
     *
     * Reference to a parent Account.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Sets a new partOf
     *
     * Reference to a parent Account.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $partOf
     * @return self
     */
    public function setPartOf(\TKusy\Hl7Fhir\R4\ReferenceType $partOf)
    {
        $this->partOf = $partOf;
        return $this;
    }


}

