<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitSubDetail1Type
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.SubDetail1
 */
class ExplanationOfBenefitSubDetail1Type extends BackboneElementType
{

    /**
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $productOrService
     */
    private $productOrService = null;

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $modifier
     */
    private $modifier = null;

    /**
     * The number of repetitions of a service or product.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $unitPrice
     */
    private $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var float $factor
     */
    private $factor = null;

    /**
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $net
     */
    private $net = null;

    /**
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType[] $noteNumber
     */
    private $noteNumber = null;

    /**
     * The adjudication results.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[] $adjudication
     */
    private $adjudication = null;

    /**
     * Gets as productOrService
     *
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getProductOrService()
    {
        return $this->productOrService;
    }

    /**
     * Sets a new productOrService
     *
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $productOrService
     * @return self
     */
    public function setProductOrService(\TKusy\Hl7FhirR4\CodeableConceptType $productOrService)
    {
        $this->productOrService = $productOrService;
        return $this;
    }

    /**
     * Adds as modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $modifier
     */
    public function addToModifier(\TKusy\Hl7FhirR4\CodeableConceptType $modifier)
    {
        $this->modifier[] = $modifier;
        return $this;
    }

    /**
     * isset modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetModifier($index)
    {
        return isset($this->modifier[$index]);
    }

    /**
     * unset modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetModifier($index)
    {
        unset($this->modifier[$index]);
    }

    /**
     * Gets as modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $modifier
     * @return self
     */
    public function setModifier(array $modifier)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of repetitions of a service or product.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of repetitions of a service or product.
     *
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as unitPrice
     *
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Sets a new unitPrice
     *
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $unitPrice
     * @return self
     */
    public function setUnitPrice(\TKusy\Hl7FhirR4\MoneyType $unitPrice)
    {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * Gets as factor
     *
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @return float
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Sets a new factor
     *
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @param float $factor
     * @return self
     */
    public function setFactor($factor)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Gets as net
     *
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @return \TKusy\Hl7FhirR4\MoneyType
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * Sets a new net
     *
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @param \TKusy\Hl7FhirR4\MoneyType $net
     * @return self
     */
    public function setNet(\TKusy\Hl7FhirR4\MoneyType $net)
    {
        $this->net = $net;
        return $this;
    }

    /**
     * Adds as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\PositiveIntType $noteNumber
     */
    public function addToNoteNumber(\TKusy\Hl7FhirR4\PositiveIntType $noteNumber)
    {
        $this->noteNumber[] = $noteNumber;
        return $this;
    }

    /**
     * isset noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNoteNumber($index)
    {
        return isset($this->noteNumber[$index]);
    }

    /**
     * unset noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNoteNumber($index)
    {
        unset($this->noteNumber[$index]);
    }

    /**
     * Gets as noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType[]
     */
    public function getNoteNumber()
    {
        return $this->noteNumber;
    }

    /**
     * Sets a new noteNumber
     *
     * The numbers associated with notes below which apply to the adjudication of this item.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType[] $noteNumber
     * @return self
     */
    public function setNoteNumber(array $noteNumber)
    {
        $this->noteNumber = $noteNumber;
        return $this;
    }

    /**
     * Adds as adjudication
     *
     * The adjudication results.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType $adjudication
     */
    public function addToAdjudication(\TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType $adjudication)
    {
        $this->adjudication[] = $adjudication;
        return $this;
    }

    /**
     * isset adjudication
     *
     * The adjudication results.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdjudication($index)
    {
        return isset($this->adjudication[$index]);
    }

    /**
     * unset adjudication
     *
     * The adjudication results.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdjudication($index)
    {
        unset($this->adjudication[$index]);
    }

    /**
     * Gets as adjudication
     *
     * The adjudication results.
     *
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[]
     */
    public function getAdjudication()
    {
        return $this->adjudication;
    }

    /**
     * Sets a new adjudication
     *
     * The adjudication results.
     *
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitAdjudicationType[] $adjudication
     * @return self
     */
    public function setAdjudication(array $adjudication)
    {
        $this->adjudication = $adjudication;
        return $this;
    }


}

