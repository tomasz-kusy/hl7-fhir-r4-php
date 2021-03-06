<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing MedicationKnowledgeIngredientType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Ingredient
 */
class MedicationKnowledgeIngredientType extends BackboneElementType
{

    /**
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $itemCodeableConcept
     */
    private $itemCodeableConcept = null;

    /**
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     *
     * @var \TKusy\Hl7Fhir\R4\ReferenceType $itemReference
     */
    private $itemReference = null;

    /**
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $isActive
     */
    private $isActive = null;

    /**
     * Specifies how many (or how much) of the items there are in this Medication. For example, 250 mg per tablet. This is expressed as a ratio where the numerator is 250mg and the denominator is 1 tablet.
     *
     * @var \TKusy\Hl7Fhir\R4\RatioType $strength
     */
    private $strength = null;

    /**
     * Gets as itemCodeableConcept
     *
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getItemCodeableConcept()
    {
        return $this->itemCodeableConcept;
    }

    /**
     * Sets a new itemCodeableConcept
     *
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $itemCodeableConcept
     * @return self
     */
    public function setItemCodeableConcept(\TKusy\Hl7Fhir\R4\CodeableConceptType $itemCodeableConcept)
    {
        $this->itemCodeableConcept = $itemCodeableConcept;
        return $this;
    }

    /**
     * Gets as itemReference
     *
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     *
     * @return \TKusy\Hl7Fhir\R4\ReferenceType
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * The actual ingredient - either a substance (simple ingredient) or another medication. (choose any one of item*, but only one)
     *
     * @param \TKusy\Hl7Fhir\R4\ReferenceType $itemReference
     * @return self
     */
    public function setItemReference(\TKusy\Hl7Fhir\R4\ReferenceType $itemReference)
    {
        $this->itemReference = $itemReference;
        return $this;
    }

    /**
     * Gets as isActive
     *
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Sets a new isActive
     *
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $isActive
     * @return self
     */
    public function setIsActive(\TKusy\Hl7Fhir\R4\BooleanType $isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Gets as strength
     *
     * Specifies how many (or how much) of the items there are in this Medication. For example, 250 mg per tablet. This is expressed as a ratio where the numerator is 250mg and the denominator is 1 tablet.
     *
     * @return \TKusy\Hl7Fhir\R4\RatioType
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Sets a new strength
     *
     * Specifies how many (or how much) of the items there are in this Medication. For example, 250 mg per tablet. This is expressed as a ratio where the numerator is 250mg and the denominator is 1 tablet.
     *
     * @param \TKusy\Hl7Fhir\R4\RatioType $strength
     * @return self
     */
    public function setStrength(\TKusy\Hl7Fhir\R4\RatioType $strength)
    {
        $this->strength = $strength;
        return $this;
    }


}

