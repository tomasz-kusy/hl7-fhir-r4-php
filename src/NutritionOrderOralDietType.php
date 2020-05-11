<?php

namespace TKusy\Hl7FhirR4;

/**
 * Class representing NutritionOrderOralDietType
 *
 * A request to supply a diet, formula feeding (enteral) or oral nutritional supplement to a patient/resident.
 * XSD Type: NutritionOrder.OralDiet
 */
class NutritionOrderOralDietType extends BackboneElementType
{

    /**
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     */
    private $type = null;

    /**
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
     *
     * @var \TKusy\Hl7FhirR4\TimingType[] $schedule
     */
    private $schedule = null;

    /**
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @var \TKusy\Hl7FhirR4\NutritionOrderNutrientType[] $nutrient
     */
    private $nutrient = null;

    /**
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     *
     * @var \TKusy\Hl7FhirR4\NutritionOrderTextureType[] $texture
     */
    private $texture = null;

    /**
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     *
     * @var \TKusy\Hl7FhirR4\CodeableConceptType[] $fluidConsistencyType
     */
    private $fluidConsistencyType = null;

    /**
     * Free text or additional instructions or information pertaining to the oral diet.
     *
     * @var \TKusy\Hl7FhirR4\StringType $instruction
     */
    private $instruction = null;

    /**
     * Adds as type
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $type
     */
    public function addToType(\TKusy\Hl7FhirR4\CodeableConceptType $type)
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The kind of diet or dietary restriction such as fiber restricted diet or diabetic diet.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $type
     * @return self
     */
    public function setType(array $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as schedule
     *
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
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
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
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
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
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
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
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
     * The time period and frequency at which the diet should be given. The diet should be given for the combination of all schedules if more than one schedule is present.
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
     * Adds as nutrient
     *
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\NutritionOrderNutrientType $nutrient
     */
    public function addToNutrient(\TKusy\Hl7FhirR4\NutritionOrderNutrientType $nutrient)
    {
        $this->nutrient[] = $nutrient;
        return $this;
    }

    /**
     * isset nutrient
     *
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNutrient($index)
    {
        return isset($this->nutrient[$index]);
    }

    /**
     * unset nutrient
     *
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNutrient($index)
    {
        unset($this->nutrient[$index]);
    }

    /**
     * Gets as nutrient
     *
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @return \TKusy\Hl7FhirR4\NutritionOrderNutrientType[]
     */
    public function getNutrient()
    {
        return $this->nutrient;
    }

    /**
     * Sets a new nutrient
     *
     * Class that defines the quantity and type of nutrient modifications (for example carbohydrate, fiber or sodium) required for the oral diet.
     *
     * @param \TKusy\Hl7FhirR4\NutritionOrderNutrientType[] $nutrient
     * @return self
     */
    public function setNutrient(array $nutrient)
    {
        $this->nutrient = $nutrient;
        return $this;
    }

    /**
     * Adds as texture
     *
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\NutritionOrderTextureType $texture
     */
    public function addToTexture(\TKusy\Hl7FhirR4\NutritionOrderTextureType $texture)
    {
        $this->texture[] = $texture;
        return $this;
    }

    /**
     * isset texture
     *
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTexture($index)
    {
        return isset($this->texture[$index]);
    }

    /**
     * unset texture
     *
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTexture($index)
    {
        unset($this->texture[$index]);
    }

    /**
     * Gets as texture
     *
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     *
     * @return \TKusy\Hl7FhirR4\NutritionOrderTextureType[]
     */
    public function getTexture()
    {
        return $this->texture;
    }

    /**
     * Sets a new texture
     *
     * Class that describes any texture modifications required for the patient to safely consume various types of solid foods.
     *
     * @param \TKusy\Hl7FhirR4\NutritionOrderTextureType[] $texture
     * @return self
     */
    public function setTexture(array $texture)
    {
        $this->texture = $texture;
        return $this;
    }

    /**
     * Adds as fluidConsistencyType
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     *
     * @return self
     * @param \TKusy\Hl7FhirR4\CodeableConceptType $fluidConsistencyType
     */
    public function addToFluidConsistencyType(\TKusy\Hl7FhirR4\CodeableConceptType $fluidConsistencyType)
    {
        $this->fluidConsistencyType[] = $fluidConsistencyType;
        return $this;
    }

    /**
     * isset fluidConsistencyType
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFluidConsistencyType($index)
    {
        return isset($this->fluidConsistencyType[$index]);
    }

    /**
     * unset fluidConsistencyType
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFluidConsistencyType($index)
    {
        unset($this->fluidConsistencyType[$index]);
    }

    /**
     * Gets as fluidConsistencyType
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     *
     * @return \TKusy\Hl7FhirR4\CodeableConceptType[]
     */
    public function getFluidConsistencyType()
    {
        return $this->fluidConsistencyType;
    }

    /**
     * Sets a new fluidConsistencyType
     *
     * The required consistency (e.g. honey-thick, nectar-thick, thin, thickened.) of liquids or fluids served to the patient.
     *
     * @param \TKusy\Hl7FhirR4\CodeableConceptType[] $fluidConsistencyType
     * @return self
     */
    public function setFluidConsistencyType(array $fluidConsistencyType)
    {
        $this->fluidConsistencyType = $fluidConsistencyType;
        return $this;
    }

    /**
     * Gets as instruction
     *
     * Free text or additional instructions or information pertaining to the oral diet.
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
     * Free text or additional instructions or information pertaining to the oral diet.
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

