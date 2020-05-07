<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PaymentNoticeType
 *
 * This resource provides the status of the payment for goods and services rendered, and the request and response resource references.If the element is present, it must have either a @value, an @id, or extensions
 * XSD Type: PaymentNotice
 */
class PaymentNoticeType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this payment notice.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = [
        
    ];

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * Reference of resource for which payment is being made.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $request
     */
    private $request = null;

    /**
     * Reference of response to resource for which payment is being made.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $response
     */
    private $response = null;

    /**
     * The date when this resource was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $provider
     */
    private $provider = null;

    /**
     * A reference to the payment which is the subject of this notice.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $payment
     */
    private $payment = null;

    /**
     * The date when the above payment action occurred.
     *
     * @var \TKusy\Hl7FhirR4\DateType $paymentDate
     */
    private $paymentDate = null;

    /**
     * The party who will receive or has received payment that is the subject of this notification.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $payee
     */
    private $payee = null;

    /**
     * The party who is notified of the payment status.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $recipient
     */
    private $recipient = null;

    /**
     * The amount sent to the payee.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $amount
     */
    private $amount = null;

    /**
     * A code indicating whether payment has been sent or cleared.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $paymentStatus
     */
    private $paymentStatus = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this payment notice.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\IdentifierType $identifier
     */
    public function addToIdentifier(\TKusy\Hl7FhirR4\IdentifierType $identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * isset identifier
     *
     * A unique identifier assigned to this payment notice.
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
     * A unique identifier assigned to this payment notice.
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
     * A unique identifier assigned to this payment notice.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * A unique identifier assigned to this payment notice.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType[] $identifier
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
     * @return \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType
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
     * @param \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as request
     *
     * Reference of resource for which payment is being made.
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
     * Reference of resource for which payment is being made.
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
     * Gets as response
     *
     * Reference of response to resource for which payment is being made.
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
     * Reference of response to resource for which payment is being made.
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
     * Gets as created
     *
     * The date when this resource was created.
     *
     * @return \TKusy\Hl7FhirR4\DateTimeType
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * The date when this resource was created.
     *
     * @param \TKusy\Hl7FhirR4\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7FhirR4\DateTimeType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as provider
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $provider
     * @return self
     */
    public function setProvider(\TKusy\Hl7FhirR4\ReferenceType $provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as payment
     *
     * A reference to the payment which is the subject of this notice.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * A reference to the payment which is the subject of this notice.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $payment
     * @return self
     */
    public function setPayment(\TKusy\Hl7FhirR4\ReferenceType $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as paymentDate
     *
     * The date when the above payment action occurred.
     *
     * @return \TKusy\Hl7FhirR4\DateType
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Sets a new paymentDate
     *
     * The date when the above payment action occurred.
     *
     * @param \TKusy\Hl7FhirR4\DateType $paymentDate
     * @return self
     */
    public function setPaymentDate(\TKusy\Hl7FhirR4\DateType $paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Gets as payee
     *
     * The party who will receive or has received payment that is the subject of this notification.
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
     * The party who will receive or has received payment that is the subject of this notification.
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
     * Gets as recipient
     *
     * The party who is notified of the payment status.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * The party who is notified of the payment status.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $recipient
     * @return self
     */
    public function setRecipient(\TKusy\Hl7FhirR4\ReferenceType $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as amount
     *
     * The amount sent to the payee.
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
     * The amount sent to the payee.
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7FhirR4\MoneyType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as paymentStatus
     *
     * A code indicating whether payment has been sent or cleared.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Sets a new paymentStatus
     *
     * A code indicating whether payment has been sent or cleared.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $paymentStatus
     * @return self
     */
    public function setPaymentStatus(\TKusy\Hl7FhirR4\CodeableConceptType $paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }


}

