<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing SubstancePolymerStartingMaterialType
 *
 * Properties of a substance specific to it being a polymer.
 * XSD Type: SubstancePolymer.StartingMaterial
 */
class SubstancePolymerStartingMaterialType extends BackboneElementType
{

    /**
     * The type of substance for this starting material.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     */
    private $code = null;

    /**
     * Substance high level category, e.g. chemical substance.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     */
    private $category = null;

    /**
     * Used to specify whether the attribute described is a defining element for the unique identification of the polymer.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $isDefining
     */
    private $isDefining = null;

    /**
     * A percentage.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $amount
     */
    private $amount = null;

    /**
     * Gets as code
     *
     * The type of substance for this starting material.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The type of substance for this starting material.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $code
     * @return self
     */
    public function setCode(?\TKusy\Hl7Fhir\R5\CodeableConceptType $code = null)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as category
     *
     * Substance high level category, e.g. chemical substance.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Substance high level category, e.g. chemical substance.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $category
     * @return self
     */
    public function setCategory(?\TKusy\Hl7Fhir\R5\CodeableConceptType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as isDefining
     *
     * Used to specify whether the attribute described is a defining element for the unique identification of the polymer.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getIsDefining()
    {
        return $this->isDefining;
    }

    /**
     * Sets a new isDefining
     *
     * Used to specify whether the attribute described is a defining element for the unique identification of the polymer.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $isDefining
     * @return self
     */
    public function setIsDefining(?\TKusy\Hl7Fhir\R5\BooleanType $isDefining = null)
    {
        $this->isDefining = $isDefining;
        return $this;
    }

    /**
     * Gets as amount
     *
     * A percentage.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A percentage.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $amount
     * @return self
     */
    public function setAmount(?\TKusy\Hl7Fhir\R5\QuantityType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }


}

