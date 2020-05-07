<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitAdjudicationType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.Adjudication
 */
class ExplanationOfBenefitAdjudicationType extends BackboneElementType
{

    /**
     * A code to indicate the information type of this adjudication record. Information types may include: the value submitted, maximum values or percentages allowed or payable under the plan, amounts that the patient is responsible for in-aggregate or pertaining to this item, amounts paid by other coverages, and the benefit payable for this item.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * A code supporting the understanding of the adjudication result and explaining variance from expected amount.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $reason
     */
    private $reason = null;

    /**
     * Monetary amount associated with the category.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $amount
     */
    private $amount = null;

    /**
     * A non-monetary value associated with the category. Mutually exclusive to the amount element above.
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $value
     */
    private $value = null;

    /**
     * Gets as category
     *
     * A code to indicate the information type of this adjudication record. Information types may include: the value submitted, maximum values or percentages allowed or payable under the plan, amounts that the patient is responsible for in-aggregate or pertaining to this item, amounts paid by other coverages, and the benefit payable for this item.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A code to indicate the information type of this adjudication record. Information types may include: the value submitted, maximum values or percentages allowed or payable under the plan, amounts that the patient is responsible for in-aggregate or pertaining to this item, amounts paid by other coverages, and the benefit payable for this item.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7FhirR4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as reason
     *
     * A code supporting the understanding of the adjudication result and explaining variance from expected amount.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $reason
     * @return self
     */
    public function setReason(\TKusy\Hl7FhirR4\CodeableConceptType $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Monetary amount associated with the category.
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
     * Monetary amount associated with the category.
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
     * Gets as value
     *
     * A non-monetary value associated with the category. Mutually exclusive to the amount element above.
     *
     * @return \TKusy\Hl7FhirR4\DecimalType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A non-monetary value associated with the category. Mutually exclusive to the amount element above.
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7FhirR4\DecimalType $value)
    {
        $this->value = $value;
        return $this;
    }


}

