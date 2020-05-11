<?php

namespace TKusy\Hl7FhirR4;

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
     * @var \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    private $type = null;

    /**
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     *
     * @var \TKusy\Hl7FhirR4\StringType $productName
     */
    private $productName = null;

    /**
     * The time period and frequency at which the supplement(s) should be given. The supplement should be given for the combination of all schedules if more than one schedule is present.
     *
     * @var \TKusy\Hl7FhirR4\TimingType[] $schedule
     */
    private $schedule = null;

    /**
     * The amount of the nutritional supplement to be given.
     *
     * @var \TKusy\Hl7FhirR4\QuantityType $quantity
     */
    private $quantity = null;

    /**
     * Free text or additional instructions or information pertaining to the oral supplement.
     *
     * @var \TKusy\Hl7FhirR4\StringType $instruction
     */
    private $instruction = null;

    /**
     * Gets as type
     *
     * The kind of nutritional supplement product required such as a high protein or pediatric clear liquid supplement.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType
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
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     * @return self
     */
    public function setType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as productName
     *
     * The product or brand name of the nutritional supplement such as "Acme Protein Shake".
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $productName
     * @return self
     */
    public function setProductName(\TKusy\Hl7FhirR4\StringType $productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Adds as schedule
     *
     * The time period and frequency at which the supplement(s) should be given. The supplement should be given for the combination of all schedules if more than one schedule is present.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\TimingType $schedule
     */
    public function addToSchedule(\TKusy\Hl7FhirR4\TimingType $schedule)
    {
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * isset schedule
     *
     * The time period and frequency at which the supplement(s) should be given. The supplement should be given for the combination of all schedules if more than one schedule is present.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSchedule($index)
    {
        return isset($this->schedule[$index]);
    }

    /**
     * unset schedule
     *
     * The time period and frequency at which the supplement(s) should be given. The supplement should be given for the combination of all schedules if more than one schedule is present.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSchedule($index)
    {
        unset($this->schedule[$index]);
    }

    /**
     * Gets as schedule
     *
     * The time period and frequency at which the supplement(s) should be given. The supplement should be given for the combination of all schedules if more than one schedule is present.
     *
     * @return \TKusy\Hl7FhirR4\TimingType[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * The time period and frequency at which the supplement(s) should be given. The supplement should be given for the combination of all schedules if more than one schedule is present.
     *
     * @param \TKusy\Hl7FhirR4\TimingType[] $schedule
     * @return self
     */
    public function setSchedule(array $schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The amount of the nutritional supplement to be given.
     *
     * @return \TKusy\Hl7FhirR4\QuantityType
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
     * @param \TKusy\Hl7FhirR4\QuantityType $quantity
     * @return self
     */
    public function setQuantity(\TKusy\Hl7FhirR4\QuantityType $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as instruction
     *
     * Free text or additional instructions or information pertaining to the oral supplement.
     *
     * @return \TKusy\Hl7FhirR4\StringType
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
     * @param \TKusy\Hl7FhirR4\StringType $instruction
     * @return self
     */
    public function setInstruction(\TKusy\Hl7FhirR4\StringType $instruction)
    {
        $this->instruction = $instruction;
        return $this;
    }


}

