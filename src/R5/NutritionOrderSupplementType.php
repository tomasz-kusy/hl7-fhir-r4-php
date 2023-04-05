<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionOrderSupplementType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.Supplement
 */
class NutritionOrderSupplementType extends BackboneElementType
{

    /**
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableReferenceType $type
     */
    private $type = null;

    /**
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $productName
     */
    private $productName = null;

    /**
     * Schedule information for a supplement.
     *
     * @var \TKusy\Hl7Fhir\R5\NutritionOrderSchedule1Type $schedule
     */
    private $schedule = null;

    /**
     * The amount of the nutritional supplement to be given.
     *
     * @var \TKusy\Hl7Fhir\R5\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Free text or additional instructions or information pertaining to the oral supplement.
     *
     * @var \TKusy\Hl7Fhir\R5\StringType $instruction
     */
    private $instruction = null;

    /**
     * Gets as type
     *
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
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
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
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
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
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
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
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
     * Gets as schedule
     *
     * Schedule information for a supplement.
     *
     * @return \TKusy\Hl7Fhir\R5\NutritionOrderSchedule1Type
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Schedule information for a supplement.
     *
     * @param \TKusy\Hl7Fhir\R5\NutritionOrderSchedule1Type $schedule
     * @return self
     */
    public function setSchedule(?\TKusy\Hl7Fhir\R5\NutritionOrderSchedule1Type $schedule = null)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount of the nutritional supplement to be given.
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
     * The amount of the nutritional supplement to be given.
     *
     * @param \TKusy\Hl7Fhir\R5\QuantityType $quantity
     * @return self
     */
    public function setQuantity(?\TKusy\Hl7Fhir\R5\QuantityType $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as instruction
     *
     * Free text or additional instructions or information pertaining to the oral supplement.
     *
     * @return \TKusy\Hl7Fhir\R5\StringType
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Sets a new instruction
     *
     * Free text or additional instructions or information pertaining to the oral supplement.
     *
     * @param \TKusy\Hl7Fhir\R5\StringType $instruction
     * @return self
     */
    public function setInstruction(?\TKusy\Hl7Fhir\R5\StringType $instruction = null)
    {
        $this->instruction = $instruction;
        return $this;
    }


}

