<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing RatioType
 *
 * A relationship of two Quantity values - expressed as a numerator and a denominator.If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: Ratio
 */
class RatioType extends ElementType
{

    /**
     * The value of the numerator.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $numerator
     */
    private $numerator = null;

    /**
     * The value of the denominator.
     *
     * @var \TKusy\Hl7Fhir\R4\QuantityType $denominator
     */
    private $denominator = null;

    /**
     * Gets as numerator
     *
     * The value of the numerator.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getNumerator()
    {
        return $this->numerator;
    }

    /**
     * Sets a new numerator
     *
     * The value of the numerator.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $numerator
     * @return self
     */
    public function setNumerator(\TKusy\Hl7Fhir\R4\QuantityType $numerator)
    {
        $this->numerator = $numerator;
        return $this;
    }

    /**
     * Gets as denominator
     *
     * The value of the denominator.
     *
     * @return \TKusy\Hl7Fhir\R4\QuantityType
     */
    public function getDenominator()
    {
        return $this->denominator;
    }

    /**
     * Sets a new denominator
     *
     * The value of the denominator.
     *
     * @param \TKusy\Hl7Fhir\R4\QuantityType $denominator
     * @return self
     */
    public function setDenominator(\TKusy\Hl7Fhir\R4\QuantityType $denominator)
    {
        $this->denominator = $denominator;
        return $this;
    }


}

