<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MonetaryComponentType
 *
 * Availability data for an {item}.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: MonetaryComponent
 */
class MonetaryComponentType extends DataTypeType
{

    /**
     * base | surcharge | deduction | discount | tax | informational.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeType $type
     */
    private $type = null;

    /**
     * Codes may be used to differentiate between kinds of taxes, surcharges, discounts etc.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Factor used for calculating this component.
     *
     * @var \TKusy\Hl7Fhir\R5\DecimalType $factor
     */
    private $factor = null;

    /**
     * Explicit value amount to be used.
     *
     * @var \TKusy\Hl7Fhir\R5\MoneyType $amount
     */
    private $amount = null;

    /**
     * Gets as type
     *
     * base | surcharge | deduction | discount | tax | informational.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * base | surcharge | deduction | discount | tax | informational.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R5\CodeType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as code
     *
     * Codes may be used to differentiate between kinds of taxes, surcharges, discounts etc.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Codes may be used to differentiate between kinds of taxes, surcharges, discounts etc.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as factor
     *
     * Factor used for calculating this component.
     *
     * @return \TKusy\Hl7Fhir\R5\DecimalType
     */
    public function getFactor()
    {
        return $this->factor;
    }

    /**
     * Sets a new factor
     *
     * Factor used for calculating this component.
     *
     * @param \TKusy\Hl7Fhir\R5\DecimalType $factor
     * @return self
     */
    public function setFactor(?\TKusy\Hl7Fhir\R5\DecimalType $factor = null)
    {
        $this->factor = $factor;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Explicit value amount to be used.
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
     * Explicit value amount to be used.
     *
     * @param \TKusy\Hl7Fhir\R5\MoneyType $amount
     * @return self
     */
    public function setAmount(?\TKusy\Hl7Fhir\R5\MoneyType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }


}

