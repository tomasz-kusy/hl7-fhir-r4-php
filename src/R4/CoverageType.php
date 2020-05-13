<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing CoverageType
 *
 * Financial instrument which may be used to reimburse or pay for health care products and services. Includes both insurance and self-payment.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Coverage
 */
class CoverageType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this coverage.
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
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The party who 'owns' the insurance policy.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $policyHolder
     */
    private $policyHolder = null;

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $subscriber
     */
    private $subscriber = null;

    /**
     * The insurer assigned ID for the Subscriber.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $subscriberId
     */
    private $subscriberId = null;

    /**
     * The party who benefits from the insurance coverage; the patient when products and/or services are provided.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $beneficiary
     */
    private $beneficiary = null;

    /**
     * A unique identifier for a dependent under the coverage.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $dependent
     */
    private $dependent = null;

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $relationship
     */
    private $relationship = null;

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     *
     * @var \TKusy\Hl7Fhir\R4\PeriodType $period
     */
    private $period = null;

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $payor
     */
    private $payor = null;

    /**
     * A suite of underwriter specific classifiers.
     *
     * @var \TKusy\Hl7Fhir\R4\CoverageClassType[] $class
     */
    private $class = null;

    /**
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType $order
     */
    private $order = null;

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $network
     */
    private $network = null;

    /**
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been included on the health card.
     *
     * @var \TKusy\Hl7Fhir\R4\CoverageCostToBeneficiaryType[] $costToBeneficiary
     */
    private $costToBeneficiary = null;

    /**
     * When 'subrogation=true' this insurance instance has been included not for adjudication but to provide insurers with the details to recover costs.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $subrogation
     */
    private $subrogation = null;

    /**
     * The policy(s) which constitute this insurance coverage.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $contract
     */
    private $contract = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this coverage.
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
     * A unique identifier assigned to this coverage.
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
     * A unique identifier assigned to this coverage.
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
     * A unique identifier assigned to this coverage.
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
     * A unique identifier assigned to this coverage.
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
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
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
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
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
     * Gets as policyHolder
     *
     * The party who 'owns' the insurance policy.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getPolicyHolder()
    {
        return $this->policyHolder;
    }

    /**
     * Sets a new policyHolder
     *
     * The party who 'owns' the insurance policy.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $policyHolder
     * @return self
     */
    public function setPolicyHolder(\TKusy\Hl7Fhir\R4\ReferenceType $policyHolder)
    {
        $this->policyHolder = $policyHolder;
        return $this;
    }

    /**
     * Gets as subscriber
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }

    /**
     * Sets a new subscriber
     *
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $subscriber
     * @return self
     */
    public function setSubscriber(\TKusy\Hl7Fhir\R4\ReferenceType $subscriber)
    {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * Gets as subscriberId
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getSubscriberId()
    {
        return $this->subscriberId;
    }

    /**
     * Sets a new subscriberId
     *
     * The insurer assigned ID for the Subscriber.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $subscriberId
     * @return self
     */
    public function setSubscriberId(\TKusy\Hl7Fhir\R4\StringType $subscriberId)
    {
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * Gets as beneficiary
     *
     * The party who benefits from the insurance coverage; the patient when products and/or services are provided.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getBeneficiary()
    {
        return $this->beneficiary;
    }

    /**
     * Sets a new beneficiary
     *
     * The party who benefits from the insurance coverage; the patient when products and/or services are provided.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $beneficiary
     * @return self
     */
    public function setBeneficiary(\TKusy\Hl7Fhir\R4\ReferenceType $beneficiary)
    {
        $this->beneficiary = $beneficiary;
        return $this;
    }

    /**
     * Gets as dependent
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getDependent()
    {
        return $this->dependent;
    }

    /**
     * Sets a new dependent
     *
     * A unique identifier for a dependent under the coverage.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $dependent
     * @return self
     */
    public function setDependent(\TKusy\Hl7Fhir\R4\StringType $dependent)
    {
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * Gets as relationship
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * Sets a new relationship
     *
     * The relationship of beneficiary (patient) to the subscriber.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $relationship
     * @return self
     */
    public function setRelationship(\TKusy\Hl7Fhir\R4\CodeableConceptType $relationship)
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Gets as period
     *
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
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
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
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
     * Adds as payor
     *
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $payor
     */
    public function addToPayor(\TKusy\Hl7Fhir\R4\ReferenceType $payor)
    {
        $this->payor[] = $payor;
        return $this;
    }

    /**
     * isset payor
     *
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPayor($index)
    {
        return isset($this->payor[$index]);
    }

    /**
     * unset payor
     *
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPayor($index)
    {
        unset($this->payor[$index]);
    }

    /**
     * Gets as payor
     *
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getPayor()
    {
        return $this->payor;
    }

    /**
     * Sets a new payor
     *
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $payor
     * @return self
     */
    public function setPayor(array $payor)
    {
        $this->payor = $payor;
        return $this;
    }

    /**
     * Adds as class
     *
     * A suite of underwriter specific classifiers.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CoverageClassType $class
     */
    public function addToClass(\TKusy\Hl7Fhir\R4\CoverageClassType $class)
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * isset class
     *
     * A suite of underwriter specific classifiers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClass($index)
    {
        return isset($this->class[$index]);
    }

    /**
     * unset class
     *
     * A suite of underwriter specific classifiers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClass($index)
    {
        unset($this->class[$index]);
    }

    /**
     * Gets as class
     *
     * A suite of underwriter specific classifiers.
     *
     * @return \TKusy\Hl7Fhir\R4\CoverageClassType[]
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * A suite of underwriter specific classifiers.
     *
     * @param \TKusy\Hl7Fhir\R4\CoverageClassType[] $class
     * @return self
     */
    public function setClass(array $class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as order
     *
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     *
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * The order of applicability of this coverage relative to other coverages which are currently in force. Note, there may be gaps in the numbering and this does not imply primary, secondary etc. as the specific positioning of coverages depends upon the episode of care.
     *
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $order
     * @return self
     */
    public function setOrder(\TKusy\Hl7Fhir\R4\PositiveIntType $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as network
     *
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Sets a new network
     *
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $network
     * @return self
     */
    public function setNetwork(\TKusy\Hl7Fhir\R4\StringType $network)
    {
        $this->network = $network;
        return $this;
    }

    /**
     * Adds as costToBeneficiary
     *
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been included on the health card.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\CoverageCostToBeneficiaryType $costToBeneficiary
     */
    public function addToCostToBeneficiary(\TKusy\Hl7Fhir\R4\CoverageCostToBeneficiaryType $costToBeneficiary)
    {
        $this->costToBeneficiary[] = $costToBeneficiary;
        return $this;
    }

    /**
     * isset costToBeneficiary
     *
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been included on the health card.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCostToBeneficiary($index)
    {
        return isset($this->costToBeneficiary[$index]);
    }

    /**
     * unset costToBeneficiary
     *
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been included on the health card.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCostToBeneficiary($index)
    {
        unset($this->costToBeneficiary[$index]);
    }

    /**
     * Gets as costToBeneficiary
     *
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been included on the health card.
     *
     * @return \TKusy\Hl7Fhir\R4\CoverageCostToBeneficiaryType[]
     */
    public function getCostToBeneficiary()
    {
        return $this->costToBeneficiary;
    }

    /**
     * Sets a new costToBeneficiary
     *
     * A suite of codes indicating the cost category and associated amount which have been detailed in the policy and may have been included on the health card.
     *
     * @param \TKusy\Hl7Fhir\R4\CoverageCostToBeneficiaryType[] $costToBeneficiary
     * @return self
     */
    public function setCostToBeneficiary(array $costToBeneficiary)
    {
        $this->costToBeneficiary = $costToBeneficiary;
        return $this;
    }

    /**
     * Gets as subrogation
     *
     * When 'subrogation=true' this insurance instance has been included not for adjudication but to provide insurers with the details to recover costs.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getSubrogation()
    {
        return $this->subrogation;
    }

    /**
     * Sets a new subrogation
     *
     * When 'subrogation=true' this insurance instance has been included not for adjudication but to provide insurers with the details to recover costs.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $subrogation
     * @return self
     */
    public function setSubrogation(\TKusy\Hl7Fhir\R4\BooleanType $subrogation)
    {
        $this->subrogation = $subrogation;
        return $this;
    }

    /**
     * Adds as contract
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $contract
     */
    public function addToContract(\TKusy\Hl7Fhir\R4\ReferenceType $contract)
    {
        $this->contract[] = $contract;
        return $this;
    }

    /**
     * isset contract
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContract($index)
    {
        return isset($this->contract[$index]);
    }

    /**
     * unset contract
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContract($index)
    {
        unset($this->contract[$index]);
    }

    /**
     * Gets as contract
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * The policy(s) which constitute this insurance coverage.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $contract
     * @return self
     */
    public function setContract(array $contract)
    {
        $this->contract = $contract;
        return $this;
    }


}

