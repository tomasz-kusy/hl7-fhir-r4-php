<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing AccountCoverageType
 *
 * A financial tool for tracking value accrued for a particular purpose. In the healthcare field, used to track charges for a patient, cost centers, etc.
 * XSD Type: Account.Coverage
 */
class AccountCoverageType extends BackboneElementType
{

    /**
     * The party(s) that contribute to payment (or part of) of the charges applied to this account (including self-pay).
     *
     * A coverage may only be responsible for specific types of charges, and the sequence of the coverages in the account could be important when processing billing.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $coverage
     */
    private $coverage = null;

    /**
     * The priority of the coverage in the context of this account.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $priority
     */
    private $priority = null;

    /**
     * Gets as coverage
     *
     * The party(s) that contribute to payment (or part of) of the charges applied to this account (including self-pay).
     *
     * A coverage may only be responsible for specific types of charges, and the sequence of the coverages in the account could be important when processing billing.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * The party(s) that contribute to payment (or part of) of the charges applied to this account (including self-pay).
     *
     * A coverage may only be responsible for specific types of charges, and the sequence of the coverages in the account could be important when processing billing.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $coverage
     * @return self
     */
    public function setCoverage(\TKusy\Hl7FhirR4\ReferenceType $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as priority
     *
     * The priority of the coverage in the context of this account.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * The priority of the coverage in the context of this account.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $priority
     * @return self
     */
    public function setPriority(\TKusy\Hl7FhirR4\PositiveIntType $priority)
    {
        $this->priority = $priority;
        return $this;
    }


}

