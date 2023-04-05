<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing PaymentReconciliationType
 *
 * This resource provides the details including amount of a payment and allocates the payment items being paid.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: PaymentReconciliation
 */
class PaymentReconciliationType extends DomainResourceType
{

    /**
     * A unique identifier assigned to this payment reconciliation.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * Code to indicate the nature of the payment such as payment, adjustment.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The status of the resource instance.
     *
     * @var \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status
     */
    private $status = null;

    /**
     * The workflow or activity which gave rise to or during which the payment ocurred such as a kiosk, deposit on account, periodic payment etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $kind
     */
    private $kind = null;

    /**
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     *
     * @var \TKusy\Hl7Fhir\R5\PeriodType $period
     */
    private $period = null;

    /**
     * The date when the resource was created.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $created
     */
    private $created = null;

    /**
     * Payment enterer if not the actual payment issuer.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $enterer
     */
    private $enterer = null;

    /**
     * The type of the source such as patient or insurance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $issuerType
     */
    private $issuerType = null;

    /**
     * The party who generated the payment.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $paymentIssuer
     */
    private $paymentIssuer = null;

    /**
     * Original request resource reference.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $request
     */
    private $request = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $requestor
     */
    private $requestor = null;

    /**
     * The outcome of a request for a reconciliation.
     *
     * @var \TKusy\Hl7Fhir\R5\PaymentOutcomeType $outcome
     */
    private $outcome = null;

    /**
     * A human readable description of the status of the request for the reconciliation.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $disposition
     */
    private $disposition = null;

    /**
     * The date of payment as indicated on the financial instrument.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $date
     */
    private $date = null;

    /**
     * The location of the site or device for electronic transfers or physical location for cash payments.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $location
     */
    private $location = null;

    /**
     * The means of payment such as check, card cash, or electronic funds transfer.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     */
    private $method = null;

    /**
     * The card brand such as debit, Visa, Amex etc. used if a card is the method of payment.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $cardBrand
     */
    private $cardBrand = null;

    /**
     * A portion of the account number, often the last 4 digits, used for verification not charging purposes.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $accountNumber
     */
    private $accountNumber = null;

    /**
     * The year and month (YYYY-MM) when the instrument, typically card, expires.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $expirationDate
     */
    private $expirationDate = null;

    /**
     * The name of the card processor, etf processor, bank for checks.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $processor
     */
    private $processor = null;

    /**
     * The check number, eft reference, car processor reference.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $referenceNumber
     */
    private $referenceNumber = null;

    /**
     * An alphanumeric issued by the processor to confirm the successful issuance of payment.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $authorization
     */
    private $authorization = null;

    /**
     * The amount offered by the issuer, typically applies to cash when the issuer provides an amount in bank note denominations equal to or excess of the amount actually being paid.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $tenderedAmount
     */
    private $tenderedAmount = null;

    /**
     * The amount returned by the receiver which is excess to the amount payable, often referred to as 'change'.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $returnedAmount
     */
    private $returnedAmount = null;

    /**
     * Total payment amount as indicated on the financial instrument.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $amount
     */
    private $amount = null;

    /**
     * Issuer's unique identifier for the payment instrument.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $paymentIdentifier
     */
    private $paymentIdentifier = null;

    /**
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @var \TKusy\Hl7Fhir\R5\PaymentReconciliationAllocationType[] $allocation
     */
    private $allocation = null;

    /**
     * A code for the form to be used for printing the content.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $formCode
     */
    private $formCode = null;

    /**
     * A note that describes or explains the processing in a human readable form.
     *
     * @var \TKusy\Hl7Fhir\R5\PaymentReconciliationProcessNoteType[] $processNote
     */
    private $processNote = null;

