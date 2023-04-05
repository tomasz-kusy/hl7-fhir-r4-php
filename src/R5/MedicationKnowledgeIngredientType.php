<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing MedicationKnowledgeIngredientType
 *
 * Information about a medication that is used to support knowledge.
 * XSD Type: MedicationKnowledge.Ingredient
 */
class MedicationKnowledgeIngredientType extends BackboneElementType
{

    /**
     * A reference to the resource that provides information about the ingredient.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     */
    private $item = null;

    /**
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     */
    private $type = null;

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
     * A reference to the resource that provides information about the ingredient.
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
     * A reference to the resource that provides information about the ingredient.
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
     * Gets as type
     *
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indication of whether this ingredient affects the therapeutic action of the drug.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableConceptType $type = null)
    {
        $this->type = $type;
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

