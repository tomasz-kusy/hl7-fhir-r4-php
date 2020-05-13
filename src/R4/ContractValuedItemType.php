<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ContractValuedItemType
 *
 * Legally enforceable, formally recorded unilateral or bilateral directive i.e., a policy or agreement.
 * XSD Type: Contract.ValuedItem
 */
class ContractValuedItemType extends BackboneElementType
{

    /**
     * Specific type of Contract Valued Item that may be priced. (choose any one of entity*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $entityCodeableConcept
     */
    private $entityCodeableConcept = null;

    /**
     * Specific type of Contract Valued Item that may be priced. (choose any one of entity*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $entityReference
     */
    private $entityReference = null;

    /**
     * Identifies a Contract Valued Item instance.
     *
     * @var \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * Indicates the time during which this Contract ValuedItem information is effective.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $effectiveTime
     */
    private $effectiveTime = null;

    /**
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * A Contract Valued Item unit valuation measure.
     *
     * @var \TKusy\Hl7Fhir\R4\MoneyType $unitPrice
     */
    private $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $factor
     */
    private $factor = null;

    /**
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $points
     */
    private $points = null;

    /**
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     *
     * @var \TKusy\Hl7Fhir\R4\MoneyType $net
     */
    private $net = null;

    /**
     * Terms of valuation.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $payment
     */
    private $payment = null;

    /**
     * When payment is due.
     *
     * @var \TKusy\Hl7Fhir\R4\DateTimeType $paymentDate
     */
    private $paymentDate = null;

    /**
     * Who will make payment.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $responsible
     */
    private $responsible = null;

    /**
     * Who will receive payment.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $recipient
     */
    private $recipient = null;

    /**
     * Id of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType[] $linkId
     */
    private $linkId = null;

    /**
     * A set of security labels that define which terms are controlled by this condition.
     *
     * @var \TKusy\Hl7Fhir\R4\UnsignedIntType[] $securityLabelNumber
     */
    private $securityLabelNumber = null;

