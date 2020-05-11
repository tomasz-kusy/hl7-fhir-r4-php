<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\PositiveIntType $sequence
     */
    private $sequence = null;

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc. If no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference. (choose any one of chargeItem*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $chargeItemReference
     */
    private $chargeItemReference = null;

    /**
     * The ChargeItem contains information such as the billing code, date, amount etc. If no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference. (choose any one of chargeItem*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $chargeItemCodeableConcept
     */
    private $chargeItemCodeableConcept = null;

    /**
     * The price for a ChargeItem may be calculated as a base price with surcharges/deductions that apply in certain conditions. A ChargeItemDefinition resource that defines the prices, factors and conditions that apply to a billing code is currently under development. The priceComponent element can be used to offer transparency to the recipient of the Invoice as to how the prices have been calculated.
     *
     * @var \TKusy\Hl7FhirR4\InvoicePriceComponentType[] $priceComponent
     */
    private $priceComponent = null;

    /**
     * Gets as sequence
     *
     * Sequence in which the items appear on the invoice.
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
     * Sequence in which the items appear on the invoice.
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
     * Gets as chargeItemReference
     *
     * The ChargeItem contains information such as the billing code, date, amount etc. If no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference. (choose any one of chargeItem*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getChargeItemReference()
    {
        return $this->chargeItemReference;
    }

    /**
     * Sets a new chargeItemReference
     *
     * The ChargeItem contains information such as the billing code, date, amount etc. If no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference. (choose any one of chargeItem*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $chargeItemReference
     * @return self
     */
    public function setChargeItemReference(\TKusy\Hl7FhirR4\ReferenceType $chargeItemReference)
    {
        $this->chargeItemReference = $chargeItemReference;
        return $this;
    }

    /**
     * Gets as chargeItemCodeableConcept
     *
     * The ChargeItem contains information such as the billing code, date, amount etc. If no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference. (choose any one of chargeItem*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getChargeItemCodeableConcept()
    {
        return $this->chargeItemCodeableConcept;
    }

    /**
     * Sets a new chargeItemCodeableConcept
     *
     * The ChargeItem contains information such as the billing code, date, amount etc. If no further details are required for the lineItem, inline billing codes can be added using the CodeableConcept data type instead of the Reference. (choose any one of chargeItem*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $chargeItemCodeableConcept
     * @return self
     */
    public function setChargeItemCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $chargeItemCodeableConcept)
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
     * @param \TKusy\Hl7FhirR4\InvoicePriceComponentType $priceComponent
     */
    public function addToPriceComponent(\TKusy\Hl7FhirR4\InvoicePriceComponentType $priceComponent)
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
     * @return \TKusy\Hl7FhirR4\InvoicePriceComponentType[]
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
     * @param \TKusy\Hl7FhirR4\InvoicePriceComponentType[] $priceComponent
     * @return self
     */
    public function setPriceComponent(array $priceComponent)
    {
        $this->priceComponent = $priceComponent;
        return $this;
    }


}

