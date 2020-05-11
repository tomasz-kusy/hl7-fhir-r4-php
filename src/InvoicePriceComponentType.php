<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing InvoicePriceComponentType
 *
 * Invoice containing collected ChargeItems from an Account with calculated individual and total price for Billing purpose.
 * XSD Type: Invoice.PriceComponent
 */
class InvoicePriceComponentType extends BackboneElementType
{

    /**
     * This code identifies the type of the component.
     *
     * @var \TKusy\Hl7FhirR4\InvoicePriceComponentTypeType $type
     */
    private $type = null;

    /**
     * A code that identifies the component. Codes may be used to differentiate between kinds of taxes, surcharges, discounts etc.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $code
     */
    private $code = null;

    /**
     * The factor that has been applied on the base price for calculating this component.
     *
     * @var float $factor
     */
    private $factor = null;

    /**
     * The amount calculated for this component.
     *
     * @var \TKusy\Hl7FhirR4\MoneyType $amount
     */
    private $amount = null;

    /**
     * Gets as type
     *
     * This code identifies the type of the component.
     *
     * @return \TKusy\Hl7FhirR4\InvoicePriceComponentTypeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * This code identifies the type of the component.
     *
     * @param \TKusy\Hl7FhirR4\InvoicePriceComponentTypeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\InvoicePriceComponentTypeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as code
     *
     * A code that identifies the component. Codes may be used to differentiate between kinds of taxes, surcharges, discounts etc.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code that identifies the component. Codes may be used to differentiate between kinds of taxes, surcharges, discounts etc.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $code
     * @return self
     */
    public function setCode(\TKusy\Hl7FhirR4\CodeableConceptType $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as factor
     *
     * The factor that has been applied on the base price for calculating this component.
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
     * The factor that has been applied on the base price for calculating this component.
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
     * Gets as amount
     *
     * The amount calculated for this component.
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
     * The amount calculated for this component.
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