    /**
     * Gets as entityCodeableConcept
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of entity*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getEntityCodeableConcept()
    {
        return $this->entityCodeableConcept;
    }

    /**
     * Sets a new entityCodeableConcept
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of entity*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $entityCodeableConcept
     * @return self
     */
    public function setEntityCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $entityCodeableConcept)
    {
        $this->entityCodeableConcept = $entityCodeableConcept;
        return $this;
    }

    /**
     * Gets as entityReference
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of entity*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getEntityReference()
    {
        return $this->entityReference;
    }

    /**
     * Sets a new entityReference
     *
     * Specific type of Contract Valued Item that may be priced. (choose any one of entity*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $entityReference
     * @return self
     */
    public function setEntityReference(\TKusy\Hl7Fhir\R4\ReferenceType $entityReference)
    {
        $this->entityReference = $entityReference;
        return $this;
    }

    /**
     * Gets as identifier
     *
     * Identifies a Contract Valued Item instance.
     *
     * @return \TKusy\Hl7Fhir\R4\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * Identifies a Contract Valued Item instance.
     *
     * @param \TKusy\Hl7Fhir\R4\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\TKusy\Hl7Fhir\R4\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as effectiveTime
     *
     * Indicates the time during which this Contract ValuedItem information is effective.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getEffectiveTime()
    {
        return $this->effectiveTime;
    }

    /**
     * Sets a new effectiveTime
     *
     * Indicates the time during which this Contract ValuedItem information is effective.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $effectiveTime
     * @return self
     */
    public function setEffectiveTime(\TKusy\Hl7Fhir\R4\DateTimeType $effectiveTime)
    {
        $this->effectiveTime = $effectiveTime;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Specifies the units by which the Contract Valued Item is measured or counted, and quantifies the countable or measurable Contract Valued Item instances.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7Fhir\R4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as unitPrice
     *
     * A Contract Valued Item unit valuation measure.
     *
     * @return \TKusy\Hl7Fhir\R4\MoneyType
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * A Contract Valued Item unit valuation measure.
     *
     * @param \TKusy\Hl7Fhir\R4\MoneyType $unitPrice
     * @return self
     */
    public function setUnitPrice(\TKusy\Hl7Fhir\R4\MoneyType $unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as factor
     *
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Sets a new factor
     *
     * A real number that represents a multiplier used in determining the overall value of the Contract Valued Item delivered. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $factor
     * @return self
     */
    public function setFactor(\TKusy\Hl7Fhir\R4\DecimalType $factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Gets as points
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     *
     * @return \TKusy\Hl7Fhir\R4\DecimalType
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Sets a new points
     *
     * An amount that expresses the weighting (based on difficulty, cost and/or resource intensiveness) associated with the Contract Valued Item delivered. The concept of Points allows for assignment of point values for a Contract Valued Item, such that a monetary amount can be assigned to each point.
     *
     * @param \TKusy\Hl7Fhir\R4\DecimalType $points
     * @return self
     */
    public function setPoints(\TKusy\Hl7Fhir\R4\DecimalType $points)
    {
        $this->points = $points;
        return $this;
    }

    /**
     * Gets as net
     *
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     *
     * @return \TKusy\Hl7Fhir\R4\MoneyType
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * Sets a new net
     *
     * Expresses the product of the Contract Valued Item unitQuantity and the unitPriceAmt. For example, the formula: unit Quantity * unit Price (Cost per Point) * factor Number * points = net Amount. Quantity, factor and points are assumed to be 1 if not supplied.
     *
     * @param \TKusy\Hl7Fhir\R4\MoneyType $net
     * @return self
     */
    public function setNet(\TKusy\Hl7Fhir\R4\MoneyType $net)
    {
        $this->net = $net;
        return $this;
    }

    /**
     * Gets as payment
     *
     * Terms of valuation.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * Terms of valuation.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType $payment
     * @return self
     */
    public function setPayment(\TKusy\Hl7Fhir\R4\StringType $payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as paymentDate
     *
     * When payment is due.
     *
     * @return \TKusy\Hl7Fhir\R4\DateTimeType
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Sets a new paymentDate
     *
     * When payment is due.
     *
     * @param \TKusy\Hl7Fhir\R4\DateTimeType $paymentDate
     * @return self
     */
    public function setPaymentDate(\TKusy\Hl7Fhir\R4\DateTimeType $paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Gets as responsible
     *
     * Who will make payment.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * Sets a new responsible
     *
     * Who will make payment.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $responsible
     * @return self
     */
    public function setResponsible(\TKusy\Hl7Fhir\R4\ReferenceType $responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     * Gets as recipient
     *
     * Who will receive payment.
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * Who will receive payment.
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $recipient
     * @return self
     */
    public function setRecipient(\TKusy\Hl7Fhir\R4\ReferenceType $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Adds as linkId
     *
     * Id of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\StringType $linkId
     */
    public function addToLinkId(\TKusy\Hl7Fhir\R4\StringType $linkId)
    {
        $this->linkId[] = $linkId;
        return $this;
    }

    /**
     * isset linkId
     *
     * Id of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkId($index)
    {
        return isset($this->linkId[$index]);
    }

    /**
     * unset linkId
     *
     * Id of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkId($index)
    {
        unset($this->linkId[$index]);
    }

    /**
     * Gets as linkId
     *
     * Id of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType[]
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * Sets a new linkId
     *
     * Id of the clause or question text related to the context of this valuedItem in the referenced form or QuestionnaireResponse.
     *
     * @param \TKusy\Hl7Fhir\R4\StringType[] $linkId
     * @return self
     */
    public function setLinkId(array $linkId)
    {
        $this->linkId = $linkId;
        return $this;
    }

    /**
     * Adds as securityLabelNumber
     *
     * A set of security labels that define which terms are controlled by this condition.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType $securityLabelNumber
     */
    public function addToSecurityLabelNumber(\TKusy\Hl7Fhir\R4\UnsignedIntType $securityLabelNumber)
    {
        $this->securityLabelNumber[] = $securityLabelNumber;
        return $this;
    }

    /**
     * isset securityLabelNumber
     *
     * A set of security labels that define which terms are controlled by this condition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityLabelNumber($index)
    {
        return isset($this->securityLabelNumber[$index]);
    }

    /**
     * unset securityLabelNumber
     *
     * A set of security labels that define which terms are controlled by this condition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityLabelNumber($index)
    {
        unset($this->securityLabelNumber[$index]);
    }

    /**
     * Gets as securityLabelNumber
     *
     * A set of security labels that define which terms are controlled by this condition.
     *
     * @return \TKusy\Hl7Fhir\R4\UnsignedIntType[]
     */
    public function getSecurityLabelNumber()
    {
        return $this->securityLabelNumber;
    }

    /**
     * Sets a new securityLabelNumber
     *
     * A set of security labels that define which terms are controlled by this condition.
     *
     * @param \TKusy\Hl7Fhir\R4\UnsignedIntType[] $securityLabelNumber
     * @return self
     */
    public function setSecurityLabelNumber(array $securityLabelNumber)
    {
        $this->securityLabelNumber = $securityLabelNumber;
        return $this;
    }


}

