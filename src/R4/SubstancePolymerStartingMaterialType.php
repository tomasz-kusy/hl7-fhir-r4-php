<?php

namespace TKusy\Hl7Fhir\R4;

/**
 * Class representing SubstancePolymerStartingMaterialType
 *
 * Todo.
 * XSD Type: SubstancePolymer.StartingMaterial
 */
class SubstancePolymerStartingMaterialType extends BackboneElementType
{

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $material
     */
    private $material = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\BooleanType $isDefining
     */
    private $isDefining = null;

    /**
     * Todo.
     *
     * @var \TKusy\Hl7Fhir\R4\SubstanceAmountType $amount
     */
    private $amount = null;

    /**
     * Gets as material
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Sets a new material
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $material
     * @return self
     */
    public function setMaterial(\TKusy\Hl7Fhir\R4\CodeableConceptType $material)
    {
        $this->material = $material;
        return $this;
    }

    /**
     * Gets as type
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\CodeableConceptType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7Fhir\R4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as isDefining
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\BooleanType
     */
    public function getIsDefining()
    {
        return $this->isDefining;
    }

    /**
     * Sets a new isDefining
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\BooleanType $isDefining
     * @return self
     */
    public function setIsDefining(\TKusy\Hl7Fhir\R4\BooleanType $isDefining)
    {
        $this->isDefining = $isDefining;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Todo.
     *
     * @return \TKusy\Hl7Fhir\R4\SubstanceAmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Todo.
     *
     * @param \TKusy\Hl7Fhir\R4\SubstanceAmountType $amount
     * @return self
     */
    public function setAmount(\TKusy\Hl7Fhir\R4\SubstanceAmountType $amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

