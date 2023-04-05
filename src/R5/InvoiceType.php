<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InvoiceType
 *
 * Invoice containing collected ChargeItems from an Account with calculated individual and total price for Billing purpose.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 * XSD Type: Invoice
 */
class InvoiceType extends DomainResourceType
{

    /**
     * Identifier of this Invoice, often used for reference in correspondence about this invoice or for tracking of payments.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType[] $identifier
     */
    private $identifier = null;

    /**
     * The current state of the Invoice.
     *
     * @var \TKusy\Hl7Fhir\R5\InvoiceStatusType $status
     */
    private $status = null;

    /**
     * In case of Invoice cancellation a reason must be given (entered in error, superseded by corrected invoice etc.).
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $cancelledReason
     */
    private $cancelledReason = null;

    /**
     * Type of Invoice depending on domain, realm an usage (e.g. internal/external, dental, preliminary).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The individual or set of individuals receiving the goods and services billed in this invoice.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $subject
     */
    private $subject = null;

    /**
     * The individual or Organization responsible for balancing of this invoice.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $recipient
     */
    private $recipient = null;

    /**
     * Depricared by the element below.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $date
     */
    private $date = null;

    /**
     * Date/time(s) of when this Invoice was posted.
     *
     * @var \TKusy\Hl7Fhir\R5\DateTimeType $creation
     */
    private $creation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $periodDate
     */
    private $periodDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $periodPeriod
     */
    private $periodPeriod = null;

    /**
     * Indicates who or what performed or participated in the charged service.
     *
     * @var \TKusy\Hl7Fhir\R5\InvoiceParticipantType[] $participant
     */
    private $participant = null;

    /**
     * The organizationissuing the Invoice.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $issuer
     */
    private $issuer = null;

    /**
     * Account which is supposed to be balanced with this Invoice.
     *
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $account
     */
    private $account = null;

    /**
     * Each line item represents one charge for goods and services rendered. Details such.ofType(date), code and amount are found in the referenced ChargeItem resource.
     *
     * @var \TKusy\Hl7Fhir\R5\InvoiceLineItemType[] $lineItem
     */
    private $lineItem = null;

    /**
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     *
     * @var \TKusy\Hl7Fhir\R5\MonetaryComponentType[] $totalPriceComponent
     */
    private $totalPriceComponent = null;

    /**
     * Invoice total , taxes excluded.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $totalNet
     */
    private $totalNet = null;

    /**
     * Invoice total, tax included.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $totalGross
     */
    private $totalGross = null;

    /**
     * Payment details such as banking details, period of payment, deductibles, methods of payment.
     *
     * @var \TKusy\Hl7Fhir\R5\MarkdownType $paymentTerms
     */
    private $paymentTerms = null;

    /**
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @var \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     */
    private $note = null;

