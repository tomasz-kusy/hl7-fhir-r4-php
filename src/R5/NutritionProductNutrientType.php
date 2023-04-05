<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionProductNutrientType
 *
 * A food or supplement that is consumed by patients.
 * XSD Type: NutritionProduct.Nutrient
 */
class NutritionProductNutrientType extends BackboneElementType
{

    /**
     * The (relevant) nutrients in the product.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     */
    private $item = null;

    /**
     * The amount of nutrient expressed in one or more units: X per pack / per serving / per dose.
     *
     * @var \TKusy\Hl7Fhir\R5\RatioType[] $amount
     */
    private $amount = null;

    /**
     * Gets as item
     *
     * The (relevant) nutrients in the product.
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
     * The (relevant) nutrients in the product.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableReferenceType $item
     * @return self
     */
    public function setItem(?\TKusy\Hl7Fhir\R5\CodeableReferenceType $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as amount
     *
     * The amount of nutrient expressed in one or more units: X per pack / per serving / per dose.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\RatioType $amount
     */
    public function addToAmount(\TKusy\Hl7Fhir\R5\RatioType $amount)
    {
        $this->amount[] = $amount;
        return $this;
    }

    /**
     * isset amount
     *
     * The amount of nutrient expressed in one or more units: X per pack / per serving / per dose.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmount($index)
    {
        return isset($this->amount[$index]);
    }

    /**
     * unset amount
     *
     * The amount of nutrient expressed in one or more units: X per pack / per serving / per dose.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmount($index)
    {
        unset($this->amount[$index]);
    }

    /**
     * Gets as amount
     *
     * The amount of nutrient expressed in one or more units: X per pack / per serving / per dose.
     *
     * @return \TKusy\Hl7Fhir\R5\RatioType[]
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The amount of nutrient expressed in one or more units: X per pack / per serving / per dose.
     *
     * @param \TKusy\Hl7Fhir\R5\RatioType[] $amount
     * @return self
     */
    public function setAmount(array $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }


}