    /**
     * Adds as identifier
     *
     * A unique identifier assigned to this payment reconciliation.
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
     * @return \TKusy\Hl7Fhir\R5\IdentifierType[]
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     * @return self
     */
    public function setIdentifier(array $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as type
     *
     * Code to indicate the nature of the payment such as payment, adjustment.
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
     * Code to indicate the nature of the payment such as payment, adjustment.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the resource instance.
     *
     * @return \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType
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
     * @param \TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\FinancialResourceStatusCodesType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as kind
     *
     * The workflow or activity which gave rise to or during which the payment ocurred such as a kiosk, deposit on account, periodic payment etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * The workflow or activity which gave rise to or during which the payment ocurred such as a kiosk, deposit on account, periodic payment etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $kind
     * @return self
     */
    public function setKind(?\TKusy\Hl7Fhir\R5\CodeableConceptType $kind = null)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Gets as period
     *
     * The period of time for which payments have been gathered into this bulk payment for settlement.
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
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
     * @param \TKusy\Hl7Fhir\R5\PeriodType $period
     * @return self
     */
    public function setPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $period = null)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as created
     *
     * The date when the resource was created.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
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
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $created
     * @return self
     */
    public function setCreated(\TKusy\Hl7Fhir\R5\DateTimeType $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as enterer
     *
     * Payment enterer if not the actual payment issuer.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * Sets a new enterer
     *
     * Payment enterer if not the actual payment issuer.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $enterer
     * @return self
     */
    public function setEnterer(?\TKusy\Hl7Fhir\R5\ReferenceType $enterer = null)
    {
        $this->enterer = $enterer;
        return $this;
    }

    /**
     * Gets as issuerType
     *
     * The type of the source such as patient or insurance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getIssuerType()
    {
        return $this->issuerType;
    }

    /**
     * Sets a new issuerType
     *
     * The type of the source such as patient or insurance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $issuerType
     * @return self
     */
    public function setIssuerType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $issuerType = null)
    {
        $this->issuerType = $issuerType;
        return $this;
    }

    /**
     * Gets as paymentIssuer
     *
     * The party who generated the payment.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $paymentIssuer
     * @return self
     */
    public function setPaymentIssuer(?\TKusy\Hl7Fhir\R5\ReferenceType $paymentIssuer = null)
    {
        $this->paymentIssuer = $paymentIssuer;
        return $this;
    }

