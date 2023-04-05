<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing AccountBalanceType
 *
 * A financial tool for tracking value accrued for a particular purpose. In the healthcare field, used to track charges for a patient, cost centers, etc.
 * XSD Type: Account.Balance
 */
class AccountBalanceType extends BackboneElementType
{

    /**
     * Who is expected to pay this part of the balance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $aggregate
     */
    private $aggregate = null;

    /**
     * The term of the account balances - The balance value is the amount that was outstanding for this age.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $term
     */
    private $term = null;

    /**
     * The amount is only an estimated value - this is likely common for `current` term balances, but not with known terms (that were generated by a backend process).
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $estimate
     */
    private $estimate = null;

    /**
     * The actual balance value calculated for the age defined in the term property.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $amount
     */
    private $amount = null;

    /**
     * Gets as aggregate
     *
     * Who is expected to pay this part of the balance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAggregate()
    {
        return $this->aggregate;
    }

    /**
     * Sets a new aggregate
     *
     * Who is expected to pay this part of the balance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $aggregate
     * @return self
     */
    public function setAggregate(?\TKusy\Hl7Fhir\R5\CodeableConceptType $aggregate = null)
    {
        $this->aggregate = $aggregate;
        return $this;
    }

    /**
     * Gets as term
     *
     * The term of the account balances - The balance value is the amount that was outstanding for this age.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * The term of the account balances - The balance value is the amount that was outstanding for this age.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $term
     * @return self
     */
    public function setTerm(?\TKusy\Hl7Fhir\R5\CodeableConceptType $term = null)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Gets as estimate
     *
     * The amount is only an estimated value - this is likely common for `current` term balances, but not with known terms (that were generated by a backend process).
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getEstimate()
    {
        return $this->estimate;
    }

    /**
     * Sets a new estimate
     *
     * The amount is only an estimated value - this is likely common for `current` term balances, but not with known terms (that were generated by a backend process).
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $estimate
     * @return self
     */
    public function setEstimate(?\TKusy\Hl7Fhir\R5\BooleanType $estimate = null)
    {
        $this->estimate = $estimate;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The actual balance value calculated for the age defined in the term property.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The actual balance value calculated for the age defined in the term property.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7Fhir\R5\MoneyType $amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

