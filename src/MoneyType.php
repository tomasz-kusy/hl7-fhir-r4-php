<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MoneyType
 *
 * An amount of economic utility in some recognized currency.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Money
 */
class MoneyType extends ElementType
{

    /**
     * Numerical value (with implicit precision).
     *
     * @var \TKusy\Hl7FhirR4\DecimalType $value
     */
    private $value = null;

    /**
     * ISO 4217 Currency Code.
     *
     * @var \TKusy\Hl7FhirR4\CodeType $currency
     */
    private $currency = null;

    /**
     * Gets as value
     *
     * Numerical value (with implicit precision).
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
     * Numerical value (with implicit precision).
     *
     * @param \TKusy\Hl7FhirR4\DecimalType $value
     * @return self
     */
    public function setValue(\TKusy\Hl7FhirR4\DecimalType $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as currency
     *
     * ISO 4217 Currency Code.
     *
     * @return \TKusy\Hl7FhirR4\CodeType
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * ISO 4217 Currency Code.
     *
     * @param \TKusy\Hl7FhirR4\CodeType $currency
     * @return self
     */
    public function setCurrency(\TKusy\Hl7FhirR4\CodeType $currency)
    {
        $this->currency = $currency;
        return $this;
    }


}