    /**
     * Gets as request
     *
     * Original request resource reference.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $request
     * @return self
     */
    public function setRequest(?\TKusy\Hl7Fhir\R5\ReferenceType $request = null)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * Gets as requestor
     *
     * The practitioner who is responsible for the services rendered to the patient.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
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
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $requestor
     * @return self
     */
    public function setRequestor(?\TKusy\Hl7Fhir\R5\ReferenceType $requestor = null)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Gets as outcome
     *
     * The outcome of a request for a reconciliation.
     *
     * @return \TKusy\Hl7Fhir\R5\PaymentOutcomeType
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
     * @param \TKusy\Hl7Fhir\R5\PaymentOutcomeType $outcome
     * @return self
     */
    public function setOutcome(?\TKusy\Hl7Fhir\R5\PaymentOutcomeType $outcome = null)
    {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * Gets as disposition
     *
     * A human readable description of the status of the request for the reconciliation.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
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
     * @param \TKusy\Hl7Fhir\R5\StringType $disposition
     * @return self
     */
    public function setDisposition(?\TKusy\Hl7Fhir\R5\StringType $disposition = null)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * Gets as date
     *
     * The date of payment as indicated on the financial instrument.
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
     * The date of payment as indicated on the financial instrument.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $date
     * @return self
     */
    public function setDate(\TKusy\Hl7Fhir\R5\DateType $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as location
     *
     * The location of the site or device for electronic transfers or physical location for cash payments.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location of the site or device for electronic transfers or physical location for cash payments.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $location
     * @return self
     */
    public function setLocation(?\TKusy\Hl7Fhir\R5\ReferenceType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as method
     *
     * The means of payment such as check, card cash, or electronic funds transfer.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * The means of payment such as check, card cash, or electronic funds transfer.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $method
     * @return self
     */
    public function setMethod(?\TKusy\Hl7Fhir\R5\CodeableConceptType $method = null)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as cardBrand
     *
     * The card brand such as debit, Visa, Amex etc. used if a card is the method of payment.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCardBrand()
    {
        return $this->cardBrand;
    }

    /**
     * Sets a new cardBrand
     *
     * The card brand such as debit, Visa, Amex etc. used if a card is the method of payment.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $cardBrand
     * @return self
     */
    public function setCardBrand(?\TKusy\Hl7Fhir\R5\StringType $cardBrand = null)
    {
        $this->cardBrand = $cardBrand;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * A portion of the account number, often the last 4 digits, used for verification not charging purposes.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * A portion of the account number, often the last 4 digits, used for verification not charging purposes.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $accountNumber
     * @return self
     */
    public function setAccountNumber(?\TKusy\Hl7Fhir\R5\StringType $accountNumber = null)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * The year and month (YYYY-MM) when the instrument, typically card, expires.
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * The year and month (YYYY-MM) when the instrument, typically card, expires.
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $expirationDate
     * @return self
     */
    public function setExpirationDate(?\TKusy\Hl7Fhir\R5\DateType $expirationDate = null)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as processor
     *
     * The name of the card processor, etf processor, bank for checks.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getProcessor()
    {
        return $this->processor;
    }

    /**
     * Sets a new processor
     *
     * The name of the card processor, etf processor, bank for checks.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $processor
     * @return self
     */
    public function setProcessor(?\TKusy\Hl7Fhir\R5\StringType $processor = null)
    {
        $this->processor = $processor;
        return $this;
    }

    /**
     * Gets as referenceNumber
     *
     * The check number, eft reference, car processor reference.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * Sets a new referenceNumber
     *
     * The check number, eft reference, car processor reference.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $referenceNumber
     * @return self
     */
    public function setReferenceNumber(?\TKusy\Hl7Fhir\R5\StringType $referenceNumber = null)
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    /**
     * Gets as authorization
     *
     * An alphanumeric issued by the processor to confirm the successful issuance of payment.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }

    /**
     * Sets a new authorization
     *
     * An alphanumeric issued by the processor to confirm the successful issuance of payment.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $authorization
     * @return self
     */
    public function setAuthorization(?\TKusy\Hl7Fhir\R5\StringType $authorization = null)
    {
        $this->authorization = $authorization;
        return $this;
    }

    /**
     * Gets as tenderedAmount
     *
     * The amount offered by the issuer, typically applies to cash when the issuer provides an amount in bank note denominations equal to or excess of the amount actually being paid.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getTenderedAmount()
    {
        return $this->tenderedAmount;
    }

    /**
     * Sets a new tenderedAmount
     *
     * The amount offered by the issuer, typically applies to cash when the issuer provides an amount in bank note denominations equal to or excess of the amount actually being paid.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $tenderedAmount
     * @return self
     */
    public function setTenderedAmount(?\TKusy\Hl7Fhir\R5\MoneyType $tenderedAmount = null)
    {
        $this->tenderedAmount = $tenderedAmount;
        return $this;
    }

    /**
     * Gets as returnedAmount
     *
     * The amount returned by the receiver which is excess to the amount payable, often referred to as 'change'.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getReturnedAmount()
    {
        return $this->returnedAmount;
    }

    /**
     * Sets a new returnedAmount
     *
     * The amount returned by the receiver which is excess to the amount payable, often referred to as 'change'.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $returnedAmount
     * @return self
     */
    public function setReturnedAmount(?\TKusy\Hl7Fhir\R5\MoneyType $returnedAmount = null)
    {
        $this->returnedAmount = $returnedAmount;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Total payment amount as indicated on the financial instrument.
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
     * Total payment amount as indicated on the financial instrument.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7Fhir\R5\MoneyType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as paymentIdentifier
     *
     * Issuer's unique identifier for the payment instrument.
     *
     * @return \TKusy\Hl7Fhir\R5\IdentifierType
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
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $paymentIdentifier
     * @return self
     */
    public function setPaymentIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $paymentIdentifier = null)
    {
        $this->paymentIdentifier = $paymentIdentifier;
        return $this;
    }

    /**
     * Adds as allocation
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\PaymentReconciliationAllocationType $allocation
     */
    public function addToAllocation(\TKusy\Hl7Fhir\R5\PaymentReconciliationAllocationType $allocation)
    {
        $this->allocation[] = $allocation;
        return $this;
    }

    /**
     * isset allocation
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllocation($index)
    {
        return isset($this->allocation[$index]);
    }

    /**
     * unset allocation
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllocation($index)
    {
        unset($this->allocation[$index]);
    }

    /**
     * Gets as allocation
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @return \TKusy\Hl7Fhir\R5\PaymentReconciliationAllocationType[]
     */
    public function getAllocation()
    {
        return $this->allocation;
    }

    /**
     * Sets a new allocation
     *
     * Distribution of the payment amount for a previously acknowledged payable.
     *
     * @param \TKusy\Hl7Fhir\R5\PaymentReconciliationAllocationType[] $allocation
     * @return self
     */
    public function setAllocation(array $allocation = null)
    {
        $this->allocation = $allocation;
        return $this;
    }

    /**
     * Gets as formCode
     *
     * A code for the form to be used for printing the content.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $formCode
     * @return self
     */
    public function setFormCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $formCode = null)
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
     * @param \TKusy\Hl7Fhir\R5\PaymentReconciliationProcessNoteType $processNote
     */
    public function addToProcessNote(\TKusy\Hl7Fhir\R5\PaymentReconciliationProcessNoteType $processNote)
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
     * @return \TKusy\Hl7Fhir\R5\PaymentReconciliationProcessNoteType[]
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
     * @param \TKusy\Hl7Fhir\R5\PaymentReconciliationProcessNoteType[] $processNote
     * @return self
     */
    public function setProcessNote(array $processNote = null)
    {
        $this->processNote = $processNote;
        return $this;
    }


}

