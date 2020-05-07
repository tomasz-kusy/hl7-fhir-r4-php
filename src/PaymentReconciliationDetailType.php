<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PaymentReconciliationDetailType
 *
 * This resource provides the details including amount of a payment and allocates the payment items being paid.
 * XSD Type: PaymentReconciliation.Detail
 */
class PaymentReconciliationDetailType extends BackboneElementType
{

    /**
     * Unique identifier for the current payment item for the referenced payable.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Unique identifier for the prior payment item for the referenced payable.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $predecessor
     */
    private $predecessor = null;

    /**
     * Code to indicate the nature of the payment.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * A resource, such as a Claim, the evaluation of which could lead to payment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $request
     */
    private $request = null;

    /**
     * The party which submitted the claim or financial transaction.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $submitter
     */
    private $submitter = null;

    /**
     * A resource, such as a ClaimResponse, which contains a commitment to payment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $response
     */
    private $response = null;

    /**
     * The date from the response resource containing a commitment to pay.
     *
     * @var \TKusy\Hl7FhirR4\DateType $date
     */
    private $date = null;

    /**
     * A reference to the individual who is responsible for inquiries regarding the response and its payment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $responsible
     */
    private $responsible = null;

    /**
     * The party which is receiving the payment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $payee
     */
    private $payee = null;

    /**
     * The monetary amount allocated from the total payment to the payable.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $amount
     */
    private $amount = null;

    /**
     * Gets as identifier
     *
     * Unique identifier for the current payment item for the referenced payable.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
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
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as predecessor
     *
     * Unique identifier for the prior payment item for the referenced payable.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
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
     * @param \TKusy\Hl7FhirR4\IdentifierType $predecessor
     * @return self
     */
    public function setPredecessor(\TKusy\Hl7FhirR4\IdentifierType $predecessor)
    {
        $this->predecessor = $predecessor;
        return $this;
    }

    /**
     * Gets as type
     *
     * Code to indicate the nature of the payment.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as request
     *
     * A resource, such as a Claim, the evaluation of which could lead to payment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets a new request
     *
     * A resource, such as a Claim, the evaluation of which could lead to payment.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $request
     * @return self
     */
    public function setRequest(\TKusy\Hl7FhirR4\ReferenceType $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as submitter
     *
     * The party which submitted the claim or financial transaction.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $submitter
     * @return self
     */
    public function setSubmitter(\TKusy\Hl7FhirR4\ReferenceType $submitter)
    {
        $this->submitter = $submitter;
        return $this;
    }

    /**
     * Gets as response
     *
     * A resource, such as a ClaimResponse, which contains a commitment to payment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $response
     * @return self
     */
    public function setResponse(\TKusy\Hl7FhirR4\ReferenceType $response)
    {
        $this->response = $response;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date from the response resource containing a commitment to pay.
     *
     * @return \TKusy\Hl7FhirR4\DateType
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
     * @param \TKusy\Hl7FhirR4\DateType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7FhirR4\DateType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as responsible
     *
     * A reference to the individual who is responsible for inquiries regarding the response and its payment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $responsible
     * @return self
     */
    public function setResponsible(\TKusy\Hl7FhirR4\ReferenceType $responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Gets as payee
     *
     * The party which is receiving the payment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
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
     * @param \TKusy\Hl7FhirR4\ReferenceType $payee
     * @return self
     */
    public function setPayee(\TKusy\Hl7FhirR4\ReferenceType $payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The monetary amount allocated from the total payment to the payable.
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
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
     * @param \TKusy\Hl7FhirR4\MoneyType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7FhirR4\MoneyType $amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

