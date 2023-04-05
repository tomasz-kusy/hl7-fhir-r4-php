<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing InvoiceLineItemType
 *
 * Invoice containing collected ChargeItems from an Account with calculated individual and total price for Billing purpose.
 * XSD Type: Invoice.LineItem
 */
class InvoiceLineItemType extends BackboneElementType
{

    /**
     * Sequence in which the items appear on the invoice.
     *
     * @var \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\DateType $servicedDate
     */
    private $servicedDate = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\PeriodType $servicedPeriod
     */
    private $servicedPeriod = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $chargeItemReference
     */
    private $chargeItemReference = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $chargeItemCodeableConcept
     */
    private $chargeItemCodeableConcept = null;

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     *
     * @var \TKusy\Hl7Fhir\R5\MonetaryComponentType[] $priceComponent
     */
    private $priceComponent = null;

    /**
     * Gets as sequence
     *
     * Sequence in which the items appear on the invoice.
     *
     * @return \TKusy\Hl7Fhir\R5\PositiveIntType
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * Sequence in which the items appear on the invoice.
     *
     * @param \TKusy\Hl7Fhir\R5\PositiveIntType $sequence
     * @return self
     */
    public function setSequence(?\TKusy\Hl7Fhir\R5\PositiveIntType $sequence = null)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as servicedDate
     *
     * @return \TKusy\Hl7Fhir\R5\DateType
     */
    public function getServicedDate()
    {
        return $this->servicedDate;
    }

    /**
     * Sets a new servicedDate
     *
     * @param \TKusy\Hl7Fhir\R5\DateType $servicedDate
     * @return self
     */
    public function setServicedDate(?\TKusy\Hl7Fhir\R5\DateType $servicedDate = null)
    {
        $this->servicedDate = $servicedDate;
        return $this;
    }

    /**
     * Gets as servicedPeriod
     *
     * @return \TKusy\Hl7Fhir\R5\PeriodType
     */
    public function getServicedPeriod()
    {
        return $this->servicedPeriod;
    }

    /**
     * Sets a new servicedPeriod
     *
     * @param \TKusy\Hl7Fhir\R5\PeriodType $servicedPeriod
     * @return self
     */
    public function setServicedPeriod(?\TKusy\Hl7Fhir\R5\PeriodType $servicedPeriod = null)
    {
        $this->servicedPeriod = $servicedPeriod;
        return $this;
    }

    /**
     * Gets as chargeItemReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getChargeItemReference()
    {
        return $this->chargeItemReference;
    }

    /**
     * Sets a new chargeItemReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $chargeItemReference
     * @return self
     */
    public function setChargeItemReference(?\TKusy\Hl7Fhir\R5\ReferenceType $chargeItemReference = null)
    {
        $this->chargeItemReference = $chargeItemReference;
        return $this;
    }

    /**
     * Gets as chargeItemCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getChargeItemCodeableConcept()
    {
        return $this->chargeItemCodeableConcept;
    }

    /**
     * Sets a new chargeItemCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $chargeItemCodeableConcept
     * @return self
     */
    public function setChargeItemCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $chargeItemCodeableConcept = null)
    {
        $this->chargeItemCodeableConcept = $chargeItemCodeableConcept;
        return $this;
    }

    /**
     * Adds as priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\MonetaryComponentType $priceComponent
     */
    public function addToPriceComponent(\TKusy\Hl7Fhir\R5\MonetaryComponentType $priceComponent)
    {
        $this->priceComponent[] = $priceComponent;
        return $this;
    }

    /**
     * isset priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceComponent($index)
    {
        return isset($this->priceComponent[$index]);
    }

    /**
     * unset priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceComponent($index)
    {
        unset($this->priceComponent[$index]);
    }

    /**
     * Gets as priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     *
     * @return \TKusy\Hl7Fhir\R5\MonetaryComponentType[]
     */
    public function getPriceComponent()
    {
        return $this->priceComponent;
    }

    /**
     * Sets a new priceComponent
     *
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     *
     * @param \TKusy\Hl7Fhir\R5\MonetaryComponentType[] $priceComponent
     * @return self
     */
    public function setPriceComponent(array $priceComponent = null)
    {
        $this->priceComponent = $priceComponent;
        return $this;
    }


}

