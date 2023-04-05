<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionOrderAdditiveType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.Additive
 */
class NutritionOrderAdditiveType extends BackboneElementType
{

    /**
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $type
     */
    private $type = null;

    /**
     * The product or brand name of the type of modular component to be added to the formula.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $productName
     */
    private $productName = null;

    /**
     * The amount of additive to be given in addition or to be mixed in with the base formula.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Gets as type
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableReferenceType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates the type of modular component such as protein, carbohydrate, fat or fiber to be provided in addition to or mixed with the base formula.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $type
     * @return self
     */
    public function setType(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as productName
     *
     * The product or brand name of the type of modular component to be added to the formula.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets a new productName
     *
     * The product or brand name of the type of modular component to be added to the formula.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $productName
     * @return self
     */
    public function setProductName(?\TKusy\Hl7Fhir\R5\StringType $productName = null)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount of additive to be given in addition or to be mixed in with the base formula.
     *
     * @return \TKusy\Hl7Fhir\R5\QuantityType
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The amount of additive to be given in addition or to be mixed in with the base formula.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

