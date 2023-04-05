<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing ClaimResponseAdjudicationType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.Adjudication
 */
class ClaimResponseAdjudicationType extends BackboneElementType
{

    /**
     * A code to indicate the information type of this adjudication record. Information types may include the value submitted, maximum values or percentages allowed or payable under the plan, amounts that: the patient is responsible for in aggregate or pertaining to this item; amounts paid by other coverages; and, the benefit payable for this item.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * A code supporting the understanding of the adjudication result and explaining variance from expected amount.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     */
    private $reason = null;

    /**
     * Monetary amount associated with the category.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $amount
     */
    private $amount = null;

    /**
     * A non-monetary value associated with the category. Mutually exclusive to the amount element above.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Gets as category
     *
     * A code to indicate the information type of this adjudication record. Information types may include the value submitted, maximum values or percentages allowed or payable under the plan, amounts that: the patient is responsible for in aggregate or pertaining to this item; amounts paid by other coverages; and, the benefit payable for this item.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A code to indicate the information type of this adjudication record. Information types may include the value submitted, maximum values or percentages allowed or payable under the plan, amounts that: the patient is responsible for in aggregate or pertaining to this item; amounts paid by other coverages; and, the benefit payable for this item.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7Fhir\R5\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A code supporting the understanding of the adjudication result and explaining variance from expected amount.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * A code supporting the understanding of the adjudication result and explaining variance from expected amount.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $reason
     * @return self
     */
    public function setReason(?\TKusy\Hl7Fhir\R5\CodeableConceptType $reason = null)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Monetary amount associated with the category.
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
     * Monetary amount associated with the category.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $amount
     * @return self
     */
    public function setAmount(?\TKusy\Hl7Fhir\R5\MoneyType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * A non-monetary value associated with the category. Mutually exclusive to the amount element above.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * A non-monetary value associated with the category. Mutually exclusive to the amount element above.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