    /**
     * Adds as identifier
     *
     * Identifier of this Invoice, often used for reference in correspondence about this invoice or for tracking of payments.
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
     * Identifier of this Invoice, often used for reference in correspondence about this invoice or for tracking of payments.
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
     * Identifier of this Invoice, often used for reference in correspondence about this invoice or for tracking of payments.
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
     * Identifier of this Invoice, often used for reference in correspondence about this invoice or for tracking of payments.
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
     * Identifier of this Invoice, often used for reference in correspondence about this invoice or for tracking of payments.
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
     * The current state of the Invoice.
     *
     * @return \TKusy\Hl7Fhir\R5\InvoiceStatusType
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The current state of the Invoice.
     *
     * @param \TKusy\Hl7Fhir\R5\InvoiceStatusType $status
     * @return self
     */
    public function setStatus(\TKusy\Hl7Fhir\R5\InvoiceStatusType $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as cancelledReason
     *
     * In case of Invoice cancellation a reason must be given (entered in error, superseded by corrected invoice etc.).
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getCancelledReason()
    {
        return $this->cancelledReason;
    }

    /**
     * Sets a new cancelledReason
     *
     * In case of Invoice cancellation a reason must be given (entered in error, superseded by corrected invoice etc.).
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $cancelledReason
     * @return self
     */
    public function setCancelledReason(?\TKusy\Hl7Fhir\R5\StringType $cancelledReason = null)
    {
        $this->cancelledReason = $cancelledReason;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type of Invoice depending on domain, realm an usage (e.g. internal/external, dental, preliminary).
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
     * Type of Invoice depending on domain, realm an usage (e.g. internal/external, dental, preliminary).
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
     * Gets as subject
     *
     * The individual or set of individuals receiving the goods and services billed in this invoice.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * The individual or set of individuals receiving the goods and services billed in this invoice.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $subject
     * @return self
     */
    public function setSubject(?\TKusy\Hl7Fhir\R5\ReferenceType $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as recipient
     *
     * The individual or Organization responsible for balancing of this invoice.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * The individual or Organization responsible for balancing of this invoice.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $recipient
     * @return self
     */
    public function setRecipient(?\TKusy\Hl7Fhir\R5\ReferenceType $recipient = null)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as date
     *
     * Depricared by the element below.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Depricared by the element below.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $date
     * @return self
     */
    public function setDate(?\TKusy\Hl7Fhir\R5\DateTimeType $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as creation
     *
     * Date/time(s) of when this Invoice was posted.
     *
     * @return \TKusy\Hl7Fhir\R5\DateTimeType
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Sets a new creation
     *
     * Date/time(s) of when this Invoice was posted.
     *
     * @param \TKusy\Hl7Fhir\R5\DateTimeType $creation
     * @return self
     */
    public function setCreation(?\TKusy\Hl7Fhir\R5\DateTimeType $creation = null)
    {
        $this->creation = $creation;
        return $this;
    }

    /**
     * Gets as periodDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getPeriodDate()
    {
        return $this->periodDate;
    }

    /**
     * Sets a new periodDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $periodDate
     * @return self
     */
    public function setPeriodDate(?\TKusy\Hl7Fhir\R5\DateType $periodDate = null)
    {
        $this->periodDate = $periodDate;
        return $this;
    }

    /**
     * Gets as periodPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getPeriodPeriod()
    {
        return $this->periodPeriod;
    }

    /**
     * Sets a new periodPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $periodPeriod
     * @return self
     */
    public function setPeriodPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $periodPeriod = null)
    {
        $this->periodPeriod = $periodPeriod;
        return $this;
    }

    /**
     * Adds as participant
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InvoiceParticipantType $participant
     */
    public function addToParticipant(\TKusy\Hl7Fhir\R5\InvoiceParticipantType $participant)
    {
        $this->participant[] = $participant;
        return $this;
    }

    /**
     * isset participant
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParticipant($index)
    {
        return isset($this->participant[$index]);
    }

    /**
     * unset participant
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParticipant($index)
    {
        unset($this->participant[$index]);
    }

    /**
     * Gets as participant
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @return \TKusy\Hl7Fhir\R5\InvoiceParticipantType[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Sets a new participant
     *
     * Indicates who or what performed or participated in the charged service.
     *
     * @param \TKusy\Hl7Fhir\R5\InvoiceParticipantType[] $participant
     * @return self
     */
    public function setParticipant(array $participant = null)
    {
        $this->participant = $participant;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * The organizationissuing the Invoice.
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * The organizationissuing the Invoice.
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $issuer
     * @return self
     */
    public function setIssuer(?\TKusy\Hl7Fhir\R5\ReferenceType $issuer = null)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as account
     *
     * Account which is supposed to be balanced with this Invoice.
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
     * Account which is supposed to be balanced with this Invoice.
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
     * Adds as lineItem
     *
     * Each line item represents one charge for goods and services rendered. Details such.ofType(date), code and amount are found in the referenced ChargeItem resource.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\InvoiceLineItemType $lineItem
     */
    public function addToLineItem(\TKusy\Hl7Fhir\R5\InvoiceLineItemType $lineItem)
    {
        $this->lineItem[] = $lineItem;
        return $this;
    }

    /**
     * isset lineItem
     *
     * Each line item represents one charge for goods and services rendered. Details such.ofType(date), code and amount are found in the referenced ChargeItem resource.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineItem($index)
    {
        return isset($this->lineItem[$index]);
    }

    /**
     * unset lineItem
     *
     * Each line item represents one charge for goods and services rendered. Details such.ofType(date), code and amount are found in the referenced ChargeItem resource.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineItem($index)
    {
        unset($this->lineItem[$index]);
    }

    /**
     * Gets as lineItem
     *
     * Each line item represents one charge for goods and services rendered. Details such.ofType(date), code and amount are found in the referenced ChargeItem resource.
     *
     * @return \TKusy\Hl7Fhir\R5\InvoiceLineItemType[]
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Sets a new lineItem
     *
     * Each line item represents one charge for goods and services rendered. Details such.ofType(date), code and amount are found in the referenced ChargeItem resource.
     *
     * @param \TKusy\Hl7Fhir\R5\InvoiceLineItemType[] $lineItem
     * @return self
     */
    public function setLineItem(array $lineItem = null)
    {
        $this->lineItem = $lineItem;
        return $this;
    }

    /**
     * Adds as totalPriceComponent
     *
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MonetaryComponentType $totalPriceComponent
     */
    public function addToTotalPriceComponent(\TKusy\Hl7Fhir\R5\MonetaryComponentType $totalPriceComponent)
    {
        $this->totalPriceComponent[] = $totalPriceComponent;
        return $this;
    }

    /**
     * isset totalPriceComponent
     *
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalPriceComponent($index)
    {
        return isset($this->totalPriceComponent[$index]);
    }

    /**
     * unset totalPriceComponent
     *
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalPriceComponent($index)
    {
        unset($this->totalPriceComponent[$index]);
    }

    /**
     * Gets as totalPriceComponent
     *
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     *
     * @return \TKusy\Hl7Fhir\R5\MonetaryComponentType[]
     */
    public function getTotalPriceComponent()
    {
        return $this->totalPriceComponent;
    }

    /**
     * Sets a new totalPriceComponent
     *
     * The total amount for the Invoice may be calculated as the sum of the line items with surcharges/deductions that apply in certain conditions. The priceComponent element can be used to offer transparency to the recipient of the Invoice of how the total price was calculated.
     *
     * @param \TKusy\Hl7Fhir\R5\MonetaryComponentType[] $totalPriceComponent
     * @return self
     */
    public function setTotalPriceComponent(array $totalPriceComponent = null)
    {
        $this->totalPriceComponent = $totalPriceComponent;
        return $this;
    }

    /**
     * Gets as totalNet
     *
     * Invoice total , taxes excluded.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getTotalNet()
    {
        return $this->totalNet;
    }

    /**
     * Sets a new totalNet
     *
     * Invoice total , taxes excluded.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $totalNet
     * @return self
     */
    public function setTotalNet(?\TKusy\Hl7Fhir\R5\MoneyType $totalNet = null)
    {
        $this->totalNet = $totalNet;
        return $this;
    }

    /**
     * Gets as totalGross
     *
     * Invoice total, tax included.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getTotalGross()
    {
        return $this->totalGross;
    }

    /**
     * Sets a new totalGross
     *
     * Invoice total, tax included.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $totalGross
     * @return self
     */
    public function setTotalGross(?\TKusy\Hl7Fhir\R5\MoneyType $totalGross = null)
    {
        $this->totalGross = $totalGross;
        return $this;
    }

    /**
     * Gets as paymentTerms
     *
     * Payment details such as banking details, period of payment, deductibles, methods of payment.
     *
     * @return \TKusy\Hl7Fhir\R5\MarkdownType
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * Payment details such as banking details, period of payment, deductibles, methods of payment.
     *
     * @param \TKusy\Hl7Fhir\R5\MarkdownType $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?\TKusy\Hl7Fhir\R5\MarkdownType $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as note
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\AnnotationType $note
     */
    public function addToNote(\TKusy\Hl7Fhir\R5\AnnotationType $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @return \TKusy\Hl7Fhir\R5\AnnotationType[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Comments made about the invoice by the issuer, subject, or other participants.
     *
     * @param \TKusy\Hl7Fhir\R5\AnnotationType[] $note
     * @return self
     */
    public function setNote(array $note = null)
    {
        $this->note = $note;
        return $this;
    }


}

