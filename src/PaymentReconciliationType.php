<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing PaymentReconciliationType
 *
 * This resource provides the details including amount of a payment and allocates the payment items being paid.If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: PaymentReconciliation
 */
class PaymentReconciliationType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this payment reconciliation.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7FhirR4\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     *
     * @var \TKusy\Hl7FhirR4\PeriodType $period
     */
    private $period = null;

    /**
     * The date when the resource was created.
     *
     * @var \TKusy\Hl7FhirR4\DateTimeType $created
     */
    private $created = null;

    /**
     * The party who generated the payment.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $paymentIssuer
     */
    private $paymentIssuer = null;

    /**
     * Original request resource reference.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $request
     */
    private $request = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $requestor
     */
    private $requestor = null;

    /**
     * The outcome of a request for a reconciliation.
     *
     * @var \TKusy\Hl7FhirR4\RemittanceOutcomeType $outcome
     */
    private $outcome = null;

    /**
     * A human readable description of the status of the request for the reconciliation.
     *
     * @var \TKusy\Hl7FhirR4\StringType $disposition
     */
    private $disposition = null;

    /**
     * The date of payment as indicated on the financial instrument.
     *
     * @var \TKusy\Hl7FhirR4\DateType $paymentDate
     */
    private $paymentDate = null;

    /**
     * Total payment amount as indicated on the financial instrument.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $paymentAmount
     */
    private $paymentAmount = null;

    /**
     * Issuer's unique identifier for the payment instrument.
     *
     * @var \TKusy\Hl7FhirR4\IdentifierType $paymentIdentifier
     */
    private $paymentIdentifier = null;

    /**
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @var \TKusy\Hl7FhirR4\PaymentReconciliationDetailType[] $detail
     */
    private $detail = null;

    /**
     * A code for the form to be used for printing the content.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $formCode
     */
    private $formCode = null;

    /**
     * A note that describes or explains the processing in a human readable form.
     *
     * @var \TKusy\Hl7FhirR4\PaymentReconciliationProcessNoteType[] $processNote
     */
    private $processNote = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this payment reconciliation.
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
     * A unique identifier assigned to this payment reconciliation.
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
     * A unique identifier assigned to this payment reconciliation.
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
     * A unique identifier assigned to this payment reconciliation.
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
     * A unique identifier assigned to this payment reconciliation.
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
     * Gets as period
     *
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     *
     * @return \TKusy\Hl7FhirR4\PeriodType
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     *
     * @param \TKusy\Hl7FhirR4\PeriodType $period
     * @return self
     */
    public function setPeriod(\TKusy\Hl7FhirR4\PeriodType $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date when the resource was created.
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
     * The date when the resource was created.
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
     * Gets as paymentIssuer
     *
     * The party who generated the payment.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getPaymentIssuer()
    {
        return $this->paymentIssuer;
    }

    /**
     * Sets a new paymentIssuer
     *
     * The party who generated the payment.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $paymentIssuer
     * @return self
     */
    public function setPaymentIssuer(\TKusy\Hl7FhirR4\ReferenceType $paymentIssuer)
    {
        $this->paymentIssuer = $paymentIssuer;
        return $this;
    }

    /**
     * Gets as request
     *
     * Original request resource reference.
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
     * Original request resource reference.
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
     * Gets as requestor
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Sets a new requestor
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $requestor
     * @return self
     */
    public function setRequestor(\TKusy\Hl7FhirR4\ReferenceType $requestor)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * The outcome of a request for a reconciliation.
     *
     * @return \TKusy\Hl7FhirR4\RemittanceOutcomeType
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Sets a new outcome
     *
     * The outcome of a request for a reconciliation.
     *
     * @param \TKusy\Hl7FhirR4\RemittanceOutcomeType $outcome
     * @return self
     */
    public function setOutcome(\TKusy\Hl7FhirR4\RemittanceOutcomeType $outcome)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as disposition
     *
     * A human readable description of the status of the request for the reconciliation.
     *
     * @return \TKusy\Hl7FhirR4\StringType
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * Sets a new disposition
     *
     * A human readable description of the status of the request for the reconciliation.
     *
     * @param \TKusy\Hl7FhirR4\StringType $disposition
     * @return self
     */
    public function setDisposition(\TKusy\Hl7FhirR4\StringType $disposition)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Gets as paymentDate
     *
     * The date of payment as indicated on the financial instrument.
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
     * The date of payment as indicated on the financial instrument.
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
     * Gets as paymentAmount
     *
     * Total payment amount as indicated on the financial instrument.
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Sets a new paymentAmount
     *
     * Total payment amount as indicated on the financial instrument.
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $paymentAmount
     * @return self
     */
    public function setPaymentAmount(\TKusy\Hl7FhirR4\MoneyType $paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
        return $this;
    }

    /**
     * Gets as paymentIdentifier
     *
     * Issuer's unique identifier for the payment instrument.
     *
     * @return \TKusy\Hl7FhirR4\IdentifierType
     */
    public function getPaymentIdentifier()
    {
        return $this->paymentIdentifier;
    }

    /**
     * Sets a new paymentIdentifier
     *
     * Issuer's unique identifier for the payment instrument.
     *
     * @param \TKusy\Hl7FhirR4\IdentifierType $paymentIdentifier
     * @return self
     */
    public function setPaymentIdentifier(\TKusy\Hl7FhirR4\IdentifierType $paymentIdentifier)
    {
        $this->paymentIdentifier = $paymentIdentifier;
        return $this;
    }

    /**
     * Adds as detail
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PaymentReconciliationDetailType $detail
     */
    public function addToDetail(\TKusy\Hl7FhirR4\PaymentReconciliationDetailType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @return \TKusy\Hl7FhirR4\PaymentReconciliationDetailType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @param \TKusy\Hl7FhirR4\PaymentReconciliationDetailType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * Gets as formCode
     *
     * A code for the form to be used for printing the content.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getFormCode()
    {
        return $this->formCode;
    }

    /**
     * Sets a new formCode
     *
     * A code for the form to be used for printing the content.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $formCode
     * @return self
     */
    public function setFormCode(\TKusy\Hl7FhirR4\CodeableConceptType $formCode)
    {
        $this->formCode = $formCode;
        return $this;
    }

    /**
     * Adds as processNote
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PaymentReconciliationProcessNoteType $processNote
     */
    public function addToProcessNote(\TKusy\Hl7FhirR4\PaymentReconciliationProcessNoteType $processNote)
    {
        $this->processNote[] = $processNote;
        return $this;
    }

    /**
     * isset processNote
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessNote($index)
    {
        return isset($this->processNote[$index]);
    }

    /**
     * unset processNote
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessNote($index)
    {
        unset($this->processNote[$index]);
    }

    /**
     * Gets as processNote
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @return \TKusy\Hl7FhirR4\PaymentReconciliationProcessNoteType[]
     */
    public function getProcessNote()
    {
        return $this->processNote;
    }

    /**
     * Sets a new processNote
     *
     * A note that describes or explains the processing in a human readable form.
     *
     * @param \TKusy\Hl7FhirR4\PaymentReconciliationProcessNoteType[] $processNote
     * @return self
     */
    public function setProcessNote(array $processNote)
    {
        $this->processNote = $processNote;
        return $this;
    }


}

