<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicinalProductIngredientStrengthType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * XSD Type: MedicinalProductIngredient.Strength
 */
class MedicinalProductIngredientStrengthType extends BackboneElementType
{

    /**
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     *
     * @var \TKusy\Hl7Fhir\R4\RatioType $presentation
     */
    private $presentation = null;

    /**
     * A lower limit for the quantity of substance in the unit of presentation. For use when there is a range of strengths, this is the lower limit, with the presentation attribute becoming the upper limit.
     *
     * @var \TKusy\Hl7Fhir\R4\RatioType $presentationLowLimit
     */
    private $presentationLowLimit = null;

    /**
     * The strength per unitary volume (or mass).
     *
     * @var \TKusy\Hl7Fhir\R4\RatioType $concentration
     */
    private $concentration = null;

    /**
     * A lower limit for the strength per unitary volume (or mass), for when there is a range. The concentration attribute then becomes the upper limit.
     *
     * @var \TKusy\Hl7Fhir\R4\RatioType $concentrationLowLimit
     */
    private $concentrationLowLimit = null;

    /**
     * For when strength is measured at a particular point or distance.
     *
     * @var \TKusy\Hl7Fhir\R4\StringType $measurementPoint
     */
    private $measurementPoint = null;

    /**
     * The country or countries for which the strength range applies.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType[] $country
     */
    private $country = null;

    /**
     * Strength expressed in terms of a reference substance.
     *
     * @var \TKusy\Hl7Fhir\R4\MedicinalProductIngredientReferenceStrengthType[] $referenceStrength
     */
    private $referenceStrength = null;

    /**
     * Gets as presentation
     *
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     *
     * @return \TKusy\Hl7Fhir\R4\RatioType
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Sets a new presentation
     *
     * The quantity of substance in the unit of presentation, or in the volume (or mass) of the single pharmaceutical product or manufactured item.
     *
     * @param \TKusy\Hl7Fhir\R4\RatioType $presentation
     * @return self
     */
    public function setPresentation(\TKusy\Hl7Fhir\R4\RatioType $presentation)
    {
        $this->presentation = $presentation;
        return $this;
    }

    /**
     * Gets as presentationLowLimit
     *
     * A lower limit for the quantity of substance in the unit of presentation. For use when there is a range of strengths, this is the lower limit, with the presentation attribute becoming the upper limit.
     *
     * @return \TKusy\Hl7Fhir\R4\RatioType
     */
    public function getPresentationLowLimit()
    {
        return $this->presentationLowLimit;
    }

    /**
     * Sets a new presentationLowLimit
     *
     * A lower limit for the quantity of substance in the unit of presentation. For use when there is a range of strengths, this is the lower limit, with the presentation attribute becoming the upper limit.
     *
     * @param \TKusy\Hl7Fhir\R4\RatioType $presentationLowLimit
     * @return self
     */
    public function setPresentationLowLimit(\TKusy\Hl7Fhir\R4\RatioType $presentationLowLimit)
    {
        $this->presentationLowLimit = $presentationLowLimit;
        return $this;
    }

    /**
     * Gets as concentration
     *
     * The strength per unitary volume (or mass).
     *
     * @return \TKusy\Hl7Fhir\R4\RatioType
     */
    public function getConcentration()
    {
        return $this->concentration;
    }

    /**
     * Sets a new concentration
     *
     * The strength per unitary volume (or mass).
     *
     * @param \TKusy\Hl7Fhir\R4\RatioType $concentration
     * @return self
     */
    public function setConcentration(\TKusy\Hl7Fhir\R4\RatioType $concentration)
    {
        $this->concentration = $concentration;
        return $this;
    }

    /**
     * Gets as concentrationLowLimit
     *
     * A lower limit for the strength per unitary volume (or mass), for when there is a range. The concentration attribute then becomes the upper limit.
     *
     * @return \TKusy\Hl7Fhir\R4\RatioType
     */
    public function getConcentrationLowLimit()
    {
        return $this->concentrationLowLimit;
    }

    /**
     * Sets a new concentrationLowLimit
     *
     * A lower limit for the strength per unitary volume (or mass), for when there is a range. The concentration attribute then becomes the upper limit.
     *
     * @param \TKusy\Hl7Fhir\R4\RatioType $concentrationLowLimit
     * @return self
     */
    public function setConcentrationLowLimit(\TKusy\Hl7Fhir\R4\RatioType $concentrationLowLimit)
    {
        $this->concentrationLowLimit = $concentrationLowLimit;
        return $this;
    }

    /**
     * Gets as measurementPoint
     *
     * For when strength is measured at a particular point or distance.
     *
     * @return \TKusy\Hl7Fhir\R4\StringType
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
     * @param \TKusy\Hl7Fhir\R4\StringType $measurementPoint
     * @return self
     */
    public function setMeasurementPoint(\TKusy\Hl7Fhir\R4\StringType $measurementPoint)
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $country
     */
    public function addToCountry(\TKusy\Hl7Fhir\R4\CodeableConceptType $country)
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
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType[]
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
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType[] $country
     * @return self
     */
    public function setCountry(array $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as referenceStrength
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R4\MedicinalProductIngredientReferenceStrengthType $referenceStrength
     */
    public function addToReferenceStrength(\TKusy\Hl7Fhir\R4\MedicinalProductIngredientReferenceStrengthType $referenceStrength)
    {
        $this->referenceStrength[] = $referenceStrength;
        return $this;
    }

    /**
     * isset referenceStrength
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceStrength($index)
    {
        return isset($this->referenceStrength[$index]);
    }

    /**
     * unset referenceStrength
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceStrength($index)
    {
        unset($this->referenceStrength[$index]);
    }

    /**
     * Gets as referenceStrength
     *
     * Strength expressed in terms of a reference substance.
     *
     * @return \TKusy\Hl7Fhir\R4\MedicinalProductIngredientReferenceStrengthType[]
     */
    public function getReferenceStrength()
    {
        return $this->referenceStrength;
    }

    /**
     * Sets a new referenceStrength
     *
     * Strength expressed in terms of a reference substance.
     *
     * @param \TKusy\Hl7Fhir\R4\MedicinalProductIngredientReferenceStrengthType[] $referenceStrength
     * @return self
     */
    public function setReferenceStrength(array $referenceStrength)
    {
        $this->referenceStrength = $referenceStrength;
        return $this;
    }


}

