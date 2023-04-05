<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing IngredientStrengthType
 *
 * An ingredient of a manufactured item or pharmaceutical product.
 * XSD Type: Ingredient.Strength
 */
class IngredientStrengthType extends BackboneElementType
{

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $presentationRatio
     */
    private $presentationRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioRangeType $presentationRatioRange
     */
    private $presentationRatioRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $presentationCodeableConcept
     */
    private $presentationCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $presentationQuantity
     */
    private $presentationQuantity = null;

    /**
     * A textual represention of either the whole of the presentation strength or a part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $textPresentation
     */
    private $textPresentation = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $concentrationRatio
     */
    private $concentrationRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioRangeType $concentrationRatioRange
     */
    private $concentrationRatioRange = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $concentrationCodeableConcept
     */
    private $concentrationCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $concentrationQuantity
     */
    private $concentrationQuantity = null;

    /**
     * A textual represention of either the whole of the concentration strength or a part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $textConcentration
     */
    private $textConcentration = null;

    /**
     * A code that indicates if the strength is, for example, based on the ingredient substance as stated or on the substance base (when the ingredient is a salt).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $basis
     */
    private $basis = null;

    /**
     * For when strength is measured at a particular point or distance. There are products where strength is measured at a particular point. For example, the strength of the ingredient in some inhalers is measured at a particular position relative to the point of aerosolization.
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
     * Strength expressed in terms of a reference substance. For when the ingredient strength is additionally expressed as equivalent to the strength of some other closely related substance (e.g. salt vs. base). Reference strength represents the strength (quantitative composition) of the active moiety of the active substance. There are situations when the active substance and active moiety are different, therefore both a strength and a reference strength are needed.
     *
     * @var \TKusy\Hl7Fhir\R5\IngredientReferenceStrengthType[] $referenceStrength
     */
    private $referenceStrength = null;

    /**
     * Gets as presentationRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getPresentationRatio()
    {
        return $this->presentationRatio;
    }

    /**
     * Sets a new presentationRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $presentationRatio
     * @return self
     */
    public function setPresentationRatio(?\TKusy\Hl7Fhir\R5\RatioType $presentationRatio = null)
    {
        $this->presentationRatio = $presentationRatio;
        return $this;
    }

    /**
     * Gets as presentationRatioRange
     *
     * @return \TKusy\Hl7Fhir\R5\RatioRangeType
     */
    public function getPresentationRatioRange()
    {
        return $this->presentationRatioRange;
    }

    /**
     * Sets a new presentationRatioRange
     *
     * @param \TKusy\Hl7Fhir\R5\RatioRangeType $presentationRatioRange
     * @return self
     */
    public function setPresentationRatioRange(?\TKusy\Hl7Fhir\R5\RatioRangeType $presentationRatioRange = null)
    {
        $this->presentationRatioRange = $presentationRatioRange;
        return $this;
    }

