<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing RatioRangeType
 *
 * A range of ratios expressed as a low and high numerator and a denominator.
 * If the element is present, it must have a value for at least one of the defined elements, an \@id referenced from the Narrative, or extensions
 * XSD Type: RatioRange
 */
class RatioRangeType extends DataTypeType
{

    /**
     * The value of the low limit numerator.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $lowNumerator
     */
    private $lowNumerator = null;

    /**
     * The value of the high limit numerator.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $highNumerator
     */
    private $highNumerator = null;

    /**
     * The value of the denominator.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $denominator
     */
    private $denominator = null;

    /**
     * Gets as lowNumerator
     *
     * The value of the low limit numerator.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getLowNumerator()
    {
        return $this->lowNumerator;
    }

    /**
     * Sets a new lowNumerator
     *
     * The value of the low limit numerator.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $lowNumerator
     * @return self
     */
    public function setLowNumerator(?\TKusy\Hl7Fhir\R5\QuantityType $lowNumerator = null)
    {
        $this->lowNumerator = $lowNumerator;
        return $this;
    }

    /**
     * Gets as highNumerator
     *
     * The value of the high limit numerator.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getHighNumerator()
    {
        return $this->highNumerator;
    }

    /**
     * Sets a new highNumerator
     *
     * The value of the high limit numerator.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $highNumerator
     * @return self
     */
    public function setHighNumerator(?\TKusy\Hl7Fhir\R5\QuantityType $highNumerator = null)
    {
        $this->highNumerator = $highNumerator;
        return $this;
    }

    /**
     * Gets as denominator
     *
     * The value of the denominator.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
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
     * @param \TKusy\Hl7Fhir\R5\QuantityType $denominator
     * @return self
     */
    public function setDenominator(?\TKusy\Hl7Fhir\R5\QuantityType $denominator = null)
    {
        $this->denominator = $denominator;
        return $this;
    }


}

