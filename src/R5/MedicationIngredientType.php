<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationIngredientType
 *
 * This resource is primarily used for the identification and definition of a medication, including ingredients, for the purposes of prescribing, dispensing, and administering a medication as well as for making statements about medication use.
 * XSD Type: Medication.Ingredient
 */
class MedicationIngredientType extends BackboneElementType
{

    /**
     * The ingredient (substance or medication) that the ingredient.strength relates to. This is represented as a concept from a code system or described in another resource (Substance or Medication).
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     */
    private $item = null;

    /**
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isActive
     */
    private $isActive = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\RatioType $strengthRatio
     */
    private $strengthRatio = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $strengthCodeableConcept
     */
    private $strengthCodeableConcept = null;

    /**
     * @var \TKusy\Hl7Fhir\R5\QuantityType $strengthQuantity
     */
    private $strengthQuantity = null;

    /**
     * Gets as item
     *
     * The ingredient (substance or medication) that the ingredient.strength relates to. This is represented as a concept from a code system or described in another resource (Substance or Medication).
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * The ingredient (substance or medication) that the ingredient.strength relates to. This is represented as a concept from a code system or described in another resource (Substance or Medication).
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     * @return self
     */
    public function setItem(\TKusy\Hl7Fhir\R5\CodeableReferenceType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as isActive
     *
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
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
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isActive
     * @return self
     */
    public function setIsActive(?\TKusy\Hl7Fhir\R5\BooleanType $isActive = null)
    {
        $this->isActive = $isActive;
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
     * Gets as strengthCodeableConcept
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getStrengthCodeableConcept()
    {
        return $this->strengthCodeableConcept;
    }

    /**
     * Sets a new strengthCodeableConcept
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $strengthCodeableConcept
     * @return self
     */
    public function setStrengthCodeableConcept(?\TKusy\Hl7Fhir\R5\CodeableConceptType $strengthCodeableConcept = null)
    {
        $this->strengthCodeableConcept = $strengthCodeableConcept;
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


}

