<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing ClaimSubDetailType
 *
 * A provider issued list of professional services and products which have been provided, or are to be provided, to a patient which is sent to an insurer for reimbursement.
 * XSD Type: Claim.SubDetail
 */
class ClaimSubDetailType extends BackboneElementType
{

    /**
     * A number to uniquely identify item entries.
     *
     * @var \TKusy\Hl7Fhir\R4\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * The type of revenue or cost center providing the product and/or service.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $revenue
     */
    private $revenue = null;

    /**
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     */
    private $category = null;

    /**
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $productOrService
     */
    private $productOrService = null;

    /**
     * Item typification or modifiers codes to convey additional context for the product or service.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $modifier
     */
    private $modifier = null;

    /**
     * Identifies the program under which this may be recovered.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $programCode
     */
    private $programCode = null;

    /**
     * The number of repetitions of a service or product.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
     *
     * @var \TKusy\Hl7Fhir\R4\MoneyType $unitPrice
     */
    private $unitPrice = null;

    /**
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
     *
     * @var \TKusy\Hl7Fhir\R4\DecimalType $factor
     */
    private $factor = null;

    /**
     * The quantity times the unit price for an additional service or product or charge.
     *
     * @var \TKusy\Hl7Fhir\R4\MoneyType $net
     */
    private $net = null;

    /**
     * Unique Device Identifiers associated with this line item.
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType[] $udi
     */
    private $udi = null;

    /**
     * Gets as sequence
     *
     * A number to uniquely identify item entries.
     *
     * @return \TKusy\Hl7Fhir\R4\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * A number to uniquely identify item entries.
     *
     * @param \TKusy\Hl7Fhir\R4\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(\TKusy\Hl7Fhir\R4\PositiveIntType $sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as revenue
     *
     * The type of revenue or cost center providing the product and/or service.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $revenue
     * @return self
     */
    public function setRevenue(\TKusy\Hl7Fhir\R4\CodeableConceptType $revenue)
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * Gets as category
     *
     * Code to identify the general type of benefits under which products and services are provided.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $category
     * @return self
     */
    public function setCategory(\TKusy\Hl7Fhir\R4\CodeableConceptType $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as productOrService
     *
     * When the value is a group code then this item collects a set of related claim details, otherwise this contains the product, service, drug or other billing code for the item.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $productOrService
     * @return self
     */
    public function setProductOrService(\TKusy\Hl7Fhir\R4\CodeableConceptType $productOrService)
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $modifier
     */
    public function addToModifier(\TKusy\Hl7Fhir\R4\CodeableConceptType $modifier)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $modifier
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $programCode
     */
    public function addToProgramCode(\TKusy\Hl7Fhir\R4\CodeableConceptType $programCode)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $programCode
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
     * @return \TKusy\Hl7Fhir\R4\QuantityType
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
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
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
     * If the item is not a group then this is the fee for the product or service, otherwise this is the total of the fees for the details of the group.
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
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
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
     * A real number that represents a multiplier used in determining the overall value of services delivered and/or goods received. The concept of a Factor allows for a discount or surcharge multiplier to be applied to a monetary amount.
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
     * Gets as net
     *
     * The quantity times the unit price for an additional service or product or charge.
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
     * The quantity times the unit price for an additional service or product or charge.
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
     * Adds as udi
     *
     * Unique Device Identifiers associated with this line item.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $udi
     */
    public function addToUdi(\TKusy\Hl7Fhir\R4\ReferenceType $udi)
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
     * @return \TKusy\Hl7Fhir\R4\ReferenceType[]
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
     * @param \TKusy\Hl7Fhir\R4\ReferenceType[] $udi
     * @return self
     */
    public function setUdi(array $udi)
    {
        $this->udi = $udi;
        return $this;
    }


}