    /**
     * Gets as presentationCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getPresentationCodeableConcept()
    {
        return $this->presentationCodeableConcept;
    }

    /**
     * Sets a new presentationCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $presentationCodeableConcept
     * @return self
     */
    public function setPresentationCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $presentationCodeableConcept = null)
    {
        $this->presentationCodeableConcept = $presentationCodeableConcept;
        return $this;
    }

    /**
     * Gets as presentationQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getPresentationQuantity()
    {
        return $this->presentationQuantity;
    }

    /**
     * Sets a new presentationQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $presentationQuantity
     * @return self
     */
    public function setPresentationQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $presentationQuantity = null)
    {
        $this->presentationQuantity = $presentationQuantity;
        return $this;
    }

    /**
     * Gets as textPresentation
     *
     * A textual represention of either the whole of the presentation strength or a part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTextPresentation()
    {
        return $this->textPresentation;
    }

    /**
     * Sets a new textPresentation
     *
     * A textual represention of either the whole of the presentation strength or a part of it - with the rest being in Strength.presentation as a ratio.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $textPresentation
     * @return self
     */
    public function setTextPresentation(?\TKusy\Hl7Fhir\R5\StringType $textPresentation = null)
    {
        $this->textPresentation = $textPresentation;
        return $this;
    }

    /**
     * Gets as concentrationRatio
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getConcentrationRatio()
    {
        return $this->concentrationRatio;
    }

    /**
     * Sets a new concentrationRatio
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $concentrationRatio
     * @return self
     */
    public function setConcentrationRatio(?\TKusy\Hl7Fhir\R5\RatioType $concentrationRatio = null)
    {
        $this->concentrationRatio = $concentrationRatio;
        return $this;
    }

    /**
     * Gets as concentrationRatioRange
     *
     * @return \TKusy\Hl7Fhir\R5\RatioRangeType
     */
    public function getConcentrationRatioRange()
    {
        return $this->concentrationRatioRange;
    }

    /**
     * Sets a new concentrationRatioRange
     *
     * @param \TKusy\Hl7Fhir\R5\RatioRangeType $concentrationRatioRange
     * @return self
     */
    public function setConcentrationRatioRange(?\TKusy\Hl7Fhir\R5\RatioRangeType $concentrationRatioRange = null)
    {
        $this->concentrationRatioRange = $concentrationRatioRange;
        return $this;
    }

    /**
     * Gets as concentrationCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getConcentrationCodeableConcept()
    {
        return $this->concentrationCodeableConcept;
    }

    /**
     * Sets a new concentrationCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $concentrationCodeableConcept
     * @return self
     */
    public function setConcentrationCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $concentrationCodeableConcept = null)
    {
        $this->concentrationCodeableConcept = $concentrationCodeableConcept;
        return $this;
    }

    /**
     * Gets as concentrationQuantity
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getConcentrationQuantity()
    {
        return $this->concentrationQuantity;
    }

    /**
     * Sets a new concentrationQuantity
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $concentrationQuantity
     * @return self
     */
    public function setConcentrationQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $concentrationQuantity = null)
    {
        $this->concentrationQuantity = $concentrationQuantity;
        return $this;
    }

    /**
     * Gets as textConcentration
     *
     * A textual represention of either the whole of the concentration strength or a part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getTextConcentration()
    {
        return $this->textConcentration;
    }

    /**
     * Sets a new textConcentration
     *
     * A textual represention of either the whole of the concentration strength or a part of it - with the rest being in Strength.concentration as a ratio.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $textConcentration
     * @return self
     */
    public function setTextConcentration(?\TKusy\Hl7Fhir\R5\StringType $textConcentration = null)
    {
        $this->textConcentration = $textConcentration;
        return $this;
    }

    /**
     * Gets as basis
     *
     * A code that indicates if the strength is, for example, based on the ingredient substance as stated or on the substance base (when the ingredient is a salt).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getBasis()
    {
        return $this->basis;
    }

    /**
     * Sets a new basis
     *
     * A code that indicates if the strength is, for example, based on the ingredient substance as stated or on the substance base (when the ingredient is a salt).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $basis
     * @return self
     */
    public function setBasis(?\TKusy\Hl7Fhir\R5\CodeableConceptType $basis = null)
    {
        $this->basis = $basis;
        return $this;
    }

    /**
     * Gets as measurementPoint
     *
     * For when strength is measured at a particular point or distance. There are products where strength is measured at a particular point. For example, the strength of the ingredient in some inhalers is measured at a particular position relative to the point of aerosolization.
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
     * For when strength is measured at a particular point or distance. There are products where strength is measured at a particular point. For example, the strength of the ingredient in some inhalers is measured at a particular position relative to the point of aerosolization.
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

    /**
     * Adds as referenceStrength
     *
     * Strength expressed in terms of a reference substance. For when the ingredient strength is additionally expressed as equivalent to the strength of some other closely related substance (e.g. salt vs. base). Reference strength represents the strength (quantitative composition) of the active moiety of the active substance. There are situations when the active substance and active moiety are different, therefore both a strength and a reference strength are needed.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\IngredientReferenceStrengthType $referenceStrength
     */
    public function addToReferenceStrength(\TKusy\Hl7Fhir\R5\IngredientReferenceStrengthType $referenceStrength)
    {
        $this->referenceStrength[] = $referenceStrength;
        return $this;
    }

    /**
     * isset referenceStrength
     *
     * Strength expressed in terms of a reference substance. For when the ingredient strength is additionally expressed as equivalent to the strength of some other closely related substance (e.g. salt vs. base). Reference strength represents the strength (quantitative composition) of the active moiety of the active substance. There are situations when the active substance and active moiety are different, therefore both a strength and a reference strength are needed.
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
     * Strength expressed in terms of a reference substance. For when the ingredient strength is additionally expressed as equivalent to the strength of some other closely related substance (e.g. salt vs. base). Reference strength represents the strength (quantitative composition) of the active moiety of the active substance. There are situations when the active substance and active moiety are different, therefore both a strength and a reference strength are needed.
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
     * Strength expressed in terms of a reference substance. For when the ingredient strength is additionally expressed as equivalent to the strength of some other closely related substance (e.g. salt vs. base). Reference strength represents the strength (quantitative composition) of the active moiety of the active substance. There are situations when the active substance and active moiety are different, therefore both a strength and a reference strength are needed.
     *
     * @return \TKusy\Hl7Fhir\R5\IngredientReferenceStrengthType[]
     */
    public function getReferenceStrength()
    {
        return $this->referenceStrength;
    }

    /**
     * Sets a new referenceStrength
     *
     * Strength expressed in terms of a reference substance. For when the ingredient strength is additionally expressed as equivalent to the strength of some other closely related substance (e.g. salt vs. base). Reference strength represents the strength (quantitative composition) of the active moiety of the active substance. There are situations when the active substance and active moiety are different, therefore both a strength and a reference strength are needed.
     *
     * @param \TKusy\Hl7Fhir\R5\IngredientReferenceStrengthType[] $referenceStrength
     * @return self
     */
    public function setReferenceStrength(array $referenceStrength = null)
    {
        $this->referenceStrength = $referenceStrength;
        return $this;
    }


}

