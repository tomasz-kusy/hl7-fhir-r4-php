<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing MedicinalProductIngredientReferenceStrengthType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * XSD Type: MedicinalProductIngredient.ReferenceStrength
 */
class MedicinalProductIngredientReferenceStrengthType extends BackboneElementType
{

    /**
     * Relevant reference substance.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $substance
     */
    private $substance = null;

    /**
     * Strength expressed in terms of a reference substance.
     *
     * @var \TKusy\Hl7FhirR4\RatioType $strength
     */
    private $strength = null;

    /**
     * Strength expressed in terms of a reference substance.
     *
     * @var \TKusy\Hl7FhirR4\RatioType $strengthLowLimit
     */
    private $strengthLowLimit = null;

    /**
     * For when strength is measured at a particular point or distance.
     *
     * @var \TKusy\Hl7FhirR4\StringType $measurementPoint
     */
    private $measurementPoint = null;

    /**
     * The country or countries for which the strength range applies.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $country
     */
    private $country = [
        
    ];

    /**
     * Gets as substance
     *
     * Relevant reference substance.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $substance
     * @return self
     */
    public function setSubstance(\TKusy\Hl7FhirR4\CodeableConceptType $substance)
    {
        $this->substance = $substance;
        return $this;
    }

    /**
     * Gets as strength
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Sets a new strength
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param \TKusy\Hl7FhirR4\RatioType $strength
     * @return self
     */
    public function setStrength(\TKusy\Hl7FhirR4\RatioType $strength)
    {
        $this->strength = $strength;
        return $this;
    }

    /**
     * Gets as strengthLowLimit
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return \TKusy\Hl7FhirR4\RatioType
     */
    public function getStrengthLowLimit()
    {
        return $this->strengthLowLimit;
    }

    /**
     * Sets a new strengthLowLimit
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param \TKusy\Hl7FhirR4\RatioType $strengthLowLimit
     * @return self
     */
    public function setStrengthLowLimit(\TKusy\Hl7FhirR4\RatioType $strengthLowLimit)
    {
        $this->strengthLowLimit = $strengthLowLimit;
        return $this;
    }

    /**
     * Gets as measurementPoint
     *
     * For when strength is measured at a particular point or distance.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $measurementPoint
     * @return self
     */
    public function setMeasurementPoint(\TKusy\Hl7FhirR4\StringType $measurementPoint)
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $country
     */
    public function addToCountry(\TKusy\Hl7FhirR4\CodeableConceptType $country)
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
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $country
     * @return self
     */
    public function setCountry(array $country)
    {
        $this->country = $country;
        return $this;
    }


}

