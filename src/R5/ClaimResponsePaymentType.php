<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponsePaymentType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.Payment
 */
class ClaimResponsePaymentType extends BackboneElementType
{

    /**
     * Whether this represents partial or complete payment of the benefits payable.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Total amount of all adjustments to this payment included in this transaction which are not related to this claim's adjudication.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $adjustment
     */
    private $adjustment = null;

    /**
     * Reason for the payment adjustment.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $adjustmentReason
     */
    private $adjustmentReason = null;

    /**
     * Estimated date the payment will be issued or the actual issue date of payment.
     *
     * @var \TKusy\Hl7Fhir\R5\DateType $date
     */
    private $date = null;

    /**
     * Benefits payable less any payment adjustment.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $amount
     */
    private $amount = null;

    /**
     * Issuer's unique identifier for the payment instrument.
     *
     * @var \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Gets as type
     *
     * Whether this represents partial or complete payment of the benefits payable.
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
     * Whether this represents partial or complete payment of the benefits payable.
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
     * Gets as adjustment
     *
     * Total amount of all adjustments to this payment included in this transaction which are not related to this claim's adjudication.
     *
     * @return \TKusy\Hl7Fhir\R5\MoneyType
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    /**
     * Sets a new adjustment
     *
     * Total amount of all adjustments to this payment included in this transaction which are not related to this claim's adjudication.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $adjustment
     * @return self
     */
    public function setAdjustment(?\TKusy\Hl7Fhir\R5\MoneyType $adjustment = null)
    {
        $this->adjustment = $adjustment;
        return $this;
    }

    /**
     * Gets as adjustmentReason
     *
     * Reason for the payment adjustment.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAdjustmentReason()
    {
        return $this->adjustmentReason;
    }

    /**
     * Sets a new adjustmentReason
     *
     * Reason for the payment adjustment.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $adjustmentReason
     * @return self
     */
    public function setAdjustmentReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $adjustmentReason = null)
    {
        $this->adjustmentReason = $adjustmentReason;
        return $this;
    }

    /**
     * Gets as date
     *
     * Estimated date the payment will be issued or the actual issue date of payment.
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
     * Estimated date the payment will be issued or the actual issue date of payment.
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
     * Gets as amount
     *
     * Benefits payable less any payment adjustment.
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
     * Benefits payable less any payment adjustment.
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
     * Gets as identifier
     *
     * Issuer's unique identifier for the payment instrument.
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
     * Issuer's unique identifier for the payment instrument.
     *
     * @param \TKusy\Hl7Fhir\R5\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(?\TKusy\Hl7Fhir\R5\IdentifierType $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
    }


}

