<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstanceIngredientType
 *
 * A homogeneous material with a definite composition.
 * XSD Type: Substance.Ingredient
 */
class SubstanceIngredientType extends BackboneElementType
{

    /**
     * The amount of the ingredient in the substance - a concentration ratio.
     *
     * @var \TKusy\Hl7Fhir\R5\RatioType $quantity
     */
    private $quantity = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $substanceCodeableConcept
     */
    private $substanceCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\ReferenceType $substanceReference
     */
    private $substanceReference = null;

    /**
     * Gets as quantity
     *
     * The amount of the ingredient in the substance - a concentration ratio.
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount of the ingredient in the substance - a concentration ratio.
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\RatioType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as substanceCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getSubstanceCodeableConcept()
    {
        return $this->substanceCodeableConcept;
    }

    /**
     * Sets a new substanceCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $substanceCodeableConcept
     * @return self
     */
    public function setSubstanceCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $substanceCodeableConcept = null)
    {
        $this->substanceCodeableConcept = $substanceCodeableConcept;
        return $this;
    }

    /**
     * Gets as substanceReference
     *
     * @return \TKusy\Hl7Fhir\R5\ReferenceType
     */
    public function getSubstanceReference()
    {
        return $this->substanceReference;
    }

    /**
     * Sets a new substanceReference
     *
     * @param \TKusy\Hl7Fhir\R5\ReferenceType $substanceReference
     * @return self
     */
    public function setSubstanceReference(?\TKusy\Hl7Fhir\R5\ReferenceType $substanceReference = null)
    {
        $this->substanceReference = $substanceReference;
        return $this;
    }


}

