<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\RatioType $quantity
     */
    private $quantity = null;

    /**
     * Another substance that is a component of this substance. (choose any one of substance*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $substanceCodeableConcept
     */
    private $substanceCodeableConcept = null;

    /**
     * Another substance that is a component of this substance. (choose any one of substance*, but only one)
     *
     * @var \TKusy\Hl7FhirR4\ReferenceType $substanceReference
     */
    private $substanceReference = null;

    /**
     * Gets as quantity
     *
     * The amount of the ingredient in the substance - a concentration ratio.
     *
     * @return \TKusy\Hl7FhirR4\RatioType
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
     * @param \TKusy\Hl7FhirR4\RatioType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\RatioType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as substanceCodeableConcept
     *
     * Another substance that is a component of this substance. (choose any one of substance*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
     */
    public function getSubstanceCodeableConcept()
    {
        return $this->substanceCodeableConcept;
    }

    /**
     * Sets a new substanceCodeableConcept
     *
     * Another substance that is a component of this substance. (choose any one of substance*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $substanceCodeableConcept
     * @return self
     */
    public function setSubstanceCodeableConcept(\TKusy\Hl7FhirR4\CodeableConceptType $substanceCodeableConcept)
    {
        $this->substanceCodeableConcept = $substanceCodeableConcept;
        return $this;
    }

    /**
     * Gets as substanceReference
     *
     * Another substance that is a component of this substance. (choose any one of substance*, but only one)
     *
     * @return \TKusy\Hl7FhirR4\ReferenceType
     */
    public function getSubstanceReference()
    {
        return $this->substanceReference;
    }

    /**
     * Sets a new substanceReference
     *
     * Another substance that is a component of this substance. (choose any one of substance*, but only one)
     *
     * @param \TKusy\Hl7FhirR4\ReferenceType $substanceReference
     * @return self
     */
    public function setSubstanceReference(\TKusy\Hl7FhirR4\ReferenceType $substanceReference)
    {
        $this->substanceReference = $substanceReference;
        return $this;
    }


}

