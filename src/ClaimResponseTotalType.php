<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ClaimResponseTotalType
 *
 * This resource provides the adjudication details from the processing of a Claim resource.
 * XSD Type: ClaimResponse.Total
 */
class ClaimResponseTotalType extends BackboneElementType
{

    /**
     * A code to indicate the information type of this adjudication record. Information types may include: the value submitted, maximum values or percentages allowed or payable under the plan, amounts that the patient is responsible for in aggregate or pertaining to this item, amounts paid by other coverages, and the benefit payable for this item.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Monetary total amount associated with the category.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $amount
     */
    private $amount = null;

    /**
     * Gets as category
     *
     * A code to indicate the information type of this adjudication record. Information types may include: the value submitted, maximum values or percentages allowed or payable under the plan, amounts that the patient is responsible for in aggregate or pertaining to this item, amounts paid by other coverages, and the benefit payable for this item.
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
     * A code to indicate the information type of this adjudication record. Information types may include: the value submitted, maximum values or percentages allowed or payable under the plan, amounts that the patient is responsible for in aggregate or pertaining to this item, amounts paid by other coverages, and the benefit payable for this item.
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
     * Gets as amount
     *
     * Monetary total amount associated with the category.
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
     * Monetary total amount associated with the category.
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

