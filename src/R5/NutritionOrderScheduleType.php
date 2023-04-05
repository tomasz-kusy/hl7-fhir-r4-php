<?php

namespace TKusy\Hl7Fhir\R5;

/**
 * Class representing NutritionOrderScheduleType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.Schedule
 */
class NutritionOrderScheduleType extends BackboneElementType
{

    /**
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
     *
     * @var \TKusy\Hl7Fhir\R5\TimingType[] $timing
     */
    private $timing = null;

    /**
     * Indicates whether the product is only taken when needed within a specific dosing schedule.
     *
     * @var \TKusy\Hl7Fhir\R5\BooleanType $asNeeded
     */
    private $asNeeded = null;

    /**
     * Indicates whether the product is only taken based on a precondition for taking the product.
     *
     * @var \TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededFor
     */
    private $asNeededFor = null;

    /**
     * Adds as timing
     *
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
     *
     * @return self
     * @param \TKusy\Hl7Fhir\R5\TimingType $timing
     */
    public function addToTiming(\TKusy\Hl7Fhir\R5\TimingType $timing)
    {
        $this->timing[] = $timing;
        return $this;
    }

    /**
     * isset timing
     *
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTiming($index)
    {
        return isset($this->timing[$index]);
    }

    /**
     * unset timing
     *
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTiming($index)
    {
        unset($this->timing[$index]);
    }

    /**
     * Gets as timing
     *
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
     *
     * @return \TKusy\Hl7Fhir\R5\TimingType[]
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * Sets a new timing
     *
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
     *
     * @param \TKusy\Hl7Fhir\R5\TimingType[] $timing
     * @return self
     */
    public function setTiming(array $timing = null)
    {
        $this->timing = $timing;
        return $this;
    }

    /**
     * Gets as asNeeded
     *
     * Indicates whether the product is only taken when needed within a specific dosing schedule.
     *
     * @return \TKusy\Hl7Fhir\R5\BooleanType
     */
    public function getAsNeeded()
    {
        return $this->asNeeded;
    }

    /**
     * Sets a new asNeeded
     *
     * Indicates whether the product is only taken when needed within a specific dosing schedule.
     *
     * @param \TKusy\Hl7Fhir\R5\BooleanType $asNeeded
     * @return self
     */
    public function setAsNeeded(?\TKusy\Hl7Fhir\R5\BooleanType $asNeeded = null)
    {
        $this->asNeeded = $asNeeded;
        return $this;
    }

    /**
     * Gets as asNeededFor
     *
     * Indicates whether the product is only taken based on a precondition for taking the product.
     *
     * @return \TKusy\Hl7Fhir\R5\CodeableConceptType
     */
    public function getAsNeededFor()
    {
        return $this->asNeededFor;
    }

    /**
     * Sets a new asNeededFor
     *
     * Indicates whether the product is only taken based on a precondition for taking the product.
     *
     * @param \TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededFor
     * @return self
     */
    public function setAsNeededFor(?\TKusy\Hl7Fhir\R5\CodeableConceptType $asNeededFor = null)
    {
        $this->asNeededFor = $asNeededFor;
        return $this;
    }


}

