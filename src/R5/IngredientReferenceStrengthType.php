<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing IngredientReferenceStrengthType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * XSD Type: Ingredient.ReferenceStrength
 */
class IngredientReferenceStrengthType extends BackboneElementType
{

    /**
     * Relevant reference substance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $substance
     */
    private $substance = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $strengthRatio
     */
    private $strengthRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioRangeType $strengthRatioRange
     */
    private $strengthRatioRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $strengthQuantity
     */
    private $strengthQuantity = null;

    /**
     * For when strength is measured at a particular point or distance.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $measurementPoint
     */
    private $measurementPoint = null;

    /**
     * The country or countries for which the strength range applies.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType[] $country
     */
    private $country = null;

    /**
     * Gets as substance
     *
     * Relevant reference substance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * Sets a new substance
     *
     * Relevant reference substance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $substance
     * @return self
     */
    public function setSubstance(\TKusy\Hl7Fhir\R5\CodeableReferenceType $substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Gets as strengthRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getStrengthRatio()
    {
        return $this->strengthRatio;
    }

    /**
     * Sets a new strengthRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $strengthRatio
     * @return self
     */
    public function setStrengthRatio(?\TKusy\Hl7Fhir\R5\RatioType $strengthRatio = null)
    {
        $this->strengthRatio = $strengthRatio;
        return $this;
    }

    /**
     * Gets as strengthRatioRange
     *
     * @return \TKusy\Hl7Fhir\R5\RatioRangeType
     */
    public function getStrengthRatioRange()
    {
        return $this->strengthRatioRange;
    }

    /**
     * Sets a new strengthRatioRange
     *
     * @param \TKusy\Hl7Fhir\R5\RatioRangeType $strengthRatioRange
     * @return self
     */
    public function setStrengthRatioRange(?\TKusy\Hl7Fhir\R5\RatioRangeType $strengthRatioRange = null)
    {
        $this->strengthRatioRange = $strengthRatioRange;
        return $this;
    }

    /**
     * Gets as strengthQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getStrengthQuantity()
    {
        return $this->strengthQuantity;
    }

    /**
     * Sets a new strengthQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $strengthQuantity
     * @return self
     */
    public function setStrengthQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $strengthQuantity = null)
    {
        $this->strengthQuantity = $strengthQuantity;
        return $this;
    }

    /**
     * Gets as measurementPoint
     *
     * For when strength is measured at a particular point or distance.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getMeasurementPoint()
    {
        return $this->measurementPoint;
    }

    /**
     * Sets a new measurementPoint
     *
     * For when strength is measured at a particular point or distance.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $measurementPoint
     * @return self
     */
    public function setMeasurementPoint(?\TKusy\Hl7Fhir\R5\StringType $measurementPoint = null)
    {
        $this->measurementPoint = $measurementPoint;
        return $this;
    }

    /**
     * Adds as country
     *
     * The country or countries for which the strength range applies.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $country
     */
    public function addToCountry(\TKusy\Hl7Fhir\R5\CodeableConceptType $country)
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * isset country
     *
     * The country or countries for which the strength range applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountry($index)
    {
        return isset($this->country[$index]);
    }

    /**
     * unset country
     *
     * The country or countries for which the strength range applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountry($index)
    {
        unset($this->country[$index]);
    }

    /**
     * Gets as country
     *
     * The country or countries for which the strength range applies.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * The country or countries for which the strength range applies.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType[] $country
     * @return self
     */
    public function setCountry(array $country = null)
    {
        $this->country = $country;
        return $this;
    }


}

