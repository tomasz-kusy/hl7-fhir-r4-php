<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PaymentReconciliationAllocationType
 *
 * This resource provides the details including amount of a payment and allocates the payment items being paid.
 * XSD Type: PaymentReconciliation.Allocation
 */
class PaymentReconciliationAllocationType extends BackboneElementType
{

    /**
     * Unique identifier for the current payment item for the referenced payable.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Unique identifier for the prior payment item for the referenced payable.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $predecessor
     */
    private $predecessor = null;

    /**
     * Specific resource to which the payment/adjustment/advance applies.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $target
     */
    private $target = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\StringType $targetItemString
     */
    private $targetItemString = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $targetItemIdentifier
     */
    private $targetItemIdentifier = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $targetItemPositiveInt
     */
    private $targetItemPositiveInt = null;

    /**
     * The Encounter to which this payment applies, may be completed by the receiver, used for search.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     */
    private $encounter = null;

    /**
     * The Account to which this payment applies, may be completed by the receiver, used for search.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $account
     */
    private $account = null;

    /**
     * Code to indicate the nature of the payment.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The party which submitted the claim or financial transaction.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $submitter
     */
    private $submitter = null;

    /**
     * A resource, such as a ClaimResponse, which contains a commitment to payment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $response
     */
    private $response = null;

    /**
     * The date from the response resource containing a commitment to pay.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $date
     */
    private $date = null;

    /**
     * A reference to the individual who is responsible for inquiries regarding the response and its payment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $responsible
     */
    private $responsible = null;

    /**
     * The party which is receiving the payment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $payee
     */
    private $payee = null;

    /**
     * The monetary amount allocated from the total payment to the payable.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $amount
     */
    private $amount = null;

    /**
     * Gets as identifier
     *
     * Unique identifier for the current payment item for the referenced payable.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Unique identifier for the current payment item for the referenced payable.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as predecessor
     *
     * Unique identifier for the prior payment item for the referenced payable.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getPredecessor()
    {
        return $this->predecessor;
    }

    /**
     * Sets a new predecessor
     *
     * Unique identifier for the prior payment item for the referenced payable.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $predecessor
     * @return self
     */
    public function setPredecessor(?\TKusy\Hl7Fhir\R5\IdentifierType $predecessor = null)
    {
        $this->predecessor = $predecessor;
        return $this;
    }

    /**
     * Gets as target
     *
     * Specific resource to which the payment/adjustment/advance applies.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Specific resource to which the payment/adjustment/advance applies.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $target
     * @return self
     */
    public function setTarget(?\TKusy\Hl7Fhir\R5\ReferenceType $target = null)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as targetItemString
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTargetItemString()
    {
        return $this->targetItemString;
    }

    /**
     * Sets a new targetItemString
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $targetItemString
     * @return self
     */
    public function setTargetItemString(?\TKusy\Hl7Fhir\R5\StringType $targetItemString = null)
    {
        $this->targetItemString = $targetItemString;
        return $this;
    }

    /**
     * Gets as targetItemIdentifier
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
     */
    public function getTargetItemIdentifier()
    {
        return $this->targetItemIdentifier;
    }

    /**
     * Sets a new targetItemIdentifier
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $targetItemIdentifier
     * @return self
     */
    public function setTargetItemIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $targetItemIdentifier = null)
    {
        $this->targetItemIdentifier = $targetItemIdentifier;
        return $this;
    }

    /**
     * Gets as targetItemPositiveInt
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getTargetItemPositiveInt()
    {
        return $this->targetItemPositiveInt;
    }

    /**
     * Sets a new targetItemPositiveInt
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $targetItemPositiveInt
     * @return self
     */
    public function setTargetItemPositiveInt(?\TKusy\Hl7Fhir\R5\PositiveIntType $targetItemPositiveInt = null)
    {
        $this->targetItemPositiveInt = $targetItemPositiveInt;
        return $this;
    }

    /**
     * Gets as encounter
     *
     * The Encounter to which this payment applies, may be completed by the receiver, used for search.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Sets a new encounter
     *
     * The Encounter to which this payment applies, may be completed by the receiver, used for search.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $encounter
     * @return self
     */
    public function setEncounter(?\TKusy\Hl7Fhir\R5\ReferenceType $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * Gets as account
     *
     * The Account to which this payment applies, may be completed by the receiver, used for search.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * The Account to which this payment applies, may be completed by the receiver, used for search.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $account
     * @return self
     */
    public function setAccount(?\TKusy\Hl7Fhir\R5\ReferenceType $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as type
     *
     * Code to indicate the nature of the payment.
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
     * Code to indicate the nature of the payment.
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
     * Gets as submitter
     *
     * The party which submitted the claim or financial transaction.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubmitter()
    {
        return $this->submitter;
    }

    /**
     * Sets a new submitter
     *
     * The party which submitted the claim or financial transaction.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $submitter
     * @return self
     */
    public function setSubmitter(?\TKusy\Hl7Fhir\R5\ReferenceType $submitter = null)
    {
        $this->submitter = $submitter;
        return $this;
    }

    /**
     * Gets as response
     *
     * A resource, such as a ClaimResponse, which contains a commitment to payment.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Sets a new response
     *
     * A resource, such as a ClaimResponse, which contains a commitment to payment.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $response
     * @return self
     */
    public function setResponse(?\TKusy\Hl7Fhir\R5\ReferenceType $response = null)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date from the response resource containing a commitment to pay.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date from the response resource containing a commitment to pay.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as responsible
     *
     * A reference to the individual who is responsible for inquiries regarding the response and its payment.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Sets a new responsible
     *
     * A reference to the individual who is responsible for inquiries regarding the response and its payment.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $responsible
     * @return self
     */
    public function setResponsible(?\TKusy\Hl7Fhir\R5\ReferenceType $responsible = null)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Gets as payee
     *
     * The party which is receiving the payment.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * Sets a new payee
     *
     * The party which is receiving the payment.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $payee
     * @return self
     */
    public function setPayee(?\TKusy\Hl7Fhir\R5\ReferenceType $payee = null)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The monetary amount allocated from the total payment to the payable.
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
     * The monetary amount allocated from the total payment to the payable.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $amount
     * @return self
     */
    public function setAmount(?\TKusy\Hl7Fhir\R5\MoneyType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }


}

