<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing ExplanationOfBenefitDetailType
 *
 * This resource provides: the claim details; adjudication details from the processing of a Claim; and optionally account balance information, for informing the subscriber of the benefits provided.
 * XSD Type: ExplanationOfBenefit.Detail
 */
class ExplanationOfBenefitDetailType extends BackboneElementType
{

    /**
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @var \TKusy\Hl7FhirR4\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $revenue
     */
    private $revenue = null;

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $category
     */
    private $category = null;

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
     * Identifies the program under which this may be recovered.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $programCode
     */
    private $programCode = null;

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
     * @var \TKusy\Hl7FhirR4\DecimalType $factor
     */
    private $factor = null;

    /**
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $net
     */
    private $net = null;

    /**
     * Unique Device Identifiers associated with this line item.
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType[] $udi
     */
    private $udi = null;

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
     * Third-tier of goods and services.
     *
     * @var \TKusy\Hl7FhirR4\ExplanationOfBenefitSubDetailType[] $subDetail
     */
    private $subDetail = null;

    /**
     * Gets as sequence
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @return \TKusy\Hl7FhirR4\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A claim detail line. Either a simple (a product or service) or a 'group' of sub-details which are simple items.
     *
     * @param \TKusy\Hl7FhirR4\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7FhirR4\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as revenue
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * Sets a new revenue
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $revenue
     * @return self
     */
    public function setRevenue(\TKusy\Hl7FhirR4\CodeableConceptType $revenue)
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * Gets as category
     *
     * Code to identify the general type of benefits under which products and services are provided.
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
     * Code to identify the general type of benefits under which products and services are provided.
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
     * Adds as programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $programCode
     */
    public function addToProgramCode(\TKusy\Hl7FhirR4\CodeableConceptType $programCode)
    {
        $this->programCode[] = $programCode;
        return $this;
    }

    /**
     * isset programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgramCode($index)
    {
        return isset($this->programCode[$index]);
    }

    /**
     * unset programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgramCode($index)
    {
        unset($this->programCode[$index]);
    }

    /**
     * Gets as programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * Sets a new programCode
     *
     * Identifies the program under which this may be recovered.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $programCode
     * @return self
     */
    public function setProgramCode(array $programCode)
    {
        $this->programCode = $programCode;
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
     * @return \TKusy\Hl7FhirR4\DecimalType
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
     * @param \TKusy\Hl7FhirR4\DecimalType $factor
     * @return self
     */
    public function setFactor(\TKusy\Hl7FhirR4\DecimalType $factor)
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
     * Adds as udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ReferenceType $udi
     */
    public function addToUdi(\TKusy\Hl7FhirR4\ReferenceType $udi)
    {
        $this->udi[] = $udi;
        return $this;
    }

    /**
     * isset udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUdi($index)
    {
        return isset($this->udi[$index]);
    }

    /**
     * unset udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUdi($index)
    {
        unset($this->udi[$index]);
    }

    /**
     * Gets as udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType[]
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * Sets a new udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType[] $udi
     * @return self
     */
    public function setUdi(array $udi)
    {
        $this->udi = $udi;
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

    /**
     * Adds as subDetail
     *
     * Third-tier of goods and services.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitSubDetailType $subDetail
     */
    public function addToSubDetail(\TKusy\Hl7FhirR4\ExplanationOfBenefitSubDetailType $subDetail)
    {
        $this->subDetail[] = $subDetail;
        return $this;
    }

    /**
     * isset subDetail
     *
     * Third-tier of goods and services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubDetail($index)
    {
        return isset($this->subDetail[$index]);
    }

    /**
     * unset subDetail
     *
     * Third-tier of goods and services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubDetail($index)
    {
        unset($this->subDetail[$index]);
    }

    /**
     * Gets as subDetail
     *
     * Third-tier of goods and services.
     *
     * @return \TKusy\Hl7FhirR4\ExplanationOfBenefitSubDetailType[]
     */
    public function getSubDetail()
    {
        return $this->subDetail;
    }

    /**
     * Sets a new subDetail
     *
     * Third-tier of goods and services.
     *
     * @param \TKusy\Hl7FhirR4\ExplanationOfBenefitSubDetailType[] $subDetail
     * @return self
     */
    public function setSubDetail(array $subDetail)
    {
        $this->subDetail = $subDetail;
        return $this;
    }


}

